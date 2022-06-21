<!DOCTYPE html>
<html lang="ja">

<head>
  <?php get_header(); ?>
</head>

<body id="body">
  <!-- header -->
  <?php get_template_part('/common/header') ?>

  <div class="p-sub-hero">
    <div class="p-sub-hero__inner">
      <div class="p-sub-hero__heading">
        <h2 class="p-sub-hero__title">SERVICE</h2>
        <div class="p-sub-hero__subtitle">事業内容</div>
      </div>
    </div>
  </div>

  <div class="p-breadcrumb">
    <div class="l-inner">
      <ol class="p-breadcrumb-list" itemscope itemype="https://schema.org/BreadcrumbList">
        <?php mytheme_breadcrumb(); ?>
      </ol>
    </div>
  </div>

  <main class="l-contents">
    <section class="p-service-list-wrapper l-section">
      <div class="p-service-list-wrapper l-inner">
        <div class="p-service-list">
          <div class="c-media">
            <div class="c-media__img-wrapper">
              <img class="c-media__img" src="<?php echo get_template_directory_uri(); ?>/img/service01.jpg" alt="" />
            </div>
            <div class="c-media__body">
              <h3 class="c-media__title">Webサイト制作</h3>
              <div class="c-media__text">
                <p>
                  新規サイトはもちろん、サイトリニューアルやランディングページ制作も承っております。
                  サイトのゴールはお客様の夢や目的を実現することです。そのためにまずはしっかりとお話をうかがい、サイトに必要な要素を洗い出します。その後、ワイヤーフレーム（サイトのレイアウト）の作成、デザインの制作、コーディングと進みます。制作の過程でお客様とのお打ち合わせを数回実施させていただき、ご要望とご意見を反映しながらサイトを制作していきます。
                </p>
              </div>
            </div>
          </div>
          <div class="c-media">
            <div class="c-media__img-wrapper">
              <img class="c-media__img" src="<?php echo get_template_directory_uri(); ?>/img/service02.jpg" alt="" />
            </div>
            <div class="c-media__body">
              <h3 class="c-media__title">Webサイト運用</h3>
              <div class="c-media__text">
                <p>
                  サイトの更新作業や独自のアクセス解析に基づいたサイト改善のご提案が可能です。
                  日々の面倒な更新作業は私たちにおまかせください。テキストの修正やリンクの張り替えなどの簡単な作業から、特集ページやバナーのデザインまで可能です。
                  また、アクセス解析によるサイト改善も承っております。ご購入やお申込数などにお悩みでしたらぜひご相談ください。サイトの課題を発見し、改善案のご提案から実装までワンストップで対応いたします。
                </p>
              </div>
            </div>
          </div>
          <div class="c-media">
            <div class="c-media__img-wrapper">
              <img class="c-media__img" src="<?php echo get_template_directory_uri(); ?>/img/service03.jpg" alt="" />
            </div>
            <div class="c-media__body">
              <h3 class="c-media__title">アプリ開発</h3>
              <div class="c-media__text">
                <p>
                  スマートフォンアプリ開発の他、Vue.jsやReactによるWebアプリの開発が可能です。開発力のみならず、充実したユーザー体験をもたらすためのUXデザインにも自信があります。作って終わり、ではなくユーザーに愛されるUI（ユーザーインターフェース）を実現し、アプリ開発によるお客様の事業の目的を達成する推進力となることを目指します。
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="p-contact">
      <div class="p-contact__inner l-inner">
        <div class="p-contact__heading">
          <h2 class="c-heading-primary">
            contact
            <span class="c-heading-primary__sub">お問い合わせ</span>
          </h2>
        </div>
        <div class="p-contact__body">
          <div class="p-contact__text">
            <p>
              Webサイトの制作のご依頼やお見積りなど、お気軽にご相談ください。
            </p>
          </div>
        </div>
        <div class="p-contact__link">
          <a href="<?php echo home_url('contact') ?>" class="c-btn">more</a>
        </div>
      </div>
    </section>
  </main>

  <!-- import footer -->
  <?php get_template_part('/common/footer'); ?>

  <!-- import page-top-link -->
  <div id="page-top-link"></div>
  <?php get_footer(); ?>
</body>

</html>