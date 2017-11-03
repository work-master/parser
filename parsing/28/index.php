<?php
		
	include_once('../../admin/model/functions.php');

	// Парсер
	include_once('../libs/curl-master/curl.php');
	include_once('../libs/simple_html_dom.php');

	connectDb();

	$result = mysql_query("SELECT * FROM `statistics` WHERE `id`=" . $_GET["process"]);
	if (!$result) {
		die('Ошибка выполнения запроса:' . mysql_error());
	}
	$row = mysql_fetch_array($result);

	$cachetime = 300;   // Время жизни кеша

	// Совершаем переход по всем 50 ссылкам, присланными пользователем (цикл)
	for ($i = 1; $i < 51; $i++) {

		if (file_exists("../../cache/" . $row[$i] . "/1.html") && time() - $cachetime < filemtime("../../cache/" . $row[$i] . "/1.html")) {
			//parserItems();
			exit;
		} else {
			// Здесь удаляем файлы уже неактуального кеша

			if ($row[$i] != null) {

			echo $row[$i];

			$curl = new Curl();

			$curlHtml = $curl->get($row[$i]); 

			$html = str_get_html($curlHtml); // Берем ссылку на список товаров

			//$cardUrlQuery = mysql_fetch_array( mysql_query("SELECT `cardUrl` FROM `sites` WHERE `id`=" . $_GET["siteid"]) ); // Берем из БД Jquery на товар

			//$cardUrl = $html -> find($cardUrlQuery['cardUrl']) -> getAttribute(href);  // находим все ссылки на товары

			$cardUrl = $html -> find(".products-grid .item-title>a") -> getAttribute(href);

			// Здесь прогоняем полученные ссылки через RegEx

			//cardUrlHrefWithDomain( $cardUrl ); // Проверяем, есть ли в ссылках домен (если нет - добавляем к каждой ссылке (перезаписываем массив))

			$numberRow = 0;
			// Совершаем переход по каждой ссылке на товар (цикл)
			foreach ( $cardUrl as $itemCardHref ) {
				$numberRow++;
				$html = file_get_html($itemCardHref); // Получаем html-контент товара

				// Записываем html-страницу товара в кеш
				ob_start();
				echo iconv("UTF-8", "UTF-8", $html);
				$output = ob_get_contents();
				$file = fopen("../../cache/$row[$i]/$numberRow.html","wt") or die("err");
				fputs($file,$output);
				fclose($file);
				ob_end_clean();

			}

		}

	}

	}


	mysql_close();

	//include_once('../../views/parsing.html');
?>