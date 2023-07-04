<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="./pos_style.css">
    <link rel="stylesheet" href="../assets/vendors/font-awesome/css/font-awesome.min.css">
</head>
<body class="lockscreen        pace-done pace-done" style="height: auto;">
<div class="pace  pace-inactive pace-inactive">
    <div class="pace-progress" data-progress-text="100%" data-progress="99" style="transform: translate3d(100%, 0px, 0px);">
        <div class="pace-progress-inner"></div>
    </div>
    <div class="pace-activity"></div>
</div>

<!-- empty div for vuejs -->
<div id="app"></div>

<div class="wrapper thetop" style="height: auto;">

    <div class="col-md-12 no-print pos-header">
        <input type="hidden" id="pos_redirect_url" value="https://pos.ultimatefosters.com/pos/create">
        <div class="row">
            <div class="col-md-6">
                <div class="m-6 mt-5 hidden-xs">
                    <p><strong>Location:</strong> Awesome Shop 04/28/2020 12:47 <i class="fa fa-keyboard hover-q text-muted" aria-hidden="true" data-container="body" data-toggle="popover" data-placement="bottom" data-content="<table class='table table-condensed table-striped'>
	<tr>
	    <th>Operations</th>
	    <th>Keyboard Shortcut</th>
	</tr>

			<tr>
		    <td>Express <br/>Checkout:</td>
		    <td>
			    			    	shift+e
			    		    </td>
		</tr>

			<tr>
		    <td>Pay &amp; Checkout:</td>
		    <td>
		    				    	shift+p
			    		    </td>
		</tr>

			<tr>
		    <td>Draft:</td>
		    <td>
		    				    	shift+d
			    		    </td>
		</tr>

	<tr>
	    <td>Cancel:</td>
	    <td>
	    			    	shift+c
		    	    </td>
	</tr>

			<tr>
		    <td>Edit Discount:</td>
		    <td>
		    				    	shift+i
			    		    </td>
		</tr>

			<tr>
		    <td>Edit Order Tax:</td>
		    <td>
		    				    	shift+t
			    		    </td>
		</tr>

			<tr>
		    <td>Add Payment Row:</td>
		    <td>
		    				    	shift+r
			    		    </td>
		</tr>

			<tr>
		    <td>Finalize Payment:</td>
		    <td>
		    				    	shift+f
			    		    </td>
		</tr>

	<tr>
	    <td>Go to product quantity:</td>
	    <td>
	    			    	f2
		    	    </td>
	</tr>

	<tr>
	    <td>Add new product:</td>
	    <td>
	    			    	f4
		    	    </td>
	</tr>


</table>" data-html="true" data-trigger="hover" data-original-title="" title=""></i></p>
                </div>
            </div>
            <div class="col-md-6">
                <a href="https://pos.ultimatefosters.com/pos" title="" data-toggle="tooltip" data-placement="bottom" class="btn btn-info btn-flat m-6 btn-xs m-5 pull-right" data-original-title="Go Back">
                    <strong><i class="fa fa-backward fa-lg"></i></strong>
                </a>

                <button type="button" id="close_register" title="" data-toggle="tooltip" data-placement="bottom" class="btn btn-danger btn-flat m-6 btn-xs m-5 btn-modal pull-right" data-container=".close_register_modal" data-href="https://pos.ultimatefosters.com/cash-register/close-register" data-original-title="Close Register">
                    <strong><i class="fa fa-window-close fa-lg"></i></strong>
                </button>

                <button type="button" id="register_details" title="" data-toggle="tooltip" data-placement="bottom" class="btn btn-success btn-flat m-6 btn-xs m-5 btn-modal pull-right" data-container=".register_details_modal" data-href="https://pos.ultimatefosters.com/cash-register/register-details" data-original-title="Register Details">
                    <strong><i class="fa fa-briefcase fa-lg" aria-hidden="true"></i></strong>
                </button>

                <button title="" id="btnCalculator" type="button" class="btn btn-success btn-flat pull-right m-5 btn-xs mt-10 popover-default" data-toggle="popover" data-trigger="click" data-content="<div id=&quot;calculator&quot;>
  <div class=&quot;row text-center&quot; id=&quot;calc&quot;>
    <div class=&quot;calcBG col-md-12 text-center&quot;>
      <div class=&quot;row&quot; id=&quot;result&quot;>
        <form name=&quot;calc&quot;>
          <input type=&quot;text&quot; class=&quot;screen text-right&quot; name=&quot;result&quot; readonly>
        </form>
      </div>
      <div class=&quot;row&quot;>
        <button id=&quot;allClear&quot; type=&quot;button&quot; class=&quot;btn btn-danger&quot; onclick=&quot;clearScreen()&quot;>AC</button>
        <button id=&quot;clear&quot; type=&quot;button&quot; class=&quot;btn btn-warning&quot; onclick=&quot;clearScreen()&quot;>CE</button>
        <button id=&quot;%&quot; type=&quot;button&quot; class=&quot;btn&quot; onclick=&quot;calEnterVal(this.id)&quot;>%</button>
        <button id=&quot;/&quot; type=&quot;button&quot; class=&quot;btn&quot; onclick=&quot;calEnterVal(this.id)&quot;>�</button>
      </div>
      <div class=&quot;row&quot;>
        <button id=&quot;7&quot; type=&quot;button&quot; class=&quot;btn&quot; onclick=&quot;calEnterVal(this.id)&quot;>7</button>
        <button id=&quot;8&quot; type=&quot;button&quot; class=&quot;btn&quot; onclick=&quot;calEnterVal(this.id)&quot;>8</button>
        <button id=&quot;9&quot; type=&quot;button&quot; class=&quot;btn&quot; onclick=&quot;calEnterVal(this.id)&quot;>9</button>
        <button id=&quot;*&quot; type=&quot;button&quot; class=&quot;btn&quot; onclick=&quot;calEnterVal(this.id)&quot;>x</button>
      </div>
      <div class=&quot;row&quot;>
        <button id=&quot;4&quot; type=&quot;button&quot; class=&quot;btn&quot; onclick=&quot;calEnterVal(this.id)&quot;>4</button>
        <button id=&quot;5&quot; type=&quot;button&quot; class=&quot;btn&quot; onclick=&quot;calEnterVal(this.id)&quot;>5</button>
        <button id=&quot;6&quot; type=&quot;button&quot; class=&quot;btn&quot; onclick=&quot;calEnterVal(this.id)&quot;>6</button>
        <button id=&quot;-&quot; type=&quot;button&quot; class=&quot;btn&quot; onclick=&quot;calEnterVal(this.id)&quot;>-</button>
      </div>
      <div class=&quot;row&quot;>
        <button id=&quot;1&quot; type=&quot;button&quot; class=&quot;btn&quot; onclick=&quot;calEnterVal(this.id)&quot;>1</button>
        <button id=&quot;2&quot; type=&quot;button&quot; class=&quot;btn&quot; onclick=&quot;calEnterVal(this.id)&quot;>2</button>
        <button id=&quot;3&quot; type=&quot;button&quot; class=&quot;btn&quot; onclick=&quot;calEnterVal(this.id)&quot;>3</button>
        <button id=&quot;+&quot; type=&quot;button&quot; class=&quot;btn&quot; onclick=&quot;calEnterVal(this.id)&quot;>+</button>
      </div>
      <div class=&quot;row&quot;>
        <button id=&quot;0&quot; type=&quot;button&quot; class=&quot;btn&quot; onclick=&quot;calEnterVal(this.id)&quot;>0</button>
        <button id=&quot;.&quot; type=&quot;button&quot; class=&quot;btn&quot; onclick=&quot;calEnterVal(this.id)&quot;>.</button>
        <button id=&quot;equals&quot; type=&quot;button&quot; class=&quot;btn btn-success&quot; onclick=&quot;calculate()&quot;>=</button>
        <button id=&quot;blank&quot; type=&quot;button&quot; class=&quot;btn&quot;>&nbsp;</button>
      </div>
    </div>
  </div>
