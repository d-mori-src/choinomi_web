<ul class="bread">
    <li><a href="/">ホーム</a></li>
    <li><img src="/img/shop/arrow.svg" alt="" width="6" height="3" loading="lazy"></li>
    <li><?=$shop['name']?>版</li>
</ul>
<section class="detail">
    <div class="cover">
        <img src="/img/top/<?=$shop['vol'];?>_<?=$key;?>_cover.jpg" class="coverImage" alt="<?=$shop['name']?>版 表紙" width="270" height="454" loading="lazy">
        <?php if ($today <= $shop['book_release']): ?>
        <?php elseif ($today <= $shop['book_release'] || $today <= $shop['book_start']): ?>
            <picture>
                <source srcset="/img/shop/sp_<?=$shop['vol']?>_<?=$key?>_before.svg" media="(max-width: 767px)"/>
                <img src="/img/shop/pc_<?=$shop['vol']?>_<?=$key?>_before.svg" class="infoIcon" alt="" width="205" height="82" loading="lazy" />
            </picture>
        <?php elseif ($shop['book_start'] <= $today && $today <= $shop['book_end']): ?>
            <picture>
                <source srcset="/img/shop/sp_<?=$shop['vol']?>_<?=$key?>_period.svg" media="(max-width: 767px)"/>
                <img src="/img/shop/pc_<?=$shop['vol']?>_<?=$key?>_period.svg" class="infoIcon" alt="" width="205" height="82" loading="lazy" />
            </picture>
        <?php endif; ?>
    </div>

    <div class="medium">
        <div class="bookInfo">
            <div class="name">
                <img src="/img/common/logo.svg" class="logo" alt="ちょい飲み手帖" width="106" height="18" loading="lazy" />
                <span><?=$shop['name']?>版 vol.<?=$shop['vol']?></span>
            </div>
            <?php if ($shop['book_start'] !== '0000-00-00 00:00:00'): ?>
                <div class="available">
                    <h3>利用可能期間</h3>
                    <p><?=makeDate('Y年n月j日', $shop['book_start'])?>〜<?=makeDate('Y年n月j日', $shop['book_end'])?></p>
                </div>
            <?php endif; ?>
            <div class="info">
                <dl>
                    <dt>利用可能エリア</dt>
                    <dd><?=$shop['area']?></dd>
                </dl>
                <dl>
                    <dt>発売日</dt>
                    <dd>
                        <?php if ($shop['book_start'] !== '0000-00-00 00:00:00'): ?>
                            <?=makeDate('Y年n月j日', $shop['book_start'])?>
                        <?php else: ?>
                            発売未定
                        <?php endif; ?>  
                    </dd>
                </dl>
                <dl>
                    <dt>価格</dt>
                    <dd><?=$shop['plice']?></dd>
                </dl>
            </div>
            <div class="btnWrap">
                <a href="/<?=$key?>/shop_list/" class="btn">
                    <img src="/img/shop/ochoko_icon.svg" class="btnText" alt="掲載店舗" width="55" height="9" loading="lazy" />
                    <img src="/img/shop/arrow_wh.svg" class="btnArrow" alt="" width="6" height="3" loading="lazy" />
                </a>
                <a href="/<?=$key?>/sales_info/" class="btn">
                    <img src="/img/shop/book_icon.svg" class="btnText" alt="販売書店" width="55" height="9" loading="lazy" />
                    <img src="/img/shop/arrow_wh.svg" class="btnArrow" alt="" width="6" height="3" loading="lazy" />
                </a>

                <?php if ($today <= $shop['book_release'] || $today <= $shop['book_start']): ?>
                    <span class="btn orange inactive">
                        <img src="/img/shop/en_icon.svg" class="btnText" alt="購入する" width="55" height="9" loading="lazy" />
                        <img src="/img/shop/arrow_wh.svg" class="btnArrow" alt="" width="6" height="3" loading="lazy" />
                    </span>
                <?php elseif ($shop['purchase_url'] === null): ?>
                    <span class="btn orange inactive">
                        <img src="/img/shop/en_icon.svg" class="btnText" alt="購入する" width="55" height="9" loading="lazy" />
                        <img src="/img/shop/arrow_wh.svg" class="btnArrow" alt="" width="6" height="3" loading="lazy" />
                    </span>
                <?php elseif ($shop['book_start'] <= $today && $today <= $shop['book_end']): ?>
                    <a
                        href="<?=$shop['purchase_url']?>"
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
        
        <?php if ($shop['questionnaire_true'] === true): ?>
            <a href="#questionnaire" class="questionnaireBanner">
                <picture>
                    <source srcset="/img/shop/sp_questionnaire.svg" media="(max-width: 767px)"/>
                    <img src="/img/shop/pc_questionnaire.svg" class="bannerImage" alt="読者アンケート実施中" width="557" height="118" loading="lazy" />
                </picture>
            </a>
        <?php endif; ?>

        <div class="lead">
            <h3><img src="/img/shop/eyecatch.svg" class="eyecatchImage" alt="お得な「ちょい飲みセット」が大集結!" width="268" height="18" loading="lazy" /></h3>
            <p><?=nl2br($shop['lead'])?></p>
        </div>

        <?php if ($shop['sns_true'] === true): ?>
            <div class="sns">
                <h3>SNSで最新情報をチェック</h3>
                <div class="snsItems">
                    <?php if ($shop['fb_url'] !== null):?>
                        <a href="<?=$shop['fb_url']?>" target="_blank" rel="noopener noreferrer" class="snsItem">
                            <img src="/img/shop/fb.svg" alt="Facebook" width="8" height="15" loading="lazy" />
                            <span>Facebook</span>
                        </a>
                    <?php endif;?>
                    <?php if ($shop['insta_url'] !== null):?>
                        <a href="<?=$shop['insta_url']?>" target="_blank" rel="noopener noreferrer" class="snsItem">
                            <img src="/img/shop/insta.svg" alt="Instagram" width="8" height="15" loading="lazy" />
                            <span>Instagram</span>
                        </a>
                    <?php endif;?>
                    <?php if ($shop['tw_url'] !== null):?>
                        <a href="<?=$shop['tw_url']?>" target="_blank" rel="noopener noreferrer" class="snsItem">
                            <img src="/img/shop/tw.svg" alt="Twitter" width="8" height="15" loading="lazy" />
                            <span>Twitter</span>
                        </a>
                    <?php endif;?>
                    <?php if ($shop['line_url'] !== null):?>
                        <a href="<?=$shop['line_url']?>" target="_blank" rel="noopener noreferrer" class="snsItem">
                            <img src="/img/shop/line.svg" alt="LINE" width="8" height="15" loading="lazy" />
                            <span>LINE</span>
                        </a>
                    <?php endif;?>
                </div>
            </div>
        <?php endif; ?>

        <?php if ($shop['contest_true']): ?>
            <div class="contest">
                <img src="/img/shop/<?=$shop['vol']?>_<?=$key?>_contest.png" class="contestImage" alt="フォトコンテスト結果発表" width="1034" height="1146" loading="lazy" />
                <?php if ($shop['contest_release'] <= $today && $today <= $shop['contest_end']): ?>
                    <p><?=nl2br($shop['contest_lead'])?></p>
                <?php elseif ($shop['contest_end'] <= $today): ?>
                    <p><?=nl2br($shop['contest_endlead'])?></p>
                <?php endif; ?>
            </div>
        <?php endif; ?>

        <?php if ($shop['questionnaire_true'] === true): ?>
            <a id="questionnaire" class="anchor"></a>
            <?php if ($shop['questionnaire_start'] <= $today && $today <= $shop['questionnaire_end']): ?>
                <div class="questionnaire">
                    <h2><img src="/img/shop/questionnaire_title.svg" class="secTitleImage" alt="読者アンケート" width="" height="" loading="lazy" /></h2>
                    <h4>アンケート対象<br class="sp" />ちょい飲み手帖 <?=$shop['name']?>版 vol.<?=$shop['vol']?></h4>
                    <strong>
                        アンケートにお答えいただいた方の中から抽選で<?=$shop['questionnaire_number']?>名様に「ちょい飲み手帖 <?=$shop['name']?>版 vol.<?=$shop['vol'] + 1?>」をプレゼント!!<br />
                        この度は『ちょい飲み手帖 <?=$shop['name']?>版 vol.<?=$shop['vol']?>』をご購入・ご利用いただき、誠にありがとうございます。今後の改善や継続の為、実際に利用してみた感想やご意見を是非お聞かせください。
                    </strong>
                    <p>
                        ■応募締切<br />
                        <?=makeDate('Y年n月j日', $shop['questionnaire_end'])?><br />
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
                    <a href="<?=$shop['questionnaire_url']?>" target="_blank" rel="noopener noreferrer" class="linkBtn">
                        アンケートはこちら
                        <img src="/img/shop/arrow.svg" alt="" width="3" height="6" loading="lazy" />
                    </a>
                </div>
            <?php elseif ($shop['questionnaire_end'] <= $today): ?>
                <div class="questionnaire">
                    <h2><img src="/img/shop/questionnaire_title.svg" class="secTitleImage" alt="読者アンケート" width="" height="" loading="lazy" /></h2>
                    <h4>
                        ちょい飲み手帖 <?=$shop['name']?>版 vol.<?=$shop['vol']?><br />
                        アンケートは終了しました。<br class="sp" />ご協力ありがとうございました。
                    </h4>
                </div>
            <?php endif; ?>
        <?php endif; ?>
    </div>
</section>