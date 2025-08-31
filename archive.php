<!--header.phpを読み込むテンプレートタグ（インクルードタグ）-->
<?php get_header(); ?>

<!--▼▼main▼▼-->
<main>
  <div class="l-main__wrapper">
    <div class="p-main__border"></div>
    <section class="c-main__primary-container">
    <div class="p-main__title-container js__slide-in">
      <h2 class="p-main__title js__slide-in">Blog</h2>
      <p><?php single_cat_title(); ?></p>
      </div>
      <p class="p-main__text">
        Web制作で学んだことのアウトプットはもちろん。<br>
        日々感じたこと、好きなこと。<br>
        素敵だなと感じたことを発信しています。
      </p>
    </section>
<!--▼▼main related posts▼▼-->
    <section class="l-main__single-blog-archive">
      <!--▼▼main card▼▼-->
      <article class="l-card" id="l-card">
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
              <?php endif; ?>
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
<!--▼▼main pagenation▼▼-->
<?php
  if(function_exists('wp_pagenavi')):
    wp_pagenavi();
  endif;
  ?>
  <!--▲▲main pagenation▲▲-->
    <div class="p-main__border"></div>
<!--▼▼main category▼▼-->
    <div class="l-main__list-category">
      <article class="p-main__list-category">
        <h3>Category</h3>
        <ul>
        <?php wp_list_categories('title_li='); ?>
        </ul>
      </article>
      <!--▼▼main search▼▼-->
      <div>
        <?php get_search_form(); ?>
      </div>
      <!--▲▲main search▲▲-->
    </div>
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