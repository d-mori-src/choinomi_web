<?php

    // 日付
    function makeDate($format, $date, $showWeek = false) {
        $weekday = array('日','月','火','水','木','金','土');
        if ($showWeek) {
            return date($format.'（'.$weekday[date('w', strtotime($date))].'）', strtotime($date));
        } else {
            return date($format, strtotime($date));
        }
    }
    // echo makeDate('Y年n月j日', '2022-04-16'); // 使い方

    // 今日の日時
	$today = date('Y-m-d H:i:s');