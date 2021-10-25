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