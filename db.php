<?php
require_once('../config.php');

function dbConnect($sql){
	$mysqli = new mysqli("127.0.0.1", "dev", "B2xWZv2A", "dev");
	$utf="set names utf8"; //магия, чтоб работал русский язык
	$mysqli->query($utf);

	if (!$result = $mysqli->query($sql)) {
    // О нет! запрос не удался. 
    echo "Извините, возникла проблема в работе сайта.";

    // И снова: не делайте этого на реальном сайте, но в этом примере мы покажем, 
    // как получить информацию об ошибке:
    echo "Ошибка: Наш запрос не удался и вот почему: \n";
    echo "Запрос: " . $sql . "\n";
    echo "Номер ошибки: " . $mysqli->errno . "\n";
    echo "Ошибка: " . $mysqli->error . "\n";
    exit;
    }
	return $result;
}