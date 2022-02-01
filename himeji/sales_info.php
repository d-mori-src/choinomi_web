<?php
    include_once('../controller/SalesController.php');
    include_once('../inc/header.php');
?>
    <main class="salesInfo">
        <section class="detail">
            <table>
                <tr><th>エリア</th><th>店舗名</th><th>住所</th></tr>
                <?php foreach($himeji_array as $val): ?>
                    <tr><td><?=$val[0];?></td><td><?=$val[1];?></td><td><?=$val[2];?></td></tr>
                <?php endforeach; ?>
            </table>
        </section>
    </main>

<?php include_once('../inc/footer.php'); ?>
