<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["texto"]) && isset($_GET["linha"])) {
    $texto = $_POST["texto"];
    $linha = $_GET["linha"];
    $arquivo = 'textos.txt';
    $linhas = file($arquivo);
    $linhas[$linha] = $texto . "\n";
    file_put_contents($arquivo, $linhas);
    header("Location: index.php");
    exit();
} else {
    header("Location: index.php");
    exit();
}
?>