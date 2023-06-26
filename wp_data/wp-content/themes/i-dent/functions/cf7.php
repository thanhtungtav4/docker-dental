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
            return "Không xác định";
        }
    }
    