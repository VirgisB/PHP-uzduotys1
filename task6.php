<html>
<body>
<?php

include("fragments/menu.php");

?>
<atsakymas><?php


    function KMI($skaicius1, $skaicius2)
    {
        $KMI = $skaicius2 / ($skaicius1 * $skaicius1);
        echo  "KMI yra: " . $KMI;
    }

    if (isset($_REQUEST["u"]) && isset($_REQUEST["s"])) {
        $u = $_REQUEST["u"];
        $s = $_REQUEST["s"];
        KMI($u, $s);

    }

    ?>
</atsakymas>
</body>
</html>