<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

  <?php get_header(); ?>

        <div class="p-contents">

          <div class="p-mainvisual-archive">
            <div class="p-mainvisual-archive__text">
              <h2>Search：</h2>
              <p><?php echo get_search_query(); ?></p>
            </div>
          </div>

          <div class="p-box-archivepage">
            <h4>小見出しが入ります</h4>
            <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
          </div>

          <div class="p-menu">

          <?php if (have_posts()) :
             while (have_posts()) :the_post(); ?>

              <div class="p-menu__card" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <?php the_post_thumbnail(); ?>
                  <div class="p-menu__card__text">
                    <h3><?php the_title(); ?></h3>
                    <?php the_excerpt(); ?>
                    <a href="<?php the_permalink(); ?>">詳しく見る</a>
                  </div>
              </div>

          <?php endwhile;
              else :?><p>表示する記事がありません</p>
              <?php endif; ?>
            <?php
              if (isset($_GET['s']) && empty($_GET['s'])){
                echo '検索キーワード未入力';
              }else{
                echo '“'.get_search_query().'”の検索結果：'.$wp_query->found_posts .'件';
              }
              ?>
          </div>
        </div>

        <div class="p-pagenation">
          <?php wp_pagenavi(); ?>
        </div>

      </div>
      <?php get_sidebar(); ?>

    </main>
    <?php wp_footer(); ?>

  </body>
  <?php get_footer(); ?>

</html>