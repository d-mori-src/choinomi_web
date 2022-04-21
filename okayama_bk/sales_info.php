<?php
    define('ROOT', '../');
    include_once(ROOT.'inc/header.php');
    include_once(ROOT.'resource/shops.php');
    include_once(ROOT.'controller/SalesController.php');
?>
    <main class="salesInfo">
        <?php foreach ($shops as $key =>  $shop): ?>
            <?php if ($key == 'okayama'): ?>
                <?php include_once(ROOT.'inc/sales_info.php'); ?>
            <?php endif; ?>
        <?php endforeach; ?>
    </main>

<?php include_once('../inc/footer.php'); ?>
