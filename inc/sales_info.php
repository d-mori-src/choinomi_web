<ul class="bread">
    <li><a href="/">ホーム</a></li>
    <li><img src="/img/shop/arrow.svg" alt="" width="6" height="3" loading="lazy"></li>
    <li><a href="/<?=$key?>"><?=$shop['name']?>版</a></li>
    <li><img src="/img/shop/arrow.svg" alt="" width="6" height="3" loading="lazy"></li>
    <li>vol.<?=$shop['vol']?> 販売書店</li>
</ul>

<section class="detail">
    <table>
        <thead>
            <tr>
                <th></th>
                <th>店舗名</th>
                <th>住所</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach(${$key . '_sales_array'} as $val): ?>
                <tr>
                    <td><?=$val[0];?></td>
                    <td><?=$val[1];?></td>
                    <td><?=$val[2];?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</section>