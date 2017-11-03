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

		$dateTimeAdd = (date('d ') . $monthes[(date('n'))] . date(' Y \в H:i'));
		$dateTimeEdited = $dateTimeAdd;

		connectDb();

		// Записать данные из формы в БД
		$strSQL = "INSERT INTO sites(
		domain,
		charset,
		name,
		linkExample,
		email,
		active,
		description,
		userComment,
		cardUrl,
		cardUrlRegEx,
		requestPause,

		dateTimeAdd,
		dateTimeEdited
		) 

		VALUES (
		'$domain',
		'$charset',
		'$name',
		'$linkExample',
		'$email',
		'$active',
		'$description',
		'$userComment',
		'$cardUrl',
		'$cardUrlRegEx',
		'$requestPause',

		'$dateTimeAdd',
		'$dateTimeEdited'
		)";

		mysql_query($strSQL) or die(mysql_error());

		//$max = 'SELECT LAST_INSERT_ID()';
		//$maxReq = mysql_query($max) or die(mysql_error());
		//$maxId = mysql_fetch_array($maxReq);


		$maxId = mysql_insert_id();

		// Закрыть соединение с БД
		mysql_close();

		/*$dir = mkdir("../edit/" . $maxId . "/");
        copy("../edit/example/index.php", "../edit/" . $maxId . "/index.php");*/

		echo '<script>window.location = "../edit/?siteid=' . $maxId . '" </script>';
	}

	/*$domain = null;
	$name = null;
	$charset = null;
	$scheme = null;
	$linkExample = null;
	$email = null;*/

	include_once('../../views/admin-add.html');
?>