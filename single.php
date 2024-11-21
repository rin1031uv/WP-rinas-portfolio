<!--header.phpを読み込むテンプレートタグ（インクルードタグ）-->
<?php get_header(); ?>

<!--▼▼main▼▼-->
<main>
  <div class="l-main__wrapper">
    <div class="p-main__border"></div>
    <article <?php post_class('l-main__single-blog-container'); ?>>
    <!--▼記事を呼び出すメインループの開始コード▼-->
    <?php if(have_posts()): ?>
    <?php while(have_posts()): the_post(); ?>
    <!--▲記事を呼び出すメインループの開始コード▲-->
    <!--▼カテゴリの取得▼-->
      <?php
      $cats = get_the_category();
      if($cats):
        ?>
      <ul class="p-main__category-container p-card__category-blog">
        <?php foreach($cats as $cat): ?>
        <li><a><?php echo $cat->name; ?></a></a></li>
        <?php endforeach; ?>
      </ul>
      <?php endif; ?>
      <!--▲カテゴリの取得▲-->
      <!--▼タグの取得▼-->
      <ul class="p-main__tag-list-container">
      <?php
      $tags = get_the_tags();
      if($tags) {
        //echo '<ul>';
          foreach( $tags as $tag ) {
            echo '<li>';
            echo '<a href="' . esc_url( get_tag_link( $tag ) ) . '">' .esc_html( $tag->name ) . '</a>';
            echo '</li>';
          }
          //echo '</ul>';
      };
      ?>
      </ul>
      <!--▲タグの取得▲-->
      <!--▼タイトルの取得▼-->
      <h2 class="p-card__title">
        <?php the_title(); ?>
      </h2>
      <!--▲タイトルの取得▲-->
      <!--▼サムネイルの取得▼-->
      <?php if (has_post_thumbnail()): ?>
        <div class="p-main__single-blog-image">
        <?php the_post_thumbnail('medium'); ?>
        </div>
      <?php endif; ?>
      <!--▲サムネイルの取得▲-->
      <!--▼本文の取得▼-->
      <p class="p-main__single-blog-text">
        <?php the_content(); ?>
      </p>
      <!--▲本文の取得▲-->
      <!--▼記事を呼び出すメインループの終了コード▼-->
      <?php endwhile; ?>
      <?php endif; ?>
      <!--▲記事を呼び出すメインループの終了コード▼-->
    </article>
    
    <div class="p-main__border"></div>
<!--▼▼main related posts▼▼-->
<section class="l-main__single-blog-archive">
      <!--▼▼main card▼▼-->
      <article class="l-card" id="l-card">
        <div class="c-card__wrapper-masonry">
          <!--▼card▼-->
          <!--▼繰り返しループ開始/サブループ▼-->
          <?php
          $args = array(
            'post_type' => 'post',//取得したい投稿タイプ
            'posts_per_page' => 3,//表示したい投稿数
          );
          $the_query = new WP_Query($args);//クエリの作成と発行、取得したデータを$the_queryに格納
          ?>
          <?php if ($the_query->have_posts()): ?>
          <?php while ($the_query->have_posts()): $the_query->the_post(); ?>
          <!--▼投稿カード▼-->
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
              <p class="p-card__button"><a href="<?php echo esc_url(get_permalink()); ?>">read more</a></p>
            </div>
          </div>
          <!--▲投稿カード▲-->
          <?php endwhile; else: ?>
            <p>記事はありません</p>
          <?php endif; wp_reset_postdata(); ?>
          <!--▲繰り返しループ終了/サブループ▲-->
          <!--▲card▲-->
        </div>
      </article>
  <!--▲▲main card▲▲-->
    </section>
<!--▲▲main related posts▲▲-->
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
</main>
<!--▲▲main▲▲-->

<!--footer.phpを読み込むテンプレートタグ（インクルードタグ）-->
<?php get_footer(); ?>