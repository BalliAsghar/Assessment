 <?php get_header(); ?>

 <div class="text-white bg-img">
     <h1 class="display-1 code-h1" style="font-family: Poppins, sans-serif">
         Code
     </h1>
 </div>

 <section class="article-list" style="font-family: Poppins, sans-serif">
     <div class="container">
         <div class="intro">
             <h2 class="text-center" style="font-family: Poppins, sans-serif">
                 Latest Articles
             </h2>
         </div>
         <!-- get all posts for the "home" category and loop through it. -->
         <?php
            $args = array(
                'category_name' => 'home',
                'posts_per_page' => -1,
                'order' => 'DESC',
                'orderby' => 'date'
            );
            $home_posts = get_posts($args);

            ?>
         <div class="row articles">
             <?php foreach ($home_posts as $post) : setup_postdata($post); ?>
                 <div class="col-sm-6 col-md-4 item">
                     <h3 class="name" style="font-weight: 700;">
                         <?php
                            // display post title
                            the_title();
                            ?>
                     </h3>
                     <p class="description">
                         <?php
                            // display post content
                            the_content();

                            ?>
                     </p>
                     <a class="action" href="#"><i class="fa fa-arrow-circle-right"></i></a>
                 </div>

             <?php endforeach;
                wp_reset_postdata(); ?>
         </div>
     </div>
 </section>

 <?php get_footer(); ?>