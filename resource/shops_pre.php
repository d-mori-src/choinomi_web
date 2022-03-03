<?php
	// プレビュー用
	$shops = [
		// 神戸版
		'kobe_books' => [
			'vol' => 17,
			'publish' => true,
			'name' => '神戸',
			'keyname' => 'kobe_books',
			'classification' => '近畿',
			'area' => '三宮・元町・神戸・BAR',
			'book_release' => '2022-03-02 00:00:00',
			'book_start' => '2022-04-22 00:00:00',
			'book_end' => '2022-08-25 00:00:00',
			'plice' => '1,100円（税込）',
			'purchase_url' => '',
			'lead' => '三宮、元町、神戸のお得な「ちょい飲みセット」を集めたグルメ本の第17弾!
				掲載店舗のアルコールドリンク一杯と各店舗がおすすめする料理一品以上の通常1,200円以上のセットが全て税込1,000円で愉しめます♪

				本誌を利用する際は、お通し代やチャージ料が一切発生いたしません。
				『ちょい飲み手帖』でお得なちょい飲み始めてみませんか？
				
				<span style="color: red;"><B>≪ 外出自粛要請や休業要請による本書の対応について ≫</B></span>
				自治体による外出自粛要請や休業要請により本誌が利用できない状況が1ヶ月以上続く場合には、有効期間を延長するなどの対応を行う場合がございます。延長する際は、利用終了日の1週間前には公式ホームページで告知しますので、お手数ですが各自でご確認くださいますようお願い申し上げます。
			',
			'sns_true' => true,
			'fb_url' => 'https://www.facebook.com/choinomi.kobe/',
			'insta_url' => 'https://www.instagram.com/choinomi_kobe/',
			'tw_url' => 'https://www.facebook.com/choinomi.kobe/',
			'line_url' => 'https://page.line.me/yyz9190b',
			'contest_true' => true,
			'contest_release' => '2021-11-15 00:00:00',
			'contest_start' => '2021-11-26 00:00:00',
			'contest_end' => '2022-03-24 00:00:00',
			'contest_lead' => '■応募期間
				2022年00月00日〜2022年00月00日
			
				■応募方法
				①ちょい飲み公式アカウント「@choinomi_kobe」をフォロー
				②ちょい飲み手帖 神戸版vol.17の掲載メニューと当該の本書を一緒に撮影
				③ハッシュタグ「#ちょい飲み手帖神戸版 」をつけてインスタグラムに投稿
				
				■キャンペーン内容
				写真を投稿してくれた人の中から5名様の投稿写真を「ちょい飲み手帖vol.18」に掲載させて頂きます。
				さらにその中でグランプリとして1名様に「ちょい飲み手帖vol.18」を1冊プレゼント!
				
				■当選について
				0/00〜00/00の間で当選者の方のみにご連絡いたします。
				ちょい飲み手帖の公式アカウントよりInstagramダイレクトメッセージにて
				個別にご連絡いたします。メッセージ配信後、3日以内にご返信が無い場合は
				当選を無効とさせて頂きますのでご注意ください。			
			',
			'contest_endlead' => 'フォトコンテスト応募期間は終了しました。
				たくさんのご応募ありがとうございます。

				■当選について
				0/00〜00/00の間でに当選者の方のみにご連絡いたします。ちょい飲み手帖の公式アカウントよりInstagramダイレクトメッセージにて個別にご連絡いたします。メッセージ配信後、3日以内にご返信が無い場合は当選を無効とさせて頂きますのでご注意ください。			
			',
			'questionnaire_true' => true,
			'questionnaire_number' => '5',
			'questionnaire_start' => '2022-03-02 00:00:00',
			'questionnaire_end' => '2022-08-25 00:00:00',
			'questionnaire_url' => 'https://ssl.src-japan.net/passport_questionnaire/72/',
			'google_map' => '<iframe src="https://www.google.com/maps/d/embed?mid=18C3-GgT6LUEVattOjoaoi7raHayhX3Cx&ehbc=2E312F" width="640" height="480"></iframe>',
			'shop_info_true' => true,
			'shop_info' => '■店名(P00)
				【営業時間変更】まん延防止期間中は、週末のみの営業になります',
		],

		// 姫路版
		// 'himeji' => [
		// 	'vol' => 1,
		// 	'publish' => true,
		// 	'name' => '姫路',
		// 	'keyname' => 'himeji',
		// 	'classification' => '近畿',
		// 	'area' => '駅東・駅西・駅南',
		// 	'book_release' => '2021-11-20 00:00:00',
		// 	'book_start' => '2021-11-26 00:00:00',
		// 	'book_end' => '2022-03-24 00:00:00',
		// 	'plice' => '1,100円（税込）',
		// 	'purchase_url' => 'https://www.amazon.co.jp/dp/B09LGNR5NT/ref=cm_sw_em_r_mt_dp_G0KYCVDG845VSWD1S8P4',
		// 	'lead' => '
		// 		JR姫路駅周辺のお得な「ちょい飲みセット」を集めたグルメ本が初創刊!
		// 		お店の名物料理とアルコールドリンク一杯以上の通常1,200円以上のセットが全て税込み1,000円で味わえます♪
				
		// 		本誌を利用する際は、お通し代やチャージ料が一切発生いたしません。
		// 		『ちょい飲み手帖』で今宵もちょいと寄り道してみませんか？
				

		// 		【ちょい飲みセットメニュー（一例）】
		// 		■ お造り桶盛り、焼き穴子、自家製漬物+生ビール・ハイボール・チューハイ各種から1杯
		// 		通常 2,400円→1,000円（税込）
				
		// 		■ 炉端メニュー2品+30分飲み放題レモンサワー
		// 		通常 1,200～1,750円→1,000円（税込）
				
		// 		■ 付き出し、ひねぽん、串カツ5種盛+生ビール、ハイボール、焼酎等から1杯
		// 		通常1,980～2,200円→1,000円（税込）
				
		// 		■ 焼鳥・ホルモン串5本+ハイボール(大)・チューハイ（大）各種から3杯
		// 		通常1,482～1,892円→1,000円（税込）
		// 	',
		// 	'sns_true' => true,
		// 	'fb_url' => 'https://www.facebook.com/choinomi.himeji/',
		// 	'insta_url' => 'https://www.instagram.com/choinomi.himeji/',
		// 	'tw_url' => null,
		// 	'line_url' => null,
		// 	'contest_true' => false,
		// 	'contest_release' => '0000-00-00 00:00:00',
		// 	'contest_start' => '0000-00-00 00:00:00',
		// 	'contest_end' => '0000-00-00 00:00:00',
		// 	'contest_lead' => '',
		// 	'contest_endlead' => '',
		// 	'questionnaire_true' => true,
		// 	'questionnaire_number' => '5',
		// 	'questionnaire_start' => '2021-12-07 00:00:00',
		// 	'questionnaire_end' => '2022-04-01 00:00:00',
		// 	'questionnaire_url' => 'https://ssl.src-japan.net/passport_questionnaire/71/',
		// 	'google_map' => '<iframe src="https://www.google.com/maps/d/embed?mid=1s9nrD6Naf2QRrigPNt2N-Hdp21nbBA_X&ehbc=2E312F" width="640" height="480"></iframe>',
		// 	'shop_info_true' => false,
		// 	'shop_info' => '■店名(P00)
		// 	【営業時間変更】まん延防止期間中は、週末のみの営業になります

		// 	■店名(P00)
		// 	【営業時間変更】まん延防止期間中は、週末のみの営業になります',
        // ],

		// 大阪版
		// 'osaka' => [
		// 	'vol' => 1,
		// 	'publish' => true,
		// 	'name' => '大阪',
		// 	'keyname' => 'osaka',
		// 	'classification' => '近畿',
		// 	'area' => '梅田・福島・なんば・心斎橋・天満・本町・京橋・天王寺',
		// 	'book_release' => '2021-04-23 00:00:00',
		// 	'book_start' => '2021-04-23 00:00:00',
		// 	'book_end' => '2021-11-18 00:00:00',
		// 	'plice' => '1,100円（税込）',
		// 	'purchase_url' => 'https://choinomi.official.ec/',
		// 	'lead' => '新型コロナウイルス感染症の拡大により、まだまだ予断を許さぬ状況ではありますが、飲食店を応援したいという思いで最新刊を発刊させていただく運びとなりました。

		// 		酒場の灯りを消さないよう、しっかりと感染症対策をおこない「ちょい飲み」を楽しんでいただければ幸いです。
				
		// 		有効期限の約4ヶ月の間、掲載店のオススメ料理とお酒がついた通常1,200円以上の「ちょい飲み手帖セット」がすべて税込1,000円で楽しめるグルメ本です。
				
		// 		<b>≪ キタ版とミナミ版が合体!大阪版としてリニューアル ≫</b>
		// 		今号より大阪キタ版と大阪ミナミ版が合体して、大阪版として生まれ変わりました。キタは梅田からミナミは天王寺まで全140店舗のちょい飲みセットをお愉しみいただけます。
				
		// 		<b>≪ 全140店おひとりさま歓迎 ≫</b>
		// 		今号はすべて「おひとりさま歓迎」のお店のみを掲載しています。
		// 		大人数での外食を控えなければならない今、まずは「ひとり飲み」で、美味しいお料理とお酒を口にする喜び、新しいお店を発見する楽しさを体験してください。
		// 		そうして、コロナが落ち着いた暁には、みなさんで楽しく飲みに行くきっかけづくりとしていただければ幸いです。
				
		// 		<b>≪ 全掲載店の感染症対策一覧を掲載 ≫</b>
		// 		読者様、掲載店様がお互いにしっかり対策しながら楽しんでほしいと考え、各店舗の「コロナ感染症対策」を一目で確認できるようにしております。
				
		// 		<b>≪ テイクアウト特集 ≫</b>
		// 		本誌持参で、掲載店のおすすめテイクアウトメニューがなんと20%以上割引。
		// 		「ちょい飲み手帖」ならぬ「宅飲み手帖」としても活用できる、withコロナ時代に相応しい特集となっています。
				
				
		// 		<font color="red"><b>≪ 利用期間を11月18日まで延長致します ≫</b>
		// 		新型コロナウイルス感染症の影響により、本誌のご利用が難しい状況が続くため、利用期間を11月18日まで延長させていただく事となりました。
				
		// 		現在、各店舗様に延長の可否を確認しております。確認が取れしだい、順次下記店舗情報を更新いたします。
		// 		なお、お店の状況によっては延長が難しい店舗様もありますので、何卒ご理解賜りますようお願い申し上げます。
				
		// 		状況が逐一変更がございますため、ご来店前に店舗様にご確認いただけましたら幸いです。
		// 		ご不便をおかして申し訳ございませんが、何卒ご理解賜りますようお願い申し上げます。
		// 		</font>
		// 	',
		// 	'sns_true' => true,
		// 	'fb_url' => 'https://www.facebook.com/choinomi.osaka/',
		// 	'insta_url' => 'https://www.instagram.com/choinomi_osaka_kyoto/',
		// 	'tw_url' => 'https://twitter.com/choinomi_osaka',
		// 	'line_url' => null,
		// 	'contest_true' => true,
		// 	'contest_release' => '2021-04-23 00:00:00',
		// 	'contest_start' => '2021-04-23 00:00:00',
		// 	'contest_end' => '2021-08-19 00:00:00',
		// 	'contest_lead' => '',
		// 	'contest_endlead' => '',
		// 	'questionnaire_true' => false,
		// 	'questionnaire_number' => '',
		// 	'questionnaire_start' => '0000-00-00 00:00:00',
		// 	'questionnaire_end' => '0000-00-00 00:00:00',
		// 	'questionnaire_url' => null,
		// 	'google_map' => '<iframe src="https://www.google.com/maps/d/embed?mid=19PNdkqZS0AnSpHO8MgbYluDg1M5GJ-q9&ehbc=2E312F" width="640" height="480"></iframe>',
		// 	'shop_info_true' => false,
		// 	'shop_info' => '■店名(P00)
		// 	【営業時間変更】まん延防止期間中は、週末のみの営業になります',
        // ],

		// 大阪キタ版
		// 'osaka_kita' => [
		// 	'vol' => 6,
		// 	'publish' => true,
		// 	'name' => '大阪キタ',
		// 	'keyname' => 'osaka_kita',
		// 	'classification' => '近畿',
		// 	'area' => '梅田エリア・福島エリア・天満エリア・京橋エリア・淀屋橋エリア',
		// 	'book_release' => '2020-02-07 13:00:00',
		// 	'book_start' => '2020-02-21 00:00:00',
		// 	'book_end' => '2020-08-18 00:00:00',
		// 	'plice' => '1,100円（税込）',
		// 	'purchase_url' => 'https://choinomi.official.ec/',
		// 	'lead' => '梅田・福島・天満・京橋、そして新たに淀屋橋エリアを加えた大阪キタエリアで、お得に素敵なお店と出会えるグルメ本です。
		// 		TVで紹介された有名店、地元の人気店、隠れた名店など、オススメのお店が満載!
		// 		掲載店の名物料理と美味しいお酒の「ちょい飲みセット」が1,000円で愉しめる一冊です。
		// 		気軽に新しいお店を開拓でき、ネット検索では出会えない地域密着の「飲む楽しさ」を体験することができます。
				
		// 		<b><font color="red">≪ 有効期限の延長に関して ≫</font></b>
				
		// 		新型コロナウイルスの感染拡大による緊急事態宣言を受け、本誌のご利用が難しい状況が続いており、ご不便をおかけして申し訳ございません。
				
		// 		本誌有効期限は〜6月18日までとなりますが、掲載店様のご協力により8月18日まで利用期間を延長させていただく事となりました。
		// 		利用期間延長ができる店舗様や詳細情報に関しましては、「掲載店舗」ページをご確認ください。			
		// 	',
		// 	'sns_true' => true,
		// 	'fb_url' => 'https://www.facebook.com/choinomi.osaka/',
		// 	'insta_url' => 'https://www.instagram.com/choinomi_osaka_kyoto/',
		// 	'tw_url' => 'https://twitter.com/choinomi_osaka',
		// 	'line_url' => null,
		// 	'contest_true' => true,
		// 	'contest_release' => '2020-02-21 00:00:00',
		// 	'contest_start' => '2020-02-21 00:00:00',
		// 	'contest_end' => '2020-08-18 00:00:00',
		// 	'contest_lead' => '',
		// 	'contest_endlead' => '',
		// 	'questionnaire_true' => true,
		// 	'questionnaire_number' => '',
		// 	'questionnaire_start' => '2020-06-02 00:00:00',
		// 	'questionnaire_end' => '2020-08-31 00:00:00',
		// 	'questionnaire_url' => 'https://ssl.src-japan.net/passport_questionnaire/65/',
		// 	'google_map' => '<iframe src="https://www.google.com/maps/d/embed?mid=1hebQUmQq2KkfESGineD0-zZQVRgeBKVT&ehbc=2E312F" width="640" height="480"></iframe>',
		// 	'shop_info_true' => false,
		// 	'shop_info' => '■店名(P00)
		// 	【営業時間変更】まん延防止期間中は、週末のみの営業になります',
        // ],

		// 大阪ミナミ版
		// 'osaka_minami' => [
		// 	'vol' => 6,
		// 	'publish' => true,
		// 	'name' => '大阪ミナミ',
		// 	'keyname' => 'osaka_minami',
		// 	'classification' => '近畿',
		// 	'area' => 'サシ飲み特集・なんば・心斎橋・本町・天王寺',
		// 	'book_release' => '2020-03-06 19:35:00',
		// 	'book_start' => '2020-03-19 00:00:00',
		// 	'book_end' => '2020-09-16 00:00:00',
		// 	'plice' => '1,100円（税込）',
		// 	'purchase_url' => 'https://choinomi.official.ec/',
		// 	'lead' => '【利用期間:2020年3月19日～2020年7月16日】

		// 		今号は読者様のご希望が多かった「天王寺」エリアが初登場!!
		// 		北は本町から南は天王寺まで全85店舗を掲載!
				
		// 		そして今回からミナミ版も利用期間が4ヶ月となりました。
		// 		なんばエリア30店舗、心斎橋エリア27店舗、本町エリア15店舗、天王寺エリア13店舗のちょい飲みセットを楽しめます。
				
		// 		TVで紹介された有名店、地元の人気店、隠れた名店など、オススメのお店が満載です。
		// 		お得に素敵なお店との出会いをお楽しみください。
				
				
		// 		<b><font color="red">≪ 有効期限の延長に関して ≫</font></b>
				
		// 		新型コロナウイルスの感染拡大による緊急事態宣言を受け、本誌のご利用が難しい状況が続いており、ご不便をおかけして申し訳ございません。
				
		// 		本誌有効期限は〜7月16日までとなりますが、掲載店様のご協力により9月16日まで利用期間を延長させていただく事となりました。
		// 		利用期間延長ができる店舗様や詳細情報に関しましては、「掲載店舗」ページよりご確認ください。	
		// 	',
		// 	'sns_true' => true,
		// 	'fb_url' => 'https://www.facebook.com/choinomi.osaka/',
		// 	'insta_url' => 'https://www.instagram.com/choinomi_osaka_kyoto/',
		// 	'tw_url' => 'https://twitter.com/choinomi_osaka',
		// 	'line_url' => null,
		// 	'contest_true' => true,
		// 	'contest_release' => '2020-03-12 00:00:00',
		// 	'contest_start' => '2020-03-19 00:00:00',
		// 	'contest_end' => '2020-06-05 00:00:00',
		// 	'contest_lead' => '',
		// 	'contest_endlead' => '',
		// 	'questionnaire_true' => true,
		// 	'questionnaire_number' => '',
		// 	'questionnaire_start' => '2020-06-02 00:00:00',
		// 	'questionnaire_end' => '2020-09-30 00:00:00',
		// 	'questionnaire_url' => 'https://ssl.src-japan.net/passport_questionnaire/66/',
		// 	'google_map' => '<iframe src="https://www.google.com/maps/d/embed?mid=1i8_UzxZ0k8jaUxTa2WnfK1kFl_BJZVe6&ehbc=2E312F" width="640" height="480"></iframe>',
		// 	'shop_info_true' => false,
		// 	'shop_info' => '■店名(P00)
		// 	【営業時間変更】まん延防止期間中は、週末のみの営業になります',
        // ],

		// 京都版
		// 'kyoto' => [
		// 	'vol' => 5,
		// 	'publish' => true,
		// 	'name' => '京都',
		// 	'keyname' => 'kyoto',
		// 	'classification' => '近畿',
		// 	'area' => '決まり次第発表',
		// 	'book_release' => '0000-00-00 00:00:00',
		// 	'book_start' => '0000-00-00 00:00:00',
		// 	'book_end' => '0000-00-00 00:00:00',
		// 	'plice' => '1,100円（税込）',
		// 	'purchase_url' => 'https://choinomi.official.ec/',
		// 	'lead' => '4月24日に発売を予定しておりました「ちょい飲み手帖京都版vol.5」は、
		// 		新型コロナウイルスの感染が拡大している状況を鑑み、発売を延期をする事と致しました。
		// 		新しい発売日が決まり次第、改めてご案内申し上げる所存でございます。
				
		// 		何卒ご理解の程よろしくお願い申し上げます。
		// 	',
		// 	'sns_true' => true,
		// 	'fb_url' => 'https://www.facebook.com/choinomi.kyoto',
		// 	'insta_url' => 'https://www.instagram.com/choinomi_osaka_kyoto/',
		// 	'tw_url' => 'https://twitter.com/choinomi_kyoto',
		// 	'line_url' => null,
		// 	'contest_true' => false,
		// 	'contest_release' => '0000-00-00 00:00:00',
		// 	'contest_start' => '0000-00-00 00:00:00',
		// 	'contest_end' => '0000-00-00 00:00:00',
		// 	'contest_lead' => '',
		// 	'contest_endlead' => '',
		// 	'questionnaire_true' => false,
		// 	'questionnaire_number' => '',
		// 	'questionnaire_start' => '0000-00-00 00:00:00',
		// 	'questionnaire_end' => '0000-00-00 00:00:00',
		// 	'questionnaire_url' => null,
		// 	'google_map' => null,
		// 	'shop_info_true' => false,
		// 	'shop_info' => '■店名(P00)
		// 	【営業時間変更】まん延防止期間中は、週末のみの営業になります',
        // ],

		// 岡山版
		// 'okayama' => [
		// 	'vol' => 2,
		// 	'publish' => true,
		// 	'name' => '岡山',
		// 	'keyname' => 'okayama',
		// 	'classification' => '中国',
		// 	'area' => '岡山駅東口・平和町・磨屋町・田町・中央町・表町・倉敷駅前・岡山駅西口',
		// 	'book_release' => '2021-02-12 00:00:00',
		// 	'book_start' => '2021-02-19 00:00:00',
		// 	'book_end' => '2021-07-31 00:00:00',
		// 	'plice' => '1,100円（税込）',
		// 	'purchase_url' => null,
		// 	'lead' => '<font color="#008080">6月21日(月)より岡山県下における緊急事態宣言の発令が解除されました。
		// 		岡山市の時短要請は6月30日まで、営業時間は午前5時～午後9時、酒類の提供は午前11時～午後8時までとなっております。
		// 		掲載店では、休業並びに時短での営業を行っている可能性がございます。
		// 		時短営業を行っている掲載店においては、期間中、本誌と同メニューの提供ができない場合もありご利用の皆様にはご迷惑をおかけいたしますが、ご理解ご協力の程よろしくお願いいたします。 </font>
				
		// 		<font color="red">≪ 利用期間について≫</font>
		// 		<font color="#008080">本手帖は7月31日までご利用いただけます。利用期間の延長は予定しておりません。
		// 		何卒ご理解の程よろしくお願いいたします。 </font>
				
				
		// 		第1弾は発売後即完売!!
		// 		岡山のお得な「ちょい飲みセット」を集めたグルメ本の第2弾!
		// 		新たに岡山駅西口エリア、倉敷駅前エリアが登場♪
		// 		掲載店舗のアルコールドリンク一杯と各店舗がおすすめする料理一品以上の通常1,200円以上のセットが全て税込1,000円で愉しめます!
		// 		本誌を利用する際は、お通し代やチャージ料が一切発生いたしません。
		// 		気軽に「ちょい飲み」で新たなお店を開拓、飲食店を応援しよう!
		// 		※Webでの販売は行っておりません。
				
		// 		<font color="#FF0000">≪掲載店営業時間変更等のお知らせ≫ </font>
		// 		・チャオズ P.27
		// 		定休日:<font color="#008080">無休</font>
				
		// 		・ももたろうの屋台 P.68
		// 		<font color="#008080">店名変更「昼からワイン食堂」 </font>※ちょい飲み手帖はそのままご使用頂けます。
				
		// 		・バッビーノ P.78
		// 		ちょい飲み手帖利用可能時間 <font color="#008080">11:30～16:00</font>
		// 		定休日:<font color="#008080">不定休</font>
				
		// 		・麦酒島 P.93
		// 		ちょい飲み手帖利用可能時間 掲載通り（月～金）
		// 		<font color="#008080">11:00～23:00（土・日・祝）</font>
		// 		定休日:<font color="#008080">無休</font>
				
		// 		・淡路キッチンとりぶ P.99
		// 		ちょい飲み手帖利用可能時間 <font color="#008080">17:00～22:00</font>
				
		// 		・とん助 P.111
		// 		業態変更<font color="#008080">「居酒屋」</font>、ちょい飲みメニュー変更<font color="#008080">「本日の一品」</font>
		// 		<font color="#008080">営業時間15:00～21:00</font>
				
		// 		<font color="#FF0000">≪掲載店閉店のお知らせ≫ </font>
		// 		下記店舗はご利用できません。
		// 		・FISHMAN P.35
		// 		・QUEEN SOLEIL P.36
		// 		・瀬戸内バルplus P.38
		// 		・うおとり P.79
		// 	',
		// 	'sns_true' => true,
		// 	'fb_url' => 'https://www.facebook.com/choinomi.okayama/',
		// 	'insta_url' => 'https://www.instagram.com/choinomi_okayama/',
		// 	'tw_url' => 'https://twitter.com/choinomiokayama',
		// 	'line_url' => null,
		// 	'contest_true' => false,
		// 	'contest_release' => '0000-00-00 00:00:00',
		// 	'contest_start' => '0000-00-00 00:00:00',
		// 	'contest_end' => '0000-00-00 00:00:00',
		// 	'contest_lead' => '',
		// 	'contest_endlead' => '',
		// 	'questionnaire_true' => true,
		// 	'questionnaire_number' => '5',
		// 	'questionnaire_start' => '2021-03-01 00:00:00',
		// 	'questionnaire_end' => '2021-08-15 00:00:00',
		// 	'questionnaire_url' => 'https://ssl.src-japan.net/passport_questionnaire/68/',
		// 	'google_map' => '',
		// 	'shop_info_true' => false,
		// 	'shop_info' => '■店名(P00)
		// 	【営業時間変更】まん延防止期間中は、週末のみの営業になります',
        // ],

		// 福岡版
		// 'fukuoka' => [
		// 	'vol' => 3,
		// 	'publish' => true,
		// 	'name' => '福岡',
		// 	'keyname' => 'fukuoka',
		// 	'classification' => '九州',
		// 	'area' => '決まり次第発表',
		// 	'book_release' => '0000-00-00 00:00:00',
		// 	'book_start' => '0000-00-00 00:00:00',
		// 	'book_end' => '0000-00-00 00:00:00',
		// 	'plice' => '1,100円（税込）',
		// 	'purchase_url' => null,
		// 	'lead' => '福岡のお得な「ちょい飲みセット」を集めたグルメ本の第3弾!
		// 		掲載店舗のアルコールドリンク一杯と各店舗がおすすめする料理一品以上の通常1,200円以上のセットが全て税込1,000円で愉しめます♪
		// 		本誌を利用する際は、お通し代やチャージ料が一切発生いたしません。
		// 		『ちょい飲み手帖』で福岡のお得なちょい飲み始めてみませんか？ 
		// 	',
		// 	'sns_true' => true,
		// 	'fb_url' => 'https://www.facebook.com/choinomi.fukuoka/',
		// 	'insta_url' => 'https://www.instagram.com/choinomi_fukuoka',
		// 	'tw_url' => 'https://twitter.com/choinomifukuoka',
		// 	'line_url' => null,
		// 	'contest_true' => false,
		// 	'contest_release' => '0000-00-00 00:00:00',
		// 	'contest_start' => '0000-00-00 00:00:00',
		// 	'contest_end' => '0000-00-00 00:00:00',
		// 	'contest_lead' => '',
		// 	'contest_endlead' => '',
		// 	'questionnaire_true' => false,
		// 	'questionnaire_number' => '',
		// 	'questionnaire_start' => '0000-00-00 00:00:00',
		// 	'questionnaire_end' => '0000-00-00 00:00:00',
		// 	'questionnaire_url' => null,
		// 	'google_map' => null,
		// 	'shop_info_true' => false,
		// 	'shop_info' => '■店名(P00)
		// 	【営業時間変更】まん延防止期間中は、週末のみの営業になります',
        // ],
	];
