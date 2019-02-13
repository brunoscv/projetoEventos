<!-- PRIMEIRO CARROUSEL -->
<section>
    <div id="myCarousel" class="carousel slide" data-ride="carousel" style="margin-top:5em">
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <img src="https://www.bilhetecerto.com.br/banners/gusttavolima.jpeg" style="width:100%;"/>
            </div>
        </div>
    </div>
</section>
<!-- PRIMEIRO CARROUSEL -->

<!-- SECTION DE CATEGORIAS -->
<section class="categoriesCards">
    <div class="container">
        <div class="row">
            <div class="section-title">
                <h4> <?php echo $events["description"]; ?> </h4>     
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12" role="main">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-calendar"></i> Data do Evento</h3>
                    </div>
                    <div class="panel-body">
                        <ul class="list-event-info">
                            <li class="list-event-info-item"><span class="iconDate"><i class="fa fa-calendar"></i></span><span class="infoDate"><?php echo date('d/m/Y', strtotime($events["data"] )); ?></span></li>
                            <li class="list-event-info-item"><span class="iconTime"><i class="fa fa-clock-o"></i></span><span class="infoTime"><?php echo date('H:s', strtotime($events["data"] )); ?></span></li>
                        </ul>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-list"></i> Informações do Evento</h3>
                    </div>
                    <div class="panel-body">
                        <?php echo $events["information"]; ?>
                    </div>
                </div>
            </div>
            <aside class="col-lg-4 col-md-4 col-sm-5 col-xs-12">
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
            </aside>
        </div>
    </div>
</section>
<!-- SECTION DE CATEGORIAS -->
