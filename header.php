<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="email=no,telephone=no,address=no">
  <meta name="description" content="WordPress theme development static data for beginners">
  <meta name="keywords" content="WordPress, Theme, development">
  <?php wp_head(); ?>
</head>

  <body <?php body_class(); ?>>
    <main class="l-main">
      <div class="l-main__left">

        <header class="l-header">
          <div class="l-header__title">
            <a href="<?php echo esc_url( home_url( '/') );?>">
              <h1><?php bloginfo( 'name' ); ?></h1>
            </a>
          </div>

          <?php get_search_form(); ?>

          <div class="p-bar">
            <button class="p-bar__button">Menu</button>
          </div>
        </header>