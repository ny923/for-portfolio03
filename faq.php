<?php
/*
  Template Name: faq
*/
?>
<?php get_header(); ?>

<!-- faq用 -->
<main class="site-main faq" id="site-main">

  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

      <section class="section section-hero lower" id="hero">
        <div class="section-content">
          <div class="content">
            <div class="hero">

              <h1 class="hero__catch"><?php the_title(); ?></h1>
            </div>

          </div>
        </div>
      </section>

      <section class="section section-column" id="section-column">
        <div class="section-content row w960">
          <div class="headline">

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
          </div>

          <div class="content">
            <div class="column">

              <!-- 追加日／更新日
          <p class="column__time"><time datetime="<?php the_time(); ?>"><?php the_time('Y/m/d'); ?></time></p>
          <p class="column__time"><time datetime="<?php the_modified_date() ?>"><?php the_modified_date('Y/m/d') ?></time></p>
          <div class="column__category"><?php the_category(); ?></div>
          -->

              <!-- 素材あれば -->
              <!-- <div class="column__thumbnail">
                <?php the_post_thumbnail(); ?>
              </div> -->

              <section class="section faq-wrap">
                <h3 class="faq__question">不動産を売りたいとき、まず何から始めたらいいですか？</h3>
                <p class="faq__answer">まずはお家が「今どのくらいの価値があるのか」を知ることからスタートしましょう！「できるだけ高く売りたい」というお気持ちはもっともですが、地域の相場や築年数とかけ離れた価格では、なかなか買い手が見つかりません。まずは不動産会社に査定を依頼して、プロの目から見た売却価格の目安を確認するのが第一歩ですよ。</p>
              </section>

              <section class="section faq-wrap">
                <h3 class="faq__question">査定について具体的にどのような事をするのか教えてください。</h3>
                <p class="faq__answer">物件査定とは、不動産の市場価値を算出することです。データに基づき概算を出す「<b>机上査定</b>」と、担当者が現地で日当たりや建物の状態を確認する「<b>訪問査定</b>」の2段階があります。査定額はあくまで売却予想価格のため、提示額の高さだけでなく、納得感のある根拠を示す会社を選ぶのがコツです。</p>
              </section>

              <section class="section faq-wrap">
                <h3 class="faq__question">今の家に住みながら、売却活動を進めることはできますか？</h3>
                <p class="faq__answer">はい、もちろん大丈夫です！実際に、多くの方が今の生活を送りながら売却を進めていらっしゃいますよ。購入を検討されている方が「中を見たい」と希望された際は、事前にお客様へご連絡したうえでご案内させていただきます。その際は、ぜひお家の中を見せていただけるようご協力をお願いいたします。</p>
              </section>

              <section class="section faq-wrap">
                <h3 class="faq__question">家を売っていることを、近所の人に内緒にしたいのですが……。</h3>
                <p class="faq__answer">どうぞご安心ください。チラシ広告などを行わずに、条件の合う方だけをこっそりお探しすることも可能です。「知られずに売りたい」というご事情がある場合は、最初にご相談いただければ、周囲に配慮して柔軟に対応させていただきます。まずは遠慮なく本音を聞かせてくださいね。</p>
              </section>

              <section class="section faq-wrap">
                <h3 class="faq__question">売却代金は、いつごろ受け取れるのでしょうか？</h3>
                <p class="faq__answer">一般的には「契約時」と「お引渡し時」の2回に分けて支払われます。まず売買契約を結ぶときに、手付金として売却価格の5〜10％ほどを。そして最後のお引渡しのときに、残りの全額を受け取る形がスムーズですよ。私たちが売主様と買主様の間に立ち、スケジュールや金額の調整をしっかりサポートしますのでご安心くださいね。</p>
              </section>

              <section class="section faq-wrap">
                <h3 class="faq__question">売却をお願いした場合、どんな広告や販売活動をしてくれますか？</h3>
                <p class="faq__answer">「ステッチ」にすでにご相談いただいているお客様へのご紹介はもちろん、近隣へのチラシ配布や住宅雑誌への掲載、実際に家を見ていただくオープンハウスの開催など、幅広く活動します！さらに、センチュリー21の大きなネットワークを活かして、ホームページなどのネット広告にも力を入れ、全国から購入希望の方をお探しします。</p>
              </section>

              <section class="section faq-wrap">
                <h3 class="faq__question">広告や宣伝にかかる費用は、別途用意する必要がありますか？</h3>
                <p class="faq__answer">基本的には、広告費を別途いただくことはありませんのでご安心ください！ただし、「特別な枠で大きな広告を出したい」といったお客様からの個別のご要望がある場合に限り、実費をいただくことがございます。その際も、事前になぜ必要なのかを丁寧にご説明し、納得いただいてから進めるようにしています。</p>
              </section>

              <section class="section faq-wrap">
                <h3 class="faq__question">家がかなり傷んでいるのですが、売る前にリフォームした方がいいですか？</h3>
                <p class="faq__answer">お家の状態にもよりますが、リフォームやリノベーションで新築のような魅力をプラスすることで、パッと見の印象が良くなり、早く・高く売れるケースもたくさんあります。費用の立て替え相談なども承っていますので、まずは「そのまま売るか、直して売るか」をプロの目線で一緒に検討してみましょう！</p>
              </section>

              <section class="section faq-wrap">
                <h3 class="faq__question">使わなくなった家具があるのですが、そのままにしておいても大丈夫ですか？</h3>
                <p class="faq__answer">不動産の売却は、基本的にお家を「空」の状態にしてお引渡しするのがルールとなっています。そのため、家具などは売主様の方で処分をお願いしています。引越し業者さんに引き取ってもらったり、リサイクルショップを活用したりする方法がありますが、もし「どう処分すればいいかわからない……」とお困りのときは、お気軽にご相談くださいね。</p>
              </section>

              <section class="section faq-wrap">
                <h3 class="faq__question">次の家ができる前に今の自宅が売れてしまったら、どうすればいいでしょう？</h3>
                <p class="faq__answer">そうですよね、タイミングは気になるところだと思います。その場合は、仮住まいを用意したり、買主様にお引越し時期を少し待ってもらったりと、状況に合わせてベストな方法を調整していきます。スケジュールの管理はとても大切ですので、新しいお住まいの状況を伺いながら、無理のないプランを一緒に立てていきましょう！</p>
              </section>

              <section class="section faq-wrap">
                <h3 class="faq__question">希望の条件を伝えたら、理想の物件を探してもらえますか？</h3>
                <p class="faq__answer">もちろんです！「こんな暮らしがしたい」「ここは譲れない」といったこだわりを、ぜひ詳しく聞かせてください。お客様のご要望にぴったりの物件を、私たちが全力でお探しします！</p>
              </section>

              <section class="section faq-wrap">
                <h3 class="faq__question">ローンのことも、詳しく相談に乗ってもらえますか？</h3>
                <p class="faq__answer">はい、喜んで承ります！数ある金融機関の中から、お客様の資金計画にぴったりのプランをご提案します。新しい生活が始まってから「支払いが苦しい……」なんてことにならないよう、無理のない返済シミュレーションも一緒に行います。どんなに些細な不安でも、お気軽にお話しくださいね。</p>
              </section>

              <section class="section faq-wrap">
                <h3 class="faq__question">家を購入してから実際に入居できるまで、どれくらいかかりますか？</h3>
                <p class="faq__answer">新築物件や、すでに空き家になっている中古物件なら、住宅ローンの手続きや代金のお支払いが終わればすぐにお引渡し・ご入居が可能です！一方で、売主様がまだ住んでいらっしゃる場合は、売主様のお引越し時期に合わせることになるので、物件ごとにスケジュールが異なります。具体的な日程は、私たちが間に立ってしっかり調整させていただきますね。</p>
              </section>

              <section class="section faq-wrap">
                <h3 class="faq__question">マイホームを買うのに、頭金はどれくらい用意すべきでしょうか？</h3>
                <p class="faq__answer">「まずは頭金を貯めなきゃ」と思われがちですが、今は諸費用までカバーできるローンもあるので、頭金ゼロで購入される方もたくさんいらっしゃいますよ。今の低金利時代なら、時間をかけて貯金するよりも、早めにローンを組んで今の家賃を支払いに回すというのも賢い選択肢の一つです。無理のない返済プランを一緒にシミュレーションしてみましょう！</p>
              </section>

              <section class="section faq-wrap">
                <h3 class="faq__question">購入の手続きって、具体的にどんなことをするのですか？</h3>
                <p class="faq__answer">契約からお引渡しまでの間には、ローンの審査や銀行との契約（金銭消費貸借契約）など、大切なお手続きがいくつかあります。さらに、入居後も住宅ローン控除のための確定申告や、税金の軽減手続きなど、実はやることが盛りだくさん！「難しそう……」と感じるかもしれませんが、すべて私たちが寄り添ってサポートしますので、一つずつ進めていきましょう。わからないことはいつでも聞いてくださいね。</p>
              </section>

              <section class="section faq-wrap">
                <h3 class="faq__question">過去に債務整理などを経験していても、ローンの相談はできますか？</h3>
                <p class="faq__answer">当社では提携しているローンもございますので、まずは諦めずに一度ご相談ください！お客様の現在の状況を伺いながら、どのような形でお手伝いができるか一緒に考えていければと思います。</p>
              </section>

              <section class="section faq-wrap">
                <h3 class="faq__question">物件を売りに出したら、だいたいどれくらいの期間で売れるものですか？</h3>
                <p class="faq__answer">これは物件によって本当にさまざまです。運良く1週間ほどで決まることもあれば、半年〜1年以上じっくり時間をかけるケースも。私たちは「ただ待つ」のではなく、常に「どうすればもっと魅力が伝わるか」という戦略を売主様としっかり話し合いながら、二人三脚で成約を目指します！</p>
              </section>

              <section class="section faq-wrap">
                <h3 class="faq__question">なかなか買い手が見つからないときは、やっぱり値下げするしかない……？</h3>
                <p class="faq__answer">価格を下げるのも一つの方法ですが、それだけが正解ではありません。写真の撮り方を変えたり、アピールするポイントを絞り直したり、あるいはちょっとしたリフォームで印象をガラリと変えることで、急に買い手が見つかることもよくあります。状況を見極めながら、その時にベストな対策を私たちからご提案させていただきますね。</p>
              </section>

              <section class="section faq-wrap">
                <h3 class="faq__question">家を見学に来る方がいるとき、事前にやっておくべきことはありますか？</h3>
                <p class="faq__answer">見学される方は「ここでどんな生活ができるかな？」と想像しながらお家を見られます。ですので、お部屋の整理整頓や簡単な水回りのお掃除をしておくだけでも、印象がグッと良くなりますよ！また、設備の取扱説明書や図面などがすぐに見られるよう準備しておくと、安心感につながって喜ばれます。</p>
              </section>

              <section class="section faq-wrap">
                <h3 class="faq__question">対応エリアはどのあたりまでですか？</h3>
                <p class="faq__answer">私たちは熊本市内を中心に、熊本県全域を幅広くカバーしています！あえて狭いエリアに絞らないのは、お客様の「理想」を叶えたいから。たとえば、第一希望のエリアで良い物件がなくても、少し範囲を広げるだけで、驚くほど条件にぴったりな家が見つかることもあるんです。熊本の街を隅々まで知っている私たちだからこそできる、「点」ではなく「面」での柔軟なご提案で、お客様の不安をワクワクに変えていきたいと思っています！</p>
              </section>



            </div>
          </div>
        </div>
      </section>

  <?php endwhile;
  endif; ?>
  <?php get_footer(); ?>