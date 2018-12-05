
<atsakymas>
    <?php
    include ("fragments/menu.php");

    if (isset($_REQUEST["a"]) && isset($_REQUEST["s"])) {
        $a = $_REQUEST["a"];
        $s = $_REQUEST["s"];


        $vidurkis = $s * 100 / $a;
        echo "Sanaudos 100km yra: " . $vidurkis;

    }
    ?>
</atsakymas>