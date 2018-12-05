<?php

function naudoti()
{
    $GLOBALS["a"] = $_REQUEST["a"];
    $GLOBALS["s"] = $_REQUEST["s"];

}

function vid() {
    $vidurkis = $GLOBALS["s"] * 100 / $GLOBALS["a"];
    echo "Vidutines sanaudos yra: " . $vidurkis;
}

if (isset($_REQUEST["a"]) && isset($_REQUEST["s"])) {
    naudoti();
    vid();
}


?>