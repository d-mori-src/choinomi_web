<?php
    foreach (${$value[5] . '_shops_array'} as $key => & $val) {
        if ($key > 0 && $val[0] == ${$value[5] . '_shops_array'}[$key-1][0]) {
            $num = 0;
        } else {
            $num = 1;
            for ($i = $key + 1; $i < count(${$value[5] . '_shops_array'}); $i++) {
                if ($val[0] == ${$value[5] . '_shops_array'}[$i][0]) {
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
    <li><a href="/<?=$value[5]?>"><?=$value[3]?>版</a></li>
    <li><img src="/img/shop/arrow.svg" alt="" width="6" height="3" loading="lazy"></li>
    <li>vol.<?=$value[1]?> 掲載店舗</li>
</ul>

<?php if ($value[30] !==  null): ?>
    <section class="googleMap">
        <?=$value[30]?>
    </section>
<?php else: ?>
    <section class="googleMap">
        <p>店舗が登録されていません</p>
    </section>
<?php endif; ?>

<?php if ($value[31] === 'TRUE'): ?>
<section class="shopInfo">
    <h3>掲載情報変更・臨時休業のお知らせ</h3>
    <p><?=nl2br($value[32])?></p>
</section>
<?php endif; ?>

<section class="detail">
    <table>
        <tbody>
            <?php foreach(${$value[5] . '_shops_array'} as $vals): ?>
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

                                <?php if ($vals[4] == 'NEW'): ?>
                                    <div class="tag new"><?=$vals[4];?></div>
                                <?php elseif ($vals[4] == '復活'): ?>
                                    <div class="tag revival"><?=$vals[4];?></div>
                                <?php endif; ?>
                            </div>
                            <div class="tdBottom">
                                <?=$vals[3];?><br />
                                <div class="time"><?=$vals[5];?><br />
                                定休日: <?=$vals[6];?><br />
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
                                    <div class="info">
                                        <?php if ($vals[10] !== 'なし'): ?>
                                            <img src="<?=$vals[10];?>" class="infoImage" alt="お知らせ画像" />
                                        <?php endif; ?>
                                        <p class="infoText"><?=nl2br($vals[9]);?></p>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</section>