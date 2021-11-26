<?php
    require('db.php');
    session_start();

    if(isset($_POST['delete'])){
        $item_name = $_POST['item_name'];

        $sqldelete = "DELETE FROM inventory WHERE item_name='$item_name'";
        $conn->query($sqldelete);

        header("location:inventorylist.php");
    }
?>