<!DOCTYPE html>
<!--Copyright (c) 2008 PayFast (Pty) Ltd
You (being anyone who is not PayFast (Pty) Ltd) may download and use this plugin / code in your own website in conjunction with a registered and active PayFast account. If your PayFast account is terminated for any reason, you may not use this plugin / code or part thereof.
Except as expressly indicated in this licence, you may not use, copy, modify or distribute this plugin / code or part thereof in any way.-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
    <title></title>
    <script type="text/javascript" src="<?php echo base_url(). 'assets/plugins/jquery/jquery-3.3.1.min.js';?>"></script>
</head>
<body>
    
    <div id="cart">
        <div class="cart_prod" id="CPI-1" style="padding:1em 0">
            <span class="item-price">80</span>
            <button class="cart-qtd-minus" type="button" value="-">-</button>
                <input type="text" name="qtd" class="qtd" maxlength="12" value="0" class="input-text qtd" />
            <button class="cart-qtd-plus" type="button" value="+">+</button>
            Total = <div class="price">0</div>
        </div>
        
        <div class="cart_prod" id="CPI-2"  style="padding:1em 0">
            <span class="item-price">60</span>
            <button class="cart-qtd-minus" type="button" value="-">-</button>
                <input type="text" name="qtd" class="qtd" maxlength="12" value="0" class="input-text qtd" />
            <button class="cart-qtd-plus" type="button" value="+">+</button>
            Total = <div class="price">0</div>
        </div>

        <div class="cart_prod" id="CPI-3" style="padding:1em 0">
            <span class="item-price">30</span>
            <button class="cart-qtd-minus" type="button" value="-">-</button>
                <input type="text" name="qtd" class="qtd" maxlength="12" value="0" class="input-text qtd" />
            <button class="cart-qtd-plus" type="button" value="+">+</button>
            Total = <div class="price">0</div>
        </div>

        <div id="qtd_total">0</div>
        <div id="price_total">0</div>
    </div>
            
</body>
<script type="text/javascript">
  
    $("body").on('click','.cart-qtd-plus',function(event) {
        //declaro uma var para incremetar as quantidades
        var $n = $(this).parent().find(".qtd");
            $n.val(parseInt($n.val())+1 );

        //faço a multiplicação do valor do item-price multiplicado pelas quantidades
        var $price = $(this).parent().find(".item-price");
        var $amount = $price.html();
        var $amountotal = ($amount * $n.val());
        $(this).parent().find(".price").html($amountotal);

        //declaro uma var para somar o total
        var qtd_total = 0;
        //faço um foreach percorrendo todos os inputs com a class qtd e faço a soma na var criada acima
        $(".qtd").each(function(){  
            qtd_total += parseInt($(this).val());
        });
        //mostro o total no div qtd_total
        $("#qtd_total").html(qtd_total);
        
        //declaro uma var para somar o total
        var price_total = 0;
        //faço um foreach percorrendo todos os inputs com a class qtd_total e faço a soma na var criada acima
        $(".price").each(function(){  
            price_total += parseInt($(this).html());
        });
        //mostro o total no div qtd_total
        $("#price_total").html(price_total); 
    });

    $("body").on('click','.cart-qtd-minus',function(event) {
        //declaro uma var para decrementar as quantidades
        var $n = $(this).parent().find(".qtd");
        var qtd = parseInt($n.val());
        if (qtd > 0) { $n.val(qtd-1); }

        //faço a multiplicação do valor do item-price multiplicado pelas quantidades
        var $price = $(this).parent().find(".item-price");
        var $amount = $price.html();
        var $amountotal = ($amount * $n.val());
        $(this).parent().find(".price").html($amountotal);
        
        //declaro uma var para somar o total
        var qtd_total = 0;
        //faço um foreach percorrendo todos os inputs com a class qtd_total e faço a soma na var criada acima
        $(".qtd").each(function(){       
            qtd_total -= parseInt($(this).val() * (-1));
        });
        //mostro o total no div qtd_total
        $("#qtd_total").html(qtd_total);
        
        //declaro uma var para somar o total
        var price_total = 0;
        //faço um foreach percorrendo todos os inputs com a class qtd_total e faço a soma na var criada acima
        $(".price").each(function(){  
            price_total += parseInt($(this).html());
        });
        //mostro o total no div qtd_total
        $("#price_total").html(price_total);
    });
</script>
</html>
