<?php get_header(); ?>
<main>
    <!-- sub-mv -->
    <div class="sub-mv">
        <div class="sub-mv__inner">
            <h1 class="sub-mv__title">price</h1>
            <div class="sub-mv__img">
                <picture>
                    <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/price-img-sp.jpg" media="(max-width: 768px)" />
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/price-img.jpg" alt="水面からダイバーの頭が出ている画像">
                </picture>
            </div>
        </div>
    </div>
    <!-- パンくず -->
    <div class="breadcrumb breadcrumb-layout">
        <div class="breadcrumb__inner inner">
            <!-- Breadcrumb NavXTで出力される部分 ここから -->
            <span>
                <a href="<?php echo esc_url(home_url("/")) ?>">
                    <span>top</span>
                </a>
            </span>
            &nbsp;&gt;&nbsp;
            <span>
                <span class="current-item">料金一覧</span>
            </span>
            <!-- Breadcrumb NavXTで出力される部分 ここまで -->
        </div>
    </div>
    <!-- 料金表 -->
    <section class="price price-layout">
        <div class="price__inner inner">
            <div class="price__tables price-tables">
                <table class="price-tables__item price-list">
                    <tbody>
                        <tr class="price-list__row">
                            <th class="price-list__title" rowspan="3"><span>ライセンス講習</span></th>
                            <td class="price-list__item">オープンウォーター<br class="u-mobile">ダイバーコース</td>
                            <td class="price-list__value">¥50,000</td>
                        </tr>
                        <tr class="price-list__row">
                            <td class="price-list__item">アドバンスド<br class="u-mobile">オープンウォーターコース</td>
                            <td class="price-list__value">¥60,000</td>
                        </tr>
                        <tr class="price-list__row">
                            <td class="price-list__item"><span>レスキュー＋EFRコース</span></td>
                            <td class="price-list__value">¥70,000</td>
                        </tr>
                    </tbody>
                </table>
                <table class="price-tables__item price-list">
                    <tbody>
                        <tr class="price-list__row">
                            <th class="price-list__title" rowspan="4"><span>体験ダイビング</span></th>
                            <td class="price-list__item">ビーチ体験ダイビング<br class="u-mobile">(半日)</td>
                            <td class="price-list__value">¥7,000</td>
                        </tr>
                        <tr class="price-list__row">
                            <td class="price-list__item">ビーチ体験ダイビング<br class="u-mobile">(1日)
                            <td class="price-list__value">¥14,000</td>
                        </tr>
                        <tr class="price-list__row">
                            <td class="price-list__item">ボート体験ダイビング<br class="u-mobile">(半日)</td>
                            <td class="price-list__value">¥10,000</td>
                        </tr>
                        <tr class="price-list__row">
                            <td class="price-list__item">ボート体験ダイビング<br class="u-mobile">(1日)</td>
                            <td class="price-list__value">¥18,000</td>
                        </tr>
                    </tbody>
                </table>
                <table class="price-tables__item price-list">
                    <tbody>
                        <tr class="price-list__row">
                            <th class="price-list__title" rowspan="4"><span>ファンダイビング</span></th>
                            <td class="price-list__item">ビーチダイビング<br class="u-mobile">(2ダイブ)</td>
                            <td class="price-list__value">¥14,000</td>
                        </tr>
                        <tr class="price-list__row">
                            <td class="price-list__item">ボートダイビング<br class="u-mobile">(2ダイブ)</td>
                            <td class="price-list__value">¥18,000</td>
                        </tr>
                        <tr class="price-list__row">
                            <td class="price-list__item">スペシャルダイビング<br class="u-mobile">(2ダイブ)</td>
                            <td class="price-list__value">¥24,000</td>
                        </tr>
                        <tr class="price-list__row">
                            <td class="price-list__item">ナイトダイビング<br class="u-mobile">(1ダイブ)</td>
                            <td class="price-list__value">¥10,000</td>
                        </tr>
                    </tbody>
                </table>
                <table class="price-tables__item price-list">
                    <tbody>
                        <tr class="price-list__row">
                            <th class="price-list__title" rowspan="3"><span>スペシャルダイビング</span></th>
                            <td class="price-list__item">貸切ダイビング<br class="u-mobile">(2ダイブ)</td>
                            <td class="price-list__value">¥24,000</td>
                        </tr>
                        <tr class="price-list__row">
                            <td class="price-list__item">1日ダイビング<br class="u-mobile">(3ダイブ)</td>
                            <td class="price-list__value">¥32,000</td>
                        </tr>
                        <tr class="price-list__row">
                            <td class="price-list__item">ナイトダイビング<br class="u-mobile">(2ダイブ)</td>
                            <td class="price-list__value">¥70,000</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>