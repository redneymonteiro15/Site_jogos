<?php
    function thumb($arq){
    $caminho = "fotos/$arq";
    if (is_null($arq) || !file_exists($caminho)) {
        return "fotos/indisponivel.png";
    } else{
        return $caminho;
    }
    }
?>