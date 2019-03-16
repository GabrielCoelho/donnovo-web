<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Don Novo</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- MocchaMatari Font -->
    <link href="//db.onlinewebfonts.com/c/3710eb8fca91ad0613cc0516af488328?family=MochaMattariW01-Regular" rel="stylesheet" type="text/css"/>
    <!-- OpenSans Font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet"> 
    <!-- bootstrap -->
    <link rel="stylesheet" href="<?= get_template_directory_uri();?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= get_template_directory_uri();?>/assets/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="<?= get_template_directory_uri();?>/assets/css/bootstrap-reboot.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/"
        crossorigin="anonymous">
    <!-- Animate -->
    <link rel="stylesheet" href="<?= get_template_directory_uri();?>/assets/css/animate.css">
    <!-- OwlCarousel -->
    <link rel="stylesheet" href="<?= get_template_directory_uri();?>/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= get_template_directory_uri();?>/assets/css/owl.theme.default.min.css">
    <!-- DonNovo App Style -->
    <link rel="stylesheet" href="<?= get_template_directory_uri();?>/assets/css/app.css">
    <link rel="stylesheet" href="<?= get_template_directory_uri();?>/assets/css/responsive.css">
    <!-- Wordpress Stylesheet -->
    <link rel="stylesheet" href="<?= get_stylesheet_directory_uri(  )?>">
    <?php wp_head();?>
</head>

<body>
    <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <div class="navbar navbar-expand-lg d-lg-block d-none navbar-light bg-light">
        <div class="container">
            <div class="row justify-content-end w-100">
                <div class="searchbox col-lg-5 offset-lg-2 pt-2">
                    <form method="POST" action="/pesquisa">
                        <div class="form-group">
                            <div class="input-group flex-nowrap input-group-sm">
                                <input id="searchbox" name="searchbox1" class="form-control" type="text">
                                <div class="input-group-append">
                                    <button type="submit" class="input-group-text"><i class="fas fa-search"></i></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="whatsapp-top col-lg-3 pt-2">
                    <a href="https://wa.me/19997740570/">
                    <img class="icone-footer icone-wpp-top" src="<?= get_template_directory_uri();?>/assets/images/whatsapp.svg" alt="">
                    (19)99774-0570</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <div class="logo-box sticky-top">
            <a href="/"><img class="img-fluid" src="<?= get_template_directory_uri()?>/assets/images/logo.png"  alt="Don Novo"> </a>
        </div>
        <a href="/" class="navbar-brand d-xs-block d-lg-none donnovo_nome">DonNovo</a>
        <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div id="my-nav" class="collapse navbar-collapse">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item mr-5 pt-2 <?php if(is_page('Inicio')){?>active<?php }?>">
                    <a class="nav-link" href="/">Início <?php if(is_page('Inicio')){?><span class="sr-only">(current)</span> <?php }?></a>
                </li>
                <li class="nav-item mr-5 pt-2 <?php if(is_page('Produtos') || is_single()){?>active<?php }?>">
                    <a class="nav-link"  href="/produtos">Produtos <?php if(is_page('Produtos') || is_single()){?><span class="sr-only">(current)</span> <?php }?></a>
                </li>
                <!-- <li class="nav-item mr-5 d-none d-lg-block">
                    <a class="nav-link" style="width: 70px;"  href="/"><img class="img-fluid logo-header" src="<?= get_template_directory_uri();?>/assets/images/logo.png" alt="Don Novo"></a>
                </li> -->
                <li class="nav-item mr-5 pt-2 <?php if(is_page('Sobre')){?>active<?php }?>">
                    <a class="nav-link"  href="/sobre">Sobre <?php if(is_page('Sobre')){?><span class="sr-only">(current)</span> <?php }?></a>
                </li>
                <li class="nav-item mr-5 pt-2 <?php if(is_page('Contato')){?>active<?php }?>">
                    <a class="nav-link"  href="/contato">Contato <?php if(is_page('Contato')){?><span class="sr-only">(current)</span> <?php }?></a>
                </li>
                <div class="nav-item mr-5 pt-2 d-xs-block d-sm-block d-md-block d-lg-none d-xl-none">
                    <form method="POST" action="/pesquisa">
                        <div class="form-group">
                            <div class="input-group flex-nowrap input-group-sm">
                                <input id="searchbox" name="searchbox2" class="form-control" type="text">
                                <div class="input-group-append">
                                    <button type="submit" class="input-group-text"><i class="fas fa-search"></i></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="nav-item mr-5 pt-2 d-xs-block d-sm-block d-md-block d-lg-none d-xl-none">
                    <div class="whatsapp-top col-lg-3 text-white py-1">
                        <a href="https://wa.me/19997740570/">
                        <img class="icone-footer" src="<?= get_template_directory_uri();?>/assets/images/whatsapp.svg" alt="">
                        (19)99774-0570
                        </a>
                    </div>
                </div>
            </ul>
        </div>
    </nav>
    <!-- /Navbar -->