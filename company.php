<?php
/*
  Template Name: company
*/
?>
<?php get_header(); ?>

<section class="section section-hero lower">
  <div class="section-content row nopad w1000">
    <div class="headline">

      <div class="breadcrumbs">
        <ol itemscope itemtype="http://schema.org/BreadcrumbList">
          <li itemprop="itemListElement" itemscope
            itemtype="http://schema.org/ListItem">
            <a itemprop="item" href="<?= site_url(); ?>/">
              <span itemprop="name">HOME</span></a>
            <meta itemprop="position" content="1" />
          </li>
          <li itemprop="itemListElement" itemscope
            itemtype="http://schema.org/ListItem">

            <span itemprop="name"><?php echo get_the_title(); ?></span>

            <meta itemprop="position" content="2" />
          </li>
        </ol>
      </div>

      <h1 class="headline__title"><?php the_title(); ?></h1>
    </div>
</section>

<section class="section section-static" id="section-static">
  <div class="section-content row w1000">
    <div class="static">

      <div class="column__thumbnail">
        <?php the_post_thumbnail(); ?>
      </div>

      <div class="static-contents company">

        <section>
          <h2>代表挨拶・想い</h2>

          <div class="flex">
            <p>この度は「株式会社ステッチ 不動産事業部」のホームページをご覧いただき、誠にありがとうございます。<br>当社は群馬県に特化した不動産買取専門店です。<br>近年社会問題となっている空き家問題を解決したいという想いから、空き家の再生事業を立ち上げました。<br>弊社は地域密着型企業として、様々な企業とのネットワークを活かしたお客様に最適なご提案が可能です。<br>不動産について気になることがありましたら、ぜひ当社までご相談ください。</p>

            <figure>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/company/cont01.webp" alt="取締役社長　大海英美" loading="lazy" decoding="async" />
              <figcaption>取締役社長　大海英美</figcaption>
            </figure>
          </div>
        </section>


        <table>
          <tr>
            <th>名称</th>
            <td>株式会社ステッチ</td>
          </tr>
          <tr>
            <th>所在地</th>
            <td>
              <div>
                本社：前橋市広瀬町3-2-15<br>
                Tel：027-225-5100（不動産事業部 直通）<br>
                Fax：027-289-3317<br>
              </div>

              <div>
                東京営業所<br>
                Tel：03-6228-4561<br>
                Fax：03-6228-4519
              </div>
            </td>
          </tr>
          <tr>
            <th>代表取締役</th>
            <td>星野　敏</td>
          </tr>
          <tr>
            <th>設立</th>
            <td>平成19年3月</td>
          </tr>
          <tr>
            <th>資本金</th>
            <td>1,000万円</td>
          </tr>
          <tr>
            <th>事業内容</th>
            <td>企画デザイン製作会社<br>
              商業施設の設計及びデザイン・施工、店舗販促関連、店舗内外装飾、<br>
              POP、VMD、看板製作、WEBなどの企画・デザイン、制作・施工</td>
          </tr>
          <tr>
            <th>ホームページ</th>
            <td><a href="https://e-stitch.jp/" target="_blank">https://e-stitch.jp/</a></td>
          </tr>
        </table>

        <iframe class="iframe" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3213.1703988451604!2d139.10936107625895!3d36.35665127237702!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601eede57cd1f639%3A0xfe0272dbb6d77580!2z5qCq5byP5Lya56S-44K544OG44OD44OB!5e0!3m2!1sja!2sjp!4v1710912011602!5m2!1sja!2sjp" width="999" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

      </div>
      <!-- /contents -->

    </div>
  </div>
</section>

<?php get_footer(); ?>