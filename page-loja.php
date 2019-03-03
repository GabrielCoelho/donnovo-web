<?php
// Template Name: LojaFisica
get_header();
?>

<div class="bg-grey mx-auto">
        <div class="container">
            <div class="row pt-5">
                <div class="cta-contato text-center pb-5">
                    <h3>Loja Física</h3>
                    <hr>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem incidunt omnis id molestias adipisci accusantium 
                        explicabo dolore aliquid architecto nihil. Sequi temporibus enim possimus officiis. Accusantium soluta 
                        reiciendis illo libero!
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
                        <div class="col-xs-12">
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