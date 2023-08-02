<?php
    // Remove <p> and <br/> from Contact Form 7
    add_filter('wpcf7_autop_or_not', '__return_false');
    // define the wpcf7_posted_data callback
    function action_wpcf7_posted_data( $array ) {
        //'checkbox-name' is the name that you gave the field in the CF7 admin.
        $array['remote_ip'] = get_client_ip();
        $array['location_ip'] = get_location();
        $array['url_lead'] = full_url( $_SERVER );
        $array['is_mobile'] = wp_is_mobile() ? 'Mobile' : 'PC';
        $array['agent'] = get_user_agent();
        $array['first_url'] = get_cookie_value('first_url');
        return $array;
    }
    add_filter( 'wpcf7_posted_data', 'action_wpcf7_posted_data', 10, 1 );


    // Function to get the client IP address
    function get_client_ip() {
        $ipaddress = '';
        if (isset($_SERVER['HTTP_CLIENT_IP']))
            $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
        else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
            $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
        else if(isset($_SERVER['HTTP_X_FORWARDED']))
            $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
        else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
            $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
        else if(isset($_SERVER['HTTP_FORWARDED']))
            $ipaddress = $_SERVER['HTTP_FORWARDED'];
        else if(isset($_SERVER['REMOTE_ADDR']))
            $ipaddress = $_SERVER['REMOTE_ADDR'];
        else
            $ipaddress = 'UNKNOWN';
        return $ipaddress;
    }

    function get_location(){
        $client_ip = get_client_ip();
        $geo = unserialize(file_get_contents("http://www.geoplugin.net/php.gp?ip=$client_ip"));
        $location = $geo["geoplugin_city"] . '-' . $geo["geoplugin_countryName"];
        return !empty($location) ? $location : null;
    }

    function url_origin( $s, $use_forwarded_host = false ) {
        $ssl      = ( ! empty( $s['HTTPS'] ) && $s['HTTPS'] == 'on' );
        $sp       = strtolower( $s['SERVER_PROTOCOL'] );
        $protocol = substr( $sp, 0, strpos( $sp, '/' ) ) . ( ( $ssl ) ? 's' : '' );
        $port     = $s['SERVER_PORT'];
        $port     = ( ( ! $ssl && $port=='80' ) || ( $ssl && $port=='443' ) ) ? '' : ':'.$port;
        $host     = ( $use_forwarded_host && isset( $s['HTTP_X_FORWARDED_HOST'] ) ) ? $s['HTTP_X_FORWARDED_HOST'] : ( isset( $s['HTTP_HOST'] ) ? $s['HTTP_HOST'] : null );
        $host     = isset( $host ) ? $host : $s['SERVER_NAME'] . $port;
        return $protocol . '://' . $host;
    }

    function full_url( $s, $use_forwarded_host = false ) {
        return url_origin( $s, $use_forwarded_host ) . $s['REQUEST_URI'];
    }

    function get_user_agent(){
        $agent = $_SERVER["HTTP_USER_AGENT"];
        if (preg_match('/MSIE (\d+\.\d+);/', $agent)) {
            return "Internet Explorer";
        } else if (preg_match('/Chrome[\/\s](\d+\.\d+)/', $agent)) {
            return "Chrome";
        } else if (preg_match('/Edge\/\d+/', $agent)) {
            return "Edge";
        } else if (preg_match('/Firefox[\/\s](\d+\.\d+)/', $agent)) {
            return "Firefox";
        } else if (preg_match('/OPR[\/\s](\d+\.\d+)/', $agent)) {
            return "Opera";
        } else if (preg_match('/Safari[\/\s](\d+\.\d+)/', $agent)) {
            return "Safari";
        } else {
            return "Kh ng x c d?nh";
        }
    }


    function set_first_url_cookie() {
        if (!isset($_COOKIE['first_url'])) {
            $first_url = $_SERVER['REQUEST_URI'];
            setcookie('first_url', $first_url, time() + 3600, '/');
            $_SESSION['first_url'] = $first_url;
        }
    }
    add_action('init', 'set_first_url_cookie');
    function get_first_url_from_session() {
        if (class_exists('WP_Session')) {
            WP_Session::get_instance();
            // Check if the 'first_url' session variable is set
            if (isset($_SESSION['first_url'])) {
                $first_url = $_SESSION['first_url'];
                return $first_url;
            }
        }
        return false; // Return false if 'first_url' is not set or WP Session Manager is not installed
    }
    function get_cookie_value($cookie_name) {
        if (isset($_COOKIE[$cookie_name])) {
            return $_COOKIE[$cookie_name];
        }
        return false; // Return false if the cookie is not set
    }

    wpcf7_add_shortcode('count_time_promotion', 'wpcf7_custom_date_shortcode_handler');
    function wpcf7_custom_date_shortcode_handler() {
       $targetTime = get_field('time_count_down_popup', 'option');
       $currentTimestamp = time();
       $targetTimestamp = strtotime($targetTime);
       if($targetTimestamp >= $currentTimestamp){
        return  '<div class="timer" id="timer">
                    <div class="timer_block">
                        <div class="var">00</div>
                        <div class="unit">Ng y</div>
                    </div>
                    <div class="timer_block">
                        <div class="var">00</div>
                        <div class="unit">Gi?</div>
                    </div>
                    <div class="timer_block">
                        <div class="var">00</div>
                        <div class="unit">Ph t</div>
                    </div>
                    <div class="timer_block">
                        <div class="var">00</div>
                        <div class="unit">Gi y</div>
                    </div>
                </div>';
       }
        return;
    }



