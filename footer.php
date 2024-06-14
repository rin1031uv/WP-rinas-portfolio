<!--▼▼footer▼▼-->
<footer class="l-footer">
    <div class="l-footer__container-primary">
      <a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/image/logo_footer.png" alt="logo_footer" class="l-footer__logo"></a>
      <nav class="l-footer__nav">
      <?php wp_nav_menu(
        array (
          'theme_location' => 'footer',
        )
        );
      ?>
      </nav>
    </div>
    <!--<div class="l-footer__container-secondary">
      <div class="l-footer__copyright">コピーライト</div>
    </div>-->
  </footer>
<!--▲▲footer▲▲-->
<!--JavaScript-->
<!--<script src="./js/script.js"></script>-->
<?php wp_footer(); ?>
</body>
</html>