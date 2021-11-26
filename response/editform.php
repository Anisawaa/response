<?php
    require('db.php');
    session_start();

    $item_id = $_GET['item_id'];

    $sqledit = "SELECT * FROM inventory WHERE item_id='$item_id'";
    $edititem = $conn->query($sqledit);
    $show = $edititem->fetch_object();
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
                <h1>Edit Inventory Data</h1>
            </div>

			<form action="edit.php" method="POST">
            <table align="center" border="1">
                <thead style="text-align:center; background-color:lightblue" >
                    <th colspan="2">Add Inventory Data</th>
                </thead>
                <tbody>
                    <input type="hidden" name="oldCode" value="<?= $show->item_id ?>">
                    <!-- <tr>
                        <td width="200px">a</td>
                        <td width="400px">c</td>
                    </tr> -->
                    <tr>
                        <td width="200px">Item code</td>
                        <td width="280px"><input type="text" name="item_id" value="<?= $show->item_id ?>" placeholder="Item code"></td>
                    </tr>
                    <tr>
                        <td width="200px">Name of goods</td>
                        <td><input type="text" name="item_name" value="<?= $row->item_name ?>" placeholder="Name of goods" width="300px"></td>
                    </tr>
                    <tr>
                        <td width="200px">Amount</td>
                        <td><input type="text" name="amount" value="<?= $row->amount ?>" placeholder="Amount"></td>
                    </tr>
                    <tr>
                        <td width="200px">Unit</td>
                        <td><input type="text" name="unit" value="<?= $row->unit ?>" placeholder="Unit"></td>
                    </tr>
                    <tr>
                        <td width="200px">Coming Date</td>
                        <td><input type="date" name="arrival_date" value="<?= $row->arrival_date ?>"></td>
                    </tr>
                    <tr>
                        <td width="200px">Category</td>
                        <td>
                            <select name="category">
                                <option value="Buildings">Buildings</option>
                                <option value="Vehicles">Vehicles</option>
                                <option value="Office Stationery">Office Stationery</option>
                                <option value="Electronic">Electronic</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td width="200px">Status</td>
                        <td>
                            <label>
                                <input type="radio" name="item_status" value="Well">
                                Well
                            </label>
                            <label>
                                <input type="radio" name="item_status" value="Maintenance">
                                Maintenance
                            </label>
                            <label>
                                <input type="radio" name="item_status" value="Damaged">
                                Damaged
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td width="200px">Unit Price</td>
                        <td><input type="text" name="price" value="<?= $row->price ?>" placeholder="Unit price"></td>
                    </tr>
                </tbody>
            </table>
            <div colspan="2" class="d-flex justify-content-center pt-2">
                <input type="submit" name="save" value="Submit"  style="background-color:blue; color:white">
            </div>
        </form>
		</div>

        <footer>
            <p>Inventory Web 2021</p>
        </footer>
	</body>

</html>