<!-- PRIMEIRO CARROUSEL -->
<section>
    <div id="myCarousel" class="carousel slide" data-ride="carousel" style="margin-top:5em">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
        <div class="item active">
            <img src="https://www.bilhetecerto.com.br/banners/gusttavolima.jpeg" style="width:100%;"/>
        </div>
        <div class="item">
            <img src="https://www.bilhetecerto.com.br/banners/vila%20mix.jpg " style="width:100%;"/>
        </div>
        <div class="item">
            <img src="https://www.bilhetecerto.com.br/banners/BILHETECERTOWSARARIPINA.png" style="width:100%;"/>
        </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section>
<!-- PRIMEIRO CARROUSEL -->

<!-- GALERIA DE CATEGORIAS -->
<section class="categoriesCards">
    <div class="container">
        <div class="row">
            <div class="section-title">
                <h4> Categorias </h4>     
            </div>
        </div>
        <div class="row">
            <?php foreach ($categories as $key => $category) { ?>
                <div class="col-lg-4 col-md-3 col-sm-6 col-xs-12">
                    <a href="<?php echo site_url("categories") . "/index/" . $category["id"];?>">
                        <article class="category-card" style="background-image: url(<?php echo $category["url"];?>);"> 
                            <!-- <span class="icon-category-card fa fa-calendar"></span>  -->
                            <h3 class="sub-category-card" style="margin-top:4em"><?php echo $category["description"];?></h3> 
                        </article>
                    </a>
                </div>
            <?php } ?> 
        </div>
    </div>
</section>

<!-- GALERIA DE CATEGORIAS -->