</div>" data-html="true" data-placement="bottom" data-original-title="Calculator">
                    <strong><i class="fa fa-calculator fa-lg" aria-hidden="true"></i></strong>
                </button>

                <button type="button" title="" data-toggle="tooltip" data-placement="bottom" class="btn btn-primary btn-flat m-6 hidden-xs btn-xs m-5 pull-right" id="full_screen" data-original-title="Press F11 to go Full Screen">
                    <strong><i class="fa fa-window-maximize fa-lg"></i></strong>
                </button>

                <button type="button" id="view_suspended_sales" title="" data-toggle="tooltip" data-placement="bottom" class="btn bg-yellow btn-flat m-6 btn-xs m-5 btn-modal pull-right" data-container=".view_modal" data-href="https://pos.ultimatefosters.com/sells?suspended=1" data-original-title="View Suspended Sales">
                    <strong><i class="fa fa-pause-circle fa-lg"></i></strong>
                </button>

            </div>

        </div>
    </div>

    <!-- Content Wrapper. Contains page content -->
    <div class="">

        <!-- Add currency related field-->
        <input type="hidden" id="__code" value="USD">
        <input type="hidden" id="__symbol" value="$">
        <input type="hidden" id="__thousand" value=",">
        <input type="hidden" id="__decimal" value=".">
        <input type="hidden" id="__symbol_placement" value="before">
        <input type="hidden" id="__precision" value="2">
        <input type="hidden" id="__quantity_precision" value="2">
        <!-- End of currency related field-->

        <section class="content no-print">
            <input type="hidden" id="amount_rounding_method" value="">
            <form method="POST" action="https://pos.ultimatefosters.com/pos" accept-charset="UTF-8" id="add_pos_sell_form" novalidate="novalidate"><input name="_token" type="hidden" value="iwXJE7RdAsDMwaPXQ7fprFAhnK9zK3okB6XJy1HZ">
                <div class="row mb-12">
                    <div class="col-md-12">
                        <div class="row">
                            <div class=" col-md-7  no-padding pr-12">
                                <div class="box box-solid mb-12">
                                    <div class="box-body pb-0">
                                        <input id="location_id" data-receipt_printer_type="browser" data-default_accounts="{&quot;cash&quot;:{&quot;is_enabled&quot;:&quot;1&quot;,&quot;account&quot;:null},&quot;card&quot;:{&quot;is_enabled&quot;:&quot;1&quot;,&quot;account&quot;:null},&quot;cheque&quot;:{&quot;is_enabled&quot;:&quot;1&quot;,&quot;account&quot;:null},&quot;bank_transfer&quot;:{&quot;is_enabled&quot;:&quot;1&quot;,&quot;account&quot;:null},&quot;other&quot;:{&quot;is_enabled&quot;:&quot;1&quot;,&quot;account&quot;:null},&quot;custom_pay_1&quot;:{&quot;is_enabled&quot;:&quot;1&quot;,&quot;account&quot;:null},&quot;custom_pay_2&quot;:{&quot;is_enabled&quot;:&quot;1&quot;,&quot;account&quot;:null},&quot;custom_pay_3&quot;:{&quot;is_enabled&quot;:&quot;1&quot;,&quot;account&quot;:null}}" name="location_id" type="hidden" value="1">
                                        <input type="hidden" id="item_addition_method" value="1">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group" style="width: 100% !important">
                                                    <div class="input-group">
                              <span class="input-group-addon">
                                <i class="fa fa-user"></i>
                              </span>
                                                        <input type="hidden" id="default_customer_id" value="1">
                                                        <input type="hidden" id="default_customer_name" value="Walk-In Customer">
                                                        <select class="form-control mousetrap select2-hidden-accessible valid" id="customer_id" required="" style="width: 100%;" name="contact_id" tabindex="-1" aria-hidden="true" aria-required="true">
                                                            <option selected="selected" value="">Enter Customer name / phone</option>
                                                            <option value="1">Walk-In Customer</option>
                                                            <option value="17">cashload.pk</option>
                                                        </select><span class="select2 select2-container select2-container--default select2-container--below select2-container--focus" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-customer_id-container"><span class="select2-selection__rendered" id="select2-customer_id-container" title="cashload.pk">cashload.pk</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                        <span class="input-group-btn">
                                <button type="button" class="btn btn-default bg-white btn-flat add_new_customer" data-name=""><i class="fa fa-plus-circle text-primary fa-lg"></i></button>
                              </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <div class="input-group-btn">
                                                            <button type="button" class="btn btn-default bg-white btn-flat" data-toggle="modal" data-target="#configure_search_modal" title="Configure product search"><i class="fa fa-barcode"></i></button>
                                                        </div>
                                                        <input class="form-control mousetrap ui-autocomplete-input" id="search_product" placeholder="Enter Product name / SKU / Scan bar code" autofocus="" name="search_product" type="text" autocomplete="off">
                                                        <span class="input-group-btn">

                                <!-- Show button for weighing scale modal -->

                                <button type="button" class="btn btn-default bg-white btn-flat pos_add_quick_product" data-href="https://pos.ultimatefosters.com/products/quick_add" data-container=".quick_add_product_modal"><i class="fa fa-plus-circle text-primary fa-lg"></i></button>
                              </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <input type="hidden" name="pay_term_number" id="pay_term_number" value="">
                                            <input type="hidden" name="pay_term_type" id="pay_term_type" value="">

                                            <input id="price_group" name="price_group" type="hidden" value="0">

                                            <!-- Call restaurant module if defined -->
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12 pos_product_div" style="min-height: 332.64px; max-height: 332.64px;">
                                                <input type="hidden" name="sell_price_tax" id="sell_price_tax" value="includes">

                                                <!-- Keeps count of product rows -->
                                                <input type="hidden" id="product_row_count" value="16">
                                                <table class="table table-condensed table-bordered table-striped table-responsive" id="pos_table">
                                                    <thead>
                                                    <tr>
                                                        <th class="tex-center  col-md-4 ">
                                                            Product <i class="fa fa-info-circle text-info hover-q no-print " aria-hidden="true" data-container="body" data-toggle="popover" data-placement="auto bottom" data-content="Click <i>product name</i> to edit price, discount &amp; tax. <br/>Click <i>Comment Icon</i> to enter serial number / IMEI or additional note.<br/><br/>Click <i>Modifier Icon</i>(if enabled) for modifiers" data-html="true" data-trigger="hover"></i> </th>
                                                        <th class="text-center col-md-3">
                                                            Quantity </th>
                                                        <th class="text-center col-md-2 ">
                                                            Price inc. tax </th>
                                                        <th class="text-center col-md-2">
                                                            Subtotal </th>
                                                        <th class="text-center"><i class="fas fa-times" aria-hidden="true"></i></th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr class="product_row" data-row_index="14">
                                                        <td>

                                                            <div data-toggle="tooltip" data-placement="bottom" title="Edit product Unit Price and Tax">
                                    <span class="text-link text-info cursor-pointer" data-toggle="modal" data-target="#row_edit_product_price_modal_14">
                                      Apple iPhone 8 (Internal Memory:32 GB)<br>AS0015-1 Apple
                                      &nbsp;<i class="fa fa-info-circle"></i>
                                    </span>
                                                            </div>
                                                            <input type="hidden" class="enable_sr_no" value="0">
                                                            <input type="hidden" class="product_type" name="products[14][product_type]" value="variable">

                                                            <div class="modal fade row_edit_product_price_model" id="row_edit_product_price_modal_14" tabindex="-1" role="dialog">
                                                                <div class="modal-dialog" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">�</span></button>
                                                                            <h4 class="modal-title" id="myModalLabel">Apple iPhone 8 (Internal Memory:32 GB) - AS0015-1</h4>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <div class="row">
                                                                                <div class="form-group col-xs-12 ">
                                                                                    <label>Unit Price</label>
                                                                                    <input type="text" name="products[14][unit_price]" class="form-control pos_unit_price input_number mousetrap" value="1,187.50">
                                                                                </div>

                                                                                <div class="form-group col-xs-12 col-sm-6 ">
                                                                                    <label>Discount Type</label>
                                                                                    <select class="form-control row_discount_type" name="products[14][line_discount_type]">
                                                                                        <option value="fixed" selected="selected">Fixed</option>
                                                                                        <option value="percentage">Percentage</option>
                                                                                    </select>
                                                                                </div>
                                                                                <div class="form-group col-xs-12 col-sm-6 ">
                                                                                    <label>Discount Amount</label>
                                                                                    <input class="form-control input_number row_discount_amount" name="products[14][line_discount_amount]" type="text" value="0.00">
                                                                                </div>
                                                                                <div class="form-group col-xs-12 ">
                                                                                    <label>Tax</label>

                                                                                    <input class="item_tax" name="products[14][item_tax]" type="hidden" value="118.75">

                                                                                    <select class="form-control tax_id" name="products[14][tax_id]">
                                                                                        <option value="">Select</option>
                                                                                        <option value="">None</option>
                                                                                        <option value="1" selected="selected" data-rate="10">VAT@10%</option>
                                                                                        <option value="2" data-rate="10">CGST@10%</option>
                                                                                        <option value="3" data-rate="8">SGST@8%</option>
                                                                                        <option value="4" data-rate="18">GST@18%</option>
                                                                                    </select>
                                                                                </div>
                                                                                <div class="form-group col-xs-12">
                                                                                    <label>Description</label>
                                                                                    <textarea class="form-control" name="products[14][sell_line_note]" rows="3"></textarea>
                                                                                    <p class="help-block">Add product IMEI, Serial number or other informations here.</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!-- Description modal end -->

                                                        </td>

                                                        <td>

                                                            <input type="hidden" name="products[14][product_id]" class="form-control product_id" value="15">

                                                            <input type="hidden" value="52" name="products[14][variation_id]" class="row_variation_id">

                                                            <input type="hidden" value="1" name="products[14][enable_stock]">

                                                            <div class="input-group input-number">
                                                                <span class="input-group-btn"><button type="button" class="btn btn-default btn-flat quantity-down"><i class="fa fa-minus text-danger"></i></button></span>
                                                                <input type="text" data-min="1" class="form-control pos_quantity input_number mousetrap input_quantity valid" value="1.00" name="products[14][quantity]" data-allow-overselling="false" data-decimal="0" data-rule-abs_digit="true" data-msg-abs_digit="Decimal value not allowed" data-rule-required="true" data-msg-required="This field is required" data-rule-max-value="18.0000" data-qty_available="18.0000" data-msg-max-value="Only 18.00 Pc(s) available" data-msg_max_default="Only 18.00 Pc(s) available" aria-required="true" aria-invalid="false">
                                                                <span class="input-group-btn"><button type="button" class="btn btn-default btn-flat quantity-up"><i class="fa fa-plus text-success"></i></button></span>
                                                            </div>

                                                            <input type="hidden" name="products[14][product_unit_id]" value="1">
                                                            <br>
                                                            <select name="products[14][sub_unit_id]" class="form-control input-sm sub_unit">
                                                                <option value="1" data-multiplier="1" data-unit_name="Pieces" data-allow_decimal="0">
                                                                    Pieces
                                                                </option>
                                                            </select>

                                                            <input type="hidden" class="base_unit_multiplier" name="products[14][base_unit_multiplier]" value="1">

                                                            <input type="hidden" class="hidden_base_unit_sell_price" value="1187.5">

                                                        </td>

                                                        <td class="">
                                                            <input type="text" name="products[14][unit_price_inc_tax]" class="form-control pos_unit_price_inc_tax input_number" value="1,306.25">
                                                        </td>
                                                        <td class="text-center v-center">
                                                            <input type="hidden" class="form-control pos_line_total " value="2,612.50">
                                                            <span class="display_currency pos_line_total_text " data-currency_symbol="true">$ 2,612.50</span>
                                                        </td>
                                                        <td class="text-center">
                                                            <i class="fa fa-times text-danger pos_remove_row cursor-pointer" aria-hidden="true"></i>
                                                        </td>
                                                    </tr>
                                                    <tr class="product_row" data-row_index="15">
                                                        <td>

                                                            <div data-toggle="tooltip" data-placement="bottom" title="Edit product Unit Price and Tax">
                                    <span class="text-link text-info cursor-pointer" data-toggle="modal" data-target="#row_edit_product_price_modal_15">
                                      Apple iPhone 8 (Color:Black)<br>AS0015-3 Apple
                                      &nbsp;<i class="fa fa-info-circle"></i>
                                    </span>
                                                            </div>
                                                            <input type="hidden" class="enable_sr_no" value="0">
                                                            <input type="hidden" class="product_type" name="products[15][product_type]" value="variable">

                                                            <div class="modal fade row_edit_product_price_model" id="row_edit_product_price_modal_15" tabindex="-1" role="dialog">
                                                                <div class="modal-dialog" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">�</span></button>
                                                                            <h4 class="modal-title" id="myModalLabel">Apple iPhone 8 (Color:Black) - AS0015-3</h4>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <div class="row">
                                                                                <div class="form-group col-xs-12 ">
                                                                                    <label>Unit Price</label>
                                                                                    <input type="text" name="products[15][unit_price]" class="form-control pos_unit_price input_number mousetrap" value="1,187.50">
                                                                                </div>

                                                                                <div class="form-group col-xs-12 col-sm-6 ">
                                                                                    <label>Discount Type</label>
                                                                                    <select class="form-control row_discount_type" name="products[15][line_discount_type]">
                                                                                        <option value="fixed" selected="selected">Fixed</option>
                                                                                        <option value="percentage">Percentage</option>
                                                                                    </select>
                                                                                </div>
                                                                                <div class="form-group col-xs-12 col-sm-6 ">
                                                                                    <label>Discount Amount</label>
                                                                                    <input class="form-control input_number row_discount_amount" name="products[15][line_discount_amount]" type="text" value="0.00">
                                                                                </div>
                                                                                <div class="form-group col-xs-12 ">
                                                                                    <label>Tax</label>

                                                                                    <input class="item_tax" name="products[15][item_tax]" type="hidden" value="118.75">

                                                                                    <select class="form-control tax_id" name="products[15][tax_id]">
                                                                                        <option value="">Select</option>
                                                                                        <option value="">None</option>
                                                                                        <option value="1" selected="selected" data-rate="10">VAT@10%</option>
                                                                                        <option value="2" data-rate="10">CGST@10%</option>
                                                                                        <option value="3" data-rate="8">SGST@8%</option>
                                                                                        <option value="4" data-rate="18">GST@18%</option>
                                                                                    </select>
                                                                                </div>
                                                                                <div class="form-group col-xs-12">
                                                                                    <label>Description</label>
                                                                                    <textarea class="form-control" name="products[15][sell_line_note]" rows="3"></textarea>
                                                                                    <p class="help-block">Add product IMEI, Serial number or other informations here.</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!-- Description modal end -->

                                                        </td>

                                                        <td>

                                                            <input type="hidden" name="products[15][product_id]" class="form-control product_id" value="15">

                                                            <input type="hidden" value="51" name="products[15][variation_id]" class="row_variation_id">

                                                            <input type="hidden" value="1" name="products[15][enable_stock]">

                                                            <div class="input-group input-number">
                                                                <span class="input-group-btn"><button type="button" class="btn btn-default btn-flat quantity-down"><i class="fa fa-minus text-danger"></i></button></span>
                                                                <input type="text" data-min="1" class="form-control pos_quantity input_number mousetrap input_quantity" value="1.00" name="products[15][quantity]" data-allow-overselling="false" data-decimal="0" data-rule-abs_digit="true" data-msg-abs_digit="Decimal value not allowed" data-rule-required="true" data-msg-required="This field is required" data-rule-max-value="30.0000" data-qty_available="30.0000" data-msg-max-value="Only 30.00 Pc(s) available" data-msg_max_default="Only 30.00 Pc(s) available">
                                                                <span class="input-group-btn"><button type="button" class="btn btn-default btn-flat quantity-up"><i class="fa fa-plus text-success"></i></button></span>
                                                            </div>

                                                            <input type="hidden" name="products[15][product_unit_id]" value="1">
                                                            <br>
                                                            <select name="products[15][sub_unit_id]" class="form-control input-sm sub_unit">
                                                                <option value="1" data-multiplier="1" data-unit_name="Pieces" data-allow_decimal="0">
                                                                    Pieces
                                                                </option>
                                                            </select>

                                                            <input type="hidden" class="base_unit_multiplier" name="products[15][base_unit_multiplier]" value="1">

                                                            <input type="hidden" class="hidden_base_unit_sell_price" value="1187.5">

                                                        </td>

                                                        <td class="">
                                                            <input type="text" name="products[15][unit_price_inc_tax]" class="form-control pos_unit_price_inc_tax input_number" value="1,306.25">
                                                        </td>
                                                        <td class="text-center v-center">
                                                            <input type="hidden" class="form-control pos_line_total " value="1,306.25">
                                                            <span class="display_currency pos_line_total_text " data-currency_symbol="true">$ 1,306.25</span>
                                                        </td>
                                                        <td class="text-center">
                                                            <i class="fa fa-times text-danger pos_remove_row cursor-pointer" aria-hidden="true"></i>
                                                        </td>
                                                    </tr>
                                                    <tr class="product_row" data-row_index="16">
                                                        <td>

                                                            <div data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Edit product Unit Price and Tax">
                                    <span class="text-link text-info cursor-pointer" data-toggle="modal" data-target="#row_edit_product_price_modal_16">
                                      Acer Aspire E 15 (Color:White)<br>AS0017-2 Acer
                                      &nbsp;<i class="fa fa-info-circle"></i>
                                    </span>
                                                            </div>
                                                            <input type="hidden" class="enable_sr_no" value="0">
                                                            <input type="hidden" class="product_type" name="products[16][product_type]" value="variable">

                                                            <div class="modal fade row_edit_product_price_model" id="row_edit_product_price_modal_16" tabindex="-1" role="dialog">
                                                                <div class="modal-dialog" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">�</span></button>
                                                                            <h4 class="modal-title" id="myModalLabel">Acer Aspire E 15 (Color:White) - AS0017-2</h4>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <div class="row">
                                                                                <div class="form-group col-xs-12 ">
                                                                                    <label>Unit Price</label>
                                                                                    <input type="text" name="products[16][unit_price]" class="form-control pos_unit_price input_number mousetrap" value="437.50">
                                                                                </div>

                                                                                <div class="form-group col-xs-12 col-sm-6 ">
                                                                                    <label>Discount Type</label>
                                                                                    <select class="form-control row_discount_type" name="products[16][line_discount_type]">
                                                                                        <option value="fixed" selected="selected">Fixed</option>
                                                                                        <option value="percentage">Percentage</option>
                                                                                    </select>
                                                                                </div>
                                                                                <div class="form-group col-xs-12 col-sm-6 ">
                                                                                    <label>Discount Amount</label>
                                                                                    <input class="form-control input_number row_discount_amount" name="products[16][line_discount_amount]" type="text" value="0.00">
                                                                                </div>
                                                                                <div class="form-group col-xs-12 ">
                                                                                    <label>Tax</label>

                                                                                    <input class="item_tax" name="products[16][item_tax]" type="hidden" value="0.00">

                                                                                    <select class="form-control tax_id" name="products[16][tax_id]">
                                                                                        <option selected="selected" value="">Select</option>
                                                                                        <option value="" selected="selected">None</option>
                                                                                        <option value="1" data-rate="10">VAT@10%</option>
                                                                                        <option value="2" data-rate="10">CGST@10%</option>
                                                                                        <option value="3" data-rate="8">SGST@8%</option>
                                                                                        <option value="4" data-rate="18">GST@18%</option>
                                                                                    </select>
                                                                                </div>
                                                                                <div class="form-group col-xs-12">
                                                                                    <label>Description</label>
                                                                                    <textarea class="form-control" name="products[16][sell_line_note]" rows="3"></textarea>
                                                                                    <p class="help-block">Add product IMEI, Serial number or other informations here.</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!-- Description modal end -->

                                                        </td>

                                                        <td>

                                                            <input type="hidden" name="products[16][product_id]" class="form-control product_id" value="17">

                                                            <input type="hidden" value="58" name="products[16][variation_id]" class="row_variation_id">

                                                            <input type="hidden" value="1" name="products[16][enable_stock]">

                                                            <div class="input-group input-number">
                                                                <span class="input-group-btn"><button type="button" class="btn btn-default btn-flat quantity-down"><i class="fa fa-minus text-danger"></i></button></span>
                                                                <input type="text" data-min="1" class="form-control pos_quantity input_number mousetrap input_quantity" value="1.00" name="products[16][quantity]" data-allow-overselling="false" data-decimal="0" data-rule-abs_digit="true" data-msg-abs_digit="Decimal value not allowed" data-rule-required="true" data-msg-required="This field is required" data-rule-max-value="48.0000" data-qty_available="48.0000" data-msg-max-value="Only 48.00 Pc(s) available" data-msg_max_default="Only 48.00 Pc(s) available">
                                                                <span class="input-group-btn"><button type="button" class="btn btn-default btn-flat quantity-up"><i class="fa fa-plus text-success"></i></button></span>
                                                            </div>

                                                            <input type="hidden" name="products[16][product_unit_id]" value="1">
                                                            <br>
                                                            <select name="products[16][sub_unit_id]" class="form-control input-sm sub_unit">
                                                                <option value="1" data-multiplier="1" data-unit_name="Pieces" data-allow_decimal="0">
                                                                    Pieces
                                                                </option>
                                                            </select>

                                                            <input type="hidden" class="base_unit_multiplier" name="products[16][base_unit_multiplier]" value="1">

                                                            <input type="hidden" class="hidden_base_unit_sell_price" value="437.5">

                                                        </td>

                                                        <td class="">
                                                            <input type="text" name="products[16][unit_price_inc_tax]" class="form-control pos_unit_price_inc_tax input_number" value="437.50">
                                                        </td>
                                                        <td class="text-center v-center">
                                                            <input type="hidden" class="form-control pos_line_total " value="437.50">
                                                            <span class="display_currency pos_line_total_text " data-currency_symbol="true">$ 437.50</span>
                                                        </td>
                                                        <td class="text-center">
                                                            <i class="fa fa-times text-danger pos_remove_row cursor-pointer" aria-hidden="true"></i>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <table class="table table-condensed">
                                                    <tbody>
                                                    <tr>
                                                        <td><b>Items:</b>&nbsp;
                                                            <span class="total_quantity">4.00</span></td>
                                                        <td>
                                                            <b>Total:</b> &nbsp;
                                                            <span class="price_total">4,356.25</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <b>
                                                                Discount <i class="fa fa-info-circle text-info hover-q no-print " aria-hidden="true" data-container="body" data-toggle="popover" data-placement="auto bottom" data-content="Set 'Default Sale Discount' for all sales in Business Settings. Click on the edit icon below to add/update discount." data-html="true" data-trigger="hover"></i> (-):
                                                                <i class="fas fa-edit cursor-pointer" id="pos-edit-discount" title="Edit Discount" aria-hidden="true" data-toggle="modal" data-target="#posEditDiscountModal"></i>
                                                                <span id="total_discount">435.63</span>
                                                                <input type="hidden" name="discount_type" id="discount_type" value="percentage" data-default="percentage">

                                                                <input type="hidden" name="discount_amount" id="discount_amount" value="10.00" data-default="10.00">

                                                                <input type="hidden" name="rp_redeemed" id="rp_redeemed" value="0">

                                                                <input type="hidden" name="rp_redeemed_amount" id="rp_redeemed_amount" value="0">

                                                            </b>
                                                        </td>
                                                        <td class="">
                                  <span>
                                    <b>Order Tax(+): <i class="fa fa-info-circle text-info hover-q no-print " aria-hidden="true" data-container="body" data-toggle="popover" data-placement="auto bottom" data-content="Set 'Default Sale Tax' for all sales in Business Settings. Click on the edit icon below to add/update Order Tax." data-html="true" data-trigger="hover" data-original-title="" title=""></i></b>
                                    <i class="fas fa-edit cursor-pointer" title="Edit Order Tax" aria-hidden="true" data-toggle="modal" data-target="#posEditOrderTaxModal" id="pos-edit-tax"></i>
                                    <span id="order_tax">0.00</span>

                                    <input type="hidden" name="tax_rate_id" id="tax_rate_id" value="" data-default="">

                                    <input type="hidden" name="tax_calculation_amount" id="tax_calculation_amount" value="0.00" data-default="">

                                  </span>
                                                        </td>
                                                        <td class="">
                                  <span>

                                    <b>Shipping(+): <i class="fa fa-info-circle text-info hover-q no-print " aria-hidden="true" data-container="body" data-toggle="popover" data-placement="auto bottom" data-content="Set shipping details and shipping charges. Click on the edit icon below to add/update shipping details and charges." data-html="true" data-trigger="hover" data-original-title="" title=""></i></b>
                                    <i class="fas fa-edit cursor-pointer" title="Shipping" aria-hidden="true" data-toggle="modal" data-target="#posShippingModal"></i>
                                    <span id="shipping_charges_amount">0.00</span>
                                    <input type="hidden" name="shipping_details" id="shipping_details" value="" data-default="">

                                    <input type="hidden" name="shipping_address" id="shipping_address" value="">

                                    <input type="hidden" name="shipping_status" id="shipping_status" value="">

                                    <input type="hidden" name="delivered_to" id="delivered_to" value="">

                                    <input type="hidden" name="shipping_charges" id="shipping_charges" value="0.00" data-default="0.00">
                                  </span>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="modal fade" tabindex="-1" role="dialog" id="modal_payment">
                                            <div class="modal-dialog modal-lg" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">�</span></button>
                                                        <h4 class="modal-title">Payment</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col-md-9">
                                                                <div class="row">
                                                                    <div id="payment_rows_div">

                                                                        <div class="col-md-12">
                                                                            <div class="box box-solid payment_row bg-lightgray">

                                                                                <div class="box-body">
                                                                                    <div class="row">
                                                                                        <input type="hidden" class="payment_row_index" value="0">
                                                                                        <div class="col-md-4">
                                                                                            <div class="form-group">
                                                                                                <label for="amount_0">Amount:*</label>
                                                                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                      <i class="fas fa-money-bill-alt"></i>
                                                    </span>
                                                                                                    <input class="form-control payment-amount input_number" required="" id="amount_0" placeholder="Amount" name="payment[0][amount]" type="text" value="0.00" aria-required="true">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-md-4">
                                                                                            <div class="form-group">
                                                                                                <label for="method_0">Payment Method:*</label>
                                                                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                      <i class="fas fa-money-bill-alt"></i>
                                                    </span>
                                                                                                    <select class="form-control col-md-12 payment_types_dropdown" required="" id="method_0" style="width:100%;" name="payment[0][method]" aria-required="true">
                                                                                                        <option value="">Please Select</option>
                                                                                                        <option value="cash" selected="selected">Cash</option>
                                                                                                        <option value="card">Card</option>
                                                                                                        <option value="cheque">Cheque</option>
                                                                                                        <option value="bank_transfer">Bank Transfer</option>
                                                                                                        <option value="other">Other</option>
                                                                                                        <option value="custom_pay_1">Custom Payment 1</option>
                                                                                                        <option value="custom_pay_2">Custom Payment 2</option>
                                                                                                        <option value="custom_pay_3">Custom Payment 3</option>
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-md-4">
                                                                                            <div class="form-group">
                                                                                                <label for="account_0">Payment Account:</label>
                                                                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                      <i class="fas fa-money-bill-alt"></i>
                                                    </span>
                                                                                                    <select class="form-control select2 select2-hidden-accessible" id="account_0" style="width:100%;" name="payment[0][account_id]" tabindex="-1" aria-hidden="true">
                                                                                                        <option value="" selected="selected">None</option>
                                                                                                    </select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-account_0-container"><span class="select2-selection__rendered" id="select2-account_0-container" title="None">None</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="clearfix"></div>
                                                                                        <div class="payment_details_div  hide " data-type="card">
                                                                                            <div class="col-md-4">
                                                                                                <div class="form-group">
                                                                                                    <label for="card_number_0">Card Number</label>
                                                                                                    <input class="form-control" placeholder="Card Number" id="card_number_0" name="payment[0][card_number]" type="text" value="">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-md-4">
                                                                                                <div class="form-group">
                                                                                                    <label for="card_holder_name_0">Card holder name</label>
                                                                                                    <input class="form-control" placeholder="Card holder name" id="card_holder_name_0" name="payment[0][card_holder_name]" type="text" value="">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-md-4">
                                                                                                <div class="form-group">
                                                                                                    <label for="card_transaction_number_0">Card Transaction No.</label>
                                                                                                    <input class="form-control" placeholder="Card Transaction No." id="card_transaction_number_0" name="payment[0][card_transaction_number]" type="text" value="">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="clearfix"></div>
                                                                                            <div class="col-md-3">
                                                                                                <div class="form-group">
                                                                                                    <label for="card_type_0">Card Type</label>
                                                                                                    <select class="form-control" id="card_type_0" name="payment[0][card_type]">
                                                                                                        <option value="credit">Credit Card</option>
                                                                                                        <option value="debit">Debit Card</option>
                                                                                                        <option value="visa">Visa</option>
                                                                                                        <option value="master">MasterCard</option>
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-md-3">
                                                                                                <div class="form-group">
                                                                                                    <label for="card_month_0">Month</label>
                                                                                                    <input class="form-control" placeholder="Month" id="card_month_0" name="payment[0][card_month]" type="text" value="">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-md-3">
                                                                                                <div class="form-group">
                                                                                                    <label for="card_year_0">Year</label>
                                                                                                    <input class="form-control" placeholder="Year" id="card_year_0" name="payment[0][card_year]" type="text" value="">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-md-3">
                                                                                                <div class="form-group">
                                                                                                    <label for="card_security_0">Security Code</label>
                                                                                                    <input class="form-control" placeholder="Security Code" id="card_security_0" name="payment[0][card_security]" type="text" value="">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="clearfix"></div>
                                                                                        </div>
                                                                                        <div class="payment_details_div  hide " data-type="cheque">
                                                                                            <div class="col-md-12">
                                                                                                <div class="form-group">
                                                                                                    <label for="cheque_number_0">Cheque No.</label>
                                                                                                    <input class="form-control" placeholder="Cheque No." id="cheque_number_0" name="payment[0][cheque_number]" type="text" value="">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="payment_details_div  hide " data-type="bank_transfer">
                                                                                            <div class="col-md-12">
                                                                                                <div class="form-group">
                                                                                                    <label for="bank_account_number_0">Bank Account No</label>
                                                                                                    <input class="form-control" placeholder="Bank Account No" id="bank_account_number_0" name="payment[0][bank_account_number]" type="text" value="">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="payment_details_div  hide " data-type="custom_pay_1">
                                                                                            <div class="col-md-12">
                                                                                                <div class="form-group">
                                                                                                    <label for="transaction_no_1_0">Transaction No.</label>
                                                                                                    <input class="form-control" placeholder="Transaction No." id="transaction_no_1_0" name="payment[0][transaction_no_1]" type="text" value="">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="payment_details_div  hide " data-type="custom_pay_2">
                                                                                            <div class="col-md-12">
                                                                                                <div class="form-group">
                                                                                                    <label for="transaction_no_2_0">Transaction No.</label>
                                                                                                    <input class="form-control" placeholder="Transaction No." id="transaction_no_2_0" name="payment[0][transaction_no_2]" type="text" value="">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="payment_details_div  hide " data-type="custom_pay_3">
                                                                                            <div class="col-md-12">
                                                                                                <div class="form-group">
                                                                                                    <label for="transaction_no_3_0">Transaction No.</label>
                                                                                                    <input class="form-control" placeholder="Transaction No." id="transaction_no_3_0" name="payment[0][transaction_no_3]" type="text" value="">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-md-12">
                                                                                            <div class="form-group">
                                                                                                <label for="note_0">Payment note:</label>
                                                                                                <textarea class="form-control" rows="3" id="note_0" name="payment[0][note]" cols="50"></textarea>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <input type="hidden" id="payment_row_index" value="1">
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <button type="button" class="btn btn-primary btn-block" id="add-payment-row">Add Payment Row</button>
                                                                    </div>
                                                                </div>
                                                                <br>
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="sale_note">Sell note:</label>
                                                                            <textarea class="form-control" rows="3" placeholder="Sell note" name="sale_note" cols="50" id="sale_note"></textarea>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="staff_note">Staff note:</label>
                                                                            <textarea class="form-control" rows="3" placeholder="Staff note" name="staff_note" cols="50" id="staff_note"></textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="box box-solid bg-orange">
                                                                    <div class="box-body">
                                                                        <div class="col-md-12">
                                                                            <strong>
                                                                                Total Items:
                                                                            </strong>
                                                                            <br>
                                                                            <span class="lead text-bold total_quantity">4.00</span>
                                                                        </div>

                                                                        <div class="col-md-12">
                                                                            <hr>
                                                                            <strong>
                                                                                Total Payable:
                                                                            </strong>
                                                                            <br>
                                                                            <span class="lead text-bold total_payable_span">$ 3,920.63</span>
                                                                        </div>

                                                                        <div class="col-md-12">
                                                                            <hr>
                                                                            <strong>
                                                                                Total Paying:
                                                                            </strong>
                                                                            <br>
                                                                            <span class="lead text-bold total_paying">$ 3,920.63</span>
                                                                            <input type="hidden" id="total_paying_input" value="3,920.63">
                                                                        </div>

                                                                        <div class="col-md-12">
                                                                            <hr>
                                                                            <strong>
                                                                                Change Return:
                                                                            </strong>
                                                                            <br>
                                                                            <span class="lead text-bold change_return_span">$ 0.00</span>
                                                                            <input class="form-control change_return input_number" required="" id="change_return" placeholder="Amount" readonly="" name="change_return" type="hidden" value="0.00" aria-required="true">
                                                                            <!-- <span class="lead text-bold total_quantity">0</span> -->
                                                                        </div>

                                                                        <div class="col-md-12">
                                                                            <hr>
                                                                            <strong>
                                                                                Balance:
                                                                            </strong>
                                                                            <br>
                                                                            <span class="lead text-bold balance_due">$ 0.00</span>
                                                                            <input type="hidden" id="in_balance_due" value="0.00">
                                                                        </div>

                                                                    </div>
                                                                    <!-- /.box-body -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary" id="pos-save">Finalize Payment</button>
                                                    </div>
                                                </div><!-- /.modal-content -->
                                            </div><!-- /.modal-dialog -->
                                        </div><!-- /.modal -->

                                        <!-- Used for express checkout card transaction -->
                                        <div class="modal fade" tabindex="-1" role="dialog" id="card_details_modal">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">�</span></button>
                                                        <h4 class="modal-title">Card transaction details</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col-md-12">

                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="card_number">Card Number</label>
                                                                        <input class="form-control" placeholder="Card Number" id="card_number" autofocus="" name="" type="text">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="card_holder_name">Card holder name</label>
                                                                        <input class="form-control" placeholder="Card holder name" id="card_holder_name" name="" type="text">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="card_transaction_number">Card Transaction No.</label>
                                                                        <input class="form-control" placeholder="Card Transaction No." id="card_transaction_number" name="" type="text">
                                                                    </div>
                                                                </div>
                                                                <div class="clearfix"></div>
                                                                <div class="col-md-3">
                                                                    <div class="form-group">
                                                                        <label for="card_type">Card Type</label>
                                                                        <select class="form-control select2 select2-hidden-accessible" id="card_type" name="" tabindex="-1" aria-hidden="true">
                                                                            <option value="visa" selected="selected">Visa</option>
                                                                            <option value="master">MasterCard</option>
                                                                        </select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: auto;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-card_type-container"><span class="select2-selection__rendered" id="select2-card_type-container" title="Visa">Visa</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-group">
                                                                        <label for="card_month">Month</label>
                                                                        <input class="form-control" placeholder="Month" id="card_month" name="" type="text">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-group">
                                                                        <label for="card_year">Year</label>
                                                                        <input class="form-control" placeholder="Year" id="card_year" name="" type="text">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-group">
                                                                        <label for="card_security">Security Code</label>
                                                                        <input class="form-control" placeholder="Security Code" id="card_security" name="" type="text">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-primary" id="pos-save-card">Finalize Payment</button>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal fade" tabindex="-1" role="dialog" id="confirmSuspendModal">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">�</span></button>
                                                        <h4 class="modal-title">Suspend Sale</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col-xs-12">
                                                                <div class="form-group">
                                                                    <label for="additional_notes">Suspend Note:</label>
                                                                    <textarea class="form-control" rows="4" name="additional_notes" cols="50" id="additional_notes"></textarea>
                                                                    <input id="is_suspend" name="is_suspend" type="hidden" value="0">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-primary" id="pos-suspend">Save</button>
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                    </div>
                                                </div><!-- /.modal-content -->
                                            </div><!-- /.modal-dialog -->
                                        </div><!-- /.modal -->
                                        <!-- Edit discount Modal -->
                                        <div class="modal fade" tabindex="-1" role="dialog" id="recurringInvoiceModal">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">�</span></button>
                                                        <h4 class="modal-title">Subscribe </h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="recur_interval">Subscription Interval:*</label>
                                                                    <div class="input-group">
                                                                        <input class="form-control" required="" style="width: 50%;" name="recur_interval" type="number" id="recur_interval" aria-required="true">

                                                                        <select class="form-control" required="" style="width: 50%;" name="recur_interval_type" aria-required="true">
                                                                            <option value="days" selected="selected">Days</option>
                                                                            <option value="months">Months</option>
                                                                            <option value="years">Years</option>
                                                                        </select>

                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="recur_repetitions">No. of Repetitions:</label>
                                                                    <input class="form-control" name="recur_repetitions" type="number" id="recur_repetitions">
                                                                    <p class="help-block">If blank invoice will be generated infinite times</p>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                    </div>
                                                </div><!-- /.modal-content -->
                                            </div><!-- /.modal-dialog -->
                                        </div><!-- /.modal -->
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 no-padding">
                                <div class="row">
                                    <div class="col-md-6">
                                        <select class="select2 select2-hidden-accessible" id="product_category" style="width:100% !important" tabindex="-1" aria-hidden="true">

                                            <option value="all">All Categories</option>

                                            <option value="3">Accessories</option>
                                            <option value="18">Books</option>
                                            <option value="12">Electronics</option>
                                            <option value="21">Food &amp; Grocery</option>
                                            <option value="1">Men's</option>
                                            <option value="15">Sports</option>
                                            <option value="2">Women's</option>

                                            <optgroup label="Accessories">
                                                <option value="6">Belts</option>
                                                <option value="10">Sandal</option>
                                                <option value="8">Shoes</option>
                                                <option value="11">Wallets</option>
                                            </optgroup>
                                            <optgroup label="Books">
                                                <option value="19">Autobiography</option>
                                                <option value="20">Children's books</option>
                                            </optgroup>
                                            <optgroup label="Electronics">
                                                <option value="13">Cell Phones</option>
                                                <option value="14">Computers</option>
                                            </optgroup>
                                            <optgroup label="Men's">
                                                <option value="4">Jeans</option>
                                                <option value="5">Shirts</option>
                                            </optgroup>
                                            <optgroup label="Sports">
                                                <option value="16">Athletic Clothing</option>
                                                <option value="17">Exercise &amp; Fitness</option>
                                            </optgroup>
                                        </select><span class="select2 select2-container select2-container--default select2-container--below" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-product_category-container"><span class="select2-selection__rendered" id="select2-product_category-container" title="All Categories">All Categories</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    </div>

                                    <div class="col-md-6">
                                        <select id="product_brand" class="select2 select2-hidden-accessible" name="size" style="width:100% !important" tabindex="-1" aria-hidden="true">
                                            <option value="all">All Brands</option>
                                            <option value="1">Levis</option>
                                            <option value="2">Espirit</option>
                                            <option value="3">U.S. Polo Assn.</option>
                                            <option value="4">Nike</option>
                                            <option value="5">Puma</option>
                                            <option value="6">Adidas</option>
                                            <option value="7">Samsung</option>
                                            <option value="8">Apple</option>
                                            <option value="9">Acer</option>
                                            <option value="10">Bowflex</option>
                                            <option value="11">Oreo</option>
                                            <option value="12">Sharewood</option>
                                            <option value="13">Barilla</option>
                                            <option value="14">Lipton</option>
                                        </select><span class="select2 select2-container select2-container--default select2-container--below" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-product_brand-container"><span class="select2-selection__rendered" id="select2-product_brand-container" title="All Brands">All Brands</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <input type="hidden" id="suggestion_page" value="4">
                                    <div class="col-md-12">
                                        <div class="eq-height-row" id="product_list_body">
                                            <div class="col-md-3 col-xs-4 product_list no-print">
                                                <div class="product_box" data-toggle="tooltip" data-placement="bottom" data-variation_id="57" title="" data-original-title="Acer Aspire E 15 - Black  (AS0017-1)">

                                                    <div class="image-container" style="background-image: url(
											https://pos.ultimatefosters.com/uploads/img/1528727793_acerE15.jpg
									);
			background-repeat: no-repeat; background-position: center;
			background-size: contain;">

                                                    </div>

                                                    <div class="text_div">
                                                        <small class="text text-muted">Acer Aspire E 15
                                                            - Black
                                                        </small>

                                                        <small class="text-muted">
                                                            (AS0017-1)
                                                        </small>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-md-3 col-xs-4 product_list no-print">
                                                <div class="product_box" data-toggle="tooltip" data-placement="bottom" data-variation_id="58" title="" data-original-title="Acer Aspire E 15 - White  (AS0017-2)">

                                                    <div class="image-container" style="background-image: url(
											https://pos.ultimatefosters.com/uploads/img/1528727793_acerE15.jpg
									);
			background-repeat: no-repeat; background-position: center;
			background-size: contain;">

                                                    </div>

                                                    <div class="text_div">
                                                        <small class="text text-muted">Acer Aspire E 15
                                                            - White
                                                        </small>

                                                        <small class="text-muted">
                                                            (AS0017-2)
                                                        </small>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-md-3 col-xs-4 product_list no-print">
                                                <div class="product_box" data-toggle="tooltip" data-placement="bottom" data-variation_id="107" title="" data-original-title="Apple - Fuji  (AS0064)">

                                                    <div class="image-container" style="background-image: url(
											https://pos.ultimatefosters.com/uploads/img/1528780234_apples.jpg
									);
			background-repeat: no-repeat; background-position: center;
			background-size: contain;">

                                                    </div>

                                                    <div class="text_div">
                                                        <small class="text text-muted">Apple - Fuji
                                                        </small>

                                                        <small class="text-muted">
                                                            (AS0064)
                                                        </small>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-md-3 col-xs-4 product_list no-print">
                                                <div class="product_box" data-toggle="tooltip" data-placement="bottom" data-variation_id="49" title="" data-original-title="Apple iPhone 8 - White  (AS0015-1)">

                                                    <div class="image-container" style="background-image: url(
											https://pos.ultimatefosters.com/uploads/img/1528727817_iphone8.jpg
									);
			background-repeat: no-repeat; background-position: center;
			background-size: contain;">

                                                    </div>

                                                    <div class="text_div">
                                                        <small class="text text-muted">Apple iPhone 8
                                                            - White
                                                        </small>

                                                        <small class="text-muted">
                                                            (AS0015-1)
                                                        </small>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-md-3 col-xs-4 product_list no-print">
                                                <div class="product_box" data-toggle="tooltip" data-placement="bottom" data-variation_id="50" title="" data-original-title="Apple iPhone 8 - Gray  (AS0015-2)">

                                                    <div class="image-container" style="background-image: url(
											https://pos.ultimatefosters.com/uploads/img/1528727817_iphone8.jpg
									);
			background-repeat: no-repeat; background-position: center;
			background-size: contain;">

                                                    </div>

                                                    <div class="text_div">
                                                        <small class="text text-muted">Apple iPhone 8
                                                            - Gray
                                                        </small>

                                                        <small class="text-muted">
                                                            (AS0015-2)
                                                        </small>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-md-3 col-xs-4 product_list no-print">
                                                <div class="product_box" data-toggle="tooltip" data-placement="bottom" data-variation_id="51" title="" data-original-title="Apple iPhone 8 - Black  (AS0015-3)">

                                                    <div class="image-container" style="background-image: url(
											https://pos.ultimatefosters.com/uploads/img/1528727817_iphone8.jpg
									);
			background-repeat: no-repeat; background-position: center;
			background-size: contain;">

                                                    </div>

                                                    <div class="text_div">
                                                        <small class="text text-muted">Apple iPhone 8
                                                            - Black
                                                        </small>

                                                        <small class="text-muted">
                                                            (AS0015-3)
                                                        </small>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-md-3 col-xs-4 product_list no-print">
                                                <div class="product_box" data-toggle="tooltip" data-placement="bottom" data-variation_id="52" title="" data-original-title="Apple iPhone 8 - 32 GB  (AS0015-1)">

                                                    <div class="image-container" style="background-image: url(
											https://pos.ultimatefosters.com/uploads/img/1528727817_iphone8.jpg
									);
			background-repeat: no-repeat; background-position: center;
			background-size: contain;">

                                                    </div>

                                                    <div class="text_div">
                                                        <small class="text text-muted">Apple iPhone 8
                                                            - 32 GB
                                                        </small>

                                                        <small class="text-muted">
                                                            (AS0015-1)
                                                        </small>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-md-3 col-xs-4 product_list no-print">
                                                <div class="product_box" data-toggle="tooltip" data-placement="bottom" data-variation_id="53" title="" data-original-title="Apple iPhone 8 - 64 GB  (AS0015-2)">

                                                    <div class="image-container" style="background-image: url(
											https://pos.ultimatefosters.com/uploads/img/1528727817_iphone8.jpg
									);
			background-repeat: no-repeat; background-position: center;
			background-size: contain;">

                                                    </div>

                                                    <div class="text_div">
                                                        <small class="text text-muted">Apple iPhone 8
                                                            - 64 GB
                                                        </small>

                                                        <small class="text-muted">
                                                            (AS0015-2)
                                                        </small>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-md-3 col-xs-4 product_list no-print">
                                                <div class="product_box" data-toggle="tooltip" data-placement="bottom" data-variation_id="59" title="" data-original-title="Apple MacBook Air - 256 GB  (AS0018-1)">

                                                    <div class="image-container" style="background-image: url(
											https://pos.ultimatefosters.com/uploads/img/1528727849_macbookair.jpg
									);
			background-repeat: no-repeat; background-position: center;
			background-size: contain;">

                                                    </div>

                                                    <div class="text_div">
                                                        <small class="text text-muted">Apple MacBook Air
                                                            - 256 GB
                                                        </small>

                                                        <small class="text-muted">
                                                            (AS0018-1)
                                                        </small>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-md-3 col-xs-4 product_list no-print">
                                                <div class="product_box" data-toggle="tooltip" data-placement="bottom" data-variation_id="60" title="" data-original-title="Apple MacBook Air - 500 GB  (AS0018-2)">

                                                    <div class="image-container" style="background-image: url(
											https://pos.ultimatefosters.com/uploads/img/1528727849_macbookair.jpg
									);
			background-repeat: no-repeat; background-position: center;
			background-size: contain;">

                                                    </div>

                                                    <div class="text_div">
                                                        <small class="text text-muted">Apple MacBook Air
                                                            - 500 GB
                                                        </small>

                                                        <small class="text-muted">
                                                            (AS0018-2)
                                                        </small>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-md-3 col-xs-4 product_list no-print">
                                                <div class="product_box" data-toggle="tooltip" data-placement="bottom" data-variation_id="106" title="" data-original-title="Banana  (AS0063)">

                                                    <div class="image-container" style="background-image: url(
											https://pos.ultimatefosters.com/uploads/img/1528780092_banana.jpg
									);
			background-repeat: no-repeat; background-position: center;
			background-size: contain;">

                                                    </div>

                                                    <div class="text_div">
                                                        <small class="text text-muted">Banana
                                                        </small>

                                                        <small class="text-muted">
                                                            (AS0063)
                                                        </small>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-md-3 col-xs-4 product_list no-print">
                                                <div class="product_box" data-toggle="tooltip" data-placement="bottom" data-variation_id="71" title="" data-original-title="Barilla Pasta  (AS0028)">

                                                    <div class="image-container" style="background-image: url(
											https://pos.ultimatefosters.com/uploads/img/1528727865_barilla_pasta.jpeg
									);
			background-repeat: no-repeat; background-position: center;
			background-size: contain;">

                                                    </div>

                                                    <div class="text_div">
                                                        <small class="text text-muted">Barilla Pasta
                                                        </small>

                                                        <small class="text-muted">
                                                            (AS0028)
                                                        </small>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-md-3 col-xs-4 product_list no-print">
                                                <div class="product_box" data-toggle="tooltip" data-placement="bottom" data-variation_id="70" title="" data-original-title="Butter Cookies  (AS0027)">

                                                    <div class="image-container" style="background-image: url(
											https://pos.ultimatefosters.com/uploads/img/1528727881_butter_cookies.jpg
									);
			background-repeat: no-repeat; background-position: center;
			background-size: contain;">

                                                    </div>

                                                    <div class="text_div">
                                                        <small class="text text-muted">Butter Cookies
                                                        </small>

                                                        <small class="text-muted">
                                                            (AS0027)
                                                        </small>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-md-3 col-xs-4 product_list no-print">
                                                <div class="product_box" data-toggle="tooltip" data-placement="bottom" data-variation_id="61" title="" data-original-title="Cushion Crew Socks  (AS0019)">

                                                    <div class="image-container" style="background-image: url(
											https://pos.ultimatefosters.com/uploads/img/1528727903_socks.jpg
									);
			background-repeat: no-repeat; background-position: center;
			background-size: contain;">

                                                    </div>

                                                    <div class="text_div">
                                                        <small class="text text-muted">Cushion Crew Socks
                                                        </small>

                                                        <small class="text-muted">
                                                            (AS0019)
                                                        </small>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-md-3 col-xs-4 product_list no-print">
                                                <div class="product_box" data-toggle="tooltip" data-placement="bottom" data-variation_id="65" title="" data-original-title="Diary of a Wimpy Kid  (AS0022)">

                                                    <div class="image-container" style="background-image: url(
											https://pos.ultimatefosters.com/uploads/img/1528727917_diary_of_whimp_kid.jpeg
									);
			background-repeat: no-repeat; background-position: center;
			background-size: contain;">

                                                    </div>

                                                    <div class="text_div">
                                                        <small class="text text-muted">Diary of a Wimpy Kid
                                                        </small>

                                                        <small class="text-muted">
                                                            (AS0022)
                                                        </small>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-md-3 col-xs-4 product_list no-print">
                                                <div class="product_box" data-toggle="tooltip" data-placement="bottom" data-variation_id="67" title="Etched in Sand Autobiography  (AS0024)">

                                                    <div class="image-container" style="background-image: url(
											https://pos.ultimatefosters.com/uploads/img/1528727933_etched_in_stone.jpg
									);
			background-repeat: no-repeat; background-position: center;
			background-size: contain;">

                                                    </div>

                                                    <div class="text_div">
                                                        <small class="text text-muted">Etched in Sand Autobiography
                                                        </small>

                                                        <small class="text-muted">
                                                            (AS0024)
                                                        </small>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-md-3 col-xs-4 product_list no-print">
                                                <div class="product_box" data-toggle="tooltip" data-placement="bottom" data-variation_id="68" title="" data-original-title="Five Presidents  (AS0025)">

                                                    <div class="image-container" style="background-image: url(
											https://pos.ultimatefosters.com/uploads/img/1528727949_five_pesident.jpg
									);
			background-repeat: no-repeat; background-position: center;
			background-size: contain;">

                                                    </div>

                                                    <div class="text_div">
                                                        <small class="text text-muted">Five Presidents
                                                        </small>

                                                        <small class="text-muted">
                                                            (AS0025)
                                                        </small>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-md-3 col-xs-4 product_list no-print">
                                                <div class="product_box" data-toggle="tooltip" data-placement="bottom" data-variation_id="2" title="" data-original-title="Levis Men's Slimmy Fit Jeans - 28  (AS0002-1)">

                                                    <div class="image-container" style="background-image: url(
											https://pos.ultimatefosters.com/uploads/img/1528727964_levis_jeans.jpg
									);
			background-repeat: no-repeat; background-position: center;
			background-size: contain;">

                                                    </div>

                                                    <div class="text_div">
                                                        <small class="text text-muted">Levis Men's Slimmy Fit Jeans
                                                            - 28
                                                        </small>

                                                        <small class="text-muted">
                                                            (AS0002-1)
                                                        </small>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-md-3 col-xs-4 product_list no-print">
                                                <div class="product_box" data-toggle="tooltip" data-placement="bottom" data-variation_id="3" title="" data-original-title="Levis Men's Slimmy Fit Jeans - 30  (AS0002-2)">

                                                    <div class="image-container" style="background-image: url(
											https://pos.ultimatefosters.com/uploads/img/1528727964_levis_jeans.jpg
									);
			background-repeat: no-repeat; background-position: center;
			background-size: contain;">

                                                    </div>

                                                    <div class="text_div">
                                                        <small class="text text-muted">Levis Men's Slimmy Fit Jeans
                                                            - 30
                                                        </small>

                                                        <small class="text-muted">
                                                            (AS0002-2)
                                                        </small>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-md-3 col-xs-4 product_list no-print">
                                                <div class="product_box" data-toggle="tooltip" data-placement="bottom" data-variation_id="4" title="" data-original-title="Levis Men's Slimmy Fit Jeans - 32  (AS0002-3)">

                                                    <div class="image-container" style="background-image: url(
											https://pos.ultimatefosters.com/uploads/img/1528727964_levis_jeans.jpg
									);
			background-repeat: no-repeat; background-position: center;
			background-size: contain;">

                                                    </div>

                                                    <div class="text_div">
                                                        <small class="text text-muted">Levis Men's Slimmy Fit Jeans
                                                            - 32
                                                        </small>

                                                        <small class="text-muted">
                                                            (AS0002-3)
                                                        </small>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-md-3 col-xs-4 product_list no-print">
                                                <div class="product_box" data-toggle="tooltip" data-placement="bottom" data-variation_id="5" title="Levis Men's Slimmy Fit Jeans - 34  (AS0002-4)">

                                                    <div class="image-container" style="background-image: url(
											https://pos.ultimatefosters.com/uploads/img/1528727964_levis_jeans.jpg
									);
			background-repeat: no-repeat; background-position: center;
			background-size: contain;">

                                                    </div>

                                                    <div class="text_div">
                                                        <small class="text text-muted">Levis Men's Slimmy Fit Jeans
                                                            - 34
                                                        </small>

                                                        <small class="text-muted">
                                                            (AS0002-4)
                                                        </small>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-md-3 col-xs-4 product_list no-print">
                                                <div class="product_box" data-toggle="tooltip" data-placement="bottom" data-variation_id="6" title="Levis Men's Slimmy Fit Jeans - 36  (AS0002-5)">

                                                    <div class="image-container" style="background-image: url(
											https://pos.ultimatefosters.com/uploads/img/1528727964_levis_jeans.jpg
									);
			background-repeat: no-repeat; background-position: center;
			background-size: contain;">

                                                    </div>

                                                    <div class="text_div">
                                                        <small class="text text-muted">Levis Men's Slimmy Fit Jeans
                                                            - 36
                                                        </small>

                                                        <small class="text-muted">
                                                            (AS0002-5)
                                                        </small>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-md-3 col-xs-4 product_list no-print">
                                                <div class="product_box" data-toggle="tooltip" data-placement="bottom" data-variation_id="73" title="Lipton Black Tea Bags  (AS0030)">

                                                    <div class="image-container" style="background-image: url(
											https://pos.ultimatefosters.com/uploads/img/1528727999_lipton_tea.jpg
									);
			background-repeat: no-repeat; background-position: center;
			background-size: contain;">

                                                    </div>

                                                    <div class="text_div">
                                                        <small class="text text-muted">Lipton Black Tea Bags
                                                        </small>

                                                        <small class="text-muted">
                                                            (AS0030)
                                                        </small>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-md-3 col-xs-4 product_list no-print">
                                                <div class="product_box" data-toggle="tooltip" data-placement="bottom" data-variation_id="42" title="Men Full sleeve T Shirt - M  (AS0013-1)">

                                                    <div class="image-container" style="background-image: url(
											https://pos.ultimatefosters.com/uploads/img/1528728019_mens_tshirt.jpg
									);
			background-repeat: no-repeat; background-position: center;
			background-size: contain;">

                                                    </div>

                                                    <div class="text_div">
                                                        <small class="text text-muted">Men Full sleeve T Shirt
                                                            - M
                                                        </small>

                                                        <small class="text-muted">
                                                            (AS0013-1)
                                                        </small>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-md-3 col-xs-4 product_list no-print">
                                                <div class="product_box" data-toggle="tooltip" data-placement="bottom" data-variation_id="43" title="Men Full sleeve T Shirt - L  (AS0013-2)">

                                                    <div class="image-container" style="background-image: url(
											https://pos.ultimatefosters.com/uploads/img/1528728019_mens_tshirt.jpg
									);
			background-repeat: no-repeat; background-position: center;
			background-size: contain;">

                                                    </div>

                                                    <div class="text_div">
                                                        <small class="text text-muted">Men Full sleeve T Shirt
                                                            - L
                                                        </small>

                                                        <small class="text-muted">
                                                            (AS0013-2)
                                                        </small>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-md-3 col-xs-4 product_list no-print">
                                                <div class="product_box" data-toggle="tooltip" data-placement="bottom" data-variation_id="44" title="Men Full sleeve T Shirt - XL  (AS0013-3)">

                                                    <div class="image-container" style="background-image: url(
											https://pos.ultimatefosters.com/uploads/img/1528728019_mens_tshirt.jpg
									);
			background-repeat: no-repeat; background-position: center;
			background-size: contain;">

                                                    </div>

                                                    <div class="text_div">
                                                        <small class="text text-muted">Men Full sleeve T Shirt
                                                            - XL
                                                        </small>

                                                        <small class="text-muted">
                                                            (AS0013-3)
                                                        </small>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-md-3 col-xs-4 product_list no-print">
                                                <div class="product_box" data-toggle="tooltip" data-placement="bottom" data-variation_id="7" title="Men's Cozy Hoodie Sweater - S  (AS0003-1)">

                                                    <div class="image-container" style="background-image: url(
											https://pos.ultimatefosters.com/uploads/img/1528728035_cozy_sweater.jpg
									);
			background-repeat: no-repeat; background-position: center;
			background-size: contain;">

                                                    </div>

                                                    <div class="text_div">
                                                        <small class="text text-muted">Men's Cozy Hoodie Sweater
                                                            - S
                                                        </small>

                                                        <small class="text-muted">
                                                            (AS0003-1)
                                                        </small>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-md-3 col-xs-4 product_list no-print">
                                                <div class="product_box" data-toggle="tooltip" data-placement="bottom" data-variation_id="8" title="Men's Cozy Hoodie Sweater - M  (AS0003-2)">

                                                    <div class="image-container" style="background-image: url(
											https://pos.ultimatefosters.com/uploads/img/1528728035_cozy_sweater.jpg
									);
			background-repeat: no-repeat; background-position: center;
			background-size: contain;">

                                                    </div>

                                                    <div class="text_div">
                                                        <small class="text text-muted">Men's Cozy Hoodie Sweater
                                                            - M
                                                        </small>

                                                        <small class="text-muted">
                                                            (AS0003-2)
                                                        </small>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-md-3 col-xs-4 product_list no-print">
                                                <div class="product_box" data-toggle="tooltip" data-placement="bottom" data-variation_id="9" title="" data-original-title="Men's Cozy Hoodie Sweater - L  (AS0003-3)">

                                                    <div class="image-container" style="background-image: url(
											https://pos.ultimatefosters.com/uploads/img/1528728035_cozy_sweater.jpg
									);
			background-repeat: no-repeat; background-position: center;
			background-size: contain;">

                                                    </div>

                                                    <div class="text_div">
                                                        <small class="text text-muted">Men's Cozy Hoodie Sweater
                                                            - L
                                                        </small>

                                                        <small class="text-muted">
                                                            (AS0003-3)
                                                        </small>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-md-3 col-xs-4 product_list no-print">
                                                <div class="product_box" data-toggle="tooltip" data-placement="bottom" data-variation_id="10" title="" data-original-title="Men's Cozy Hoodie Sweater - XL  (AS0003-4)">

                                                    <div class="image-container" style="background-image: url(
											https://pos.ultimatefosters.com/uploads/img/1528728035_cozy_sweater.jpg
									);
			background-repeat: no-repeat; background-position: center;
			background-size: contain;">

                                                    </div>

                                                    <div class="text_div">
                                                        <small class="text text-muted">Men's Cozy Hoodie Sweater
                                                            - XL
                                                        </small>

                                                        <small class="text-muted">
                                                            (AS0003-4)
                                                        </small>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-md-3 col-xs-4 product_list no-print">
                                                <div class="product_box" data-toggle="tooltip" data-placement="bottom" data-variation_id="1" title="Men's Reverse Fleece Crew  (AS0001)">

                                                    <div class="image-container" style="background-image: url(
											https://pos.ultimatefosters.com/uploads/img/1528728059_fleece_crew.jpg
									);
			background-repeat: no-repeat; background-position: center;
			background-size: contain;">

                                                    </div>

                                                    <div class="text_div">
                                                        <small class="text text-muted">Men's Reverse Fleece Crew
                                                        </small>

                                                        <small class="text-muted">
                                                            (AS0001)
                                                        </small>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-md-3 col-xs-4 product_list no-print">
                                                <div class="product_box" data-toggle="tooltip" data-placement="bottom" data-variation_id="27" title="Nike Fashion Sneaker - 6  (AS0008-1)">

                                                    <div class="image-container" style="background-image: url(
											https://pos.ultimatefosters.com/uploads/img/1528728076_nike_sneaker.jpg
									);
			background-repeat: no-repeat; background-position: center;
			background-size: contain;">

                                                    </div>

                                                    <div class="text_div">
                                                        <small class="text text-muted">Nike Fashion Sneaker
                                                            - 6
                                                        </small>

                                                        <small class="text-muted">
                                                            (AS0008-1)
                                                        </small>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-md-3 col-xs-4 product_list no-print">
                                                <div class="product_box" data-toggle="tooltip" data-placement="bottom" data-variation_id="28" title="" data-original-title="Nike Fashion Sneaker - 7  (AS0008-2)">

                                                    <div class="image-container" style="background-image: url(
											https://pos.ultimatefosters.com/uploads/img/1528728076_nike_sneaker.jpg
									);
			background-repeat: no-repeat; background-position: center;
			background-size: contain;">

                                                    </div>

                                                    <div class="text_div">
                                                        <small class="text text-muted">Nike Fashion Sneaker
                                                            - 7
                                                        </small>

                                                        <small class="text-muted">
                                                            (AS0008-2)
                                                        </small>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-md-3 col-xs-4 product_list no-print">
                                                <div class="product_box" data-toggle="tooltip" data-placement="bottom" data-variation_id="29" title="" data-original-title="Nike Fashion Sneaker - 8  (AS0008-3)">

                                                    <div class="image-container" style="background-image: url(
											https://pos.ultimatefosters.com/uploads/img/1528728076_nike_sneaker.jpg
									);
			background-repeat: no-repeat; background-position: center;
			background-size: contain;">

                                                    </div>

                                                    <div class="text_div">
                                                        <small class="text text-muted">Nike Fashion Sneaker
                                                            - 8
                                                        </small>

                                                        <small class="text-muted">
                                                            (AS0008-3)
                                                        </small>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-md-3 col-xs-4 product_list no-print">
                                                <div class="product_box" data-toggle="tooltip" data-placement="bottom" data-variation_id="30" title="" data-original-title="Nike Fashion Sneaker - 9  (AS0008-4)">

                                                    <div class="image-container" style="background-image: url(
											https://pos.ultimatefosters.com/uploads/img/1528728076_nike_sneaker.jpg
									);
			background-repeat: no-repeat; background-position: center;
			background-size: contain;">

                                                    </div>

                                                    <div class="text_div">
                                                        <small class="text text-muted">Nike Fashion Sneaker
                                                            - 9
                                                        </small>

                                                        <small class="text-muted">
                                                            (AS0008-4)
                                                        </small>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-md-3 col-xs-4 product_list no-print">
                                                <div class="product_box" data-toggle="tooltip" data-placement="bottom" data-variation_id="35" title="NIKE Men's Running Shoe - 5  (AS0010-1)">

                                                    <div class="image-container" style="background-image: url(
											https://pos.ultimatefosters.com/uploads/img/1528728095_nike_running_shoe.jpg
									);
			background-repeat: no-repeat; background-position: center;
			background-size: contain;">

                                                    </div>

                                                    <div class="text_div">
                                                        <small class="text text-muted">NIKE Men's Running Shoe
                                                            - 5
                                                        </small>

                                                        <small class="text-muted">
                                                            (AS0010-1)
                                                        </small>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-md-3 col-xs-4 product_list no-print">
                                                <div class="product_box" data-toggle="tooltip" data-placement="bottom" data-variation_id="36" title="" data-original-title="NIKE Men's Running Shoe - 6  (AS0010-2)">

                                                    <div class="image-container" style="background-image: url(
											https://pos.ultimatefosters.com/uploads/img/1528728095_nike_running_shoe.jpg
									);
			background-repeat: no-repeat; background-position: center;
			background-size: contain;">

                                                    </div>

                                                    <div class="text_div">
                                                        <small class="text text-muted">NIKE Men's Running Shoe
                                                            - 6
                                                        </small>

                                                        <small class="text-muted">
                                                            (AS0010-2)
                                                        </small>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-md-3 col-xs-4 product_list no-print">
                                                <div class="product_box" data-toggle="tooltip" data-placement="bottom" data-variation_id="37" title="" data-original-title="NIKE Men's Running Shoe - 7  (AS0010-3)">

                                                    <div class="image-container" style="background-image: url(
											https://pos.ultimatefosters.com/uploads/img/1528728095_nike_running_shoe.jpg
									);
			background-repeat: no-repeat; background-position: center;
			background-size: contain;">

                                                    </div>

                                                    <div class="text_div">
                                                        <small class="text text-muted">NIKE Men's Running Shoe
                                                            - 7
                                                        </small>

                                                        <small class="text-muted">
                                                            (AS0010-3)
                                                        </small>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-md-3 col-xs-4 product_list no-print">
                                                <div class="product_box" data-toggle="tooltip" data-placement="bottom" data-variation_id="38" title="NIKE Men's Running Shoe - 8  (AS0010-4)">

                                                    <div class="image-container" style="background-image: url(
											https://pos.ultimatefosters.com/uploads/img/1528728095_nike_running_shoe.jpg
									);
			background-repeat: no-repeat; background-position: center;
			background-size: contain;">

                                                    </div>

                                                    <div class="text_div">
                                                        <small class="text text-muted">NIKE Men's Running Shoe
                                                            - 8
                                                        </small>

                                                        <small class="text-muted">
                                                            (AS0010-4)
                                                        </small>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-md-3 col-xs-4 product_list no-print">
                                                <div class="product_box" data-toggle="tooltip" data-placement="bottom" data-variation_id="39" title="NIKE Men's Running Shoe - 9  (AS0010-5)">

                                                    <div class="image-container" style="background-image: url(
											https://pos.ultimatefosters.com/uploads/img/1528728095_nike_running_shoe.jpg
									);
			background-repeat: no-repeat; background-position: center;
			background-size: contain;">

                                                    </div>

                                                    <div class="text_div">
                                                        <small class="text text-muted">NIKE Men's Running Shoe
                                                            - 9
                                                        </small>

                                                        <small class="text-muted">
                                                            (AS0010-5)
                                                        </small>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-md-3 col-xs-4 product_list no-print">
                                                <div class="product_box" data-toggle="tooltip" data-placement="bottom" data-variation_id="69" title="" data-original-title="Oreo Cookies  (AS0026)">

                                                    <div class="image-container" style="background-image: url(
											https://pos.ultimatefosters.com/uploads/img/1528728111_oreo.jpg
									);
			background-repeat: no-repeat; background-position: center;
			background-size: contain;">

                                                    </div>

                                                    <div class="text_div">
                                                        <small class="text text-muted">Oreo Cookies
                                                        </small>

                                                        <small class="text-muted">
                                                            (AS0026)
                                                        </small>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-md-3 col-xs-4 product_list no-print">
                                                <div class="product_box" data-toggle="tooltip" data-placement="bottom" data-variation_id="108" title="Organic Egg  (AS0065)">

                                                    <div class="image-container" style="background-image: url(
											https://pos.ultimatefosters.com/uploads/img/1528780470_eggs.jpg
									);
			background-repeat: no-repeat; background-position: center;
			background-size: contain;">

                                                    </div>

                                                    <div class="text_div">
                                                        <small class="text text-muted">Organic Egg
                                                        </small>

                                                        <small class="text-muted">
                                                            (AS0065)
                                                        </small>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-md-3 col-xs-4 product_list no-print">
                                                <div class="product_box" data-toggle="tooltip" data-placement="bottom" data-variation_id="64" title="" data-original-title="Pair Of Dumbbells  (AS0021)">

                                                    <div class="image-container" style="background-image: url(
											https://pos.ultimatefosters.com/uploads/img/1528728133_pair_of_dumbell.jpg
									);
			background-repeat: no-repeat; background-position: center;
			background-size: contain;">

                                                    </div>

                                                    <div class="text_div">
                                                        <small class="text text-muted">Pair Of Dumbbells
                                                        </small>

                                                        <small class="text-muted">
                                                            (AS0021)
                                                        </small>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-md-3 col-xs-4 product_list no-print">
                                                <div class="product_box" data-toggle="tooltip" data-placement="bottom" data-variation_id="105" title="Pinot Noir Red Wine  (AS0062)">

                                                    <div class="image-container" style="background-image: url(
											https://pos.ultimatefosters.com/uploads/img/1528779737_wine2.jpg
									);
			background-repeat: no-repeat; background-position: center;
			background-size: contain;">

                                                    </div>

                                                    <div class="text_div">
                                                        <small class="text text-muted">Pinot Noir Red Wine
                                                        </small>

                                                        <small class="text-muted">
                                                            (AS0062)
                                                        </small>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-md-3 col-xs-4 product_list no-print">
                                                <div class="product_box" data-toggle="tooltip" data-placement="bottom" data-variation_id="11" title="" data-original-title="Puma Brown Sneaker - 6  (AS0004-1)">

                                                    <div class="image-container" style="background-image: url(
											https://pos.ultimatefosters.com/uploads/img/1528728147_puma_brown_sneaker.jpg
									);
			background-repeat: no-repeat; background-position: center;
			background-size: contain;">

                                                    </div>

                                                    <div class="text_div">
                                                        <small class="text text-muted">Puma Brown Sneaker
                                                            - 6
                                                        </small>

                                                        <small class="text-muted">
                                                            (AS0004-1)
                                                        </small>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-md-3 col-xs-4 product_list no-print">
                                                <div class="product_box" data-toggle="tooltip" data-placement="bottom" data-variation_id="12" title="Puma Brown Sneaker - 7  (AS0004-2)">

                                                    <div class="image-container" style="background-image: url(
											https://pos.ultimatefosters.com/uploads/img/1528728147_puma_brown_sneaker.jpg
									);
			background-repeat: no-repeat; background-position: center;
			background-size: contain;">

                                                    </div>

                                                    <div class="text_div">
                                                        <small class="text text-muted">Puma Brown Sneaker
                                                            - 7
                                                        </small>

                                                        <small class="text-muted">
                                                            (AS0004-2)
                                                        </small>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-md-3 col-xs-4 product_list no-print">
                                                <div class="product_box" data-toggle="tooltip" data-placement="bottom" data-variation_id="13" title="" data-original-title="Puma Brown Sneaker - 8  (AS0004-3)">

                                                    <div class="image-container" style="background-image: url(
											https://pos.ultimatefosters.com/uploads/img/1528728147_puma_brown_sneaker.jpg
									);
			background-repeat: no-repeat; background-position: center;
			background-size: contain;">

                                                    </div>

                                                    <div class="text_div">
                                                        <small class="text text-muted">Puma Brown Sneaker
                                                            - 8
                                                        </small>

                                                        <small class="text-muted">
                                                            (AS0004-3)
                                                        </small>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-md-3 col-xs-4 product_list no-print">
                                                <div class="product_box" data-toggle="tooltip" data-placement="bottom" data-variation_id="14" title="Puma Brown Sneaker - 9  (AS0004-4)">

                                                    <div class="image-container" style="background-image: url(
											https://pos.ultimatefosters.com/uploads/img/1528728147_puma_brown_sneaker.jpg
									);
			background-repeat: no-repeat; background-position: center;
			background-size: contain;">

                                                    </div>

                                                    <div class="text_div">
                                                        <small class="text text-muted">Puma Brown Sneaker
                                                            - 9
                                                        </small>

                                                        <small class="text-muted">
                                                            (AS0004-4)
                                                        </small>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-md-3 col-xs-4 product_list no-print">
                                                <div class="product_box" data-toggle="tooltip" data-placement="bottom" data-variation_id="31" title="" data-original-title="PUMA Men's Black Sneaker - 6  (AS0009-1)">

                                                    <div class="image-container" style="background-image: url(
											https://pos.ultimatefosters.com/uploads/img/1528728163_puma_brown_sneaker.jpg
									);
			background-repeat: no-repeat; background-position: center;
			background-size: contain;">

                                                    </div>

                                                    <div class="text_div">
                                                        <small class="text text-muted">PUMA Men's Black Sneaker
                                                            - 6
                                                        </small>

                                                        <small class="text-muted">
                                                            (AS0009-1)
                                                        </small>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-md-3 col-xs-4 product_list no-print">
                                                <div class="product_box" data-toggle="tooltip" data-placement="bottom" data-variation_id="32" title="PUMA Men's Black Sneaker - 7  (AS0009-2)">

                                                    <div class="image-container" style="background-image: url(
											https://pos.ultimatefosters.com/uploads/img/1528728163_puma_brown_sneaker.jpg
									);
			background-repeat: no-repeat; background-position: center;
			background-size: contain;">

                                                    </div>

                                                    <div class="text_div">
                                                        <small class="text text-muted">PUMA Men's Black Sneaker
                                                            - 7
                                                        </small>

                                                        <small class="text-muted">
                                                            (AS0009-2)
                                                        </small>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-md-3 col-xs-4 product_list no-print">
                                                <div class="product_box" data-toggle="tooltip" data-placement="bottom" data-variation_id="33" title="PUMA Men's Black Sneaker - 8  (AS0009-3)">

                                                    <div class="image-container" style="background-image: url(
											https://pos.ultimatefosters.com/uploads/img/1528728163_puma_brown_sneaker.jpg
									);
			background-repeat: no-repeat; background-position: center;
			background-size: contain;">

                                                    </div>

                                                    <div class="text_div">
                                                        <small class="text text-muted">PUMA Men's Black Sneaker
                                                            - 8
                                                        </small>

                                                        <small class="text-muted">
                                                            (AS0009-3)
                                                        </small>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-md-3 col-xs-4 product_list no-print">
                                                <div class="product_box" data-toggle="tooltip" data-placement="bottom" data-variation_id="34" title="PUMA Men's Black Sneaker - 9  (AS0009-4)">

                                                    <div class="image-container" style="background-image: url(
											https://pos.ultimatefosters.com/uploads/img/1528728163_puma_brown_sneaker.jpg
									);
			background-repeat: no-repeat; background-position: center;
			background-size: contain;">

                                                    </div>

                                                    <div class="text_div">
                                                        <small class="text text-muted">PUMA Men's Black Sneaker
                                                            - 9
                                                        </small>

                                                        <small class="text-muted">
                                                            (AS0009-4)
                                                        </small>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-md-3 col-xs-4 product_list no-print">
                                                <div class="product_box" data-toggle="tooltip" data-placement="bottom" data-variation_id="104" title="" data-original-title="Red Wine  (AS0061)">

                                                    <div class="image-container" style="background-image: url(
											https://pos.ultimatefosters.com/uploads/img/1528779460_wine.jpg
									);
			background-repeat: no-repeat; background-position: center;
			background-size: contain;">

                                                    </div>

                                                    <div class="text_div">
                                                        <small class="text text-muted">Red Wine
                                                        </small>

                                                        <small class="text-muted">
                                                            (AS0061)
                                                        </small>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-md-3 col-xs-4 product_list no-print">
                                                <div class="product_box" data-toggle="tooltip" data-placement="bottom" data-variation_id="54" title="" data-original-title="Samsung Galaxy J7 Pro - Gold  (AS0016-1)">

                                                    <div class="image-container" style="background-image: url(
											https://pos.ultimatefosters.com/uploads/img/1528728178_j7_pro.jpg
									);
			background-repeat: no-repeat; background-position: center;
			background-size: contain;">

                                                    </div>

                                                    <div class="text_div">
                                                        <small class="text text-muted">Samsung Galaxy J7 Pro
                                                            - Gold
                                                        </small>

                                                        <small class="text-muted">
                                                            (AS0016-1)
                                                        </small>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-md-3 col-xs-4 product_list no-print">
                                                <div class="product_box" data-toggle="tooltip" data-placement="bottom" data-variation_id="55" title="" data-original-title="Samsung Galaxy J7 Pro - White  (AS0016-2)">

                                                    <div class="image-container" style="background-image: url(
											https://pos.ultimatefosters.com/uploads/img/1528728178_j7_pro.jpg
									);
			background-repeat: no-repeat; background-position: center;
			background-size: contain;">

                                                    </div>

                                                    <div class="text_div">
                                                        <small class="text text-muted">Samsung Galaxy J7 Pro
                                                            - White
                                                        </small>

                                                        <small class="text-muted">
                                                            (AS0016-2)
                                                        </small>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-md-3 col-xs-4 product_list no-print">
                                                <div class="product_box" data-toggle="tooltip" data-placement="bottom" data-variation_id="56" title="Samsung Galaxy J7 Pro - Black  (AS0016-3)">

                                                    <div class="image-container" style="background-image: url(
											https://pos.ultimatefosters.com/uploads/img/1528728178_j7_pro.jpg
									);
			background-repeat: no-repeat; background-position: center;
			background-size: contain;">

                                                    </div>

                                                    <div class="text_div">
                                                        <small class="text text-muted">Samsung Galaxy J7 Pro
                                                            - Black
                                                        </small>

                                                        <small class="text-muted">
                                                            (AS0016-3)
                                                        </small>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-md-3 col-xs-4 product_list no-print">
                                                <div class="product_box" data-toggle="tooltip" data-placement="bottom" data-variation_id="45" title="" data-original-title="Samsung Galaxy S8 - Gray  (AS0014-1)">

                                                    <div class="image-container" style="background-image: url(
											https://pos.ultimatefosters.com/uploads/img/1528728193_s8.jpg
									);
			background-repeat: no-repeat; background-position: center;
			background-size: contain;">

                                                    </div>

                                                    <div class="text_div">
                                                        <small class="text text-muted">Samsung Galaxy S8
                                                            - Gray
                                                        </small>

                                                        <small class="text-muted">
                                                            (AS0014-1)
                                                        </small>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-md-3 col-xs-4 product_list no-print">
                                                <div class="product_box" data-toggle="tooltip" data-placement="bottom" data-variation_id="46" title="" data-original-title="Samsung Galaxy S8 - Black  (AS0014-2)">

                                                    <div class="image-container" style="background-image: url(
											https://pos.ultimatefosters.com/uploads/img/1528728193_s8.jpg
									);
			background-repeat: no-repeat; background-position: center;
			background-size: contain;">

                                                    </div>

                                                    <div class="text_div">
                                                        <small class="text text-muted">Samsung Galaxy S8
                                                            - Black
                                                        </small>

                                                        <small class="text-muted">
                                                            (AS0014-2)
                                                        </small>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-md-3 col-xs-4 product_list no-print">
                                                <div class="product_box" data-toggle="tooltip" data-placement="bottom" data-variation_id="47" title="" data-original-title="Samsung Galaxy S8 - 64 GB  (AS0014-1)">

                                                    <div class="image-container" style="background-image: url(
											https://pos.ultimatefosters.com/uploads/img/1528728193_s8.jpg
									);
			background-repeat: no-repeat; background-position: center;
			background-size: contain;">

                                                    </div>

                                                    <div class="text_div">
                                                        <small class="text text-muted">Samsung Galaxy S8
                                                            - 64 GB
                                                        </small>

                                                        <small class="text-muted">
                                                            (AS0014-1)
                                                        </small>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-md-3 col-xs-4 product_list no-print">
                                                <div class="product_box" data-toggle="tooltip" data-placement="bottom" data-variation_id="48" title="" data-original-title="Samsung Galaxy S8 - 128 GB  (AS0014-2)">

                                                    <div class="image-container" style="background-image: url(
											https://pos.ultimatefosters.com/uploads/img/1528728193_s8.jpg
									);
			background-repeat: no-repeat; background-position: center;
			background-size: contain;">

                                                    </div>

                                                    <div class="text_div">
                                                        <small class="text text-muted">Samsung Galaxy S8
                                                            - 128 GB
                                                        </small>

                                                        <small class="text-muted">
                                                            (AS0014-2)
                                                        </small>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-md-3 col-xs-4 product_list no-print">
                                                <div class="product_box" data-toggle="tooltip" data-placement="bottom" data-variation_id="66" title="" data-original-title="Sneezy the Snowman  (AS0023)">

                                                    <div class="image-container" style="background-image: url(
											https://pos.ultimatefosters.com/uploads/img/1528728231_sneezy.jpg
									);
			background-repeat: no-repeat; background-position: center;
			background-size: contain;">

                                                    </div>

                                                    <div class="text_div">
                                                        <small class="text text-muted">Sneezy the Snowman
                                                        </small>

                                                        <small class="text-muted">
                                                            (AS0023)
                                                        </small>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-md-3 col-xs-4 product_list no-print">
                                                <div class="product_box" data-toggle="tooltip" data-placement="bottom" data-variation_id="62" title="" data-original-title="Sports Tights Pants - Gray  (AS0020-1)">

                                                    <div class="image-container" style="background-image: url(
											https://pos.ultimatefosters.com/uploads/img/1528728250_sports_pant.jpg
									);
			background-repeat: no-repeat; background-position: center;
			background-size: contain;">

                                                    </div>

                                                    <div class="text_div">
                                                        <small class="text text-muted">Sports Tights Pants
                                                            - Gray
                                                        </small>

                                                        <small class="text-muted">
                                                            (AS0020-1)
                                                        </small>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-md-3 col-xs-4 product_list no-print">
                                                <div class="product_box" data-toggle="tooltip" data-placement="bottom" data-variation_id="63" title="" data-original-title="Sports Tights Pants - Black  (AS0020-2)">

                                                    <div class="image-container" style="background-image: url(
											https://pos.ultimatefosters.com/uploads/img/1528728250_sports_pant.jpg
									);
			background-repeat: no-repeat; background-position: center;
			background-size: contain;">

                                                    </div>

                                                    <div class="text_div">
                                                        <small class="text text-muted">Sports Tights Pants
                                                            - Black
                                                        </small>

                                                        <small class="text-muted">
                                                            (AS0020-2)
                                                        </small>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-md-3 col-xs-4 product_list no-print">
                                                <div class="product_box" data-toggle="tooltip" data-placement="bottom" data-variation_id="72" title="" data-original-title="Thin Spaghetti  (AS0029)">

                                                    <div class="image-container" style="background-image: url(
											https://pos.ultimatefosters.com/uploads/img/1528728274_thin_spegatti.jpg
									);
			background-repeat: no-repeat; background-position: center;
			background-size: contain;">

                                                    </div>

                                                    <div class="text_div">
                                                        <small class="text text-muted">Thin Spaghetti
                                                        </small>

                                                        <small class="text-muted">
                                                            (AS0029)
                                                        </small>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-md-3 col-xs-4 product_list no-print">
                                                <div class="product_box" data-toggle="tooltip" data-placement="bottom" data-variation_id="40" title="U.S. Polo Men's Leather Belt  (AS0011)">

                                                    <div class="image-container" style="background-image: url(
											https://pos.ultimatefosters.com/uploads/img/1528727768_belt.jpg
									);
			background-repeat: no-repeat; background-position: center;
			background-size: contain;">

                                                    </div>

                                                    <div class="text_div">
                                                        <small class="text text-muted">U.S. Polo Men's Leather Belt
                                                        </small>

                                                        <small class="text-muted">
                                                            (AS0011)
                                                        </small>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-md-3 col-xs-4 product_list no-print">
                                                <div class="product_box" data-toggle="tooltip" data-placement="bottom" data-variation_id="41" title="" data-original-title="Unisex Brown Leather Wallet  (AS0012)">

                                                    <div class="image-container" style="background-image: url(
											https://pos.ultimatefosters.com/uploads/img/1528727750_unisex_brown_wallet.jpg
									);
			background-repeat: no-repeat; background-position: center;
			background-size: contain;">

                                                    </div>

                                                    <div class="text_div">
                                                        <small class="text text-muted">Unisex Brown Leather Wallet
                                                        </small>

                                                        <small class="text-muted">
                                                            (AS0012)
                                                        </small>
                                                    </div>

                                                </div>
                                            </div>
                                            <input type="hidden" id="no_products_found">
                                            <div class="col-md-12">
                                                <h4 class="text-center">
                                                    No Products to display </h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 text-center" id="suggestion_page_loader" style="display: none;">
                                        <i class="fa fa-spinner fa-spin fa-2x"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="pos-form-actions">
                        <div class="col-md-12">
                            <button type="button" class="btn btn-info btn-flat " id="pos-draft"><i class="fas fa-edit"></i> Draft</button>
                            <button type="button" class="btn btn-default bg-yellow btn-flat" id="pos-quotation"><i class="fas fa-edit"></i> Quotation</button>

                            <button type="button" class="btn bg-red btn-default btn-flat no-print pos-express-finalize" data-pay_method="suspend" title="Suspend Sales (pause)">
                                <i class="fas fa-pause" aria-hidden="true"></i>
                                Suspend </button>

                            <button type="button" class="btn bg-maroon btn-default btn-flat no-print  pos-express-finalize " data-pay_method="card" title="Express checkout using card">
                                <i class="fas fa-credit-card" aria-hidden="true"></i> Card </button>

                            <button type="button" class="btn bg-navy btn-default btn-flat no-print " id="pos-finalize" title="Checkout using multiple payment methods"><i class="fas fa-money-check-alt" aria-hidden="true"></i> Multiple Pay </button>

                            <button type="button" class="btn btn-success btn-flat no-print  pos-express-finalize" data-pay_method="cash" title="Mark complete paid &amp; checkout"> <i class="fas fa-money-bill-alt" aria-hidden="true"></i> Cash</button>
                            &nbsp;&nbsp;
                            <b>Total Payable:</b>
                            <input type="hidden" name="final_total" id="final_total_input" value="3,920.63">
                            <span id="total_payable" class="text-success lead text-bold">3,920.63</span>

                            &nbsp;<button type="button" class="btn btn-danger btn-flat" id="pos-cancel"> <i class="fas fa-window-close"></i> Cancel</button>
                            <button type="button" class="btn btn-primary btn-flat pull-right" data-toggle="modal" data-target="#recent_transactions_modal" id="recent-transactions"> <i class="fas fa-clock"></i> Recent Transactions</button>

                        </div>
                    </div>
                </div>
                <!-- Edit discount Modal -->
                <div class="modal fade" tabindex="-1" role="dialog" id="posEditDiscountModal" style="display: none;">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">�</span></button>
                                <h4 class="modal-title">
                                    Discount </h4>
                            </div>
                            <div class="modal-body">
                                <div class="row ">
                                    <div class="col-md-12">
                                        <h4 class="modal-title">Edit Discount:</h4>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="discount_type_modal">Discount Type:*</label>
                                            <div class="input-group">
                          <span class="input-group-addon">
                            <i class="fa fa-info"></i>
                          </span>
                                                <select class="form-control valid" required="" id="discount_type_modal" name="discount_type_modal" aria-required="true" aria-invalid="false">
                                                    <option value="">Please Select</option>
                                                    <option value="fixed">Fixed</option>
                                                    <option value="percentage" selected="selected">Percentage</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="discount_amount_modal">Discount Amount:*</label>
                                            <div class="input-group">
                          <span class="input-group-addon">
                            <i class="fa fa-info"></i>
                          </span>
                                                <input class="form-control input_number" name="discount_amount_modal" type="text" value="10.00" id="discount_amount_modal">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row  hide ">
                                    <div class="well well-sm bg-light-gray col-md-12">
                                        <div class="col-md-12">
                                            <h4 class="modal-title">:</h4>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="rp_redeemed_modal">Redeemed:</label>
                                                <div class="input-group">
                            <span class="input-group-addon">
                              <i class="fa fa-gift"></i>
                            </span>
                                                    <input class="form-control" data-amount_per_unit_point="1.0000" data-max_points="0" min="0" data-min_order_total="1.0000" name="rp_redeemed_modal" type="number" value="0" id="rp_redeemed_modal">
                                                    <input type="hidden" id="rp_name" value="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <p><strong>Available:</strong> <span id="available_rp"></span></p>
                                            <h5><strong>Redeemed Amount:</strong> <span id="rp_redeemed_amount_text">$ 0.00</span></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary" id="posEditDiscountModalUpdate">Update</button>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->
                <!-- Edit Order tax Modal -->
                <div class="modal fade" tabindex="-1" role="dialog" id="posEditOrderTaxModal" style="display: none;">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">�</span></button>
                                <h4 class="modal-title">Edit Order Tax</h4>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="order_tax_modal">Order Tax:*</label>
                                            <div class="input-group">
                          <span class="input-group-addon">
                            <i class="fa fa-info"></i>
                          </span>
                                                <select class="form-control valid" id="order_tax_modal" name="order_tax_modal" aria-invalid="false">
                                                    <option selected="selected" value="">Please Select</option>
                                                    <option value="" selected="selected">None</option>
                                                    <option value="1" data-rate="10">VAT@10%</option>
                                                    <option value="2" data-rate="10">CGST@10%</option>
                                                    <option value="3" data-rate="8">SGST@8%</option>
                                                    <option value="4" data-rate="18">GST@18%</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary" id="posEditOrderTaxModalUpdate">Update</button>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->
                <!-- Edit Shipping Modal -->
                <div class="modal fade" tabindex="-1" role="dialog" id="posShippingModal" style="display: none;">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">�</span></button>
                                <h4 class="modal-title">Shipping</h4>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="shipping_details_modal">Shipping Details:*</label>
                                            <textarea class="form-control" placeholder="Shipping Details" required="" rows="4" name="shipping_details_modal" cols="50" id="shipping_details_modal" aria-required="true"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="shipping_address_modal">Shipping Address:</label>
                                            <textarea class="form-control" placeholder="Shipping Address" rows="4" name="shipping_address_modal" cols="50" id="shipping_address_modal"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="shipping_charges_modal">Shipping Charges:*</label>
                                            <div class="input-group">
                          <span class="input-group-addon">
                            <i class="fa fa-info"></i>
                          </span>
                                                <input class="form-control input_number" placeholder="Shipping Charges" name="shipping_charges_modal" type="text" value="0" id="shipping_charges_modal">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="shipping_status_modal">Shipping Status:</label>
                                            <select class="form-control" id="shipping_status_modal" name="shipping_status_modal">
                                                <option selected="selected" value="">Please Select</option>
                                                <option value="ordered">Ordered</option>
                                                <option value="packed">Packed</option>
                                                <option value="shipped">Shipped</option>
                                                <option value="delivered">Delivered</option>
                                                <option value="cancelled">Cancelled</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="delivered_to_modal">Delivered To:</label>
                                            <input class="form-control" placeholder="Delivered To" name="delivered_to_modal" type="text" id="delivered_to_modal">
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary" id="posShippingModalUpdate">Update</button>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->
            </form>
        </section>

        <!-- This will be printed -->
        <section class="invoice print_section" id="receipt_section">
            <!-- business information here -->

            <div class="row">

                <!-- Logo -->

                <!-- Header text -->

                <!-- business information here -->
                <div class="col-xs-12 text-center">
                    <h2 class="text-center">
                        <!-- Shop & Location Name  -->
                        Awesome Shop
                    </h2>

                    <!-- Address -->
                    <p>
                        <small class="text-center">
                            Linking Street
                            Phoenix,Arizona,85001,USA
                        </small>

                    </p>
                    <p>

                    </p>
                    <p>
                        <b>GSTIN: </b> 3412569900

                    </p>

                    <!-- Title of receipt -->
                    <h3 class="text-center">
                        Invoice
                    </h3>

                    <!-- Invoice  number, Date  -->
                    <p style="width: 100% !important" class="word-wrap">
              <span class="pull-left text-left word-wrap">
                <b>Invoice No.</b>
                AS0008

                  <!-- Table information-->

                  <!-- customer info -->
                <br>
                <b>Customer</b> Walk-In Customer <br>
                Linking Street<br>Phoenix,Arizona,USA<br>(378) 400-1234
              </span>

                        <span class="pull-right text-left">
                <b>Date</b> 04/28/2020 14:52

                            <!-- Waiter info -->
              </span>
                    </p>
                </div>

                <!-- /.col -->
            </div>

            <div class="row">
                <div class="col-xs-12">
                    <br><br>
                    <table class="table table-responsive">
                        <thead>
                        <tr>
                            <th>Product</th>
                            <th class="text-right">Quantity</th>
                            <th class="text-right">Unit Price</th>
                            <th class="text-right">Subtotal</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td style="word-break: break-all;">
                                Red Wine
                                , AS0061

                            </td>
                            <td class="text-right">1.00 Pc(s) </td>
                            <td class="text-right">42.50</td>
                            <td class="text-right">42.50</td>
                        </tr>
                        <tr>
                            <td style="word-break: break-all;">
                                Apple iPhone 8 Internal Memory 32 GB
                                , AS0015-1

                            </td>
                            <td class="text-right">2.00 Pc(s) </td>
                            <td class="text-right">1,306.25</td>
                            <td class="text-right">2,612.50</td>
                        </tr>
                        <tr>
                            <td style="word-break: break-all;">
                                Apple - Fuji
                                , AS0064

                            </td>
                            <td class="text-right">1.00 Pc(s) </td>
                            <td class="text-right">12.50</td>
                            <td class="text-right">12.50</td>
                        </tr>
                        <tr>
                            <td style="word-break: break-all;">
                                Acer Aspire E 15 Color White
                                , AS0017-2

                            </td>
                            <td class="text-right">1.00 Pc(s) </td>
                            <td class="text-right">437.50</td>
                            <td class="text-right">437.50</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="row">
                <br>
                <div class="col-md-12">
                    <hr>
                </div>
                <br>

                <div class="col-xs-6">

                    <table class="table table-condensed">

                        <tbody>
                        <tr>
                            <td>Cash</td>
                            <td class="text-right">$ 2,794.50</td>
                            <td>04/28/2020</td>
                        </tr>

                        <!-- Total Paid-->
                        <tr>
                            <th>
                                Total Paid
                            </th>
                            <td class="text-right">
                                $ 2,794.50
                            </td>
                        </tr>

                        <!-- Total Due-->

                        </tbody>
                    </table>

                </div>

                <div class="col-xs-6">
                    <div class="table-responsive">
                        <table class="table">
                            <tbody>
                            <tr>
                                <th style="width:70%">
                                    Subtotal:
                                </th>
                                <td class="text-right">
                                    $ 3,105.00
                                </td>
                            </tr>

                            <!-- Shipping Charges -->

                            <!-- Discount -->
                            <tr>
                                <th>
                                    Discount (10.00%) :
                                </th>

                                <td class="text-right">
                                    (-) $ 310.50
                                </td>
                            </tr>

                            <!-- Tax -->

                            <!-- Total -->
                            <tr>
                                <th>
                                    Total:
                                </th>
                                <td class="text-right">
                                    $ 2,794.50
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </section>
        <div class="modal fade contact_modal" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel" style="display: none;">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <form method="POST" action="https://pos.ultimatefosters.com/contacts" accept-charset="UTF-8" id="quick_add_contact" novalidate="novalidate"><input name="_token" type="hidden" value="iwXJE7RdAsDMwaPXQ7fprFAhnK9zK3okB6XJy1HZ">

                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">�</span></button>
                            <h4 class="modal-title">Add a new contact</h4>
                        </div>

                        <div class="modal-body">
                            <div class="row">

                                <div class="col-md-6 contact_type_div hide">
                                    <div class="form-group">
                                        <label for="type">Contact type:*</label>
                                        <div class="input-group">
                        <span class="input-group-addon">
                          <i class="fa fa-user"></i>
                        </span>
                                            <select class="form-control" id="contact_type" required="" name="type" aria-required="true">
                                                <option selected="selected" value="">Please Select</option>
                                                <option value="supplier">Suppliers</option>
                                                <option value="customer">Customers</option>
                                                <option value="both">Both (Supplier &amp; Customer)</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Name:*</label>
                                        <div class="input-group">
                        <span class="input-group-addon">
                          <i class="fa fa-user"></i>
                        </span>
                                            <input class="form-control valid" placeholder="Name" required="" name="name" type="text" id="name" aria-required="true" aria-invalid="false">
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-md-4 supplier_fields" style="display: none;">
                                    <div class="form-group">
                                        <label for="supplier_business_name">Business Name:*</label>
                                        <div class="input-group">
                        <span class="input-group-addon">
                          <i class="fa fa-briefcase"></i>
                        </span>
                                            <input class="form-control" required="" placeholder="Business Name" name="supplier_business_name" type="text" id="supplier_business_name" aria-required="true">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="contact_id">Contact ID:</label>
                                        <div class="input-group">
                        <span class="input-group-addon">
                          <i class="fa fa-id-badge"></i>
                        </span>
                                            <input class="form-control valid" placeholder="Contact ID" name="contact_id" type="text" id="contact_id">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="tax_number">Tax number:</label>
                                        <div class="input-group">
                        <span class="input-group-addon">
                          <i class="fa fa-info"></i>
                        </span>
                                            <input class="form-control" placeholder="Tax number" name="tax_number" type="text" id="tax_number">
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="opening_balance">Opening Balance:</label>
                                        <div class="input-group">
                        <span class="input-group-addon">
                          <i class="fas fa-money-bill-alt"></i>
                        </span>
                                            <input class="form-control input_number" name="opening_balance" type="text" value="0" id="opening_balance">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="multi-input">
                                            <label for="pay_term_number">Pay term:</label> <i class="fa fa-info-circle text-info hover-q no-print " aria-hidden="true" data-container="body" data-toggle="popover" data-placement="auto bottom" data-content="Payments to be paid for purchases/sales within the given time period.<br/><small class='text-muted'>All upcoming or due payments will be displayed in dashboard - Payment Due section</small>" data-html="true" data-trigger="hover"></i> <br>
                                            <input class="form-control width-40 pull-left valid" placeholder="Pay term" name="pay_term_number" type="number" id="pay_term_number">

                                            <select class="form-control width-60 pull-left" name="pay_term_type">
                                                <option selected="selected" value="">Please Select</option>
                                                <option value="months">Months</option>
                                                <option value="days">Days</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4 customer_fields">
                                    <div class="form-group">
                                        <label for="customer_group_id">Customer Group:</label>
                                        <div class="input-group">
                        <span class="input-group-addon">
                          <i class="fa fa-users"></i>
                        </span>
                                            <select class="form-control" id="customer_group_id" name="customer_group_id">
                                                <option value="" selected="selected">None</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 customer_fields">
                                    <div class="form-group">
                                        <label for="credit_limit">Credit Limit:</label>
                                        <div class="input-group">
                        <span class="input-group-addon">
                          <i class="fas fa-money-bill-alt"></i>
                        </span>
                                            <input class="form-control input_number" name="credit_limit" type="text" id="credit_limit">
                                        </div>
                                        <p class="help-block">Keep blank for no limit</p>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <hr>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="email">Email:</label>
                                        <div class="input-group">
                        <span class="input-group-addon">
                          <i class="fa fa-envelope"></i>
                        </span>
                                            <input class="form-control valid" placeholder="Email" name="email" type="email" id="email">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="mobile">Mobile:*</label>
                                        <div class="input-group">
                        <span class="input-group-addon">
                          <i class="fa fa-mobile"></i>
                        </span>
                                            <input class="form-control valid" required="" placeholder="Mobile" name="mobile" type="text" id="mobile" aria-required="true" aria-invalid="false">
                                        </div><label id="mobile-error" class="error" for="mobile" style="display: none;"></label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="alternate_number">Alternate contact number:</label>
                                        <div class="input-group">
                        <span class="input-group-addon">
                          <i class="fa fa-phone"></i>
                        </span>
                                            <input class="form-control" placeholder="Alternate contact number" name="alternate_number" type="text" id="alternate_number">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="landline">Landline:</label>
                                        <div class="input-group">
                        <span class="input-group-addon">
                          <i class="fa fa-phone"></i>
                        </span>
                                            <input class="form-control" placeholder="Landline" name="landline" type="text" id="landline">
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="city">City:</label>
                                        <div class="input-group">
                        <span class="input-group-addon">
                          <i class="fa fa-map-marker"></i>
                        </span>
                                            <input class="form-control" placeholder="City" name="city" type="text" id="city">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="state">State:</label>
                                        <div class="input-group">
                        <span class="input-group-addon">
                          <i class="fa fa-map-marker"></i>
                        </span>
                                            <input class="form-control" placeholder="State" name="state" type="text" id="state">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="country">Country:</label>
                                        <div class="input-group">
                        <span class="input-group-addon">
                          <i class="fa fa-globe"></i>
                        </span>
                                            <input class="form-control" placeholder="Country" name="country" type="text" id="country">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="landmark">Landmark:</label>
                                        <div class="input-group">
                        <span class="input-group-addon">
                          <i class="fa fa-map-marker"></i>
                        </span>
                                            <input class="form-control" placeholder="Landmark" name="landmark" type="text" id="landmark">
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="clearfix"></div>
                                    <div class="col-md-12">
                                        <hr>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="custom_field1">Custom Field 1:</label>
                                            <input class="form-control" placeholder="Custom Field 1" name="custom_field1" type="text" id="custom_field1">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="custom_field2">Custom Field 2:</label>
                                            <input class="form-control" placeholder="Custom Field 2" name="custom_field2" type="text" id="custom_field2">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="custom_field3">Custom Field 3:</label>
                                            <input class="form-control" placeholder="Custom Field 3" name="custom_field3" type="text" id="custom_field3">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="custom_field4">Custom Field 4:</label>
                                            <input class="form-control" placeholder="Custom Field 4" name="custom_field4" type="text" id="custom_field4">
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>

                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Save</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>

                    </form>

                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div>
        <!-- /.content -->
        <div class="modal fade register_details_modal" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel" style="display: none;">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">

                    <div class="modal-header">
                        <button type="button" class="close no-print" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">�</span></button>
                        <h3 class="modal-title">Register Details ( 28th Apr, 2020 02:32 PM - 28th Apr, 2020 02:52 PM )</h3>
                    </div>

                    <div class="modal-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <table class="table">
                                    <tbody>
                                    <tr>
                                        <td>
                                            Cash in hand:
                                        </td>
                                        <td>
                                            <span class="display_currency" data-currency_symbol="true">$ 20,000.00</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Cash Payment:

                                        </td>
                                        <td>
                                            <span class="display_currency" data-currency_symbol="true">$ 1,406.25</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Cheque Payment:
                                        </td>
                                        <td>
                                            <span class="display_currency" data-currency_symbol="true">$ 0.00</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Card Payment:
                                        </td>
                                        <td>
                                            <span class="display_currency" data-currency_symbol="true">$ 0.00</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Bank Transfer:
                                        </td>
                                        <td>
                                            <span class="display_currency" data-currency_symbol="true">$ 0.00</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Custom Payment 1:
                                        </td>
                                        <td>
                                            <span class="display_currency" data-currency_symbol="true">$ 0.00</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Custom Payment 2:
                                        </td>
                                        <td>
                                            <span class="display_currency" data-currency_symbol="true">$ 0.00</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Custom Payment 3:
                                        </td>
                                        <td>
                                            <span class="display_currency" data-currency_symbol="true">$ 0.00</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Other Payments:
                                        </td>
                                        <td>
                                            <span class="display_currency" data-currency_symbol="true">$ 0.00</span>
                                        </td>
                                    </tr>
                                    <tr class="success">
                                        <th>
                                            Total Refund </th>
                                        <td>
                                            <b><span class="display_currency" data-currency_symbol="true">$ 0.00</span></b><br>
                                            <small>
                                            </small>
                                        </td>
                                    </tr>
                                    <tr class="success">
                                        <th>
                                            Total Payment </th>
                                        <td>
                                            <b><span class="display_currency" data-currency_symbol="true">$ 21,406.25</span></b>
                                        </td>
                                    </tr>
                                    <tr class="success">
                                        <th>
                                            Credit Sales:
                                        </th>
                                        <td>
                                            <b><span class="display_currency" data-currency_symbol="true">$ -225.00</span></b>
                                        </td>
                                    </tr>
                                    <tr class="success">
                                        <th>
                                            Total Sales:
                                        </th>
                                        <td>
                                            <b><span class="display_currency" data-currency_symbol="true">$ 1,181.25</span></b>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <hr>
                                <h3>Details of products sold</h3>
                                <table class="table">
                                    <tbody>
                                    <tr>
                                        <th>#</th>
                                        <th>Brands</th>
                                        <th>Quantity</th>
                                        <th>Total amount</th>
                                    </tr>
                                    <tr>
                                        <td>
                                            1.
                                        </td>
                                        <td>
                                            Acer
                                        </td>
                                        <td>
                                            3.0000
                                        </td>
                                        <td>
                                            <span class="display_currency" data-currency_symbol="true">$ 1,312.50</span>
                                        </td>
                                    </tr>

                                    <!-- Final details -->
                                    <tr class="success">
                                        <th>#</th>
                                        <th></th>
                                        <th>3</th>
                                        <th>

                                            Discount: (-)
                                            <span class="display_currency" data-currency_symbol="true">$ 131.25</span>
                                            <br>

                                            Grand Total:
                                            <span class="display_currency" data-currency_symbol="true">$ 1,181.25</span>
                                        </th>
                                    </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-6">
                                <b>User:</b> Mr Admin <br>
                                <b>Email:</b> admin@example.com<br>
                                <b>Business Location:</b> Awesome Shop<br>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary no-print" aria-label="Print" onclick="$(this).closest('div.modal').printThis();">
                            <i class="fa fa-print"></i> Print </button>

                        <button type="button" class="btn btn-default no-print" data-dismiss="modal">Cancel </button>
                    </div>

                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div>
        <div class="modal fade close_register_modal" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel">
        </div>
        <!-- quick product modal -->
        <div class="modal fade quick_add_product_modal" tabindex="-1" role="dialog" aria-labelledby="modalTitle" style="display: none;">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <form method="POST" action="https://pos.ultimatefosters.com/products/save_quick_product" accept-charset="UTF-8" id="quick_add_product_form" novalidate="novalidate"><input name="_token" type="hidden" value="iwXJE7RdAsDMwaPXQ7fprFAhnK9zK3okB6XJy1HZ">

                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">�</span></button>
                            <h4 class="modal-title" id="modalTitle">Add new product</h4>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="name">Product Name:*</label>
                                        <input class="form-control" required="" placeholder="Product Name" name="name" type="text" value="" id="name" aria-required="true">
                                        <select class="hide" id="type" name="type">
                                            <option value="single" selected="selected">Single</option>
                                            <option value="variable">Variable</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="sku">SKU:</label> <i class="fa fa-info-circle text-info hover-q no-print " aria-hidden="true" data-container="body" data-toggle="popover" data-placement="auto bottom" data-content="Unique product id or Stock Keeping Unit <br><br>Keep it blank to automatically generate sku.<br><small class='text-muted'>You can modify sku prefix in Business settings.</small>" data-html="true" data-trigger="hover"></i> <input class="form-control" placeholder="SKU" name="sku" type="text" id="sku">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="barcode_type">Barcode Type:*</label>
                                        <select class="form-control select2 select2-hidden-accessible" required="" id="barcode_type" name="barcode_type" aria-required="true" tabindex="-1" aria-hidden="true">
                                            <option value="C128" selected="selected">Code 128 (C128)</option>
                                            <option value="C39">Code 39 (C39)</option>
                                            <option value="EAN13">EAN-13</option>
                                            <option value="EAN8">EAN-8</option>
                                            <option value="UPCA">UPC-A</option>
                                            <option value="UPCE">UPC-E</option>
                                        </select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 269.984px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-barcode_type-container"><span class="select2-selection__rendered" id="select2-barcode_type-container" title="Code 128 (C128)">Code 128 (C128)</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    </div>
                                </div>
                                <div class="clearfix"></div>

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="unit_id">Unit:*</label>
                                        <select class="form-control select2 select2-hidden-accessible" required="" id="unit_id" name="unit_id" aria-required="true" tabindex="-1" aria-hidden="true">
                                            <option value="" selected="selected">Please Select</option>
                                            <option value="1">Pieces (Pc(s))</option>
                                            <option value="2">Packets (packets)</option>
                                            <option value="3">Grams (g)</option>
                                        </select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 269.984px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-unit_id-container"><span class="select2-selection__rendered" id="select2-unit_id-container" title="Please Select">Please Select</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    </div>
                                </div>

                                <div class="col-sm-4  hide ">
                                    <div class="form-group">
                                        <label for="sub_unit_ids">Related Sub Units:</label> <i class="fa fa-info-circle text-info hover-q no-print " aria-hidden="true" data-container="body" data-toggle="popover" data-placement="auto bottom" data-content="Based on selected Unit it will show sub units for it. Select the sub-unit applicable. Leave blank if all sub-units are applicable for the product." data-html="true" data-trigger="hover"></i>
                                        <select class="form-control select2 select2-hidden-accessible" multiple="" id="sub_unit_ids" name="sub_unit_ids[]" tabindex="-1" aria-hidden="true"></select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: auto;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1">
                            <ul class="select2-selection__rendered">
                              <li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" role="textbox" aria-autocomplete="list" placeholder="" style="width: 0.75em;"></li>
                            </ul>
                          </span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="brand_id">Brand:</label>
                                        <select class="form-control select2 select2-hidden-accessible" id="brand_id" name="brand_id" tabindex="-1" aria-hidden="true">
                                            <option selected="selected" value="">Please Select</option>
                                            <option value="1">Levis</option>
                                            <option value="2">Espirit</option>
                                            <option value="3">U.S. Polo Assn.</option>
                                            <option value="4">Nike</option>
                                            <option value="5">Puma</option>
                                            <option value="6">Adidas</option>
                                            <option value="7">Samsung</option>
                                            <option value="8">Apple</option>
                                            <option value="9">Acer</option>
                                            <option value="10">Bowflex</option>
                                            <option value="11">Oreo</option>
                                            <option value="12">Sharewood</option>
                                            <option value="13">Barilla</option>
                                            <option value="14">Lipton</option>
                                        </select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 269.984px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-brand_id-container"><span class="select2-selection__rendered" id="select2-brand_id-container" title="Please Select">Please Select</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    </div>
                                </div>

                                <div class="clearfix"></div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="category_id">Category:</label>
                                        <select class="form-control select2 select2-hidden-accessible" id="category_id" name="category_id" tabindex="-1" aria-hidden="true">
                                            <option selected="selected" value="">Please Select</option>
                                            <option value="1">Men's</option>
                                            <option value="2">Women's</option>
                                            <option value="3">Accessories</option>
                                            <option value="12">Electronics</option>
                                            <option value="15">Sports</option>
                                            <option value="18">Books</option>
                                            <option value="21">Food &amp; Grocery</option>
                                        </select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 269.984px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-category_id-container"><span class="select2-selection__rendered" id="select2-category_id-container" title="Please Select">Please Select</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    </div>
                                </div>

                                <div class="col-sm-4 ">
                                    <div class="form-group">
                                        <label for="sub_category_id">Sub category:</label>
                                        <select class="form-control select2 select2-hidden-accessible" id="sub_category_id" name="sub_category_id" tabindex="-1" aria-hidden="true">
                                            <option selected="selected" value="">Please Select</option>
                                        </select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 269.984px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-sub_category_id-container"><span class="select2-selection__rendered" id="select2-sub_category_id-container" title="Please Select">Please Select</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <br>
                                        <label>
                                            <div class="icheckbox_square-blue checked" style="position: relative;"><input class="input-icheck" id="enable_stock" checked="checked" name="enable_stock" type="checkbox" value="1" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> <strong>Manage Stock?</strong>
                                        </label><i class="fa fa-info-circle text-info hover-q no-print " aria-hidden="true" data-container="body" data-toggle="popover" data-placement="auto bottom" data-content="Enable or disable stock management for a product. <br><br><small class='text-muted'>Stock Management should be disable mostly for services. Example: Hair-Cutting, Repairing, etc.</small>" data-html="true" data-trigger="hover"></i>
                                        <p class="help-block"><i>Enable stock management at product level</i></p>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-sm-4" id="alert_quantity_div">
                                    <div class="form-group">
                                        <label for="alert_quantity">Alert quantity:</label>
                                        <input class="form-control" placeholder="Alert quantity" min="0" name="alert_quantity" type="number" id="alert_quantity">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="product_locations">Business Locations:</label> <i class="fa fa-info-circle text-info hover-q no-print " aria-hidden="true" data-container="body" data-toggle="popover" data-placement="auto bottom" data-content="Locations where product will be available." data-html="true" data-trigger="hover"></i> <select class="form-control select2 select2-hidden-accessible" multiple="" id="product_locations" name="product_locations[]" tabindex="-1" aria-hidden="true">
                                            <option value="1" selected="selected">Awesome Shop</option>
                                        </select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 269.984px;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1">
                            <ul class="select2-selection__rendered">
                              <li class="select2-selection__choice" title="Awesome Shop"><span class="select2-selection__choice__remove" role="presentation">�</span>Awesome Shop</li>
                              <li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" role="textbox" aria-autocomplete="list" placeholder="" style="width: 0.75em;"></li>
                            </ul>
                          </span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="weight">Weight:</label>
                                        <input class="form-control" placeholder="Weight" name="weight" type="text" id="weight">
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-sm-8">
                                    <div class="form-group">
                                        <label for="product_description">Product Description:</label>
                                        <textarea class="form-control" name="product_description" cols="50" rows="10" id="product_description" style="" aria-hidden="true"></textarea>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="tax">Applicable Tax:</label>
                                        <select class="form-control select2 select2-hidden-accessible" id="tax" name="tax" tabindex="-1" aria-hidden="true">
                                            <option selected="selected" value="">Please Select</option>
                                            <option value="" selected="selected">None</option>
                                            <option value="1" data-rate="10">VAT@10%</option>
                                            <option value="2" data-rate="10">CGST@10%</option>
                                            <option value="3" data-rate="8">SGST@8%</option>
                                            <option value="4" data-rate="18">GST@18%</option>
                                        </select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 269.984px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-tax-container"><span class="select2-selection__rendered" id="select2-tax-container" title="None">None</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="tax_type">Selling Price Tax Type:*</label>
                                        <select class="form-control select2 select2-hidden-accessible" required="" id="tax_type" name="tax_type" aria-required="true" tabindex="-1" aria-hidden="true">
                                            <option value="inclusive">Inclusive</option>
                                            <option value="exclusive" selected="selected">Exclusive</option>
                                        </select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 269.984px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-tax_type-container"><span class="select2-selection__rendered" id="select2-tax_type-container" title="Exclusive">Exclusive</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="checkbox">
                                        <br>
                                        <label>
                                            <div class="icheckbox_square-blue" style="position: relative;"><input class="input-icheck" name="enable_sr_no" type="checkbox" value="1" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> <strong>Enable Product description, IMEI or Serial Number</strong>
                                        </label><i class="fa fa-info-circle text-info hover-q no-print " aria-hidden="true" data-container="body" data-toggle="popover" data-placement="auto bottom" data-content="Enable or disable adding product description, IMEI or Serial number while selling products in POS screen" data-html="true" data-trigger="hover"></i> </div>
                                </div>
                                <div class="clearfix"></div>

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <br>
                                        <label>
                                            <div class="icheckbox_square-blue" style="position: relative;"><input class="input-icheck" name="not_for_selling" type="checkbox" value="1" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> <strong>Not for selling</strong>
                                        </label> <i class="fa fa-info-circle text-info hover-q no-print " aria-hidden="true" data-container="body" data-toggle="popover" data-placement="auto bottom" data-content="If checked, product will not be displayed in sales screen for selling purposes." data-html="true" data-trigger="hover"></i> </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="product_custom_field1">Custom Field1:</label>
                                        <input class="form-control" placeholder="Custom Field1" name="product_custom_field1" type="text" id="product_custom_field1">
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="product_custom_field2">Custom Field2:</label>
                                        <input class="form-control" placeholder="Custom Field2" name="product_custom_field2" type="text" id="product_custom_field2">
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="product_custom_field3">Custom Field3:</label>
                                        <input class="form-control" placeholder="Custom Field3" name="product_custom_field3" type="text" id="product_custom_field3">
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="product_custom_field4">Custom Field4:</label>
                                        <input class="form-control" placeholder="Custom Field4" name="product_custom_field4" type="text" id="product_custom_field4">
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <br>
                                        <label>
                                            <input type="hidden" name="woocommerce_disable_sync" value="0">
                                            <div class="icheckbox_square-blue" style="position: relative;"><input class="input-icheck" name="woocommerce_disable_sync" type="checkbox" value="1" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> <strong>Disable Woocommerce Sync</strong>
                                        </label>
                                        <i class="fa fa-info-circle text-info hover-q no-print " aria-hidden="true" data-container="body" data-toggle="popover" data-placement="auto bottom" data-content="If checked this product will not be synced with woocommerce" data-html="true" data-trigger="hover"></i> </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-sm-11 col-sm-offset-1">
                                    <div class="table-responsive">
                                        <table class="table table-bordered add-product-price-table table-condensed ">
                                            <tbody>
                                            <tr>
                                                <th>Default Purchase Price</th>
                                                <th>x Margin(%) <i class="fa fa-info-circle text-info hover-q no-print " aria-hidden="true" data-container="body" data-toggle="popover" data-placement="auto bottom" data-content="Default profit margin for the product. <br><small class='text-muted'>(<i>You can manage default profit margin in Business Settings.</i>)</small>" data-html="true" data-trigger="hover"></i></th>
                                                <th>Default Selling Price</th>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="col-sm-6">
                                                        <label for="single_dpp">Exc. tax:*</label>

                                                        <input class="form-control input-sm dpp input_number" placeholder="Exc. tax" required="" name="single_dpp" type="text" id="single_dpp" aria-required="true">
                                                    </div>

                                                    <div class="col-sm-6">
                                                        <label for="single_dpp_inc_tax">Inc. tax:*</label>

                                                        <input class="form-control input-sm dpp_inc_tax input_number" placeholder="Inc. tax" required="" name="single_dpp_inc_tax" type="text" id="single_dpp_inc_tax" aria-required="true">
                                                    </div>
                                                </td>

                                                <td>
                                                    <br>
                                                    <input class="form-control input-sm input_number" id="profit_percent" required="" name="profit_percent" type="text" value="25.00" aria-required="true">
                                                </td>

                                                <td>
                                                    <label><span class="dsp_label">Exc. tax</span></label>
                                                    <input class="form-control input-sm dsp input_number" placeholder="Exc. tax" id="single_dsp" required="" name="single_dsp" type="text" aria-required="true">

                                                    <input class="form-control input-sm hide input_number" placeholder="Inc. tax" id="single_dsp_inc_tax" required="" name="single_dsp_inc_tax" type="text" aria-required="true">
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="row" id="quick_product_opening_stock_div">
                                <div class="col-sm-12">
                                    <h4>Add Opening Stock</h4>
                                </div>
                                <div class="col-sm-12">
                                    <table class="table table-condensed table-th-green" id="quick_product_opening_stock_table">
                                        <thead>
                                        <tr>
                                            <th>Location</th>
                                            <th>Quantity</th>
                                            <th>Unit Cost (Before Tax)</th>
                                            <th>Subtotal (Before Tax)</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>Awesome Shop</td>
                                            <td><input class="form-control input-sm input_number purchase_quantity" required="" name="opening_stock[1][quantity]" type="text" value="0" aria-required="true"></td>
                                            <td><input class="form-control input-sm input_number unit_price" required="" name="opening_stock[1][purchase_price]" type="text" aria-required="true"></td>
                                            <td>
                                                <span class="row_subtotal_before_tax">0</span>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary" id="submit_quick_product">Save</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>

                    </form>

                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->

        </div>

        <div class="modal fade" id="configure_search_modal" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">�</span></button>
                        <h4 class="modal-title">
                            Search products by </h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="checkbox">
                                    <label>
                                        <div class="icheckbox_square-blue checked" style="position: relative;"><input class="input-icheck search_fields" checked="checked" name="search_fields[]" type="checkbox" value="name" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> Product Name
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="checkbox">
                                    <label>
                                        <div class="icheckbox_square-blue checked" style="position: relative;"><input class="input-icheck search_fields" checked="checked" name="search_fields[]" type="checkbox" value="sku" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> SKU
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade no-print" id="recent_transactions_modal" tabindex="-1" role="dialog" aria-labelledby="modalTitle" style="display: none;">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">�</span></button>
                        <h4 class="modal-title">Recent Transactions</h4>
                    </div>
                    <div class="modal-body">
                        <div class="nav-tabs-custom">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#tab_final" data-toggle="tab" aria-expanded="true"><b><i class="fa fa-check"></i> Final</b></a></li>

                                <li class=""><a href="#tab_quotation" data-toggle="tab" aria-expanded="false"><b><i class="fa fa-terminal"></i> Quotation</b></a></li>

                                <li class=""><a href="#tab_draft" data-toggle="tab" aria-expanded="false"><b><i class="fa fa-terminal"></i> Draft</b></a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="tab_final">
                                    <table class="table table-slim no-border">
                                        <tbody>
                                        <tr class="cursor-pointer" data-toggle="tooltip" data-html="true" title="Customer: Walk-In Customer
		    			    		">
                                            <td>
                                                1.
                                            </td>
                                            <td>
                                                AS0007 (Walk-In Customer)
                                            </td>
                                            <td class="display_currency">787.50</td>
                                            <td>
                                                <a href="https://pos.ultimatefosters.com/pos/55/edit">
                                                    <i class="fas fa-pen text-muted" aria-hidden="true" title="Click to edit"></i>
                                                </a>

                                                <a href="https://pos.ultimatefosters.com/pos/55" class="delete-sale" style="padding-left: 20px; padding-right: 20px"><i class="fa fa-trash text-danger" title="Click to delete"></i></a>

                                                <a href="https://pos.ultimatefosters.com/sells/55/print" class="print-invoice-link">
                                                    <i class="fa fa-print text-muted" aria-hidden="true" title="Click to print"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr class="cursor-pointer" data-toggle="tooltip" data-html="true" title="Customer: Walk-In Customer
		    			    		">
                                            <td>
                                                2.
                                            </td>
                                            <td>
                                                AS0006 (Walk-In Customer)
                                            </td>
                                            <td class="display_currency">393.75</td>
                                            <td>
                                                <a href="https://pos.ultimatefosters.com/pos/54/edit">
                                                    <i class="fas fa-pen text-muted" aria-hidden="true" title="Click to edit"></i>
                                                </a>

                                                <a href="https://pos.ultimatefosters.com/pos/54" class="delete-sale" style="padding-left: 20px; padding-right: 20px"><i class="fa fa-trash text-danger" title="Click to delete"></i></a>

                                                <a href="https://pos.ultimatefosters.com/sells/54/print" class="print-invoice-link">
                                                    <i class="fa fa-print text-muted" aria-hidden="true" title="Click to print"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="tab-pane" id="tab_quotation">
                                </div>
                                <div class="tab-pane" id="tab_draft">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div>
        <div class="modal fade" tabindex="-1" role="dialog" id="weighing_scale_modal">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">�</span></button>
                        <h4 class="modal-title">Weighing Scale</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label for="weighing_scale_barcode">Weighing scale barcode:</label> <i class="fa fa-info-circle text-info hover-q no-print " aria-hidden="true" data-container="body" data-toggle="popover" data-placement="auto bottom" data-content="Scan the barcode from weighing sale and submit" data-html="true" data-trigger="hover"></i> <input class="form-control" name="weighing_scale_barcode" type="text" id="weighing_scale_barcode">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" id="weighing_scale_submit">Submit</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

        <div class="scrolltop no-print">
            <div class="scroll icon"><i class="fas fa-angle-up"></i></div>
        </div>

        <!-- This will be printed -->
        <section class="invoice print_section" id="receipt_section">
        </section>

    </div>
    <div class="modal fade" id="todays_profit_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">�</span></button>
                    <h4 class="modal-title" id="myModalLabel">Today's profit</h4>
                </div>
                <div class="modal-body">
                    <input type="hidden" id="modal_today" value="2020-04-28">
                    <div class="row">
                        <div id="todays_profit">
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div> <!-- /.content-wrapper -->

    <!-- Main Footer -->
    <footer class="no-print text-center text-info">
        <!-- To the right -->
        <!-- <div class="pull-right hidden-xs">
        Anything you want
      </div> -->
        <!-- Default to the left -->
        <small>
            <b>Ultimate POS - V3.1 | Copyright � 2020 All rights reserved.</b>
        </small>
    </footer>
    <audio id="success-audio">
        <source src="https://pos.ultimatefosters.com/audio/success.ogg?v=74" type="audio/ogg">
        <source src="https://pos.ultimatefosters.com/audio/success.mp3?v=74" type="audio/mpeg">
    </audio>
    <audio id="error-audio">
        <source src="https://pos.ultimatefosters.com/audio/error.ogg?v=74" type="audio/ogg">
        <source src="https://pos.ultimatefosters.com/audio/error.mp3?v=74" type="audio/mpeg">
    </audio>
    <audio id="warning-audio">
        <source src="https://pos.ultimatefosters.com/audio/warning.ogg?v=74" type="audio/ogg">
        <source src="https://pos.ultimatefosters.com/audio/warning.mp3?v=74" type="audio/mpeg">
    </audio>

