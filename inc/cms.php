<?php
    // シートデータの取得
    $sheet_name = 'private';
    $res = $sheet->spreadsheets_values->get($sheet_id, $sheet_name.'!'.$sheet_range);

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $key = $_POST['key'];
        $vol = $_POST['vol'];
        $publish = $_POST['publish'];
        $name = $_POST['name'];
        $classification = $_POST['classification'];
        $area = $_POST['area'];
        $book_release = $_POST['book_release'];
        $book_start = $_POST['book_start'];
        $book_end = $_POST['book_end'];
        $plice = $_POST['plice'];
        $purchase_url = $_POST['purchase_url'];
        $lead = $_POST['lead'];
        $sns_true = $_POST['sns_true'];
        $fb_url = $_POST['fb_url'];
        $insta_url = $_POST['insta_url'];
        $tw_url = $_POST['tw_url'];
        $line_url = $_POST['line_url'];
        $contest_true = $_POST['contest_true'];
        $contest_release = $_POST['contest_release'];
        $contest_start = $_POST['contest_start'];
        $contest_end = $_POST['contest_end'];
        $contest_lead = $_POST['contest_lead'];
        $contest_endlead = $_POST['contest_endlead'];
        $questionnaire_true = $_POST['questionnaire_true'];
        $questionnaire_number = $_POST['questionnaire_number'];
        $questionnaire_start = $_POST['questionnaire_start'];
        $questionnaire_end = $_POST['questionnaire_end'];
        $questionnaire_url = $_POST['questionnaire_url'];
        $google_map = $_POST['google_map'];
        $shop_info_true = $_POST['shop_info_true'];
        $shop_info = $_POST['shop_info'];
        
        
        // 画像関係
        // 表紙
        if ($_FILES['cover']['size'] > 0) {
            $cover = uniqid(mt_rand(), true); //ファイル名をユニーク化
            $cover .= '.' . substr(strrchr($_FILES['cover']['name'], '.'), 1);
            $cover_path = '../storage/'.$key.'/'.$cover;
            $result = move_uploaded_file($_FILES['cover']['tmp_name'], $cover_path);
        } else {
            $cover = $_POST['re_cover'];
        }
        // 発売前告知【スマホ版】
        if ($_FILES['sp_before']['size'] > 0) {
            $sp_before = uniqid(mt_rand(), true); //ファイル名をユニーク化
            $sp_before .= '.' . substr(strrchr($_FILES['sp_before']['name'], '.'), 1);
            $sp_before_path = '../storage/'.$key.'/'.$sp_before;
            $result = move_uploaded_file($_FILES['sp_before']['tmp_name'], $sp_before_path);
        } else {
            $sp_before = $_POST['re_sp_before'];
        }
        // 発売前告知【PC版】
        if ($_FILES['pc_before']['size'] > 0) {
            $pc_before = uniqid(mt_rand(), true); //ファイル名をユニーク化
            $pc_before .= '.' . substr(strrchr($_FILES['pc_before']['name'], '.'), 1);
            $pc_before_path = '../storage/'.$key.'/'.$pc_before;
            $result = move_uploaded_file($_FILES['pc_before']['tmp_name'], $pc_before_path);
        } else {
            $pc_before = $_POST['re_pc_before'];
        }
        // 発売中告知【スマホ版】
        if ($_FILES['sp_period']['size'] > 0) {
            $sp_period = uniqid(mt_rand(), true); //ファイル名をユニーク化
            $sp_period .= '.' . substr(strrchr($_FILES['sp_period']['name'], '.'), 1);
            $sp_period_path = '../storage/'.$key.'/'.$sp_period;
            $result = move_uploaded_file($_FILES['sp_period']['tmp_name'], $sp_period_path);
        } else {
            $sp_period = $_POST['re_sp_period'];
        }
        // 発売中告知【PC版】
        if ($_FILES['pc_period']['size'] > 0) {
            $pc_period = uniqid(mt_rand(), true); //ファイル名をユニーク化
            $pc_period .= '.' . substr(strrchr($_FILES['pc_period']['name'], '.'), 1);
            $pc_period_path = '../storage/'.$key.'/'.$pc_period;
            $result = move_uploaded_file($_FILES['pc_period']['tmp_name'], $pc_period_path);
        } else {
            $pc_period = $_POST['re_pc_period'];
        }
        // フォトコンテスト
        if ($_FILES['contest']['size'] > 0) {
            $contest = uniqid(mt_rand(), true); //ファイル名をユニーク化
            $contest .= '.' . substr(strrchr($_FILES['contest']['name'], '.'), 1);
            $contest_path = '../storage/'.$key.'/'.$contest;
            $result = move_uploaded_file($_FILES['contest']['tmp_name'], $contest_path);
        } else {
            $contest = $_POST['re_contest'];
        }

        if ($publish == 'true') {
            $sheet_name = 'publish';
        } else {
            $sheet_name = 'private';
        }

        // 書き込みRange
        if ($key == 'kobe_books') {
            $sheet_range = 'A2:AZ2';
        }
        // if ($key == 'himeji') {
        //     $sheet_range = 'A3:AZ3';
        // }

        $values = [
            [
                $key, $vol, $publish, $name, $cover, $key, $classification, $area, 
                $book_release, $book_start, $book_end, $plice, $purchase_url, $lead,
                $sns_true, $fb_url, $insta_url, $tw_url, $line_url,
                $contest_true, $contest_release, $contest_start, $contest_end, $contest_lead, $contest_endlead,
                $questionnaire_true, $questionnaire_number, $questionnaire_start, $questionnaire_end, $questionnaire_url,
                $google_map, $shop_info_true, $shop_info, $sp_before, $pc_before, $sp_period, $pc_period,$contest
            ]
        ];

        $updateBody = new Google_Service_Sheets_ValueRange(['values' => $values]);
        $sheet->spreadsheets_values->update($sheet_id, $sheet_name.'!'.$sheet_range, $updateBody, ['valueInputOption' => 'USER_ENTERED']);

        header('Location: /'.$key.'_dev/cms/');
    }
