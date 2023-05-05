<?php

$name = ($_GET["name"]);
$age = ($_GET["age"]);
$email = ($_GET["email"]);


if (strlen($name) > 3 && strpos($mail, ".") && strpos($mail, "@")) {
    echo "Accesso consentito";
} else {
    echo "Accesso negato";
}
?>

