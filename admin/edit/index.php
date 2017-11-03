<?php

	$domain = htmlspecialchars($_POST['domain']);
	$name = htmlspecialchars($_POST['name']);
	$charset = htmlspecialchars($_POST['charset']);
	$active = htmlspecialchars($_POST['active']);
	$linkExample = htmlspecialchars($_POST['linkExample']);
	$email = htmlspecialchars($_POST['email']);
	$description = htmlspecialchars($_POST['description']);
	$userComment = htmlspecialchars($_POST['userComment']);
	$cardUrl = htmlspecialchars($_POST['cardUrl']);
	$cardUrlRegEx = htmlspecialchars($_POST['cardUrlRegEx']);
	$requestPause = htmlspecialchars($_POST['requestPause']);

	include_once('../model/functions.php');

	if ( !empty($domain) && !empty($name) ) {

		// Вывод даты на русском
		$monthes = array(
			1 => 'янв', 2 => 'фев', 3 => 'март', 4 => 'апр',
    		5 => 'май', 6 => 'июнь', 7 => 'июль', 8 => 'авг',
    		9 => 'сен', 10 => 'окт', 11 => 'ноя', 12 => 'дек'
		);

		$dateTimeEdited = (date('d ') . $monthes[(date('n'))] . date(' Y \в H:i'));

		connectDb();

		// Перезаписать данные из формы в БД
		mysql_query("UPDATE `sites` SET `domain` = '$domain' WHERE `id` =" . $_GET['siteid']) or die(mysql_error());
		mysql_query("UPDATE `sites` SET `charset` = '$charset' WHERE `id` =" . $_GET['siteid']) or die(mysql_error());

		if ( $active == 1 ) {
			mysql_query("UPDATE `sites` SET `active` = '1' WHERE `id` =" . $_GET['siteid']) or die(mysql_error());
		} else {
			mysql_query("UPDATE `sites` SET `active` = '0' WHERE `id` =" . $_GET['siteid']) or die(mysql_error());
		}

		mysql_query("UPDATE `sites` SET `dateTimeEdited` = '$dateTimeEdited' WHERE `id` =" . $_GET['siteid']) or die(mysql_error());
		mysql_query("UPDATE `sites` SET `name` = '$name' WHERE `id` =" . $_GET['siteid']) or die(mysql_error());
		mysql_query("UPDATE `sites` SET `email` = '$email' WHERE `id` =" . $_GET['siteid']) or die(mysql_error());
		mysql_query("UPDATE `sites` SET `linkExample` = '$linkExample' WHERE `id` =" . $_GET['siteid']) or die(mysql_error());
		mysql_query("UPDATE `sites` SET `description` = '$description' WHERE `id` =" . $_GET['siteid']) or die(mysql_error());
		mysql_query("UPDATE `sites` SET `userComment` = '$userComment' WHERE `id` =" . $_GET['siteid']) or die(mysql_error());
		mysql_query("UPDATE `sites` SET `cardUrl` = '$cardUrl' WHERE `id` =" . $_GET['siteid']) or die(mysql_error());
		mysql_query("UPDATE `sites` SET `cardUrlRegEx` = '$cardUrlRegEx' WHERE `id` =" . $_GET['siteid']) or die(mysql_error());
		mysql_query("UPDATE `sites` SET `requestPause` = '$requestPause' WHERE `id` =" . $_GET['siteid']) or die(mysql_error());

		// Дисконнект с БД
		mysql_close();
	}




	$domain = null;
	$name = null;
	$charset = null;
	$active = null;
	$linkExample = null;
	$email = null;
	$description = null;
	$userComment = null;
	$cardUrl = null;
	$cardUrlRegEx = null;
	$requestPause = null;

	include_once('views/admin-edit.html');
?>