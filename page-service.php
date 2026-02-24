<?php
/* Template Name: Service */
get_header();
?>

<main>
  <div class="l-main__wrapper">
    <div class="p-main__border"></div>

  <!--▼▼ Service：タイトル帯（Blog/Worksと同じ型） ▼▼-->
  <section class="c-main__primary-container p-service__primary-container">
    <h2 class="p-main__title js__slide-in">Service</h2>
    <p class="p-main__text">
      完全在宅でお受けしている、サポートとご相談のメニューです。<br>
      今の私にできる形から、少しずつ育てています。
    </p>
  </section>
  <!--▲▲ Service：タイトル帯 ▲▲-->

  <!--▼▼ service menu ▼▼-->
  <article class="c-service__menu-wrapper">

    <!-- 01 -->
    <section class="c-service__menu-primary-container">
      <div>
        <div class="c-service__menu-secondary-container">
          <h3 class="p-service__menu-title">Online Assistant / WordPress Support</h3>
          <p class="p-service__menu-sub-title">オンライン秘書・WordPress更新サポート</p>
        </div>
        <div class="c-service__menu-third-container">
         <div class="c-service__menu-third-container-inner">
          <h4>できること</h4>
          <p>
            WordPress記事投稿・装飾 / 画像設定 / 文章入力・編集<br>
            メール対応 / 資料作成 / データ入力 など<br>
            <br>
            「細かな作業を任せたい」「更新が追いつかない」など、気軽にご相談ください。
          </p>
        </div>
        <div class="c-service__menu-third-container-inner">
          <h4>料金</h4>
          <p>
            内容に応じてお見積りいたします。<br>
            まずはご希望をお聞かせください。
          </p>
        </div>
          <div class="c-service__button-container">
            <p class="p-service__button">
              <a href="<?php echo esc_url( home_url('/contact/') ); ?>">お問い合わせへ</a>
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- 02 -->
    <section class="c-service__menu-primary-container">
      <div>
        <div class="c-service__menu-secondary-container">
          <h3 class="p-service__menu-title">Cat Life Consultation</h3>
          <p class="p-service__menu-sub-title">猫との暮らし相談（オンライン）</p>
        </div>

        <div class="c-service__menu-third-container">
         <div class="c-service__menu-third-container-inner">
          <h4>相談内容例</h4>
          <p>
            落ち着ける環境づくり / 行動や習慣について / 空間レイアウトのご相談<br>
            <br>
            「これって普通？」「どう整えたらいい？」を一緒に整理していきます。
          </p>
         </div>
         <div class="c-service__menu-third-container-inner">
          <h4>形式</h4>
          <p>オンライン（メール）</p>
         </div>
         <div class="c-service__menu-third-container-inner">
          <h4>料金</h4>
          <p>
            現在準備中（モニター募集予定）<br>
            ご興味がある方はお問い合わせからご連絡ください。
          </p>
         </div>
          <div class="c-service__button-container">
            <p class="p-service__button">
              <a href="<?php echo esc_url( home_url('/contact/') ); ?>">お問い合わせへ</a>
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- 03 -->
    <section class="c-service__menu-primary-container">
      <div>
        <div class="c-service__menu-secondary-container">
          <h3 class="p-service__menu-title">Space Design for Cats & Humans</h3>
          <p class="p-service__menu-sub-title">空間づくり・暮らしのご相談（準備中）</p>
        </div>

        <div class="c-service__menu-third-container">
         <div class="c-service__menu-third-container-inner">
          <h4>準備中</h4>
          <p>
            猫と人が自然に調和して暮らせる空間づくり。<br>
            光や風、素材や清潔感など「整えること」を大切にしながら準備しています。
          </p>
         </div>
          <div class="c-service__button-container">
            <p class="p-service__button">
              <a href="<?php echo esc_url( home_url('/contact/') ); ?>">事前相談してみる</a>
            </p>
          </div>
        </div>
      </div>
    </section>

  </article>
  <!--▲▲ service menu ▲▲-->
  </div>
      <div class="p-main__border"></div>
    <!--▼▼main profile▼▼-->
    <section class="l-main__profile-container">
      <h2 class="p-profile__title">About me</h2>
      <div  class="c-profile__primary-container">
        <div class="c-profile__secndary-container">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/image/profile-image.png" alt="自己紹介用の画像" class="p-profile__image">
          <p class="p-profile__name"><?php the_author(); ?></p>
        </div>
        <p class="p-profile__text"><?php the_author_meta('user_description'); ?></p>
      </div>
    </section>
    <!--▲▲main profile▲▲-->
</main>

<?php get_footer(); ?>