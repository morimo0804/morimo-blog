<?php get_header(); ?>

<main>
    <section class="top">
        <div class="inner">
            <div class="border">
                <h1><img class="title-img" src="<?php echo get_theme_file_uri('/images/SVG/title.svg'); ?>" alt="リコレブック"></h1>
                <img class="top-img" src="<?php echo get_theme_file_uri('/images/SVG/mainPicture.svg'); ?>" alt="">
            </div>
        </div>
    </section>
    <div class="inner shrink">
        <section id="area-1" class="blog">
            <h2><img class="caption-style" src="<?php echo get_theme_file_uri('/images/SVG/blog.svg'); ?>" alt="ブログ"></h2>

            <div class="result">
                <p>
                    <?php if (is_category()) : ?>
                        カテゴリー: <?php single_cat_title(); ?>
                    <?php elseif (is_tag()) : ?>
                        タグ: <?php single_tag_title(); ?>
                    <?php elseif (is_date()) : ?>
                        月: <?php echo get_the_date('Y年n月'); ?>
                    <?php else: ?>
                        検索 : <?php echo get_search_query(); ?>
                    <?php endif; ?>
                </p>
            </div>

            <div class="post-all">

                <?php
                if (have_posts()):
                    while (have_posts()):
                        the_post();
                ?>
                        <article id="post-<?php the_ID(); ?>">
                            <a href="<?php the_permalink(); ?>">
                                <?php
                                if (has_post_thumbnail()):
                                    the_post_thumbnail('thumbnail');
                                else:
                                ?>

                                    <img src=" <?php echo get_theme_file_uri('/images/no-image.png'); ?>" alt="">

                                <?php
                                endif;
                                ?>
                            </a>
                            <a href="<?php the_permalink(); ?>">
                                <h3 class="post-title"><?php the_title(); ?></h3>
                            </a>
                            <?php the_excerpt(); ?>
                            <p class="date"><?php the_time('Y.m.d'); ?></p>
                            <a class="btn" href="<?php the_permalink(); ?>">続きを読む</a>
                        </article>
                    <?php
                    endwhile;
                else:
                    ?>
                    <p class="no-post">記事が見つかりません。</p>
                <?php
                endif;
                ?>
            </div>

            <div class="nav-page">
                <?php
                $arg = array(
                    'prev_text' => '<',
                    'next_text' => '>',
                    'type' => 'list'
                );
                the_posts_pagination($arg);
                ?>
            </div>
        </section>
        <div class="select">
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
        </div>
        <section id="area-3" class="profile">
            <h2><img class="caption-style" src="<?php echo get_theme_file_uri('/images/SVG/profile.svg'); ?>" alt="プロフィール"></h2>
            <div class="profile-content">
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