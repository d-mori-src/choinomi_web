<?php
    define('ROOT', '../');
    include_once(ROOT.'inc/header.php');
    include_once('sheet.php');
    include_once(ROOT.'controller/SalesController.php');

    // シートデータの取得
    $sheet_name = 'publish';
    $res = $sheet->spreadsheets_values->get($sheet_id, $sheet_name.'!'.$sheet_range);
?>
    <main class="salesList">
    <?php foreach ($res->getValues() as $index => $value):?>
            <?php if ($value[0] == 'himeji'): ?>
                <?php include_once(ROOT.'inc/shop_list_cms.php'); ?>
            <?php endif; ?>
        <?php endforeach; ?>
    </main>

<?php include_once('../inc/footer.php'); ?>
