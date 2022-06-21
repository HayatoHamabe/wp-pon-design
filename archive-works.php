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
        <h2 class="p-sub-hero__title">WORKS</h2>
        <div class="p-sub-hero__subtitle">制作実績</div>
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
    <section class="p-works-list-wrapper l-section">
      <div class="p-works-list l-inner">
        <?php while (have_posts()) : the_post() ?>
          <div class="c-card">
            <div class="p-works-list__img-wrapper">
              <img class="p-works-list__img" src="<?php the_field('works-image'); ?>" alt="Smoothiesta" />
            </div>
            <div class="p-works-list__text"><?php the_field('works-name'); ?> 様</div>
          </div>
        <?php endwhile; ?>
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