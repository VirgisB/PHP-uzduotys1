

<atsakymas>
<?php
include ("fragments/menu.php");

    if (isset($_REQUEST["a"]) && isset($_REQUEST["b"])) {
        $a = $_REQUEST["a"];
        $b = $_REQUEST["b"];

        echo "$a ir $b suma:" . ($a + $b) . "<br>";
        echo "$a ir $b skirtumas:" . ($a - $b);

    }

 ?>
</atsakymas>


