<?php

echo '<h1>StringUtility</h1>';

// 1) create class name StringUtility
class StringUtility {

    public static function shout($string) {
        return strtoupper($string) . '!';
    }

    public static function whisper($string){
        return strtolower($string) . '.';
    }

    public static function repeat($string, $times = 2) {
        return str_repeat($string, $times);
    }
}

echo StringUtility::shout('hello') . '<br>';
echo StringUtility::whisper('HELLO') . '<br>';
echo StringUtility::repeat('hello') . '<br>';
?>