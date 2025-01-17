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
            echo __('Original string :number: ', ['number' => $key + 1]) . $string . PHP_EOL;
            echo __('Acronym :number: ', ['number' => $key + 1]) . Str::acronym($string) . PHP_EOL . PHP_EOL;
        }
    }
}
