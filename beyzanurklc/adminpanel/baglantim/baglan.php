<?php 

//connect with database
try {
$sifre='deneme321';
	$db=new PDO("mysql:host=localhost;dbname=beyzanurklc;charset=utf8",'beyza',$sifre);
	

} catch (PDOExpception $e) {

	echo $e->getMessage();
}


?>