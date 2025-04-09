<?php

// criar um autoloader para gerenciar os meus namespaces
function carregarNamespace($nomeClasse) {
    $diretorio_classes = __DIR__ . "/src/Classes/";

    $nomeClasse = str_replace("\\", "/", $nomeClasse);
    $caminhoClasse = $diretorio_classes . $nomeClasse . ".php";

    if (file_exists($caminhoClasse)) {

        require_once $caminhoClasse;
    } else {

        throw new Exception("Classe " . $nomeClasse . " não encontrada!");
    }

}

// registrar o autoload
spl_autoload_register("carregarNamespace");