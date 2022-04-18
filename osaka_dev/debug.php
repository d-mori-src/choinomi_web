<?php
    define('ROOT', '../');
    include_once(ROOT.'inc/header.php');
    include_once(ROOT.'controller/AppController.php');
    include_once('sheet.php');

    // シートデータの取得
    $sheet_name = 'private';
    $res = $sheet->spreadsheets_values->get($sheet_id, $sheet_name.'!'.$sheet_range);
?>
    <main class="sales">
        <!-- プレビュー -->
        <?php include_once(ROOT.'inc/pre_text.php'); ?>

        <?php foreach ($res->getValues() as $index => $value):?>
            <?php if ($value[0] == 'osaka'): ?>
                <?php include_once(ROOT.'inc/shop_cms.php'); ?>
            <?php endif; ?>
        <?php endforeach; ?>
    </main>

<?php include_once('../inc/footer.php'); ?>