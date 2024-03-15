<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["texto"])) {
    $texto = $_POST["texto"];
    $arquivo = 'textos.txt';
    $handle = fopen($arquivo, 'a');
    fwrite($handle, $texto . "\n");
    fclose($handle);
    header("Location: index.php");
    exit();
} else {
    header("Location: index.php");
    exit();
}
?>