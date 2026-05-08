<!-- <div id="page_top" class="page_top"></div> -->

<?php if (! is_page('uritai')): ?>
  <!-- tel fax mail -->
  <section class="section section-means" id="means">
    <div class="section-content row w1000">
      <div class="content">

        <div class="means grid">
          <div class="means-company">
            <div class="means__logo">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/favicon.png" alt="stitch">
            </div>
            <div class="means-texts">
              <h3 class="means__title name">株式会社ステッチ</h3>
              <address class="means__address">〒371-0812<br>
                群馬県前橋市広瀬町3丁目2-15</address>
              <a class="means__link" href="https://e-stitch.jp" target="_blank">https://e-stitch.jp/</a>
            </div>
          </div>
          <div class="means-tel">
            <div class="means__icon">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/tel.svg" alt="tel">
            </div>
            <div class="means-texts">
              <h3 class="means__title">お電話でのお問い合わせ</h3>
              <p class="means__num">027-225-5100</p>
              <p class="means__info">営業時間：10:00～18:00<br>
                定休日：水・日曜日・祝、年末年始
              </p>

            </div>
          </div>
          <!-- ここはsideber -->
          <div class="means-mail">
            <div class="means__icon">
              <svg id="" xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 512 512">
                <path class="" d="M510.7,112.3c-2.3-11.6-7.5-22.3-14.7-31.1-1.5-1.9-3.1-3.6-4.8-5.3-12.8-12.8-30.7-20.8-50.2-20.8H71c-19.6,0-37.4,8-50.2,20.8-1.7,1.7-3.3,3.4-4.8,5.3-7.2,8.8-12.4,19.4-14.6,31.1-.9,4.5-1.4,9.1-1.4,13.8v259.8c0,10,2.1,19.5,5.9,28.2,3.5,8.3,8.7,15.7,14.9,22,1.6,1.6,3.2,3,4.9,4.5,12.3,10.2,28.1,16.3,45.3,16.3h370c17.2,0,33.1-6.1,45.3-16.4,1.7-1.4,3.3-2.8,4.9-4.4,6.3-6.3,11.4-13.7,15-22h0c3.8-8.7,5.8-18.2,5.8-28.2V126.1c0-4.7-.5-9.3-1.3-13.8ZM46.5,101.6c6.3-6.3,14.9-10.2,24.5-10.2h370c9.6,0,18.2,3.8,24.5,10.2,1.1,1.1,2.2,2.4,3.1,3.6l-193.9,169c-5.3,4.7-12,7-18.7,7s-13.3-2.3-18.7-7L43.5,105.1c.9-1.2,1.9-2.4,3-3.6ZM36.3,385.9v-243.2l140.3,122.4-140.3,122.3c0-.5,0-1,0-1.5ZM441,420.6H71c-6.3,0-12.2-1.7-17.2-4.6l148-129,13.8,12c11.6,10,26,15.1,40.4,15.1s28.9-5.1,40.4-15.1l13.8-12,147.9,129c-5,2.9-10.9,4.6-17.2,4.6ZM475.7,385.9c0,.5,0,1.1,0,1.5l-140.3-122.2,140.3-122.4v243.1Z" />
              </svg>
            </div>
            <div class="means-texts">
              <h3 class="means__title">メールでのお問い合わせ</h3>
              <a href="mailto:re@e-stitch.jp" class="primary-btn contact">お問い合わせ</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="section section-map" id="map">
    <div class="section-content row w1000">
      <div class="content">
        <div class="map">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d955.2733299368507!2d139.11224783288827!3d36.357298640033!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601eede57cd1f639%3A0xfe0272dbb6d77580!2z5qCq5byP5Lya56S-44K544OG44OD44OB!5e0!3m2!1sja!2sjp!4v1770891394104!5m2!1sja!2sjp" width="" height="" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    </div>
  </section>
  <footer class="site-footer" id="site-footer">
    <div class="section-content row w1000 ">
      <div class="footer">

        <div class="footer-logo">
          <div class="footer__logo-img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/favicon.png" alt="stitch">
          </div>
          <p class="footer__logo-name">株式会社ステッチ</p>
        </div>

        <div class="flex">

          <div class="footer-info">
            <p class="footer__text">株式会社ステッチ　不動産事業部<br>
              〒371-0812 群馬県前橋市広瀬町3-2-15</p>
            <p class="footer__text"><span>営業時間</span>10:00～18:00</p>
            <p class="footer__text"><span>定休日</span>水・日曜日・祝、年末年始</p>

            <p class="pad footer__text"><a href="<?= site_url(); ?>/privacy-policy/">プライバシーポリシー</a></p>
          </div>

          <div class="footer-wrap">
            <div class="flex pc">
              <div class="footer-section">
                <?php wp_nav_menu(array(
                  'theme_location' => 'secondary',
                  'menu' => 'footer-company',
                  'container' => 'ul',
                  'menu_class' => 'footer-links',
                  'before' => '<li class="footer__link">',
                  'after' => '</li>',
                )); ?>
              </div>
              <div class="footer-section">
                <?php wp_nav_menu(array(
                  'theme_location' => 'secondary',
                  'menu' => 'footer-buy',
                  'container' => 'ul',
                  'menu_class' => 'footer-links',
                  'before' => '<li class="footer__link">',
                  'after' => '</li>',
                )); ?>
              </div>

              <div class="footer-section">

                <?php wp_nav_menu(array(
                  'theme_location' => 'secondary',
                  'menu' => 'footer-sell',
                  'container' => 'ul',
                  'menu_class' => 'footer-links',
                  'before' => '<li class="footer__link">',
                  'after' => '</li>',
                )); ?>
              </div>

              <div class="footer-section">
                <?php wp_nav_menu(array(
                  'theme_location' => 'secondary',
                  'menu' => 'footer-etc',
                  'container' => 'ul',
                  'menu_class' => 'footer-links etc',
                  'before' => '<li class="footer__link">',
                  'after' => '</li>',
                )); ?>
              </div>
            </div>
            <p class="footer__text">群馬県知事(1)第8001号<br class="sp">
              (一社)群馬県宅地建物取引業協会会員<br>
              (公社)全国宅地建物取引業保証協会会員<br class="sp">
              (公社)首都圏不動産公正取引協議会加盟</p>
          </div>
        </div>

        <p class="copyright"><a href="https://e-stitch.jp" target="_blank">https://e-stitch.jp/</a><br class="sp">
          ©Copyright STITCH CO.,Ltd. All rights reserved</p>

      </div>
    </div>
  </footer>
