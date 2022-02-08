<?php
    define('ROOT', '../');
    include_once(ROOT.'inc/header.php');
    include_once(ROOT.'resource/shops.php');
    include_once(ROOT.'controller/SalesController.php');
?>
    <main class="salesInfo">
        <!-- エリア部分まとめる（試作中） -->
        <?php
            $prev_area = $tmp = $table_html = '';
            $row_count = 0;
            foreach ($himeji_sales_array as $key => $val) {
                echo $val[0].'<br/>';
                if ($key > 0 && $val[0] != $prev_area) {
                    $tmp = "<tr><th rowspan=\"{$row_count}\">{$prev_area}</th>" . $tmp;
                    $table_html .= $tmp;
                    $tmp = '';
                    $row_count = 0;
                }
                $prev_area = $val[0];
                if ($row_count > 0) {
                    $tmp .= "<tr><td>{$val[1]}</td><td>{$val[2]}</td></tr>";
                }
                $row_count++;
            }
            $table_html .= $tmp;
        ?>
        <table><?=$table_html?></table>

        <!-- 単純に表示 -->
        <?php foreach ($shops as $key =>  $shop): ?>
            <?php if ($key == 'himeji'): ?>
                <?php include_once(ROOT.'inc/sales_info.php'); ?>
            <?php endif; ?>
        <?php endforeach; ?>
    </main>

<?php include_once('../inc/footer.php'); ?>
