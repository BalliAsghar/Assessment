<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo("charset"); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php bloginfo("name"); ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>" />
    <?php wp_head(); ?>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="./index.php">Code</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="
                        <?php
                        echo get_home_url();

                        ?>
                        ">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="
                        <?php
                        $page_object = get_page_by_path("about");
                        $page_id = $page_object->ID;
                        $permalink = get_permalink($page_id);
                        echo $permalink;
                        ?>
                        ">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="
                        <?php
                        $page_object = get_page_by_path("faqs");
                        $page_id = $page_object->ID;
                        $permalink = get_permalink($page_id);
                        echo $permalink;
                        ?>">FAQs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="
                        <?php
                        $page_object = get_page_by_path("blog");
                        $page_id = $page_object->ID;
                        $permalink = get_permalink($page_id);
                        echo $permalink;
                        ?>">Blog</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>