<?php
function my_custom_action_wpcf7_before_send_mail( $contact_form ) {
  global $wpdb;
  $now = current_time( 'mysql' );
  $submission = WPCF7_Submission::get_instance();
  $form_data = $submission ? $submission->get_posted_data() : array();
  $table_name = $wpdb->prefix . 'db7_forms_spam';
  $ip = get_client_ip();
  $data = array(
    'form_ip'   => $ip,
    'form_date' => $now,
  );
  $format = array( '%s', '%s' );
  $wpdb->insert( $table_name, $data, $format );
  error_log( 'Inserted ID: ' . $wpdb->insert_id );
}
add_action( 'wpcf7_before_send_mail', 'my_custom_action_wpcf7_before_send_mail', 10, 1 );

function count_form_ip_submissions_in_24h( $ip ) {
  global $wpdb;
  $table_name = $wpdb->prefix . 'db7_forms_spam';
  $sql = "SELECT COUNT(*) FROM $table_name WHERE form_ip = %s AND form_date >= NOW() - INTERVAL 1 DAY";
  return $wpdb->get_var( $wpdb->prepare( $sql, $ip ) );
}
function checkIsSpam(){
  $submission_count = count_form_ip_submissions_in_24h(get_client_ip());
  return ($submission_count > 1 ) ? true : false;
}
function deleteFormEntry($form_id) {
  global $wpdb;
  $table_name = $wpdb->prefix . 'db7_forms';
  $wpdb->delete($table_name, ['form_post_id' => $form_id]);
}


add_filter('cfdb7_before_save_data', 'cfdb7_before_save_check_spam', 10, 2);
function cfdb7_before_save_check_spam($form_data) {
    $form_data['first_url'] = get_cookie_value('first_url');
    if (checkIsSpam() == true) {
      unset($form_data);
      return 'Spam';
    }
    return $form_data;
}
