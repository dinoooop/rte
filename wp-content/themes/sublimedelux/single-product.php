<?php

get_header(); ?>

<!-- Product Details -->

    <div class="sdt-page">
        <div class="container">
        <?php
        // Start the loop.
        while ( have_posts() ) : the_post();
            $post_id = get_the_ID();
        ?>
            <div class="row details_row">

                <!-- Product Image -->
                <div class="col-lg-6">
                    <div class="details_image">
                        <div class="details_image_large" style="background-image: url('<?php echo sdt_get_post_thumbnail($post_id, 'full'); ?>')"></div>
                        
                    </div>
                </div>

                <!-- Product Content -->
                <div class="col-lg-6">
                    <div class="details_content">
                        <h2 class="details_name"><?php the_title(); ?></h2>

                        <div class="details_text">
                            <?php the_content() ?>
                        </div>

                        
                    </div>
                </div>
            </div>

        <?php endwhile; ?>

            
        </div>
    </div>

    <!-- Products -->

    

<?php

get_footer('page');