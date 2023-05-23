<?php
$check_page_exist = getPageByTitle('Tin Tức', 'OBJECT', 'page');
// Check if the page already exists
if(empty($check_page_exist)) {
    $page_id = wp_insert_post(
        array(
        'comment_status' => 'close',
        'ping_status'    => 'close',
        'post_author'    => 1,
        'post_title'     => ucwords('Tin Tức'),
        'post_name'      => strtolower(str_replace(' ', '-', trim('Tin Tức'))),
        'post_status'    => 'publish',
        'post_content'   => 'Content of the page',
        'post_type'      => 'page',
        'post_parent'    => 'id_of_the_parent_page_if_it_available'
        )
    );
}

function getPageByTitle( $page_title, $output = OBJECT, $post_type = 'page' ){

    global $wpdb;

    if ( is_array( $post_type ) ) {
        $post_type           = esc_sql( $post_type );
        $post_type_in_string = "'" . implode( "','", $post_type ) . "'";
        $sql                 = $wpdb->prepare(
            "
            SELECT ID
            FROM $wpdb->posts
            WHERE post_title = %s
            AND post_type IN ($post_type_in_string)
        ",
            $page_title
        );
    } else {
        $sql = $wpdb->prepare(
            "
            SELECT ID
            FROM $wpdb->posts
            WHERE post_title = %s
            AND post_type = %s
        ",
            $page_title,
            $post_type
        );
    }

    $page = $wpdb->get_var( $sql );

    if ( $page ) {
        return get_post( $page, $output );
    }

    return null;
}