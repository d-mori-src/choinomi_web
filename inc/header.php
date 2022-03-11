<?php
    date_default_timezone_set('Asia/Tokyo');
?>

<!doctype html>
<html class="no-js" lang="ja">
  <head>
    <meta charset="utf-8">
    <title>ちょい飲み手帖 公式サイト</title>
    <meta name="description" content="各エリアのちょい飲みセットが大集結!通常1,200円以上のちょい飲みセットが全て税込1,000円で愉しめます♪ 会社帰りに一人で、会社の上司部下と、お友達と新しいお店探しに、『ちょい飲み手帖』でお気に入りのお店を探してみませんか？">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="">
    <meta property="og:type" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    <meta name="theme-color" content="#1E2C4B">
    <link rel="manifest" href="site.webmanifest">
    <link rel="apple-touch-icon" href="/meta/icon.png">
    <link rel="shortcut icon" href="/meta/favicon.ico">
    <link rel="stylesheet" href="/css/normalize.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/slidein.css">
    <link rel="stylesheet" href="/css/drawer.css">

    <!-- 各種css -->
    <link rel="stylesheet" href="/css/header.css">
    <link rel="stylesheet" href="/css/footer.css">
    <link rel="stylesheet" href="/css/top.css">
    <link rel="stylesheet" href="/css/sales.css">
    <link rel="stylesheet" href="/css/sales_info.css">
    <link rel="stylesheet" href="/css/shop_list.css">
    <link rel="stylesheet" href="/css/franchise.css">
    <link rel="stylesheet" href="/css/notfound.css">

    <link rel="stylesheet" href="/css/cms.css">
</head>
<body>
    <div class="container">
        <header>
            <section class="innerHeader">
                <a href="/"><img src="/img/common/logo_wh.svg" class="logoImage" alt="ちょい飲み手帖" width="160" height="27" loading="lazy"></a>

                <ul class="pc-navi">
                    <li><a href="/franchise/"><img src="/img/common/pc-naviAbout.svg" alt="書籍一覧" width="117" height="12" loading="lazy"></a></li>
                    <li><a href="/#book"><img src="/img/common/pc-naviBook.svg" alt="書籍一覧" width="51" height="12" loading="lazy"></a></li>
                    <li><a href="/#news"><img src="/img/common/pc-naviNews.svg" alt="お知らせ" width="55" height="12" loading="lazy"></a></li>
                    <li><a href="/contact/"><img src="/img/common/pc-naviContact.svg" alt="お問い合わせ" width="76" height="12" loading="lazy"></a></li>
                </ul>
            </section>
        </header>

        <!-- モバイルのみドロワーメニュー -->
        <input type="checkbox" class="openSidebarMenu" id="openSidebarMenu">
        <label for="openSidebarMenu" class="sidebarIconToggle">
            <div class="spinner diagonal part-1"></div>
            <div class="spinner horizontal"></div>
            <div class="spinner diagonal part-2"></div>
        </label>
        <div id="sidebarMenu">
            <ul>
                <li><a href="/"><img src="/img/common/sp-naviHome.svg" alt="ホーム" width="65" height="11" loading="lazy"></a></li>
                <li><a href="/franchise/"><img src="/img/common/sp-naviAbout.svg" alt="FC募集" width="65" height="11" loading="lazy"></a></li>
                <li><a href="/contact/"><img src="/img/common/sp-naviContact.svg" alt="お問い合わせ" width="114" height="15" loading="lazy"></a></li>
            </ul>
        </div>
        <!-- /モバイルのみドロワーメニュー -->