<header class="l-header" id="header">
  <div class="l-header__logo">
    <h1 class="logo">
      <a href="<?php echo esc_url(home_url()); ?>" class="logo__link">
        <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="logo" class="logo__image" />
      </a>
    </h1>
  </div>

  <div class="l-header__nav">
    <nav class="p-global-nav" id="global-nav">
      <ul class="p-global-nav__list">
        <li class="p-global-nav__item">
          <a href="<?php echo home_url('news'); ?>" class="p-global-nav__link">news</a>
        </li>
        <li class="p-global-nav__item">
          <a href="<?php echo home_url('service'); ?>" class="p-global-nav__link">service</a>
        </li>
        <li class="p-global-nav__item">
          <a href="<?php echo home_url('works'); ?>" class="p-global-nav__link">works</a>
        </li>
        <li class="p-global-nav__item">
          <a href="<?php echo home_url('company'); ?>" class="p-global-nav__link">company</a>
        </li>
        <li class="p-global-nav__item">
          <a href="<?php echo home_url('recruit'); ?>" class="p-global-nav__link">recruit</a>
        </li>
        <li class="p-global-nav__item">
          <a href="<?php echo home_url('contact'); ?>" class="p-global-nav__link">contact</a>
        </li>
      </ul>
    </nav>
  </div>

  <button class="c-btn-menu" onclick="toggle()">
    <span class="c-btn-line" id="hamburger-line"></span>
  </button>
</header>