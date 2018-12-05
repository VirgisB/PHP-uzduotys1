<html>
<body>
<?php

include("fragments/menu.php");

?>
<atsakymas><?php


    function suma($skaicius1, $skaicius2)
    {
        echo "$skaicius1 ir $skaicius2 suma yra:  " . ($skaicius1 + $skaicius2);
    }
    function skirtumas($skaicius3, $skaicius4)
    {
        echo "$skaicius3 ir $skaicius4 skirtumas yra: " . ($skaicius3 - $skaicius4);
    }

if (isset($_REQUEST["a"]) && isset($_REQUEST["b"])) {
    $a = $_REQUEST["a"];
    $b = $_REQUEST["b"];
    suma($a, $b);
    echo "<br>";
    skirtumas($a, $b);
}

?>
</atsakymas>
</body>
</html>