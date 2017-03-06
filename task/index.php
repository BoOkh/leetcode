<?php
require 'MyString.php';

$template = 'AB*CD***E';
$string = 'AB0dCDsg7E';

try {
    if (class_exists('MyString')) {
        $checkObj = new MyString();
        if (method_exists($checkObj, 'make')) {
            $result = $checkObj->make($template, $string);
        } else {
            throw new Exception('Method does not exist');
        }
    } else {
        throw new Exception('Class does not exist');
    }
} catch (Exception $e) {
    echo $e->getMessage();
    die();
}

var_dump($result);