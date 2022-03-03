<?php

    // PhpSpreadsheet php ver 7.2〜
    include('../vendor/autoload.php');
    use PhpOffice\PhpSpreadsheet\Reader\Xlsx as XlsxReader;
    $reader = new XlsxReader();

    // resourceフォルダ内と名称を合わせること
    $shops_name = [
        'kobe_books',
        'himeji',
        'osaka', 'osaka_kita', 'osaka_minami', 'kyoto',
        'okayama',
        'fukuoka',
    ];
    
    foreach ($shops_name as $shop_name) {
        // 店舗一覧
        ${$shop_name . '_shops' } = $reader->load('../resource/' .$shop_name. '/shop_list.xlsx');
        ${$shop_name . '_shops_sheet'} = ${$shop_name . '_shops' }->getSheetByName('shop_list');
        ${$shop_name . '_shops_max_row'} = ${$shop_name . '_shops_sheet'} -> getHighestRow();
        ${$shop_name . '_shops_maxCellAddress'} = 'J' . ${$shop_name . '_shops_max_row'}; // 横はF列まで
        ${$shop_name . '_shops_array'} = ${$shop_name . '_shops_sheet'} -> rangeToArray('A2:' . ${$shop_name . '_shops_maxCellAddress'});
        // 書店一覧
        ${$shop_name . '_sales'} = $reader->load('../resource/' .$shop_name. '/sales_info.xlsx');
        ${$shop_name . '_sales_sheet'} = ${$shop_name . '_sales'}->getSheetByName('sales_list');
        ${$shop_name . '_sales_max_row'} = ${$shop_name . '_sales_sheet'} -> getHighestRow();
        ${$shop_name . '_sales_maxCellAddress'} = 'C' . ${$shop_name . '_sales_max_row'}; // 横はC列まで
        ${$shop_name . '_sales_array'} = ${$shop_name . '_sales_sheet'} -> rangeToArray('A2:' . ${$shop_name . '_sales_maxCellAddress'});
    }
    
    // 姫路版
    // 店舗一覧
    // $himeji_shops = $reader->load('../resource/himeji/shop_list.xlsx');
    // $himeji_shops_sheet = $himeji_shops->getSheetByName('shop_list');
    // $himeji_shops_max_row = $himeji_shops_sheet -> getHighestRow();
    // $himeji_shops_maxCellAddress = 'F' . $himeji_shops_max_row; // 横はF列まで
    // $himeji_shops_array = $himeji_shops_sheet -> rangeToArray('A2:' . $himeji_shops_maxCellAddress);
    // // 書店一覧
    // $himeji_sales = $reader->load('../resource/himeji/sales_info.xlsx');
    // $himeji_sales_sheet = $himeji_sales->getSheetByName('sales_list');
    // $himeji_sales_max_row = $himeji_sales_sheet -> getHighestRow();
    // $himeji_sales_maxCellAddress = 'C' . $himeji_sales_max_row; // 横はC列まで
    // $himeji_sales_array = $himeji_sales_sheet -> rangeToArray('A2:' . $himeji_sales_maxCellAddress);

    // 大阪版
    // 店舗一覧
    // $osaka_shops = $reader->load('../resource/osaka/shop_list.xlsx');
    // $osaka_shops_sheet = $osaka_shops->getSheetByName('shop_list');
    // $osaka_shops_max_row = $osaka_shops_sheet -> getHighestRow();
    // $osaka_shops_maxCellAddress = 'F' . $osaka_shops_max_row; // 横はF列まで
    // $osaka_shops_array = $osaka_shops_sheet -> rangeToArray('A2:' . $osaka_shops_maxCellAddress);
    // // 書店一覧
    // $osaka_sales = $reader->load('../resource/osaka/sales_info.xlsx');
    // $osaka_sales_sheet = $osaka_sales->getSheetByName('sales_list');
    // $osaka_sales_max_row = $osaka_sales_sheet -> getHighestRow();
    // $osaka_sales_maxCellAddress = 'C' . $osaka_sales_max_row; // 横はC列まで
    // $osaka_sales_array = $osaka_sales_sheet -> rangeToArray('A2:' . $osaka_sales_maxCellAddress);