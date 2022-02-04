<ul class="bread">
    <li><a href="/">ホーム</a></li>
    <li><img src="/img/shop/arrow.svg" alt="" width="6" height="3" loading="lazy"></li>
    <li><a href="/<?=$key?>"><?=$shop['name']?>版</a></li>
    <li><img src="/img/shop/arrow.svg" alt="" width="6" height="3" loading="lazy"></li>
    <li>vol.<?=$shop['vol']?> 掲載店舗</li>
</ul>

<section class="detail">
    <ul class="shopList">
        <?php foreach(${$key . '_shops_array'} as $val): ?>
            <li class="shopItem">
                <div class="shopTop">
                    <h4><?=$val[1];?></h4>
                    <h3><?=$val[2];?></h3>
                    <div class="page">P.<?=$val[0];?></div>
                </div>
                <p>
                    <?=$val[3];?><br />
                    <?=$val[4];?><br class="sp" />
                    <?=$val[5];?>
                </p>
            </li>
        <?php endforeach; ?>
    </ul>
</section>