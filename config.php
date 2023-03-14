<?php

$conexao = new mysqli('localhost:3306', 'root', '', 'netflix');

if($conexao->connect_errno)
{
    echo "Tem alguma coisa errada";
}
else {
    echo " ";
}

?>