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
    <section class="p-article-wrapper l-section">
      <div class="p-article-wrapper__inner l-inner">
        <article class="article">
          <div class="p-post">
            <div class="p-post__head">
              <div class="p-post__title">
                <?php the_title(); ?>
              </div>
              <div class="p-post__info">
                <time class="p-post__date"><time datetime="<?php echo get_the_date("Y-m-d"); ?>" class="p-news-list__date"><?php echo get_the_date("Y.m.d"); ?></time></time>
                <?php $category = get_the_category(); ?>
                <div class="c-label-category">
                  <?php echo $category[0]->cat_name ?>
                </div>
              </div>
            </div>
            <div class="p-post__body">
              <div class="p-post__img-wrapper">
                <img src="<?php the_field('news-article'); ?>" alt="" />
              </div>
              <p>
                <?php the_field('top-text'); ?>
              </p>
              <h3><?php the_field('headline'); ?></h3>
              <p>
                <?php the_field('headline-text'); ?>
              </p>
              <h4><?php the_field('subheadline'); ?></h4>
              <p>
                <?php the_field('subheadline-text'); ?>
              </p>
            </div>
          </div>
        </article>

        <div class="p-post-sns">
          <div class="p-post-sns-share">
            <ul class="p-post-sns-share__list">
              <li class="p-post-sns-share__item">
                <div class="fb-like" data-href="URLが入る" data-layout="button_count" data-action="like" data-size="large" data-show-faces="false" data-share="true"></div>
              </li>
              <li class="p-post-sns-share__item">
                <a href="https://twitter.com/intent/tweet" class="twitter-share-button" data-show-count="false" data-size="large" data-lang="ja">ツイート</a>
              </li>
              <li class="p-post-sns-share__item">
                <a href="https://b.hatena.ne.jp/entry/" class="hatena-bookmark-button" data-hatena-bookmark-layout="basic-label" data-hatena-bookmark-lang="ja" data-hatena-bookmark-width="86" data-hatena-bookmark-height="28" title="このエントリーをはてなブックマークに追加"><img src="https://b.st-hatena.com/images/v4/public/entry-button/button-only@2x.png" alt="このエントリーをはてなブックマークに追加" width="20" height="20" style="border: none" /></a>
              </li>
              <li class="p-post-sns-share__item">
                <div class="line-it-button" data-lang="ja" data-type="share-b" data-env="REAL" data-url="https://developers.line.biz/ja/docs/line-social-plugins/install-guide/using-line-share-buttons/" data-color="default" data-size="small" data-count="false" data-ver="3" style="display: none"></div>
                <script src="https://www.line-website.com/social-plugins/js/thirdparty/loader.min.js" async="async" defer="defer"></script>
              </li>
            </ul>
          </div>
        </div>
        <div class="p-post-pager">
          <div class="p-post-pager__list">
            <div class="p-post-pager__item p-post-pager__prev">
              <?php previous_post_link('%link'); ?>
            </div>
            <div class="p-post-pager__item p-post-pager__next">
              <?php next_post_link('%link'); ?>
            </div>
          </div>
        </div>
        <div class="p-post-pager__home">
          <a href="<?php echo home_url('/news/'); ?>" class="p-post-pager__link">NEWS一覧</a>
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
  <!-- facebookプラグイン読み込み -->
  <div id="fb-root"></div>
  <script async defer crossorigin="anonymous" src="https://connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v14.0" nonce="foX9trmZ"></script>
  <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
  <script type="text/javascript" src="https://b.st-hatena.com/js/bookmark_button.js" charset="utf-8" async="async"></script>
</body>

</html>