            <!-- Footer #008689-->
            <div class="footer-search-wraper py-5">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-6 mb-5 mb-sm-0">
                            <h2 class="title-2 title-footer-form white d-inline text-center text-sm-left">O que você está procurando?</h2>
                            
                        </div>
                        <div class="col-12 col-sm-6">
                            <form method="get" action="<?php echo esc_url(site_url('/')); ?>" class="footer-search d-inline">
                                <input class="footer-search-text" type="search" placeholder="Pesquisar" value="<?php echo get_search_query(); ?>" name="s" title="Pesquisar">
                                <button type="submit" class = "footer-search-btn">
                                    <i class="fas fa-search"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            
            <footer class="page-footer primary-bg white">
                
                <!-- Footer Links -->
                <div class="container text-center text-md-left">

                    <div class="row">

                        <div class="col-12 col-sm-4">
                            <h4 class="title-3 title-invert">
                                central de atendimento
                            </h4>
                            <p class="footer-text">
                                <i class="fas fa-phone-alt"></i> (48) 3207-4060
                            </p>
                            <p class="footer-text">
                                <i class="fab fa-whatsapp"></i> (48) 98802-6115
                            </p>
                            <a class="footer-text" href="<?php echo esc_url(site_url('/contato')); ?>">
                                <i class="far fa-envelope"></i> Enviar uma mensagem
                            </a>
                            <hr class="white">
                            <h4 class="title-3 title-intert mt-5">
                                Onde Estamos:
                            </h4>
                            <p class="footer-text">
                                <i class="fas fa-map-marker-alt"></i> RD, SC-405, 1038 - Rio Tavares, Florianópolis - SC, 88048-000
                            </p>
                        </div>
                       
                        <div class="col-12 col-sm-4">
                            <h4 class="title-3 title-invert">
                                a empresa
                            </h4>
                            <div class="footer-text">
                                <a class="footer-text" href="<?php echo esc_url(site_url('/inicio')); ?>"> Início </a>
                            </div>
                            <div class="footer-text">
                                <a class="footer-text" href="<?php echo esc_url(site_url('/produtos')); ?>">Produtos</a>
                            </div>
                            <div class="footer-text">
                                <a class="footer-text" href="<?php echo esc_url(site_url('/servicos')); ?>"> Serviços </a>
                            </div>
                            <div class="footer-text">
                                <a class="footer-text" href="<?php echo esc_url(site_url('/sobre')); ?>"> Sobre </a>
                            </div>
                            <div class="footer-text">
                                <a class="footer-text" href="<?php echo esc_url(site_url('/contato')); ?>">Contato</a>
                            </div>  
                            <hr class="white">
                            <div class="formas-pagamento mt-3">
                                <h4 class="title-3 white mb-5" data-anime="left">Formas de pagamento:</h4>
                                <div>
                                    <img src="<?php echo get_theme_file_uri('/img/pagamento/american.svg')?>" data-anime="left" title="American Express" alt="" srcset="">
                                    <img src="<?php echo get_theme_file_uri('/img/pagamento/diners.svg')?>" data-anime="bottom-left" title="Diners Club" alt="" srcset="">
                                    <img src="<?php echo get_theme_file_uri('/img/pagamento/elo.svg')?>" data-anime="bottom" title="Elo" alt="" srcset="">
                                    <img src="<?php echo get_theme_file_uri('/img/pagamento/hiper.svg')?>" data-anime="bottom" title="Hiper Card" alt="" srcset="">
                                    <img src="<?php echo get_theme_file_uri('/img/pagamento/master.svg')?>" data-anime="bottom-right" title="Master Card" alt="" srcset="">
                                    <img src="<?php echo get_theme_file_uri('/img/pagamento/visa.svg')?>" data-anime="right" title="Visa" alt="" srcset="">
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-4">
                            <h4 class="title-3 title-invert">
                                Produtos
                            </h4>
                            <?php
                                $footerPosts = new WP_Query(array(
                                'posts_per_page' => 5,
                                'orderby' => 'date',
                                'order' => 'ASC',
                                'category_name' => 'destaque'
                                ));

                                while($footerPosts->have_posts()){
                                $footerPosts->the_post(); ?>
                                <div class="mt-3">
                                    <a href="<?php the_permalink(); ?>" class="footer-text">
                                        <?php the_title() ?>
                                    </a>
                                </div>
                                
                            <?php } wp_reset_postdata(); ?>
                            <hr class="white">
                            <h4 class="title-3 title-invert mt-5">
                                Serviços
                            </h4>
                            <?php
                                $footerServices = new WP_Query(array(
                                'posts_per_page' => 5,
                                'post_type' => 'servico',
                                'orderby' => 'date',
                                'order' => 'ASC'
                                ));

                                while($footerServices->have_posts()){
                                $footerServices->the_post(); ?>
                                <div class="mt-3">
                                    <a href="<?php the_permalink(); ?>" class="footer-text">
                                        <?php the_title() ?>
                                    </a>
                                </div>
                                
                            <?php } wp_reset_postdata(); ?>
                        </div>

                    </div>
                       

                <!-- Copyright -->
                <!-- <div class="footer-copyright text-center py-3">© 2020 Copyright:
                    <a href="https://mdbootstrap.com/"> MDBootstrap.com</a>
                </div> -->
                <!-- Copyright -->
                <div class="sticky-socials"  data-anime="right">
                    <a href="" class="social-link" data-anime="top"><i class="fab fa-twitter"></i></a>
                    <a href="" class="social-link" data-anime="top-left"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://www.instagram.com/bateriasfloripa10/" class="social-link" data-anime="bottom-left"><i class="fab fa-instagram"></i></a>
                    <a href="" class="social-link" data-anime="bottom"><i class="fab fa-youtube"></i></a>
                </div>
            
            </footer>
            <!-- Footer -->
            
            <?php wp_footer() ?>

        </div>
    </body>
</html>