<?php
$variable = 0;

//Значение $variable приведётся к false, срвботает втрое условие выведет 1
if($variable){
	echo '0';
}else{
	echo '1';
}

//Переменная определена значение отличным от null выведет '0'
if(isset($variable)){
	echo '0';
}else{
	echo '1';
}


//Переменная содержит нулевое значение, поетому сработает первое условие и выведет '0'
if(empty($variable)){
	echo '0';
}else{
	echo '1';
}

// Что будет напечатано? 
//Будет напечатано 100;
?>
