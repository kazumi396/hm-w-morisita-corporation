<?php get_header(); ?>

<main>

    <div class="c-single-kv-wrapper js-scrollTarget">
        <div class="c-single-kv">
            <div class="c-single-kv-image">
                <?php the_post_thumbnail(); ?>
            </div>
            <div class="c-single-kv-inner l-container">
                <div class="c-single-kv-text">
                    <div class="c-title-head">
                        <div class="c-title c-title--single">
                            <span class="c-title-en c-title-en--single">product</span>
                            <p class="c-title-ja c-title-ja--light">製品紹介</p>
                        </div>
                    </div>

                    <h1 class="c-single-kv-title"><?php echo esc_html(get_the_title()); ?></h1>
                </div>
            </div>
        </div>

        <!-- parts-breadcrumb -->
        <?php get_template_part('template/parts', 'breadcrumb'); ?>
        <!-- end  parts-breadcrumb-->

    </div>

    <article class="single-product l-container-s u-ptb">
        <h2 class="u-visually-hidden">製品画像と製品仕様</h2>

        <?php
            $pic1 = get_field('product_image_sub1');
            $pic1_url = $pic1 ? $pic1['url'] : '';

            $pic2 = get_field('product_image_sub2');
            $pic2_url = $pic2 ? $pic2['url'] : '';

            $pic3 = get_field('product_image_sub3');
            $pic3_url = $pic3 ? $pic3['url'] : '';
            ?>



        <div class="single-product-thumbnail">
            <div class="single-product-image-wrapper">
                <img class="single-product-image is-active" data-image="0"
                    src="<?php echo esc_url( get_the_post_thumbnail_url() ); ?>" width="1000" height="683"
                    alt="<?php echo esc_html( get_the_title() );?>" decoding="async" />

                <?php if ( $pic1_url ) : ?>
                <img src="<?php echo $pic1_url; ?>" class="single-product-image" data-image="1" alt=""
                    decoding="async" />
                <?php endif; ?>

                <?php if ( $pic2_url ) : ?>
                <img src="<?php echo $pic2_url; ?>" class="single-product-image" data-image="2" alt=""
                    decoding="async" />
                <?php endif; ?>

                <?php if ( $pic3_url ) : ?>
                <img src="<?php echo $pic3_url; ?>" class="single-product-image" data-image="3" alt=""
                    decoding="async" />
                <?php endif; ?>
            </div>

            <ul class="single-product-thumbnail-list js-thumbnail-list">
                <li class="single-product-thumbnail-item">
                    <button class="single-product-thumbnail-image" data-button="0">
                        <img src="<?php echo esc_url( get_the_post_thumbnail_url() ); ?>" width="808" height="539"
                            alt="" />
                    </button>
                </li>

                <?php if ( $pic1_url ) : ?>
                <li class="single-product-thumbnail-item">
                    <button class="single-product-thumbnail-image" data-button="1">
                        <img src="<?php echo esc_url( $pic1_url ); ?>" alt="" decoding="async" />
                    </button>
                </li>
                <?php endif; ?>

                <?php if ( $pic2_url ) : ?>
                <li class="single-product-thumbnail-item">
                    <button class="single-product-thumbnail-image" data-button="2">
                        <img src="<?php echo esc_url( $pic2_url ); ?>" alt="" decoding="async" />
                    </button>
                </li>
                <?php endif; ?>

                <?php if ( $pic3_url ) : ?>
                <li class="single-product-thumbnail-item">
                    <button class="single-product-thumbnail-image" data-button="3">
                        <img src="<?php echo esc_url( $pic3_url ); ?>" alt="" decoding="async" />
                    </button>
                </li>
                <?php endif; ?>
            </ul>
        </div>

        <div class="c-table-wrap">
            <table class="c-table">
                <caption class="u-visually-hidden">
                    製品案内
                </caption>
                <tbody>

                    <?php
                    // ラベルとフィールドキーを対応させた配列
                    $fields = [
                        '製品名' => get_the_title(),
                        '製品コード' => get_field('product_code'),
                        '材質' => get_field('material'),
                        'サイズ（直径 x 長さ）' => get_field('size'),
                        'ドライブタイプ' => get_field('drive_type'),
                        '用途' => get_field('usage'),
                        'パッケージ単位（入数）' => get_field('package_unit'),
                    ];

                    foreach ($fields as $label => $value) : ?>
                    <tr class="c-table-row">
                        <th class="c-table-header c-table-header--product">
                            <?php echo esc_html($label); ?>
                        </th>
                        <td class="c-table-data">
                            <?php echo esc_html($value ?: '—'); ?>
                        </td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </article>

</main>

<!-- section-cta -->
<?php get_template_part('template/section', 'cta'); ?>
<!-- end section-cta -->

<?php get_footer(); ?>