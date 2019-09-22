<?php

//config, pwd for mysql test after merge 22222

function dbConnect($sql){
    $configs = include('./config.php');
	$mysqli = new mysqli($config['hostname'], $config['dbuser'], $config['dbpassword'], $config['dbname']);
	$utf="set names utf8"; //magic for cyrylic charsets
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