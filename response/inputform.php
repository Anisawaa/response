<?php
include "db.php";
?>

<!DOCTYPE html>
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
                <h1>Add Inventory Data</h1>
            </div>

			<form action = "input.php" method = "post">

                <center>
                    <table>
                        <tr>
                            <td style="background-color:#99CCFF" colspan="2">
                                <center>Add Inventory Data</center>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Item code </td>
                            <td><input type="text" placeholder="item code" name="item_code"></td>
                        </tr>
                        <tr>
                            <td>Name of goods</td>
                            <td><input type="text" placeholder="Name of goods" name="name"></td>
                        </tr>
                        <tr>
                            <td>Amount</td>
                            <td><input type="int" placeholder="Amount" name="amount"></td>
                        </tr>
                        <tr>
                            <td>Unit</td>
                            <td><input type="text" placeholder="Unit" name="unit"></td>
                        </tr>
                        <tr>
                            <td>Coming Date</td>
                            <td><input type="date" name="date"></td>
                        </tr>
                        <tr>
                            <td>Category</td>
                            <td><select name="category">
                                    <option value="Building">Building</option>
                                    <option value="Electronic">Electronic</option>
                                    <option value="Vehicle">Vehicle</option>
                                    <option value="Office stationery">Office stationery</option>
                                </select></td>
                        </tr>
                        <tr>
                            <td>Status</td>
                            <td><input type="radio" value="Well" name="status">Well <input type="radio" value="Maintenance" name="status">Maintenance <input
                                    type="radio" value="Damaged" name="status">Damaged</td>
                        </tr>
                        <tr>
                            <td>Unit price</td>
                            <td><input type="int" placeholder="Unit price" name="unit_price"></td>
                        </tr>
                        <tr>
                            <td>
                                <button type="submit" name="save" class="btn btn-primary">Save</button>
                                <a href="inventorylist.php"><button type="button" name="cancel" class="btn btn-primary">Cancel</button></a>
                            </td>
                        </tr>
                    </table>
                </center>
            </form>
		</div>

        <footer>
            <p>Inventory Web 2021</p>
        </footer>
	</body>

</html>