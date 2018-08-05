<?php
//Реализуем выборку из таблиц при связи мнгоие ко многим
//Склеиваем таблицы в одну и ставим условие по выборке

SELECT product.id_product, category_product.id_category FROM `product` JOIN category_product ON product.id_product = category_product.id_product JOIN category ON category.id_category = category_product.id_category WHERE category.kind="serie";

 ?>