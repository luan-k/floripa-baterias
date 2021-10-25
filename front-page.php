<?php get_header(); ?>

    <!-- slider -->
    <section class="slider-custom" data-anime="slow-slider">
        <?php echo do_shortcode('[ssslider id="185"]') ?>
    </section>

    
        <!-- marcas -->
        <section class="marcas" data-anime="top">
            <div class="row">
                <div class="container">
                    <section class="logo-carousel slider" data-arrows="true">
                        <div class="slide"><img src="<?php echo get_theme_file_uri('/img/logos/acdelco-2.png')?>"></div>
                        <div class="slide"><img src="<?php echo get_theme_file_uri('/img/logos/cral.png')?>"></div>                        
                        <div class="slide"><img src="<?php echo get_theme_file_uri('/img/logos/excell.png')?>"></div>
                        <div class="slide"><img src="<?php echo get_theme_file_uri('/img/logos/freedom.png')?>"></div>
                        <div class="slide"><img src="<?php echo get_theme_file_uri('/img/logos/pioneiro-2.png')?>"></div>
                        <div class="slide"><img src="<?php echo get_theme_file_uri('/img/logos/heliar.png')?>"></div>                        
                        <div class="slide"><img src="<?php echo get_theme_file_uri('/img/logos/maxfor.png')?>"></div>
                        <div class="slide"><img src="<?php echo get_theme_file_uri('/img/logos/maxion.png')?>"></div>
                        <div class="slide"><img src="<?php echo get_theme_file_uri('/img/logos/duracell-2.png')?>"></div>
                        <div class="slide"><img src="<?php echo get_theme_file_uri('/img/logos/moura.png')?>"></div>
                        <div class="slide"><img src="<?php echo get_theme_file_uri('/img/logos/optima.png')?>"></div>                       
                        <div class="slide"><img src="<?php echo get_theme_file_uri('/img/logos/zetta1.png')?>"></div>
                    </section>
                </div>
            </div>
        </section>
        <div class="wraper-bg pt-5 mt-2"  style="background-image:url(<?php echo get_theme_file_uri('/img/bg-cats.png')?>);">
        <!-- categorias -->
        <section class="categorias" >
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-4 categoria" style="background-image:url(<?php echo get_theme_file_uri('/img/cat-1.png')?>);" data-anime="top-left">
                        <a href="<?php echo esc_url(site_url('/categoria/carros/')); ?>" class="cat-link-wraper">
                            <h3 class="title-3 cat-title white">Carros</h3>
                            <img class="img-cat carros" src="<?php echo get_theme_file_uri('/img/cats/saveiro.png')?>" alt=""> 
                        </a>
                    </div>
                    <div class="col-12 col-sm-4 categoria" style="background-image:url(<?php echo get_theme_file_uri('/img/cat-2.png')?>);" data-anime="top">
                        <a href="<?php echo esc_url(site_url('/categoria/veiculos-pesados/')); ?>" class="cat-link-wraper">
                            <h3 class="title-3 cat-title primary">Veículos Pesados</h3>
                            <img class="img-cat veic" src="<?php echo get_theme_file_uri('/img/cats/caminhao.png')?>" alt=""> 
                        </a>
                    </div>
                    <div class="col-12 col-sm-4 categoria" style="background-image:url(<?php echo get_theme_file_uri('/img/cat-1.png')?>);" data-anime="top-right">
                        <a href="<?php echo esc_url(site_url('/categoria/motos/')); ?>" class="cat-link-wraper">
                            <h3 class="title-3 cat-title white">Motos</h3>
                            <img class="img-cat moto" src="<?php echo get_theme_file_uri('/img/cats/moto.png')?>" alt=""> 
                        </a>
                    </div>
                    <div class="col-12 col-sm-4 categoria" style="background-image:url(<?php echo get_theme_file_uri('/img/cat-3.png')?>);" data-anime="bottom-left">
                        <a href="<?php echo esc_url(site_url('/categoria/estacionarias/')); ?>" class="cat-link-wraper">
                            <h3 class="title-3 cat-title white">Estacionárias</h3>
                            <img class="img-cat estacio" src="<?php echo get_theme_file_uri('/img/cats/antena.png')?>" alt=""> 
                        </a>
                    </div>
                    <div class="col-12 col-sm-4 categoria" style="background-image:url(<?php echo get_theme_file_uri('/img/cat-1.png')?>);" data-anime="bottom">
                        <a href="<?php echo esc_url(site_url('/categoria/tracionarias/')); ?>" class="cat-link-wraper">
                            <h3 class="title-3 cat-title white">Tracionárias</h3>
                            <img class="img-cat tracio" src="<?php echo get_theme_file_uri('/img/cats/forklift.png')?>" alt=""> 
                        </a>
                    </div>
                    <div class="col-12 col-sm-4 categoria" style="background-image:url(<?php echo get_theme_file_uri('/img/cat-3.png')?>);" data-anime="bottom-right">
                        <a href="<?php echo esc_url(site_url('/categoria/nauticas/')); ?>" class="cat-link-wraper">
                            <h3 class="title-3 cat-title white">Náuticas</h3>
                            <img class="img-cat nauti" src="<?php echo get_theme_file_uri('/img/cats/barco.png')?>" alt=""> 
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </div>
    

    <!-- products -->
    <section class="section-products" >
        <!-- <h2 class="title text-center">PRODUCTS</h2> -->
        <div class="container">
            <div class="row">
                <?php
                    $homepagePosts = new WP_Query(array(
                    'posts_per_page' => 6,
                    'orderby' => 'date',
                    'order' => 'ASC' ,
                    'category_name' => 'destaque' 
                    ));

                    while($homepagePosts->have_posts()){
                    $homepagePosts->the_post(); 
                     get_template_part('template-parts/content-post'); 
                    
                    } wp_reset_postdata(); ?>
                 <div class="col-12 d-flex justify-content-center py-5" data-anime="back">
                    <a href="<?php echo site_url('/produtos') ?>" class="btn-wk primary-bg white">
                        Ver todos os produtos
                    </a>
                 </div>                   
            </div>
        </div>
    </section>

    <!-- cards -->
    <section class="cards"  style="background-image:url(<?php echo get_theme_file_uri('/img/bg-cards.png')?>);">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-4" data-anime="left">
                    <div class="cardboard-wraper">
                        <img src="<?php echo get_theme_file_uri('/img/card-1.svg')?>" class="cardboard-img" alt="">
                        <div class="cardboard">
                            <h3 class=" title-3 secondary cardboard-title"> <span>Entrega e instalação </span>grátis 24 horas</h3>
                            <div class="cardboard-body gray">
                                Socorro e instalação grátis
                                de baterias para carros, motos
                                e caminhões em toda a grande
                                Florianópolis
                            </div>
                        </div>
                        <a class="cardboard-footer" target="_blank" href="https://wa.me/5548988026115">
                            <h4 class="white title-3">Pedir agora</h4>
                        </a>                             
                    </div>
                </div>
                <div class="col-12 col-sm-4" data-anime="bottom">
                    <div class="cardboard-wraper">
                        <img src="<?php echo get_theme_file_uri('/img/card-2.svg')?>" class="cardboard-img nd-card" alt="">
                        <div class="cardboard nd-card">
                            <h3 class=" title-3 nd-card cardboard-title white">Nossos contatos</h3>
                            <h3 class="primary title-3 nd-card cardboard-title cardboard-subtitle">estamos prontos para atendelo!</h3>
                            <div class="cardboard-body nd-card gray">
                                <div> 
                                    <a class="gray" target="_blank" href="tel:+5504832074060"> 
                                        <i class="fas fa-phone-alt"></i>(48) 3207-4060
                                    </a>
                                </div>
                                <div> 
                                    <a class="gray" target="_blank" href=" https://wa.me/5548988026115">
                                        <i class="fab fa-whatsapp"></i>(48) 98802-6115
                                    </a>
                                </div>
                            </div>
                        </div>
                        <a class="cardboard-footer nd-card" target="_blank" href="tel:+5504832074060">
                            <h4 class="white title-3">ligar agora</h4>
                        </a>                             
                    </div>
                </div>
                <div class="col-12 col-sm-4" data-anime="right">
                    <div class="cardboard-wraper">
                        <img src="<?php echo get_theme_file_uri('/img/card-3.svg')?>" class="cardboard-img rd-card" alt="">
                        <div class="cardboard rd-card">
                            <h3 class=" title-3 rd-card cardboard-title"> onde estamos</h3>
                            <div class="cardboard-body gray rd-card">
                                RD, SC-405, 1038 - Rio Tavares,
                                Florianópolis - SC, 88048-000
                                Venha conhecer nossa loja!
                            </div>
                        </div>
                        <a class="cardboard-footer rd-card" target="_blank" href="https://goo.gl/maps/ceuXh8xyKFyMQZc57">
                            <h4 class="white title-3">abrir gps</h4>
                        </a>                             
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>