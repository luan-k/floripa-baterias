<?php get_header(); ?>

<!-- products -->
<section class="section-products" >
        <!-- <h2 class="title text-center">PRODUCTS</h2> -->
        <div class="container">
            <div class="row">
                <?php
                    /* $homepagePosts = new WP_Query(array(
                    'posts_per_page' => 6,
                    'orderby' => 'date',
                    'order' => 'ASC',
                    'category_name' => 'eng'
                    )); */

                    while(have_posts()){
                    the_post(); 
                    get_template_part('template-parts/content-post');
                    
                 } 
                get_template_part('template-parts/content-pagination');
                
                wp_reset_postdata(); ?>       
            </div>
        </div>
    </section>

<?php get_footer(); ?>