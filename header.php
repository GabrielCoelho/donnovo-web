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

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <a class="navbar-brand d-xs-block d-lg-none donnovo_nome">DonNovo</a>
        <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div id="my-nav" class="collapse navbar-collapse">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item mr-5 pt-2 <?php if(is_page('Inicio')){?>active<?php }?>">
                    <a class="nav-link" href="/donnovo/">Início <?php if(is_page('Inicio')){?><span class="sr-only">(current)</span> <?php }?></a>
                </li>
                <li class="nav-item mr-5 pt-2 <?php if(is_page('Produtos') || is_single()){?>active<?php }?>">
                    <a class="nav-link"  href="/donnovo/produtos">Produtos <?php if(is_page('Produtos') || is_single()){?><span class="sr-only">(current)</span> <?php }?></a>
                </li>
                <li class="nav-item mr-5 d-none d-lg-block">
                    <a class="nav-link" style="width: 70px;"  href="/donnovo/"><img class="img-fluid logo-header" src="<?= get_template_directory_uri();?>/assets/images/logo.png" alt="Don Novo"></a>
                </li>
                <li class="nav-item mr-5 pt-2 <?php if(is_page('Sobre')){?>active<?php }?>">
                    <a class="nav-link"  href="/donnovo/sobre">Sobre <?php if(is_page('Sobre')){?><span class="sr-only">(current)</span> <?php }?></a>
                </li>
                <li class="nav-item mr-5 pt-2 <?php if(is_page('Contato')){?>active<?php }?>">
                    <a class="nav-link"  href="/donnovo/contato">Contato <?php if(is_page('Contato')){?><span class="sr-only">(current)</span> <?php }?></a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- /Navbar -->