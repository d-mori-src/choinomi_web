<?php
    define('ROOT', '../');
    include_once(ROOT.'inc/header.php');
    include_once(ROOT.'resource/shops_pre.php');
    include_once(ROOT.'controller/AppController.php');
?>
    <main class="sales">
        <!-- プレビュー -->
        <?php include_once(ROOT.'inc/pre_text.php'); ?>

        <?php foreach ($shops as $key =>  $shop): ?>
            <?php if ($key == 'kobe_books'): ?>
                <?php include_once(ROOT.'inc/shop.php'); ?>
            <?php endif; ?>
        <?php endforeach; ?>
    </main>

<?php include_once('../inc/footer.php'); ?>