<?php endif; ?>

</main>

<?php if (! is_page('uritai')): ?>
  </div>
  <!-- /.wrap -->
<?php endif; ?>

<!-- jquery読込 -->
<!-- <script src="https://code.jquery.com/jquery-4.0.0.min.js"></script> -->
<script src="https://yubinbango.github.io/yubinbango/yubinbango.js" charset="UTF-8"></script>

<!-- swiper -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/swiper.js"></script>

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/common.js"></script>

<!-- to top -->
<script type="text/javascript">
  const PageTopButton = document.getElementById('page_top');
  PageTopButton.addEventListener('click', function foo() {
    const nowY = window.pageYOffset;
    window.scrollTo(0, Math.floor(nowY * 0.8));
    if (nowY > 0) {
      window.setTimeout(foo, 20);
    }
  });
  const obj = document.getElementById("page_top");
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

<!-- 売却相談用 -->
<?php if (is_page(array('contact', 'contact-confirm', 'contact-thanks', 'consult', 'consult-confirm', 'consult-thanks', 'assessment'))): ?>
  <script type="text/javascript">
    jQuery(function($) {

      function toggleAddressInput() {
        const val = $('input[name="check-addr"]:checked').val();
        if (val === '所在地以外') {
          $('#other-input').show();
        } else {
          $('#other-input').hide();
        }
      }

      // ラジオボタンが変更されたら実行
      $(document).on('change', 'input[name="check-addr"]', function() {
        toggleAddressInput();
      });

      // ページ読み込み時にも実行（初期状態の反映）
      toggleAddressInput();
    });
  </script>
<?php endif; ?>


<?php wp_footer(); ?>



</body>

</html>