// Add CFDB7 Data Table menu item
function add_cfdb7_menu_item() {
    add_menu_page(
        'CFDB7 Data Table',
        'CFDB7 Data Table',
        'manage_options',
        'cfdb7-data-table',
        'cfdb7_data_table_callback',
        'dashicons-list-view',
        25
    );
}
add_action('admin_menu', 'add_cfdb7_menu_item');
// Handles the removal logic
function removeEntry() {
    if (isset($_POST['entryId'])) {
        $entryId = $_POST['entryId'];

        global $wpdb;
        $table_name = $wpdb->prefix . 'db7_forms';
        $wpdb->delete($table_name, ['form_id' => $entryId]);

        echo 'Entry ' . $entryId . ' removed successfully.';
    } else {
        echo 'Invalid entry ID.';
    }
    wp_die();
}
add_action('wp_ajax_removeEntry', 'removeEntry');
add_action('wp_ajax_nopriv_removeEntry', 'removeEntry');

// Render the data table page
function cfdb7_data_table_callback() {
    global $wpdb;

    // Get the CFDB7 table name
    $table_name = $wpdb->prefix . 'db7_forms';

    // Pagination
    $entries_per_page = 10; // Number of entries per page
    $current_page = isset($_GET['paged']) ? max(1, intval($_GET['paged'])) : 1; // Current page number
    $total_entries = $wpdb->get_var("SELECT COUNT(*) FROM $table_name"); // Total number of entries
    $total_pages = ceil($total_entries / $entries_per_page); // Calculate total number of pages

    // Retrieve data with pagination
    $offset = ($current_page - 1) * $entries_per_page;
    $query = "SELECT * FROM $table_name ORDER BY form_id DESC LIMIT $entries_per_page OFFSET $offset";
    $data = $wpdb->get_results($query, ARRAY_A);
    ?>

    <div class="wrap">
        <h1>CFDB7 Data Table</h1>

        <table class="wp-list-table widefat fixed striped">
            <thead>
                <tr>
                    <th class="manage-column">Actions</th>
                    <th class="manage-column">ID</th>
                    <th class="manage-column">Your Name</th>
                    <th class="manage-column">Telephone</th>
                    <th class="manage-column">Service Attention</th>
                    <th class="manage-column">Location IP</th>
                    <th class="manage-column">URL Lead</th>
                    <th class="manage-column">First URL</th>
                    <th class="manage-column">Is Driver</th>
                    <th class="manage-column">Time Submit</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $entry) :
                    $form_data = unserialize($entry['form_value']);
                    $row_id = 'entry-' . $entry['form_id'];
                ?>
                    <tr id="<?php echo $row_id; ?>">
                        <td><button class="remove-item" data-entry-id="<?php echo $entry['form_id']; ?>">Remove</button></td>
                        <td><?php echo $entry['form_id']; ?></td>
                        <td><?php ($form_data && ($form_data['your-name'] || $form_data['user'])) ? print $form_data['user'] . $form_data['your-name'] : print "N/a" ?></td>
                        <td><?php ($form_data && ($form_data['your-phone'] ||  $form_data['tel'])) ? print  $form_data['tel'] . $form_data['your-phone'] : print "N/a" ?></td>
                        <td><?php ($form_data && $form_data['service-attention']) ? print implode(', ', $form_data['service-attention']) : print "N/a" ?></td>
                        <td><?php ($form_data && $form_data['location_ip']) ? print $form_data['location_ip'] : print "N/a" ?></td>
                        <td><?php ($form_data && $form_data['url_lead']) ? print $form_data['url_lead'] : print "N/a" ?></td>
                        <td><?php ($form_data && $form_data['first_url']) ? print $form_data['first_url'] : print "N/a" ?></td>
                        <td><?php ($form_data && $form_data['is_mobile']) ? print $form_data['is_mobile'] : print "N/a" ?></td>
                        <td><?php echo $entry['form_date']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <!-- Pagination links -->
        <?php if ($total_pages > 1) : ?>
            <div class="pagination">
                <?php
                $current_url = remove_query_arg('paged');
                $format = $current_url ? $current_url . '&paged=%#%' : '?paged=%#%';
                echo paginate_links(array(
                    'base' => $format,
                    'format' => '',
                    'total' => $total_pages,
                    'current' => $current_page,
                    'show_all' => false,
                    'prev_next' => true,
                    'prev_text' => '&laquo; Previous',
                    'next_text' => 'Next &raquo;',
                ));
                ?>
            </div>
        <?php endif; ?>
    </div>

    <script>
        jQuery(document).ready(function($) {
            $('.remove-item').on('click', function() {
                var entryId = $(this).data('entry-id');
                if (confirm('Are you sure you want to remove entry ' + entryId + '?')) {
                    $.ajax({
                        url: '<?php echo admin_url('admin-ajax.php');?>',
                        type: 'POST',
                        data: {
                            action: 'removeEntry',
                            entryId: entryId
                        },
                        success: function(response) {
                            console.log(response);
                            $('#' + 'entry-' + entryId).remove();
                        },
                        error: function(xhr, status, error) {
                            console.log('AJAX error:', error);
                        }
                    });
                }
            });
        });
    </script>

    <?php
}
