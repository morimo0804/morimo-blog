<?php get_header(); ?>

<main>
    <div class="inner shrink contact">
        <section>
            <h2><img class="caption-style" src="<?php echo get_theme_file_uri('/images/SVG/contact.svg'); ?>" alt="コンタクト"></h2>
            <article>
                <?php the_content(); ?>
            </article>
        </section>
    </div>
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
</main>

<?php get_footer(); ?>