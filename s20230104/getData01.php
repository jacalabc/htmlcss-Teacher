<?php
    function dd ($data){
        echo '<pre>';
        print_r($data);
        echo '</pre>';
    }

    // $data = $_GET;
    // $data = $_POST;
    // dd($data);
    // echo "123";
    // $age = array("Peter"=>35, "Ben"=>37, "Joe"=>43);
    echo json_encode($data);
    
?>