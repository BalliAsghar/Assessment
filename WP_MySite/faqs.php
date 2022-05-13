<?php /* Template Name: faqs */ ?>

<?php get_header(); ?>


<div class="text-white bg-img-about">
    <h1 class="display-1 code-h1" style="font-family: Poppins, sans-serif">
        FAQs
    </h1>
</div>

<div class="container">
    <div class="d-flex justify-content-center">
        <div>
            <h1 class="display-4" style="font-family: Poppins, sans-serif">
                FAQs
            </h1>
        </div>
    </div>
    <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed rerum
        maxime qui hic alias quo. Hic quis vel corporis dolorum quos? Ratione
        dolores veritatis alias quam autem ea, cumque accusamus?
    </p>
    <!-- get all posts for the "faqs" category and loop through it. -->
    <?php $faqs_posts = get_posts(array(
        'category_name' => 'faqs',
        'orderby' => 'date',
        'order' => 'DESC',
        'numberposts' => -1
    ));
    foreach ($faqs_posts as $post) : setup_postdata($post); ?>
        <div class="row">
            <div class="col">
                <div class="my-card">
                    <div class="card-body">
                        <h5 class="my-card-title"><?php the_title(); ?></h5>
                        <p class="card-text bg-grey"><?php the_content(); ?></p>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach;
    wp_reset_postdata(); ?>
</div>



<?php get_footer(); ?>