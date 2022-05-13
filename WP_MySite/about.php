<?php /* Template Name: about */ ?>

<?php get_header(); ?>

<div class="text-white bg-img">
    <h1 class="display-1 code-h1" style="font-family: Poppins, sans-serif">
        About
    </h1>
</div>

<div class="container">
    <div class="d-flex justify-content-between">
        <div>
            <h2 class="display-4" style="font-family: Poppins, sans-serif">
                About
            </h2>
            <p class="lead">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quis
                lorem ut libero malesuada feugiat. Lorem ipsum dolor sit amet,
                consectetur adipiscing elit.

                <br />
                <br />
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit
                corporis ea quis consequuntur, molestiae minus quae. Non et, velit
                nulla aspernatur asperiores, porro iure blanditiis odit voluptatum
                eaque assumenda temporibus? Lorem ipsum dolor sit amet consectetur
                adipisicing elit. Excepturi rem veniam provident tempore commodi
                quasi id ea, facilis ex eius! Omnis dolorem dolor voluptates facere
                excepturi maiores sed unde corporis.
            </p>
            <div class="container-lg">
                <div class="row row-cols-1">
                    <!-- get all posts for the "about" category and loop through it. -->
                    <?php $about_posts = get_posts(array(
                        'category_name' => 'about',
                        'orderby' => 'date',
                        'order' => 'DESC',
                        'numberposts' => -1
                    ));
                    ?>
                    <?php foreach ($about_posts as $post) : setup_postdata($post); ?>
                        <div class="col-sm">
                            <div class="my-card-about">
                                <div class="card-body">
                                    <h5 class="my-card-title"><?php the_title(); ?></h5>
                                    <p class="card-text bg-grey"><?php the_content(); ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach;
                    wp_reset_postdata(); ?>
                </div>
            </div>
        </div>
    </div>
</div>
</div>


<?php get_footer(); ?>