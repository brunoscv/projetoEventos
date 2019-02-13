
<!-- SECTION DE CATEGORIAS -->
<section class="ticketsCard" style="min-height:100vh">
    <div class="container">
        <!-- <div class="row">
            <div class="section-title" style="margin-top:5em;">
                <h4> <?php echo $events["description"]; ?> </h4>     
            </div>
        </div> -->
        <div class="row" style="margin-top:10em;">
            <div class="col-lg-5 col-md-5 col-sm-7 col-xs-12" role="main">
                <div class="panel panel-default">
                    <!-- <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-calendar"></i> Data do Evento</h3>
                    </div> -->
                    <div class="panel-body">
                        <div class="panel-image">
                            <img src="https://s3-sa-east-1.amazonaws.com/bilheteriadigital/eventos/28467a.jpg?1544206139" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <aside class="col-lg-7 col-md-7 col-sm-5 col-xs-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><?php echo $events["description"]; ?></h3>
                    </div>
                    <div class="panel-body">
                        <ul class="list-event-info">
                            <li class="list-event-info-item"><span class="iconLocation"><i class="fa fa-map-marker"></i></span><span class="infoDate"><?php echo $events["place"]["description"] . ' - ' . $events["place"]["address"]["city"] . ', ' . $events["place"]["address"]["uf"]; ?></span></li>
                            <li class="list-event-info-item"><span class="iconDate"><i class="fa fa-calendar"></i></span><span class="infoDate"><?php echo date('d/m/Y', strtotime($events["data"] )); ?></span></li>
                            <li class="list-event-info-item"><span class="iconTime"><i class="fa fa-clock-o"></i></span><span class="infoTime"><?php echo date('H:s', strtotime($events["data"] )); ?></span></li>  
                        </ul>
                    </div>
                </div>
            </aside>
            <aside class="col-lg-7 col-md-7 col-sm-5 col-xs-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-paste"></i> Detalhes dos Ingressos</h3>
                    </div>
                    <div class="panel-body">
                        <ul class="list-group">
                            <div id="cart">
                                <li class="list-group-item">
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <div class="cart_prod" id="CPI-1" style="padding:1em 0; width:100%">
                                                    <div class="col-sm-8 col-xs-8 col-md-8">
                                                    <div class="section-price"><p>CAMAROTE</p><p>R$ <span class="item-price">80</span></p></div>
                                                    </div>
                                                    <div class="col-sm-4 col-xs-4 col-md-4" style="text-align:right">
                                                        <div class="button-section" style="display:inline-flex;">
                                                            <button class="btn btn-default cart-qtd-minus" type="button" value="-" style="margin:.5em">-</button>
                                                                <input type="text" name="qtd" class="form-control qtd" maxlength="2" value="0" readonly="" class="input-text qtd" style="width: 3em; text-align:center; margin: .5em;"/>
                                                            <button class="btn btn-default cart-qtd-plus" type="button" value="+" style="margin: .5em;">+</button>
                                                            
                                                        </div>
                                                        <div style="text-align:right">R$ <span class="price">0</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>    
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <div class="cart_prod" id="CPI-1" style="padding:1em 0; width:100%">
                                                    <div class="col-sm-8 col-xs-8 col-md-8">
                                                    <div class="section-price"><p>INTEIRA</p><p>R$ <span class="item-price">60</span></p></div>
                                                    </div>
                                                    <div class="col-sm-4 col-xs-4 col-md-4" style="text-align:right">
                                                        <div class="button-section" style="display:inline-flex;">
                                                            <button class="btn btn-default cart-qtd-minus" type="button" value="-" style="margin:.5em">-</button>
                                                                <input type="text" name="qtd" class="form-control qtd" maxlength="2" value="0" readonly="" class="input-text qtd" style="width: 3em; text-align:center; margin: .5em;"/>
                                                            <button class="btn btn-default cart-qtd-plus" type="button" value="+" style="margin: .5em;">+</button>
                                                            
                                                        </div>
                                                        <div style="text-align:right">R$ <span class="price">0</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>    
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <div class="cart_prod" id="CPI-1" style="padding:1em 0; width:100%">
                                                    <div class="col-sm-8 col-xs-8 col-md-8">
                                                    <div class="section-price"><p>MEIA</p><p>R$ <span class="item-price">30</span></p></div>
                                                    </div>
                                                    <div class="col-sm-4 col-xs-4 col-md-4" style="text-align:right">
                                                        <div class="button-section" style="display:inline-flex;">
                                                            <button class="btn btn-default cart-qtd-minus" type="button" value="-" style="margin:.5em">-</button>
                                                                <input type="text" name="qtd" class="form-control qtd" maxlength="2" value="0" readonly="" class="input-text qtd" style="width: 3em; text-align:center; margin: .5em;"/>
                                                            <button class="btn btn-default cart-qtd-plus" type="button" value="+" style="margin: .5em;">+</button>
                                                            
                                                        </div>
                                                        <div style="text-align:right">R$ <span class="price">0</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>    
                                    </div>
                                </li>
                                <!-- <div><span id="qtd_total">0</span> ingresso(s)</div>
                                <div>Total - R$ <span id="price_total">0</span></div> -->
                            </div>
                        </ul> 
                    </div>
                </div>
            </aside>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-list"></i> Informações do Evento</h3>
                    </div>
                    <div class="panel-body">
                        <?php echo $events["information"]; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-map-marker"></i> Localização do Evento</h3>
                    </div>
                    <div class="panel-body">
                        <ul class="list-event-info">
                            <li class="list-event-info-item"><span class="iconLocation"></span><span class="infoDate"><?php echo $events["place"]["address"]["street"] . ", " . $events["place"]["address"]["number"]; ?></span></li>
                            <li class="list-event-info-item"><span class="iconLocation"></span><span class="infoDate"><?php echo $events["place"]["address"]["district"]; ?></span></li>
                            <li class="list-event-info-item"><span class="iconLocation"></span><span class="infoDate"><?php echo $events["place"]["description"]; ?></span></li>
                            <li class="list-event-info-item"><span class="iconLocation"></span><span class="infoDate"><?php echo $events["place"]["address"]["city"] ; ?> - <?php echo $events["place"]["address"]["uf"] ; ?></span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="price-fix-wrap">
    <div class="container">
        <div class="resumo">
            <h4>Resumo do seu pedido</h4>
            <div class="resumo-wrap">
                <div>Itens: <span id="qtd_total">0</span></div>
                <div class="price-wrap">Total: 
                    <div class="price-box">
                        <span class="regular-price" id="product-price-5160">
                            R$ <span id="price_total">0</span>
                        </span>
                    </div>
                </div>
            </div>
            <div class="add-to-cart">
                <button type="button" title="Comprar Ingresso" class="btn btn-primary"><span><span><i class="fa fa-shopping-cart"></i> Finalizar Compra</span></span></button>
            </div>
        </div>
    </div>
