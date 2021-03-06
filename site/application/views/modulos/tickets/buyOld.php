<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--Copyright (c) 2008 PayFast (Pty) Ltd
You (being anyone who is not PayFast (Pty) Ltd) may download and use this plugin / code in your own website in conjunction with a registered and active PayFast account. If your PayFast account is terminated for any reason, you may not use this plugin / code or part thereof.
Except as expressly indicated in this licence, you may not use, copy, modify or distribute this plugin / code or part thereof in any way.-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
    <title>simpleCart(js) Payfast shopping cart example</title>
    <script type="text/javascript" src="<?php echo base_url(). 'assets/plugins/jquery/jquery-3.3.1.min.js';?>"></script>
    <script type="text/javascript" src="<?php echo base_url(). 'assets/plugins/simplecart/simpleCart.js';?>"></script>
    <script type="text/javascript">
        
        simpleCart({
            checkout: { 
                type: "SendForm" , 
                url: "https://sandbox.payfast.co.za/eng/process" ,
                // HTTP method for form, "POST" 
                method: "POST" , 
                // URL to redirect browser to after successful checkout
                success: "http://yourwebsite.co.za/success.html" , 
                // URL to redirect browser to after checkout was cancelled by buyer
                cancel: "http://yourwebsite.co.za/cancel.html" ,
                extra_data: {
                    currency_code: "ZAR",
                    merchant_id: "10000100",
                    merchant_key: "46f0cd694581a",
                    notify_url: "http://yourwebsite.co.za/notify.html", //this is the ITN or callback URL
                    amount: simpleCart.total,                           // Total amount = item1 + item2 + item3 etc
                    name_first: "Buyer first name",                          
                    name_last: "Buyer last name",                       
                }
            },
            beforeCheckout: function( data ){
                data.currency = "ZAR";
                data.cancel_url = data.cancel_return;
                data.return_url = data.return;
                var payfast_description = '';
                for (var key in data)
                    if (key.match(/^item_name/))
                        payfast_description += ' '+data[key];
                data.item_description = data.item_name = payfast_description;
            }
        });
    </script>
    <style>
        .simpleCart_items div, div {
            float:left;
            position: relative;
            margin-right: 20px;
        }
        /* .simpleCart_shelfItem, .shoppingcart-container {
            border: 1px solid gray;
            padding: 1em;
        } */
    </style>
</head>
<body>
    <table>
        <!-- <tr>
            <td>
                <div class="simpleCart_shelfItem">
                    <h5 class="item_name">DUMMY PRODUCT 1</h5>
                    <img src="images/num_1_m.gif" alt="DUMMY PRODUCT 1" title="DUMMY PRODUCT 1" class="item_image"/>
                    <span class="item_price"><strong>R10.01</strong></span>
                    <noscript><a href="no_javascript.html" class="item_add">Add to Cart</a>;</noscript>
                    <script>document.write('<a href="#" class="item_add">Add to Cart</a>');</script>
                    <p class="item_Description">product description product description<br/>product description product description</p>
                </div>
            </td>
            <td>
                <div class="simpleCart_shelfItem">
                    <h5 class="item_name">DUMMY PRODUCT 2</h5>
                    <img src="images/num_2_m.gif" alt="DUMMY PRODUCT 2" title="DUMMY PRODUCT 2" class="item_image"/>
                    <span class="item_price"><strong>R20.02</strong></span>
                    <noscript><a href="no_javascript.html" class="item_add">Add to Cart</a>;</noscript>
                    <script>document.write('<a href="#" class="item_add">Add to Cart</a>');</script>
                    <p class="item_Description">product description product description<br/>product description product description</p>
                </div>  
            </td>
        </tr>
        <tr>
            <td>
                <div class="simpleCart_shelfItem">
                    <h5 class="item_name">DUMMY PRODUCT 3</h5>
                    <span class="item_price"><strong>R30.03</strong></span>
                    <noscript><a href="no_javascript.html" class="item_add">Add to Cart</a>;</noscript>
                    <script>document.write('<a href="#" class="item_add">Add to Cart</a>');</script>
                    <p class="item_Description">product description product description<br/>product description product description</p>
                </div>  
            </td>
            <td>
            </td>
        </tr> -->
            <tr>
                <td>
                    <div class="simpleCart_shelfItem">
                        <h5 class="item_name">DUMMY PRODUCT 4</h5>
                        <span class="item_price"><strong>R80.04</strong></span>
                        <noscript><a href="no_javascript.html" class="item_add">Add to Cart</a>;</noscript>
                        <script>document.write('<a href="#" class="item_add">Add to Cart</a>');</script>
                        <p class="item_Description">product description product description<br/>product description product description</p>
                    </div>
                </td>  
            <tr>
            <td colspan="2" class="shoppingcart-container">
            <div style="width:700px;" class="simpleCart_items">
                <div>
                    <div>
                        <div class="headerRow">
                            <div class="item-name">Name</div>
                            <div class="item-price">Price</div>
                            <div class="item-decrement"></div>
                            <div class="item-quantity">Qty</div>
                            <div class="item-increment"></div>
                            <div class="item-total">SubTotal</div>
                            <div class="item-remove"></div>
                        </div>
                    </div>
                    <div class="itemRow row-0 odd" id="cartItem_SCI-1">
                        <div class="item-name">DUMMY PRODUCT 4</div>
                        <div class="item-price">$80.04</div>
                        <div class="item-decrement">
                            <a href="javascript:;" class="simpleCart_decrement">-</a>
                        </div>
                        <div class="item-quantity">1</div>
                        <div class="item-increment">
                            <a href="javascript:;" class="simpleCart_increment">+</a>
                        </div>
                        <div class="item-total">$80.04</div>
                        <div class="item-remove">
                            <a href="javascript:;" class="simpleCart_remove">Remove</a>
                        </div>
                    </div>
                </div>
            </div>
            </td>
        </tr>
        <tr>
            <td colspan="2" class="text-enter">
                <div id="cartTotal"><strong>Total: </strong><span class="simpleCart_total"></span></div>
            </td>
        </tr>
        <tr>
            <td>
                <noscript><a href="no_javascript.html" class="simpleCart_empty">Empty Cart</a>;</noscript>
                <script>document.write('<a href="#" class="simpleCart_empty">Empty Cart</a>');</script>
            </td>
            <td>
                <noscript><a href="no_javascript.html" class="simpleCart_checkout">Checkout</a>;</noscript>
                <script>document.write('<a href="#" class="simpleCart_checkout">Checkout</a>');</script>
        </tr>
    </table>
</body>
</html>
