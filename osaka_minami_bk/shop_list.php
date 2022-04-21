<?php
    define('ROOT', '../');
    include_once(ROOT.'inc/header.php');
    include_once(ROOT.'resource/shops.php');
    include_once(ROOT.'controller/SalesController.php');
?>
    <main class="salesList">
        <?php foreach ($shops as $key =>  $shop): ?>
            <?php if ($key == 'osaka_minami'): ?>
                <?php include_once(ROOT.'inc/shop_list.php'); ?>
            <?php endif; ?>
        <?php endforeach; ?>
    </main>

<?php include_once('../inc/footer.php'); ?>
