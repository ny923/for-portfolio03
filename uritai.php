<?php
/*
Template Name:uritai
*/
?>
<?php get_header(); ?>

<main class="site-main" id="site-main">

  <!-- このページのみのオリジナルheader/footer -->
  <section class="section section-fv" id="fv">
    <div class="section-content row w1280">
      <div class="headline">
        <div class="flex">
          <div class="fv__logo">
            <a href="<?= site_url(); ?>/">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/logo.svg" alt="Stitch">
              <h1 class="fv__name">株式会社ステッチ</h1>
            </a>
          </div>
          <div class="fv-info pc">
            <span class="corner"></span>

            <a href="https://e-stitch.jp/" class="fv-info__link logo" target="_blank">ステッチについて</a>
            <a href="mailto:re@e-stitch.jp" class="fv-info__link mail">お問い合わせ</a>
            <p class="fv-info__tel"><span>TEL.</span>027-225-5100</p>
            <p class="fv-info__text">営業時間/10:00～18:00<br>
              定休日：毎週水曜・日曜/祝、年末年始</p>
          </div>
        </div>
      </div>

      <div class="content">
        <div class="fv">
          <div class="flex">
            <p class="fv__catch">「大切にしてきた時間」を、<br>
              　納得の「価値」へ。</p>

            <div class="">
              <picture class="fv__img">
                <source
                  srcset="<?php echo get_template_directory_uri(); ?>/assets/img/uritai/fv-sp.png"
                  media="(max-width:760px)" />
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/uritai/fv-pc.png" alt="" />
              </picture>
              <p class="fv__lead">ひとつひとつの家に宿るストーリーを丁寧に紡ぎ、<br>
                豊富なデータと地域実績に基づいた最適なマッチングを。<br>
                私たちは、あなたの「売りたい」「買いたい」のその先にある安心を叶えます。</p>
            </div>
          </div>

          <div class="fv__float">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/uritai/float.png" alt="" />
          </div>

        </div>
      </div>
    </div>
  </section>

  <section class="section section-promise" id="promise">
    <div class="section-content row w1000">

      <div class="content">
        <div class="promise">

          <div class="flex">
            <div class="promise-texts">

              <div class="headline">
                <h2 class="headline__title">私たちの<span>約束</span></h2>
              </div>

              <p class="promise__text">私たちは「聴く」プロであり、「売る」プロであること。<br>
                不動産売買は、人生の大きな節目です。だからこそ、私たちは
                マニュアル通りの営業はいたしません。</p>
              <p class="promise__text">あなたの不安やこだわりを深く「聴く」こと。
                そして、最新の市場データと独自のネットワークで最適解を
                「導く」こと。</p>
              <p class="promise__text">感情に寄り添う温かさと、プロとしての鋭い視点。
                その両方を持って、対応いたします。</p>
            </div>

            <div class="promise__img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/uritai/promise.png" alt="">
            </div>
          </div>
          <a href="#" class="promise__link pc">スタッフ紹介</a>
          <div class="flex">
            <div class="promise-staff">
              <div class=" promise-staff__img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/uritai/staff01.jpg" alt="">
              </div>
              <p class="promise__text">不動産部スタッフ</p>
              <h3 class="promise__name">鳥居塚(とりいづか)</h3>
            </div>

            <div class="promise-staff">
              <div class=" promise-staff__img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/uritai/staff02.jpg" alt="">
              </div>
              <p class="promise__text">不動産部スタッフ</p>
              <h3 class="promise__name">阿部(あべ)</h3>
            </div>

            <div class="promise-staff">
              <div class=" promise-staff__img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/uritai/staff03.jpg" alt="">
              </div>
              <p class="promise__text">不動産部スタッフ</p>
              <h3 class="promise__name">渡邊(わたなべ)</h3>
            </div>
          </div>



        </div>
      </div>
    </div>
  </section>

  <section class="section section-strength" id="strength">
    <div class="section-content row w1000 flex">
      <div class="headline">
        <h2 class="headline__title">４つの<span>強み</span></h2>
        <p class="headline__text ">「想い」に寄り添う温かさと、結果を出すための確かな相談。</p>
      </div>
      <div class="content">
        <div class="strength">

          <section class="strength-sect">
            <div class="strength-texts">
              <p class="strength__catch">対話</p>
              <h3 class="strength__title">「条件」の前に「背景」を知るヒアリング</h3>
              <p class="strength__text">単なるスペックの確認ではなく、なぜ売りたいのか、どんな暮らしをしたいのか。<br>
                お客様の「背景」を理解することで、ミスマッチのない提案を実現します。</p>
            </div>
            <div class="strength__img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/uritai/strength01.png" alt="">
            </div>
          </section>

          <section class="strength-sect">
            <div class="strength-texts">
              <p class="strength__catch">繋ぐ力</p>
              <h3 class="strength__title">WEB＋対面で築いた信頼網</h3>
              <p class="strength__text">WEB掲載により全国から幅広い購入希望者へアプローチ。同時に、私たちは
                地元で一人ひとりのお客様と「対面」で向き合い、ネットには載らない深い
                信頼関係を築いてきました。</p>
            </div>
            <div class="strength__img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/uritai/strength02.png" alt="">
            </div>
          </section>

          <section class="strength-sect">
            <div class="strength-texts">
              <p class="strength__catch">相談</p>
              <h3 class="strength__title">「どうしよう」の段階で、相談できる安心を</h3>
              <p class="strength__text">結論が出ていなくても大丈夫です。不動産のプロである前に、一人の相談相手とし
                て。あなたの「大切にしたいこと」を軸に、住まいのこれからをプロデュースします。</p>
            </div>
            <div class="strength__img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/uritai/strength03.png" alt="">
            </div>
          </section>

          <section class="strength-sect">
            <div class="strength-texts">
              <p class="strength__catch">透明性</p>
              <h3 class="strength__title">しつこい勧誘なし、営業はいたしません</h3>
              <p class="strength__text">相談のハードルを徹底的に低く。まずは担当者と話して「信頼できるか」を確かめてください。強引な契約一切ありません。</p>
            </div>
            <div class="strength__img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/uritai/strength04.png" alt="">
            </div>
          </section>

        </div>
      </div>
    </div>
  </section>

  <section class="section section-flow" id="flow">
    <div class="section-content row w1000">
      <div class="headline">
        <h2 class="headline__title">ご依頼の流れ</h2>
      </div>
      <div class="content">
        <div class="flow">

          <div class="flow-step">
            <div class="flex">
              <div class="flow__img icon">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/uritai/flow01.png" alt="">
              </div>
              <div class="flow-texts">
                <h3 class="flow__title">はじめてのご相談</h3>
                <p class="flow__text">あなたの想いやご希望をお聞かせください。現在の市場動向をふまえた概算をお伝えします。</p>
              </div>
            </div>
            <div class="flow__img line">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/uritai/flow-line.png" alt="">
            </div>
          </div>

          <div class="flow-step">
            <div class="flex">
              <div class="flow__img icon">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/uritai/flow02.png" alt="">
              </div>
              <div class="flow-texts">
                <h3 class="flow__title">物件のポテンシャル調査</h3>
                <p class="flow__text">正確な価値を見出すため、専門スタッフが現地へ伺い、数値に表れない魅力まで細かく確認します。</p>
              </div>
            </div>
            <div class="flow__img line">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/uritai/flow-line.png" alt="">
            </div>
          </div>

          <div class="flow-step">
            <div class="flex">
              <div class="flow__img icon">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/uritai/flow03.png" alt="">
              </div>
              <div class="flow-texts">
                <h3 class="flow__title">販売プランのご提案</h3>
                <p class="flow__text">調査結果に基づき、ご納得いただける販売価格と、最適な売却スケジュールを一緒に組み立てます。</p>
              </div>
            </div>
            <div class="flow__img line">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/uritai/flow-line.png" alt="">
            </div>
          </div>

          <div class="flow-step">
            <div class="flex">
              <div class="flow__img icon">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/uritai/flow04.png" alt="">
              </div>
              <div class="flow-texts">
                <h3 class="flow__title">パートナー契約の締結</h3>
                <p class="flow__text">安心して募集をお任せいただくための媒介契約を締結します。ここから本格的な活動のスタートです。</p>
              </div>
            </div>
            <div class="flow__img line">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/uritai/flow-line.png" alt="">
            </div>
          </div>

          <div class="flow-step">
            <div class="flex">
              <div class="flow__img icon">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/uritai/flow05.png" alt="">
              </div>
              <div class="flow-texts">
                <h3 class="flow__title">売却活動</h3>
                <p class="flow__text">ネット広告や独自ネットワークを駆使し、購入希望者へアピール。内見の調整や立ち会いも全て代行します。</p>
              </div>
            </div>
            <div class="flow__img line">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/uritai/flow-line.png" alt="">
            </div>
          </div>

          <div class="flow-step">
            <div class="flex">
              <div class="flow__img icon">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/uritai/flow06.png" alt="">
              </div>
              <div class="flow-texts">
                <h3 class="flow__title">素敵なご縁の成立</h3>
                <p class="flow__text">購入希望者との条件調整を行い、双方が納得できる形で売買契約を交わします。</p>
              </div>
            </div>
            <div class="flow__img line">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/uritai/flow-line.png" alt="">
            </div>
          </div>

          <div class="flow-step">
            <div class="flex">
              <div class="flow__img icon">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/uritai/flow07.png" alt="">
              </div>
              <div class="flow-texts">
                <h3 class="flow__title">お手続きの完了</h3>
                <p class="flow__text">諸費用の精算やローンのお手続きなど、引き渡しに向けた事務作業を丁寧にサポートします。</p>
              </div>
            </div>
            <div class="flow__img line">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/uritai/flow-line.png" alt="">
            </div>
          </div>

          <div class="flow-step">
            <div class="flex">
              <div class="flow__img icon">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/uritai/flow08.png" alt="">
              </div>
              <div class="flow-texts">
                <h3 class="flow__title">お引き渡し</h3>
                <p class="flow__text">鍵の受け渡しを行い、無事にお取引完了です。新しい未来への第一歩を笑顔で迎えられるよう尽力します。</p>
              </div>
            </div>
          </div>

          <!-- <div class="flex flow-imgs">
            <div class="flow__img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/uritai/flow-img01.jpg" alt="">
            </div>
            <div class="flow__img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/uritai/flow-img02.jpg" alt="">
            </div>
            <div class="flow__img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/uritai/flow-img03.jpg" alt="">
            </div>
          </div> -->

        </div>
      </div>
    </div>
  </section>

  <section class="section section-regret" id="regret">
    <div class="section-content row w1000">
      <div class="headline">
        <h2 class="headline__title">後悔しない不動産売却のために。</h2>
        <p class="headline__text">～トラブルを防ぐための<span>7つのセルフチェック</span>～</p>
      </div>
      <div class="content">
        <div class="regret">

          <p class="regret__lead">売却活動を始めてから「こんなはずじゃなかった」と慌てないために、まずはご自身で以下のポイントを整理してみるのがおすすめです。</p>

          <ol class="regret-list">
            <li class="regret-item">
              <h3 class="regret-list__title"><i>1</i>「名義」や「借り物」の状況を確認する</h3>
              <p class="regret__lead">まずは、その物件が誰のものか、どんなルールで管理されているかを再確認しましょう。</p>
              <dl class="regret-descript">
                <div class="flex">
                  <dt class="regret__title">共有者の有無</dt>
                  <dd class="regret__detail">ご家族など、複数人で所有していませんか？全員の同意が売却の条件になります。</dd>
                </div>
                <div class="flex">
                  <dt class="regret__title">ローンの完済</dt>
                  <dd class="regret__detail">銀行のローンが残っている場合、売却と同時に完済し、銀行の「担保」を外す手続きが必要です。</dd>
                </div>
              </dl>
            </li>

            <li class="regret-item">
              <h3 class="regret-list__title"><i>2</i>「どこまでが自分の敷地か」をはっきりさせる</h3>
              <p class="regret__lead">一戸建てや土地の場合、お隣との境界線が一番のトラブルの種になります。</p>
              <dl class="regret-descript">
                <div class="flex">
                  <dt class="regret__title">境界標の確認</dt>
                  <dd class="regret__detail">敷地の四隅に「印」があるか、現地で実際に見てみましょう。</dd>
                </div>
                <div class="flex">
                  <dt class="regret__title">曖昧な場合</dt>
                  <dd class="regret__detail">境界がはっきりしないときは、事前にお隣の方と立ち会って確認作業を行う準備が必要です。</dd>
                </div>
              </dl>
            </li>

            <li class="regret-item">
              <h3 class="regret-list__title"><i>3</i>建物の「不具合」をリストアップする</h3>
              <p class="regret__lead">雨漏りや水回りの故障など、建物の調子が悪い部分は隠さずオープンにしましょう。</p>
              <dl class="regret-descript">
                <div class="flex">
                  <dt class="regret__title">現状の把握</dt>
                  <dd class="regret__detail">壊れたまま売るのか、それとも直してから売り出すのか。方針を事前に決めておくことで、値引き交渉の対策にもなります。</dd>
                </div>
              </dl>
            </li>

            <li class="regret-item">
              <h3 class="regret-list__title"><i>4</i>「古さ」への対策を立てる</h3>
              <p class="regret__lead">不具合ではなく、単純に「古い」「汚れている」といった見た目の問題です。</p>
              <dl class="regret-descript">
                <div class="flex">
                  <dt class="regret__title">リフォームの検討</dt>
                  <dd class="regret__detail">リフォームして価値を上げてから売るか、購入者に自由に直してもらう「現状渡し」にするか。</dd>
                </div>
              </dl>
            </li>

            <li class="regret-item">
              <h3 class="regret-list__title"><i>5</i>「手元に残るお金」を計算する</h3>
              <p class="regret__lead">売却価格がそのまま全額お財布に入るわけではありません。事前に「諸経費」を引いた実質の手取り額を把握しておきましょう。</p>
              <dl class="regret-descript">
                <div class="flex">
                  <dt class="regret__title">費用の内訳</dt>
                  <dd class="regret__detail">不動産会社への仲介手数料、契約書の印紙代、ローンの担保を外すための登記費用などがかかります。</dd>
                </div>
                <div class="flex">
                  <dt class="regret__title">概算の確認</dt>
                  <dd class="regret__detail">「結局いくら残るのか」を早めにシミュレーションしておくことが、次の住まい探しや資金計画の鍵となります。</dd>
                </div>
              </dl>
            </li>

            <li class="regret-item">
              <h3 class="regret-list__title"><i>6</i>「荷物」の片付け方針を決める</h3>
              <p class="regret__lead">家の中にある家具や家電、不用品をどう処理するかは、トラブルになりやすいポイントです。</p>
              <dl class="regret-descript">
                <div class="flex">
                  <dt class="regret__title">誰が処分するか</dt>
                  <dd class="regret__detail">「すべて処分して空き家にする」のか、「使えるものはそのまま残して（現状渡し）売る」のかを明確にします。</dd>
                </div>
                <div class="flex">
                  <dt class="regret__title">費用の負担</dt>
                  <dd class="regret__detail">専門業者に片付けを頼む場合の費用負担についても、あらかじめ方針を決めておくとスムーズです。</dd>
                </div>
              </dl>
            </li>

            <li class="regret-item">
              <h3 class="regret-list__title"><i>7</i>売却後の「税金」に備える</h3>
              <p class="regret__lead">家を売って利益が出た場合、翌年に「譲渡所得税」という税金がかかることがあります。</p>
              <dl class="regret-descript">
                <div class="flex">
                  <dt class="regret__title">特例の活用</dt>
                  <dd class="regret__detail">マイホームの売却であれば「3000万円の特別控除」など、税金が大幅に安くなる仕組みがあります。</dd>
                </div>
                <div class="flex">
                  <dt class="regret__title">事前チェック</dt>
                  <dd class="regret__detail">自分がどの特例を使えるのか、事前にシミュレーションしておくことで、売却後の急な出費に慌てずに済みます。</dd>
                </div>
              </dl>
            </li>
          </ol>

        </div>
      </div>
    </div>
  </section>

  <section class="section section-contact" id="contact">
    <div class="section-content row w1000 flex">
      <div class="headline">
        <h2 class="headline__title">売却の<span>ご相談</span></h2>
        <p class="headline__text pc">ご依頼・ご相談はこちらから</p>
      </div>
      <div class="content">
        <div class="contact">
          <?php echo do_shortcode('[contact-form-7 id="a181de0" title="uritai"]'); ?>
        </div>
      </div>
    </div>
  </section>

  <section class="section section-map" id="map">
    <div class="section-content ">
      <div class="headline">
        <h2 class="headline__title">アクセスマップ</h2>
      </div>
      <div class="content">
        <div class="map">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d955.2733299368507!2d139.11224783288827!3d36.357298640033!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601eede57cd1f639%3A0xfe0272dbb6d77580!2z5qCq5byP5Lya56S-44K544OG44OD44OB!5e0!3m2!1sja!2sjp!4v1770891394104!5m2!1sja!2sjp" width="" height="" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    </div>
  </section>

  <section class="section section-lp_footer" id="lp_footer">
    <div class="section-content row w1000 ">
      <div class="headline">
        <h2 class="headline__title">株式会社ステッチ</h2>
        <p class="headline__address">株式会社ステッチ　不動産部<br>
          〒371-0812 群馬県前橋市広瀬町3-2-15</p>
      </div>
      <div class="content">
        <div class="lp_footer">

          <div class="flex">
            <p class="lp_footer__text">お電話でのお問い合わせ</p>
            <p class="lp_footer__tel"><span>TEL.</span>027-225-5100</p>
          </div>

          <div class="flex">
            <p class="lp_footer__time">営業時間/10:00～18:00</p>
            <p class="lp_footer__close">定休日：毎週水曜・日曜/ 祝日、年末年始</p>
          </div>

          <p class="lp_footer__info">群馬県知事(1)第8001号
            (一社)群馬県宅地建物取引業協会会員　(公社)全国宅地建物取引業保証協会会員　(公社)首都圏不動産公正取引協議会加盟</p>
          <p class="lp_footer__copy"><a href="https://e-stitch.jp/" target="_blank">https://e-stitch.jp/</a><br class="sp">　©Copyright STITCH CO.,Ltd. All rights reserv</p>

        </div>
      </div>
    </div>
  </section>

  <?php get_footer(); ?>