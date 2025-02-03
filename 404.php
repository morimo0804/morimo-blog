<?php get_header(); ?>

<section class="top-404">
    <div class="inner">
        <div class="inner-404">
            <div class="border-404">
                <h1><img class="title-img" src="<?php echo get_theme_file_uri('/images/SVG/title404.svg'); ?>" alt="リコレブック"></h1>
                <img class="top-img" src="<?php echo get_theme_file_uri('/images/SVG/text404.svg'); ?>" alt="">
            </div>
        </div>
    </div>
    <a class="btn-404" href="<?php echo home_url('/'); ?>">トップページへ</a>
</section>
<div class="loop-wrap">
    <ul class="loop-contents">
        <li><img src="<?php echo get_theme_file_uri('/images/books.png'); ?>" alt=""></li>
        <li><img src="<?php echo get_theme_file_uri('/images/books.png'); ?>" alt=""></li>
    </ul>
    <ul class="loop-contents">
        <li><img src="<?php echo get_theme_file_uri('/images/books.png'); ?>" alt=""></li>
        <li><img src="<?php echo get_theme_file_uri('/images/books.png'); ?>" alt=""></li>
    </ul>
</div>

<?php get_footer(); ?>