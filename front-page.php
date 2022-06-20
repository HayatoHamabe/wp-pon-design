<!DOCTYPE html>
<html lang="ja">

<head>
  <?php get_header(); ?>
</head>

<body id="body">
  <!-- header -->
  <?php get_template_part('/common/header') ?>

  <div class="p-hero">
    <div class="p-hero__inner">
      <div class="p-hero__heading">
        <div class="p-hero__title">WEB DESIGN SPECIALIST</div>
        <div class="p-hero__subtitle">
          お客様の夢を叶える<br class="sp-only" />
          Webサイトを制作
        </div>
      </div>
      <div class="p-hero__link">
        <a href="contact.html" class="c-btn c-btn__transparent">contact</a>
      </div>
    </div>

    <span class="p-hero__scroll">scroll</span>
  </div>

  <main class="l-contents">
    <section class="p-news l-section">
      <div class="p-news__inner l-inner">
        <div class="p-news__heading">
          <h2 class="c-heading-primary">
            news
            <span class="c-heading-primary__sub">お知らせ</span>
          </h2>
        </div>
        <div class="p-news__body">
          <div class="p-news-list">
            <ul class="p-news-list__list">
              <?php while (have_posts()) : the_post(); ?>
                <li class="p-news-list__item">
                  <div class="p-news-list__heading">
                    <time datetime="<?php echo get_the_date("Y-m-d"); ?>" class="p-news-list__date"><?php echo get_the_date("Y.m.d"); ?></time>
                    <div class="p-news-list__label">
                      <?php $category = get_the_category(); ?>
                      <span class="c-label-category"><?php echo $category[0]->cat_name ?></span>
                    </div>
                  </div>
                  <div class="p-new-list__body">
                    <a href="<?php the_permalink(); ?>" class="p-news-list__link">
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
            </ul>
          </div>
        </div>
      </div>
    </section>

    <section class="p-service l-section">
      <div class="p-service__inner l-inner">
        <div class="p-service__heading">
          <h2 class="c-heading-primary">
            service
            <span class="c-heading-primary__sub">事業内容</span>
          </h2>
        </div>

        <div class="p-service__body">
          <div class="c-card-wrapper">
            <div class="c-card">
              <div class="c-card__img-wrapper">
                <img src="<?php echo get_template_directory_uri(); ?>/img/service01.jpg" alt="" class="c-card__img" />
              </div>
              <div class="c-card__body">
                <div class="c-card__title">Webサイト制作</div>
                <div class="c-card__text">
                  新規サイトの制作はもちろんサイトリニューアルやランディングページの制作も可能です。
                </div>
              </div>
            </div>
            <div class="c-card">
              <div class="c-card__img-wrapper">
                <img src="<?php echo get_template_directory_uri(); ?>/img/service02.jpg" alt="" class="c-card__img" />
              </div>
              <div class="c-card__body">
                <div class="c-card__title">Webサイト運用</div>
                <div class="c-card__text">
                  サイトの更新作業や独自のアクセス解析に基づいたサイト改善のご提案をいたします。
                </div>
              </div>
            </div>
            <div class="c-card">
              <div class="c-card__img-wrapper">
                <img src="<?php echo get_template_directory_uri(); ?>/img/service03.jpg" alt="" class="c-card__img" />
              </div>
              <div class="c-card__body">
                <div class="c-card__title">アプリ開発</div>
                <div class="c-card__text">
                  スマートフォンアプリ開発の他、Vue.jsやReactによるWebアプリの開発が可能です。
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="p-service__link">
          <a href="service.html" class="c-btn">more</a>
        </div>
      </div>
    </section>

    <section class="p-works l-section">
      <div class="p-works__inner l-inner">
        <div class="p-works__img-wrapper">
          <div class="swiper">
            <!-- 必要に応じたwrapper -->
            <div class="swiper-wrapper">
              <!-- スライド -->
              <div class="swiper-slide">
                <img src="<?php echo get_template_directory_uri(); ?>/img/works/smoothiesta.jpg" alt="" class="p-works__img" />
              </div>
              <div class="swiper-slide">
                <img src="<?php echo get_template_directory_uri(); ?>/img/works/web-conference.jpg" alt="" class="p-works__img" />
              </div>
              <div class="swiper-slide">
                <img src="<?php echo get_template_directory_uri(); ?>/img/works/lamina.jpg" alt="" class="p-works__img" />
              </div>
            </div>
            <!-- <div class="swiper-pagenation"></div> -->
            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
          </div>
        </div>

        <div class="p-works__desc">
          <div class="p-works__heading">
            <h2 class="c-heading-primary">
              works
              <span class="c-heading-primary__sub">制作実績</span>
            </h2>
          </div>
          <div class="p-works__text">
            様々なジャンルのWebサイト制作が可能です。<br />
            ご購入やお申込み数の増加などを実現します！
          </div>

          <div class="p-works__link">
            <a href="works.html" class="c-btn">more</a>
          </div>
        </div>
      </div>
    </section>

    <section class="p-company l-section">
      <div class="p-company__inner l-inner">
        <div class="p-company__heading">
          <h2 class="c-heading-primary">
            company
            <span class="c-heading-primary__sub">制作実績</span>
          </h2>
        </div>

        <div class="p-company__body">
          <span class="p-company__message-underline">
            サイトのゴール = <br class="sp-only" />
            夢を叶えること
          </span>
        </div>

        <div class="p-company__text">
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

        <div class="p-company__link">
          <a href="company.html" class="c-btn">more</a>
        </div>
      </div>
    </section>

    <section class="p-recruit l-section">
      <div class="p-recruit__inner l-inner">
        <div class="p-recruit__desc">
          <div class="p-recruit__desc-inner">
            <div class="p-recruit__heading">
              <h2 class="c-heading-primary">
                recruit
                <span class="c-heading-primary__sub">採用情報</span>
              </h2>
            </div>
            <div class="p-recruit__text">
              <p>私たちと一緒に働きませんか？</p>
            </div>
            <div class="p-recruit__link">
              <a href="recruit.html" class="c-btn">more</a>
            </div>
          </div>
        </div>

        <div class="p-recruit__img-wrapper" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/recruit.jpg')">
          <!-- <img
              src="<?php echo get_template_directory_uri(); ?>/img/recruit.jpg"
              alt="recruit"
              class="p-recruit__img-wrapper"
            /> -->
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
  <?php get_footer(); ?>
</body>

</html>