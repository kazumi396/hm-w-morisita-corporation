<!-- footer -->
<footer class="l-footer">
    <button class="l-footer-button js-to-top-button" aria-label="トップへ戻る"><span></span></button>
    <div class="l-footer-inner l-container">
        <div class="l-footer-info">
            <div class="l-footer-logo">
                <a href="<?php echo esc_url( home_url( '' ) ); ?>">
                    <img src="<?php echo esc_url(get_template_directory_uri().'/img/logo-white.png' ); ?>" width="300"
                        height="90" alt="MORISHITA Corporation" decoding="async" />
                </a>
            </div>
            <div class="l-footer-meta">
                <p class="l-footer-address">〒123-4567 東京都春日区青葉町2-11-7</p>
                <p class="l-footer-contact"><span>Tel.</span><span>03-1234-5678</span></p>
            </div>
            <small class="l-footer-copyright">© 2024 MORISITA inc.</small>
            <p class="l-footer-disclaimer">※このWebサイトは、Hello Mentorの課題として制作した<br
                    class="l-footer-disclaimer-br">架空のコーポレートサイトです。</p>
        </div>
        <div class="l-footer-navgroup">
            <ul class="l-footer-nav">
                <li class="l-footer-item l-footer-item--home"><a
                        href="<?php echo esc_url( home_url( '/' ) ); ?>">HOME</a></li>
                <li class="l-footer-item"><a href="<?php echo esc_url( home_url( '/company/' ) ); ?>">会社概要</a></li>
                <li class="l-footer-item"><a href="<?php echo esc_url( home_url( '/message/' ) ); ?>">代表挨拶</a></li>
                <li class="l-footer-item"><a href="<?php echo esc_url( home_url( '/access/' ) ); ?>">アクセス</a></li>
            </ul>
            <ul class="l-footer-nav02">
                <li class="l-footer-item">
                    <span>事業紹介</span>
                    <ul class="l-footer-nav-sub">
                        <li class="l-footer-item-sub"><a
                                href="<?php echo esc_url( home_url( '/business/design/' ) ); ?>">特殊ボルトナットの設計・製造</a>
                        </li>
                        <li class="l-footer-item-sub"><a
                                href="<?php echo esc_url( home_url( '/business/custom/' ) ); ?>">特殊ボルトナットのオーダーメイド</a>
                        </li>
                        <li class="l-footer-item-sub"><a
                                href="<?php echo esc_url( home_url( '/business/quality/' ) ); ?>">ISO
                                9001 認証取得の品質管理</a>
                        </li>
                    </ul>
                </li>
                <li class="l-footer-item"><a href="<?php echo esc_url( home_url( '/product/' ) ); ?>">製品紹介</a></li>
            </ul>
            <ul class="l-footer-nav03">
                <li class="l-footer-item"><a href="<?php echo esc_url( home_url( '/news/' ) ); ?>">お知らせ</a></li>
                <li class="l-footer-item"><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">お問い合わせ</a></li>
                <li class="l-footer-item"><a href="<?php echo esc_url( home_url( '/privacy/' ) ); ?>">プライバシーポリシー</a>
                </li>
            </ul>
        </div>
    </div>
</footer>
<!-- end footer -->

<?php wp_footer(); ?>
</body>

</html>