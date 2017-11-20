<?php
include '../src/Medoo.php';
set_time_limit(0);
$database = new Medoo\Medoo([
    'database_type' => 'mysql',
    'database_name' => 'test1',
    'server' => 'localhost',
    'username' => 'root',
    'password' => 'lcp0578',
    'charset' => 'UTF8'
]);

$orders = $database->select('pay_order', [
    'id'
], [
    'id[>]' => 15
]);
$member = $database->select('cheng_member', [
    'userid',
    'username',
    'truename'
], [
    'hamlet' => 318
]);
foreach ($orders as $key => $val) {
    $result = $database->update('pay_order', [
        'user_id' => $member[$key]['userid'],
        'username' => $member[$key]['username'],
        'truename' => $member[$key]['truename']
    ], [
        'id' => $val['id']
    ]);
    
    echo 1;
    echo '<br>';
}