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
        <h2 class="p-sub-hero__title">CONTACT</h2>
        <div class="p-sub-hero__subtitle">お問い合わせ</div>
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
    <section class="p-contact-form l-section">
      <div class="p-contact-form__inner l-inner">
        <div class="p-contact-form__lead">
          Webサイトの制作のご依頼やお見積りなど、<br class="sp-only" />お気軽にご相談ください。
        </div>

        <div class="p-contact-form__body">
          <div class="c-form">
            <?php echo apply_shortcodes('[contact-form-7 id="2311" title="お問い合わせ"]'); ?>
          </div>
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