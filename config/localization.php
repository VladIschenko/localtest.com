<?php
/**
 * Created by PhpStorm.
 * User: vlad
 * Date: 31.08.16
 * Time: 15:52
 */

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();

if(isset($_SESSION['language'])){
    $lang = $_SESSION['language'];
} else {
    $lang = 'ru';
}

if(isset($_POST['ru'])){
    $lang = 'ru';
}elseif(isset($_POST['en'])){
    $lang = 'en';
}

$_SESSION['language'] = $lang;

include_once 'config/languages/' . $lang . '.php';