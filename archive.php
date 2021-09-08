<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

  <?php get_header(); ?>
    <div class="p-contents">
        <div class="p-mainvisual-archive">
            <div class="p-mainvisual-archive__text">
              <h2>MENU：</h2>
              <p><?php single_cat_title(); ?></p>
            </div>
          </div>

          <div class="p-box-archivepage">
            <h4>小見出しが入ります</h4>
            <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
          </div>

        　<div class="p-menu">

            <?php  if (have_posts()) :
                while (have_posts()) : the_post(); ?>
                <div class="p-menu__card" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                  <?php the_post_thumbnail(); ?>
                    <div class="p-menu__card__text">
                      <h3><?php the_title(); ?></h3>
                      <?php the_excerpt(); ?>
                      <a href="<?php the_permalink(); ?>">詳しく見る</a>
                    </div>
                </div>
              <?php endwhile;
              else :
              ?><p>表示する記事がありません</p>
            <?php endif; ?>

          </div>
        </div>

        <div class="p-pagenation">
          <?php wp_pagenavi(); ?>
          <!--手書きの場合 <?php if( function_exists("the_pagination") ) the_pagination(); ?> -->
        </div>
    　</div>
      <?php get_sidebar(); ?>
      </main>
    <?php wp_footer(); ?>
  </body>
  <?php get_footer(); ?>
</html>