<?php
    define('ROOT', './');
    include_once(ROOT.'inc/header.php');
    include_once(ROOT.'resource/news.php');
?>
    <main class="top">
        <section class="hero">
            <div class="title">
                <picture>
                    <source srcset="/img/top/sp_title.svg" media="(max-width: 767px)"/>
                    <img src="/img/top/pc_title.svg" class="titleImage" alt="ちょい飲み手帖は2府3県で発行中" width="807" height="53" loading="lazy" />
                </picture>
                <div class="year"><?=date('Y年n月現在');?></div>
            </div>
            <div class="main">
                <picture>
                    <source srcset="/img/top/sp_main.png" media="(max-width: 767px)"/>
                    <img src="/img/top/pc_main.png" class="mainImage" alt="ちょい飲み手帖 媒体マップ" width="717" height="564" loading="lazy" />
                </picture>
            </div>
        </section>

        <section class="about">
            <div class="leftAbout slidein">
                <h2><img src="/img/top/h2_about.svg" class="h2Logo" alt="ちょい飲み手帖とは" width="278" height="38" loading="lazy" /></h2>
                <img src="/img/top/about_image.png" class="sp_aboutImage" alt="メニューイメージ" width="446" height="446" loading="lazy" />
                <p>
                    各エリアのお得な「ちょい飲みセット」を集めたグルメ本です。掲載店舗のアルコールドリンク一杯以上とおすすめの料理一品以上の通常1,200円以上のセットが全て税込1,000円で愉しめます♪<br />
                    『ちょい飲み手帖』でお気に入りのお店を探してみませんか？
                </p>
            </div>
            <div class="rightAbout slidein">
                <img src="/img/top/about_image.png" class="pc_aboutImage slidein" alt="メニューイメージ" width="446" height="446" loading="lazy" />
            </div>
        </section>

        <a id="book" class="anchor"></a>
        <section class="books">
            <h2 class="secTitle slidein">
                <img src="/img/top/book_title.svg" class="secTitleImage" alt="書籍一覧" width="110" height="91" loading="lazy" />
            </h2>
            
            <h3 class="slidein">近畿<span>エリア</span></h3>
            <div class="items slidein">
                <a href="/kobe/" class="item">
                    <img src="/img/top/kobe.jpg" class="bookImage" alt="ちょい飲み手帖 神戸版" width="269" height="452" loading="lazy" />
                    <p>神戸版 vol.16</p>
                    <p class="state active">販売中</p>
                </a>
                <a href="/himeji/" class="item">
                    <img src="/img/top/himeji.jpg" class="bookImage" alt="ちょい飲み手帖 姫路版" width="269" height="452" loading="lazy" />
                    <p>姫路版 vol.1</p>
                    <p class="state active">販売中</p>
                </a>
                <a href="/osaka/" class="item">
                    <img src="/img/top/osaka.jpg" class="bookImage" alt="ちょい飲み手帖 大阪版" width="269" height="452" loading="lazy" />
                    <p>大阪版 vol.1</p>
                    <p class="state">販売終了</p>
                </a>
                <a href="/osaka_kita/" class="item">
                    <img src="/img/top/osaka_kita.jpg" class="bookImage" alt="ちょい飲み手帖 大阪キタ版" width="269" height="452" loading="lazy" />
                    <p>大阪キタ版 vol.6</p>
                    <p class="state">販売終了</p>
                </a>
                <a href="/osaka_minami/" class="item">
                    <img src="/img/top/osaka_minami.jpg" class="bookImage" alt="ちょい飲み手帖 大阪ミナミ版" width="269" height="452" loading="lazy" />
                    <p>大阪ミナミ版 vol.6</p>
                    <p class="state">販売終了</p>
                </a>
                <a href="/kyoto/" class="item">
                    <img src="/img/top/default.jpg" class="bookImage" alt="ちょい飲み手帖 京都版" width="269" height="452" loading="lazy" />
                    <p>京都版 vol.2</p>
                    <p class="state">発売延期</p>
                </a>
            </div>

            <div class="items slidein">
                <a href="/okayama/" class="item">
                    <h3>中国<span>エリア</span></h3>
                    <img src="/img/top/okayama.jpg" class="bookImage" alt="ちょい飲み手帖 岡山版" width="269" height="452" loading="lazy" />
                    <p>岡山版 vol.2</p>
                    <p class="state">販売終了</p>
                </a>
                <a href="/fukuoka/" class="item">
                    <h3>九州<span>エリア</span></h3>
                    <img src="/img/top/fukuoka.jpg" class="bookImage" alt="ちょい飲み手帖 福岡版" width="269" height="452" loading="lazy" />
                    <p>福岡版 vol.2</p>
                    <p class="state">販売終了</p>
                </a>
            </div>
        </section>

        <a id="news" class="anchor"></a>
        <section class="news">
            <h2 class="secTitle slidein">
                <img src="/img/top/news_title.svg" class="secTitleImage" alt="お知らせ" width="110" height="91" loading="lazy" />
            </h2>

            <ul class="items slidein">
                <?php foreach ($newsList as $newsItem): ?>
                <li class="item">
                    <h4><?=$newsItem['release_date']?></h4>
                    <?php if ($newsItem['url'] !== ''): ?>
                        <a href="<?=$newsItem['url']?>"><?=$newsItem['lead']?></a>
                    <?php else: ?>
                        <p><?=$newsItem['lead']?></p> 
                    <?php endif; ?>
                </li>
                <?php endforeach; ?>
            </ul>
            <div class="more">もっとみる<span><img src="/img/top/down_arrow.svg" class="arrowImage" alt="" width="9" height="5" loading="lazy" /></span></div>
            <div class="close">閉じる<span><img src="/img/top/top_arrow.svg" class="arrowImage" alt="" width="9" height="5" loading="lazy" /></span></div>
        </section>
    </main>

<?php include_once('./inc/footer.php'); ?>
