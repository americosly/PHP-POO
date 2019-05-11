<?php

include 'classes/Produto.php';
include 'classes/Ebook.php';
include 'classes/LivroFisico.php';

$ebook = new Ebook(10.90, 'PHP 00', 'Livro muito legal','https:xxx.com.br');
$livroFisico = new LivroFisico (19.00, 'PHP 00', 'Livro muito legal', 300);
var_dump($ebook);
var_dump($livroFisico);
?>