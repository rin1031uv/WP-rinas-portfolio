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
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/image/silvia.png" class="p-top__hero-image">
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
        ねこと人が共に笑顔で生きられる<br>
        美しい共生環境をデザインしています<br>
        <br>
        その想いと背景について記しています<br>
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
        猫と暮らす日々の中で見つけた<br>
        小さな発見と美しさを綴っています<br>
        <br>
        共に生きる時間の記録です<br>
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
                <?php if(has_post_thumbnail()): ?>
                  <?php the_post_thumbnail('thumbnail'); ?>
                  <?php else: ?>
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/image/temporary.JPG" alt="仮画像" class="p-card__img-blog">
              <div class="p-card__list-container-blog">
                <!--▼カテゴリ取得▼-->
                <?php the_category(); ?>
                <!--▲カテゴリ取得▲-->
                <!--▼タグ取得▼-->
                <!--<?php the_tags('<ul class="p-card__tag-blog"><li>', '</li><li>', '</ul>'); ?>-->
                <!--▲タグ取得▲-->
              </div>
              <?php endif; ?>
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
    <!--▼▼service▼▼-->
<!--▼▼service▼▼-->
<article class="c-top__service-wrapper">
  <div class="js__slide-in">
    <div class="p-top__title-background eachTextAnime">Services</div>
  </div>
  <h2 class="p-top__title js__slide-in">Service</h2>
  <p class="p-top__text js__slide-in">
    完全在宅でお受けしている<br>
    サポートとご相談のメニューです<br>
    <br>
    今の私にできる形から、少しずつ育てています<br>
  </p>

  <div class="p-top__button-ptimary-container">
    <div class="c-top__button-container p-top__button-container-service">
      <img class="p-top__button-image" src="<?php echo get_stylesheet_directory_uri(); ?>/image/button_butterfly_left.png" alt="蝶々">
          <p class="p-top__button">
        <a href="<?php echo esc_url(home_url('/')); ?>service/">Read more</a>
      </p>
    </div>
  </div>
</article>
<!--▲▲service▲▲-->
    <!--▲▲service▲▲-->
    <!--▼▼contact▼▼-->
    <article class="c-top__contact-wrapper">
      <div class="p-top__contact-title-background js__slide-in eachTextAnime">Get in Touch</div>
      <h2 class="p-top__title-contact js__slide-in">Contact</h2>
      <p class="p-top__text-contact js__slide-in">
        ご相談等お気軽にお問い合わせください。
      </p>
      <div class="c-top__button-container p-top__button-container-contact">
          <div class="p-top__button-container-secondary">
            <a href="https://www.instagram.com/rina_neko.lifedesign/" target="_blank">
              <p class="p-top__button-icon"><i class="fa-brands fa-instagram" style="color: #122736;"></i></p>
              <p class="p-top__button-title">jump to my instagram</p>
            </a>
          </div>
          <div class="p-top__button-container-secondary">
            <a href="contact">
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