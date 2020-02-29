<?


/*
Sistema Multi Linguagem PHP
***  Preferível chamar este arquivo com um "require_once"   ***
***  Definindo a linguagem   ***
*/

<?php
if (!isset($_SESSION["lang"])) {
	$_SESSION["lang"] = "PTBR";
	include "lang-pt.php"; 
	}
 elseif ($_SESSION["lang"]=="ENUS") {
	include "lang-en.php"; }
 elseif ($_SESSION["lang"]=="PTBR") {
	include "lang-pt.php"; }
?>