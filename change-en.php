<?
/*
Sistema Multi Linguagem PHP
***  Preferível chamar este arquivo com um "require_once"   ***
***  Trocando a linguagem   ***
***  Não esqueça de definir um tempo para expirar a sessão (de preferência todas) 
***  no seu include/require inicial, onde você inicia as sessões (session_start) e etc... 
***
*/

session_start();
$_SESSION["lang"]=="ENUS";
$back = $_SERVER['HTTP_REFERER'];
header('Location: ' . $back);
?>
