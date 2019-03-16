<?php
// Template Name: Sobre
get_header();
$imagem = CFS()->get('imagem_sobre');
$imagem2 = CFS()->get('imagem_sobre2');
$texto = CFS()->get('texto_sobre');
$missao = CFS()->get('missao');
$valores = CFS()->get('valores');
$visao = CFS()->get('visao');
$textinho = CFS()->get('texto_intro');
?>

<div class="bg-grey mx-auto" style="background: 
    url('<?= get_template_directory_uri();?>/assets/images/Sobre.jpeg') no-repeat; background-size: 1920px 303px;">>
        <div class="container">
            <div class="row pt-5">
                <div class="cta-contato text-center pb-5">
                    <h3>Nossa História</h3>
                    <hr>
                    <p>
                        <?= $textinho;?>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <main class="my-5">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-7">
                    <img class="img-fluid" src="<?= $imagem?>" alt="DonNovo">
                    <img class="img-fluid" src="<?= $imagem2?>" alt="DonNovo">
                </div>
                <div class="col-xs-12 col-sm-4 offset-sm-1">
                    <h5 class="text-colored">A História do Don Novo</h5>
                    <hr class="streight-line">
                    <p class="fonte-simples"><?= $texto?></p>
                    
                </div>
            </div>
        </div>

        <div class="container-fluid bg-black my-5">
            <div class="container">
                <div class="row text-white">
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <h3 class="text-colored text-center">Nossa Missão</h3>
                        <hr class="missioval">
                        <p class="text-justify"><?= $missao?></p>
                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <h3 class="text-colored text-center">Nossa Visão</h3>
                        <hr class="missioval">
                        <p class="text-justify"><?= $visao?></p>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-4">
                        <h3 class="text-colored text-center">Nossos Valores</h3>
                        <hr class="missioval">
                        <p class="text-justify"><?= $valores?></p>
                    </div>
                </div>
                <!-- <div class="row text-white">
                    <div class="col-xs-12 col-sm-12 col-md-4 offset-md-4">
                        <h3 class="text-colored text-center">Conheça nossa Loja Física</h3>
                        <hr class="missioval">
                        <p class="text-justify">Temos uma loja física com os melhores chopps e artigos de churrasco! <a href="/donnovo/loja/" class="btn btn-sm btn-danger">Conheça Já!</a></p>   
                    </div>
                </div> -->
            </div>
        </div>
        <div class="container my-5">
            <div class="row my-5">
                <div class="col-6 offset-3">
                    <div class="mx-auto text-center">
                        <h2 class="text-colored">Converse conosco!</h2>
                        <a href="/contato" class="btn btn-danger btn-lg">Entre em contato!</a>
                    </div>
                </div>
            </div>
        </div>
    </main>

<?php get_footer();?>