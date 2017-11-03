<?php

function connectDb() { 
	mysql_connect("parser.loc", "mysql", "mysql") or die (mysqli_error ());
	mysql_select_db("parser") or die(mysql_error());
}

function domainValue() {
	$selectDomain = "SELECT `domain` FROM `sites` WHERE `id`=" . $_GET["siteid"];
	$result = mysql_query($selectDomain);
	if (!$result) {
		die('Ошибка выполнения запроса:' . mysql_error());
	}
	$myrow = mysql_fetch_array ($result);

	return $myrow['domain'];
}

function activeValue() {
	$selectDomain = "SELECT `active` FROM `sites` WHERE `id`=" . $_GET["siteid"];
	$result = mysql_query($selectDomain);
	if (!$result) {
		die('Ошибка выполнения запроса:' . mysql_error());
	}
	$myrow = mysql_fetch_array ($result);

	if ($myrow['active'] == 1) {
		$activeValue = 'checked';
	} else {
		$activeValue = null;
	}
	return $activeValue;
}

function charsetFirst() {
	$selectDomain = "SELECT `charset` FROM `sites` WHERE `id`=" . $_GET["siteid"];
	$result = mysql_query($selectDomain);
	if (!$result) {
		die('Ошибка выполнения запроса:' . mysql_error());
	}
	$myrow = mysql_fetch_array ($result);

	if ($myrow['charset'] == 1) {
		$activeValueFirst = ' selected="selected"';
	} else {
		$activeValueFirst = null;
	}
	return $activeValueFirst;
}

function charsetSecond() {
	$selectDomain = "SELECT `charset` FROM `sites` WHERE `id`=" . $_GET["siteid"];
	$result = mysql_query($selectDomain);
	if (!$result) {
		die('Ошибка выполнения запроса:' . mysql_error());
	}
	$myrow = mysql_fetch_array ($result);

	if ($myrow['charset'] == 2) {
		$activeValueSecond = ' selected="selected"';
	} else {
		$activeValueSecond = null;
	}
	return $activeValueSecond;
}

function charsetThird() {
	$selectDomain = "SELECT `charset` FROM `sites` WHERE `id`=" . $_GET["siteid"];
	$result = mysql_query($selectDomain);
	if (!$result) {
		die('Ошибка выполнения запроса:' . mysql_error());
	}
	$myrow = mysql_fetch_array ($result);

	if ($myrow['charset'] == 3) {
		$activeValueThird = ' selected="selected"';
	} else {
		$activeValueThird = null;
	}
	return $activeValueThird;
}

function charsetFourth() {
	$selectDomain = "SELECT `charset` FROM `sites` WHERE `id`=" . $_GET["siteid"];
	$result = mysql_query($selectDomain);
	if (!$result) {
		die('Ошибка выполнения запроса:' . mysql_error());
	}
	$myrow = mysql_fetch_array ($result);

	if ($myrow['charset'] == 4) {
		$activeValueFourth = ' selected="selected"';
	} else {
		$activeValueFourth = null;
	}
	return $activeValueFourth;
}

function nameValue() {
	$selectDomain = "SELECT `name` FROM `sites` WHERE `id`=" . $_GET["siteid"];
	$result = mysql_query($selectDomain);
	if (!$result) {
		die('Ошибка выполнения запроса:' . mysql_error());
	}
	$myrow = mysql_fetch_array ($result);

	return $myrow['name'];
}

function emailValue() {
	$selectDomain = "SELECT `email` FROM `sites` WHERE `id`=" . $_GET["siteid"];
	$result = mysql_query($selectDomain);
	if (!$result) {
		die('Ошибка выполнения запроса:' . mysql_error());
	}
	$myrow = mysql_fetch_array ($result);

	return $myrow['email'];
}

function linkExampleValue() {
	$selectDomain = "SELECT `linkExample` FROM `sites` WHERE `id`=" . $_GET["siteid"];
	$result = mysql_query($selectDomain);
	if (!$result) {
		die('Ошибка выполнения запроса:' . mysql_error());
	}
	$myrow = mysql_fetch_array ($result);

	return $myrow['linkExample'];
}

function descriptionValue() {
	$selectDomain = "SELECT `description` FROM `sites` WHERE `id`=" . $_GET["siteid"];
	$result = mysql_query($selectDomain);
	if (!$result) {
		die('Ошибка выполнения запроса:' . mysql_error());
	}
	$myrow = mysql_fetch_array ($result);

	return $myrow['description'];
}

function userCommentValue() {
	$selectDomain = "SELECT `userComment` FROM `sites` WHERE `id`=" . $_GET["siteid"];
	$result = mysql_query($selectDomain);
	if (!$result) {
		die('Ошибка выполнения запроса:' . mysql_error());
	}
	$myrow = mysql_fetch_array ($result);

	return $myrow['userComment'];
}

function cardUrlValue() {
	$selectDomain = "SELECT `cardUrl` FROM `sites` WHERE `id`=" . $_GET["siteid"];
	$result = mysql_query($selectDomain);
	if (!$result) {
		die('Ошибка выполнения запроса:' . mysql_error());
	}
	$myrow = mysql_fetch_array ($result);

	return $myrow['cardUrl'];
}

function cardUrlRegExValue() {
	$selectDomain = "SELECT `cardUrlRegEx` FROM `sites` WHERE `id`=" . $_GET["siteid"];
	$result = mysql_query($selectDomain);
	if (!$result) {
		die('Ошибка выполнения запроса:' . mysql_error());
	}
	$myrow = mysql_fetch_array ($result);

	return $myrow['cardUrlRegEx'];
}

function requestPauseValue() {
	$selectDomain = "SELECT `requestPause` FROM `sites` WHERE `id`=" . $_GET["siteid"];
	$result = mysql_query($selectDomain);
	if (!$result) {
		die('Ошибка выполнения запроса:' . mysql_error());
	}
	$myrow = mysql_fetch_array ($result);

	return $myrow['requestPause'];
}

?>