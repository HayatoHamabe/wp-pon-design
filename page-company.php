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
        <h2 class="p-sub-hero__title">COMPANY</h2>
        <div class="p-sub-hero__subtitle">私たちについて</div>
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
    <section class="p-greeting l-section" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/bg-circle.png'),url('<?php echo get_template_directory_uri(); ?>/img/bg-face.png')">
      <div class="p-greeting__inner l-inner">
        <div class="p-greeting__heading">
          <div class="c-heading-secondary">メッセージ</div>
          <span class="p-greeting__message-underline">
            サイトのゴール = <br class="sp-only" />
            夢を叶えること
          </span>
        </div>

        <div class="p-greeting__text">
          <p>
            お客様の夢を叶えること。<br />
            それがWebサイトのゴールであり、<br class="sp-only" />
            私たちが目指すことです。<br />
            だからこそちゃんと成果を出すサイトを<br class="sp-only" />
            全力でお作りします。<br />
            お客様の笑顔を見たい。<br />
            夢を実現する手助けをさせてください。
          </p>
        </div>
        <div class="p-greeting__ceo">
          <div class="c-media">
            <div class="c-media__img-wrapper">
              <img class="c-media__img" src="<?php echo get_template_directory_uri(); ?>/img/ceo.jpg" alt="CEO" />
            </div>
            <div class="c-media__body">
              <div class="c-media__text">
                <p>
                  テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります<br /><br />
                  テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります<br /><br />
                  代表取締役　田中　正栄
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="p-company-info l-section">
      <div class="p-company-info__inner l-inner">
        <div class="p-company-info__table">
          <div class="c-heading-secondary">会社概要</div>
          <table class="c-table">
            <tbody>
              <tr>
                <th>社名</th>
                <td>株式会社PON DESIGN</td>
              </tr>
              <tr>
                <th>設立</th>
                <td>2020.01.10</td>
              </tr>
              <tr>
                <th>代表取締役</th>
                <td>田中　正栄</td>
              </tr>
              <tr>
                <th>資本金</th>
                <td>1,000,000円</td>
              </tr>
              <tr>
                <th>所在地</th>
                <td>〒123-4567 東京都千代田区 ポンビルディング 606</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="p-company-info-access">
          <div class="p-access">
            <div class="p-access__map">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6481.634633805209!2d139.76549865!3d35.681499949999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188bf97912d02d%3A0xee1220ee8337117!2z44CSMTAwLTAwMDUg5p2x5Lqs6YO95Y2D5Luj55Sw5Yy65Li444Gu5YaF77yR5LiB55uu!5e0!3m2!1sja!2sjp!4v1654004405987!5m2!1sja!2sjp" width="100%" height="400" style="border: 0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="p-access__link">
              <a href="https://goo.gl/maps/4m5shCrr18h7NC4j8">Google mapで見る</a>
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