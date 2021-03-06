<?php
    foreach (${$shop['keyname'] . '_shops_array'} as $key => & $val) {
        if ($key > 0 && $val[0] == ${$shop['keyname'] . '_shops_array'}[$key-1][0]) {
            $num = 0;
        } else {
            $num = 1;
            for ($i = $key + 1; $i < count(${$shop['keyname'] . '_shops_array'}); $i++) {
                if ($val[0] == ${$shop['keyname'] . '_shops_array'}[$i][0]) {
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
    <li>vol.<?=$shop['vol']?> 掲載店舗</li>
</ul>

<?php if ($shop['google_map'] !==  null): ?>
    <section class="googleMap">
        <?=$shop['google_map']?>
    </section>
<?php else: ?>
    <section class="googleMap">
        <p>店舗が登録されていません</p>
    </section>
<?php endif; ?>

<?php if ($shop['shop_info_true'] === true): ?>
<section class="shopInfo">
    <h3>掲載情報変更・臨時休業のお知らせ</h3>
    <p><?=nl2br($shop['shop_info'])?></p>
</section>
<?php endif; ?>

<section class="detail">
    <table>
        <tbody>
            <?php foreach(${$shop['keyname'] . '_shops_array'} as $vals): ?>
                <tr>
                    <?php $num = array_pop($vals); ?>
                    <?php foreach ($vals as $key => $val): ?>
                        <?php if ($key == 0): ?>
                            <?php if ($num > 0): ?>
                                <th rowspan="<?=$num?>"><div class="title"><?=$val?></div></th>
                            <?php endif;?>
                        <?php endif;?>
                    <?php endforeach; ?>
                    <td>
                        <div class="innerTd">
                            <div class="tdTop">
                                <div class="page">P.<?=$vals[1];?></div>
                                <div class="name"><?=$vals[2];?></div>
                            </div>
                            <div class="tdBottom">
                                <?=$vals[3];?><br />
                                <div class="time"><?=$vals[5];?><br />
                                <!--定休日:--> <?php // echo $vals[6];?><!--<br />-->
                                <?php if ($vals[7] === '利用期間は終了しました。'): ?>
                                    <div class="extension">
                                        <img src="/img/shop/calendar.svg" class="calenderImage" alt="利用期限延長" width="47" height="60" loading="lazy" />
                                        <span><?=$vals[7];?></span>
                                    </div>
                                <?php elseif ($vals[7] !== 'なし'): ?>
                                    <div class="extension">
                                        <img src="/img/shop/calendar.svg" class="calenderImage" alt="利用期限延長" width="47" height="60" loading="lazy" />
                                        <span><?=$vals[7];?></span>まで期間延長可能です。
                                    </div>
                                <?php endif; ?>
                                <?php if ($vals[8] !== 'なし'): ?>
                                    <div class="close"><?=$vals[8];?></div>
                                <?php endif; ?>
                                <?php if ($vals[9] !== 'なし'): ?>
                                    <div class="info"><?=nl2br($vals[9]);?></div>
                                <?php endif; ?>

                                <?php if ($vals[4] == 'NEW'): ?>
                                    <div class="tag new"><?=$vals[4];?></div>
                                <?php elseif ($vals[4] == '復活'): ?>
                                    <div class="tag revival"><?=$vals[4];?></div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</section>