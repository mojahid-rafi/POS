<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if(!isset($_SESSION['user_name']))
{
    header("location:login.php");
}
?>

<?php include ("./header.php"); ?>
<?php require ("./src/database.php"); ?>

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
                                    <select name="party_id" id="party_id" class="form-control select2_style1"style="width: 100%;">
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
                            <div class="row">
                                <div class="col-sm-6">
                                    <div id="cs_info">
                                        <div class="m-b-5 font-bold">Customer Information</div>
                                        <div id="cs_name">

                                        </div>

                                        <div class="m-b-5 font-bold mt-3">Shipping Information</div>
                                        <ul class="list-unstyled">
                                            <li class="m-b-5"
                                                <span class="font-strong" id="adrs"></span>
                                            </li>
                                            <li class="m-b-5">
                                                <span id="phone"></span>
                                            </li>
                                            <li>
                                                <span id="email"></span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-md-9">
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

                <div class="col-md-3">
                    <div class="ibox" style="border-top-left-radius: 7px;border-top-right-radius: 7px;">
                        <div class="ibox-head" style="border-top-left-radius: 7px;border-top-right-radius: 7px; background: #08193e;">
                            <div class="ibox-title text-white">
                                Order Summary
                            </div>
                        </div>
                        <div class="ibox-body">
                            <div class="row">
                                <div class="col-12">
                                    <dl class="row">
                                        <dt class="col-sm-6"><h5 class="m-b-20 m-t-10">Total Amount</h5></dt>
                                        <dd class="col-sm-6 text-right text-bold"><h5 class="text-secondary m-b-20 m-t-10" id="total">00.00</h5></dd>

                                        <dt class="col-sm-6">Discount</dt>
                                        <dd class="col-sm-6 text-right" id="discount">00.00</dd>

                                        <dt class="col-sm-6">Payable</dt>
                                        <dd class="col-sm-6 text-right" id="payable">00.00</dd>

                                        <dt class="col-sm-6">Paid</dt>
                                        <dd class="col-sm-6 text-right" id="paid">00.00</dd>

                                        <dt class="col-sm-6">Refund</dt>
                                        <dd class="col-sm-6 text-right" id="refund">00.00</dd>
                                    </dl>
                                </div>
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

                    $("#party_id").change(function(){
                        GetCustomerInfo($(this).val());
                    });


                    function GetCustomerInfo(id) {
                        $.ajax({
                            url: 'src/ajax/get_customer_info.php',
                            type: 'post',
                            data: {
                                id: id
                            },
                            success: function(response) {
                                // console.log(response);
                                response = JSON.parse(response);
                                $('#cs_name').html("<b>ID :</b> " + response.id + " <b>Name :</b> "+ response.name);
                                $('#adrs').html("Address : "+response.address);
                                $('#phone').html("Phone : "+response.phone);
                                $('#email').html("Email: "+response.email);
                            }
                        });
                    }

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
                                $html += '<td><button class="deleteproduct btn btn-danger btn-sm"  data-id="\' + response.id + \'">Delete</button></td>';
                                $html += '</tr>';
                                $('#dyn_tr').append($html);
                                $("#productname").val("").focus();
                                calculate();
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
                        calculate();
                    });

                    function calculate() {
                        //console.log($('.itemtotal'));
                        var grandtotal = 0;
                        $('.itemtotal').each(function() {
                            grandtotal += parseFloat($(this).text());
                        });
                        $('#total').text(grandtotal);
                    }
                    //payment method
                    // $("#payment_method").change(function() {
                    //     var payment_method = $(this).val();
                    //     if (payment_method == 'cash') {
                    //         $("#trxId").addClass('d-none');
                    //     } else {
                    //         $("#trxId").removeClass('d-none');
                    //     }
                    // });

                    //place order
                    // $(document).on('click', '#orderBtn', function() {
                    //     //check if payment method is cash
                    //     var payment_method = $("#payment_method").val();
                    //     if (payment_method == 'cash') {
                    //         var trxId = '';
                    //     } else {
                    //         var trxId = $("#trxId").val();
                    //         if(trxId == ''){
                    //             alert('Please enter transaction ID');
                    //             return;
                    //         }
                    //     }
                    //     var order = [];
                    //     $('.pid').each(function() {
                    //         var pid = $(this).text();
                    //         var qty = $(this).closest('tr').find('.qu').val();
                    //         order.push({
                    //             pid: pid,
                    //             qty: qty
                    //         });
                    //     });
                    //     //console.log(order);
                    //     $.ajax({
                    //         url: 'place_order.php',
                    //         type: 'post',
                    //         data: {
                    //             orders: order,
                    //             grandtotal: $('#grandtotal').text(),
                    //             comment: $('#comment').val(),
                    //             payment_method: payment_method,
                    //             trxId: trxId
                    //         },
                    //         success: function(response) {
                    //             console.log(response);
                    //             $('#response').html(response);
                    //             $('#dyn_tr').empty();
                    //             $('#grandtotal').text(0);
                    //             $('#comment').val('');
                    //             $('#payment_method').val('cash');
                    //             $('#trxId').val('');
                    //             $('#trxId').addClass('d-none');
                    //             alert('Order placed successfully');
                    //         }
                    //     });
                    // });
                });
            </script>