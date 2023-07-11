<?php include ("./header.php"); ?>
<?php require ("./src/database.php"); ?>

    <div class="content-wrapper">
    <!-- START PAGE CONTENT-->
    <div class="page-heading">
<!--        <h1 class="page-title">Item Info</h1>-->
<!--        <ol class="breadcrumb">-->
<!--            <li class="breadcrumb-item">-->
<!--                <a href="dashboard.php"><i class="la la-home font-20"></i></a>-->
<!--            </li>-->
<!--             <li class="breadcrumb-item"></li>-->
<!--        </ol>-->
    </div>

    <!--    Enter Your Content Here-->
<?php
if (isset($_POST['submit'])){
    $item_code = $_POST['icode'];
    $item_name = $_POST['iname'];
    $cat_id = $_POST['cat_id'];
    $brand_id = $_POST['brand_id'];
    $unit = $_POST['unit'];
    $uprice = $_POST['uprice'];
    $reolevel = $_POST['reolevel'];
    $lpprice = $_POST['lpprice'];
    $barcode = $_POST['barcode'];
    $sts = $_POST['sts'];
    $stmaintain = $_POST['stmaintain'];
    $opstock = $_POST['opstock'];

    $insert = "INSERT INTO `item_info`(`item_code`, `item_name`, `category_id`, `brand_id`, `unit`, `unit_price`, `rol`, `last_pur_price`, `barcode`, `sts`, `stock_mantain`, `op_stock`,`user_id`) VALUES ('{$item_code}', '{$item_name}', '{$cat_id}', '{$brand_id}', '{$unit}', '{$uprice}', '{$reolevel}', '{$lpprice}', '{$barcode}', '{$sts}', '{$stmaintain}', '{$opstock}','0')";
    $con->query($insert);

};
?>

    <div class="page-content fade-in-up">
    <div class="row">
    <div class="col-md-12">
        <div class="ibox">
            <div class="ibox-head">
                <div class="ibox-title">Item Information</div>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#DonorAdd">
                    Add Item
                </button>
            </div>

            <!-- modal start -->
            <div class="modal fade" id="DonorAdd" tabindex="-1" role="dialog" aria-labelledby="DonorAdd" aria-hidden="true">
                <form action="" method="POST">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Item</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <!--form body start here-->
                                <div class="row">
                                    <div class="col-sm-6 form-group">
                                        <label>Item Code : </label>
                                        <input name="icode" class="form-control" type="text" placeholder="Item Code">
                                    </div>
                                    <div class="col-sm-6 form-group">
                                        <label>Item Name : </label>
                                        <input name="iname" class="form-control" type="text" placeholder="Item Name">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6 form-group">
                                        <?php
                                            $select = 'SELECT * FROM categories';
                                            $query = $con->query($select);
                                            $result = $query->fetch_all(MYSQLI_ASSOC);
                                        ?>
                                        <label class="">Select Category</label>
                                        <select name="cat_id" class="form-control select2_style1" style="width: 100%;">
                                            <option disabled selected value="0">Select Category</option>
                                            <?php
                                                foreach($result as $value): ?>
                                                    <option> value="<?= $value['id']; ?>"><?= $value['name']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="col-sm-6 form-group">
                                        <label class="">Select Brand</label>
                                        <select name="brand_id" class="form-control select2_style1" style="width: 100%;">
                                        <option disabled selected value="0">Select Brand</option>
                                        <?php
                                            $select = 'SELECT * FROM brands';
                                            $query = $con->query($select);
                                            $result = $query->fetch_all(MYSQLI_ASSOC);
                                                foreach($result as $value): ?>
                                                    <option  value="<?= $value['id']; ?>"><?= $value['name']; ?></option>
                                                <?php endforeach; ?>
                                          </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6 form-group">
                                        <label>Unit : </label>
                                        <input name="unit" class="form-control" type="text" placeholder="Unit">
                                    </div>
                                    <div class="col-sm-6 form-group">
                                        <label>Unit Price :</label>
                                        <input name="uprice" class="form-control" type="text" placeholder="Unit Price">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6 form-group">
                                        <label>Re Order Level:</label>
                                        <input name="reolevel" class="form-control" type="text" placeholder="Re Order Level">
                                    </div>
                                    <div class="col-sm-6 form-group">
                                        <label>Last Per Price :</label>
                                        <input name="lpprice" class="form-control" type="text" placeholder="Last Per Price">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6 form-group">
                                        <label>Barcode :</label>
                                        <input name="barcode" class="form-control" type="text" placeholder="Barcode">
                                    </div>
                                    <div class="col-sm-6 form-group">
                                        <label>Status :</label>
                                        <select name="sts" id="" class="form-control" >
                                            <option value="1">Active</option>
                                            <option value="0">Inactive</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6 form-group">
                                        <label>stock maintain :</label>
                                        <select name="stmaintain" id="" class="form-control" >
                                            <option value="1">Yes</option>
                                            <option value="0">No</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-6 form-group">
                                        <label>Opening Stock :</label>
                                        <input name="opstock" class="form-control" type="text" placeholder="Opening Stock">
                                    </div>
                                </div>
                                <!--form body end -->
                            </div>
                            <div class="modal-footer">
                                <button name="submit" class="btn btn-default px-4" type="submit">Save</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!-- modal end -->
            <?php
            $select = 'SELECT i.id, i.item_name, i.item_code, c.name as CatName, b.name as BrandName, i.unit, i.unit_price, i.rol, i.last_pur_price, i.sts FROM `item_info` i, categories c, brands b
WHERE i.category_id = c.id and i.brand_id = b.id;';
            $query = $con->query($select);
            $result = $query->fetch_all(MYSQLI_ASSOC);
            ?>
            <div class="ibox-body">
                <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th width="50px">ID</th>
                            <th>Item Code</th>
                            <th>Item Name</th>
                            <th>Category</th>
                            <th>Brand</th>
                            <th>Unit </th>
                            <th>Price</th>
                            <th>ROL</th>
                            <th>DP Price </th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach($result as $value): ?>
                        <tr>
                            <td><?= $value['id']; ?></td>
                            <td><?= $value['item_code']; ?></td>
                            <td><?= $value['item_name']; ?></td>
                            <td><?= $value['CatName']; ?></td>
                            <td><?= $value['BrandName']; ?></td>
                            <td><?= $value['unit']; ?></td>
                            <td><?= $value['unit_price']; ?></td>
                            <td><?= $value['rol']; ?></td>
                            <td><?= $value['last_pur_price']; ?></td>
                            <td>
                                <?php
                                if ($value['sts'] == 1)
                                {
                                    echo "Active";
                                } else { echo "Inactive"; } ?>
                            </td>
                            <td>
                                <a href="edit_item_info.php?id=<?= $value['id']; ?>"
                                   class="btn btn-default btn-xs m-r-5">
                                    <i class="fa fa-pencil font-14"></i>
                                </a>

                                <a href="delete_item_info.php?id=<?= $value['id']; ?>"
                                   class="btn btn-default btn-xs m-r-5">
                                    <i class="fa fa-trash font-14"></i>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
  </div>

<?php include ("./footer.php"); ?>

        <!-- PAGE LEVEL SCRIPTS-->
        <script type="text/javascript">
            $(function() {
                $('#example-table').DataTable({
                    pageLength: 10,
                });
            })
        </script>
