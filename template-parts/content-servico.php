<div class="col-12 col-sm-4 col-md-3 post-card">
                            <a class="post-card d-flex align-content-between flex-wrap justify-content-center" href="<?php the_permalink(); ?>">
                                <div class="wraper-card d-flex align-content-between flex-wrap justify-content-center">
                                    
                                    <div class="image-title-wrapper">
                                        <img class="servicos-imagem" src="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'medium' ); ?>" alt="">
                                        <h2 class="servicos-titulo"> <?php the_title() ?> </h2>
                                    </div>
                                    <p class="servicos-texto"> <?php 
                                        if (has_excerpt()) {
                                            echo wp_trim_words( get_the_excerpt(), 30);
                                        }else {
                                            echo wp_trim_words(get_the_content(), 30);
                                        }  ?> </p>
                                                    
                                </div>
                            </a>
                           
                        </div>
