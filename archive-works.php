<!--header.phpを読み込むテンプレートタグ（インクルードタグ）-->
<?php get_header(); ?>

<!--▼▼main▼▼-->
<main>
  <div class="l-main__wrapper">
    <div class="p-main__border"></div>
<!--▼▼main card▼▼-->
    <section class="c-main__primary-container">
      <h2 class="p-main__title js__slide-in">Works</h2>
      <p class="p-main__text">
        心を込めて制作した作品集です。
      </p>
    </section>
    <article class="l-card l-card-works c-card__wrapper-masonry-works">
      <!--▼card▼-->
      <!--▼繰り返しループ開始▼-->
      <?php
      $args = array(
        'post_type' => 'works',
        'post_per_page' => 9,
      );
      $the_query = new WP_Query($args);
      ?>
      <?php if($the_query->have_posts()): ?>
        <ul>
        <?php while ($the_query->have_posts()): $the_query->the_post(); ?>
        <li>
          <a href="<?php the_permalink(); ?>">
          <!--▼サムネイル取得▼-->
          <div class="c-card__primary-container c-card-works__primary-container">
            <?php if(has_post_thumbnail()): ?>
              <?php the_post_thumbnail(); ?>
              <?php else: ?>
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/image/temporary.JPG" alt="仮画像">
          <?php endif; ?>
          <!--▲サムネイル取得▲-->
          <div class="c-card-works__secandary-container">
          <div class="c-card__secondary-container c-card-works__third-container">
            <!--▼カテゴリ取得▼-->
            <?php the_category(); ?>
            <!--▲カテゴリ取得▲-->
            <!--▼タイトル取得▼-->
            <h3 class="p-card__title p-card-works__title">
              <?php the_title(); ?>
            </h3>
            <!--▲タイトル取得▲-->
          </div>
          <p class="p-card__button p-card-works__button"><a href="<?php echo esc_url(get_permalink()); ?>">read more</a></p>
        </div>
      </div>
          </a>
        </li>
        <?php endwhile; ?>
        </ul>
      <?php else: ?>
        <p>まだ投稿がありません。</p>
      <?php endif;
      wp_reset_postdata(); ?>
      <!--▲card▲-->
    </article>
<!--▲▲main card▲▲-->
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
      <article>
        <dl class="p-main__list-category">
          <dt><a href="#">Category</a></dt>
          <dd><a href="#">Web design</a></dd>
          <dd><a href="#">Logo</a></dd>
          <dd><a href="#">banner</a></dd>
        </dl>
      </article>
      <!--▼▼main search▼▼-->
      <div>
        <form action="#" method="get" class="p-search-form__container">
          <input class="p-search-form__field" type="search" name="search" placeholder="&#xf002">
          <input class="p-search-form__button" type="submit" name="submit" value="search">
        </form>
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
  </div>
</main>
<!--▲▲main▲▲-->

<!--footer.phpを読み込むテンプレートタグ（インクルードタグ）-->
<?php get_footer(); ?>