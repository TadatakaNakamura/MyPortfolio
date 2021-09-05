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
                      <h2><?php the_title(); ?></h2>
                      <div class='p-menu-card__info'>
                        <p>価格：<?php $price = get_post_meta(get_the_ID(  ), '価格', true); ?><?php echo $price; ?>円（税込）</p>
                        <p>セット価格：<?php $setprice = get_post_meta(get_the_ID(  ), 'セット価格', true); ?><?php echo $setprice; ?>円（税込）</p>
                      </div>
                    </div>
                  </div>
                  <?php the_content();?>
                  <div class="p-pagelink">
                    <?php wp_link_pages( 'before=<p>&after=</p>&next_or_number=number&pagelink= %' ); ?>
                  </div>
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