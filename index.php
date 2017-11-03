<?php

$jsonString = '
{"linkVal":["first","second","third","fourth","fifth"]}                                  
';

$jsonString = $_POST["h"];
 
$cart = json_decode( $jsonString );
$array = $cart->{"linkVal"};

$linksVal = array_pad($array, 50, 'добавленный');

echo $linksVal[5];
?>

</body>
</html>