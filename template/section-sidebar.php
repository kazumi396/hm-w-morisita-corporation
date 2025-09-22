<div class="news-sidebar c-sidebar">
        <nav class="c-sidebar-nav" aria-label="アーカイブページ内ナビゲーション">
                <div class="c-sidebar-title">
                        <span class="c-sidebar-title-en">archives</span>
                        <p class="c-sidebar-title-ja">アーカイブ</p>
                </div>
                <ul class="c-sidebar-list">

                        <!-- ALLリンク -->
                        <li class="c-sidebar-item <?php if ( !is_archive() ) echo ' c-sidebar-item--current'; ?>">
                                <a href="<?php echo get_permalink( get_option('page_for_posts') ); ?>">
                                        <span class="c-sidebar-item--en">ALL</span>
                                        <span class="c-sidebar-item-icon"></span>
                                </a>
                        </li>

                        <?php
      // 年別アーカイブ取得（通常投稿タイプのみ）
      global $wpdb;
      $years = $wpdb->get_results("
        SELECT DISTINCT YEAR(post_date) AS year
        FROM $wpdb->posts
        WHERE post_type = 'post'
        AND post_status = 'publish'
        ORDER BY year DESC
      ");

      foreach ( $years as $year_obj ) :
        $year = $year_obj->year;
        $year_link = get_year_link( $year );
        ?>
                        <li
                                class="c-sidebar-item<?php if ( is_year() && get_query_var('year') == $year ) echo ' c-sidebar-item--current'; ?>">
                                <a href="<?php echo esc_url( $year_link ); ?>">
                                        <p>
                                                <span class="c-sidebar-item--en"><?php echo esc_html( $year ); ?></span>
                                                <span class="c-sidebar-item--ja">年</span>
                                        </p>
                                        <span class="c-sidebar-item-icon"></span>
                                </a>
                        </li>
                        <?php endforeach; ?>

                </ul>
        </nav>
</div>