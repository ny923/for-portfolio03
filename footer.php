<div id="to-top" class="to-top"></div>
</main>

<footer class="site-footer" id="site-footer">
  <div class="section-content row w1000">
    <div class="footer">

      <div class="info-wrap">
        <div class="footer-tel">
          <div class="footer__titti">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/footer-titti.webp" alt="お気軽にお問い合わせください" loading="lazy" decoding="async">
          </div>
          <p class="footer__text">お問い合わせは</p>
          <a href="tel:0272255100" class="footer__number">027-225-5100</a>
        </div>

        <p class="footer__info">
          営業時間：10:00～18:00<br>
          定休日：水・日曜日・祝、年末年始<br>
          群馬県知事(1)第8001号
        </p>
      </div>

      <?php wp_nav_menu(array(
        'theme_location' => 'secondary',
        'menu' => 'footer',
        'container' => 'ul',
        'menu_class' => 'footer-links',
        'before' => '<li class="footer__link">',
        'after' => '</li>',
      )); ?>

      <small class="footer__copy">©Copyright STITCH CO.,Ltd. All rights reserved</small>

      <!-- logout(wp-members)
      <?php echo do_shortcode('[wpmem_form login]'); ?> -->

    </div><!-- /.footer -->
  </div>
</footer> <!-- /footer -->


<!-- jquery読込 defer-->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<!-- nav -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/common.js"></script>

<!-- swiper -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/swiper.js"></script>

<!-- aos.js(パララックス) -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script type="text/javascript">
  AOS.init();
</script>

<!-- ローンの計算 -->
<?php if (is_singular('property')) : ?>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/estimate.js"></script>
<?php endif; ?>

<!-- to top -->
<script type="text/javascript">
  const PageTopButton = document.getElementById('to-top');
  PageTopButton.addEventListener('click', function foo() {
    const nowY = window.pageYOffset;
    window.scrollTo(0, Math.floor(nowY * 0.8));
    if (nowY > 0) {
      window.setTimeout(foo, 20);
    }
  });
  const obj = document.getElementById("to-top");
  window.onscroll = function() {
    var scrollTop =
      document.documentElement.scrollTop || // IE、Firefox、Opera
      document.body.scrollTop; // Chrome、Safari
    if (scrollTop > 1000) {
      obj.classList.add("show");
    } else {
      obj.classList.remove("show");
    }
  }
</script>

<!-- before after -->
<?php if (is_page(2392)) : ?>
  <link rel="stylesheet" media="all" type="text/css" href="https://unpkg.com/image-compare-viewer/dist/image-compare-viewer.min.css" />
  <script src="https://unpkg.com/image-compare-viewer/dist/image-compare-viewer.min.js"></script>

  <script>
    const elements = document.querySelectorAll(".image-compare");

    // const options = {};
    // if (window.matchMedia('(max-width: 896px)').matches) {
    //   options.verticalMode = true;
    // }

    elements.forEach(element => {
      // const viewer = new ImageCompare(element, options).mount();
      const viewer = new ImageCompare(element).mount();
    });
  </script>
<?php endif; ?>


<?php wp_footer(); ?>

</div>
<!-- /.wrap -->

</body>

</html>