<?php
function dd($data)
{
    echo '<pre>';
    print_r($data);
    echo '</pre>';
}

// num1
// num2
// option

$data = $_POST;
// dd($data);
echo json_encode($data);
    // echo "123";
    // $age = array("Peter"=>35, "Ben"=>37, "Joe"=>43);
    // echo json_encode($data);