?>
    <main class="cms">
        <form action="" method="POST" enctype="multipart/form-data">
            <?php foreach ($res->getValues() as $index => $val):?>
                <input type="hidden" name="key" value="<?=$val[0];?>">

                <dl>
                    <dt>号数</dt>
                    <dd><input type="text" name="vol" placeholder="号数" value="<?=$vol_check = !empty($val[1]) ? $val[1] : '';?>"></dd>
                </dl>

                <dl>
                    <dt>版名</dt>
                    <dd><input type="text" name="name" placeholder="版名" value="<?=$name_check = !empty($val[3]) ? $val[3] : '';?>"></dd>
                </dl>

                <dl>
                    <dt>表紙</dt>
                    <dd>
                        <input type="file" name="cover">
                        <input type="hidden" name="re_cover" value="<?=$re_cover_check = !empty($val[4]) ? $val[4] : '';?>">
                    </dd>
                </dl>
                 
                <dl>
                    <dt>表紙プレビュー</dt>
                    <dd>
                        <?php if (!empty($val[4])): ?> 
                            <img src="/storage/<?=$val[0];?>/<?=$val[4];?>" alt="">
                        <?php else: ?>
                            画像がアップロードされていません
                        <?php endif; ?>
                    </dd>
                </dl>
                
                <dl>
                    <dt>都道府県分類</dt>
                    <dd>
                        <?php if (!empty($val[6])): ?>   
                            <input type="radio" name="classification" id="kinki" value="近畿" <?=$class_check = $val[6] == '近畿' ? 'checked' : '';?>>
                            <label for="kinki">近畿</label>
                            <input type="radio" name="classification" id="chugoku" value="中国" <?=$class_check = $val[6] == '中国' ? 'checked' : '';?>>
                            <label for="chugoku">中国</label>
                            <input type="radio" name="classification" id="kyusyu" value="九州" <?=$class_check = $val[6] == '九州' ? 'checked' : '';?>>
                            <label for="kyusyu">九州</label>
                        <?php else: ?>
                            <input type="radio" name="classification" id="kinki" value="近畿">
                            <label for="kinki">近畿</label>
                            <input type="radio" name="classification" id="chugoku" value="中国">
                            <label for="chugoku">中国</label>
                            <input type="radio" name="classification" id="kyusyu" value="九州">
                            <label for="kyusyu">九州</label>
                        <?php endif; ?>
                    </dd>
                </dl>

                <dl>
                    <dt>エリア名</dt>
                    <dd><input type="text" name="area" placeholder="エリア名" value="<?=$area_check = !empty($val[7]) ? $val[7] : '';?>"></dd>
                </dl>

                <dl>
                    <dt>本誌リリース日</dt>
                    <dd><input type="text" name="book_release" placeholder="本誌リリース日" value="<?=$book_release_check = !empty($val[8]) ? $val[8] : '';?>"></dd>
                </dl>
                <dl>
                    <dt>本誌開始日</dt>
                    <dd><input type="text" name="book_start" placeholder="本誌開始日" value="<?=$book_start_check = !empty($val[9]) ? $val[9] : '';?>"></dd>
                </dl>
                <dl>
                    <dt>本誌終了日</dt>
                    <dd><input type="text" name="book_end" placeholder="本誌終了日" value="<?=$book_end_check = !empty($val[10]) ? $val[10] : '';?>"></dd>
                </dl>

                <dl>
                    <dt>価格</dt>
                    <dd><input type="text" name="plice" placeholder="価格" value="<?=$plice_check = !empty($val[11]) ? $val[11] : '';?>"></dd>
                </dl>

                <dl>
                    <dt>販売元URL</dt>
                    <dd><input type="text" name="purchase_url" placeholder="販売元URL" value="<?=$purchase_url_check = !empty($val[12]) ? $val[12] : '';?>"></dd>
                </dl>

                <dl>
                    <dt>本文</dt>
                    <dd><textarea name="lead" placeholder="本文"><?=$lead_check = !empty($val[13]) ? $val[13] : '';?></textarea></dd>
                </dl>

                <dl>
                    <dt>SNSボタンの表示可否</dt>
                    <dd>
                        <?php if (!empty($val[14])): ?>   
                            <input type="radio" name="sns_true" id="" value="true" <?=$class_check = $val[14] == 'TRUE' ? 'checked' : '';?>>
                            <label for="">あり</label>
                            <input type="radio" name="sns_true" id="" value="false" <?=$class_check = $val[14] == 'FALSE' ? 'checked' : '';?>>
                            <label for="">なし</label>
                        <?php else: ?>
                            <input type="radio" name="sns_true" id="sns_true" value="true">
                            <label for="sns_true">あり</label>
                            <input type="radio" name="sns_true" id="sns_false" value="false">
                            <label for="sns_false">なし</label>
                        <?php endif; ?>
                    </dd>
                </dl>
                <dl>
                    <dt>Facebook</dt>
                    <dd><input type="text" name="fb_url" placeholder="Facebook" value="<?=$fb_url_check = !empty($val[15]) ? $val[15] : '';?>"></dd>
                </dl>
                <dl>
                    <dt>INSTAGRAM</dt>
                    <dd><input type="text" name="insta_url" placeholder="INSTAGRAM" value="<?=$insta_url_check = !empty($val[16]) ? $val[16] : '';?>"></dd>
                </dl>
                <dl>
                    <dt>Twitter</dt>
                    <dd><input type="text" name="tw_url" placeholder="Twitter" value="<?=$tw_url_check = !empty($val[17]) ? $val[17] : '';?>"></dd>
                </dl>
                <dl>
                    <dt>LINE</dt>
                    <dd><input type="text" name="line_url" placeholder="LINE" value="<?=$line_url_check = !empty($val[18]) ? $val[18] : '';?>"></dd>
                </dl>

                <dl>
                    <dt>フォトコンテストの表示可否</dt>
                    <dd>
                        <?php if (!empty($val[19])): ?>   
                            <input type="radio" name="contest_true" id="contest_true" value="true" <?=$contest_true_check = $val[19] == 'TRUE' ? 'checked' : '';?>>
                            <label for="contest_true">あり</label>
                            <input type="radio" name="contest_true" id="contest_false" value="false" <?=$contest_true_check = $val[19] == 'FALSE' ? 'checked' : '';?>>
                            <label for="contest_false">なし</label>
                        <?php else: ?>
                            <input type="radio" name="contest_true" id="contest_true" value="true">
                            <label for="contest_true">あり</label>
                            <input type="radio" name="contest_true" id="contest_false" value="false">
                            <label for="contest_false">なし</label>
                        <?php endif; ?>
                    </dd>
                </dl>
                <dl>
                    <dt>フォトコンテストリリース日</dt>
                    <dd><input type="text" name="contest_release" placeholder="フォトコンテストリリース日" value="<?=$contest_release_check = !empty($val[20]) ? $val[20] : '';?>"></dd>
                </dl>
                <dl>
                    <dt>フォトコンテスト開始日</dt>
                    <dd><input type="text" name="contest_start" placeholder="フォトコンテスト開始日" value="<?=$contest_start_check = !empty($val[21]) ? $val[21] : '';?>"></dd>
                </dl>
                <dl>
                    <dt>フォトコンテスト終了日</dt>
                    <dd><input type="text" name="contest_end" placeholder="フォトコンテスト終了日" value="<?=$contest_end_check = !empty($val[22]) ? $val[22] : '';?>"></dd>
                </dl>
                <dl>
                    <dt>フォトコンテスト本文</dt>
                    <dd><textarea name="contest_lead" placeholder="フォトコンテスト本文"><?=$contest_lead_check = !empty($val[23]) ? $val[23] : '';?></textarea></dd>
                </dl>
                <dl>
                    <dt>フォトコンテスト終了時の本文</dt>
                    <dd><textarea name="contest_endlead" placeholder="フォトコンテスト終了時の本文"><?=$contest_endlead_check = !empty($val[24]) ? $val[24] : '';?></textarea></dd>
                </dl>

                <dl>
                    <dt>アンケートの表示可否</dt>
                    <dd>
                        <?php if (!empty($val[25])): ?>   
                            <input type="radio" name="questionnaire_true" id="questionnaire_true" value="true" <?=$questionnaire_true_check = $val[25] == 'TRUE' ? 'checked' : '';?>>
                            <label for="questionnaire_true">あり</label>
                            <input type="radio" name="questionnaire_true" id="questionnaire_false" value="false" <?=$questionnaire_true_check = $val[25] == 'FALSE' ? 'checked' : '';?>>
                            <label for="questionnaire_false">なし</label>
                        <?php else: ?>
                            <input type="radio" name="questionnaire_true" id="questionnaire_true" value="true">
                            <label for="questionnaire_true">あり</label>
                            <input type="radio" name="questionnaire_true" id="questionnaire_false" value="false">
                            <label for="questionnaire_false">なし</label>
                        <?php endif; ?>
                    </dd>
                </dl>
                <dl>
                    <dt>アンケートプレゼント数</dt>
                    <dd><input type="text" name="questionnaire_number" placeholder="アンケートプレゼント数" value="<?=$questionnaire_number_check = !empty($val[26]) ? $val[26] : '';?>">個</dd>
                </dl>
                <dl>
                    <dt>アンケート開始日</dt>
                    <dd><input type="text" name="questionnaire_start" placeholder="アンケート開始日" value="<?=$questionnaire_start_check = !empty($val[27]) ? $val[27] : '';?>"></dd>
                </dl>
                <dl>
                    <dt>アンケート終了日</dt>
                    <dd><input type="text" name="questionnaire_end" placeholder="アンケート終了日" value="<?=$questionnaire_end_check = !empty($val[28]) ? $val[28] : '';?>"></dd>
                </dl>
                <dl>
                    <dt>アンケートURL</dt>
                    <dd><input type="text" name="questionnaire_url" placeholder="アンケートURL" value="<?=$questionnaire_url_check = !empty($val[29]) ? $val[29] : '';?>"></dd>
                </dl>

                <dl>
                    <dt>GoogleMap</dt>
                    <dd><input type="text" name="google_map" placeholder="GoogleMap" value='<?=$val[30]?>'></dd>
                </dl>

                <dl>
                    <dt>ショップ情報の表示可否</dt>
                    <dd>
                        <?php if (!empty($val[31])): ?>   
                            <input type="radio" name="shop_info_true" id="shop_info_true" value="true" <?=$shop_info_true_check = $val[31] == 'TRUE' ? 'checked' : '';?>>
                            <label for="shop_info_true">あり</label>
                            <input type="radio" name="shop_info_true" id="shop_info_false" value="false" <?=$shop_info_true_check = $val[31] == 'FALSE' ? 'checked' : '';?>>
                            <label for="shop_info_false">なし</label>
                        <?php else: ?>
                            <input type="radio" name="shop_info_true" id="shop_info_true" value="true">
                            <label for="shop_info_true">あり</label>
                            <input type="radio" name="shop_info_true" id="shop_info_false" value="false">
                            <label for="shop_info_false">なし</label>
                        <?php endif; ?>
                    </dd>
                </dl>
                <dl>
                    <dt>ショップ情報</dt>
                    <dd><textarea name="shop_info" placeholder="ショップ情報"><?=$shop_info_check = !empty($val[32]) ? $val[32] : '';?></textarea></dd>
                </dl>

                <dl>
                    <dt>発売前告知アイコン【スマホ版】</dt>
                    <dd>
                        <input type="file" name="sp_before">
                        <input type="hidden" name="re_sp_before" value="<?=$re_sp_before_check = !empty($val[33]) ? $val[33] : '';?>">
                    </dd>
                </dl>
                <dl>
                    <dt>発売前告知アイコン【PC版】</dt>
                    <dd>
                        <input type="file" name="pc_before">
                        <input type="hidden" name="re_pc_before" value="<?=$re_pc_before_check = !empty($val[34]) ? $val[34] : '';?>">
                    </dd>
                </dl>
                <dl>
                    <dt>発売前告知プレビュー</dt>
                    <dd>
                        <?php if (!empty($val[33])): ?> 
                            <img src="/storage/<?=$val[0];?>/<?=$val[33];?>" alt="">
                        <?php else: ?>
                            画像がアップロードされていません
                        <?php endif; ?>
                        <?php if (!empty($val[34])): ?> 
                            <img src="/storage/<?=$val[0];?>/<?=$val[34];?>" alt="">
                        <?php else: ?>
                            画像がアップロードされていません
                        <?php endif; ?>
                    </dd>
                </dl>
                
                <dl>
                    <dt>発売中告知アイコン【スマホ版】</dt>
                    <dd>
                        <input type="file" name="sp_period">
                        <input type="hidden" name="re_sp_period" value="<?=$re_sp_period_check = !empty($val[35]) ? $val[35] : '';?>">
                    </dd>
                </dl>
                <dl>
                    <dt>発売中告知アイコン【PC版】</dt>
                    <dd>
                        <input type="file" name="pc_period">
                        <input type="hidden" name="re_pc_period" value="<?=$re_pc_period_check = !empty($val[36]) ? $val[36] : '';?>">
                    </dd>
                </dl>
                <dl>
                    <dt>発売中告知プレビュー</dt>
                    <dd>
                        <?php if (!empty($val[35])): ?> 
                            <img src="/storage/<?=$val[0];?>/<?=$val[35];?>" alt="">
                        <?php else: ?>
                            画像がアップロードされていません
                        <?php endif; ?>
                        <?php if (!empty($val[36])): ?> 
                            <img src="/storage/<?=$val[0];?>/<?=$val[36];?>" alt="">
                        <?php else: ?>
                            画像がアップロードされていません
                        <?php endif; ?>
                    </dd>
                </dl>

                <dl>
                    <dt>フォトコンテスト画像</dt>
                    <dd>
                        <input type="file" name="contest">
                        <input type="hidden" name="re_contest" value="<?=$re_contest_check = !empty($val[37]) ? $val[37] : '';?>">
                    </dd>
                </dl>
                <dl>
                    <dt>フォトコンテスト画像プレビュー</dt>
                    <dd>
                        <?php if (!empty($val[37])): ?> 
                            <img src="/storage/<?=$val[0];?>/<?=$val[37];?>" alt="">
                        <?php else: ?>
                            画像がアップロードされていません
                        <?php endif; ?>
                    </dd>
                </dl>
                
                <dl>
                    <dt>データ更新</dt>
                    <dd>
                        <input type="radio" name="publish" id="publish" value="true">
                        <label for="publish">公開リスト更新</label>
                        <input type="radio" name="publish" id="private" value="false" checked>
                        <label for="private">非公開リスト更新</label>
                    </dd>
                </dl>
                <input type="submit" value="submit">
            <?php endforeach; ?>
        </form>
    </main>