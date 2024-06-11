<?php
    // criar array de produto
    $produtos=[
        "maçã" => 1.99,
        "banana" => 2.99,
        "laranja" => 1.99,
        "tomate" => 2.99,
    ];
    //exibir produtos
    echo "Lista de produtos:";
    foreach ($produtos as $produto => $preço) {
        echo "$produto . custa R$ . $preço .";
    }
?>