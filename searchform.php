<!--▼▼main search▼▼-->
  <form action="<?php echo home_url('/'); ?>" method="get" class="p-search-form__container">
    <input class="p-search-form__field" type="search" name="s" id="s" autocapitalize="off" placeholder="&#xf002" value="<?php the_search_query(); ?>">
    <input type="hidden" value="post" name="post_type" id="post_type" autocapitalize="off">
    <input class="p-search-form__button" type="submit" name="submit" id="searchsubmit" value="search">
  </form>
<!--▲▲main search▲▲-->