<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta name="format-detection" content="telephone=no" />

    <!-- favicon/webclipicon -->
    <link rel="icon" href="<?php echo esc_url( get_template_directory_uri() . '/img/favicon.ico' ); ?>" />
    <link rel="icon"
        href="<?php echo esc_url( get_template_directory_uri() . '/img/favicon.png" type="image/png' ); ?>" />
    <link rel="apple-touch-icon" href="<?php echo esc_url( get_template_directory_uri() . '/img/webclip.png' ); ?>" />

    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Play&family=Zen+Kaku+Gothic+New:wght@400;500;700&display=swap"
        rel="stylesheet" />

    <!-- preload -->
    <link rel="preload" href="<?php echo esc_url( get_template_directory_uri() . '/img/top/pic-top-kv.webp' ); ?>"
        as="image" type="image/webp" />
    <link rel="preload" href="<?php echo esc_url( get_template_directory_uri() . '/img/top/pic-top-kv02.webp' ); ?>"
        as="image" type="image/webp" />
    <link rel="preload" href="<?php echo esc_url( get_template_directory_uri() . '/img/top/pic-top-kv03.webp' ); ?>"
        as="image" type="image/webp" />

    <!-- css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" />
    <link rel="stylesheet"
        href="<?php echo esc_url( get_template_directory_uri() . '/css/style.css?v=20250819' . filemtime( get_template_directory() . '/css/style.css' ) ); ?>" />

    <!-- js -->
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/ScrollToPlugin.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/gsap.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js" defer></script>
    <script
        src="<?php echo esc_url( get_template_directory_uri() . '/js/main.js?v=20250819' . filemtime( get_template_directory() . '/js/main.js' ) ); ?>"
        type="module">
    </script>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <!-- header -->
    <?php
    // ページタイプ判定
    $is_top_page = is_front_page();
    $header_class = $is_top_page ? 'l-header l-header--top l-container js-header' : 'l-header l-header--sub l-container js-header';
    ?>
    <header class="<?php echo $header_class; ?>">
        <div class="l-header-inner l-container">
            <!-- ロゴ -->
            <?php $tag = ( is_front_page() ) ? 'h1' : 'p'; ?>
            <<?php echo $tag; ?> class="l-header-logo">
                <a href="<?php echo esc_url( home_url( '' ) ); ?>">
                    <img src="<?php echo esc_url(get_template_directory_uri().'/img/logo-white.png' ); ?>"
                        class="logo-image logo-image--white" width="299" height="85" alt="<?php bloginfo('name'); ?>"
                        decoding="async" />
                    <img src="<?php echo esc_url(get_template_directory_uri().'/img/logo.svg' ); ?>"
                        class="logo-image logo-image--color" width="299" height="85" alt="<?php bloginfo('name'); ?>"
                        decoding="async" />
                </a>
            </<?php echo $tag; ?>>
            <!-- ハンバーガーメニュー -->
            <dialog class="l-header-menu js-header-menu" aria-label="メニュー">
                <div class="l-header-menu-head">
                    <p class="l-header-menu-logo">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                            <img src="<?php echo esc_url(get_template_directory_uri().'/img/logo-white.png' ); ?>"
                                width="299" height="85" alt="<?php bloginfo('name'); ?>" decoding="async" />
                        </a>
                    </p>
                    <button class="l-header-menu-close-button js-hamburger-close-button">
                        <img src="<?php echo esc_url(get_template_directory_uri().'/img/icon-menu-close.svg' ); ?>"
                            width="56" height="56" alt="メニューを閉じる" decoding="async" />
                    </button>
                </div>
                <nav class="l-header-nav" aria-label="メニュー">
                    <ul class="l-header-nav-list">
                        <li class="l-header-nav-item">
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                                <span class="l-header-nav-text-en">home</span>
                                <span class="l-header-nav-text-ja">ホーム</span>
                            </a>
                        </li>
                        <li class="l-header-nav-item">
                            <a href="<?php echo esc_url( home_url( '/company/' ) ); ?>">
                                <span class="l-header-nav-text-en">company</span>
                                <span class="l-header-nav-text-ja">会社概要</span>
                            </a>
                        </li>
                        <li class="l-header-nav-item l-header-nav-item--business js-drop-down-menu-button">
                            <button>
                                <span class="l-header-nav-text-en l-header-nav-text-en--business">business</span>
                                <span class="l-header-nav-text-ja l-header-nav-text-ja--business">
                                    事業紹介
                                    <span class="l-header-nav-icon"></span>
                                </span>
                            </button>
                            <nav class="l-header-nav-sub" aria-label="サブメニュー">
                                <ul class="l-header-nav-list02 js-drop-down-menu">
                                    <li class="l-header-nav-item02">
                                        <a href="<?php echo esc_url( home_url( '/business/design/' ) ); ?>">特殊ボルトナットの設計・製造
                                            <span class="l-header-nav-item02-icon"></span>
                                        </a>
                                    </li>
                                    <li class="l-header-nav-item02">
                                        <a href="<?php echo esc_url( home_url( '/business/custom/' ) ); ?>">特殊ボルトナットのオーダーメイド
                                            <span class="l-header-nav-item02-icon"></span>
                                        </a>
                                    </li>
                                    <li class="l-header-nav-item02">
                                        <a href="<?php echo esc_url( home_url( '/business/quality/' ) ); ?>">ISO 9001
                                            認証取得の品質管理
                                            <span class="l-header-nav-item02-icon"></span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </li>
                        <li class="l-header-nav-item">
                            <a href="<?php echo esc_url( home_url( '/product/' ) ); ?>">
                                <span class="l-header-nav-text-en">product</span>
                                <span class="l-header-nav-text-ja">製品紹介</span>
                            </a>
                        </li>
                        <li class="l-header-nav-item">
                            <a href="<?php echo esc_url( home_url( '/access/' ) ); ?>">
                                <span class="l-header-nav-text-en">access</span>
                                <span class="l-header-nav-text-ja">アクセス</span>
                            </a>
                        </li>
                        <li class="l-header-nav-item">
                            <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">
                                <span class="l-header-nav-text-en">contact</span>
                                <span class="l-header-nav-text-ja l-header-nav-text-ja--contact">お問い合わせ</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </dialog>

            <button class="l-header-menu-open-button js-hamburger-button">
                <img src="<?php echo esc_url(get_template_directory_uri().'/img/icon-menu-open.svg' ); ?>" width="56"
                    height="56" alt="メニューを開く" decoding="async" />
            </button>
        </div>
    </header>