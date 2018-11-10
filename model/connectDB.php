<?php
	try{
		$bdd = new PDO('mysql:host=localhost;dbname=projet_daweb','root','',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	}
	catch (Exception $e){
		die('Error : '.$e->getMessage());
	}
?>