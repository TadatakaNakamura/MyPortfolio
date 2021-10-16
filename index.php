<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

  <?php get_header(); ?>

      <body class="p-contents">

        <div class="p-mainvisual">
          <div class="p-mainvisual__article">
            <h2>About</h2>
            <p>2012年立教大学経営学部|2016年営業|2019年独立|2021年RaiseTech/WSSスクール</p>
          </div>
          <img src="<?php echo get_template_directory_uri(); ?>/img/kari.jpg" alt="">
        </div>

        <div class="p-contents__main">
          <div class="p-contents__main__top">
            <h2>Servise</h2>
            <p>サイトの制作・運用、静的サイトのWordPress化等、Webサイト制作全般に対応いたします。</p>
            <p>個人の方も大歓迎です。完成まで、責任を持って丁寧に対応させていただきます。</p>
          </div>
          <div class="p-contents__main__middle">
            <h2>Skils</h2>
              <div class="p-logos">
                <div class="p-logos__item">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/html-5.svg" alt="HTMLのロゴ">
                  <p>HTML5</p>
                </div>
                <div class="p-logos__item">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/css-3.svg" alt="CSSのロゴ">
                  <p>CSS3</p>
                </div>
                <div class="p-logos__item">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/javascript.svg" alt="jQueryのロゴ">
                  <p>jQuery(JavaScript)</p>
                </div>
                <div class="p-logos__item">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/php.svg" alt="PHPのロゴ">
                  <p>PHP</p>
                </div>
                <div class="p-logos__item">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/wordpress-icon.svg" alt="WordPressのロゴ">
                  <p>WordPress</p>
                </div>
                <div class="p-logos__item">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/github-icon.svg" alt="GitHubのロゴ">
                  <p>Git/GitHub</p>
                </div>
                <div class="p-logos__item">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/sass.svg" alt="Sassのロゴ">
                  <p>Sass</p>
                </div>
                <div class="p-logos__item">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/html-5.svg" alt="CSS設計のロゴ">
                  <p>CSS設計</p>
                </div>
              </div>
            <p>本文が入ります</p>
          </div>
          <div class="p-contents__main__bottom">
            <h2>Works</h2>
            <div class="p-work">
            <?php  if (have_posts()) :
                while (have_posts()) : the_post(); ?>
                <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                  <?php the_post_thumbnail(); ?>
                    <div>
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
          <div class="p-contents__main__price">
            <h2>Price</h2>
            <div class="c-table">
              <table class="c-table__1">
                <tr>
                  <th class="c-table__1__title c-table__title">コーディング</th>
                </tr>
                <tr>
                  <th>トップページ</th>
                  <th>20,000円〜</th>
                </tr>
                <tr>
                  <th>下層ページ</th>
                  <th>20,000円〜</th>
                </tr>
                <tr>
                  <th>レスポンシブ対応</th>
                  <th>20,000円〜</th>
                </tr>
                <tr>
                  <th>jQuery実装</th>
                  <th>10,000円〜</th>
                </tr>
              </table>
              <table class="c-table__2">
                <tr>
                  <th class="c-table__2__title c-table__title">WordPress実装</th>
                </tr>
                <tr>
                  <th>既存テーマ利用</th>
                  <th>50,000円〜</th>
                </tr>
                <tr>
                  <th>オリジナルテーマ利用</th>
                  <th>100,000円〜</th>
                </tr>
              </table>
              <table class="c-table__3">
                <tr>
                  <th class="c-table__3__title c-table__title">その他</th>
                </tr>
                <tr>
                  <th>サイト運営保守</th>
                  <th>月額5,000円〜</th>
                </tr>
                <tr>
                  <th>静的サイトのWordPress化</th>
                  <th>15,000円〜</th>
                </tr>
              </table>
            </div>
          </div>
        </div>

        <div class="p-reference">
          <h2>Contact</h2>
          <button>お問い合わせはこちら</button>
        </div>

        <?php wp_footer(); ?>
      </body>
    </main>
  <?php get_footer(); ?>

</html>