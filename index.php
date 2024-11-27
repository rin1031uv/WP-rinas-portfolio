<!--header.phpを読み込むテンプレートタグ（インクルードタグ）-->
<?php get_header(); ?>
<!--▼▼main▼▼-->
<main>
  <div class="l-main__wrapper">
    <div class="p-main__border"></div>
    <section class="c-main__primary-container">
      <div class="p-main__title-container">
        <h2 class="p-main__title"><?php the_title(); ?></h2>
      </div>
      <div><?php the_content(); ?></div>
    </section>
    <!--▲記事を呼び出すメインループの開始コード▲-->
    <!--▲▲main category▲▲-->
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
  </div>
</main>
<!--▲▲main▲▲-->
<!--footer.phpを読み込むテンプレートタグ（インクルードタグ）-->
<?php get_footer(); ?>