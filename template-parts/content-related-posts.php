
<?php
        $catArgs = array(
        'category__in'   => wp_get_post_categories($post->ID),
        'showposts'   => 3,//display number of posts
        'orderby'   =>'rand',//display random posts
        'post__not_in'   => array($post->ID)
        ); 
        $cat_post_query = new WP_Query($catArgs); 
        if( $cat_post_query->have_posts() ) { ?>
    <div class="container">
        <div class="row related-posts">
            <div class="col-12 mb-5">
                <h3 class="title-2 primary text-center">Produtos relacionados</h3>
            </div>
        
            <?php
            while ($cat_post_query->have_posts()) : $cat_post_query->the_post(); ?>
                    <div class="col-12 col-sm-4">
                        <div class="card primary-bg" data-anime="bottom">
                            <a href="<?php the_permalink(); ?>" class="hyperlink-wraper">
                                <div class="img-wraper">
                                    <img class="card-img-top" src="<?php the_post_thumbnail_url('ProductImageList') ?>" alt="Card image cap">
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title title-3 white"><?php echo wp_trim_words( get_the_title(), 5);  ?></h4>
                                    <p class="card-text">
                                        <div class="single-price-wraper" >
                                            <h4 class="title-3 white" data-anime="right">por apenas:</h4>
                                            <h3 class="title-2 tertiary" data-anime="bottom">
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
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                <?php endwhile; ?>
        
            </div>
        </div>
<?php wp_reset_query(); } ?>