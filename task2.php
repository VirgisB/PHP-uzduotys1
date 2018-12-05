<?php

include ("fragments/menu.php");

$zodis = $_REQUEST["zodis"];

$ilgis = strlen($zodis);

echo "ivestas $zodis turi $ilgis simboliu";
