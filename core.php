<?php
require_once('./db.php');

function saveNewUser($telegram_user_id, $first_name, $last_name, $username, $chat_id){
	$state = '0';
	$sql = "INSERT INTO `users` (telegram_user_id, first_name, last_name, username , chat_id, state) VALUES('$telegram_user_id','$first_name','$last_name','$username','$chat_id','$state')";
	dbConnect($sql); //Записываем пользователя в базу
}

saveNewUser(123456, "Test Firstnanme", "Test Lastname", "Some Username", 123);