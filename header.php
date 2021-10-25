<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <? wp_head(); ?>
</head>
<body <?php body_class(); ?> >
    <div class="wraper" >
        <header >
            <nav class="navbar navbar-expand-md container" >
                <div class="row">
                    <div class="col-12" data-anime="right">
                        <!-- <div class="nav-wraper"> -->
                            <h1 class="logo-site-principal-titulo">
                                <a class="navbar-brand" href="<?php echo esc_url(site_url()); ?>">
                                    <img class="logo" src="<?php echo get_theme_file_uri('/img/logo.svg')?>" alt="">
                                </a>
                            </h1>
                        <!-- </div> -->
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"> <i class="fas fa-bars"></i></span>
                    </button>
                    <div class="col-12" data-anime="left">
                        <!-- <div class="nav-wraper"> -->
                            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                                <div class="navbar-nav ml-auto">
                                    <a class="nav-item nav-link <?php if (is_page('inicio')) echo' current-menu-item' ?>" href="<?php echo esc_url(site_url('/')); ?>"> Início </a>
                                    <a class="nav-item nav-link <?php if (is_page('produtos') OR get_post_type() == 'post') echo' current-menu-item' ?>" href="<?php echo esc_url(site_url('/produtos')); ?>">Produtos</a>
                                    <a class="nav-item nav-link <?php if (is_page('servicos') OR get_post_type() == 'servico') echo' current-menu-item'  ?>" href="<?php echo esc_url(site_url('/servicos')); ?>"> Serviços </a>
                                    <a class="nav-item nav-link <?php if (is_page('sobre')) echo' current-menu-item' ?>" href="<?php echo esc_url(site_url('/sobre')); ?>"> Sobre </a>
                                    <a class="nav-item nav-link <?php if (is_page('contato')) echo' current-menu-item' ?>" href="<?php echo esc_url(site_url('/contato')); ?>">Contato</a>
                                    <!-- <a class="nav-item nav-link">  -->
                                    <!-- <?php get_search_form(); ?> -->
                                    <a href="<?php echo esc_url(site_url('/search')); ?>" class="search-trigger js-search-trigger nav-item nav-link"><i class="fa fa-search" aria-hidden="true"></i></a>
                                    <!-- </a> -->
                                </div>
                            </div>
                        <!-- </div> -->
                    </div>
                </div>
            </nav>
        </header>