</div>

<!--[if lt IE 9]>


<![endif]-->

<!-- TODO -->

<!-- Call restaurant module if defined -->

<div class="modal fade" id="clock_in_clock_out_modal" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <form method="POST" action="https://pos.ultimatefosters.com/hrm/clock-in-clock-out" accept-charset="UTF-8" id="clock_in_clock_out_form"><input name="_token" type="hidden" value="iwXJE7RdAsDMwaPXQ7fprFAhnK9zK3okB6XJy1HZ">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">�</span></button>
                    <h4 class="modal-title"><span id="clock_in_text">Clock In</span>
                        <span id="clock_out_text">Clock Out</span></h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <input type="hidden" name="type" id="type">
                        <div class="form-group col-md-12">
                            <strong>IP Address: 168.211.5.45</strong>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="note">Note:</label>
                            <textarea class="form-control" placeholder="Note" rows="3" name="note" cols="50" id="note"></textarea>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>

            </form>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->

</div>
<div class="modal fade view_modal" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel" style="display: none;">
    <!-- Edit Order tax Modal -->
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">�</span></button>
                <h4 class="modal-title">Suspended Sales</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <p class="text-center">No records found</p>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>

<ul id="ui-id-1" tabindex="0" class="ui-menu ui-widget ui-widget-content ui-autocomplete ui-front" style="display: none;"></ul>
<div role="status" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div>
</body>
</html>