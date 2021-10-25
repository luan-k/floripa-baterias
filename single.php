<?php get_header();
while(have_posts()){
 the_post(); 
 ?>

    <div class="container">
        <div class="row product-row">
            <div class="col-12 col-sm-5 image-col">
                <div class="exzoom" id="exzoom">                
                    <!-- Images -->
                    <div class="exzoom_img_box">
                        <ul class='exzoom_img_ul'>
                        <li><img src="<?php the_post_thumbnail_url('full') ?>" alt="" class="professor-card__image"></li>
                        <?php 
                            $images = get_field('imgs');
                            
                            if( $images ):
                            foreach( $images as $image ):
                            ?>
                               
                                <li><img src="<?php echo $image; ?>" alt="" /></li>
                            
                            <?php endforeach; endif; ?>
                        
                        </ul>
                    </div>
                    
                    <div class="exzoom_nav"></div>
                    <!-- Nav Buttons -->
                    <p class="exzoom_btn">
                        <a href="javascript:void(0);" class="exzoom_prev_btn"> <i class="fas fa-chevron-left"></i> </a>
                        <a href="javascript:void(0);" class="exzoom_next_btn"> <i class="fas fa-chevron-right"></i> </a>
                    </p>
                </div>
            </div>
            <div class="col-12 col-sm-7">
                <div class="title-wraper" data-anime="right">
                    <div class="title-wraper-sm">
                        <h1 class="title primary title-product"><?php the_title()?></h1>
                    </div>
                </div>
                <hr>
                <div class="single-price-wraper" >
                    <h4 class="title-3 gray" data-anime="right">por apenas:</h4>
                    <h3 class="title-2 primary" data-anime="bottom">
                        <?php 
                            $preco = get_field('preco');
                            
                            if( $preco ){?>
                                R$ <?php echo $preco;
                             }else {
                                echo 'consulte';
                            }
                            
                        ?>
                        
                    </h3>
                </div>
                <hr>
                <div class="categories-list-on-single">
                    <?php echo get_the_category_list(', '); ?>
                </div>
                <hr>
                <div class="product-content product-content-excerpt mt-5" data-anime="bottom">
                    <?php if (has_excerpt()) {
                        echo get_the_excerpt();
                    }else {
                        echo wp_trim_words(get_the_content(), 10);
                    } ?>
                </div> 
                <div class="formas-pagamento mt-5">
                    <h4 class="title-3 gray  mt-3" data-anime="left">Formas de pagamento:</h4>
                    <div>
                        <img src="<?php echo get_theme_file_uri('/img/pagamento/american.svg')?>" data-anime="left" title="American Express" alt="" srcset="">
                        <img src="<?php echo get_theme_file_uri('/img/pagamento/diners.svg')?>" data-anime="bottom-left" title="Diners Club" alt="" srcset="">
                        <img src="<?php echo get_theme_file_uri('/img/pagamento/elo.svg')?>" data-anime="bottom" title="Elo" alt="" srcset="">
                        <img src="<?php echo get_theme_file_uri('/img/pagamento/hiper.svg')?>" data-anime="bottom" title="Hiper Card" alt="" srcset="">
                        <img src="<?php echo get_theme_file_uri('/img/pagamento/master.svg')?>" data-anime="bottom-right" title="Master Card" alt="" srcset="">
                        <img src="<?php echo get_theme_file_uri('/img/pagamento/visa.svg')?>" data-anime="right" title="Visa" alt="" srcset="">
                    </div>
                </div>
                <hr>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="title-wraper">
                    <h3 class="title-2 primary" data-anime="left">
                        Descrição do produto
                    </h3>
                </div>
                <hr>
                
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="product-content" data-anime="bottom">
                    <?php the_content() ?>
                </div> 
            </div>
        </div>
        <?php
        get_template_part('template-parts/content-related-posts'); ?>
    </div>
    
    

<?php } get_footer(); ?>