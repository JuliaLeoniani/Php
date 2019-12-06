<?php
session_start();
if(!isset ($_SESSION["logado"]) || !$_SESSION["logado"]){
	header("location: /");
	exit();
}
?>