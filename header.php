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

        <nav class="l-header__menu">
          <div class="c-button__close">
          </div>
          <li><a href="">About</a></li>
          <li><a href="">Servise</a></li>
          <li><a href="">Skills</a></li>
          <li><a href="">Works</a></li>
          <li><a href="">Price</a></li>
          <li><a href="">Contact</a></li>
        </nav>

        <div class="p-bar">
          <button class="p-bar__button">Menu</button>
        </div>
      </header>