<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="email=no,telephone=no,address=no">
  <meta name="description" content="WordPress theme development static data for beginners">
  <meta name="keywords" content="WordPress, Theme, development">
  <?php if ( is_singular() ) wp_enqueue_script( "comment-reply" ); ?>
  <?php wp_head(); ?>
</head>

  <body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
    <main class="l-main">

      <header class="l-header">
        <div class="l-header__title">
          <a href="<?php echo esc_url( home_url( '/') );?>">
            <h1><?php bloginfo( 'name' ); ?></h1>
          </a>
        </div>

        <div class="l-header__menu">
          <a href="">About</a>
          <a href="">Skills</a>
          <a href="">Works</a>
          <a href="">Price</a>
          <a href="">Contact</a>
        </div>
      </header>