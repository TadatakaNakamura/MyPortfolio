<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>hamburgerメニュー</title>

  <!-- 読み取り先を変更 -->
  <link rel="stylesheet" href="css/hamburger.css">

</head>

  <body>
    <div></div>
    <main class="l-main">
      <div class="l-main__left">

      <php? get_header(); ?>

        <div class="p-contents">

          <div class="p-mainvisual">
            <p>ダミーサイト</p>
          </div>

          <div class="p-branch-menu">
            <div class="p-branch-menu__wrap takeout">
              <h2>Take Out</h2>
              <div class="p-box">
                <div class="p-box__description">
                  <h4>Take OUT</h4>
                  <p>当店のテイクアウトで利用できる商品を掲載しています</p>
                </div>
                <div class="p-box__description">
                  <h4>Take OUT</h4>
                  <p>当店のテイクアウトで利用できる商品を掲載しています</p>
                </div>
              </div>
            </div>
            <div class="p-branch-menu__wrap eatin">
              <div class="c-title">
                <h2>Eat In</h2>
              </div>
              <div class="p-box">
                <div class="p-box__description">
                  <h4>Take OUT</h4>
                  <p>当店のテイクアウトで利用できる商品を掲載しています</p>
                </div>
                <div class="p-box__description">
                  <h4>Take OUT</h4>
                  <p>当店のテイクアウトで利用できる商品を掲載しています</p>
                </div>
              </div>
            </div>

          </div>
          <div class="p-map">
            <iframe class="p-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1506.772570713381!2d139.74392569228223!3d35.657836376833686!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188bbd9009ec09%3A0x481a93f0d2a409dd!2z5p2x5Lqs44K_44Ov44O8!5e0!3m2!1sja!2sjp!4v1626997442584!5m2!1sja!2sjp" width="100%" height="650" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            <div class="p-map__layer1">
              <div class="p-map__layer2"></div>
            </div>
            <div class="p-map__wrap">
              <h3>見出しが入ります</h3>
              <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
            </div>
          </div>
        </div>
      </div>

      <?php get_sidebar(); ?>

    </main>
    <script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
    <script src="js/style.js"></script>

  </body>

  <?php get_footer(); ?>

</html>