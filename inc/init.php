<?php
    $year = date('Y年n月現在');

    // Getパラメーター
    $book = filter_input(INPUT_GET, 'book', FILTER_SANITIZE_FULL_SPECIAL_CHARS);