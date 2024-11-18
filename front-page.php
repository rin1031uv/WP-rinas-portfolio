<!--header.phpを読み込むテンプレートタグ（インクルードタグ）-->
<?php get_header(); ?>



<!--▼▼main▼▼-->

<main class="l-main__front-page">
<!--▼▼プログレスバー▼▼-->
<div id="splash">
<div id="progress-bar-container"></div>
</div>
<!--▲▲プログレスバー▲▲-->


  <!--▼▼hero image▼▼-->
  <div class="c-top__hero-wrapper">
    <div class="c-top__hero-container">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/image/hero-3.png" class="p-top__hero-image">
      <div class="c-top__hero-background"></div>
    </div>
  </div>
  <!--▲▲hero image▲▲-->
  <div class="l-main__wrapper-frontpage">
    <!--▼▼about▼▼-->
    <article class="c-top__about-wrapper">
      <div class="js__slide-in">
        <div class="p-top__title-background eachTextAnime">Self Introdution</div>
      </div>
      <h2 class="p-top__title js__slide-in">About</h2>
      <p class="p-top__text js__slide-in">
        るんるん × らんらん × こつこつ<br>
        楽しく、工夫して、何事もチャレンジ。<br>
        笑顔を生むお仕事を心がけています。<br>
        バナー、ロゴ、Webサイトを主にデザイン制作しています。<br>
        好奇心旺盛で、探究心が強く良くすることに対して粘り強くとことん。<br>
        工夫してものづくりをするのが大好きです。<br>
        よく聞き、よく考えることでご要望を理解しデザインを制作します。<br>
      </p>
      <div class="p-top__button-ptimary-container">
        <div class="c-top__button-container p-top__button-container-about">
          <p class="p-top__button"><a href="<?php echo esc_url(home_url('/')); ?>about/">Read more</a></p>
          <img class="p-top__button-image" src="<?php echo get_stylesheet_directory_uri(); ?>/image/button_butterfly_right.png" alt="蝶々">
        </div>
      </div>
    </article>
    <!--▲▲about▲▲-->
    <!--▼▼works▼▼-->
    <article class="c-top__works-wrapper">
      <div class="p-top__title-background-work-container js__slide-in">
        <div class="p-top__title-background-work-primary p-top__slide-in-title eachTextAnime">Please take a look</div>
        <div class="p-top__title-background-work-secondary p-top__slide-in-title eachTextAnime">at my creation</div>
      </div>
      <div>
        <h2 class="p-top__title js__slide-in">Works</h2>
        <p class="p-top__text js__slide-in">
          心を込めて制作した作品たちをご紹介します。<br>
          Webサイトデザイン・バナー・ロゴ・ギャラリーを載せています。
        </p>
      </div>
      <div class="p-top__button-ptimary-container">
        <div class="c-top__button-container p-top__button-container-work">
          <img class="p-top__button-image" src="<?php echo get_stylesheet_directory_uri(); ?>/image/button_butterfly_left.png" alt="蝶々">
          <p class="p-top__button"><a href="<?php echo get_post_type_archive_link('works'); ?>">View My Portfolio</a></p>
        </div>
      </div>
    </article>
    <!--▲▲works▲▲-->
    <!--▼▼blog▼▼-->
    <article class="c-top__blog-wrapper">
      <div class="js__slide-in">
        <div class="p-top__title-background eachTextAnime">learn with me</div>
      </div>
      <h2 class="p-top__title js__slide-in">Blog</h2>
      <p class="p-top__text js__slide-in">
        勉強のまとめ、日々の出来事や思ったことを綴っています。
      </p>
      <!--▼▼main related posts▼▼-->
    <section class="l-main__single-blog-archive">
      <!--▼▼main card▼▼-->
      <article class="l-card" id="l-card">
        <div class="c-card__wrapper-masonry p-card__front-wrapper">
        <div class="c-card__wrapper-masonry">
          <!--▼card▼-->
          <!--▼繰り返しループ開始▼-->
          <!--▼繰り返しループ開始▼-->
          <?php if (have_posts()): while (have_posts()): the_post(); ?>
          <div class="c-card__primary-container">
            <div class="p-card__image-container">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/image/temporary.JPG" alt="仮画像" class="p-card__img-blog">
              <div class="p-card__list-container-blog">
                <!--▼カテゴリ取得▼-->
                <?php the_category(); ?>
                <!--▲カテゴリ取得▲-->
                <!--▼タグ取得▼-->
                <!--<?php the_tags('<ul class="p-card__tag-blog"><li>', '</li><li>', '</ul>'); ?>-->
                <!--▲タグ取得▲-->
              </div>
            </div>
            <div class="c-card__secondary-container">
              <!--▼タイトル取得▼-->
              <h3 class="p-card__title">
                <?php the_title(); ?>
              </h3>
              <!--▲タイトル取得▲-->
              <!--▼抜粋取得▼-->
              <?php the_excerpt(); ?>
              <!--▲抜粋取得▲-->
              <p class="p-card__button"><a href="<?php the_permalink(); ?><?php echo get_post_field( 'post_name', get_the_ID()); ?>">read more</a></p>
            </div>
          </div>
          <?php endwhile; else: ?>
            <p>記事はありません</p>
          <?php endif; ?>
          <!--▲繰り返しループ終了▲-->
          <!--▲card▲-->
        </div>
      </article>
  <!--▲▲main card▲▲-->
    </section>
<!--▲▲main related posts▲▲-->
    <div class="p-top__button-ptimary-container">
      <div class="c-top__button-container p-top__button-container-blog">
        <p class="p-top__button"><a href="<?php echo esc_url(home_url('/')); ?>archiveblog/">View My Posts</a></p>
        <img class="p-top__button-image" src="<?php echo get_stylesheet_directory_uri(); ?>/image/button_butterfly_right.png" alt="蝶々">
      </div>
    </div>
    </article>
    <!--▲▲blog▲▲-->
    <!--▼▼contact▼▼-->
    <article class="c-top__contact-wrapper">
      <div class="p-top__contact-title-background js__slide-in eachTextAnime">Get in Touch</div>
      <h2 class="p-top__title-contact js__slide-in">Contact</h2>
      <p class="p-top__text-contact js__slide-in">
        ご相談等お気軽にお問い合わせください。
      </p>
      <div class="c-top__button-container p-top__button-container-contact">
          <div class="p-top__button-container-secondary">
            <a href="#">
              <p class="p-top__button-icon"><i class="fa-brands fa-x-twitter" style="color: #122736;"></i></p>
              <p class="p-top__button-title">jump to my tweets</p>
            </a>
          </div>
          <div class="p-top__button-container-secondary">
            <a href="#">
              <p class="p-top__button-icon"><i class="fas fa-paper-plane" style="color: #122736;"></i></p>
              <p class="p-top__button-title">send a message</p>
            </a>
          </div>
      </div>
    </article>
    <!--▲▲contact▲▲-->
  </div>
</main>
<!--▲▲main▲▲-->

<!--footer.phpを読み込むテンプレートタグ（インクルードタグ）-->
<?php get_footer(); ?>