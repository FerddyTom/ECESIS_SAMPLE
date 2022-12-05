<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
$data = array(
    array(
    'id' => '1',
    'name' => 'Bandung'
    ),
    array(
    'id' => '2',
    'name' => 'Jakarta'
    ),
    array(
    'id' => '3',
    'name' => 'Surabaya'
    ),
    );

    if(!empty($_POST['name']) && !empty($_POST['id'])) {
        // New Data Input
        $newdata = array(
        'id' => $_POST['id'],
       //key           value        pair
        'name' => $_POST['name']

        );
        // Adding  Data
        $data[] = $newdata;
        
        //fetch New Data with existing data
        foreach($data as $d) {
        $result['city'][] = array(
        'id' => $d['id'],
        'name' => $d['name'],
        );
        }
        $result['status'] = 'success';
        }
        else {
            //fetch existing array data 
        foreach($data as $d) {
        $result['city'][] = array(
        'id' => $d['id'],
        'name' => $d['name'],
        );
        }
        $result['status'] = 'success';
        }
        http_response_code(200);
        echo json_encode($result);
?>