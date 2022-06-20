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
        <h2 class="p-sub-hero__title">RECRUIT</h2>
        <div class="p-sub-hero__subtitle">採用情報</div>
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

  <main class="l-contents l-contents--page-recruit" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/bg-geometry.png');">
    <section class="p-recruit-message l-section">
      <div class="p-recruit-message__heading">
        <h3 class="p-recruit-message__title">
          Enjoy<br class="sp-only" />
          Creation for<br class="sp-only" />
          Client
        </h3>
        <div class="p-recruit-message__subtitle">
          楽しむ心が良いモノを生む
        </div>
      </div>
      <div class="p-recruit-message__body">
        <div class="p-recruit-message__text">
          <p>
            心を弾ましながら<br />
            夢いっぱいのサイトを作ろう！<br />
            お客様も自分もみんなが幸せになれるように
          </p>
        </div>
      </div>

      <div class="p-recruit-message__img-wrapper">
        <img class="p-recruit-message__img" src="<?php echo get_template_directory_uri(); ?>/img/recruit01.jpg" alt="recruit01" />
      </div>
    </section>

    <section class="p-jop-list l-section">
      <div class="p-jop-list__inner l-inner">
        <div class="c-heading-secondary">募集中の職種</div>
        <div class="p-jop-list__table">
          <div class="p-jop-list__heading">Webデザイナー</div>
          <table class="c-table">
            <tbody>
              <tr>
                <th>雇用形態</th>
                <td>正社員</td>
              </tr>
              <tr>
                <th>給与</th>
                <td>400万円〜600万円（経験・能力を考慮のうえ優遇）</td>
              </tr>
              <tr>
                <th>仕事内容</th>
                <td>
                  Webサイトの制作。サイトのデザインとコーディングを担当していただきます。
                </td>
              </tr>
              <tr>
                <th>勤務時間</th>
                <td>10:00 〜 19:00（実働8時間、休憩1時間）</td>
              </tr>
              <tr>
                <th>応募資格</th>
                <td>
                  <p>
                    PhotoshopやXDなどのデザインツールの使い方を理解し、コーディングの基礎スキルがある方。
                    実務未経験でも学校や独学で学習した方を歓迎します。
                  </p>
                  <ul>
                    <li>デザインやコーディングを楽しめる方</li>
                    <li>
                      常にアンテナを張って積極的にトレンドや最新の技術を取り入れる方
                    </li>
                    <li>お客様と一緒に楽しみながら高い目的を目指せる方</li>
                  </ul>
                </td>
              </tr>
            </tbody>
          </table>

          <div class="p-jop-list__link">
            <a href="#" class="c-btn">応募する</a>
            <p>求人サイトに推移します</p>
          </div>
        </div>
      </div>
    </section>

    <section class="p-recruit-video">
      <div class="l-inner">
        <div class="p-recruit-video__heading">
          <div class="c-heading-secondary">社内ムービー</div>
          <div class="p-recruit-video__video">
            <div class="video">
              <iframe width="560" height="315" src="https://www.youtube.com/embed/VwbnZHvQ3CE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
          <a href="contact.html" class="c-btn">more</a>
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