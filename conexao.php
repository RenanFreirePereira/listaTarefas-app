<?php
    $config= parse_ini_file("config.ini");
    $string_conexao = $config["driver"] . ":dbname=" . $config["BD"] . ";host=" . $config["server"] . ";port=" . $config["port"];

    $conexaoBancoDeDados = new PDO(
        $string_conexao,
        $config["usuario"],
        $config["senha"]
    );

?>