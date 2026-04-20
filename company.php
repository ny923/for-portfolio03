<?php
/*
  Template Name: company
*/
?>
<?php get_header(); ?>

<!-- 会社概要 -->
<main class="site-main company" id="site-main">

  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

      <section class="section section-hero lower" id="hero">

        <div class="section-content row w1000 ">
          <div class="content">
            <div class="hero">

              <div class="breadcrumbs">
                <ol itemscope itemtype="http://schema.org/BreadcrumbList">
                  <li itemprop="itemListElement" itemscope
                    itemtype="http://schema.org/ListItem">
                    <a itemprop="item" href="<?= site_url(); ?>/">
                      <span itemprop="name">ホーム</span></a>
                    <meta itemprop="position" content="1" />
                  </li>
                  <li itemprop="itemListElement" itemscope
                    itemtype="http://schema.org/ListItem">
                    <span itemprop="name"><?php the_title(); ?></span>
                    <meta itemprop="position" content="2" />
                  </li>
                </ol>
              </div>

              <?php get_template_part('template-parts/hero-numProperty'); ?>

              <div class="hero-texts">
                <h1 class="hero__catch">人生を、街を、編み直す。<br>— Stitch the Future.</h1>

                <div class="hero__img sp">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/company/hero.png" alt="">
                </div>

                <p class="hero__lead">不動産は、ただの「箱」や「土地」ではありません。<br>
                  そこには、かつて誰かが紡いだ「記憶」があり、<br class="pc">
                  これから誰かが描く「未来」があります。</p>
                <p class="hero__lead">私たちは、時が経ってほつれてしまった空き家や、活用されずに眠っている<br class="pc">
                  土地という「点」を、新しい住まい手や独創的なデザインという「糸」で丁寧に縫い合わせます。</p>
              </div>
            </div>

          </div>
        </div>

        <div class="hero__img ">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/company/hero.png" alt="">
        </div>

      </section>

      <section class="section section-company" id="section-company">

        <div class="section-content row w1000">
          <div class="headline">
            <h2 class="headline__title">私たちが紡ぐ４つの絆</h2>
          </div>
          <div class="content">
            <div class="company bond">
              <ol class="company-list">
                <li class="company-item item01">
                  <h3 class="company__title">記憶の修繕</h3>
                  <p class="company__text">古い建物が持つ風合いや歴史を、ただ壊すのではなく、現代のライフスタイルに合わせて「リペア（修繕）」し、次世代へと受け継ぎます。</p>
                </li>
                <li class="company-item item02">
                  <h3 class="company__title">想いの縫合</h3>
                  <p class="company__text">不動産の悩みは、人生の悩みそのものです。売主様の「手放す寂しさ」と買主様の「新しい希望」を、誠実な対話でひと針ずつ、大切に繋ぎ合わせ
                    ます。</p>
                </li>
                <li class="company-item item03">
                  <h3 class="company__title">街の編み直し</h3>
                  <p class="company__text">一軒の空き家、一つの店舗から、街全体の風景を鮮やかに変えていきます。<br>
                    デザインとビジネスの力で、地域のポテンシャルを引き出し、歩きたくなる
                    街を編み直します。</p>
                </li>
                <li class="company-item item04">
                  <h3 class="company__title">暮らしの彩</h3>
                  <p class="company__text">住まいが整ったその先にある、日々の何気ない充足感をデザインします。<br>
                    お気に入りの空間で過ごす時間、地域との心地よい距離感という糸を共に
                    紡ぎます。</p>
                </li>
              </ol>

            </div>
          </div>
        </div>

        <div class="section-content row w1000">
          <div class="headline">
            <h2 class="headline__title">ステッチの行動指針</h2>
          </div>
          <div class="content">
            <div class="company guideline">
              <ol class="company-list">
                <li class="company-item item01">
                  <h3 class="company__title">「隠し目」のない誠実さ</h3>
                  <p class="company__text">見えない部分（建物の構造やリスク）こそ、プロとして正直に開示します。</p>
                </li>
                <li class="company-item item02">
                  <h3 class="company__title">「仕立て」の美しさ</h3>
                  <p class="company__text">単なる仲介ではなく、空間デザインやブランディングを施し、その不動産
                    が最も輝く「一着」に仕立て上げます。</p>
                </li>
                <li class="company-item item03">
                  <h3 class="company__title">「解けない」信頼関係</h3>
                  <p class="company__text">取引が終わった後も、メンテナンスや相談を通じて、お客様の人生に長く
                    寄り添う丈夫な糸であり続けます。</p>
                </li>
              </ol>
            </div>
          </div>
        </div>

        <div class="section-content row w1000" id="staff">
          <div class="headline">
            <h2 class="headline__title">スタッフ紹介</h2>
          </div>
          <div class="content">

            <div class="staff">
              <ul class="staff-list">
                <li class="staff-item">

                  <div class="flex">
                    <div class="staff-texts">
                      <p class="staff__position">不動産部スタッフ</p>
                      <h3 class="staff__title">鳥居塚<ruby>とりいづか</ruby></h3>
                    </div>
                    <div class="staff__img">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/company/staff01.png" alt="">
                    </div>
                  </div>

                  <p class="staff__text">家を買うということは、ただ建物を手に入れることではありません。そこに流れる時間や、これから積み重なっていく人生の思い出を手に入れることだと、私たちは考えています。朝、窓から差し込む光の中で一日が始まり、外出から帰ってきて、ほっと一息つける場所。嬉しいことがあった日も、少し疲れた日も、扉を開ければ安心できる――そんな場所が「家」なのだと思います。住まいは、単なる空間ではなく、人が集い、語らい、笑い合い、それぞれの時間を大切に過ごす場所。そこには、たくさんの思い出や気持ちが静かに積み重なっていきます。私たちの仕事は、単に物件をご紹介することではありません。これから始まる物語の「舞台」を、一緒に見つけること。その場所でどんな未来が描かれていくのか。そんな想いに寄り添いながら、お客様の新しい暮らしの第一歩を、私たちが心を込めてサポートいたします。</p>
                </li>

                <li class="staff-item ">
                  <div class="flex">
                    <div class="staff-texts">
                      <p class="staff__position">不動産部スタッフ</p>
                      <h3 class="staff__title">阿部<ruby>あべ</ruby></h3>
                    </div>
                    <div class="staff__img">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/company/staff02.png" alt="">
                    </div>
                  </div>
                  <p class="staff__text">家を選ぶことやこれからの暮らしを考えることには、楽しみと同じくらい迷いや不安もあります。だからまずは、これまでの暮らしや想いをゆっくり聞かせてください。どんな毎日を送りたいか、一緒に整理しながら考えていきましょう。答えがまだはっきりしていなくても大丈夫です。少しずつ、今の気持ちや未来の希望を重ねていく時間にできればと思います。家は、ただ住む場所ではなく、ほっと落ち着ける時間や大切な人との笑顔を積み重ねる場所です。その先にある安心や心地よさまで、一緒に想像していけたら嬉しいです。お話のひとつひとつを大切に、そっと寄り添いながら、これからの暮らしをサポートいたします。</p>
                </li>

                <li class="staff-item">
                  <div class="flex">
                    <div class="staff-texts">
                      <p class="staff__position">不動産部スタッフ</p>
                      <h3 class="staff__title">渡邊<ruby>わたなべ</ruby></h3>
                    </div>
                    <div class="staff__img">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/company/staff03.png" alt="">
                    </div>
                  </div>
                  <p class="staff__text">私は現在67歳（小学生2人の孫をもつ）お爺ちゃんですが、不動産の仕事を続ける中で、多くのお客様とのご縁に支えられてまいりました。この仕事は物件を紹介するだけでなく、お客様の人生に関わる大切な役割だと感じています。だからこそ、目先の利益ではなく「安心して任せられる」と思っていただける仕事を心がけております。私自身、「マイホーム購入」「空き家の処分」を経験しており、自身の失敗談を通してお客様目線で共に考えていければと思います。また、人生100年時代に備え、現在進行形で年間４つの”市民マラソン”に参加し、”法律”も勉強中です。不動産契約等はどうしても難しい法律用語で書かれていますが、よりわかりやすい説明をこころがけております。これまでの経験を活かしながら、不動産の売買やご相談など、少しでもお役に立てれば幸いです。どんなことでもお気軽にご相談ください。</p>
                </li>
              </ul>
            </div>
          </div>
        </div>

      </section>

      <section class="section section-overview" id="section-overview">
        <div class="section-content row w1000">
          <div class="headline">
            <h2 class="headline__title">NEXUSグループ<br>
              株式会社ステッチ 会社概要</h2>
          </div>
          <div class="content">
            <div class="overview">


              <dl class="overview-list">

                <dt class="overview__title">会社名</dt>
                <dd class="overview__detail">株式会社ステッチ</dd>

                <dt class="overview__title">所在地</dt>
                <dd class="overview__detail">
                  <p class="overview__text">[本社]<br>
                    前橋市広瀬町3-2-15<br>
                    Tel：027-225-5100（不動産事業部 直通）　<br class="sp">Fax：027-289-3317<br>
                    不動産部宛メールアドレス：re@e-stitch.jp
                  </p>

                  <p class="overview__text">
                    [東京支店]<br>
                    東京都台東区東上野4-1-9　ヤワタ上野ビル2F<br>
                    Tel：03-6228-4561　<br class="sp">Fax：03-6228-4519
                  </p>
                </dd>

                <dt class=" overview__title">代表取締役</dt>
                <dd class="overview__detail">星野 敏</dd>

                <dt class="overview__title">創業</dt>
                <dd class="overview__detail">平成19年3月</dd>

                <dt class="overview__title">資本金</dt>
                <dd class="overview__detail">1,000万円</dd>

                <dt class="overview__title">不動産事業</dt>
                <dd class="overview__detail">
                  <p>群馬県知事(1)第8001号</p>
                  <ul>
                    <li>・不動産売買</li>
                    <li>・不動産コンサルティング</li>
                    <li>・空き家再生</li>
                    <li>・店舗開発</li>
                  </ul>
                </dd>

                <dt class="overview__title">建築・設計事業</dt>
                <dd class="overview__detail">
                  <p>群馬県知事(特-6)第23981号<br>
                    一級建築士事務所　群馬県知事登録 第4848号</p>
                  <ul>
                    <li>・住宅リフォーム工事全般（外装・内装・水廻り・外構等）</li>
                    <li>・商業施設における設計・デザイン・施行</li>
                    <li>・解体工事</li>
                  </ul>
                </dd>
              </dl>

            </div>
          </div>
        </div>
      </section>

  <?php endwhile;
  endif; ?>
  <?php get_footer(); ?>