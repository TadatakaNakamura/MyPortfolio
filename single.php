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
                  <div id="post-<?php the_ID(); ?>"<?php post_class(); ?>>
                    <div class="p-article-tag">
                      <?php the_tags(); ?>
                    </div>
                    <?php the_content(); ?>
                    <div class="p-pagelink">
                      <?php wp_link_pages( 'before=<p>&after=</p>&next_or_number=number&pagelink= %' ); ?>
                    </div>
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