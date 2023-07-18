<footer>
      <div class="center2">
        <div class="text3">
          <p class="itensf">Copyright Hora News Notícias</p>
          <i class="fa-brands fa-accessible-icon"></i>
          <li class="itensf"><a href="">ACESSIBILIDADE</a></li>
        </div>
      </div>
    </footer>
    
    <?php wp_footer(); ?>

    <!-- script com menu mobile hamburger -->
    <script src="<?php echo get_theme_root_uri(); ?>/horanewsnotícias/js/jquery.js"></script>
    <script>
      $('.my-mobile i').click(function () {
      $('.my-mobile').find('ul').slideToggle();
      })

    </script>
  </body>
</html>