<?php get_header(); ?>

<main>
    <div class="inner single-content">
        <div class="main-post">

            <?php
            if (have_posts()):
                while (have_posts()):
                    the_post();
            ?>
                    <section class="single-blog">
                        <a href="<?php the_permalink(); ?>">
                            <h1><?php the_title(); ?></h1>
                        </a>
                        <ul class="single-blog-top">
                            <li class="single-category"><?php echo get_the_category_list(); ?></li>
                            <li class="single-date"><?php the_time('Y.m.d'); ?></li>
                        </ul>
                        <div class="mainimage">
                            <?php
                            if (has_post_thumbnail()):
                                the_post_thumbnail('thumbnail');
                            else:
                            ?>

                                <img src=" <?php echo get_theme_file_uri('/images/no-image.png'); ?>" alt="">

                            <?php
                            endif;
                            ?>
                        </div>
                        <article class="post">
                            <?php the_content(); ?>
                        </article>
                    <?php
                endwhile;
            else:
                    ?>
                    <p>記事がありません。</p>
                <?php
            endif;
                ?>

                <div class="single-nav-page">
                    <ul>
                        <li><?php previous_post_link('%link', '←前の記事'); ?></li>
                        <li><?php next_post_link('%link', '次の記事→'); ?></li>
                    </ul>
                </div>
                    </section>
                    <section class="comment-all">
                        <h2><img class="caption-style" src="<?php echo get_theme_file_uri('/images/SVG/comment.svg'); ?>" alt="コメント"></h2>
                        <?php comments_template(); ?>
                    </section>
        </div>
        <div class="side">
            <section id="area-2" class="category">
                <h2><img class="caption-style" src="<?php echo get_theme_file_uri('/images/SVG/category.svg'); ?>" alt="カテゴリー"></h2>
                <ul>
                    <?php
                    $arg = array(
                        'title_li' => '',
                        'show_count' => '1',
                    );
                    wp_list_categories($arg);
                    ?>
                </ul>
            </section>
            <section class="archive">
                <h2><img class="caption-style" src="<?php echo get_theme_file_uri('/images/SVG/archive.svg'); ?>" alt="アーカイブ"></h2>
                <ul>
                    <?php
                    $arg = array(
                        'show_post_count' => '1',
                    );
                    wp_get_archives($arg);
                    ?>
                </ul>
            </section>
            <section id="area-3" class="profile">
                <h2><img class="caption-style" src="<?php echo get_theme_file_uri('/images/SVG/profile.svg'); ?>" alt="プロフィール"></h2>
                <div class="single-profile-content">
                    <img class="icon-img" src="<?php echo get_theme_file_uri('/images/iconImage@3.png'); ?>" alt="">
                    <ul>
                        <li class="name">森茂 勇斗</li>
                        <li>2005年8月4日生まれ</li>
                        <li class="profile-text">動物が好きで犬を飼っています。<br>Webデザイン学科でWebサイト制作の勉強を頑張っています。</li>
                        <a class="btn" href="<?php echo home_url('/contact/'); ?>">お問い合わせ</a>
                    </ul>
                </div>
            </section>
        </div>
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