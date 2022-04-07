<?php
    include_once(ROOT.'resource/shops.php');
?>
        <footer>
            <section class="trademark">
                <p>「ちょい飲み手帖」は株式会社SRCパートナーズにより商標登録済みです。</p>
            </section>
            <section class="innerFooter">
                <ul>
                    <li><a href="/">ホーム</a></li>
                    <li><a href="/franchise/">ちょい飲み手帖とは</a></li>
                    <li><a href="https://choinomi.jp/contact/">お問い合わせ</a></li>
                </ul>
                <ul>
                    <?php foreach ($shops as $key =>  $shop): ?>
                        <?php if ($shop['publish'] === true): ?>
                            <li><a href="/<?=$key?>/"><?=$shop['name']?>版</a></li>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </ul>
                <p>
                    株式会社SRCパートナーズ<br />
                    〒650-0037 神戸市中央区明石町48 神戸ダイヤモンドビル8F<br />
                    <a href="tel:0783305755" class="phone">TEL 078-330-5755</a>
                </p>
                <p class="copyright"><span>©</span><?=date('Y'); ?> SRC group All rights reserved.</p>
            </section>
        </footer>
    </div>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js" defer></script>
    <script src="/js/main.js" defer></script>
</body>
</html>