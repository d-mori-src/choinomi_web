<?php
    foreach (${$shop['keyname'] . '_sales_array'} as $key => & $val) {
        if ($key > 0 and $val[0] == ${$shop['keyname'] . '_sales_array'}[$key-1][0]) {
            $num = 0;
        } else {
            $num = 1;
            for ($i = $key + 1; $i < count(${$shop['keyname'] . '_sales_array'}); $i++) {
                if ($val[0] == ${$shop['keyname'] . '_sales_array'}[$i][0]) {
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

<ul class="bread">
    <li><a href="/">ホーム</a></li>
    <li><img src="/img/shop/arrow.svg" alt="" width="6" height="3" loading="lazy"></li>
    <li><a href="/<?=$shop['keyname']?>"><?=$shop['name']?>版</a></li>
    <li><img src="/img/shop/arrow.svg" alt="" width="6" height="3" loading="lazy"></li>
    <li>vol.<?=$shop['vol']?> 販売書店</li>
</ul>

<section class="detail">  
    <table>
        <thead><tr><th></th><th>店舗名</th><th>住所</th></tr></thead>
        <tbody>
            <?php foreach(${$shop['keyname'] . '_sales_array'} as $vals): ?>
                <tr>
                    <?php $num = array_pop($vals); ?>
                    <?php foreach ($vals as $key => $val): ?>
                        <?php if ($key == 0): ?>
                            <?php if ($num > 0): ?>
                                <th rowspan="<?=$num?>"><?=$val?></th>
                            <?php endif;?>
                        <?php else: ?>
                            <td><?=$val?></td>
                        <?php endif;?>
                    <?php endforeach; ?>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</section>