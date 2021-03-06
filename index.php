<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

  <?php get_header(); ?>

      <body class="p-contents">

        <div class="p-contents__main">
          <div class="p-contents__main__top">
            <h2>Works</h2>
              <div class="p-work">
              <?php  if (have_posts()) :
                  while (have_posts()) : the_post(); ?>
                  <div class="p-work__card" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
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

          <div id="1" class="p-contents__main__middle">
            <h2>Skills</h2>
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
            <p>※HTML living standardにも対応可能です</p>
          </div>

          <div id="2" class="p-contents__main__bottom">
            <h2>Service</h2>
            <p>コーディング全般対応いたします。サイトの制作・運用、静的サイトのWordPress化など</p>
            <p>個人の方も大歓迎です。完成まで、責任を持って丁寧に対応させていただきます。</p>
            <p>お見積りのご依頼やご相談などは、メールアドレスもしくはTwitterのDMより、お問い合わせください。</p>
          </div>

          <div id="3" class="p-contents__main__price">
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

        <div id="4" class="p-reference">
          <h2>Contact</h2>
          <button>お問い合わせはこちら</button>
        </div>

        <div class="p-mainvisual">
            <div id="5" class="p-mainvisual__article">
              <h2>About</h2>
              <p>鉄道の商業施設で営業を3年、その後独立して2年が経ちます。Web制作に惹かれ2021年RaiseTechにて勉強を開始。</p>
              <p>トレカ、ウイスキー、麻雀、フルートが趣味です。</p>
              <p>まだまだ未熟者ですが、お客様に寄り添い常に最善の選択を考え、提案していくことをお約束いたします</p>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/img/kari.jpg" alt="">
          </div>

        <?php wp_footer(); ?>
      </body>
    </main>
  <?php get_footer(); ?>

</html>