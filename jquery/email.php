<?php
//Если пользователь отправил пустое поле, то пишем что не подписали его на рассылку
//Если отправил - пишем что подписали. При желании позже можно значительно расширить поведение скрипта.
$email = $_POST['email'];
if(!empty($email)){
	$email = "Ваш email $email подписан на рассылку!";
}else{
	$email = "Ваш email $email не был подписан на рассылку!";
}

echo json_encode($email);
?>