<?php
    include_once('./inc/init.php');
    include_once('./inc/header.php');
?>
    <main class="top">
        <section class="hero">
            <div class="title">
                <picture>
                    <source srcset="\.\./img/top/sp_title.svg" media="(max-width: 767px)"/>
                    <img src="\.\./img/top/pc_title.svg" class="titleImage" alt="ちょい飲み手帖は2府3県で発行中" width="807" height="53" loading="lazy" />
                </picture>
                <div class="year"><?=$year;?></div>
            </div>
            <div class="main">
                <picture>
                    <source srcset="\.\./img/top/sp_main.png" media="(max-width: 767px)"/>
                    <img src="\.\./img/top/pc_main.png" class="mainImage" alt="ちょい飲み手帖 媒体マップ" width="717" height="564" loading="lazy" />
                </picture>
            </div>
        </section>

        <section class="about">
            <div class="leftAbout">
                <h2><img src="\.\./img/top/h2_about.svg" class="h2Logo" alt="ちょい飲み手帖とは" width="278" height="38" loading="lazy" /></h2>
                <img src="\.\./img/top/about_image.png" class="sp_aboutImage" alt="メニューイメージ" width="446" height="446" loading="lazy" />
                <p>各エリアのお得な「ちょい飲みセット」を集めたグルメ本です。掲載店舗のアルコールドリンク一杯以上とおすすめの料理一品以上の通常1,200円以上のセットが全て税込1,000円で愉しめます♪『ちょい飲み手帖』でお気に入りのお店を探してみませんか？</p>
            </div>
            <div class="rightAbout">
                rightAbout
            </div>
        </section>

    </main>

<?php include_once('./inc/footer.php'); ?>
