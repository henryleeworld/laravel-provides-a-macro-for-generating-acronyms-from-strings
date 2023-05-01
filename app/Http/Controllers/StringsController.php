<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;

class StringsController extends Controller
{
    public function generate() 
    {
        $stringAry = [
            'That\'s one small step for (a) man, one giant leap for mankind.',
            'Stay hungry, stay foolish.',
            'I want to know God\'s thoughts; the rest are details.',
        ];
        foreach ($stringAry as $key => $string) {
            echo '原始字串 ' . ($key + 1) . '：' . $string . PHP_EOL;
            echo '首字母縮寫 ' . ($key + 1) . '：' . Str::acronym($string) . PHP_EOL;
        }
    }
}
