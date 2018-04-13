<?php
$arr = ['a' => null];
var_dump(isset($arr['a']));
// bool(false)

// todo
$isExisted = array_key_exists('a', $arr);
var_dump($isExisted);
// bool(true)
