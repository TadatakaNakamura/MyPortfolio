<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

  <?php get_header(); ?>

      <body class="p-contents">

        <div class="p-mainvisual">
          <div class="p-mainvisual__article">
            <h2>About</h2>
            <p>本文が入ります</p>
          </div>
          <img src="" alt="">
        </div>

        <div class="p-contents__main">
          <div class="p-contents__main__top">
            <h2>Skils</h2>
            <p>本文が入ります</p>
          </div>
          <div class="p-contents__main__middle">
            <h2>Works</h2>
            <p>2つの画像（カスタム投稿？？）</p>
          </div>
          <div class="p-contents__main__bottom">
            <h2>Price</h2>
            <div class="p-price-list">
              <div class="p-price-list__1">
                <h3>コーディング</h3>
                <p>価格１</p>
                <p>価格２</p>
              </div>
              <div class="p-price-list__2">
                <h3>WordPress実装</h3>
                <p>価格１</p>
                <p>価格２</p>
              </div>
              <div class="p-price-list__3">
                <h3>その他</h3>
                <p>価格１</p>
                <p>価格２</p>
              </div>
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