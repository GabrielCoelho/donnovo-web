<?php
// Template Name: Pesquisa
get_header();
if(!isset($_POST)){
    global $wp_query;
            $wp_query->set_404();
            status_header( 404 );
            get_template_part( 404 ); exit();
}
if(isset($_POST['searchbox1']))
{
    $termos = $_POST['searchbox1'];
}
else if(isset($_POST['searchbox2']))
{
    $termos = $_POST['searchbox2'];
}

$search = new WP_Query( array( 's' => $termos ) );
?>

<?php if ( $search->have_posts() ) : ?>

<div class="bg-grey mx-auto">
        <div class="container">
            <div class="row pt-5 justify-content-center">
                <div class="cta-contato text-center pb-5">
                    <h3>Pesquisa</h3>
                    <hr>
                    <p class="fonte-simples">
                        Exibindo Resultados para: <strong><?= $termos;?></strong>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<main class="my-5">
    <div class="container">
        <div class="row">
            <?php while ( $search->have_posts() ) : $search->the_post(); ?>
                <a href="<?php the_permalink();?>"><div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 border">
                    <?php the_title();?>
                    <br>
                    <img class="img-fluid py-3" src="<?= the_post_thumbnail_url('large');?>">
                </div></a>
            <?php endwhile; ?>
        </div>
    </div>
</main>
                

                    <?php get_template_part( 'content', 'search' ); ?>

                

            <?php else : ?>

                <?php get_template_part( 'no-results', 'search' ); ?>

            <?php endif; ?>


<?php get_footer();?>