<?php 
    // define the wpcf7_posted_data callback 
    function action_wpcf7_posted_data( $array ) { 
        //'checkbox-name' is the name that you gave the field in the CF7 admin.
    $array['remote_ip'] = get_client_ip();
    $array['location_ip'] = get_location();
    $array['url_lead'] = full_url( $_SERVER );
    return $array;
    }; 
    add_filter( 'wpcf7_posted_data', 'action_wpcf7_posted_data', 10, 1 );


    // Function to get the client IP address
    function get_client_ip() {
        $ipaddress = '';
        if (getenv('HTTP_CLIENT_IP'))
            $ipaddress = getenv('HTTP_CLIENT_IP');
        else if(getenv('HTTP_X_FORWARDED_FOR'))
            $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
        else if(getenv('HTTP_X_FORWARDED'))
            $ipaddress = getenv('HTTP_X_FORWARDED');
        else if(getenv('HTTP_FORWARDED_FOR'))
            $ipaddress = getenv('HTTP_FORWARDED_FOR');
        else if(getenv('HTTP_FORWARDED'))
        $ipaddress = getenv('HTTP_FORWARDED');
        else if(getenv('REMOTE_ADDR'))
            $ipaddress = getenv('REMOTE_ADDR');
        else
            $ipaddress = 'UNKNOWN';
        return $ipaddress;
    }

    function get_location(){
        $clien_ip = get_client_ip();
        $geo = unserialize(file_get_contents("http://www.geoplugin.net/php.gp?ip=$clien_ip"));
        $location = $geo["geoplugin_city"] - $geo["geoplugin_countryName"];
        return $location;
    }

    function url_origin( $s, $use_forwarded_host = false )
    {
        $ssl      = ( ! empty( $s['HTTPS'] ) && $s['HTTPS'] == 'on' );
        $sp       = strtolower( $s['SERVER_PROTOCOL'] );
        $protocol = substr( $sp, 0, strpos( $sp, '/' ) ) . ( ( $ssl ) ? 's' : '' );
        $port     = $s['SERVER_PORT'];
        $port     = ( ( ! $ssl && $port=='80' ) || ( $ssl && $port=='443' ) ) ? '' : ':'.$port;
        $host     = ( $use_forwarded_host && isset( $s['HTTP_X_FORWARDED_HOST'] ) ) ? $s['HTTP_X_FORWARDED_HOST'] : ( isset( $s['HTTP_HOST'] ) ? $s['HTTP_HOST'] : null );
        $host     = isset( $host ) ? $host : $s['SERVER_NAME'] . $port;
        return $protocol . '://' . $host;
    }

    function full_url( $s, $use_forwarded_host = false )
    {
        return url_origin( $s, $use_forwarded_host ) . $s['REQUEST_URI'];
    }
