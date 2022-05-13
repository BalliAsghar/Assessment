<?php /* Template Name: blog */
the_post_thumbnail();
?>

<?php get_header(); ?>

<div class="text-white bg-img-about">
    <h1 class="display-1 code-h1" style="font-family: Poppins, sans-serif">
        Blog
    </h1>
</div>


<div class="container">
    <div class="d-flex justify-content-between">
        <div class="container">
            <!-- get all posts for the "blog" category and loop through it. -->
            <?php
            $args = array(
                'category_name' => 'blog',
                'posts_per_page' => -1,
                'order' => 'DESC',
                'orderby' => 'date'
            );
            $blog_posts = get_posts($args);
            foreach ($blog_posts as $post) : setup_postdata($post); ?>
                <div class="mt-3"></div>
                <div class="card">
                    <div class="row no-gutters">
                        <div class="col-auto">
                            <img src="
                            <?php
                            if (has_post_thumbnail()) {
                                the_post_thumbnail_url();
                            } else {
                                echo get_template_directory_uri() . '/images/laptop.jpg';
                            }
                            ?>
                            " class="img-fluid" alt="" style="height: 200px" />
                        </div>
                        <div class="col">
                            <div class="card-block px-2">
                                <h4 class="card-title"><?php the_title(); ?></h4>
                                <p class="card-text">
                                    <small class="text-muted">
                                        <time class="text-muted">
                                            <?php the_time('F j, Y'); ?>
                                        </time>
                                    </small>
                                </p>

                                <p class="card-text">
                                    <?php the_content(); ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach;
            wp_reset_postdata(); ?>
        </div>

        <div>
            <div class="container-lg">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Post CATEGORY One</li>
                    <li class="list-group-item">Post CATEGORY Two</li>
                    <li class="list-group-item">Post CATEGORY Three</li>
                    <li class="list-group-item">Post CATEGORY Four</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>