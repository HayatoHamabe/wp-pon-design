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
        <h2 class="p-sub-hero__title">news</h2>
        <div class="p-sub-hero__subtitle">お知らせ</div>
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
    <section class="p-news-list-wrapper l-section">
      <div class="p-news-list-wrapper-inner l-inner">
        <div class="p-news-list__body">
          <ul class="p-news-list__list">
            <?php
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $the_query = new WP_Query(array(
              'post_status' => 'publish',
              'paged' => $paged,
              'posts_per_page' => 15, // 表示件数
              'orderby'     => 'date',
              'order' => 'DESC'
            ));
            if ($the_query->have_posts()) : ?>
              <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                <li class="p-news-list__item">
                  <div class="p-news-list__heading">
                    <time datetime="<?php echo get_the_date("Y-m-d"); ?>" class="p-news-list__date"><?php echo get_the_date("Y.m.d"); ?></time>
                    <div class="p-news-list__label">
                      <?php $category = get_the_category(); ?>
                      <span class="c-label-category"><?php echo $category[0]->cat_name ?></span>
                    </div>
                  </div>
                  <div class="p-new-list__body">
                    <a href="<?php echo get_the_permalink(); ?>" class="p-news-list__link">
                      <!-- 文字数 20 文字以上のとき、... で省略表示する -->
                      <?php
                      if (mb_strlen($post->post_title) > 20) {
                        $title = mb_substr($post->post_title, 0, 20);
                        echo $title . '...';
                      } else {
                        echo $post->post_title;
                      }
                      ?>
                    </a>
                  </div>
                </li>
              <?php endwhile; ?>
            <?php endif; ?>
            <!-- pagenation -->
            <div class="p-pagination">
              <?php
              if ($the_query->max_num_pages > 1) {
                echo paginate_links([
                  'base' => get_pagenum_link(1) . '%_%',
                  'format' => 'page/%#%/',
                  'current' => max(1, $paged),
                  'mid_size' => 1,
                  'total' => $the_query->max_num_pages,
                  'prev_next' => false,
                ]);
              }
              wp_reset_postdata();
              ?>
            </div><!-- /pagenation -->
          </ul>
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