<?php
function dd($data)
{
    echo '<pre>';
    print_r($data);
    echo '</pre>';
}

$data = $_GET;
// $data = $_POST;
// $data = $_POST;

$num1 = $data['num1'];
$num2 = $data['num2'];
$result = $num1 + $num2;

// dd($data);
// dd($result);

$myArr = [
    'num1' => $num1,
    'num2' => $num2,
    'result' => $result,
];
// dd($myArr);
echo json_encode($myArr);
    // echo "123";
    // $age = array("Peter"=>35, "Ben"=>37, "Joe"=>43);
    // echo json_encode($data);
