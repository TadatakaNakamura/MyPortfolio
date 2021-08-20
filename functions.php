<?php
    add_theme_support( 'menus' );
    add_theme_support( 'title-tag' );

    function hamburger_script() {
        wp_enqueue_style( 'font-awesome', '//use.fontawesome.com/releases/v5.6.1/css/all.css', array(), 'v5.6.1' );
        wp_enqueue_style( 'hamburger', get_template_directory_uri() . '/css/hamburger.css', array(), '1.0.0' );
        wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css', array(), '1.0.0' );
        wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery-3.6.0.min.js', array(), '3.6.0', true );
        wp_enqueue_script( 'script', get_template_directory_uri() . '/js/style.js', array(), '1.0.0', true );
    }
    add_action( 'wp_enqueue_scripts', 'hamburger_script' );


    function hamburger_title( $title ) {
        if ( is_front_page() && is_home() ) { //表示されたページがフロントページかつメインページなら
            $title = get_bloginfo( 'name', 'display' ); //タイトルはブログのサイト名にしてください
        } elseif ( is_singular() ) { //表示されたページが個別投稿ページなら
            $title = single_post_title( '', false ); //タイトルは投稿記事のタイトルにしてください
        }
            return $title;
        }
    add_filter( 'pre_get_document_title', 'hamburger_title' );

    function hamburger_widgets_init() {
        register_sidebar (
            array(
                'name'          => 'All Menu',
                'id'            => 'menu_widget',
                'description'   => 'メニューの一覧です',
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<h2 class="c-category-title">',
                'after_title'   => "</h2>\n",
            )
        );
        register_sidebar(
            array(
              'name'          => 'タグウィジェット',
              'id'            => 'tag_widget',
              'description'   => 'タグ用ウィジェットです',
              'before_widget' => '<div id="%1$s" class="widget %2$s">',
              'after_widget'  => '</div>',
              'before_title'  => '<h2><i class="fa fa-tags" aria-hidden="true"></i>',
              'after_title'   => "</h2>\n",
            )
          );
          register_sidebar(
            array(
              'name'          => 'アーカイブウィジェット',
              'id'            => 'archive_widget',
              'description'   => 'アーカイブ用ウィジェットです',
              'before_widget' => '<div id="%1$s" class="widget %2$s">',
              'after_widget'  => '</div>',
              'before_title'  => '<h2><i class="fa fa-archive" aria-hidden="true"></i>',
              'after_title'   => "</h2>\n",
            )
          );
    }
    add_action( 'widgets_init', 'hamburger_widgets_init' );
