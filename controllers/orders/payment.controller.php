<?php
session_start();
require "../../database/database.php";
require "../../models/employee.model.php";

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $res_id = $_GET['id'];
    $user_id = $_SESSION['userid'];
    date_default_timezone_set("Asia/Bangkok");
    $time = date("Y-m-d h:i:sa");
    if(isset($_POST['id'])){
        foreach ($_POST['id'] as $key => $value) {
            $foodname = showFood($value)['Foodname'];
            $qty = $_POST['qty'][$key];
            $total_price = showFood($value)['price'] * $qty;
            orderFood($foodname, $user_id, $qty, $res_id, $total_price, $time);
        }
        header('Location: /order');
    }
}