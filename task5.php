
<atsakymas>
    <?php
    include ("fragments/menu.php");

    if (isset($_REQUEST["u"]) && isset($_REQUEST["s"])) {
        $u = $_REQUEST["u"];
        $s = $_REQUEST["s"];

        $kmi = $s / ($u * $u);
        echo "KMI yra: " . $kmi . "<br>";

    }
    ?>
</atsakymas>