</div>
<style type="text/css">
.price-fix-wrap {
    position: fixed;
    padding: 20px 0;
    bottom: 0;
    left: 0;
    width: 100%;
    background-color: #fdfdfd;
    min-height: 80px;
    z-index: 99;
    -webkit-box-shadow: 0px -1px 3px rgba(0,0,0,0.15);
    box-shadow: 0px -1px 3px rgba(0,0,0,0.15);
}
.price-fix-wrap .resumo {
    display: table;
    width: 100%;
}
.price-fix-wrap .resumo > * {
    display: table-cell;
    width: auto;
    vertical-align: middle;
    padding: 0;
}
.price-fix-wrap .resumo-wrap > div {
    vertical-align: middle;
    padding: 0 20px;
}
.resumo-wrap > .price-wrap {
    text-align: right;
}
.resumo-wrap > div {
    display: table-cell;
    font-size: 18px;
}

.price-fix-wrap .price-box {
    display: inline;
}
.product-view .price-box {
    margin: 0 0 10px;
}
.price-box {
    min-height: 70px;
}
.panel-image img {
        width:100%;
        margin:auto;
    }
</style>
    
</section>
<script type="text/javascript">
  
  $("body").on('click','.cart-qtd-plus',function(event) {
      //declaro uma var para incremetar as quantidades
      var $n = $(this).parent().find(".qtd");
          $n.val(parseInt($n.val())+1 );

      //faço a multiplicação do valor do item-price multiplicado pelas quantidades
      var $price = $(this).parent().parent().parent().find(".item-price");
      var $amount = $price.html();
      var $amountotal = ($amount * $n.val());
      $(this).parent().parent().find(".price").html($amountotal);

      console.log( $(this).parent().find(".price").html($amountotal));

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
      var $price = $(this).parent().parent().parent().find(".item-price");
      var $amount = $price.html();
      var $amountotal = ($amount * $n.val());
      $(this).parent().parent().find(".price").html($amountotal);

      
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
