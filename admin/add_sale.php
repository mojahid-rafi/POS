<?php include ("./header.php"); ?>
<?php require ("./src/database.php"); ?>

    <div class="content-wrapper">
        <!-- START PAGE CONTENT-->
        <div class="page-heading">
            <h1 class="page-title">Sale Details</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="dashboard.php"><i class="la la-home font-20"></i></a>
                </li>
               <!-- <li class="breadcrumb-item"></li>-->
            </ol>
        </div>

        <!--    Enter Your Content Here-->

        <div class="page-content">
            <div class="row">
                <div class="col-md-12">
                    <div class="ibox">
                        <div class="ibox-head">
                            <div class="ibox-title">Customer Information</div>
                        </div>
                        <div class="ibox-body">
                            <div class="row">
                                <div class="col-sm-6 form-group">
                                    <label class="">Select Customer</label>
                                    <select name="party_id" class="form-control select2_style1"style="width: 100%;">
                                        <option disabled selected value="0">Select Customer</option>
                                        <?php
                                        $select = "SELECT * FROM customers";
                                        $query = $con->query($select);
                                        $result = $query->fetch_all(MYSQLI_ASSOC);
                                        foreach($result as $value): ?>
                                            <option value="<?= $value['id']; ?>"><?= $value['party_name']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="col-sm-6 form-group" id="date_1">
                                    <label class="font-normal">Sale Date</label>
                                    <div class="input-group date">
                                        <span class="input-group-addon bg-white"><i class="fa fa-calendar"></i></span>
                                        <input class="form-control" type="text" value="04/12/2017">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-8">
                    <div class="ibox">
                        <div class="ibox-head">
                            <div class="ibox-title">Add Invoice Items</div>
                        </div>
                        <div class="ibox-body">
                            <form action="" method="get">
                                <div class="row">
                                    <div class="col-sm-6 form-group">
                                        <div class="input-group">
                                            <div class="input-group-addon bg-white">
                                                <i class="fa fa-search-plus"></i>
                                            </div>
                                            <input class="form-control" id="productname" name='productname' type="text" placeholder="Search Item (Item Name / Barcode)">
                                            <div class="input-group-addon bg-white p-0">
                                                <a href="javascript:void;" class="btn btn-success">Add</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>

                            <div class="row">
                                <div class="col-sm-12 form-group">
                                    <table class="table" id="product_table">
                                        <thead>
                                            <tr>
                                                <th scope="col">Item Name</th>
                                                <th scope="col">Unit price</th>
                                                <th scope="col">Unit</th>
                                                <th scope="col">Quantity</th>
                                                <th scope="col">Total</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody id="dyn_tr">

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="ibox">
                        <div class="ibox-body">
                            <div class="offset-1 col-sm-12 form-group">
                                <label>Sub Total </label>
                                <p>50,000</p>
                            </div>
                            <div class="col-sm-12 form-group">
                                <label>Discount </label>
                                <input name="sale_date" class="form-control" type="text">
                            </div>
                            <div class="col-sm-12 form-group">
                                <label>Payable </label>
                                <input name="pay_method" class="form-control" type="text">
                            </div>
                            <div class="col-sm-12 form-group">
                                <label>Paid </label>
                                <input name="pay_account" class="form-control" type="text">
                            </div>
                            <div class="col-sm-12 form-group">
                                <label>Refund </label>
                                <input name="refund" class="form-control" type="text">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
<?php include ("./footer.php"); ?>


            <script type="text/javascript">
                function financial(x) {
                    return Number.parseFloat(x).toFixed(2);
                }

                $(document).ready(function() {

                    //autocomplete
                    $("#productname").autocomplete({
                        source: "src/ajax/search-item.php",
                        minLength: 2,
                        select: function(event, ui) {
                            var id = ui.item.id;
                            addProduct(id);
                        }
                    });

                    function addProduct(id) {
                        $.ajax({
                            url: 'src/ajax/add_product.php',
                            type: 'post',
                            data: {
                                id: id
                            },
                            success: function(response) {
                                //console.log(response);
                                response = JSON.parse(response);
                                $html = '<tr>';
                                $html += '<td class="pid d-none">' + response.id + '</td>';
                                $html += '<td>' + response.name + '</td>';
                                $html += '<td class="pprice">' + response.price + '</td>';
                                $html += '<td>' + response.sku + '</td>';
                                $html += '<td><input class="qu" type="number" min="1" name="quantity" value="1"></td>';
                                $html += '<td class="itemtotal">' + response.price + '</td>';
                                $html += '<td><a href="#" class="deleteproduct" data-id="' + response.id + '">Delete</a></td>';
                                $html += '</tr>';
                                $('#dyn_tr').append($html);
                                $("#productname").val("").focus();
                                updateTotal();
                            }
                        });
                    }
                    //delete product
                    $(document).on('click', '.deleteproduct', function(e) {
                        e.preventDefault();
                        $(this).closest('tr').remove();
                    });
                    //update total
                    $(document).on('blur change keyup', '.qu', function() {
                        var $row = $(this).closest('tr');
                        var qty = $row.find('.qu').val();
                        var price = $row.find('.pprice').text();
                        var itemtotal = qty * price;
                        console.log(itemtotal);
                        $row.find('.itemtotal').text(financial(itemtotal));
                        updateTotal();
                    });

                    function updateTotal() {
                        //console.log($('.itemtotal'));
                        var grandtotal = 0;
                        $('.itemtotal').each(function() {
                            grandtotal += parseFloat($(this).text());
                        });
                        $('#grandtotal').text(grandtotal);
                    }
                    //payment method
                    $("#payment_method").change(function() {
                        var payment_method = $(this).val();
                        if (payment_method == 'cash') {
                            $("#trxId").addClass('d-none');
                        } else {
                            $("#trxId").removeClass('d-none');
                        }
                    });

                    //place order
                    $(document).on('click', '#orderBtn', function() {
                        //check if payment method is cash
                        var payment_method = $("#payment_method").val();
                        if (payment_method == 'cash') {
                            var trxId = '';
                        } else {
                            var trxId = $("#trxId").val();
                            if(trxId == ''){
                                alert('Please enter transaction ID');
                                return;
                            }
                        }
                        var order = [];
                        $('.pid').each(function() {
                            var pid = $(this).text();
                            var qty = $(this).closest('tr').find('.qu').val();
                            order.push({
                                pid: pid,
                                qty: qty
                            });
                        });
                        //console.log(order);
                        $.ajax({
                            url: 'place_order.php',
                            type: 'post',
                            data: {
                                orders: order,
                                grandtotal: $('#grandtotal').text(),
                                comment: $('#comment').val(),
                                payment_method: payment_method,
                                trxId: trxId
                            },
                            success: function(response) {
                                console.log(response);
                                $('#response').html(response);
                                $('#dyn_tr').empty();
                                $('#grandtotal').text(0);
                                $('#comment').val('');
                                $('#payment_method').val('cash');
                                $('#trxId').val('');
                                $('#trxId').addClass('d-none');
                                alert('Order placed successfully');
                            }
                        });
                    });
                });
            </script>