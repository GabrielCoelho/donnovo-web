<?php
get_header();

$produto = array();
$produto['nome']      =   CFS()->get('nome_produto');
$produto['cod']       =   CFS()->get('codigo_produto');
$produto['desc']      =   CFS()->get('descricao_produto');
$produto['img']       =   CFS()->get('imagem_produto');
$loop_galeria         =   CFS()->get('galeria');
// adicionar_midia para o loop.

$tags = get_the_tags(get_post()->ID);
?>

<!-- main -->
<div class="container my-5" id="item-main">
        <div class="card">
            <div class="container-fliud">
                <div class="wrapper row">
                    <div class="preview col-md-6">
                        <div class="preview-pic tab-content">
                            <div class="tab-pane active" id="pic-1"><img src="<?= $produto['img'];?>" /></div>
                            <?php $j = 2; foreach($loop_galeria as $foto){
                                ?>
                                        <div class="tab-pane" id="pic-<?= $j; ?>"><img src="<?= $foto['adicionar_midia'];?>" /></div>
                                <?php 
                                $j++;   
                            }?>
                            <!-- <div class="tab-pane" id="pic-2"><img src="https://via.placeholder.com/400x252.png/800000/FFFFFF?text=Smoker+Churrasqueira2" /></div>
                            <div class="tab-pane" id="pic-3"><img src="https://via.placeholder.com/400x252.png/800000/FFFFFF?text=Smoker+Churrasqueira3" /></div>
                            <div class="tab-pane" id="pic-4"><img src="https://via.placeholder.com/400x252.png/800000/FFFFFF?text=Smoker+Churrasqueira4" /></div>
                            <div class="tab-pane" id="pic-5"><img src="https://via.placeholder.com/400x252.png/800000/FFFFFF?text=Smoker+Churrasqueira5" /></div> -->
                        </div>
                        <ul class="preview-thumbnail nav nav-tabs">
                            <li class="active"><a data-target="#pic-1" data-toggle="tab"><img src="<?= $produto['img'];?>" /></a></li>
                            <?php $j = 2; foreach($loop_galeria as $foto){
                                ?>
                                        <li><a data-target="#pic-<?= $j; ?>" data-toggle="tab"><img src="<?= $foto['adicionar_midia'];?>" /></a></li>
                                <?php 
                                $j++;   
                            }?>
                            <!-- <li><a data-target="#pic-2" data-toggle="tab"><img src="https://via.placeholder.com/200x126.png/800000/FFFFFF?text=Smoker+Churrasqueira2" /></a></li>
                            <li><a data-target="#pic-3" data-toggle="tab"><img src="https://via.placeholder.com/200x126.png/800000/FFFFFF?text=Smoker+Churrasqueira3" /></a></li>
                            <li><a data-target="#pic-4" data-toggle="tab"><img src="https://via.placeholder.com/200x126.png/800000/FFFFFF?text=Smoker+Churrasqueira4" /></a></li>
                            <li><a data-target="#pic-5" data-toggle="tab"><img src="https://via.placeholder.com/200x126.png/800000/FFFFFF?text=Smoker+Churrasqueira5" /></a></li> -->
                        </ul>

                    </div>
                    <div class="details col-md-6">
                        <h3 class="product-title"><?= $produto['nome']; ?></h3>
                        <div class="rating">
                            <span class="review-no"><?= $produto['cod']?></span>
                        </div>
                        <p class="product-description"><?= $produto['desc']?></p>
                        <!-- <h4 class="price">Valor: <span></span></h4> -->
                        <!-- <p class="vote"><strong>91%</strong> que compraram, aprovaram o produto</p> -->
                        <div class="action">
                            <a href="" class="add-to-cart btn btn-default" type="button">Chamar no Whatsapp</a>
                            <br><span class="text-colored">* Os pedidos são feitos via Whatsapp</span>
                            <!-- <button class="like btn btn-default" type="button"><span class="fa fa-heart"></span></button> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="container">
        <h2 class="text-colored">Quem comprou também viu:</h2>
        <div class="row">
            <?php
            $tag_id = array();
            for($i=0; $i<count($tags);$i++){
                array_push($tag_id, $tags[$i]->term_id);
            }

            // die(print_r($tag_id));
            // Query para pegar os 9 ultimos posts
            $querySimilar = new WP_Query(array('tag__in' => $tag_id));
            if($querySimilar->found_posts > 5){
                $querySimilar->post_count = 5;
            }
            if (  $querySimilar->have_posts() ) : while (  $querySimilar->have_posts() ) :  $querySimilar->the_post(); ?>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-2">
                <a href="<?php the_permalink();?>">
                    <div class="card bg-dark text-white">
                        <img src="<?= the_post_thumbnail_url('large');?>" class="card-img-top" alt="<?php the_title();?>">
                        <div class="card-img-overlay">
                            <h5 class="card-title"><?php the_title();?></h5>
                        </div>
                    </div>
                </a>
            </div>
            <?php
                endwhile; 
                else :esc_html_e( 'Sorry, no posts matched your criteria.' ); endif; wp_reset_postdata();
            ?>
            <!-- <div class="col-xs-12 col-sm-6 col-md-4 col-lg-2">
                <a href="#">
                    <div class="card bg-dark text-white">
                        <img src="https://via.placeholder.com/220" class="card-img-top" alt="ProdutoDONNOVO">
                    </div>
                </a>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-2 d-none d-sm-block">
                <a href="#">
                    <div class="card bg-dark text-white">
                        <img src="https://via.placeholder.com/220" class="card-img-top" alt="ProdutoDONNOVO">
                    </div>
                </a>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-2 d-none d-sm-block">
                <a href="#">
                    <div class="card bg-dark text-white">
                        <img src="https://via.placeholder.com/220" class="card-img-top" alt="ProdutoDONNOVO">
                    </div>
                </a>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-2 d-none d-sm-block">
                <a href="#">
                    <div class="card bg-dark text-white">
                        <img src="https://via.placeholder.com/220" class="card-img-top" alt="ProdutoDONNOVO">
                    </div>
                </a>
            </div> -->
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-2">
                <a href="#">
                    <div class="card bg-dark text-white">
                        <img src="https://via.placeholder.com/220/800000/?text=Veja+nossos+produtos" class="card-img-top" alt="ProdutoDONNOVO">
                    </div>
                </a>
            </div>
        </div>
    </div>
    <!-- /main -->

<?php get_footer();?>