<?php

class str{
 public static function quickRandom($length = 16)
    {
        $pool = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

        return substr(str_shuffle(str_repeat($pool, $length)), 0, $length);
    }
}
echo mb_strwidth('好','UTF-8');
echo "<hr>";
echo mb_strlen('ASDF','UTF-8');
echo "<hr>";
preg_match('@^(?:http://)?([^/]+)@i',//?:不捕获括号内的表达式
    "http://www.php.net/index.html", $matches);
$host = $matches[1];
echo $host;
echo "<hr>";
$value = 123456;
$hash = password_hash($value, PASSWORD_BCRYPT,['cost' => 5]);
$result = password_verify('123456',$hash);
echo $hash;
echo "<hr>";
echo mb_strlen($hash,'UTF-8');
// echo str::quickRandom();