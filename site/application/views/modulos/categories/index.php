<!-- GALERIA DE EVENTOS POR CATEGORIA -->
<section class="eventsCards" style="min-height:100vh">
    <div class="container">
        <div class="row">
            <div class="section-title" style="margin-top:3em">
                <h4> EVENTOS - <?php echo $events["category"]?></h4>
            </div>
        </div>
        <div class="row">
            <?php foreach ( $events["events"] as $event ){ ?>
                <a href="<?php echo site_url("events") . "/index/" . $event["id"];?>">
                    <div class="col-md-3 col-sm-2">
                        <div class="thumbnail">
                            <img src="https://dpz4c7q921os3.cloudfront.net/images/block/62172a044fd9ea6f1f0790dfe11a105bd39cb755.png" alt="...">
                            <div class="caption">
                                <ul class="list-event-info">
                                    <li class="list-event-info-item"><span class="eventTitle"> <?php echo $event["description"] ; ?></span></li>
                                    <li class="list-event-info-item"><span class="iconDate"><i class="fa fa-calendar"></i></span><span class="infoDate"><?php echo date('d/m/Y', strtotime($event["data"] )); ?></span></li>
                                    <li class="list-event-info-item"><span class="iconTime"><i class="fa fa-clock-o"></i></span><span class="infoTime"><?php echo date('H:s', strtotime($event["data"] )); ?></span></li>
                                    <li class="list-event-info-item"><span class="iconLocation"><i class="fa fa-map-marker"></i></span><span class="infoDate"><?php echo $event["place"]["address"]["city"] ; ?> - <?php echo $event["place"]["description"] ; ?></span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </a>
            <?php } ?>
        </div>
    </div>
</section>
<!-- GALERIA DE EVENTOS POR CATEGORIA -->