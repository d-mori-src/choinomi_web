<ul class="bread">
    <li><a href="/">ホーム</a></li>
    <li><img src="/img/shop/arrow.svg" alt="" width="6" height="3" loading="lazy"></li>
    <li><?=$value[3]?>版</li>
</ul>
<section class="detail">
    <div class="cover">
        <img src="/storage/<?=$value[0]?>/<?=$value[4]?>" class="coverImage" alt="<?=$value[3]?>版 表紙" width="270" height="454" loading="lazy">
        <?php if ($today <= $value[8]): ?>
        <?php elseif ($today <= $value[8] || $today <= $value[9]): ?>
            <picture>
                <source srcset="/storage/<?=$value[0]?>/<?=$value[33]?>" media="(max-width: 767px)"/>
                <img src="/storage/<?=$value[0]?>/<?=$value[34]?>" class="infoIcon" alt="" width="205" height="82" loading="lazy" />
            </picture>
        <?php elseif ($value[9] <= $today && $today <= $value[10]): ?>
            <picture>
                <source srcset="/storage/<?=$value[0]?>/<?=$value[35]?>" media="(max-width: 767px)"/>
                <img src="/storage/<?=$value[0]?>/<?=$value[36]?>" class="infoIcon" alt="" width="205" height="82" loading="lazy" />
            </picture>
        <?php endif; ?>
    </div>

    <div class="medium">
        <div class="bookInfo">
            <div class="name">
                <img src="/img/common/logo.svg" class="logo" alt="ちょい飲み手帖" width="106" height="18" loading="lazy" />
                <span><?=$value[3]?>版 vol.<?=$value[1]?></span>
            </div>
            <?php if ($value[9] !== '0000-00-00 00:00:00'): ?>
                <div class="available">
                    <h3>利用可能期間</h3>
                    <p><?=makeDate('Y年n月j日', $value[9])?>〜<?=makeDate('Y年n月j日', $value[10])?></p>
                </div>
            <?php endif; ?>
            <div class="info">
                <dl>
                    <dt>利用可能エリア</dt>
                    <dd><?=$value[7]?></dd>
                </dl>
                <dl>
                    <dt>発売日</dt>
                    <dd>
                        <?php if ($value[9] !== '0000-00-00 00:00:00'): ?>
                            <?=makeDate('Y年n月j日', $value[9])?>
                        <?php else: ?>
                            発売未定
                        <?php endif; ?>  
                    </dd>
                </dl>
                <dl>
                    <dt>価格</dt>
                    <dd><?=$value[11]?></dd>
                </dl>
            </div>
            <div class="btnWrap">
                <a href="/<?=$value[0]?>/shop_list/" class="btn">
                    <img src="/img/shop/ochoko_icon.svg" class="btnText" alt="掲載店舗" width="55" height="9" loading="lazy" />
                    <img src="/img/shop/arrow_wh.svg" class="btnArrow" alt="" width="6" height="3" loading="lazy" />
                </a>
                <a href="/<?=$value[0]?>/sales_info/" class="btn">
                    <img src="/img/shop/book_icon.svg" class="btnText" alt="販売書店" width="55" height="9" loading="lazy" />
                    <img src="/img/shop/arrow_wh.svg" class="btnArrow" alt="" width="6" height="3" loading="lazy" />
                </a>

                <?php if ($today <= $value[8] || $today <= $value[9]): ?>
                    <span class="btn orange inactive">
                        <img src="/img/shop/en_icon.svg" class="btnText" alt="購入する" width="55" height="9" loading="lazy" />
                        <img src="/img/shop/arrow_wh.svg" class="btnArrow" alt="" width="6" height="3" loading="lazy" />
                    </span>
                <?php elseif ($value[12] === null): ?>
                    <span class="btn orange inactive">
                        <img src="/img/shop/en_icon.svg" class="btnText" alt="購入する" width="55" height="9" loading="lazy" />
                        <img src="/img/shop/arrow_wh.svg" class="btnArrow" alt="" width="6" height="3" loading="lazy" />
                    </span>
                <?php elseif ($value[9] <= $today && $today <= $value[10]): ?>
                    <a
                        href="<?=$value[12]?>"
                        target="_blank" rel="noopener noreferrer" class="btn orange"
                    >
                        <img src="/img/shop/en_icon.svg" class="btnText" alt="購入する" width="55" height="9" loading="lazy" />
                        <img src="/img/shop/arrow_wh.svg" class="btnArrow" alt="" width="6" height="3" loading="lazy" />
                    </a>
                <?php else: ?>
                    <span class="btn orange inactive">
                        <img src="/img/shop/en_icon.svg" class="btnText" alt="購入する" width="55" height="9" loading="lazy" />
                        <img src="/img/shop/arrow_wh.svg" class="btnArrow" alt="" width="6" height="3" loading="lazy" />
                    </span>
                <?php endif; ?>
            </div>
        </div>
        
        <?php if ($value[25] === 'TRUE'): ?>
            <a href="#questionnaire" class="questionnaireBanner">
                <picture>
                    <source srcset="/img/shop/sp_questionnaire.svg" media="(max-width: 767px)"/>
                    <img src="/img/shop/pc_questionnaire.svg" class="bannerImage" alt="読者アンケート実施中" width="557" height="118" loading="lazy" />
                </picture>
            </a>
        <?php endif; ?>

        <div class="lead">
            <h3><img src="/img/shop/eyecatch.svg" class="eyecatchImage" alt="お得な「ちょい飲みセット」が大集結!" width="268" height="18" loading="lazy" /></h3>
            <p><?=nl2br($value[13])?></p>
        </div>

        <?php if ($value[14] === 'TRUE'): ?>
            <div class="sns">
                <h3>SNSで最新情報をチェック</h3>
                <div class="snsItems">
                    <?php if ($value[15] !== ''):?>
                        <a href="<?=$value[15]?>" target="_blank" rel="noopener noreferrer" class="snsItem">
                            <img src="/img/shop/fb.svg" alt="Facebook" width="8" height="15" loading="lazy" />
                            <span>Facebook</span>
                        </a>
                    <?php endif;?>
                    <?php if ($value[16] !== ''):?>
                        <a href="<?=$value[16]?>" target="_blank" rel="noopener noreferrer" class="snsItem">
                            <img src="/img/shop/insta.svg" alt="Instagram" width="8" height="15" loading="lazy" />
                            <span>Instagram</span>
                        </a>
                    <?php endif;?>
                    <?php if ($value[17] !== ''):?>
                        <a href="<?=$value[17]?>" target="_blank" rel="noopener noreferrer" class="snsItem">
                            <img src="/img/shop/tw.svg" alt="Twitter" width="8" height="15" loading="lazy" />
                            <span>Twitter</span>
                        </a>
                    <?php endif;?>
                    <?php if ($value[18] !== ''):?>
                        <a href="<?=$value[18]?>" target="_blank" rel="noopener noreferrer" class="snsItem">
                            <img src="/img/shop/line.svg" alt="LINE" width="8" height="15" loading="lazy" />
                            <span>LINE</span>
                        </a>
                    <?php endif;?>
                </div>
            </div>
        <?php endif; ?>

        <?php if ($value[19] === 'TRUE'): ?>
            <div class="contest">
                <img src="/storage/<?=$value[0]?>/<?=$value[37]?>" class="contestImage" alt="フォトコンテスト結果発表" width="1034" height="1146" loading="lazy" />
                <?php if ($value[20] <= $today && $today <= $value[22]): ?>
                    <p><?=nl2br($value[23])?></p>
                <?php elseif ($value[22] <= $today): ?>
                    <p><?=nl2br($value[24])?></p>
                <?php endif; ?>
            </div>
        <?php endif; ?>

        <?php if ($value[25] === 'TRUE'): ?>
            <a id="questionnaire" class="anchor"></a>
            <?php if ($value[27] <= $today && $today <= $value[28]): ?>
                <div class="questionnaire">
                    <h2><img src="/img/shop/questionnaire_title.svg" class="secTitleImage" alt="読者アンケート" width="" height="" loading="lazy" /></h2>
                    <h4>アンケート対象<br class="sp" />ちょい飲み手帖 <?=$value[3]?>版 vol.<?=$value[1]?></h4>
                    <strong>
                        アンケートにお答えいただいた方の中から抽選で<?=$value[26]?>名様に「ちょい飲み手帖 <?=$value[3]?>版 vol.<?=$value[1] + 1?>」をプレゼント!!<br />
                        この度は『ちょい飲み手帖 <?=$value[3]?>版 vol.<?=$value[1]?>』をご購入・ご利用いただき、誠にありがとうございます。今後の改善や継続の為、実際に利用してみた感想やご意見を是非お聞かせください。
                    </strong>
                    <p>
                        ■応募締切<br />
                        <?=makeDate('Y年n月j日', $value[28])?><br />
                        <br />
                        ■応募方法<br />
                        画面下のボタンより、アンケートにご回答ください。<br />
                        <br />
                        ■注意事項<br />
                        ※お一人につき1回までのご応募となります。<br />
                        ※当選者の発表は、賞品の発送をもってかえさせていただきます。<br />
                        ※当選についてのお問い合せには対応いたしかねますので、予めご了承ください。<br />
                        ※当サイトのウェブサーバと回答者様がお使いのブラウザ間の情報はSSL技術を使って保護されています。入力していただいた個人情報は当社にて厳重に管理し、プレゼントの発送以外の目的では使用いたしません。
                    </p>
                    <a href="<?=$value[29]?>" target="_blank" rel="noopener noreferrer" class="linkBtn">
                        アンケートはこちら
                        <img src="/img/shop/arrow.svg" alt="" width="3" height="6" loading="lazy" />
                    </a>
                </div>
            <?php elseif ($value[28] <= $today): ?>
                <div class="questionnaire">
                    <h2><img src="/img/shop/questionnaire_title.svg" class="secTitleImage" alt="読者アンケート" width="" height="" loading="lazy" /></h2>
                    <h4>
                        ちょい飲み手帖 <?=$value[3]?>版 vol.<?=$value[1]?><br />
                        アンケートは終了しました。<br class="sp" />ご協力ありがとうございました。
                    </h4>
                </div>
            <?php endif; ?>
        <?php endif; ?>
    </div>
</section>