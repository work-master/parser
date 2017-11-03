<?php
	
	include_once('../admin/model/functions.php');

	if(isset($_POST)) {

		$linksJson = file_get_contents('php://input');

		$object = json_decode((string) $linksJson);
		$links = $object->{"linkVal"};

		$linksVal = array_pad($links, 50, null);

		$link1 = $linksVal[0];
		$link2 = $linksVal[1];
		$link3 = $linksVal[2];
		$link4 = $linksVal[3];
		$link5 = $linksVal[4];
		$link6 = $linksVal[5];
		$link7 = $linksVal[6];
		$link8 = $linksVal[7];
		$link9 = $linksVal[8];
		$link10 = $linksVal[9];
		$link11 = $linksVal[10];
		$link12 = $linksVal[11];
		$link13 = $linksVal[12];
		$link14 = $linksVal[13];
		$link15 = $linksVal[14];
		$link16 = $linksVal[15];
		$link17 = $linksVal[16];
		$link18 = $linksVal[17];
		$link19 = $linksVal[18];
		$link20 = $linksVal[19];
		$link21 = $linksVal[20];
		$link22 = $linksVal[21];
		$link23 = $linksVal[22];
		$link24 = $linksVal[23];
		$link25 = $linksVal[24];
		$link26 = $linksVal[25];
		$link27 = $linksVal[26];
		$link28 = $linksVal[27];
		$link29 = $linksVal[28];
		$link30 = $linksVal[29];
		$link31 = $linksVal[30];
		$link32 = $linksVal[31];
		$link33 = $linksVal[32];
		$link34 = $linksVal[33];
		$link35 = $linksVal[34];
		$link36 = $linksVal[35];
		$link37 = $linksVal[36];
		$link38 = $linksVal[37];
		$link39 = $linksVal[38];
		$link40 = $linksVal[39];
		$link41 = $linksVal[40];
		$link42 = $linksVal[41];
		$link43 = $linksVal[42];
		$link44 = $linksVal[43];
		$link45 = $linksVal[44];
		$link46 = $linksVal[45];
		$link47 = $linksVal[46];
		$link48 = $linksVal[47];
		$link49 = $linksVal[48];
		$link50 = $linksVal[49];

		connectDb();

		$strSQL = "INSERT INTO statistics(
		link1,
		link2,
		link3,
		link4,
		link5,
		link6,
		link7,
		link8,
		link9,
		link10,
		link11,
		link12,
		link13,
		link14,
		link15,
		link16,
		link17,
		link18,
		link19,
		link20,
		link21,
		link22,
		link23,
		link24,
		link25,
		link26,
		link27,
		link28,
		link29,
		link30,
		link31,
		link32,
		link33,
		link34,
		link35,
		link36,
		link37,
		link38,
		link39,
		link40,
		link41,
		link42,
		link43,
		link44,
		link45,
		link46,
		link47,
		link48,
		link49,
		link50
		) 

		VALUES (
		'$link1',
		'$link2',
		'$link3',
		'$link4',
		'$link5',
		'$link6',
		'$link7',
		'$link8',
		'$link9',
		'$link10',
		'$link11',
		'$link12',
		'$link13',
		'$link14',
		'$link15',
		'$link16',
		'$link17',
		'$link18',
		'$link19',
		'$link20',
		'$link21',
		'$link22',
		'$link23',
		'$link24',
		'$link25',
		'$link26',
		'$link27',
		'$link28',
		'$link29',
		'$link30',
		'$link31',
		'$link32',
		'$link33',
		'$link34',
		'$link35',
		'$link36',
		'$link37',
		'$link38',
		'$link39',
		'$link40',
		'$link41',
		'$link42',
		'$link43',
		'$link44',
		'$link45',
		'$link46',
		'$link47',
		'$link48',
		'$link49',
		'$link50'
		)";

		mysql_query($strSQL) or die(mysql_error());
		$process = mysql_insert_id();  // Максимальное значение id (кол-во загрузок)

		mysql_close();

		// Создаем директорию для парсинга
		mkdir( $process . "/" );
        copy("index.php", $process . "/index.php");

        echo json_encode(array("response"=>1, "process"=>$process));  // Ajax-ответ клиенту
	}
	
?>