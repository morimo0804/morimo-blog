<?php
#初期設定
function my_theme_support()
{
    add_theme_support('post-thumbnails'); #アイキャッチ画像の設定
    add_theme_support('title-tag'); #タイトルタグの出力
    add_theme_support('automatic-feed-links'); #RSSフィードの出力
    add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script')); #HTML5に変換
};

add_action('after_setup_theme', 'my_theme_support');

#区切り文字の変更
function change_title_separator($sep)
{
    $sep = ' | ';
    return $sep;
}
add_filter('document_title_separator', 'change_title_separator');

// キャッチフレーズをtitleタグ内から除去
//https://iwb.jp/wordpress-remove-title-tagline-description/
function remove_title_tagline($title)
{
    if (isset($title['tagline'])) {
        unset($title['tagline']);
    }
    return $title;
}
add_filter('document_title_parts', 'remove_title_tagline');

#抜粋の文字数を指定
function custom_excerpt_length($length)
{
    return 70;
}
add_filter('excerpt_length', 'custom_excerpt_length', 999);

#抜粋の文末文字を指定
function custom_excerpt_more($more)
{
    return '<span>...</span>';
}
add_filter('excerpt_more', 'custom_excerpt_more');

// コメント入力欄を一番下へ
//https://kagesai.net/wordpress-comment_customization/#index_id14
add_filter('comment_form_fields', 'commentform_bottom');
function commentform_bottom($form_position)
{
    $comment = $form_position['comment'];
    unset($form_position['comment']);
    $form_position['comment'] = $comment;
    return $form_position;
}

//名前を必須項目に
function preprocess_comment_author($commentdata)
{
    if ('' === trim($commentdata['comment_author']))
        wp_die('名前を入力して下さい。');
    return $commentdata;
}
add_filter('preprocess_comment', 'preprocess_comment_author', 2, 1);

#cssを追加
function my_style_output()
{
    wp_enqueue_style('reset', 'https://cdn.jsdelivr.net/npm/the-new-css-reset/css/reset.min.css');
    wp_enqueue_style('google-font', 'https://fonts.googleapis.com/css2?family=Zen+Kaku+Gothic+New&display=swap rel="stylesheet"');
    wp_enqueue_style('slick', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css');
    wp_enqueue_style('my-style', get_stylesheet_uri(), array('reset'), '1.0.0', 'all');
}
add_action('wp_enqueue_scripts', 'my_style_output');

#jsを追加
function my_script_output()
{
    wp_enqueue_script('slick-script', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('my-script', get_theme_file_uri('/script.js'), array('jquery'), '1.0.0', true);
    //最後の値を「true」にするためには、他の値を省略できない
}
add_action('wp_enqueue_scripts', 'my_script_output');
