<?php
require_once rtrim($_SERVER['DOCUMENT_ROOT'], '/') . '/assets/php/bootstrap.php';


$pageSlug = detectPageSlug(__FILE__);
?><!DOCTYPE html>
<html lang="<?php echo getLang('locale_lang') ?>" x-ms-format-detection="none">

  <head>
    <?php generateMetaTags($pageSlug); ?>

    <?php generateHreflangTags(); ?>
    <?php generateJsonLd($pageSlug); ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta charset="UTF-8" />
    <script>
      (function () {
        document.documentElement.setAttribute(
          "data-theme",
          localStorage.getItem("capiturex-theme") || "light"
        );
      })();
    </script>

    <meta name="format-detection" content="telephone=no" />
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1" />
    <meta name="viewport" content="width=device-width,height=device-height,initial-scale=1.0,minimum-scale=1.0,viewport-fit=cover" />

    <meta name="mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />

    <link rel="icon" type="image/svg+xml" href="/assets/images/icon.a6b094d118.svg" />
    <link rel="icon" sizes="any" href="/assets/images/favicon.ico" />
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/images/icon-16.b8a10692ac.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/images/icon-32.e3ef2f7e33.png" />
    <link rel="apple-touch-icon" href="/assets/images/icon-180.8841d063c0.png" />

    <link rel="stylesheet" href="/assets/css/core.7b67151c87.css" />
  </head>

  <body>
    <div class="header-container">
      <header class="header">
        <div class="max-content-container header__content">
          <input id="header-menu-toggle" name="headerMenuToggle" type="checkbox" tabindex="-1" autocomplete="off" aria-label="Menu" class="header__toggle-control header__menu-toggle-control" />
          <a class="header__logo-container focus-ring" href="<?php echo getHref('') ?>" title="CapitureX">
            <img class="header__logo" src="/assets/images/app-logo.colored-dark.e0d13f0c07.svg" width="32" height="32" alt="CapitureX" />
            <span style="font-weight: bold; font-size: 1.5rem"><?php echo getLang('logo_name'); ?></span>
          </a>
          <nav class="header__navigation header__menu">
            <div class="header__navigation-category-container">
              <ul role="list" class="header__navigation-category-items">
                <li class="header__navigation-item-container header__navigation-category--assets">
                  <a href="<?php echo getHref('') ?>" class="focus-ring header__navigation-item header__category-item">
                    <span class="header__navigation-item-title"><?php echo getLang('menu_home'); ?></span>
                  </a>
                  <a href="<?php echo getHref('about') ?>" class="focus-ring header__navigation-item header__category-item">
                    <span class="header__navigation-item-title"><?php echo getLang('menu_about'); ?></span>
                  </a>
                  <a href="<?php echo getHref('login') ?>" class="focus-ring header__navigation-item header__category-item">
                    <span class="header__navigation-item-title"><?php echo getLang('menu_contact'); ?><span class="badge badge--xsmall badge--positive header__navigation-item-badge">
                        <?php echo getLang('menu_badge-1'); ?>
                      </span></span>
                  </a>
                </li>
              </ul>
            </div>
            <div class="header__menu-actions">
              <a href="<?php echo getHref('login') ?>" rel="noopener noreferrer nofollow" class="button focus-ring hoverable-control button--primary">
                <?php echo getLang('menu_login'); ?>
              </a>

            </div>
          </nav>
          <div class="header__spacer"></div>

          <a href="<?php echo getHref('login') ?>" rel="noopener noreferrer nofollow" class="button focus-ring hoverable-control button--small button--primary header__action header__action--sign-up">
            <?php echo getLang('menu_login'); ?>
          </a>


          <button type="button" id="theme-toggle">
            <svg style="width: 100%" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" x="0" y="0" viewBox="0 0 64 64"
              style="enable-background: new 0 0 512 512" xml:space="preserve" class="">
              <g>
                <path
                  d="M37.081 2.417a1 1 0 0 0-1 1v57.166a1 1 0 1 0 2 0V3.417a1 1 0 0 0-1-1zM45.541 16.615a15.707 15.707 0 0 0-3.193.336 1 1 0 0 0-.368 1.797 15.551 15.551 0 0 1 6.64 12.118 15.665 15.665 0 0 1-7.549 14.105 1 1 0 0 0 .236 1.815 14.936 14.936 0 0 0 4.909.581 15.29 15.29 0 0 0 10.669-4.984 15.27 15.27 0 0 0 4.02-11.063 15.357 15.357 0 0 0-15.364-14.705zm9.868 24.418a13.3 13.3 0 0 1-9.283 4.337c-.206.009-.41.014-.613.014h-.001c-.485 0-.967-.026-1.443-.078a17.659 17.659 0 0 0 6.548-14.528c-.208-4.702-2.224-9.017-5.612-12.151A13.357 13.357 0 0 1 58.906 31.41a13.29 13.29 0 0 1-3.497 9.623zM19.038 22.205c-5.401 0-9.795 4.394-9.795 9.795 0 5.402 4.394 9.797 9.795 9.797s9.795-4.395 9.795-9.797c0-5.401-4.394-9.795-9.795-9.795zm0 17.592c-4.298 0-7.795-3.498-7.795-7.797 0-4.298 3.497-7.795 7.795-7.795s7.795 3.497 7.795 7.795c0 4.299-3.497 7.797-7.795 7.797zM19.038 21.994a1 1 0 0 0 1-1v-3.951a1 1 0 1 0-2 0v3.951a1 1 0 0 0 1 1zM19.038 42.006a1 1 0 0 0-1 1v3.951a1 1 0 1 0 2 0v-3.951a1 1 0 0 0-1-1zM33.994 31h-3.951a1 1 0 1 0 0 2h3.951a1 1 0 1 0 0-2zM9.032 32a1 1 0 0 0-1-1H4.081a1 1 0 1 0 0 2h3.951a1 1 0 0 0 1-1z"
                  fill="currentColor" opacity="1" data-original="currentColor" class=""></path>
                <path
                  d="M10.727 24.715a.998.998 0 0 0 1.414.036 1 1 0 0 0 .036-1.414l-2.723-2.863a1 1 0 0 0-1.45 1.379zM27.348 39.285a1 1 0 0 0-1.45 1.379l2.723 2.863a.998.998 0 0 0 1.414.036 1 1 0 0 0 .036-1.414zM10.727 39.287l-2.723 2.861a1.001 1.001 0 0 0 1.449 1.378l2.723-2.861c.38-.4.365-1.033-.035-1.414a1.005 1.005 0 0 0-1.414.036zM26.624 25.025a.998.998 0 0 0 .725-.311l2.723-2.863a1.001 1.001 0 0 0-1.45-1.379l-2.723 2.863a1 1 0 0 0 .725 1.69z"
                  fill="currentColor" opacity="1" data-original="currentColor" class=""></path>
              </g>
            </svg></button><label for="header-menu-toggle" tabindex="0" class="focus-ring no-child-whitespace header__menu-toggle header__toggle-icon-group" aria-label="Menu">
            <span role="img" aria-hidden="true" class="icon icon--medium header__toggle-icon">
              <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path fill="currentColor" fill-rule="evenodd"
                  d="M2.6 4.5a.9.9 0 0 1 .9-.9h17a.9.9 0 0 1 0 1.8h-17a.9.9 0 0 1-.9-.9m0 7.5a.9.9 0 0 1 .9-.9h17a.9.9 0 0 1 0 1.8h-17a.9.9 0 0 1-.9-.9m0 7.5a.9.9 0 0 1 .9-.9h17a.9.9 0 0 1 0 1.8h-17a.9.9 0 0 1-.9-.9"
                  clip-rule="evenodd"></path>
              </svg>
            </span>
            <span role="img" aria-hidden="true" class="icon icon--medium header__toggle-icon">
              <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path fill="currentColor" fill-rule="evenodd"
                  d="M4.364 4.364a.9.9 0 0 1 1.272 0L12 10.727l6.364-6.363a.9.9 0 0 1 1.272 1.272L13.273 12l6.363 6.364a.9.9 0 0 1-1.272 1.272L12 13.273l-6.364 6.363a.9.9 0 0 1-1.272-1.272L10.727 12 4.364 5.636a.9.9 0 0 1 0-1.272"
                  clip-rule="evenodd"></path>
              </svg>
            </span>
          </label>
        </div>
      </header>
    </div>
    <main>
      <link rel="stylesheet" href="/assets/css/page~company.ec29858592.css" />
      <section id="top" class="page__section company-top-section">
        <div class="company-top-section__content">
          <h1 class="page__section-title">
            <?php echo getLang('about__top_title'); ?>
          </h1>
          <p class="page__section-description paragraph-text--medium">
            <?php echo getLang('about__top_text'); ?>
          </p>
          <div class="page__section-buttons company-top-section__buttons">
            <a href="<?php echo getHref('login') ?>" rel="noopener noreferrer" class="button focus-ring hoverable-control button--outlined">
              <?php echo getLang('about__find_job_button'); ?>
            </a>
          </div>
        </div>
      </section>
      <section id="team" class="company-team">
        <picture class="company-team__picture">
          <img width="1530" height="301" alt="" loading="lazy" role="presentation" src="/assets/images/team-promo-2744.B9vBHw9Sfv.webp" decoding="async" />
        </picture>
        <picture class="company-team__picture">
          <img width="1530" height="301" alt="" loading="lazy" role="presentation" src="/assets/images/team-promo-2744.B9vBHw9Sfv.webp" decoding="async" />
        </picture>
      </section>
      <section id="about" class="page__section">
        <div class="max-content-container company-about__content">
          <h2 class="page__section-title company-about__title">
            <?php echo getLang('about__about_title'); ?>
          </h2>
          <p class="page__section-description company-about__description">
            <?php echo getLang('about__about_text-1'); ?>
          </p>
          <p class="page__section-description company-about__description">
            <?php echo getLang('about__about_text-2'); ?>
          </p>
        </div>
      </section>
      <section id="founders" class="twilight-section">
        <div class="twilight-section__content-wrapper">
          <picture class="twilight-section__cover-picture">
            <img width="320" height="320" alt="" loading="lazy" role="presentation" src="/assets/images/twilight-promo-320.3FjNVcezz4.webp" decoding="async" />
          </picture>
          <div class="twilight-section__content">
            <div class="company-founders__layout">
              <div class="page__section company-founders__content-wrapper">
                <div class="company-founders__content">
                  <h2 class="page__section-title">
                    <?php echo getLang('about__founders_title'); ?>
                  </h2>
                  <p class="page__section-description paragraph-text">
                    <?php echo getLang('about__founders_text-1'); ?>
                  </p>
                  <p class="page__section-description paragraph-text">
                    <?php echo getLang('about__founders_text-2'); ?>
                  </p>
                  <p class="page__section-description paragraph-text">
                    <?php echo getLang('about__founders_text-3'); ?>
                  </p>
                </div>
              </div>
              <picture class="company-founders__cover-picture">
                <img width="426" height="320" alt="Founders – Marcel Putina, Julien Vallet" loading="lazy" src="/assets/images/founders-promo-800.JZfGdwMqQH.webp" decoding="async" />
              </picture>
            </div>
          </div>
        </div>
      </section>
      <section id="advantages" class="page__section">
        <div class="max-content-container company-advantages__content">
          <h2 class="page__section-title company-advantages__title">
            <?php echo getLang('about__advantages_title'); ?>
          </h2>
          <div class="company-advantages__items">
            <article>
              <h4 class="company-advantages__item-title">
                <?php echo getLang('about__advantage-1_title'); ?>
              </h4>
              <p class="paragraph-text company-advantages__item-description">
                <?php echo getLang('about__advantage-1_text'); ?>
              </p>
            </article>
            <article>
              <h4 class="company-advantages__item-title">
                <?php echo getLang('about__advantage-2_title'); ?>
              </h4>
              <p class="paragraph-text company-advantages__item-description">
                <?php echo getLang('about__advantage-2_text'); ?>
              </p>
            </article>
            <article>
              <h4 class="company-advantages__item-title">
                <?php echo getLang('about__advantage-3_title'); ?>
              </h4>
              <p class="paragraph-text company-advantages__item-description">
                <?php echo getLang('about__advantage-3_text'); ?>
              </p>
            </article>
            <article>
              <h4 class="company-advantages__item-title">
                <?php echo getLang('about__advantage-4_title'); ?>
              </h4>
              <p class="paragraph-text company-advantages__item-description">
                <?php echo getLang('about__advantage-4_text'); ?>
              </p>
            </article>
            <article>
              <h4 class="company-advantages__item-title">
                <?php echo getLang('about__advantage-5_title'); ?>
              </h4>
              <p class="paragraph-text company-advantages__item-description">
                <?php echo getLang('about__advantage-5_text'); ?>
              </p>
            </article>
            <article>
              <h4 class="company-advantages__item-title">
                <?php echo getLang('about__advantage-6_title'); ?>
              </h4>
              <p class="paragraph-text company-advantages__item-description">
                <?php echo getLang('about__advantage-6_text'); ?><br /><br /><a href="<?php echo getHref('login') ?>"><?php echo getLang('about__advantage-6_link'); ?></a>
              </p>
            </article>
          </div>
        </div>
      </section>
      <section id="location" class="company-location">
        <div class="page__section company-location__content">
          <h2 class="page__section-title">
            <?php echo getLang('about__location_title'); ?>
          </h2>
          <p class="page__section-description paragraph-text">
            <?php echo getLang('about__location_text-1'); ?>
          </p>
          <p class="page__section-description paragraph-text">
            <?php echo getLang('about__location_text-2'); ?>
          </p>
        </div>
        <picture class="company-location__picture">
          <img width="414" height="320" alt="Amsterdam" loading="lazy" src="/assets/images/amsterdam-promo-1920.Xb_-Oq9GPc.webp" decoding="async" />
        </picture>
      </section>
      <div class="page__section">
        <div class="max-content-container external-contacts__content">
          <section id="press">
            <h3><?php echo getLang('about__press_title'); ?></h3>
            <p class="external-contacts__description paragraph-text">
              <?php echo getLang('about__press_text'); ?>
              <a class="external-contacts__link link--cta focus-ring" href="<?php echo getHref('login') ?>"><?php echo getLang('about__press_link'); ?></a>
            </p>
          </section>
          <section id="investors">
            <h3><?php echo getLang('about__investors_title'); ?></h3>
            <p class="external-contacts__description paragraph-text">
              <?php echo getLang('about__investors_text'); ?><br /><a class="external-contacts__link link--cta focus-ring"
                href="<?php echo getHref('login') ?>"><?php echo getLang('about__investors_link'); ?></a>
            </p>
          </section>
          <section id="institutional">
            <h3><?php echo getLang('about__institutional_title'); ?></h3>
            <p class="external-contacts__description paragraph-text">
              <?php echo getLang('about__institutional_text'); ?><br /><a class="external-contacts__link link--cta focus-ring"
                href="<?php echo getHref('login') ?>"><?php echo getLang('about__institutional_link'); ?></a>
            </p>
          </section>
        </div>
      </div>
      <section id="careers" class="page__section page__section--positive company-careers">
        <div class="company-careers__content">
          <div class="company-careers__status">
            <?php echo getLang('about__careers_status'); ?>
          </div>
          <h2 class="page__section-title">
            <?php echo getLang('about__careers_title'); ?>
          </h2>
          <div class="page__section-buttons company-careers__buttons">
            <a rel="noopener noreferrer" href="<?php echo getHref('login') ?>" class="button focus-ring hoverable-control button--primary">
              <?php echo getLang('about__careers_button'); ?>
            </a>
          </div>
        </div>
        <picture class="company-careers__picture">
          <img width="272" height="65" alt="" loading="lazy" role="presentation" src="/assets/images/team-start-544.a0a9bXkk7B.webp" decoding="async" />
        </picture>
        <picture class="company-careers__picture">
          <img width="272" height="65" alt="" loading="lazy" role="presentation" src="/assets/images/team-end-544.5vEH_5KLlM.webp" decoding="async" />
        </picture>
      </section>
      <section id="platform-promotion" class="page__section page__section--no-bottom-spacing">
        <div class="max-content-container page__section-content-wrapper">
          <div>
            <h3 class="page__section-title">
              <?php echo getLang('about__platform_title'); ?>
            </h3>
            <p class="page__section-description paragraph-text">
              <?php echo getLang('about__platform_text'); ?>
            </p>
            <div>
              <a href="<?php echo getHref('login') ?>" rel="noopener noreferrer nofollow" class="button focus-ring hoverable-control button--medium button--primary page__section-cta">
                <?php echo getLang('about__platform_button'); ?>
              </a>
            </div>
          </div>
          <picture class="page__section-picture">
            <img width="312" height="267" alt="" loading="lazy" role="presentation" src="/assets/images/your-platform-promo2-640.I48xaKVHCy.webp" decoding="async" />
          </picture>
        </div>
      </section>
    </main>
    <footer class="footer">
      <nav class="max-content-container">
        <ul role="list" class="footer__navigation body-text--small">
          <li>
            <div class="emphasis-text footer__navigation-item-title">
              <?php echo getLang('logo_name'); ?>
            </div>
            <ul role="list">
              <li class="footer__list-item">
                <a class="footer__list-item-link focus-ring" href="<?php echo getHref('') ?>"><?php echo getLang('menu_home'); ?></a>
              </li>
              <li class="footer__list-item">
                <a class="footer__list-item-link focus-ring" href="<?php echo getHref('about') ?>">
                  <?php echo getLang('menu_about'); ?>
                </a>
              </li>
              <li class="footer__list-item">
                <a class="footer__list-item-link focus-ring" href="<?php echo getHref('login') ?>" rel="noopener noreferrer">
                  <?php echo getLang('menu_contact'); ?>
                  <div class="badge badge--small badge--positive footer__list-item-badge">
                    <?php echo getLang('menu_badge-2'); ?>
                  </div>
                </a>
              </li>
            </ul>
          </li>
          <li>
            <div class="emphasis-text footer__navigation-item-title">
              <?php echo getLang('footer__nav_title-1'); ?>
            </div>
            <ul role="list">
              <li class="footer__list-item">
                <a class="footer__list-item-link focus-ring" href="<?php echo getHref('terms') ?>">
                  <?php echo getLang('menu_terms'); ?>
                </a>
              </li>

              <li class="footer__list-item">
                <a class="footer__list-item-link focus-ring" href="<?php echo getHref('privacy') ?>">
                  <?php echo getLang('menu_privacy'); ?>
                </a>
              </li>
            </ul>
          </li>
          <li>
            <div>
              <label for="footer-language-switch" class="emphasis-text footer__navigation-item-title">
                <?php echo getLang('footer__nav_title-2'); ?>
              </label>
              <div class="footer__language-select-wrapper">
                <div class="lang-select menu-call" data-open="false">
                  <?php generateLanguageSelector() ?>
                </div>
              </div>
            </div>
          </li>
        </ul>
        <hr class="footer__divider" />
        <div class="footer__bottom">
          <div class="footer__bottom-section">
            <a class="no-child-whitespace focus-ring footer__logo" style="display: flex; align-items: center; gap: 0.5rem" href="<?php echo getHref('') ?>" title="CapitureX">
              <img src="/assets/images/app-logo.colored-dark.e0d13f0c07.svg" width="32" height="32" alt="CapitureX" />
              <span style="font-weight: bold; font-size: 1.5rem"><?php echo getLang('logo_name'); ?></span>
            </a>
            <address class="paragraph-text--xsmall footer__address">
              <?php echo getLang('footer__address'); ?>
            </address>
            <p class="paragraph-text--xsmall">
              <?php echo getLang('footer__text'); ?>
            </p>

            <p class="paragraph-text--xxsmall">
              <?php echo getLang('footer__copy'); ?>
            </p>
          </div>
          <div class="footer__bottom-section underlined-links">
            <picture class="footer__ssl-logo">
              <img width="96" height="24" alt="SSL" loading="lazy" src="/assets/images/ssl-logo.dark.6a56042e17.svg" />
            </picture>
          </div>
        </div>
      </nav>
    </footer>

    <script src="/assets/js/lang.js"></script>
  </body>

</html>