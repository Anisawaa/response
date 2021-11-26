<!DOCTYPE html>
<html>
    <head>
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

        <title>123200049</title>

        <style>
            .main-title
            {
                padding : 20px;
                text-align : center;
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
                <h1>Inventory List</h1>
            </div>

            <center>
                <div class = "table">
                    <table border="1">
                        <a href="inputform.php"><button type="button" name="inputform" class="btn btn-primary">+Add</button></a>
                        <tr>
                            <th>No</th>
                            <th>Code</th>
                            <th>Name of Goods</th>
                            <th>Amount</th>
                            <th>Unit</th>
                            <th>Coming Date</th>
                            <th>Category</th>
                            <th>Status</th>
                            <th>Unit Price</th>
                            <th>Total Price</th>
                            <th colspan ="2">Action</th>
                        </tr>

                        <?php
                        include "db.php";
                        $no=1;
                        $list = "SELECT * FROM inventory";
                        $invent = $conn->query($list);
                        while($show = $invent->fetch_object())
                        {
                        ?>

                            <tr>
                                <td><?= $no ?></td>
                                <td><?= $show->item_id ?></td>
                                <td><?= $show->item_name ?></td>
                                <td><?= $show->amount ?></td>
                                <td><?= $show->unit ?></td>
                                <td><?= $show->arrival_date ?></td>
                                <td><?= $show->category ?></td>
                                <td><?= $show->item_status ?></td>
                                <td>Rp<?= $show->price ?>.00</td>
                                <td>Rp<?= $show->amount*$show->price ?>.00</td>
                                <td>
                                    <a href="editform.php?item_id= <?=$show->item_id ?>" ><button>edit</button></a>
                                </td>
                                <td>
                                    <a href = "deletepage.php">
                                    <button class ="btn btn-delete">Delete</button>
                                    </a>
                                </td>
                            </tr>

                            <?php
                            $no++;
                        }
                        ?>
                    </table>
                </div>
            </center>
        </div>

        <footer>
            <p>Inventory Web 2021</p>
        </footer>
    </body>
</html>