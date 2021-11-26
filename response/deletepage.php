<?php
    require('db.php');
    session_start();

    $item_id = $_GET['item_id'];
    $sqldelete = "SELECT * FROM inventory WHERE item_id='$item_id'";
    $select = $conn->query($sqldelete);

    while($show = $select->fetch_object()){
        $item_name = $show->item_id;
    }

?>
<!DOCTYPE html>
<html>
    <head>
        <title>123200049</title>

        <style>
            .main
            {
                text-align : center;
            }

            .main-title
            {
                padding : 20px;
            }

            footer
            {
                position: fixed;
                left: 0;
                bottom: 0;
                width: 100%;
                background-color: #17184F;
                color: white;
                text-align: center;
            }
        </style>
    </head>

    <body>
        <div class = "header">
            <?php include "menu.php" ?>
        </div>

        <div class = "main">
            <h1>Are You Sure Want To Remove The <h1 style="color:blue"><?= $item_name ?></h1></h1>
    <form action="delete.php" method="POST">
        <input type="hidden" name="item_name" value=<?= $item_name ?>>
        <input type="submit" name="delete" value="YES">
    </form>
        </div>

        <footer>
            <p>Inventory Web 2021</p>
        </footer>
    </body>
</html>