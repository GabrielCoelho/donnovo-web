<?php
// Template Name: Inicio
get_header();

$slider = CFS()->get('slider_inicial');
$sobre_img = CFS()->get('imagem_sobre');
$sobre_text = CFS()->get('texto_sobre');
$envio_info1 = CFS()->get('envio_info_1');
$envio_info2 = CFS()->get('envio_info_2');
$acc_info1 = CFS()->get('acessorio_info_1');
$acc_info2 = CFS()->get('acessorio_info_2');
$wpp_info1 = CFS()->get('whatsapp_info_1');
$wpp_info2 =CFS()->get('whatsapp_info_2');
?>

<header>
    <div class="slider-principal">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <?php for($i=0;$i<=count($slider);$i++) {
                    if (isset($slider[$i])){
                    ?>
                    <div class="carousel-item <?php
                        if($i == 0){
                            echo active;
                        }
                    ?>">
                        <a href="<?= $slider[$i]['link_cta'];?>">
                        <img class="d-block w-100" src="<?= $slider[$i]['imagem_slider']?>" alt="DonNovo">
                        </a>
                        <!-- <div class="carousel-caption d-none d-md-block">
                            <h5><?//= $slider[$i]['titulo_slider'];?></h5>
                            <hr>
                            <p><?//= $slider[$i]['texto_slider'];?></p>
                            <a href="<?//= $slider[$i]['link_cta'];?>" class="btn btn-danger btn-lg">Veja o Produto</a>
                        </div> -->
                    </div>
                    <?php
                    }
                } ?>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</header>

<main class="my-3">
    <!-- Info envios -->
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-xs-12">
                <div class="envio-info">
                    <p><img class="envinfos-ic" src="<?= get_template_directory_uri();?>/assets/images/truck.svg"></p>
                    <p class="bold-text"><?= $envio_info1;?></p>
                    <p class="description"><?= $envio_info2;?></p>
                </div>
            </div>
            <div class="col-sm-4 col-xs-12">
                <div class="envio-info">
                    <p><img class="envinfos-ic" src="<?= get_template_directory_uri();?>/assets/images/knife.svg"></p>
                    <p class="bold-text"><?= $acc_info1;?></p>
                    <p class="description"><?= $acc_info2;?></p>
                </div>
            </div>
            <div class="col-sm-4 col-xs-12">
                <div class="envio-info">
                    <p><img class="envinfos-ic" src="<?= get_template_directory_uri();?>/assets/images/whatsapp.svg"></p>
                    <p class="bold-text"><?= $wpp_info1;?></p>
                    <p class="description"><?= $wpp_info2;?></p>
                </div>
            </div>
        </div>
    </div>
    <!-- /Info Envio -->

    <!-- Black Content -->
    <div class="container-fluid bg-black my-3">
        <div class="row">
            <div class="container">
                <div class="row">
                    <?php 
                    // Query para pegar os 9 ultimos posts
                    $queryIndex = new WP_Query(array('category_name' => 'Produto'));
                    if($queryIndex->found_posts > 5){
                        $queryIndex->post_count = 5;
                    }
                    if (  $queryIndex->have_posts() ) : while (  $queryIndex->have_posts() ) :  $queryIndex->the_post(); 
                    ?>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-2">
                        <a href="<?php the_permalink();?>">
                            <div class="card bg-dark text-red">
                                <img src="<?= the_post_thumbnail_url('large');?>" class="card-img-top img-fluid mxhcard" alt="<?php the_title();?>">
                                <div class="card-img-overlay">
                                    <h5 class="card-title">
                                        <?php the_title();?>
                                    </h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <?php
                        endwhile; 
                        else :esc_html_e( 'Sorry, no posts matched your criteria.' ); endif; wp_reset_postdata();
                    ?>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-2">
                        <a href="/donnovo/produtos/">
                            <div class="card bg-dark text-white">
                                <img src="https://via.placeholder.com/1980x1080/E11236/?text=%20" class="card-img-top img-fluid mxhcard" alt="Veja todos os produtos">
                                <div class="card-img-overlay">
                                    <h5 class="card-title">Veja nossos produtos</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Black Content -->

    <!-- Sobre da Index -->
    <div class="inicio-sobre container my-4 mt-4">
        <div class="row">
            <div class="col-lg-12">
                <div class="image-left-sobre">
                    <img src="<?= $sobre_img;?>" class="img-fluid" alt="Sobre DonNovo">
                </div>
                <div class="sobre-right">
                    <h3 class="texto-mocha">Nossa Empresa</h3>
                    <p><?= $sobre_text;?></p>
                </div>
                <div class="button-bottom-sobre">
                    <a href="/sobre" class="btn btn-danger btn-lg">Saiba Mais</a>
                </div>
            </div>
        </div>
    </div>
    <!-- /Sobre da Index -->
</main>


<?php get_footer();?>