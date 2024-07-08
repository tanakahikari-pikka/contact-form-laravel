<?php

use App\Models\Helper;


if (!function_exists('getGenderText')) {
    function getGenderText($genderCode) {
        switch ($genderCode) {
            case 1:
                return '男性';
            case 2:
                return '女性';
            case 3:
                return 'その他';
            default:
                return '不明';
        }
    }
}