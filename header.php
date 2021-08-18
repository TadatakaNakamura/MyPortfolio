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
