<!DOCTYPE html>
<html>
<body>


<?php

if ($_GET["o"] == "scitani") {
    echo "sečteno, " ;
    echo "výsledek je:" ;
    echo $_GET["a"] + $_GET["b"];
}

if ($_GET["o"] == "odcitani") {
    echo "odečteno, " ;
    echo "výsledek je:" ;
    echo $_GET["a"] - $_GET["b"];
}

if ($_GET["o"] == "nasobeni") {
    echo "vynásobeno, " ;
    echo "výsledek je:" ;
    echo $_GET["a"] * $_GET["b"];
}

if ($_GET["o"] == "deleni") {
    echo "vyděleno, " ;
    echo "výsledek je:" ;
    echo $_GET["a"] / $_GET["b"];
}
?>

</body>
</html>
