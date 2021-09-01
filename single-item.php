<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

  <?php get_header(); ?>

            <div class="p-contents">

              <div class="p-mainvisual-single">
                <h1><?php the_title(); ?></h1>
              </div>

              <div class="p-article">
              <?php
                if(have_posts() ):
                while( have_posts() ): the_post(); ?>
                  <div class="p-menu-card--custom" id="post-<?php the_ID(); ?>"<?php post_class(); ?>>
                    <?php the_post_thumbnail(); ?>
                    <div class="p-menu-card__text--custom">
                      <h1><?php the_title(); ?></h1>
                      <div class='p-menu-card__info'>
                        <p>価格：<?php $price = get_post_meta(get_the_ID(  ), '価格', true); ?><?php echo $price; ?>円</p>
                        <p>アレルギー：<?php $allergie = get_post_meta(get_the_ID(  ), 'アレルギー', true); ?><?php echo $allergie; ?></p>
                      </div>
                    </div>
                  </div>
                  <?php the_content();?>
                </div>
                <?php endwhile;
                else: ?>
                  <p>商品がありません</p>
                <?php endif; ?>

              </div>
            </div>
          </div>

        <?php get_sidebar(); ?>
      </main>
    <?php wp_footer(); ?>
    </body>
  <?php get_footer(); ?>
</html>