<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description'); ?>">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <?php wp_head(); ?>
</head>

<body>
    <?php wp_body_open(); ?>
    <header>
        <div class="inner">
            <a href="<?php echo home_url('/'); ?>"><img class="icon" src="<?php echo get_theme_file_uri('/images/SVG/headerIcon.svg'); ?>" alt=""></a>
            <div class="openbtn">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <nav id="g-nav">
                <div id="g-nav-list">

                    <?php if (is_front_page() || is_archive() || is_search()): ?>
                        <ul id="page-link">
                            <li><a href="#area-1">blog</a></li>
                            <li><a href="#area-2">category</a></li>
                            <li><a href="#area-3">profile</a></li>
                            <div class="search">
                                <li><?php get_search_form(); ?></li>
                            </div>
                        </ul>
                    <?php elseif (is_single()): ?>
                        <ul id="page-link">
                            <li><a href="<?php echo home_url('/'); ?>#area-1">blog</a></li>
                            <li><a href="#area-2">category</a></li>
                            <li><a href="#area-3">profile</a></li>
                            <div class="search">
                                <li><?php get_search_form(); ?></li>
                            </div>
                        </ul>
                    <?php else: ?>
                        <ul id="page-link">
                            <li><a href="<?php echo home_url('/'); ?>#area-1">blog</a></li>
                            <li><a href="<?php echo home_url('/'); ?>#area-2">category</a></li>
                            <li><a href="<?php echo home_url('/'); ?>#area-3">profile</a></li>
                            <div class="search">
                                <li><?php get_search_form(); ?></li>
                            </div>
                        </ul>

                    <?php endif; ?>
                </div>
            </nav>
        </div>
    </header>