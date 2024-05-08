<article class="l-card" id="l-card">
      <div class="c-card__wrapper-masonry">
        <!--▼card▼-->
          <div class="c-card__primary-container">
              <div class="p-card__image-container">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/image/temporary.JPG" alt="仮画像" class="p-card__img-blog">
                <div class="p-card__list-container-blog">
                 <?php
                 $cats = get_the_category();
                 if($cats):
                  ?>
                  <ul class="p-card__category-blog">
                  <!--▼カテゴリ取得▼-->
                  <?php foreach($cats as $cat): ?>  
                  <li><a href="<?php echo $cat->name; ?>"></a></li>
                  <?php endforeach; ?>
                  </ul>
                  <?php endif; ?>
                  <!--▲カテゴリ取得▲-->
                  <ul class="p-card__tag-blog">
                    <li><a href="#">タグ</a></li>
                  </ul>
                </div>
              </div>
              <div class="c-card__secondary-container">
                <!--▼タイトル▼-->
                <h3 class="p-card__title">
                 <?php the_title(); ?>
                </h3>
                <!--▲タイトル▲-->
                <p class="p-card__text">抜粋が入ります。抜粋が入ります。抜粋が入ります。</p>
                <p class="p-card__button"><a href="<?php the_permalink(); ?>">read more</a></p>
              </div>
          </div>
        <!--▲card▲-->
      </div>
    </article>
<!--▲▲main card▲▲-->