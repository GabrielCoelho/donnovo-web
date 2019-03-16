<?php
// Template Name: LojaFisica
get_header();
$texto = CFS()->get('texto_intro');
?>

<div class="bg-grey mx-auto" style="background: 
    url('<?= get_template_directory_uri();?>/assets/images/Loja.jpeg') no-repeat; background-size: 1920px 303px;">>
        <div class="container">
            <div class="row pt-5">
                <div class="cta-contato text-center pb-5">
                    <h3>Loja Física</h3>
                    <hr>
                    <p>
                        <?= $texto;?>
                    </p>
                </div>
            </div>
        </div>
    </div>

<?php 
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); 
         ?>
            <main class="my-5">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 fonte-simples">
                            <?php the_content();?>
                        </div>
                    </div>
                </div>
            </main>

            
         <?php
	} // end while
} // end if
?>

<?php get_footer();?>