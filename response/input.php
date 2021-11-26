<?php
include 'db.php';

if(isset($_POST['save'])){
$code = $_POST['item_code'];
$name = $_POST['name'];
$amount = $_POST['amount'];
$unit = $_POST['unit'];
$date = $_POST['date'];
$category = $_POST['category'];
$status = $_POST['status'];
$unit_price = $_POST['unit_price'];

$syntax = mysqli_query($conn,"INSERT INTO inventory VALUES('$code','$name','$amount','$unit','$date','$category','$status','$unit_price')");
$conn->query('$syntax');

header("location:inventorylist.php");
}