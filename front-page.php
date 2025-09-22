<?php get_header(); ?>

<main>
    <!-- kv -->
    <div class="top-kv js-scrollTarget">
        <div class="splide js-top-kv-slider" role="group" aria-label="トップKVスライダー">
            <div class="splide__track">
                <ul class="splide__list top-kv-list">
                    <li class="splide__slide">
                        <picture>
                            <source
                                srcset="<?php echo esc_url(get_template_directory_uri().'/img/top/pic-top-kv.webp' ); ?>"
                                type="image/webp" />
                            <img src="<?php echo esc_url(get_template_directory_uri().'/img/top/pic-top-kv.jpg' ); ?>"
                                width="1764" height="1146" alt="自動車工場で作業着を着た男性がスパナを手に作業をしている手元写真" decoding="async"
                                loading="eager" fetchpriority="high" />
                        </picture>
                    </li>
                    <li class="splide__slide">
                        <picture>
                            <source
                                srcset="<?php echo esc_url(get_template_directory_uri().'/img/top/pic-top-kv02.webp' ); ?>"
                                type="image/webp" />
                            <img src=""
                                data-splide-lazy="<?php echo esc_url(get_template_directory_uri().'/img/top/pic-top-kv02.jpg' ); ?>"
                                width="1764" height="1146" alt="ナットを選ぶ手元写真" decoding="async" />
                        </picture>
                    </li>
                    <li class="splide__slide">
                        <picture>
                            <source
                                srcset="<?php echo esc_url(get_template_directory_uri().'/img/top/pic-top-kv03.webp' ); ?>"
                                type="image/webp" />
                            <img src=""
                                data-splide-lazy="<?php echo esc_url(get_template_directory_uri().'/img/top/pic-top-kv03.jpg' ); ?>"
                                width="1764" height="1146" alt="散らばるボルトナット写真" decoding="async" />
                        </picture>
                    </li>
                </ul>
            </div>
        </div>

        <div class="top-kv-inner">
            <div class="top-kv-content">
                <div class="top-kv-text">
                    <p class="top-kv-text-ja">
                        <span>特殊ボルトナット制作の</span>
                        <span>プロフェッショナル</span>
                    </p>
                    <p class="top-kv-text-en">Special bolt and nut production professionals</p>
                </div>
            </div>
        </div>
    </div>
    <!-- end kv -->

    <!-- news -->
    <section class="top-news">
        <div class="top-news-inner">
            <div class="c-title top-news-title">
                <span class="c-title-en top-news-title-en">news</span>
                <h2 class="c-title-ja top-news-title-ja">お知らせ</h2>
            </div>
            <?php $args = array(
                'post_type'      => 'post',
                'posts_per_page' => 3,
            );
            $the_query = new WP_Query($args);
            ?>
            <?php if ($the_query->have_posts()): ?>
            <div class="top-news-list">
                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                <article class="c-news-item">
                    <a href="<?php echo esc_url( get_the_permalink() );?>" class="c-news-item-link">
                        <time datetime="<?php the_time( 'Y-m-d' ); ?>"
                            class="c-news-item-date"><?php the_time( get_option( 'date_format' ) ); ?></time>
                        <h3 class="c-news-item-title"><?php echo esc_html( get_the_title() );?></h3>
                    </a>
                </article>
                <?php endwhile; ?>
            </div>
            <?php else : ?>
            <p class="u-align-center">まだ投稿がありません</p>
            <?php endif; wp_reset_postdata(); ?>
        </div>
        <div class="top-news-button-wrapper">
            <a href="<?php echo esc_url( home_url( '/news/' ) ); ?>" class="c-button top-news-button">view more<span
                    class="c-button-icon"></span></a>
        </div>

    </section>
    <!-- end news -->

    <!-- business -->
    <section class="top-business l-container">
        <picture class="top-business-image">
            <source media="(min-width:768px)"
                srcset="<?php echo esc_url(get_template_directory_uri().'/img/top/pic-top-business.jpg' ); ?>" />
            <img src="<?php echo esc_url(get_template_directory_uri().'/img/top/pic-top-business-sp.jpg' ); ?>"
                width="680" height="454" alt="青い作業着を着て軍手をし、機械の点検作業をしている従業員の写真" decoding="async" />
        </picture>
        <div class="top-business-content">
            <div class="top-business-text">
                <div class="c-title c-top-title">
                    <span class="c-title-en c-top-title-en">business</span>
                    <h2 class="c-title-ja c-top--title-ja top-business-text-ja">事業紹介</h2>
                </div>
                <p class="c-top-catchcopy">高品質な<br class="top-business-sp-br" />ボルトナットで、<br />世界を支える。</p>
                <p class="top-business-message">
                    <span>どんな環境にも、最適なソリューション。</span>
                    <span>豊富な経験と技術力で、お客様のニーズに答える製品づくりをしています。</span>
                </p>
            </div>
            <ul class="top-business-list">
                <li class="top-business-item">
                    <a href="<?php echo esc_url( home_url( '/business/design/' ) ); ?>">
                        <p>特殊ボルトナットの設計・製造</p>
                        <div class="top-business-item-icon-wrap">
                            <span class="top-business-item-icon"></span>
                        </div>
                    </a>
                </li>
                <li class="top-business-item">
                    <a href="<?php echo esc_url( home_url( '/business/custom/' ) ); ?>">
                        <p>特殊ボルトナットのオーダーメイド</p>
                        <div class="top-business-item-icon-wrap">
                            <span class="top-business-item-icon"></span>
                        </div>
                    </a>
                </li>
                <li class="top-business-item">
                    <a href="<?php echo esc_url( home_url( '/business/quality/' ) ); ?>">
                        <p>ISO 9001 認証取得の品質管理</p>
                        <div class="top-business-item-icon-wrap">
                            <span class="top-business-item-icon"></span>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </section>
    <!-- end business -->

    <!-- product -->
    <section class="top-product">
        <div class="top-product-background">
            <picture>
                <source media="(min-width: 768px)"
                    srcset="<?php echo esc_url(get_template_directory_uri().'/img/top/bg-top-product.jpg' ); ?>" />
                <img src="<?php echo esc_url(get_template_directory_uri().'/img/top/bg-top-product-sp.jpg' ); ?>"
                    width="760" height="1846" alt="" decoding="async" />
            </picture>
        </div>
        <div class="top-product-inner">
            <div class="top-product-header l-container">
                <div class="top-product-text">
                    <div class="c-title c-top-title">
                        <span class="c-title-en c-top-title-en">product</span>
                        <h2 class="c-title-ja c-top-title-ja">製品紹介</h2>
                    </div>
                    <p class="c-top-catchcopy">確かな品質と技術力</p>
                    <p class="c-top-message">
                        <span>高品質・高精度のボルトナットを豊富に取り揃え。</span>
                        <span>産業の要として、お客様のニーズに応える製品をお届けします。</span>
                    </p>
                </div>
                <div class="top-product-arrow top-product-arrow--pc">
                    <button type="button" aria-label="前のスライドへ" class="top-product-arrow-wrap js-product-prev">
                        <span class="top-product-arrow-icon top-product-arrow-icon--reverse"></span>
                    </button>
                    <button type="button" aria-label="次のスライドへ" class="top-product-arrow-wrap js-product-next">
                        <span class="top-product-arrow-icon"></span>
                    </button>
                </div>
            </div>
            <div class="top-product-container">
                <div class="top-product-wrap">
                    <div class="splide js-top-product-slider" role="group" aria-label="Splideの基本的なHTML">
                        <div class="splide__track">
                            <?php $args = array(
                                'post_type' => 'product',
                                'posts_per_page' => -1,
                                'orderby'        => 'date',
                                'order'          => 'ASC',
                            );
                            $the_query = new WP_Query($args);
                            ?>
                            <?php if ($the_query->have_posts()): ?>
                            <ul class="splide__list">
                                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                                <li class="splide__slide">
                                    <article class="c-product-item c-product-item--top">
                                        <a href="<?php echo esc_url( get_the_permalink() );?>">
                                            <div class="c-product-item-wrapper c-product-item-wrapper--top">
                                                <?php echo get_the_post_thumbnail( get_the_ID(), 'full', array(
                                                        'width'     => 1000,
                                                        'height'    => 683,
                                                        'alt'       => '',
                                                        'decoding'  => 'async'
                                                    ) ); ?>
                                            </div>
                                            <div class="c-product-item-info c-product-item-info--top">
                                                <span
                                                    class="c-product-item-tag c-product-item-tag--top"><?php echo get_the_terms(get_the_ID(), 'industry')[0]->name;?></span>
                                                <h3 class="c-product-item-name c-product-item-name--top">
                                                    <?php echo esc_html( get_the_title() );?></h3>
                                            </div>
                                        </a>
                                    </article>
                                </li>
                                <?php endwhile; ?>
                            </ul>
                            <?php else : ?>
                            <p class="u-align-center">まだ投稿がありません</p>
                            <?php endif; wp_reset_postdata(); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="top-product-footer">
                <div class="top-product-arrow top-product-arrow--sp">
                    <button type="button" aria-label="前のスライドへ" class="top-product-arrow-wrap js-product-prev">
                        <span class="top-product-arrow-icon top-product-arrow-icon--reverse"></span>
                    </button>
                    <button type="button" aria-label="次ののスライドへ" class="top-product-arrow-wrap js-product-next">
                        <span class="top-product-arrow-icon"></span>
                    </button>
                </div>
                <div class="top-product-button">
                    <a href="<?php echo esc_url( home_url( '/product/' ) ); ?>">view more<span></span></a>
                </div>
            </div>
        </div>
    </section>
    <!-- end product -->

    <!-- subpage -->
    <div class="top-subpage">
        <div class="top-subpage-list">
            <article class="top-subpage-item">
                <a href="<?php echo esc_url( home_url( '/company/' ) ); ?>" aria-label="会社概要ページへのリンク">
                    <div class="top-subpage-text">
                        <div class="c-sidebar-title">
                            <span class="c-sidebar-title-en">company</span>
                            <h2 class="c-sidebar-title-ja">会社概要</h2>
                        </div>
                        <p>事業内容、経営方針など、 当社を深く知っていただくための情報をご紹介します。</p>
                    </div>
                    <div class="c-button top-subpage-button">
                        <span class="c-button-icon"></span>
                        <span class="u-visually-hidden">会社概要ページへ</span>
                    </div>
                </a>
            </article>
            <article class="top-subpage-item">
                <a href="<?php echo esc_url( home_url( '/message/' ) ); ?>" aria-label="代表挨拶ページへのリンク">
                    <div class="top-subpage-text">
                        <div class="c-sidebar-title">
                            <span class="c-sidebar-title-en">message</span>
                            <h2 class="c-sidebar-title-ja">代表挨拶</h2>
                        </div>
                        <p>私たちの理念と未来への展望をお伝えします。 社長からのメッセージをご覧ください。</p>
                    </div>
                    <div class="c-button top-subpage-button">
                        <span class="c-button-icon"></span>
                        <span class="u-visually-hidden">代表挨拶ページへ</span>
                    </div>
                </a>
            </article>
            <article class="top-subpage-item">
                <a href="<?php echo esc_url( home_url( '/access/' ) ); ?>" aria-label="アクセスページへのリンク">
                    <div class="top-subpage-text">
                        <div class="c-sidebar-title">
                            <span class="c-sidebar-title-en">access</span>
                            <h2 class="c-sidebar-title-ja">アクセス</h2>
                        </div>
                        <p>本社工場や営業所の所在地、 詳細な地図と交通手段をご確認いただけます。</p>
                    </div>
                    <div class="c-button top-subpage-button">
                        <span class="c-button-icon"></span>
                        <span class="u-visually-hidden">アクセスページへ</span>
                    </div>
                </a>
            </article>
        </div>
    </div>
    <!-- end subpage -->

</main>

<!-- section-cta -->
<?php get_template_part('template/section', 'cta'); ?>
<!-- end section-cta -->

<?php get_footer(); ?>