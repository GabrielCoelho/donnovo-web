<?php
// Template Name: Inicio
get_header();

$slider = CFS()->get('slider_inicial');
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
            <div class="col-lg-3 col-md-4 col-4">
                <div class="envio-info">
                    <p><img class="envinfos-ic" src="<?= get_template_directory_uri();?>/assets/images/truck.svg"></p>
                    <p class="bold-text">Envios Rápidos Regionais</p>
                    <p class="description">no raio de 80Km de Mogi Guaçu</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-4 col-4">
                <div class="envio-info">
                    <p><img class="envinfos-ic" src="<?= get_template_directory_uri();?>/assets/images/knife.svg"></p>
                    <p class="bold-text">Lorem Ipsum</p>
                    <p class="description">dolor sit amet.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-4">
                <div class="envio-info">
                    <p><img class="envinfos-ic" src="<?= get_template_directory_uri();?>/assets/images/whatsapp.svg"></p>
                    <p class="bold-text">Compre pelo Whatsapp</p>
                    <p class="description">Passamos todas as informações</p>
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
                            <div class="card bg-dark text-white">
                                <img src="<?= the_post_thumbnail_url('large');?>" class="card-img-top" alt="<?php the_title();?>">
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
                                <img src="https://via.placeholder.com/1980x1080/E11236/" class="card-img-top" alt="Veja todos os produtos">
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
                    <img src="https://via.placeholder.com/300/" alt="Sobre DonNovo">
                </div>
                <div class="sobre-right">
                    <h4>Don Novo</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus, commodi fuga amet dolorum
                        sequi eos quae facilis! Quo, obcaecati sequi! Atque accusantium repellendus expedita libero
                        fuga ut perspiciatis sed est?
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus, commodi fuga amet dolorum
                        sequi eos quae facilis! Quo, obcaecati sequi! Atque accusantium repellendus expedita libero
                        fuga ut perspiciatis sed est?
                    </p>
                </div>
                <div class="button-bottom-sobre">
                    <a href="/donnovo/sobre" class="btn btn-danger btn-lg">Saiba Mais</a>
                </div>
            </div>
        </div>
    </div>
    <!-- /Sobre da Index -->
</main>


<?php get_footer();?>