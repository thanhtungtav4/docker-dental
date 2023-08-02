
<?php 
/**
 * Hàm lấy toàn bộ dữ liệu từ bảng 'wp_db7_forms'.
 *
 * @return array|bool Mảng dữ liệu nếu thành công, hoặc false nếu không tìm thấy dữ liệu.
 */
function get_all_wp_db7_forms_data() {
    global $wpdb;

    $table_name = $wpdb->prefix . 'db7_forms'; // Tên bảng 'wp_db7_forms'

    // Thực hiện truy vấn để lấy toàn bộ dữ liệu từ bảng
    $results = $wpdb->get_results( "SELECT * FROM $table_name ORDER BY FORM_ID DESC", ARRAY_A );

    // Kiểm tra xem có dữ liệu hay không
    if ( empty( $results ) ) {
        return false;
    }

    return $results;
}

?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


<div class="mv" style="margin-top: 20px;">

</div>
<div class="wrapper" style="padding: 20px;">

    <h1>Customer Form Data</h1>
    <table class="table table-striped table-bordered" id="data-table">
        <thead>
            <th>STT</th>
            <th>USER</th>
            <th>TEL</th>
            <th>LOCATION</th>
            <th style="max-width: 200px;">FIRST URL</th>
            <th style="max-width: 300px;">URL LEAD</th>
            <th>FORM TITLE</th>
            <th>Service Attention</th>
            <th>MESSAGE</th>
            <th>DEVICE</th>
            <th>TIME</th>
        </thead>
        <tbody>
            <?php
                $all_wp_db7_forms_data = get_all_wp_db7_forms_data();

                if ( $all_wp_db7_forms_data ) {
                    // Hiển thị dữ liệu từ cơ sở dữ liệu
                    $stt =1;
                    foreach ( $all_wp_db7_forms_data as $form_data ) {
                        echo '<tr>';
                        echo '<td>' . $stt . '</td>';
                        $stt++;
                        $count = 0;
                        foreach ( $form_data as $field_value ) {
                            if($count==2){
                                $values = unserialize( $field_value );
                                echo '<td>' . $values['user'] . $values['your-name'] . '</td>';
                                echo '<td>' . $values['tel'] . $values['your-phone']. '</td>';
                                echo '<td>' . $values['location_ip'] . '</td>';
                                echo '<td style="max-width: 200px; overflow:auto;"">' . $values['first_url'] . '</td>';
                                echo '<td style="max-width: 300px; overflow:auto;">' . $values['url_lead'] . '</td>';
                                echo '<td>' . $values['form_title'] . '</td>';

                                $services = '';
                                foreach ( $values['service-attention'] as $service ){
                                    $services .= $service;
                                }
                                echo '<td>' . $services . '</td>';

                                echo '<td>' . $values['data_message'] . '</td>';
                                echo '<td>' . $values['is_mobile'] . '</td>';
                                
                            }
                            else if ($count==3){
                                echo '<td>' . $field_value . '</td>';
                            }
                            $count++;
                        }

                        echo '</tr>';
                    }

                } else {
                    echo 'Không có dữ liệu trong bảng.';
                }
            ?>
        </tbody>
    </table>

</div>

<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">

<script type="text/javascript">
    $(document).ready(function () {
      $('#data-table').DataTable();
    });
</script>

