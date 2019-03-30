<?php
// Template Name: LojaFisica
get_header();
$texto = CFS()->get('texto_intro');
$texto_loja = CFS()->get('texto_loja');
$imagem = CFS()->get('imagem_sobre');
$envio_info1 = CFS()->get('envio_info_1');
$envio_info2 = CFS()->get('envio_info_2');
$acc_info1 = CFS()->get('acessorio_info_1');
$acc_info2 = CFS()->get('acessorio_info_2');
$wpp_info1 = CFS()->get('whatsapp_info_1');
$wpp_info2 =CFS()->get('whatsapp_info_2');
?>

<div class="bg-grey mx-auto" style="background: 
    url('<?= get_template_directory_uri();?>/assets/images/Loja.jpeg') no-repeat; background-size: 1920px 303px;">>
        <div class="container">
            <div class="row justify-content-center pt-5">
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

    <main class="">
        <div class="container my-5">
            <div class="row">
                <div class="col-sm-7 col-xs-12 fonte-simples">
                    <img class="img-fluid" src="<?= $imagem?>" alt="DonNovo">
                </div>
                <div class="col-xs-12 col-sm-4 offset-sm-1">
                    <h5 class="text-colored">Conheça nossa loja física</h5>
                    <hr class="streight-line">
                    <p class="fonte-simples"><?= $texto_loja?></p>
                        
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-xs-12">
                    <div class="envio-info">
                        <p><img class="envinfos-ic" src="<?= get_template_directory_uri();?>/assets/images/scooter.svg"></p>
                        <p class="bold-text"><?= $envio_info1;?></p>
                        <p class="description"><?= $envio_info2;?></p>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-12">
                    <div class="envio-info">
                        <p><img class="envinfos-ic" src="<?= get_template_directory_uri();?>/assets/images/cheers.svg"></p>
                        <p class="bold-text"><?= $acc_info1;?></p>
                        <p class="description"><?= $acc_info2;?></p>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-12">
                    <div class="envio-info">
                        <p><img class="envinfos-ic" src="<?= get_template_directory_uri();?>/assets/images/tray.svg"></p>
                        <p class="bold-text"><?= $wpp_info1;?></p>
                        <p class="description"><?= $wpp_info2;?></p>
                    </div>
                </div>
            </div>
        </div>

        
        <div class="row mt-4 imgrowloja">
            <img class="img-fluid" src="<?= get_template_directory_uri();?>/assets/images/rodape_1.png" alt="Loja Donnovo">
            <img class="img-fluid" src="<?= get_template_directory_uri();?>/assets/images/rodape_2.png" alt="Loja Donnovo">
            <img class="img-fluid" src="<?= get_template_directory_uri();?>/assets/images/rodape_3.png" alt="Loja Donnovo">
            <img class="img-fluid" src="<?= get_template_directory_uri();?>/assets/images/rodape_4.png" alt="Loja Donnovo">
            <img class="img-fluid" src="<?= get_template_directory_uri();?>/assets/images/rodape_5.png" alt="Loja Donnovo">
        </div>
    </main>


<?php get_footer();?>