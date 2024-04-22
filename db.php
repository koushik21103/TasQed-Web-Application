<?php

try{
	$con = new PDO('mysql:host=localhost;dbname=todolist','root','');
} catch(PDOException $e) {
	die('<p> Connection failed: </p>' . $e->getMessage());
}

