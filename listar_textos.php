<?php
$arquivo = 'textos.txt';
if (file_exists($arquivo)) {
    $linhas = file($arquivo);
    foreach ($linhas as $indice => $linha) {
        echo "<p class='mb-3'>$linha <a href='editar_texto.php?linha=$indice' class='btn btn-sm btn-secondary'>Editar</a> <a href='excluir_texto.php?linha=$indice' class='btn btn-sm btn-danger'>Excluir</a></p>";
    }
} else {
    echo "<p>Nenhum texto salvo ainda.</p>";
}
?>
