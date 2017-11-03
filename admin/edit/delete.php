<?php

include_once('../model/functions.php');

connectDb();

$delete = "DELETE FROM `sites` WHERE `id`=" . $_GET["siteid"];
$result = mysql_query($delete);
if (!$result) {
	die('Ошибка выполнения запроса:' . mysql_error());
}

mysql_close();

echo '<script>window.location="/admin"</script>';

?>