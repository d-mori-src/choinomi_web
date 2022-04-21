<?php
    define('ROOT', '../');
    include_once(ROOT.'inc/header.php');
    include_once(ROOT.'resource/shops.php');
    include_once(ROOT.'controller/AppController.php');
?>
    <main class="sales">
        <?php foreach ($shops as $key =>  $shop): ?>
            <?php if ($key == 'okayama'): ?>
                <?php include_once(ROOT.'inc/shop.php'); ?>
            <?php endif; ?>
        <?php endforeach; ?>
    </main>

<?php include_once('../inc/footer.php'); ?>