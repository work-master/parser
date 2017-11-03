<?php

include_once('model/functions.php');

connectDb();

// кол-во сайтов на странице
$users_on_page="30";

// считаем сайты
$count=mysql_fetch_array(mysql_query("select count(id) from `sites`"));

// считаем страницы
$total=ceil($count[0]/$users_on_page);

// страницы
if(empty($_GET["p"]))   {$_GET["p"]="1";}
$p=$_GET["p"];

$p=mysql_real_escape_string($p);
if(!ctype_digit($p) or $p>$total):
	$p="1";
endif;

// формируем запрос
$first=$p*$users_on_page-$users_on_page;
$result=mysql_query("select * from `sites` order by `id` desc limit $first, $users_on_page");

include_once('views/admin-sites.html');

	mysql_close();

?>