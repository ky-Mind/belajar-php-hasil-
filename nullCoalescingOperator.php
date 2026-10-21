<?php

#kode tanpa null coalescing Operator
$data =[];

if(isset($data["action"])){
    $action = $data["action"];
} else {
    $action = "nothing";
}

echo $action . PHP_EOL;

#dengan null
$data = [];
$action = $data ['action'] ?? 'nothing';
echo $action . PHP_EOL;

#dengan null dan data nya ada 
$data = [
    "action" => "kia"
];
$action = $data ['action'] ?? 'nothing';
echo $action . PHP_EOL;