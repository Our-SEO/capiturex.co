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
      <link rel="stylesheet" href="/assets/css/page~home.0e5382c0ea.css" />
      <section id="top" class="page__section page__section--cover home-top-section">
        <div class="page__section-content-wrapper home-top-section__content-wrapper">
          <div class="page__section-content home-top-section__content">
            <h1 class="page__section-title">
              <?php echo getLang('top_title'); ?>
            </h1>
            <ul role="list" class="home-top-section__features-list">
              <li class="features-list-item">
                <span role="img" aria-hidden="true" class="icon icon--medium icon--accent">
                  <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path fill="currentColor" fill-rule="evenodd"
                      d="M1.1 12C1.1 5.98 5.98 1.1 12 1.1S22.9 5.98 22.9 12 18.02 22.9 12 22.9 1.1 18.02 1.1 12m16.036-3.636a.9.9 0 0 1 0 1.272l-6 6a.9.9 0 0 1-1.272 0l-3-3a.9.9 0 0 1 1.272-1.272l2.364 2.363 5.364-5.363a.9.9 0 0 1 1.272 0"
                      clip-rule="evenodd"></path>
                  </svg>
                </span>
                <div class="underlined-links">
                  <?php echo getLang('features_listitem-1'); ?>
                </div>
              </li>
              <li class="features-list-item">
                <span role="img" aria-hidden="true" class="icon icon--medium icon--accent">
                  <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path fill="currentColor" fill-rule="evenodd"
                      d="M1.1 12C1.1 5.98 5.98 1.1 12 1.1S22.9 5.98 22.9 12 18.02 22.9 12 22.9 1.1 18.02 1.1 12m16.036-3.636a.9.9 0 0 1 0 1.272l-6 6a.9.9 0 0 1-1.272 0l-3-3a.9.9 0 0 1 1.272-1.272l2.364 2.363 5.364-5.363a.9.9 0 0 1 1.272 0"
                      clip-rule="evenodd"></path>
                  </svg>
                </span>
                <div class="underlined-links">
                  <?php echo getLang('features_listitem-2'); ?>
                </div>
              </li>
              <li class="features-list-item">
                <span role="img" aria-hidden="true" class="icon icon--medium icon--accent">
                  <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path fill="currentColor" fill-rule="evenodd"
                      d="M1.1 12C1.1 5.98 5.98 1.1 12 1.1S22.9 5.98 22.9 12 18.02 22.9 12 22.9 1.1 18.02 1.1 12m16.036-3.636a.9.9 0 0 1 0 1.272l-6 6a.9.9 0 0 1-1.272 0l-3-3a.9.9 0 0 1 1.272-1.272l2.364 2.363 5.364-5.363a.9.9 0 0 1 1.272 0"
                      clip-rule="evenodd"></path>
                  </svg>
                </span>
                <div class="underlined-links">
                  <?php echo getLang('features_listitem-3'); ?>
                </div>
              </li>
            </ul>
            <div>
              <a href="<?php echo getHref('login') ?>" rel="noopener noreferrer nofollow" class="button focus-ring hoverable-control button--medium button--primary page__section-cta">
                <?php echo getLang('get_started_button'); ?>
              </a>
            </div>
          </div>
          <picture class="home-top-section__cover-picture">
            <img width="640" height="373" alt="" loading="auto" role="presentation" src="/assets/images/devices-crypto-promo-1920.n-7WHjf36q.webp" decoding="async" />
          </picture>
        </div>
      </section>
      <section id="press" class="scrollbar--horizontal">
        <div class="page__section press-section">
          <ul role="list" class="press-section__sources">
            <li class="press-section__sources-label">
              <?php echo getLang('as_featured_in'); ?>
            </li>
            <li>
              <a class="press-section__source-link focus-ring" title="FD.nl" rel="noopener noreferrer nofollow" href="<?php echo getHref('login') ?>">
                <picture class="press-section__source-picture">
                  <img width="37.333333333333336" height="32" alt="FD.nl" loading="lazy" src="/assets/images/fd-logo.colored-dark-168.rCsb74601K.webp" decoding="async" />
                </picture>
              </a>
            </li>
            <li>
              <a class="press-section__source-link focus-ring" title="De Telegraaf" rel="noopener noreferrer nofollow" href="<?php echo getHref('login') ?>">
                <picture class="press-section__source-picture">
                  <img width="96" height="32" alt="De Telegraaf" loading="lazy" src="/assets/images/de-telegraaf-logo.dark-432.q0WeBKy-wZ.webp" decoding="async" />
                </picture>
              </a>
            </li>
            <li>
              <a class="press-section__source-link focus-ring" title="CoinDesk" rel="noopener noreferrer nofollow" href="<?php echo getHref('login') ?>">
                <picture class="press-section__source-picture">
                  <img width="96" height="32" alt="CoinDesk" loading="lazy" src="/assets/images/coindesk-logo.colored-dark-432.gRAnMalx12.webp" decoding="async" />
                </picture>
              </a>
            </li>
            <li>
              <a class="press-section__source-link focus-ring" title="Business insider Nederland" rel="noopener noreferrer nofollow" href="<?php echo getHref('login') ?>">
                <picture class="press-section__source-picture">
                  <img width="106.66666666666667" height="32" alt="Business insider Nederland" loading="lazy" src="/assets/images/business-insider-logo.dark-480.ZpuHxMjZ0c.webp" decoding="async" />
                </picture>
              </a>
            </li>
            <li>
              <a class="press-section__source-link focus-ring" title="MT/Sprout" rel="noopener noreferrer nofollow" href="<?php echo getHref('login') ?>">
                <picture class="press-section__source-picture">
                  <img width="72" height="32" alt="MT/Sprout" loading="lazy" src="/assets/images/mt-sprout-logo.dark-432.ag7-F4g5Hv.webp" decoding="async" />
                </picture>
              </a>
            </li>
            <li>
              <a class="press-section__source-link focus-ring" title="De Tijd" rel="noopener noreferrer nofollow" href="<?php echo getHref('login') ?>">
                <picture class="press-section__source-picture">
                  <img width="32" height="32" alt="De Tijd" loading="lazy" src="/assets/images/de-tijd-logo.colored-dark-144.VCqOUPdsg5.webp" decoding="async" />
                </picture>
              </a>
            </li>
          </ul>
        </div>
      </section>
      <section id="usps" class="twilight-section twilight-section--card usps-section">
        <div class="twilight-section__content-wrapper">
          <picture class="twilight-section__cover-picture">
            <img width="320" height="320" alt="" loading="lazy" role="presentation" src="/assets/images/twilight-promo-320.3FjNVcezz4.webp" decoding="async" />
          </picture>
          <div class="twilight-section__content">
            <div class="usps-section__content">
              <ul role="list" class="usps-section__list">
                <li class="usps-section__list-item">
                  <picture class="usps-section__list-item-picture">
                    <img width="80" height="80" alt="" loading="lazy" role="presentation" src="/assets/images/shield-nl-336.MFDztOZt_Z.webp" decoding="async" />
                  </picture>
                  <h3 class="usps-section__list-item-title">
                    <?php echo getLang('usps__listitem_1_title'); ?>
                  </h3>
                  <p class="paragraph-text underlined-links usps-section__list-item-content">
                    <?php echo getLang('usps__listitem_1_text'); ?>
                  </p>
                </li>
                <li class="usps-section__list-item">
                  <picture class="usps-section__list-item-picture">
                    <img width="80" height="80" alt="" loading="lazy" role="presentation" src="/assets/images/segregation2-300.LwyaW_yN_U.webp" decoding="async" />
                  </picture>
                  <h3 class="usps-section__list-item-title">
                    <?php echo getLang('usps__listitem_2_title'); ?>
                  </h3>
                  <p class="paragraph-text underlined-links usps-section__list-item-content">
                    <?php echo getLang('usps__listitem_2_text'); ?>
                  </p>
                </li>
                <li class="usps-section__list-item">
                  <picture class="usps-section__list-item-picture">
                    <img width="80" height="80" alt="" loading="lazy" role="presentation" src="/assets/images/search-336.u8KNunYkd6.webp" decoding="async" />
                  </picture>
                  <h3 class="usps-section__list-item-title">
                    <?php echo getLang('usps__listitem_3_title'); ?>
                  </h3>
                  <p class="paragraph-text underlined-links usps-section__list-item-content">
                    <?php echo getLang('usps__listitem_3_text'); ?>
                  </p>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </section>
      <section id="bundles" class="page__section home-bundles">
        <header class="page__section-title">
          <h2><?php echo getLang('buy_crypto_title'); ?></h2>
        </header>
        <p class="page__section-description home-bundles__description">
          <?php echo getLang('bundles_description'); ?>
        </p>
        <a href="<?php echo getHref('login') ?>" class="emphasis-text link--cta focus-ring">
          <span role="img" aria-hidden="true" class="icon icon--small">
            <svg width="18" height="18" fill="none" viewBox="0 0 18 18">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5" d="M11.573 5.947 14.625 9l-3.052 3.052M3.375 9h11.123"></path>
            </svg>
          </span>
          <?php echo getLang('discover_bundles'); ?>
        </a>
        <picture class="home-bundles__picture">
          <img width="500" height="160" alt="" loading="lazy" role="presentation" src="/assets/images/bundles-overview-promo2-1000.zfrjaOp2aU.webp" decoding="async" />
        </picture>
      </section>
      <section id="fees" class="page__section page__section--positive home-fees">
        <div class="max-content-container page__section-content-wrapper">
          <article class="home-fees__content">
            <h2 class="page__section-title">
              <?php echo getLang('fees_title'); ?>
            </h2>
            <p class="page__section-description paragraph-text">
              <?php echo getLang('fees_description-1'); ?>
            </p>
            <p class="page__section-description paragraph-text">
              <?php echo getLang('fees_description-2'); ?>
            </p>
            <p class="page__section-description paragraph-text">
              <?php echo getLang('fees_description-3'); ?>
            </p>
            <a href="<?php echo getHref('login') ?>" class="home-fees__link--cta emphasis-text link--cta focus-ring">
              <span role="img" aria-hidden="true" class="icon icon--small">
                <svg width="18" height="18" fill="none" viewBox="0 0 18 18">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5" d="M11.573 5.947 14.625 9l-3.052 3.052M3.375 9h11.123"></path>
                </svg>
              </span>
              <?php echo getLang('compare_fees'); ?>
            </a>
          </article>
          <div class="home-fees__overview">
            <picture class="page__section-picture home-fees__cover-picture">
              <img width="320" height="320" alt="" loading="lazy" role="presentation" src="/assets/images/app-logo-water-320.h8n5ujMXRz.webp" decoding="async" />
            </picture>
            <article class="home-fees__card details-card">
              <h3 class="details-card__title">
                <?php echo getLang('flat_fee'); ?>
              </h3>
              <p class="details-card__description">
                <?php echo getLang('flat_fee_description'); ?>
              </p>
              <ul role="list">
                <li class="details-card__list-item body-text--xsmall">
                  <span role="img" aria-hidden="true" class="icon icon--small icon--accent details-card__list-item-icon">
                    <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                      <path fill="currentColor"
                        d="M12 1.5C6.215 1.5 1.5 6.215 1.5 12S6.215 22.5 12 22.5 22.5 17.785 22.5 12 17.785 1.5 12 1.5m5.019 8.085-5.953 5.954a.787.787 0 0 1-1.114 0l-2.971-2.972a.79.79 0 0 1 0-1.113.79.79 0 0 1 1.113 0l2.415 2.415 5.397-5.397a.79.79 0 0 1 1.113 0 .79.79 0 0 1 0 1.113">
                      </path>
                    </svg>
                  </span>
                  <?php echo getLang('details_listitem-1'); ?>
                </li>
                <li class="details-card__list-item body-text--xsmall">
                  <span role="img" aria-hidden="true" class="icon icon--small icon--accent details-card__list-item-icon">
                    <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                      <path fill="currentColor"
                        d="M12 1.5C6.215 1.5 1.5 6.215 1.5 12S6.215 22.5 12 22.5 22.5 17.785 22.5 12 17.785 1.5 12 1.5m5.019 8.085-5.953 5.954a.787.787 0 0 1-1.114 0l-2.971-2.972a.79.79 0 0 1 0-1.113.79.79 0 0 1 1.113 0l2.415 2.415 5.397-5.397a.79.79 0 0 1 1.113 0 .79.79 0 0 1 0 1.113">
                      </path>
                    </svg>
                  </span>
                  <?php echo getLang('details_listitem-2'); ?>
                </li>
                <li class="details-card__list-item body-text--xsmall">
                  <span role="img" aria-hidden="true" class="icon icon--small icon--accent details-card__list-item-icon">
                    <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                      <path fill="currentColor"
                        d="M12 1.5C6.215 1.5 1.5 6.215 1.5 12S6.215 22.5 12 22.5 22.5 17.785 22.5 12 17.785 1.5 12 1.5m5.019 8.085-5.953 5.954a.787.787 0 0 1-1.114 0l-2.971-2.972a.79.79 0 0 1 0-1.113.79.79 0 0 1 1.113 0l2.415 2.415 5.397-5.397a.79.79 0 0 1 1.113 0 .79.79 0 0 1 0 1.113">
                      </path>
                    </svg>
                  </span>
                  <?php echo getLang('details_listitem-3'); ?>
                </li>
                <li class="details-card__list-item body-text--xsmall">
                  <span role="img" aria-hidden="true" class="icon icon--small icon--accent details-card__list-item-icon">
                    <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                      <path fill="currentColor"
                        d="M12 1.5C6.215 1.5 1.5 6.215 1.5 12S6.215 22.5 12 22.5 22.5 17.785 22.5 12 17.785 1.5 12 1.5m5.019 8.085-5.953 5.954a.787.787 0 0 1-1.114 0l-2.971-2.972a.79.79 0 0 1 0-1.113.79.79 0 0 1 1.113 0l2.415 2.415 5.397-5.397a.79.79 0 0 1 1.113 0 .79.79 0 0 1 0 1.113">
                      </path>
                    </svg>
                  </span>
                  <?php echo getLang('details_listitem-4'); ?>
                </li>
                <li class="details-card__list-item body-text--xsmall">
                  <span role="img" aria-hidden="true" class="icon icon--small icon--accent details-card__list-item-icon">
                    <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                      <path fill="currentColor"
                        d="M12 1.5C6.215 1.5 1.5 6.215 1.5 12S6.215 22.5 12 22.5 22.5 17.785 22.5 12 17.785 1.5 12 1.5m5.019 8.085-5.953 5.954a.787.787 0 0 1-1.114 0l-2.971-2.972a.79.79 0 0 1 0-1.113.79.79 0 0 1 1.113 0l2.415 2.415 5.397-5.397a.79.79 0 0 1 1.113 0 .79.79 0 0 1 0 1.113">
                      </path>
                    </svg>
                  </span>
                  <?php echo getLang('details_listitem-5'); ?>
                </li>
              </ul>
            </article>
          </div>
        </div>
      </section>

      <section id="invest" class="page__section home-invest">
        <div class="max-content-container home-invest__content">
          <h2 class="page__section-title">
            <?php echo getLang('cryptocurrencies_title'); ?>
          </h2>
          <p class="home-invest__description">
            <?php echo getLang('cryptocurrencies_text'); ?>
          </p>
        </div>
        <div class="home-invest__assets-list-wrapper">
          <ul role="list" class="home-invest__assets-list" style="animation-duration: 612s">
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite1.SHqdS3stuK.webp');

                  background-position: -840px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Bitcoin
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="BTC~EUR" data-field="lastPrice">
                    56.371,88
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="BTC~EUR" data-field="relativeDifference">
                  -1,01%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite1.SHqdS3stuK.webp');

                  background-position: -1560px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Ethereum
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="ETH~EUR" data-field="lastPrice">
                    1.654,45
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="ETH~EUR" data-field="relativeDifference">
                  -1,55%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite2.8nr5m87kJg.webp');

                  background-position: -480px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Ripple
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="XRP~EUR" data-field="lastPrice">
                    1,213987
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="XRP~EUR" data-field="relativeDifference">
                  -2,39%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite2.8nr5m87kJg.webp');

                  background-position: -680px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Binance Coin
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="BNB~EUR" data-field="lastPrice">
                    513,513
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="BNB~EUR" data-field="relativeDifference">
                  -1,47%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite2.8nr5m87kJg.webp');

                  background-position: -320px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                USD Coin
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="USDC~EUR" data-field="lastPrice">
                    0,84869
                  </span>
                </span>
                <span class="positive-sign" data-name="quotecastField" data-key="USDC~EUR" data-field="relativeDifference">
                  +0,55%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite1.SHqdS3stuK.webp');

                  background-position: -3880px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Solana
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="SOL~EUR" data-field="lastPrice">
                    69,178
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="SOL~EUR" data-field="relativeDifference">
                  -3,64%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite2.8nr5m87kJg.webp');

                  background-position: -200px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Tron
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="TRX~EUR" data-field="lastPrice">
                    0,2363699
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="TRX~EUR" data-field="relativeDifference">
                  -0,72%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite1.SHqdS3stuK.webp');

                  background-position: -1320px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Dogecoin
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="DOGE~EUR" data-field="lastPrice">
                    0,0840208
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="DOGE~EUR" data-field="relativeDifference">
                  -1,06%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite1.SHqdS3stuK.webp');

                  background-position: -720px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Bitcoin Cash
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="BCH~EUR" data-field="lastPrice">
                    469,223
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="BCH~EUR" data-field="relativeDifference">
                  -1,26%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite1.SHqdS3stuK.webp');

                  background-position: -120px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Cardano
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="ADA~EUR" data-field="lastPrice">
                    0,233268
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="ADA~EUR" data-field="relativeDifference">
                  -1,60%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite4.K1ulbjBXV5.webp');

                  background-position: -1480px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                LEO Token
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="LEO~EUR" data-field="lastPrice">
                    7,2393
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="LEO~EUR" data-field="relativeDifference">
                  -1,30%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite1.SHqdS3stuK.webp');

                  background-position: -2320px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Chainlink
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="LINK~EUR" data-field="lastPrice">
                    7,29289
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="LINK~EUR" data-field="relativeDifference">
                  -2,07%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite2.8nr5m87kJg.webp');

                  background-position: -440px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Stellar
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="XLM~EUR" data-field="lastPrice">
                    0,137267
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="XLM~EUR" data-field="relativeDifference">
                  -1,81%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite5.Y8ZLAOE7GF.webp');

                  background-position: -3040px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Zcash
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="ZEC~EUR" data-field="lastPrice">
                    231,07
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="ZEC~EUR" data-field="relativeDifference">
                  -7,58%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite1.SHqdS3stuK.webp');

                  background-position: -1960px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Hedera
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="HBAR~EUR" data-field="lastPrice">
                    0,084408
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="HBAR~EUR" data-field="relativeDifference">
                  -1,98%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite1.SHqdS3stuK.webp');

                  background-position: -2440px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Litecoin
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="LTC~EUR" data-field="lastPrice">
                    45,3053
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="LTC~EUR" data-field="relativeDifference">
                  -0,47%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite1.SHqdS3stuK.webp');

                  background-position: -520px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Avalanche
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="AVAX~EUR" data-field="lastPrice">
                    7,5542
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="AVAX~EUR" data-field="relativeDifference">
                  -1,98%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite1.SHqdS3stuK.webp');

                  background-position: -3720px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Shiba Inu
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="SHIB~EUR" data-field="lastPrice">
                    0,00000537
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="SHIB~EUR" data-field="relativeDifference">
                  -2,19%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite5.Y8ZLAOE7GF.webp');

                  background-position: -880px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Sui
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="SUI~EUR" data-field="lastPrice">
                    0,7935
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="SUI~EUR" data-field="relativeDifference">
                  -2,84%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite5.Y8ZLAOE7GF.webp');

                  background-position: -1480px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Toncoin
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="TON~EUR" data-field="lastPrice">
                    1,19913
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="TON~EUR" data-field="relativeDifference">
                  -0,36%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite1.SHqdS3stuK.webp');

                  background-position: -1120px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Cronos
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="CRO~EUR" data-field="lastPrice">
                    0,066252
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="CRO~EUR" data-field="relativeDifference">
                  -0,84%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite2.8nr5m87kJg.webp');

                  background-position: -280px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Uniswap
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="UNI~EUR" data-field="lastPrice">
                    2,9005
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="UNI~EUR" data-field="relativeDifference">
                  -2,45%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite1.SHqdS3stuK.webp');

                  background-position: -3000px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Pax Gold
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="PAXG~EUR" data-field="lastPrice">
                    4.232,13
                  </span>
                </span>
                <span class="positive-sign" data-name="quotecastField" data-key="PAXG~EUR" data-field="relativeDifference">
                  +3,08%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite5.Y8ZLAOE7GF.webp');

                  background-position: -1160px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Bittensor
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="TAO~EUR" data-field="lastPrice">
                    156,2772
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="TAO~EUR" data-field="relativeDifference">
                  -3,39%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite1.SHqdS3stuK.webp');

                  background-position: -80px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Aave
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="AAVE~EUR" data-field="lastPrice">
                    103,907
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="AAVE~EUR" data-field="relativeDifference">
                  -2,72%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite8.iqMVDDZFs2.webp');

                  background-position: -1240px 0;
                  background-size: 1840px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Aster
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="ASTER~EUR" data-field="lastPrice">
                    0,59926
                  </span>
                </span>
                <span class="positive-sign" data-name="quotecastField" data-key="ASTER~EUR" data-field="relativeDifference">
                  +0,31%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite1.SHqdS3stuK.webp');

                  background-position: -3040px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Pepe
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="PEPE~EUR" data-field="lastPrice">
                    0,0000036
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="PEPE~EUR" data-field="relativeDifference">
                  -2,99%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite1.SHqdS3stuK.webp');

                  background-position: -1520px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                ETH Classic
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="ETC~EUR" data-field="lastPrice">
                    7,1919
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="ETC~EUR" data-field="relativeDifference">
                  -1,83%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite4.K1ulbjBXV5.webp');

                  background-position: -2920px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Ondo
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="ONDO~EUR" data-field="lastPrice">
                    0,22595
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="ONDO~EUR" data-field="relativeDifference">
                  -2,48%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite1.SHqdS3stuK.webp');

                  background-position: -2720px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Near Protocol
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="NEAR~EUR" data-field="lastPrice">
                    0,86905
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="NEAR~EUR" data-field="relativeDifference">
                  -1,37%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite4.K1ulbjBXV5.webp');

                  background-position: -760px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Internet Computer
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="ICP~EUR" data-field="lastPrice">
                    1,9217
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="ICP~EUR" data-field="relativeDifference">
                  -4,35%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite1.SHqdS3stuK.webp');

                  background-position: -440px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Cosmos
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="ATOM~EUR" data-field="lastPrice">
                    2,0576
                  </span>
                </span>
                <span class="positive-sign" data-name="quotecastField" data-key="ATOM~EUR" data-field="relativeDifference">
                  +8,79%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite5.Y8ZLAOE7GF.webp');

                  background-position: -3520px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Polygon
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="POL~EUR" data-field="lastPrice">
                    0,09326
                  </span>
                </span>
                <span class="positive-sign" data-name="quotecastField" data-key="POL~EUR" data-field="relativeDifference">
                  +1,92%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite5.Y8ZLAOE7GF.webp');

                  background-position: -2400px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Worldcoin
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="WLD~EUR" data-field="lastPrice">
                    0,32312
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="WLD~EUR" data-field="relativeDifference">
                  -3,60%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite1.SHqdS3stuK.webp');

                  background-position: -3200px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Quant
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="QNT~EUR" data-field="lastPrice">
                    57,69
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="QNT~EUR" data-field="relativeDifference">
                  -3,29%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite3.E3jqkpa6Pc.webp');

                  background-position: -3720px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Ethena
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="ENA~EUR" data-field="lastPrice">
                    0,09759
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="ENA~EUR" data-field="relativeDifference">
                  -3,97%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite1.SHqdS3stuK.webp');

                  background-position: -1360px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Polkadot
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="DOT~EUR" data-field="lastPrice">
                    1,1166
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="DOT~EUR" data-field="relativeDifference">
                  -1,73%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite1.SHqdS3stuK.webp');

                  background-position: -160px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Algorand
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="ALGO~EUR" data-field="lastPrice">
                    0,07767
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="ALGO~EUR" data-field="relativeDifference">
                  -1,04%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite2.8nr5m87kJg.webp');

                  background-position: -1080px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Flare
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="FLR~EUR" data-field="lastPrice">
                    0,008011
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="FLR~EUR" data-field="relativeDifference">
                  -2,66%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite2.8nr5m87kJg.webp');

                  background-position: -760px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Filecoin
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="FIL~EUR" data-field="lastPrice">
                    0,788
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="FIL~EUR" data-field="relativeDifference">
                  -2,72%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite3.E3jqkpa6Pc.webp');

                  background-position: -1400px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Aptos
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="APT~EUR" data-field="lastPrice">
                    0,7459
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="APT~EUR" data-field="relativeDifference">
                  -3,57%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite5.Y8ZLAOE7GF.webp');

                  background-position: -1880px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                VeChain
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="VET~EUR" data-field="lastPrice">
                    0,006683
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="VET~EUR" data-field="relativeDifference">
                  -2,38%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite3.E3jqkpa6Pc.webp');

                  background-position: -880px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Render
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="RENDER~EUR" data-field="lastPrice">
                    1,21
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="RENDER~EUR" data-field="relativeDifference">
                  -0,90%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite2.8nr5m87kJg.webp');

                  background-position: -880px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Arbitrum
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="ARB~EUR" data-field="lastPrice">
                    0,092256
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="ARB~EUR" data-field="relativeDifference">
                  -3,10%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite7.QpM-hyB27-.webp');

                  background-position: -2400px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Pump.fun
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="PUMP~EUR" data-field="lastPrice">
                    0,00172
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="PUMP~EUR" data-field="relativeDifference">
                  -7,48%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite5.Y8ZLAOE7GF.webp');

                  background-position: -3480px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                LayerZero
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="ZRO~EUR" data-field="lastPrice">
                    1,2861
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="ZRO~EUR" data-field="relativeDifference">
                  -3,91%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite3.E3jqkpa6Pc.webp');

                  background-position: -2200px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Bonk
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="BONK~EUR" data-field="lastPrice">
                    0,00000527
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="BONK~EUR" data-field="relativeDifference">
                  -4,01%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite4.K1ulbjBXV5.webp');

                  background-position: -1040px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Jupiter
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="JUP~EUR" data-field="lastPrice">
                    0,1301
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="JUP~EUR" data-field="relativeDifference">
                  -6,22%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite5.Y8ZLAOE7GF.webp');

                  background-position: -560px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Sei
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="SEI~EUR" data-field="lastPrice">
                    0,06183
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="SEI~EUR" data-field="relativeDifference">
                  -1,43%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite2.8nr5m87kJg.webp');

                  background-position: -2400px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Stacks
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="STX~EUR" data-field="lastPrice">
                    0,216
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="STX~EUR" data-field="relativeDifference">
                  -1,91%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite1.SHqdS3stuK.webp');

                  background-position: -1640px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Fetch.ai
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="FET~EUR" data-field="lastPrice">
                    0,14111
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="FET~EUR" data-field="relativeDifference">
                  -2,14%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite2.8nr5m87kJg.webp');

                  background-position: -2960px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                PancakeSwap
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="CAKE~EUR" data-field="lastPrice">
                    1,082
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="CAKE~EUR" data-field="relativeDifference">
                  -1,64%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite2.8nr5m87kJg.webp');

                  background-position: -520px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Tezos
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="XTZ~EUR" data-field="lastPrice">
                    0,3275
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="XTZ~EUR" data-field="relativeDifference">
                  -1,80%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite1.SHqdS3stuK.webp');

                  background-position: -960px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Chiliz
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="CHZ~EUR" data-field="lastPrice">
                    0,03353
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="CHZ~EUR" data-field="relativeDifference">
                  -2,27%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite4.K1ulbjBXV5.webp');

                  background-position: -960px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Just
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="JST~EUR" data-field="lastPrice">
                    0,03602
                  </span>
                </span>
                <span class="positive-sign" data-name="quotecastField" data-key="JST~EUR" data-field="relativeDifference">
                  +0,39%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite4.K1ulbjBXV5.webp');

                  background-position: -3040px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Optimism
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="OP~EUR" data-field="lastPrice">
                    0,14774
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="OP~EUR" data-field="relativeDifference">
                  -6,33%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite1.SHqdS3stuK.webp');

                  background-position: -1160px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Curve Dao
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="CRV~EUR" data-field="lastPrice">
                    0,207376
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="CRV~EUR" data-field="relativeDifference">
                  -2,71%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite5.Y8ZLAOE7GF.webp');

                  background-position: -3840px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Ether.fi
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="ETHFI~EUR" data-field="lastPrice">
                    0,39401
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="ETHFI~EUR" data-field="relativeDifference">
                  -2,19%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite2.8nr5m87kJg.webp');

                  background-position: -2040px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                APENFT
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="NFT~EUR" data-field="lastPrice">
                    0,0000002861
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="NFT~EUR" data-field="relativeDifference">
                  -3,86%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite3.E3jqkpa6Pc.webp');

                  background-position: -2520px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                BitTorrent
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="BTT~EUR" data-field="lastPrice">
                    0,00000029
                  </span>
                </span>
                <span class="positive-sign" data-name="quotecastField" data-key="BTT~EUR" data-field="relativeDifference">
                  +0,45%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite5.Y8ZLAOE7GF.webp');

                  background-position: -920px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Sun
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="SUN~EUR" data-field="lastPrice">
                    0,014677
                  </span>
                </span>
                <span class="positive-sign" data-name="quotecastField" data-key="SUN~EUR" data-field="relativeDifference">
                  +1,95%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite6.qmNz1uQBMa.webp');

                  background-position: -3080px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                SPX6900
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="SPX~EUR" data-field="lastPrice">
                    0,2869
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="SPX~EUR" data-field="relativeDifference">
                  -0,69%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite2.8nr5m87kJg.webp');

                  background-position: -2280px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Pyth Network
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="PYTH~EUR" data-field="lastPrice">
                    0,04609
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="PYTH~EUR" data-field="relativeDifference">
                  -3,72%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite1.SHqdS3stuK.webp');

                  background-position: -1880px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Gnosis
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="GNO~EUR" data-field="lastPrice">
                    99,734
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="GNO~EUR" data-field="relativeDifference">
                  -9,10%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite2.8nr5m87kJg.webp');

                  background-position: -1680px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                FLOKI
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="FLOKI~EUR" data-field="lastPrice">
                    0,00002595
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="FLOKI~EUR" data-field="relativeDifference">
                  -3,10%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite4.K1ulbjBXV5.webp');

                  background-position: -680px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Helium
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="HNT~EUR" data-field="lastPrice">
                    1,3523
                  </span>
                </span>
                <span class="positive-sign" data-name="quotecastField" data-key="HNT~EUR" data-field="relativeDifference">
                  +12,13%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite5.Y8ZLAOE7GF.webp');

                  background-position: -1320px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Celestia
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="TIA~EUR" data-field="lastPrice">
                    0,2789
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="TIA~EUR" data-field="relativeDifference">
                  -2,99%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite1.SHqdS3stuK.webp');

                  background-position: -1920px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                The Graph
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="GRT~EUR" data-field="lastPrice">
                    0,02282
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="GRT~EUR" data-field="relativeDifference">
                  -2,60%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite2.8nr5m87kJg.webp');

                  background-position: -1200px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                JasmyCoin
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="JASMY~EUR" data-field="lastPrice">
                    0,0048801
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="JASMY~EUR" data-field="relativeDifference">
                  -3,27%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite1.SHqdS3stuK.webp');

                  background-position: -2280px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Lido DAO
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="LDO~EUR" data-field="lastPrice">
                    0,27987
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="LDO~EUR" data-field="relativeDifference">
                  -2,56%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite3.E3jqkpa6Pc.webp');

                  background-position: -2760px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Conflux
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="CFX~EUR" data-field="lastPrice">
                    0,0446
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="CFX~EUR" data-field="relativeDifference">
                  -2,83%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite6.qmNz1uQBMa.webp');

                  background-position: -480px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Telcoin
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="TEL~EUR" data-field="lastPrice">
                    0,002275
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="TEL~EUR" data-field="relativeDifference">
                  -1,47%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite2.8nr5m87kJg.webp');

                  background-position: -1040px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Ethereum Name Service
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="ENS~EUR" data-field="lastPrice">
                    5,6851
                  </span>
                </span>
                <span class="positive-sign" data-name="quotecastField" data-key="ENS~EUR" data-field="relativeDifference">
                  +0,62%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite5.Y8ZLAOE7GF.webp');

                  background-position: -840px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Starknet
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="STRK~EUR" data-field="lastPrice">
                    0,0394
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="STRK~EUR" data-field="relativeDifference">
                  -3,41%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite1.SHqdS3stuK.webp');

                  background-position: -2080px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Injective
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="INJ~EUR" data-field="lastPrice">
                    2,545
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="INJ~EUR" data-field="relativeDifference">
                  -2,75%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite5.Y8ZLAOE7GF.webp');

                  background-position: -1600px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Trust Wallet Token
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="TWT~EUR" data-field="lastPrice">
                    0,4647
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="TWT~EUR" data-field="relativeDifference">
                  -3,19%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite1.SHqdS3stuK.webp');

                  background-position: -3600px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                The Sandbox
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="SAND~EUR" data-field="lastPrice">
                    0,071726
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="SAND~EUR" data-field="relativeDifference">
                  -0,97%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite4.K1ulbjBXV5.webp');

                  background-position: -2240px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                MONPRO
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="MON~EUR" data-field="lastPrice">
                    0,00327406
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="MON~EUR" data-field="relativeDifference">
                  -1,74%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite5.Y8ZLAOE7GF.webp');

                  background-position: -2280px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                dogwifhat
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="WIF~EUR" data-field="lastPrice">
                    0,18821
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="WIF~EUR" data-field="relativeDifference">
                  -3,07%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite1.SHqdS3stuK.webp');

                  background-position: -560px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Axie Infinity
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="AXS~EUR" data-field="lastPrice">
                    1,09418
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="AXS~EUR" data-field="relativeDifference">
                  -3,98%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite8.iqMVDDZFs2.webp');

                  background-position: -1360px 0;
                  background-size: 1840px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Plasma
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="XPL~EUR" data-field="lastPrice">
                    0,07911
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="XPL~EUR" data-field="relativeDifference">
                  -2,87%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite2.8nr5m87kJg.webp');

                  background-position: -3920px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Pendle
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="PENDLE~EUR" data-field="lastPrice">
                    1,0192
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="PENDLE~EUR" data-field="relativeDifference">
                  -0,93%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite1.SHqdS3stuK.webp');

                  background-position: -2480px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Decentraland
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="MANA~EUR" data-field="lastPrice">
                    0,083856
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="MANA~EUR" data-field="relativeDifference">
                  -1,73%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite3.E3jqkpa6Pc.webp');

                  background-position: -3320px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                DeXe
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="DEXE~EUR" data-field="lastPrice">
                    1,9201
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="DEXE~EUR" data-field="relativeDifference">
                  -5,01%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite1.SHqdS3stuK.webp');

                  background-position: -680px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Basic Attention Token
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="BAT~EUR" data-field="lastPrice">
                    0,104794
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="BAT~EUR" data-field="relativeDifference">
                  -2,97%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite1.SHqdS3stuK.webp');

                  background-position: -1040px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Compound
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="COMP~EUR" data-field="lastPrice">
                    15,21
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="COMP~EUR" data-field="relativeDifference">
                  -5,53%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite1.SHqdS3stuK.webp');

                  background-position: -1760px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Gala
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="GALA~EUR" data-field="lastPrice">
                    0,0033121
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="GALA~EUR" data-field="relativeDifference">
                  -2,91%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite1.SHqdS3stuK.webp');

                  background-position: -3320px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Raydium
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="RAY~EUR" data-field="lastPrice">
                    0,53902
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="RAY~EUR" data-field="relativeDifference">
                  -6,75%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite1.SHqdS3stuK.webp');

                  background-position: -1240px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Convex Finance
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="CVX~EUR" data-field="lastPrice">
                    1,72245
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="CVX~EUR" data-field="relativeDifference">
                  -7,74%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite5.Y8ZLAOE7GF.webp');

                  background-position: -2680px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                eCash
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="XEC~EUR" data-field="lastPrice">
                    0,0000067
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="XEC~EUR" data-field="relativeDifference">
                  -2,62%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite1.SHqdS3stuK.webp');

                  background-position: -280px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                AMP
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="AMP~EUR" data-field="lastPrice">
                    0,00129927
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="AMP~EUR" data-field="relativeDifference">
                  -0,77%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite3.E3jqkpa6Pc.webp');

                  background-position: -400px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                THORChain
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="RUNE~EUR" data-field="lastPrice">
                    0,338
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="RUNE~EUR" data-field="relativeDifference">
                  -0,88%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite5.Y8ZLAOE7GF.webp');

                  background-position: -600px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                SafePal
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="SFP~EUR" data-field="lastPrice">
                    0,22578
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="SFP~EUR" data-field="relativeDifference">
                  -1,53%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite7.QpM-hyB27-.webp');

                  background-position: -160px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Sonic
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="S~EUR" data-field="lastPrice">
                    0,0392
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="S~EUR" data-field="relativeDifference">
                  -4,62%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite3.E3jqkpa6Pc.webp');

                  background-position: -3680px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                MultiversX
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="EGLD~EUR" data-field="lastPrice">
                    3,8384
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="EGLD~EUR" data-field="relativeDifference">
                  -3,12%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite4.K1ulbjBXV5.webp');

                  background-position: -1000px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Jito
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="JTO~EUR" data-field="lastPrice">
                    0,25578
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="JTO~EUR" data-field="relativeDifference">
                  -9,00%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite1.SHqdS3stuK.webp');

                  background-position: -40px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                1INCH
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="1INCH~EUR" data-field="lastPrice">
                    0,0782
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="1INCH~EUR" data-field="relativeDifference">
                  -2,74%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite3.E3jqkpa6Pc.webp');

                  background-position: -1800px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Beam
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="BEAM~EUR" data-field="lastPrice">
                    0,001952
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="BEAM~EUR" data-field="relativeDifference">
                  -3,65%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite1.SHqdS3stuK.webp');

                  background-position: -2360px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Livepeer
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="LPT~EUR" data-field="lastPrice">
                    2,003
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="LPT~EUR" data-field="relativeDifference">
                  -3,93%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite6.qmNz1uQBMa.webp');

                  background-position: -2840px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                EigenLayer
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="EIGEN~EUR" data-field="lastPrice">
                    0,16845
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="EIGEN~EUR" data-field="relativeDifference">
                  -3,86%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite2.8nr5m87kJg.webp');

                  background-position: -1800px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Golem Network Token
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="GLM~EUR" data-field="lastPrice">
                    0,1505
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="GLM~EUR" data-field="relativeDifference">
                  -1,31%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite6.qmNz1uQBMa.webp');

                  background-position: 0px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Kamino
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="KMNO~EUR" data-field="lastPrice">
                    0,02397
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="KMNO~EUR" data-field="relativeDifference">
                  -5,26%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite8.iqMVDDZFs2.webp');

                  background-position: -1400px 0;
                  background-size: 1840px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                ZORA
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="ZORA~EUR" data-field="lastPrice">
                    0,018087
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="ZORA~EUR" data-field="relativeDifference">
                  -5,59%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite1.SHqdS3stuK.webp');

                  background-position: -400px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                ApeCoin
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="APE~EUR" data-field="lastPrice">
                    0,10078
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="APE~EUR" data-field="relativeDifference">
                  -5,67%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite3.E3jqkpa6Pc.webp');

                  background-position: -3640px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Open Campus
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="EDU~EUR" data-field="lastPrice">
                    0,1081
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="EDU~EUR" data-field="relativeDifference">
                  -0,28%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite1.SHqdS3stuK.webp');

                  background-position: -3840px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Synthetix
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="SNX~EUR" data-field="lastPrice">
                    0,2545
                  </span>
                </span>
                <span class="positive-sign" data-name="quotecastField" data-key="SNX~EUR" data-field="relativeDifference">
                  +0,99%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite2.8nr5m87kJg.webp');

                  background-position: -600px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Yearn Finance
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="YFI~EUR" data-field="lastPrice">
                    2.401,14
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="YFI~EUR" data-field="relativeDifference">
                  -0,10%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite5.Y8ZLAOE7GF.webp');

                  background-position: -3640px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Aethir
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="ATH~EUR" data-field="lastPrice">
                    0,00487
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="ATH~EUR" data-field="relativeDifference">
                  -3,56%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite3.E3jqkpa6Pc.webp');

                  background-position: -1440px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Arweave
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="AR~EUR" data-field="lastPrice">
                    1,685
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="AR~EUR" data-field="relativeDifference">
                  -1,99%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite5.Y8ZLAOE7GF.webp');

                  background-position: -2840px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Verge
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="XVG~EUR" data-field="lastPrice">
                    0,005066
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="XVG~EUR" data-field="relativeDifference">
                  -0,20%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite2.8nr5m87kJg.webp');

                  background-position: -2320px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Reserve Rights Token
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="RSR~EUR" data-field="lastPrice">
                    0,001244
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="RSR~EUR" data-field="relativeDifference">
                  -5,04%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite3.E3jqkpa6Pc.webp');

                  background-position: -2920px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Core
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="CORE~EUR" data-field="lastPrice">
                    0,07216
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="CORE~EUR" data-field="relativeDifference">
                  -2,00%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite2.8nr5m87kJg.webp');

                  background-position: -640px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                0x
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="ZRX~EUR" data-field="lastPrice">
                    0,090951
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="ZRX~EUR" data-field="relativeDifference">
                  -2,62%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite6.qmNz1uQBMa.webp');

                  background-position: -2680px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Aioz Network
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="AIOZ~EUR" data-field="lastPrice">
                    0,06191
                  </span>
                </span>
                <span class="positive-sign" data-name="quotecastField" data-key="AIOZ~EUR" data-field="relativeDifference">
                  +10,20%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite6.qmNz1uQBMa.webp');

                  background-position: -2920px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                GRASS
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="GRASS~EUR" data-field="lastPrice">
                    0,16
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="GRASS~EUR" data-field="relativeDifference">
                  -5,27%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite2.8nr5m87kJg.webp');

                  background-position: -1440px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Creditcoin
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="CTC~EUR" data-field="lastPrice">
                    0,141383
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="CTC~EUR" data-field="relativeDifference">
                  -2,76%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite1.SHqdS3stuK.webp');

                  background-position: -1400px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                dYdX
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="DYDX~EUR" data-field="lastPrice">
                    0,08751
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="DYDX~EUR" data-field="relativeDifference">
                  -3,41%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite6.qmNz1uQBMa.webp');

                  background-position: -2800px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                CoW
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="COW~EUR" data-field="lastPrice">
                    0,16812
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="COW~EUR" data-field="relativeDifference">
                  -7,42%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite4.K1ulbjBXV5.webp');

                  background-position: -2200px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Mina
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="MINA~EUR" data-field="lastPrice">
                    0,0552
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="MINA~EUR" data-field="relativeDifference">
                  -0,18%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite2.8nr5m87kJg.webp');

                  background-position: -2600px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Zilliqa
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="ZIL~EUR" data-field="lastPrice">
                    0,00341
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="ZIL~EUR" data-field="relativeDifference">
                  -5,01%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite2.8nr5m87kJg.webp');

                  background-position: -1240px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Threshold
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="T~EUR" data-field="lastPrice">
                    0,00608
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="T~EUR" data-field="relativeDifference">
                  -1,62%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite5.Y8ZLAOE7GF.webp');

                  background-position: -240px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Safe
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="SAFE~EUR" data-field="lastPrice">
                    0,0947
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="SAFE~EUR" data-field="relativeDifference">
                  -5,11%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite5.Y8ZLAOE7GF.webp');

                  background-position: -3280px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                zkSync
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="ZK~EUR" data-field="lastPrice">
                    0,01728
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="ZK~EUR" data-field="relativeDifference">
                  -6,59%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite5.Y8ZLAOE7GF.webp');

                  background-position: -120px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Ronin
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="RONIN~EUR" data-field="lastPrice">
                    0,082
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="RONIN~EUR" data-field="relativeDifference">
                  -2,73%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite2.8nr5m87kJg.webp');

                  background-position: -800px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Alchemy Pay
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="ACH~EUR" data-field="lastPrice">
                    0,0063902
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="ACH~EUR" data-field="relativeDifference">
                  -4,99%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite5.Y8ZLAOE7GF.webp');

                  background-position: -3320px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Brett
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="BRETT~EUR" data-field="lastPrice">
                    0,00634
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="BRETT~EUR" data-field="relativeDifference">
                  -4,52%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite6.qmNz1uQBMa.webp');

                  background-position: -160px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Turbo
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="TURBO~EUR" data-field="lastPrice">
                    0,0009
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="TURBO~EUR" data-field="relativeDifference">
                  -2,49%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite7.QpM-hyB27-.webp');

                  background-position: -800px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Orca
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="ORCA~EUR" data-field="lastPrice">
                    1,0879
                  </span>
                </span>
                <span class="positive-sign" data-name="quotecastField" data-key="ORCA~EUR" data-field="relativeDifference">
                  +3,49%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite3.E3jqkpa6Pc.webp');

                  background-position: -1720px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Baby Doge
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="BABYDOGE~EUR" data-field="lastPrice">
                    0,000000000328
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="BABYDOGE~EUR" data-field="relativeDifference">
                  -2,96%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite2.8nr5m87kJg.webp');

                  background-position: -2120px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                MANTRA
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="OM~EUR" data-field="lastPrice">
                    0,0477
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="OM~EUR" data-field="relativeDifference">
                  -6,18%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite6.qmNz1uQBMa.webp');

                  background-position: -40px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Mog Coin
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="MOG~EUR" data-field="lastPrice">
                    0,0000001439
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="MOG~EUR" data-field="relativeDifference">
                  -2,84%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite4.K1ulbjBXV5.webp');

                  background-position: -400px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                GMX
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="GMX~EUR" data-field="lastPrice">
                    5,4615
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="GMX~EUR" data-field="relativeDifference">
                  -0,48%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite1.SHqdS3stuK.webp');

                  background-position: -2000px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Holo
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="HOT~EUR" data-field="lastPrice">
                    0,000326
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="HOT~EUR" data-field="relativeDifference">
                  -4,68%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite3.E3jqkpa6Pc.webp');

                  background-position: -1560px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Arkham
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="ARKM~EUR" data-field="lastPrice">
                    0,096
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="ARKM~EUR" data-field="relativeDifference">
                  -2,64%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite5.Y8ZLAOE7GF.webp');

                  background-position: -3960px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Axelar
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="AXL~EUR" data-field="lastPrice">
                    0,04892
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="AXL~EUR" data-field="relativeDifference">
                  -4,86%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite4.K1ulbjBXV5.webp');

                  background-position: -80px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Flow
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="FLOW~EUR" data-field="lastPrice">
                    0,03189
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="FLOW~EUR" data-field="relativeDifference">
                  -3,16%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite5.Y8ZLAOE7GF.webp');

                  background-position: -1800px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Velo
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="VELO~EUR" data-field="lastPrice">
                    0,0030144
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="VELO~EUR" data-field="relativeDifference">
                  -0,15%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite1.SHqdS3stuK.webp');

                  background-position: -2760px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Numeraire
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="NMR~EUR" data-field="lastPrice">
                    7,0709
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="NMR~EUR" data-field="relativeDifference">
                  -1,27%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite5.Y8ZLAOE7GF.webp');

                  background-position: -1840px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Venom
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="VENOM~EUR" data-field="lastPrice">
                    0,02389
                  </span>
                </span>
                <span class="positive-sign" data-name="quotecastField" data-key="VENOM~EUR" data-field="relativeDifference">
                  +0,38%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite2.8nr5m87kJg.webp');

                  background-position: -80px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                SushiSwap
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="SUSHI~EUR" data-field="lastPrice">
                    0,1745
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="SUSHI~EUR" data-field="relativeDifference">
                  -1,22%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite3.E3jqkpa6Pc.webp');

                  background-position: -1920px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Big Time
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="BIGTIME~EUR" data-field="lastPrice">
                    0,01243
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="BIGTIME~EUR" data-field="relativeDifference">
                  -4,60%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite6.qmNz1uQBMa.webp');

                  background-position: -2960px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Moo Deng
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="MOODENG~EUR" data-field="lastPrice">
                    0,04879
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="MOODENG~EUR" data-field="relativeDifference">
                  -4,65%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite2.8nr5m87kJg.webp');

                  background-position: -3560px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Kava
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="KAVA~EUR" data-field="lastPrice">
                    0,04443
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="KAVA~EUR" data-field="relativeDifference">
                  -3,20%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite2.8nr5m87kJg.webp');

                  background-position: -920px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Blur
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="BLUR~EUR" data-field="lastPrice">
                    0,017375
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="BLUR~EUR" data-field="relativeDifference">
                  -2,36%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite6.qmNz1uQBMa.webp');

                  background-position: -440px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                ZIGChain
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="ZIG~EUR" data-field="lastPrice">
                    0,032893
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="ZIG~EUR" data-field="relativeDifference">
                  -1,23%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite3.E3jqkpa6Pc.webp');

                  background-position: -320px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Request
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="REQ~EUR" data-field="lastPrice">
                    0,05851
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="REQ~EUR" data-field="relativeDifference">
                  -5,84%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite4.K1ulbjBXV5.webp');

                  background-position: -2160px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Cat in a Dogs World
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="MEW~EUR" data-field="lastPrice">
                    0,000517
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="MEW~EUR" data-field="relativeDifference">
                  -4,26%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite5.Y8ZLAOE7GF.webp');

                  background-position: -2880px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Venus
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="XVS~EUR" data-field="lastPrice">
                    2,686
                  </span>
                </span>
                <span class="positive-sign" data-name="quotecastField" data-key="XVS~EUR" data-field="relativeDifference">
                  +1,36%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite1.SHqdS3stuK.webp');

                  background-position: -3960px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                SSV Token
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="SSV~EUR" data-field="lastPrice">
                    2,67
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="SSV~EUR" data-field="relativeDifference">
                  -6,64%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite3.E3jqkpa6Pc.webp');

                  background-position: -520px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                SuperVerse
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="SUPER~EUR" data-field="lastPrice">
                    0,1091
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="SUPER~EUR" data-field="relativeDifference">
                  -0,82%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite5.Y8ZLAOE7GF.webp');

                  background-position: -680px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Status
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="SNT~EUR" data-field="lastPrice">
                    0,009322
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="SNT~EUR" data-field="relativeDifference">
                  -2,55%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite8.iqMVDDZFs2.webp');

                  background-position: -1280px 0;
                  background-size: 1840px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Avantis
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="AVNT~EUR" data-field="lastPrice">
                    0,16262
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="AVNT~EUR" data-field="relativeDifference">
                  -7,59%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite3.E3jqkpa6Pc.webp');

                  background-position: -3560px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Dusk
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="DUSK~EUR" data-field="lastPrice">
                    0,0829
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="DUSK~EUR" data-field="relativeDifference">
                  -3,94%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite6.qmNz1uQBMa.webp');

                  background-position: -3000px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Peanut the Squirrel
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="PNUT~EUR" data-field="lastPrice">
                    0,040933
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="PNUT~EUR" data-field="relativeDifference">
                  -3,83%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite1.SHqdS3stuK.webp');

                  background-position: -3560px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Rocket Pool
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="RPL~EUR" data-field="lastPrice">
                    1,8136
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="RPL~EUR" data-field="relativeDifference">
                  -3,55%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite1.SHqdS3stuK.webp');

                  background-position: -920px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Celo
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="CELO~EUR" data-field="lastPrice">
                    0,06738
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="CELO~EUR" data-field="relativeDifference">
                  -3,93%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite5.Y8ZLAOE7GF.webp');

                  background-position: -3760px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                ApeX
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="APEX~EUR" data-field="lastPrice">
                    0,2853
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="APEX~EUR" data-field="relativeDifference">
                  -0,70%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite1.SHqdS3stuK.webp');

                  background-position: -2520px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Mask Network
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="MASK~EUR" data-field="lastPrice">
                    0,385
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="MASK~EUR" data-field="relativeDifference">
                  -2,53%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite1.SHqdS3stuK.webp');

                  background-position: -2400px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Loopring
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="LRC~EUR" data-field="lastPrice">
                    0,028078
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="LRC~EUR" data-field="relativeDifference">
                  -3,98%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite3.E3jqkpa6Pc.webp');

                  background-position: -1320px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Altlayer
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="ALT~EUR" data-field="lastPrice">
                    0,00702
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="ALT~EUR" data-field="relativeDifference">
                  -5,01%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite6.qmNz1uQBMa.webp');

                  background-position: -80px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Drift Protocol
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="DRIFT~EUR" data-field="lastPrice">
                    0,0758
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="DRIFT~EUR" data-field="relativeDifference">
                  -6,19%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite2.8nr5m87kJg.webp');

                  background-position: -240px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                UMA
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="UMA~EUR" data-field="lastPrice">
                    0,42353
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="UMA~EUR" data-field="relativeDifference">
                  -5,82%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite1.SHqdS3stuK.webp');

                  background-position: -320px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Ankr
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="ANKR~EUR" data-field="lastPrice">
                    0,003795
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="ANKR~EUR" data-field="relativeDifference">
                  -4,19%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite2.8nr5m87kJg.webp');

                  background-position: -840px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                API3
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="API3~EUR" data-field="lastPrice">
                    0,26095
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="API3~EUR" data-field="relativeDifference">
                  -2,61%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite3.E3jqkpa6Pc.webp');

                  background-position: -3080px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Cyber
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="CYBER~EUR" data-field="lastPrice">
                    0,573
                  </span>
                </span>
                <span class="positive-sign" data-name="quotecastField" data-key="CYBER~EUR" data-field="relativeDifference">
                  +20,73%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite4.K1ulbjBXV5.webp');

                  background-position: -2040px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Memecoin
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="MEME~EUR" data-field="lastPrice">
                    0,000581
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="MEME~EUR" data-field="relativeDifference">
                  -3,49%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite3.E3jqkpa6Pc.webp');

                  background-position: -80px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Pundi X
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="PUNDIX~EUR" data-field="lastPrice">
                    0,13901
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="PUNDIX~EUR" data-field="relativeDifference">
                  -2,39%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite4.K1ulbjBXV5.webp');

                  background-position: -1920px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                MovieBloc
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="MBL~EUR" data-field="lastPrice">
                    0,000839
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="MBL~EUR" data-field="relativeDifference">
                  -1,76%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite2.8nr5m87kJg.webp');

                  background-position: -2440px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Tellor
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="TRB~EUR" data-field="lastPrice">
                    12,7296
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="TRB~EUR" data-field="relativeDifference">
                  -3,80%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite6.qmNz1uQBMa.webp');

                  background-position: -120px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Gravity
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="G~EUR" data-field="lastPrice">
                    0,00328
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="G~EUR" data-field="relativeDifference">
                  -4,09%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite2.8nr5m87kJg.webp');

                  background-position: -2200px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Ontology
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="ONT~EUR" data-field="lastPrice">
                    0,03954
                  </span>
                </span>
                <span class="positive-sign" data-name="quotecastField" data-key="ONT~EUR" data-field="relativeDifference">
                  +0,18%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite1.SHqdS3stuK.webp');

                  background-position: -640px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Band Protocol
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="BAND~EUR" data-field="lastPrice">
                    0,1974
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="BAND~EUR" data-field="relativeDifference">
                  -5,17%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite2.8nr5m87kJg.webp');

                  background-position: -1880px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                IOST
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="IOST~EUR" data-field="lastPrice">
                    0,0010468
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="IOST~EUR" data-field="relativeDifference">
                  -2,41%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite4.K1ulbjBXV5.webp');

                  background-position: -2640px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Notcoin
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="NOT~EUR" data-field="lastPrice">
                    0,000327
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="NOT~EUR" data-field="relativeDifference">
                  -3,25%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite2.8nr5m87kJg.webp');

                  background-position: -40px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Storj
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="STORJ~EUR" data-field="lastPrice">
                    0,084556
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="STORJ~EUR" data-field="relativeDifference">
                  -4,35%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite4.K1ulbjBXV5.webp');

                  background-position: -840px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Space ID
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="ID~EUR" data-field="lastPrice">
                    0,04181
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="ID~EUR" data-field="relativeDifference">
                  -2,95%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite1.SHqdS3stuK.webp');

                  background-position: -3760px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                SKALE
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="SKL~EUR" data-field="lastPrice">
                    0,0056602
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="SKL~EUR" data-field="relativeDifference">
                  -3,17%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite3.E3jqkpa6Pc.webp');

                  background-position: -360px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                iExex RLC
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="RLC~EUR" data-field="lastPrice">
                    0,3578
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="RLC~EUR" data-field="relativeDifference">
                  -4,36%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite2.8nr5m87kJg.webp');

                  background-position: -1320px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Bounce Token
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="AUCTION~EUR" data-field="lastPrice">
                    4,332
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="AUCTION~EUR" data-field="relativeDifference">
                  -1,28%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite1.SHqdS3stuK.webp');

                  background-position: -3160px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Powerledger
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="POWR~EUR" data-field="lastPrice">
                    0,056101
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="POWR~EUR" data-field="relativeDifference">
                  -1,75%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite2.8nr5m87kJg.webp');

                  background-position: -1840px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Illuvium
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="ILV~EUR" data-field="lastPrice">
                    3,227
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="ILV~EUR" data-field="relativeDifference">
                  -3,60%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite4.K1ulbjBXV5.webp');

                  background-position: -3120px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Orbs
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="ORBS~EUR" data-field="lastPrice">
                    0,00702
                  </span>
                </span>
                <span class="positive-sign" data-name="quotecastField" data-key="ORBS~EUR" data-field="relativeDifference">
                  +3,08%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite5.Y8ZLAOE7GF.webp');

                  background-position: -3680px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Wormhole
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="W~EUR" data-field="lastPrice">
                    0,0168
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="W~EUR" data-field="relativeDifference">
                  -2,89%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite5.Y8ZLAOE7GF.webp');

                  background-position: -3120px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Zentry
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="ZENT~EUR" data-field="lastPrice">
                    0,00332
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="ZENT~EUR" data-field="relativeDifference">
                  -0,90%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite4.K1ulbjBXV5.webp');

                  background-position: -3320px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                ConstitutionDAO
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="PEOPLE~EUR" data-field="lastPrice">
                    0,005702
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="PEOPLE~EUR" data-field="relativeDifference">
                  -3,19%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite2.8nr5m87kJg.webp');

                  background-position: -1480px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Civic
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="CVC~EUR" data-field="lastPrice">
                    0,0285
                  </span>
                </span>
                <span class="" data-name="quotecastField" data-key="CVC~EUR" data-field="relativeDifference">
                  0,00%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite1.SHqdS3stuK.webp');

                  background-position: -2200px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Kyber Network
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="KNC~EUR" data-field="lastPrice">
                    0,115152
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="KNC~EUR" data-field="relativeDifference">
                  -2,44%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite4.K1ulbjBXV5.webp');

                  background-position: -1720px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Lisk
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="LSK~EUR" data-field="lastPrice">
                    0,12178
                  </span>
                </span>
                <span class="positive-sign" data-name="quotecastField" data-key="LSK~EUR" data-field="relativeDifference">
                  +1,30%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite2.8nr5m87kJg.webp');

                  background-position: -400px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                WOO Network
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="WOO~EUR" data-field="lastPrice">
                    0,014495
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="WOO~EUR" data-field="relativeDifference">
                  -1,47%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite6.qmNz1uQBMa.webp');

                  background-position: -2760px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                CARV
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="CARV~EUR" data-field="lastPrice">
                    0,0532
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="CARV~EUR" data-field="relativeDifference">
                  -2,39%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite6.qmNz1uQBMa.webp');

                  background-position: -720px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Access Protocol
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="ACS~EUR" data-field="lastPrice">
                    0,0001602
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="ACS~EUR" data-field="relativeDifference">
                  -0,44%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite5.Y8ZLAOE7GF.webp');

                  background-position: -3720px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                io.net
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="IO~EUR" data-field="lastPrice">
                    0,0937
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="IO~EUR" data-field="relativeDifference">
                  -1,06%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite5.Y8ZLAOE7GF.webp');

                  background-position: -3800px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Neiro
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="NEIRO~EUR" data-field="lastPrice">
                    0,00006249
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="NEIRO~EUR" data-field="relativeDifference">
                  -2,65%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite1.SHqdS3stuK.webp');

                  background-position: -760px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Bancor
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="BNT~EUR" data-field="lastPrice">
                    0,238702
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="BNT~EUR" data-field="relativeDifference">
                  -1,49%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite1.SHqdS3stuK.webp');

                  background-position: -480px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Audius
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="AUDIO~EUR" data-field="lastPrice">
                    0,017961
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="AUDIO~EUR" data-field="relativeDifference">
                  -0,77%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite4.K1ulbjBXV5.webp');

                  background-position: -3200px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Osmosis
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="OSMO~EUR" data-field="lastPrice">
                    0,0315
                  </span>
                </span>
                <span class="positive-sign" data-name="quotecastField" data-key="OSMO~EUR" data-field="relativeDifference">
                  +0,64%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite5.Y8ZLAOE7GF.webp');

                  background-position: -480px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Secret
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="SCRT~EUR" data-field="lastPrice">
                    0,0742
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="SCRT~EUR" data-field="relativeDifference">
                  -0,67%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite5.Y8ZLAOE7GF.webp');

                  background-position: -3920px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Echelon Prime
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="PRIME~EUR" data-field="lastPrice">
                    0,402
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="PRIME~EUR" data-field="relativeDifference">
                  -3,13%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite3.E3jqkpa6Pc.webp');

                  background-position: -2120px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Book of Meme
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="BOME~EUR" data-field="lastPrice">
                    0,0003517
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="BOME~EUR" data-field="relativeDifference">
                  -3,11%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite1.SHqdS3stuK.webp');

                  background-position: -880px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Coin98
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="C98~EUR" data-field="lastPrice">
                    0,024498
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="C98~EUR" data-field="relativeDifference">
                  -7,49%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite2.8nr5m87kJg.webp');

                  background-position: -2560px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Yield Guild Games
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="YGG~EUR" data-field="lastPrice">
                    0,0335
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="YGG~EUR" data-field="relativeDifference">
                  -2,90%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite2.8nr5m87kJg.webp');

                  background-position: -2000px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Liquity
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="LQTY~EUR" data-field="lastPrice">
                    0,2387
                  </span>
                </span>
                <span class="positive-sign" data-name="quotecastField" data-key="LQTY~EUR" data-field="relativeDifference">
                  +4,24%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite4.K1ulbjBXV5.webp');

                  background-position: -120px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Flux
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="FLUX~EUR" data-field="lastPrice">
                    0,0569
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="FLUX~EUR" data-field="relativeDifference">
                  -1,39%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite1.SHqdS3stuK.webp');

                  background-position: -3800px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Smooth Love Potion
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="SLP~EUR" data-field="lastPrice">
                    0,0005431
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="SLP~EUR" data-field="relativeDifference">
                  -2,20%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite4.K1ulbjBXV5.webp');

                  background-position: -2120px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Metis
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="METIS~EUR" data-field="lastPrice">
                    3,026
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="METIS~EUR" data-field="relativeDifference">
                  -0,79%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite7.QpM-hyB27-.webp');

                  background-position: -520px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Lista DAO
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="LISTA~EUR" data-field="lastPrice">
                    0,075
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="LISTA~EUR" data-field="relativeDifference">
                  -6,25%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite1.SHqdS3stuK.webp');

                  background-position: -3680px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Songbird
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="SGB~EUR" data-field="lastPrice">
                    0,0013268
                  </span>
                </span>
                <span class="positive-sign" data-name="quotecastField" data-key="SGB~EUR" data-field="relativeDifference">
                  +2,76%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite3.E3jqkpa6Pc.webp');

                  background-position: -40px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Prom
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="PROM~EUR" data-field="lastPrice">
                    1,1542
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="PROM~EUR" data-field="relativeDifference">
                  -2,45%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite7.QpM-hyB27-.webp');

                  background-position: -920px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Usual
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="USUAL~EUR" data-field="lastPrice">
                    0,0128
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="USUAL~EUR" data-field="relativeDifference">
                  -5,19%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite2.8nr5m87kJg.webp');

                  background-position: -1520px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                DIA
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="DIA~EUR" data-field="lastPrice">
                    0,1646
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="DIA~EUR" data-field="relativeDifference">
                  -3,69%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite1.SHqdS3stuK.webp');

                  background-position: -1200px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Cartesi
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="CTSI~EUR" data-field="lastPrice">
                    0,021413
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="CTSI~EUR" data-field="relativeDifference">
                  -6,19%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite5.Y8ZLAOE7GF.webp');

                  background-position: -2160px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Wax
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="WAXP~EUR" data-field="lastPrice">
                    0,00577
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="WAXP~EUR" data-field="relativeDifference">
                  -1,87%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite4.K1ulbjBXV5.webp');

                  background-position: -1760px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Treasure
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="MAGIC~EUR" data-field="lastPrice">
                    0,0604
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="MAGIC~EUR" data-field="relativeDifference">
                  -6,79%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite6.qmNz1uQBMa.webp');

                  background-position: -2880px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Goatseus Maximus
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="GOAT~EUR" data-field="lastPrice">
                    0,019
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="GOAT~EUR" data-field="relativeDifference">
                  -5,00%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite6.qmNz1uQBMa.webp');

                  background-position: -640px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Orderly Network
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="ORDER~EUR" data-field="lastPrice">
                    0,0489
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="ORDER~EUR" data-field="relativeDifference">
                  -3,93%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite4.K1ulbjBXV5.webp');

                  background-position: -2720px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                NYM
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="NYM~EUR" data-field="lastPrice">
                    0,02259
                  </span>
                </span>
                <span class="positive-sign" data-name="quotecastField" data-key="NYM~EUR" data-field="relativeDifference">
                  +3,77%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite6.qmNz1uQBMa.webp');

                  background-position: -3040px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Renzo
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="REZ~EUR" data-field="lastPrice">
                    0,00263
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="REZ~EUR" data-field="relativeDifference">
                  -8,68%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite2.8nr5m87kJg.webp');

                  background-position: -3120px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                COTI
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="COTI~EUR" data-field="lastPrice">
                    0,00997
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="COTI~EUR" data-field="relativeDifference">
                  -3,67%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite6.qmNz1uQBMa.webp');

                  background-position: -1080px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Chainflip
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="FLIP~EUR" data-field="lastPrice">
                    0,2541
                  </span>
                </span>
                <span class="positive-sign" data-name="quotecastField" data-key="FLIP~EUR" data-field="relativeDifference">
                  +1,84%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite2.8nr5m87kJg.webp');

                  background-position: -960px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Celer Network
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="CELR~EUR" data-field="lastPrice">
                    0,0022352
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="CELR~EUR" data-field="relativeDifference">
                  -1,13%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite5.Y8ZLAOE7GF.webp');

                  background-position: -2600px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Xai
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="XAI~EUR" data-field="lastPrice">
                    0,008626
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="XAI~EUR" data-field="relativeDifference">
                  -3,31%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite7.QpM-hyB27-.webp');

                  background-position: -240px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                aixbt by Virtuals
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="AIXBT~EUR" data-field="lastPrice">
                    0,01725
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="AIXBT~EUR" data-field="relativeDifference">
                  -3,25%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite2.8nr5m87kJg.webp');

                  background-position: -3040px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Chromia
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="CHR~EUR" data-field="lastPrice">
                    0,01981
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="CHR~EUR" data-field="relativeDifference">
                  -7,00%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite6.qmNz1uQBMa.webp');

                  background-position: -880px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Clearpool
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="CPOOL~EUR" data-field="lastPrice">
                    0,01806
                  </span>
                </span>
                <span class="positive-sign" data-name="quotecastField" data-key="CPOOL~EUR" data-field="relativeDifference">
                  +0,61%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite4.K1ulbjBXV5.webp');

                  background-position: -440px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Gains Network
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="GNS~EUR" data-field="lastPrice">
                    0,6623
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="GNS~EUR" data-field="relativeDifference">
                  -6,71%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite3.E3jqkpa6Pc.webp');

                  background-position: -3880px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Solana Name Service
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="FIDA~EUR" data-field="lastPrice">
                    0,01616
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="FIDA~EUR" data-field="relativeDifference">
                  -6,26%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite6.qmNz1uQBMa.webp');

                  background-position: -920px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                ChainGPT
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="CGPT~EUR" data-field="lastPrice">
                    0,01809
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="CGPT~EUR" data-field="relativeDifference">
                  -4,99%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite6.qmNz1uQBMa.webp');

                  background-position: -2720px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Banana Gun
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="BANANA~EUR" data-field="lastPrice">
                    3,7481
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="BANANA~EUR" data-field="relativeDifference">
                  -3,80%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite1.SHqdS3stuK.webp');

                  background-position: -2960px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Orchid
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="OXT~EUR" data-field="lastPrice">
                    0,01485
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="OXT~EUR" data-field="relativeDifference">
                  -4,20%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite6.qmNz1uQBMa.webp');

                  background-position: -520px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Degen
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="DEGEN~EUR" data-field="lastPrice">
                    0,000589
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="DEGEN~EUR" data-field="relativeDifference">
                  -2,48%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite3.E3jqkpa6Pc.webp');

                  background-position: -1600px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Arpa
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="ARPA~EUR" data-field="lastPrice">
                    0,00825
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="ARPA~EUR" data-field="relativeDifference">
                  -5,06%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite4.K1ulbjBXV5.webp');

                  background-position: -3440px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Pixels
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="PIXEL~EUR" data-field="lastPrice">
                    0,004521
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="PIXEL~EUR" data-field="relativeDifference">
                  -1,59%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite7.QpM-hyB27-.webp');

                  background-position: -200px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Across Protocol
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="ACX~EUR" data-field="lastPrice">
                    0,0304
                  </span>
                </span>
                <span class="positive-sign" data-name="quotecastField" data-key="ACX~EUR" data-field="relativeDifference">
                  +2,36%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite3.E3jqkpa6Pc.webp');

                  background-position: -120px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Vulcan Forged
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="PYR~EUR" data-field="lastPrice">
                    0,2737
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="PYR~EUR" data-field="relativeDifference">
                  -3,29%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite3.E3jqkpa6Pc.webp');

                  background-position: -160px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                BENQI
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="QI~EUR" data-field="lastPrice">
                    0,00171
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="QI~EUR" data-field="relativeDifference">
                  -4,63%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite2.8nr5m87kJg.webp');

                  background-position: -3320px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                DODO
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="DODO~EUR" data-field="lastPrice">
                    0,01286
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="DODO~EUR" data-field="relativeDifference">
                  -3,24%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite2.8nr5m87kJg.webp');

                  background-position: -1920px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                JOE
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="JOE~EUR" data-field="lastPrice">
                    0,0306
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="JOE~EUR" data-field="relativeDifference">
                  -4,08%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite2.8nr5m87kJg.webp');

                  background-position: -720px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Moonbeam
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="GLMR~EUR" data-field="lastPrice">
                    0,011494
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="GLMR~EUR" data-field="relativeDifference">
                  -2,34%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite4.K1ulbjBXV5.webp');

                  background-position: -600px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Highstreet
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="HIGH~EUR" data-field="lastPrice">
                    0,1227
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="HIGH~EUR" data-field="relativeDifference">
                  -3,99%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite4.K1ulbjBXV5.webp');

                  background-position: -2280px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Moonriver
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="MOVR~EUR" data-field="lastPrice">
                    1,1796
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="MOVR~EUR" data-field="relativeDifference">
                  -4,00%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite3.E3jqkpa6Pc.webp');

                  background-position: -240px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                SuperRare
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="RARE~EUR" data-field="lastPrice">
                    0,0165
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="RARE~EUR" data-field="relativeDifference">
                  -2,42%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite1.SHqdS3stuK.webp');

                  background-position: -1280px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Dent
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="DENT~EUR" data-field="lastPrice">
                    0,0001177
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="DENT~EUR" data-field="relativeDifference">
                  -4,31%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite5.Y8ZLAOE7GF.webp');

                  background-position: -1720px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Vanar
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="VANRY~EUR" data-field="lastPrice">
                    0,004858
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="VANRY~EUR" data-field="relativeDifference">
                  -4,41%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite2.8nr5m87kJg.webp');

                  background-position: -3480px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Hashflow
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="HFT~EUR" data-field="lastPrice">
                    0,0147
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="HFT~EUR" data-field="relativeDifference">
                  -3,29%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite2.8nr5m87kJg.webp');

                  background-position: -2720px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Automata
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="ATA~EUR" data-field="lastPrice">
                    0,0106
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="ATA~EUR" data-field="relativeDifference">
                  -1,85%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite1.SHqdS3stuK.webp');

                  background-position: -3240px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Radworks
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="RAD~EUR" data-field="lastPrice">
                    0,20348
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="RAD~EUR" data-field="relativeDifference">
                  -1,87%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite4.K1ulbjBXV5.webp');

                  background-position: -1840px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Maverick Protocol
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="MAV~EUR" data-field="lastPrice">
                    0,01404
                  </span>
                </span>
                <span class="positive-sign" data-name="quotecastField" data-key="MAV~EUR" data-field="relativeDifference">
                  +1,67%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite5.Y8ZLAOE7GF.webp');

                  background-position: -1440px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                TokenFi
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="TOKEN~EUR" data-field="lastPrice">
                    0,00275
                  </span>
                </span>
                <span class="positive-sign" data-name="quotecastField" data-key="TOKEN~EUR" data-field="relativeDifference">
                  +2,61%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite3.E3jqkpa6Pc.webp');

                  background-position: -560px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Synapse
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="SYN~EUR" data-field="lastPrice">
                    0,041
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="SYN~EUR" data-field="relativeDifference">
                  -6,39%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite3.E3jqkpa6Pc.webp');

                  background-position: -2080px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Boba Network
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="BOBA~EUR" data-field="lastPrice">
                    0,01845
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="BOBA~EUR" data-field="relativeDifference">
                  -0,05%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite6.qmNz1uQBMa.webp');

                  background-position: -600px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Layer3
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="L3~EUR" data-field="lastPrice">
                    0,00659
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="L3~EUR" data-field="relativeDifference">
                  -1,05%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite5.Y8ZLAOE7GF.webp');

                  background-position: -520px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Stader
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="SD~EUR" data-field="lastPrice">
                    0,1312
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="SD~EUR" data-field="relativeDifference">
                  -0,91%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite1.SHqdS3stuK.webp');

                  background-position: -200px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                MyNeighborAlice
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="ALICE~EUR" data-field="lastPrice">
                    0,09105
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="ALICE~EUR" data-field="relativeDifference">
                  -5,80%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite1.SHqdS3stuK.webp');

                  background-position: -2680px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Enzyme
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="MLN~EUR" data-field="lastPrice">
                    3,0172
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="MLN~EUR" data-field="relativeDifference">
                  -2,71%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite4.K1ulbjBXV5.webp');

                  background-position: -1960px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                MOBOX
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="MBOX~EUR" data-field="lastPrice">
                    0,017
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="MBOX~EUR" data-field="relativeDifference">
                  -3,41%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite3.E3jqkpa6Pc.webp');

                  background-position: -640px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                TrueFi
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="TRU~EUR" data-field="lastPrice">
                    0,00522
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="TRU~EUR" data-field="relativeDifference">
                  -4,04%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite4.K1ulbjBXV5.webp');

                  background-position: -2560px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                NFPrompt
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="NFP~EUR" data-field="lastPrice">
                    0,0142
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="NFP~EUR" data-field="relativeDifference">
                  -4,05%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite6.qmNz1uQBMa.webp');

                  background-position: -320px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Nakamoto Games
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="NAKA~EUR" data-field="lastPrice">
                    0,0657
                  </span>
                </span>
                <span class="positive-sign" data-name="quotecastField" data-key="NAKA~EUR" data-field="relativeDifference">
                  +7,00%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite6.qmNz1uQBMa.webp');

                  background-position: -200px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Sundog
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="SUNDOG~EUR" data-field="lastPrice">
                    0,00583
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="SUNDOG~EUR" data-field="relativeDifference">
                  -9,19%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite5.Y8ZLAOE7GF.webp');

                  background-position: -1400px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Tensor
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="TNSR~EUR" data-field="lastPrice">
                    0,0436
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="TNSR~EUR" data-field="relativeDifference">
                  -3,75%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite2.8nr5m87kJg.webp');

                  background-position: -3080px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Contentos
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="COS~EUR" data-field="lastPrice">
                    0,000898
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="COS~EUR" data-field="relativeDifference">
                  -2,50%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite1.SHqdS3stuK.webp');

                  background-position: -1800px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Aavegotchi
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="GHST~EUR" data-field="lastPrice">
                    0,08713
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="GHST~EUR" data-field="relativeDifference">
                  -1,25%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite5.Y8ZLAOE7GF.webp');

                  background-position: -960px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Sweat Economy
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="SWEAT~EUR" data-field="lastPrice">
                    0,000579
                  </span>
                </span>
                <span class="positive-sign" data-name="quotecastField" data-key="SWEAT~EUR" data-field="relativeDifference">
                  +0,87%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite4.K1ulbjBXV5.webp');

                  background-position: -480px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Gods Unchained
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="GODS~EUR" data-field="lastPrice">
                    0,02995
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="GODS~EUR" data-field="relativeDifference">
                  -2,73%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite6.qmNz1uQBMa.webp');

                  background-position: -2600px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Vita Inu
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="VINU~EUR" data-field="lastPrice">
                    0,000000004296
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="VINU~EUR" data-field="relativeDifference">
                  -2,32%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite1.SHqdS3stuK.webp');

                  background-position: -240px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Stella
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="ALPHA~EUR" data-field="lastPrice">
                    0,003053
                  </span>
                </span>
                <span class="positive-sign" data-name="quotecastField" data-key="ALPHA~EUR" data-field="relativeDifference">
                  +1,60%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite6.qmNz1uQBMa.webp');

                  background-position: -960px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Seedify.fund
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="SFUND~EUR" data-field="lastPrice">
                    0,03842
                  </span>
                </span>
                <span class="positive-sign" data-name="quotecastField" data-key="SFUND~EUR" data-field="relativeDifference">
                  +0,39%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite4.K1ulbjBXV5.webp');

                  background-position: -3600px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Parcl
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="PRCL~EUR" data-field="lastPrice">
                    0,013
                  </span>
                </span>
                <span class="positive-sign" data-name="quotecastField" data-key="PRCL~EUR" data-field="relativeDifference">
                  +3,17%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite6.qmNz1uQBMa.webp');

                  background-position: -1040px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                LimeWire
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="LMWR~EUR" data-field="lastPrice">
                    0,02513
                  </span>
                </span>
                <span class="positive-sign" data-name="quotecastField" data-key="LMWR~EUR" data-field="relativeDifference">
                  +2,49%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite4.K1ulbjBXV5.webp');

                  background-position: -160px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Foxy
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="FOXY~EUR" data-field="lastPrice">
                    0,000291
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="FOXY~EUR" data-field="relativeDifference">
                  -4,59%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite4.K1ulbjBXV5.webp');

                  background-position: -720px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Hooked Protocol
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="HOOK~EUR" data-field="lastPrice">
                    0,0212
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="HOOK~EUR" data-field="relativeDifference">
                  -4,50%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite1.SHqdS3stuK.webp');

                  background-position: -2240px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Kusama
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="KSM~EUR" data-field="lastPrice">
                    3,91
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="KSM~EUR" data-field="relativeDifference">
                  -3,46%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite6.qmNz1uQBMa.webp');

                  background-position: -3120px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Aerodrome Finance
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="AERO~EUR" data-field="lastPrice">
                    0,25938
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="AERO~EUR" data-field="relativeDifference">
                  -2,85%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite8.iqMVDDZFs2.webp');

                  background-position: -480px 0;
                  background-size: 1840px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Awe Network
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="AWE~EUR" data-field="lastPrice">
                    0,08697
                  </span>
                </span>
                <span class="positive-sign" data-name="quotecastField" data-key="AWE~EUR" data-field="relativeDifference">
                  +17,32%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite2.8nr5m87kJg.webp');

                  background-position: -1400px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Biconomy
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="BICO~EUR" data-field="lastPrice">
                    0,0192
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="BICO~EUR" data-field="relativeDifference">
                  -4,95%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite6.qmNz1uQBMa.webp');

                  background-position: -3160px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Just a chill guy
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="CHILLGUY~EUR" data-field="lastPrice">
                    0,00903
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="CHILLGUY~EUR" data-field="relativeDifference">
                  -5,94%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite6.qmNz1uQBMa.webp');

                  background-position: -3200px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Cloud
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="CLOUD~EUR" data-field="lastPrice">
                    0,03144
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="CLOUD~EUR" data-field="relativeDifference">
                  -4,70%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite6.qmNz1uQBMa.webp');

                  background-position: -3320px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Shentu
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="CTK~EUR" data-field="lastPrice">
                    0,17631
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="CTK~EUR" data-field="relativeDifference">
                  -2,23%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite6.qmNz1uQBMa.webp');

                  background-position: -3360px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                deBridge
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="DBR~EUR" data-field="lastPrice">
                    0,01332
                  </span>
                </span>
                <span class="positive-sign" data-name="quotecastField" data-key="DBR~EUR" data-field="relativeDifference">
                  +7,94%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite5.Y8ZLAOE7GF.webp');

                  background-position: -3560px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                EURC
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="EURC~EUR" data-field="lastPrice">
                    –
                  </span>
                </span>
                <span class="" data-name="quotecastField" data-key="EURC~EUR" data-field="relativeDifference">
                  –
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite6.qmNz1uQBMa.webp');

                  background-position: -3480px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                SynFutures
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="F~EUR" data-field="lastPrice">
                    0,00519
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="F~EUR" data-field="relativeDifference">
                  -5,46%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite7.QpM-hyB27-.webp');

                  background-position: -2120px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Four
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="FORM~EUR" data-field="lastPrice">
                    0,18186
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="FORM~EUR" data-field="relativeDifference">
                  -2,06%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite1.SHqdS3stuK.webp');

                  background-position: -1840px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                GMT
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="GMT~EUR" data-field="lastPrice">
                    0,010311
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="GMT~EUR" data-field="relativeDifference">
                  -1,42%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite7.QpM-hyB27-.webp');

                  background-position: -1120px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Heima
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="HEI~EUR" data-field="lastPrice">
                    0,0711
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="HEI~EUR" data-field="relativeDifference">
                  -3,66%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite1.SHqdS3stuK.webp');

                  background-position: -2040px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Immutable X
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="IMX~EUR" data-field="lastPrice">
                    0,1379
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="IMX~EUR" data-field="relativeDifference">
                  -1,71%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite6.qmNz1uQBMa.webp');

                  background-position: -3560px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Magic Eden
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="ME~EUR" data-field="lastPrice">
                    0,11066
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="ME~EUR" data-field="relativeDifference">
                  -4,29%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite6.qmNz1uQBMa.webp');

                  background-position: -3640px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Morpho Token
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="MORPHO~EUR" data-field="lastPrice">
                    1,23251
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="MORPHO~EUR" data-field="relativeDifference">
                  -3,29%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite6.qmNz1uQBMa.webp');

                  background-position: -3720px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Open Loot
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="OL~EUR" data-field="lastPrice">
                    0,0099
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="OL~EUR" data-field="relativeDifference">
                  -3,70%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite6.qmNz1uQBMa.webp');

                  background-position: -3760px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                PAAL AI
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="PAAL~EUR" data-field="lastPrice">
                    0,0143
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="PAAL~EUR" data-field="relativeDifference">
                  -2,32%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite6.qmNz1uQBMa.webp');

                  background-position: -3800px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Pengu
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="PENGU~EUR" data-field="lastPrice">
                    0,0058096
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="PENGU~EUR" data-field="relativeDifference">
                  -3,57%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite6.qmNz1uQBMa.webp');

                  background-position: -240px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Pirate Nation Token
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="PIRATE~EUR" data-field="lastPrice">
                    0,0043
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="PIRATE~EUR" data-field="relativeDifference">
                  -25,86%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite2.8nr5m87kJg.webp');

                  background-position: -3960px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Marlin
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="POND~EUR" data-field="lastPrice">
                    0,002092
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="POND~EUR" data-field="relativeDifference">
                  -5,17%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite4.K1ulbjBXV5.webp');

                  background-position: -3560px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Portal
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="PORTAL~EUR" data-field="lastPrice">
                    0,012
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="PORTAL~EUR" data-field="relativeDifference">
                  -3,23%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite6.qmNz1uQBMa.webp');

                  background-position: -3840px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Puffer
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="PUFFER~EUR" data-field="lastPrice">
                    0,02731
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="PUFFER~EUR" data-field="relativeDifference">
                  -2,50%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite4.K1ulbjBXV5.webp');

                  background-position: -3920px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Radiant Capital
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="RDNT~EUR" data-field="lastPrice">
                    0,0048
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="RDNT~EUR" data-field="relativeDifference">
                  -2,04%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite8.iqMVDDZFs2.webp');

                  background-position: -1320px 0;
                  background-size: 1840px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Recall
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="RECALL~EUR" data-field="lastPrice">
                    0,04128
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="RECALL~EUR" data-field="relativeDifference">
                  -1,27%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite5.Y8ZLAOE7GF.webp');

                  background-position: -80px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Realio Network
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="RIO~EUR" data-field="lastPrice">
                    0,063
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="RIO~EUR" data-field="relativeDifference">
                  -3,82%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite5.Y8ZLAOE7GF.webp');

                  background-position: -160px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                RSS3
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="RSS3~EUR" data-field="lastPrice">
                    0,00743
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="RSS3~EUR" data-field="relativeDifference">
                  -1,07%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite7.QpM-hyB27-.webp');

                  background-position: -840px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Scroll
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="SCR~EUR" data-field="lastPrice">
                    0,0403
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="SCR~EUR" data-field="relativeDifference">
                  -2,89%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite8.iqMVDDZFs2.webp');

                  background-position: -1160px 0;
                  background-size: 1840px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Sky
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="SKY~EUR" data-field="lastPrice">
                    0,05493
                  </span>
                </span>
                <span class="positive-sign" data-name="quotecastField" data-key="SKY~EUR" data-field="relativeDifference">
                  +3,54%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite5.Y8ZLAOE7GF.webp');

                  background-position: -760px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Spell Token
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="SPELL~EUR" data-field="lastPrice">
                    0,0001582
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="SPELL~EUR" data-field="relativeDifference">
                  -1,56%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite7.QpM-hyB27-.webp');

                  background-position: 0px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Swell Network
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="SWELL~EUR" data-field="lastPrice">
                    0,001388
                  </span>
                </span>
                <span class="positive-sign" data-name="quotecastField" data-key="SWELL~EUR" data-field="relativeDifference">
                  +29,60%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite5.Y8ZLAOE7GF.webp');

                  background-position: -1080px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                TARS AI
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="TAI~EUR" data-field="lastPrice">
                    0,012432
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="TAI~EUR" data-field="relativeDifference">
                  -3,88%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite3.E3jqkpa6Pc.webp');

                  background-position: -600px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Tokocrypto
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="TKO~EUR" data-field="lastPrice">
                    0,0503
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="TKO~EUR" data-field="relativeDifference">
                  -2,52%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite7.QpM-hyB27-.webp');

                  background-position: -1000px 0;
                  background-size: 4000px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                Official Trump
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="TRUMP~EUR" data-field="lastPrice">
                    2,88964
                  </span>
                </span>
                <span class="negative-sign" data-name="quotecastField" data-key="TRUMP~EUR" data-field="relativeDifference">
                  -0,80%
                </span>
              </div>
            </li>
            <li class="home-invest__asset-card">
              <span class="asset-icon" role="img" aria-hidden="true" style="
                  width: 40px;
                  height: 40px;
                  background-image: url('/assets/images/asset-icons-sprite8.iqMVDDZFs2.webp');

                  background-position: -1200px 0;
                  background-size: 1840px 40px;
                "></span>
              <a href="<?php echo getHref('login') ?>" class="home-invest__asset-card-title emphasis-text focus-ring">
                World Liberty Financial
              </a>
              <div class="home-invest__asset-card-values body-text--small">
                <span>
                  €
                  <span data-name="quotecastField" data-key="WLFI~EUR" data-field="lastPrice">
                    0,1028
                  </span>
                </span>
                <span class="positive-sign" data-name="quotecastField" data-key="WLFI~EUR" data-field="relativeDifference">
                  +12,72%
                </span>
              </div>
            </li>
          </ul>
        </div>
      </section>

      <section id="security" class="page__section home-security">
        <div class="max-content-container home-security__content">
          <div class="home-security__main-part">
            <h2 class="page__section-title">
              <?php echo getLang('security_title'); ?>
            </h2>
            <p class="page__section-description paragraph-text">
              <?php echo getLang('security_text-1'); ?>
            </p>
            <p class="page__section-description paragraph-text">
              <?php echo getLang('security_text-2'); ?>
            </p>
            <a href="<?php echo getHref('login') ?>" class="home-security__link--cta emphasis-text link--cta">
              <span role="img" aria-hidden="true" class="icon icon--small">
                <svg width="18" height="18" fill="none" viewBox="0 0 18 18">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5" d="M11.573 5.947 14.625 9l-3.052 3.052M3.375 9h11.123"></path>
                </svg>
              </span>
              <?php echo getLang('security_link'); ?>
            </a>
          </div>
          <ul role="list" class="fold-list home-security__features-list">
            <li class="fold-list__item home-security__feature">
              <input id="security-feature-toggle-bankRegistration" type="checkbox" autocomplete="off" class="fold-list__toggle" />
              <label for="security-feature-toggle-bankRegistration" class="fold-list__item-header">
                <span role="img" aria-hidden="true" class="icon fold-list__item-icon">
                  <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path fill="currentColor"
                      d="m19.363 3.456-6.187-2.282c-.642-.232-1.688-.232-2.33 0L4.66 3.456C3.467 3.899 2.5 5.272 2.5 6.524v8.971c0 .897.596 2.082 1.327 2.614l6.188 4.285c1.09.808 2.88.808 3.97 0l6.188-4.285c.73-.543 1.327-1.717 1.327-2.614V6.524c.011-1.252-.956-2.625-2.137-3.068M15.92 9.658l-4.837 4.763a.84.84 0 0 1-.596.243.84.84 0 0 1-.596-.243l-1.8-1.794a.826.826 0 0 1 0-1.174.86.86 0 0 1 1.192 0l1.215 1.196 4.241-4.176a.86.86 0 0 1 1.192 0 .83.83 0 0 1-.01 1.185">
                    </path>
                  </svg>
                </span>
                <span class="fold-list__item-title"><?php echo getLang('security_feature-1'); ?></span>
                <span role="img" aria-hidden="true" class="icon icon--xsmall fold-list__toggle-icon">
                  <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="m20 9-8 8-8-8"></path>
                  </svg>
                </span>
                <span role="img" aria-hidden="true" class="icon icon--xsmall fold-list__toggle-icon">
                  <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="m4 15 8-8 8 8"></path>
                  </svg>
                </span>
              </label>
              <p class="fold-list__item-content paragraph-text--small">
                <?php echo getLang('security_feature_text-1'); ?>
              </p>
            </li>
            <li class="fold-list__item home-security__feature">
              <input id="security-feature-toggle-vault" type="checkbox" autocomplete="off" class="fold-list__toggle" />
              <label for="security-feature-toggle-vault" class="fold-list__item-header">
                <span role="img" aria-hidden="true" class="icon fold-list__item-icon">
                  <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path fill="currentColor" fill-rule="evenodd"
                      d="M7.075 2.5a4 4 0 0 0-4 4v.222H2.5a1 1 0 0 0-1 1v2.222a1 1 0 0 0 1 1h.575v2.112H2.5a1 1 0 0 0-1 1v2.222a1 1 0 0 0 1 1h.575v.222a4 4 0 0 0 4 4H18.5a4 4 0 0 0 4-4v-11a4 4 0 0 0-4-4zm10.639 5.217a.66.66 0 0 0 0-.933.654.654 0 0 0-.928 0l-1.792 1.8a4.17 4.17 0 0 0-2.469-.806c-.923 0-1.776.3-2.47.806l-1.791-1.8a.654.654 0 0 0-.928 0 .66.66 0 0 0 0 .933l1.791 1.8A4.2 4.2 0 0 0 8.325 12c0 .928.298 1.786.802 2.483l-1.791 1.8a.66.66 0 0 0 0 .933.654.654 0 0 0 .928 0l1.792-1.8a4.17 4.17 0 0 0 2.469.806c.923 0 1.776-.3 2.47-.806l1.791 1.8a.654.654 0 0 0 .928 0 .66.66 0 0 0 0-.933l-1.791-1.8A4.2 4.2 0 0 0 16.725 12c0-.928-.298-1.786-.802-2.483zM15.413 12a2.895 2.895 0 0 1-2.888 2.903A2.895 2.895 0 0 1 9.637 12a2.895 2.895 0 0 1 2.888-2.903c1.595 0 2.887 1.3 2.887 2.903M20.4 9.792c.345 0 .625.28.625.625v3.166a.625.625 0 1 1-1.25 0v-3.166c0-.345.28-.625.625-.625"
                      clip-rule="evenodd"></path>
                  </svg>
                </span>
                <span class="fold-list__item-title"><?php echo getLang('security_feature-2'); ?></span>
                <span role="img" aria-hidden="true" class="icon icon--xsmall fold-list__toggle-icon">
                  <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="m20 9-8 8-8-8"></path>
                  </svg>
                </span>
                <span role="img" aria-hidden="true" class="icon icon--xsmall fold-list__toggle-icon">
                  <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="m4 15 8-8 8 8"></path>
                  </svg>
                </span>
              </label>
              <p class="fold-list__item-content paragraph-text--small">
                <?php echo getLang('security_feature_text-2'); ?>
              </p>
            </li>
            <li class="fold-list__item home-security__feature">
              <input id="security-feature-toggle-assetSegregation" type="checkbox" autocomplete="off" class="fold-list__toggle" />
              <label for="security-feature-toggle-assetSegregation" class="fold-list__item-header">
                <span role="img" aria-hidden="true" class="icon fold-list__item-icon">
                  <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path fill="currentColor"
                      d="M5.5 1a2.754 2.754 0 0 0-2.75 2.753c0 1.49 1.164 2.695 2.68 2.747a.5.5 0 0 1 .128 0h.04A2.745 2.745 0 0 0 8.25 3.753 2.754 2.754 0 0 0 5.5 1m3.247 6.905c-1.783-1.207-4.692-1.207-6.488 0C1.447 8.457 1 9.203 1 10.002s.447 1.538 1.253 2.083c.895.61 2.07.915 3.247.915 1.176 0 2.352-.305 3.247-.915C9.553 11.533 10 10.793 10 9.989c-.006-.799-.447-1.538-1.253-2.084m8.794 4.28a1.45 1.45 0 0 1 1.418 0l1.791 1.004-4.28 2.4a1.4 1.4 0 0 0-.72 1.218v4.795l-1.78-.998a1.4 1.4 0 0 1-.72-1.218v-3.98c0-.504.275-.969.72-1.218zm1.189 4.942 3.808-2.136a.476.476 0 0 1 .712.406v4.26a.93.93 0 0 1-.48.812l-3.808 2.135a.476.476 0 0 1-.712-.405v-1.065l2.854-1.6a.93.93 0 0 0 .48-.811v-1.328l-3.334 1.87v-1.327a.93.93 0 0 1 .48-.811m.727-15.776a.6.6 0 0 0-.836.147L4.396 21.813a.6.6 0 0 0 .983.689L19.604 2.187a.6.6 0 0 0-.148-.836">
                    </path>
                  </svg>
                </span>
                <span class="fold-list__item-title"><?php echo getLang('security_feature-3'); ?></span>
                <span role="img" aria-hidden="true" class="icon icon--xsmall fold-list__toggle-icon">
                  <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="m20 9-8 8-8-8"></path>
                  </svg>
                </span>
                <span role="img" aria-hidden="true" class="icon icon--xsmall fold-list__toggle-icon">
                  <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="m4 15 8-8 8 8"></path>
                  </svg>
                </span>
              </label>
              <p class="fold-list__item-content paragraph-text--small">
                <?php echo getLang('security_feature_text-3'); ?>
              </p>
            </li>
            <li class="fold-list__item home-security__feature">
              <input id="security-feature-toggle-proofOfReserves" type="checkbox" autocomplete="off" class="fold-list__toggle" />
              <label for="security-feature-toggle-proofOfReserves" class="fold-list__item-header">
                <span role="img" aria-hidden="true" class="icon fold-list__item-icon">
                  <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path fill="currentColor" fill-rule="evenodd"
                      d="M7 1.5h6v4a4 4 0 0 0 4 4h4v9a4 4 0 0 1-4 4H7a4 4 0 0 1-4-4v-13a4 4 0 0 1 4-4m7.5 0L21 8h-4a2.5 2.5 0 0 1-2.5-2.5zm.074 11.426-4.837 4.763a.84.84 0 0 1-.596.243.84.84 0 0 1-.596-.243l-1.8-1.795a.826.826 0 0 1 0-1.174.86.86 0 0 1 1.192 0l1.215 1.196 4.24-4.175a.86.86 0 0 1 1.193 0 .83.83 0 0 1-.01 1.185"
                      clip-rule="evenodd"></path>
                  </svg>
                </span>
                <span class="fold-list__item-title"><?php echo getLang('security_feature-4'); ?></span>
                <span role="img" aria-hidden="true" class="icon icon--xsmall fold-list__toggle-icon">
                  <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="m20 9-8 8-8-8"></path>
                  </svg>
                </span>
                <span role="img" aria-hidden="true" class="icon icon--xsmall fold-list__toggle-icon">
                  <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="m4 15 8-8 8 8"></path>
                  </svg>
                </span>
              </label>
              <p class="fold-list__item-content paragraph-text--small">
                <?php echo getLang('security_feature_text-4'); ?>
              </p>
            </li>
          </ul>
          <ul role="list" class="home-security__partners-list" aria-label="Our partners">
            <li>
              <picture class="home-security__partner-logo">
                <img width="107" height="32" alt="Fireblocks" loading="lazy" src="/assets/images/fireblocks-logo.light.c0db399b26.svg" />
              </picture>
            </li>
            <li>
              <picture class="home-security__partner-logo">
                <img width="75" height="32" alt="ING" loading="lazy" src="/assets/images/ing-logo.light.8c062dd755.svg" />
              </picture>
            </li>
            <li>
              <picture class="home-security__partner-logo">
                <img width="48" height="32" alt="Bunq" loading="lazy" src="/assets/images/bunq-logo.light.265f7c898d.svg" />
              </picture>
            </li>
            <li>
              <picture class="home-security__partner-logo">
                <img width="101" height="32" alt="Fourthline" loading="lazy" src="/assets/images/fourthline-logo.light.f7d3016dc5.svg" />
              </picture>
            </li>
            <li>
              <picture class="home-security__partner-logo">
                <img width="75" height="32" alt="Veriff" loading="lazy" src="/assets/images/veriff-logo.light.61460f8bae.svg" />
              </picture>
            </li>
            <li>
              <picture class="home-security__partner-logo">
                <img width="91" height="32" alt="Projective Group" loading="lazy" src="/assets/images/projective-group-logo.light.2f78b44890.svg" />
              </picture>
            </li>
          </ul>
        </div>
      </section>
      <div class="home-app-theme-wrapper">
        <section id="app-light-mode" class="home-app-theme">
          <picture class="home-app-theme__cover-picture">
            <img width="414" height="776" alt="" loading="lazy" role="presentation" src="/assets/images/app-theme-promo.light-1280.TDLYTnfGuI.webp" decoding="async" />
          </picture>
          <div class="home-app-theme__content-wrapper">
            <picture class="home-app-theme__picture">
              <img width="366" height="549" alt="" loading="lazy" role="presentation" src="/assets/images/mobile-app-theme-promo.light-990.7OL8RhDAw4.webp" decoding="async" />
            </picture>
            <div class="home-app-theme__content">
              <h2 class="page__section-title">
                <?php echo getLang('app_title'); ?>
              </h2>
              <p class="page__section-description paragraph-text">
                <?php echo getLang('app_text'); ?>
              </p>
            </div>
            <picture class="home-app-theme__picture viewport--xmedium">
              <img width="1000" height="588" alt="" loading="lazy" role="presentation" src="/assets/images/desktop-app-theme-promo.light-1080.juKvU1yRNw.webp" decoding="async" />
            </picture>
          </div>
        </section>
        <section id="app-dark-mode" class="home-app-theme home-app-theme--dark">
          <picture class="home-app-theme__cover-picture">
            <img width="414" height="776" alt="" loading="lazy" role="presentation" src="/assets/images/app-theme-promo.dark-1280.MlB-5czxAP.webp" decoding="async" />
          </picture>
          <div class="home-app-theme__content-wrapper">
            <picture class="home-app-theme__picture">
              <img width="366" height="549" alt="" loading="lazy" role="presentation" src="/assets/images/mobile-app-theme-promo.dark-990.x1zs7v1uz4.webp" decoding="async" />
            </picture>
            <div class="home-app-theme__content">
              <h2 class="page__section-title">
                <?php echo getLang('app_title'); ?>
              </h2>
              <p class="page__section-description paragraph-text">
                <?php echo getLang('app_text'); ?>
              </p>
            </div>
            <picture class="home-app-theme__picture viewport--xmedium">
              <img width="1000" height="588" alt="" loading="lazy" role="presentation" src="/assets/images/desktop-app-theme-promo.dark-1080.0AJaCwzZH9.webp" decoding="async" />
            </picture>
          </div>
        </section>
      </div>
      <div class="page__section home-features__section">
        <div class="home-features__content">
          <article class="feature-card home-features__card" id="performance-tracking">
            <div class="feature-card__content">
              <h3 class="feature-card__title">
                <?php echo getLang('feature-1_title'); ?>
              </h3>
              <p class="feature-card__description">
                <?php echo getLang('feature-1_text'); ?>
              </p>
            </div>
            <picture class="feature-card__picture">
              <img width="320" height="160" alt="" loading="lazy" role="presentation" src="/assets/images/performance-tracking-promo1-640.hS7oxgNa26.webp" decoding="async" />
            </picture>
          </article>
          <article class="feature-card home-features__card" id="staking">
            <div class="feature-card__content">
              <h3 class="feature-card__title">
                <?php echo getLang('feature-2_title'); ?>
              </h3>
              <p class="feature-card__description">
                <?php echo getLang('feature-2_text'); ?>
              </p>
              <div class="feature-card__buttons">
                <a href="<?php echo getHref('login') ?>" class="feature-card__link--cta emphasis-text link--cta link--hoverable focus-ring">
                  <span role="img" aria-hidden="true" class="icon icon--small">
                    <svg width="18" height="18" fill="none" viewBox="0 0 18 18">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5" d="M11.573 5.947 14.625 9l-3.052 3.052M3.375 9h11.123">
                      </path>
                    </svg>
                  </span>
                  <?php echo getLang('feature-2_link'); ?>
                </a>
              </div>
            </div>
            <picture class="feature-card__picture">
              <img width="320" height="160" alt="" loading="lazy" role="presentation" src="/assets/images/staking-promo1.dark-640.8sSslRH-Ar.webp" decoding="async" />
            </picture>
          </article>
          <article class="feature-card feature-card--accent home-features__card" id="auto-invest">
            <div class="feature-card__content">
              <h4 class="feature-card__title">
                <?php echo getLang('feature-3_title'); ?>
              </h4>
              <p class="feature-card__description">
                <?php echo getLang('feature-3_text'); ?>
              </p>
              <div class="feature-card__buttons">
                <a href="<?php echo getHref('login') ?>" class="feature-card__link--cta emphasis-text--small link--cta link--hoverable focus-ring">
                  <span role="img" aria-hidden="true" class="icon icon--xsmall">
                    <svg width="18" height="18" fill="none" viewBox="0 0 18 18">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5" d="M11.573 5.947 14.625 9l-3.052 3.052M3.375 9h11.123">
                      </path>
                    </svg>
                  </span>
                  <?php echo getLang('feature-3_link'); ?>
                </a>
              </div>
            </div>
            <picture class="feature-card__picture">
              <img width="320" height="160" alt="" loading="lazy" role="presentation" src="/assets/images/auto-invest-promo-640.D5tm68Xy5L.webp" decoding="async" />
            </picture>
          </article>
          <article class="feature-card home-features__card" id="crypto-deposits">
            <div class="feature-card__content">
              <h4 class="feature-card__title">
                <?php echo getLang('feature-4_title'); ?>
              </h4>
              <p class="feature-card__description">
                <?php echo getLang('feature-4_text'); ?>
              </p>
            </div>
            <picture class="feature-card__picture">
              <img width="320" height="160" alt="" loading="lazy" role="presentation" src="/assets/images/crypto-deposits-promo1-640.ApYUERpLla.webp" decoding="async" />
            </picture>
          </article>
          <article class="feature-card home-features__card" id="support">
            <div class="feature-card__content">
              <h4 class="feature-card__title">
                <?php echo getLang('feature-5_title'); ?>
              </h4>
              <p class="feature-card__description">
                <?php echo getLang('feature-5_text'); ?>
              </p>
            </div>
            <picture class="feature-card__picture">
              <img width="320" height="160" alt="" loading="lazy" role="presentation" src="/assets/images/support-promo-640.yOkYdIXaS_.webp" decoding="async" />
            </picture>
          </article>
        </div>
      </div>
      <section id="registration" class="page__section page__section--no-top-spacing home-registration">
        <h3><?php echo getLang('registration_title'); ?></h3>
        <ol role="list" class="steps-list steps-list--centered">
          <li class="step">
            <span class="icon-backdrop icon-backdrop--accent step__badge">
              <span role="img" aria-hidden="true" class="icon icon--medium">
                <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                  <path fill="currentColor" fill-rule="evenodd"
                    d="M16.95 6.878c0 2.694-2.216 4.878-4.95 4.878S7.05 9.572 7.05 6.878 9.266 2 12 2s4.95 2.184 4.95 4.878M3 21.512c0-4.039 4.04-7.317 9-7.317s9 3.278 9 7.317a.487.487 0 0 1-.495.488H3.495A.487.487 0 0 1 3 21.512"
                    clip-rule="evenodd"></path>
                </svg>
              </span>
            </span>
            <div class="step__content">
              <h4 class="step__title">
                <?php echo getLang('step-1_title'); ?>
              </h4>
            </div>
          </li>
          <li class="step">
            <span class="icon-backdrop icon-backdrop--accent step__badge">
              <span role="img" aria-hidden="true" class="icon icon--medium">
                <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                  <path fill="currentColor" fill-rule="evenodd"
                    d="M11.373 1.142a4.8 4.8 0 0 1 1.254 0c.47.062.923.217 1.588.445l.083.028 7.055 2.417a1 1 0 0 1 .229.117c.287.204.515.483.657.807.1.227.133.447.148.643.013.178.013.385.013.6v.666c0 .264 0 .515-.017.726-.02.23-.064.491-.199.751-.19.366-.49.66-.857.845-.26.13-.52.173-.75.191l-.177.01v7.717l.177.01c.23.019.49.062.75.192.366.184.667.478.857.844.135.26.18.522.198.752.018.21.018.461.018.726v.24c0 .265 0 .516-.017.727-.02.23-.064.491-.199.751-.19.366-.49.66-.857.845-.26.13-.52.172-.75.19-.213.018-.466.018-.736.018H4.159c-.27 0-.523 0-.735-.017a2 2 0 0 1-.75-.191 1.95 1.95 0 0 1-.858-.845 2 2 0 0 1-.199-.751 9 9 0 0 1-.017-.726v-.242c0-.264 0-.514.017-.725.02-.23.064-.492.199-.752.19-.366.49-.66.857-.844.26-.13.52-.173.75-.192l.177-.01V9.388l-.176-.01a2 2 0 0 1-.75-.191 1.95 1.95 0 0 1-.858-.845 2 2 0 0 1-.199-.751 9 9 0 0 1-.017-.726v-.666c0-.215 0-.422.013-.6.015-.196.049-.416.148-.643.142-.324.37-.603.657-.807a1 1 0 0 1 .229-.117l7.055-2.417.083-.028c.665-.228 1.117-.383 1.588-.445M5.4 9.395v7.703h3.2V9.395zm5 0v7.703h3.2V9.395zm5 0v7.703h3.2V9.395z"
                    clip-rule="evenodd"></path>
                </svg>
              </span>
            </span>
            <div class="step__content">
              <h4 class="step__title">
                <?php echo getLang('step-2_title'); ?>
              </h4>
            </div>
          </li>
          <li class="step">
            <span class="icon-backdrop icon-backdrop--accent step__badge">
              <span role="img" aria-hidden="true" class="icon icon--medium">
                <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                  <path fill="currentColor"
                    d="M12 15.7v.11c0 .28-.22.5-.5.5h-9c-.28 0-.5-.22-.5-.5v-.11c0-1.76.44-2.2 2.22-2.2h5.56c1.78 0 2.22.44 2.22 2.2m-9.5 1.61c-.28 0-.5.22-.5.5v1.99c0 1.76.44 2.2 2.22 2.2h5.56c1.78 0 2.22-.44 2.22-2.2v-1.99c0-.28-.22-.5-.5-.5z">
                  </path>
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M22 15c0 3.87-3.13 7-7 7l1.05-1.75M2 9c0-3.87 3.13-7 7-7L7.95 3.75"></path>
                  <path fill="currentColor" d="M18.5 11a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9"></path>
                </svg>
              </span>
            </span>
            <div class="step__content">
              <h4 class="step__title">
                <?php echo getLang('step-3_title'); ?>
              </h4>
            </div>
          </li>
        </ol>
        <a href="<?php echo getHref('login') ?>" rel="noopener noreferrer nofollow" class="button focus-ring hoverable-control button--primary">
          <?php echo getLang('registration_button'); ?>
        </a>
      </section>
      <section id="experience" class="page__section page__section--positive">
        <div class="max-content-container home-experience__content">
          <h2 class="home-experience__title">
            <?php echo getLang('experience_title'); ?>
          </h2>
          <p class="page__section-description paragraph-text">
            <?php echo getLang('experience_text-1'); ?>
          </p>
          <p class="page__section-description paragraph-text">
            <?php echo getLang('experience_text-2'); ?>
          </p>
          <a href="<?php echo getHref('about') ?>" class="emphasis-text link--cta focus-ring">
            <span role="img" aria-hidden="true" class="icon icon--small">
              <svg width="18" height="18" fill="none" viewBox="0 0 18 18">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5" d="M11.573 5.947 14.625 9l-3.052 3.052M3.375 9h11.123"></path>
              </svg>
            </span>
            <?php echo getLang('experience_link'); ?>
          </a>
        </div>
      </section>
      <section id="platform-promotion" class="page__section">
        <div class="max-content-container page__section-content-wrapper">
          <div>
            <h3 class="page__section-title">
              <?php echo getLang('platform_title'); ?>
            </h3>
            <p class="page__section-description paragraph-text">
              <?php echo getLang('platform_text'); ?>
            </p>
            <div>
              <a href="<?php echo getHref('login') ?>" rel="noopener noreferrer nofollow" class="button focus-ring hoverable-control button--medium button--primary page__section-cta">
                <?php echo getLang('platform_button'); ?>
              </a>
            </div>
          </div>
          <picture class="page__section-picture">
            <img width="366" height="314" alt="" loading="lazy" role="presentation" src="/assets/images/users-promo-640.Oa14EwVD_5.webp" decoding="async" />
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

    <script defer="" src="/assets/js/page~home.041ac84808.js"></script>

    <script src="/assets/js/lang.js"></script>
  </body>

</html>