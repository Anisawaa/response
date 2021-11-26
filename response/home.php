<?php 
include "db.php";
session_start();
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
            <div class = "main-title">
                <h1>Welcome</h1>
            </div>

            <div class = "main-content">

                <h2 style="color: blue; text-align: center;"><?= $_SESSION['full_name']?></h2>
            </div>
        </div>

        <footer>
            <p>Inventory Web 2021</p>
        </footer>
    </body>
</html>