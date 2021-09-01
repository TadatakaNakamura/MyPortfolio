<?php
    function custom_theme_support(){
        add_theme_support('html5',array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ));
        add_theme_support( 'title-tag' );
        add_theme_support( 'post-thumbnails' );
        add_theme_support( 'menus' );
        register_hamburger_menus( array(
            'footer_nav'=>esc_html__('footer navigation','rtbread'),
            'category_nav'=>esc_html__('category navigation','rtbread'),
        ));
    }
    add_action('after_setup_theme','custom_theme_support');


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

    // メニューの追加
    function register_hamburger_menus(){
        register_nav_menus( array(
            'footer-menu' => 'FooterMenu',
            'header-menu' => 'HeaderMenu'
        ));
    }
    add_action( 'after_setup_theme', 'register_hamburger_menus');

    // 手書きの場合
    // function the_pagination() {
    //     global $wp_query;
    //     $big = 999999999;
    //     if ( $wp_query->max_num_pages <= 1 )
    //         return;
    //     echo '<nav class="pagination">';
    //     echo paginate_links( array(
    //         'base'         => str_replace( $big, '%#%', esc_url( get_pagenum_link($big) ) ),
    //         'format'       => '',
    //         'current'      => max( 1, get_query_var('paged') ),
    //         'total'        => $wp_query->max_num_pages,
    //         'prev_text'    => '<<',
    //         'next_text'    => '>>',
    //         'type'         => 'list',
    //         'end_size'     => 4,
    //         'mid_size'     => 4
    //     ) );
    //     echo '</nav>';
    //     }

        function create_post_type() {
            register_post_type( 'item', [ // 投稿タイプ名
                'labels' => [
                    'name'          => '商品', // 管理画面右側バーの表示名
                    'singular_name' => 'item',    // カスタム投稿の識別名
                ],
                'public'        => true,  // 投稿タイプをpublicにする
                'has_archive'   => true, // アーカイブ機能をつける
                'menu_position' => 5,     // 管理画面右バーの配置場所
                'menu_icon'     => 'dashicons-store', //管理画面右バーにつくアイコン設定
                'hierarchical'  => true,
                'supports'      => [
                    'title',
                    'editor',
                    'thumbnail',
                    'page-attributes'
                ]
                ]);

                register_taxonomy('item_category', 'item',[
                    'labels' => [
                        'name' => '商品カテゴリー',
                ],
                'hierarchical' => true,
                'show in rest' => true,
                ]);
            }
        add_action( 'init', 'create_post_type' );

