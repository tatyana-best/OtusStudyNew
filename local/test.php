<?php

require_once $_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php";
$APPLICATION->SetTitle('Примеры');

$ar = [];
for ($i=0; $i < 10; $i++) { 
    sleep(2);
    $ar[] = $i;
}

echo "<pre>" .print_r($ar, true). "</pre>";

dump($ar);
sage($ar);

require_once $_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php";
