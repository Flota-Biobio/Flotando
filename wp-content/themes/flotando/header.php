<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

    <!-- FONTS -->
    <?php rimy_header_tag('css', 'https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900') ?>
    <?php rimy_header_tag('css', 'https://fonts.googleapis.com/css?family=Roboto+Condensed:400,300,700') ?>

    <!-- JAVASCRIPT -->
    <?php rimy_header_tag('js', 'https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js') ?>
    <?php rimy_header_tag('js', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js') ?>
    <?php rimy_header_tag('js', 'http://cdn.jsdelivr.net/jquery.scrollto/2.1.2/jquery.scrollTo.min.js') ?>

    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

    <!-- CSS -->
    <?php rimy_header_tag('css', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css') ?>
    <?php rimy_header_tag('css', get_bloginfo('stylesheet_url')) ?>
    <?php rimy_header_tag('css', ASSETS_CSS_URL . 'header.css') ?>
    <?php rimy_header_tag('css', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css') ?>

    <!--[if lt IE 9]>
    <script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
    <![endif]-->

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header class="site-header">
    <div class="header background-main">
        <div class="container">
            <div class="content">
                <nav class="navbar navbar-default background-main font-300">

                    <div class="container-fluid">
                        <div class="navbar-header logo">
                            <a class="navbar-brand logo" href="<?=get_option('home')?>">
                                <!-- ToDo revertir dummy -->
                                <img src="<?= ASSETS_IMG_URL ?>flotando.png" alt="Flota Biobio" />
                            </a>
                        </div>

                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav navbar-right">
                                <li class="dropdown disabled">
                                    <a  href="#" class="dropdown-toggle nav-link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        Catálogo <span class="caret"></span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Últimos productos</a></li>
                                        <li><a href="#">Productos destacados</a></li>
                                        <li role="separator" class="divider"></li>
                                        <li><a href="#">Favoritos</a></li>
                                        <li><a href="#">Carro de compras</a></li>
                                    </ul>
                                </li>
                                <li class="link disabled"><a class="nav-link" href="#">Sorteos</a></li>

                                <li class="dropdown">
                                    <a  href="#" class="dropdown-toggle nav-link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        Nosotros <span class="caret"></span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Proyecto</a></li>
                                        <li><a href="http://127.0.0.1/flotando/nuestro-equipo/">Equipo</a></li>
                                        <li><a href="#">Legal</a></li>
                                    </ul>
                                </li>
                                <li class="link"><a class="nav-link" href="http://127.0.0.1/flotando/contactenos/">Contacto</a></li>
                            </ul>

                        </div>

                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
<?php
the_breadcrumb();
?>