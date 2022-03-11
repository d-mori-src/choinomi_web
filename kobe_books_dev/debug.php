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
        <?php foreach ($res->getValues() as $index => $val):?>

        <?php endforeach; ?>

        <?php // foreach ($arr[0] as $key =>  $shop): ?>
            <?php // if ($key == 'kobe_books'): ?>
                <?php // include_once(ROOT.'inc/shop.php'); ?>
            <?php // endif; ?>
        <?php // endforeach; ?>
    </main>

<?php include_once('../inc/footer.php'); ?>