<?php
//Считаем колличество знаков ! в левой строке и умножаем на 2, так же ищем знаки ? и умножаем на 3. Так же
//для правой строки. Сравниваем суммы чисел и выводим результат через условие. 
function balance(string $l, string $r){
	$r1 = preg_match_all("/!/", $r, $r1);
	$r2 = preg_match_all("/\?/", $r, $r2);
	$l1 = preg_match_all("/!/", $l, $l1);
	$l2 = preg_match_all("/\?/", $l, $l2);
	$r_count = $r1*2 + $r2*3;
	$l_count = $l1*2 + $l2*3;
	if($r_count > $l_count){
		return "Right";
	}else if($r_count < $l_count){
		return "Left";
	}else{
		return "Balance";
	}
}

var_dump(balance("!!","??") == "Right");
var_dump(balance("!??","?!!") == "Left");
var_dump(balance("!?!!","?!?") == "Left");
var_dump(balance("!!???!????","??!!?!!!!!!!") == "Balance");
?>