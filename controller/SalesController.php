<?php

    // 書店一覧共通
    include('../vendor/autoload.php');
    use PhpOffice\PhpSpreadsheet\Reader\Xlsx as XlsxReader;
    $reader = new XlsxReader();
    
    // 姫路版書店一覧
    $himeji_sales = $reader->load('../resource/himeji/himeji.xlsx');
    $himeji_sheet = $himeji_sales->getSheetByName('sales_list');
    $himeji_max_row = $himeji_sheet -> getHighestRow();
    $himeji_maxCellAddress = 'C'.$himeji_max_row;
    $himeji_array = $himeji_sheet -> rangeToArray('A2:'.$himeji_maxCellAddress);