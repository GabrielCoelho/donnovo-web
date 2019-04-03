<?php
// Template Name: Vitrine
get_header();
$textinho = CFS()->get('texto_intro');
?>

<div class="bg-grey mx-auto" style="background:  
    url('<?= get_template_directory_uri();?>/assets/images/Produtos.jpeg') no-repeat; background-size: 1920px 303px;">
    <div class="container">
        <div class="row justify-content-center pt-5">
            <div class="cta-contato text-center pb-5">
                <h3>Nossos Produtos</h3>
                <hr>
                <p>
                    <?= $textinho;?>
                </p>
            </div>
        </div>
    </div>
</div>

    <main class="container my-4">
        <!-- <div class="row text-center justify-content-center my-5">
            <button class="btn btn-default filter-button mr-2" data-filter="all">Todos</button> -->
            <?php 
                // $tags_array = get_tags(array('fields' => 'names'));
                // // die(print_r($tags_array));
                // foreach ($tags_array as $key) {
                    ?>
                        <!-- <button class="btn btn-default filter-button mr-2" data-filter="<?= $key;?>"><?= $key?></button> -->
                    <?php
                // }
            ?>
            <!-- <button class="btn btn-default filter-button mr-2" data-filter="hdpe">Categoria1</button>
            <button class="btn btn-default filter-button mr-2" data-filter="sprinkle">Categoria2</button>
            <button class="btn btn-default filter-button mr-2" data-filter="spray">Categoria3</button>
            <button class="btn btn-default filter-button mr-2" data-filter="test">Categoria 4</button> -->
        </div>
        <div class="row">
            <?php
                $query_archive = new WP_Query(array('category_name' => 'Produto'));
                // if($query_archive->found_posts > 9){
                //     $query_archive->post_count = 9;
                // }
                // die(print_r($query_archive->posts));
                //die(print_r($query_archive->post_count));
                if (  $query_archive->have_posts() ) : while (  $query_archive->have_posts() ) :  $query_archive->the_post(); 
                    // print_r($query_archive->post))
                    $query_tags = get_the_tags($query_archive->post->ID);
                    // die(print_r($query_tags));
            ?>
                    <div class="py-3 col-lg-4 col-md-4 col-sm-4 col-xs-6 filter<?php foreach ($query_tags as $key) {
                            echo " " . $key->name;
                        }?>">
                    <a href="<?php the_permalink();?>">
                        <div class="card bg-dark"> 
                        <img src="<?= the_post_thumbnail_url('large');?>" class="card-img-top img-fluid cardvitrinetop" alt="<?php the_title();?>">
                        <div class="card-img-overlay vitrine-card">
                            <h5 class="card-title align-middle text-red2">
                                <?php the_title();?>
                            </h5>
                        </div>
                    </div></a></div>
            <?php
                    endwhile; 
                else :esc_html_e( 'Sorry, no posts matched your criteria.' ); endif; wp_reset_postdata();
            ?>
            <!-- <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter sprinkle">
                <img src="https://via.placeholder.com/365/?text=Produto2" class="img-fluid">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
                <img src="https://via.placeholder.com/365/?text=Produto3" class="img-fluid">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter irrigation">
                <img src="https://via.placeholder.com/365/?text=Produto4" class="img-fluid">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter spray">
                <img src="https://via.placeholder.com/365/?text=Produto5" class="img-fluid">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter irrigation">
                <img src="https://via.placeholder.com/365/?text=Produto6" class="img-fluid">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter spray">
                <img src="https://via.placeholder.com/365/?text=Produto7" class="img-fluid">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter irrigation">
                <img src="https://via.placeholder.com/365/?text=Produto8" class="img-fluid">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter irrigation">
                <img src="https://via.placeholder.com/365/?text=Produto9" class="img-fluid">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
                <img src="https://via.placeholder.com/365/?text=Produto10" class="img-fluid">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter spray">
                <img src="https://via.placeholder.com/365/?text=Produto11" class="img-fluid">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter sprinkle">
                <img src="https://via.placeholder.com/365/?text=Produto12" class="img-fluid">
            </div> -->
        </div>
        <!-- <div class="row justify-content-center">
            <div class="col-5 offset-3">
                <a href="" role="button" class="btn btn-danger btn-lg">Carregar Mais</a>
            </div>
        </div> -->
    </main>


<?php get_footer();?>