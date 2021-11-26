<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>123200049</title>

        <style>
            .header-title
            {
                text-align : center;
                background-color : gray;
                padding : 20px;
                color : white;
            }

            .header-menu
            {
                background-color : lightgray;
                padding : 20px;
                color : white;
            }
            .header-menu li
            {
                list-style : none;
                float : left;
                padding : 0 10px;
            }

            .main
            {
                text-align : center;
            }

            .main-title
            {
                padding : 20px;
            }
        </style>
    </head>

    <body>
        <div class = "header">
            <div class = "header-title">LIST OF INVENTORY<br>EVERYTHING OFFICE</div>

            <div class = "header-menu">
                <ul>
                    <li><a href = "home.php">Home</a></li>
                    <li><a href = "inventorylist.php">Inventory List</a></li>
                    <li><a href = "categorylist.php">List per Category</a></li>
                </ul>
            </div>
        </div>

        <div class = "main">
            <div class = "main-title">
                <h1>List per Category</h1>
            </div>
        </div>
    </body>
</html>