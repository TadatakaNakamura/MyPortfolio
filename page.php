<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

  <?php get_header(); ?>

        <div class="p-contents">

          <div class="p-mainvisual-page">
            <h1><?php the_title(); ?></h1>
          </div>

          <div class="p-article">
            <?php
              if(have_posts() ):
              while( have_posts() ): the_post(); ?>
                <div id="post-<?php the_ID(); ?>"<?php post_class(); ?>>
                  <?php the_content(); ?>
                </div>
              <?php endwhile;
              else: ?>
                <p>表示する記事がありません</p>
              <?php endif; ?>
          </div>

        </div>
      </div>

    </main>

    <?php wp_footer(); ?>
  </body>

  <?php get_footer(); ?>
</html>


