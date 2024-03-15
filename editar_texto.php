<?php
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["linha"])) {
    $arquivo = 'textos.txt';
    $linha = $_GET["linha"];
    $linhas = file($arquivo);
    $texto = $linhas[$linha];
} else {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Texto</title>
</head>
<body>
    <h1>Editar Texto</h1>
    <form action="salvar_edicao.php?linha=<?= $linha ?>" method="POST">
        <textarea name="texto" cols="30" rows="10"><?= $texto ?></textarea><br>
        <input type="submit" value="Salvar Edição">
    </form>
</body>
</html>