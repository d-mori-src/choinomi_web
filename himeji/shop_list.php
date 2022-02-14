<?php
    define('ROOT', '../');
    include_once(ROOT.'inc/header.php');
    include_once(ROOT.'resource/shops.php');
    include_once(ROOT.'controller/SalesController.php');
?>
    <main class="salesList">
        <?php
        foreach ($himeji_shops_array as $key => & $val) {
            if ($key > 0 && $val[0] == $himeji_shops_array[$key-1][0]) {
                $num = 0;
            } else {
                $num = 1;
                for ($i = $key + 1; $i < count($himeji_shops_array); $i++) {
                    if ($val[0] == $himeji_shops_array[$i][0]) {
                        $num++;
                    } else {
                        break;
                    }
                }
            }
            array_push($val, $num);
            }
            unset($val);
        ?>
        <section class="detail">
            <table>
                <tbody>
                    <?php foreach($himeji_shops_array as $vals): ?>
                        <tr>
                            <?php $num = array_pop($vals); ?>
                            <?php foreach ($vals as $key => $val): ?>
                                <?php if ($key == 0): ?>
                                    <?php if ($num > 0): ?>
                                        <th rowspan="<?=$num?>"><?=$val?></th>
                                    <?php endif;?>
                                <?php else: ?>
                                    <td>
                                        <?php print_r($val);?>
                                    </td>
                                <?php endif;?>
                            <?php endforeach; ?>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </section>



        <?php foreach ($shops as $key =>  $shop): ?>
            <?php if ($key == 'himeji'): ?>
                <?php include_once(ROOT.'inc/shop_list.php'); ?>
            <?php endif; ?>
        <?php endforeach; ?>
    </main>

<?php include_once('../inc/footer.php'); ?>
