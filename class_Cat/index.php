<?php
/**
* Родительский класс
* Имя животного передаём в конструктор
*/
class Animal{

	protected $name;
	function __construct($name)
	{
		$this->name = $name;
	}

	public function getName(){
		return $this->name;
	}
	
}

/**
*Дочерний класс
*Родитесльский класс расширяем методом meow 
*/
class Cat extends Animal
{
	public function meow(){
		return "Cat $this->name is saying meow";
	}	

}
//Создание объекта и вызов на нём методов
$cat = new Cat('garfield');
var_dump($cat->getName () === 'garfield');
var_dump( $cat->meow () === 'Cat garfield is saying meow' );

?>