<?php
	include ('Livro.php');
	
	$livro = new Livro();
	
	$titulo = filter_input(INPUT_POST, "titulo");
    $autor = filter_input(INPUT_POST, "autor");
	
	$livro->cadastrar($titulo,$autor);

?>