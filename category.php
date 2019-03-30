<?php
// Template Name: categoriaProd
get_header();
$slug = "$_SERVER[REQUEST_URI]";
$slugs = explode('/', $slug);
$catProd = $slugs[1];
// die(print_r($slugs));
?>

<div class="bg-grey mx-auto" style="background:  
    url('<?= get_template_directory_uri();?>/assets/images/Produtos.jpeg') no-repeat; background-size: 1920px 303px;">
    <div class="container">
        <div class="row justify-content-center pt-5">
            <div class="cta-contato text-center pb-5">
                <h3><?= $catProd?></h3>
                <hr>
                <p>
                    
                </p>
            </div>
        </div>
    </div>
</div>

    <main class="container my-4">
        <div class="row">
        <?php
            $query_archive = new WP_Query(array('category_name' => $catProd));
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
                            <h5 class="card-title text-red2">
                                <?php the_title();?>
                            </h5>
                        </div>
                    </div></a></div>
            <?php
                    endwhile; 
                else :esc_html_e( 'Sorry, no posts matched your criteria.' ); endif; wp_reset_postdata();
            ?>

        </div>
    </main>

<?php 

get_footer();
?>