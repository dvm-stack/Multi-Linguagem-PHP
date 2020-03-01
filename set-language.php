<?
/*
Sistema Multi Linguagem PHP
***  Preferível chamar este arquivo com um "require_once"   ***
***  Definindo a linguagem   ***
*/

<?php
if (!isset($_SESSION["lang"])) {
	$_SESSION["lang"] = "PTBR";
	require_once "lang-pt.php"; 
} elseif ($_SESSION["lang"]=="ENUS") {
	require_once "lang-en.php"; 
} elseif ($_SESSION["lang"]=="PTBR") {
	require_once "lang-pt.php"; }
?>