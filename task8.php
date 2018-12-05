
<?php

include("fragments/menu.php");


function paimti()
{
    $a = $_REQUEST["a"];
    $s = $_REQUEST["s"];
    vid($a, $s);
}


function vid($atstumas, $sanaudos)
    {
        $vidurkis = $sanaudos * 100 / $atstumas;
        echo  "Vidutines sanaudos yra: " . $vidurkis;
    }

    if (isset($_REQUEST["a"]) && isset($_REQUEST["s"])) {
        paimti();
    }



?>