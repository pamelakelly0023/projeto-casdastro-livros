
<html>
    <head>
        <title>Cadastro de Livros</title>
        <meta charset="UTF-8">
         <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, width=device-width">
		 <link href="Bootstrap/css/bootstrap.min.css" rel="stylesheet">
		 <link href="Bootstrap/css/estilo.css" rel="stylesheet">
		 <script src="jquery-3.2.1.min.js"></script>
		 <script type="text/javascript" src="jquery.cycle.all.js"></script>
		 <script>
			$(function(){
				$('#janela ul').cycle({
				 fx: 'fade',
				 speed: 2000,
				 timeout: 4000,
				 
				})
			})
			$( function(e) {			
				$('#btn').click(function(){
					alert ("Cadastrado com sucesso");
				});
			});
				
			
		 </script>
		 <style>
			#divCenter { 
                
				width:400px; 
				left: 50%; 
				position: relative;
				margin-left: -200px;
				padding: 10px;
        }
		 </style>
	</head>	 
		 <body>
			<div id="janela">
				<ul>
					<li><img src="Bootstrap/img/cabecalho.jpeg" class="img-responsive img-rounded" /></li>
					<li><img src="Bootstrap/img/cabecalho2.jpg" class="img-responsive img-rounded" /></li>	
					<li><img src="Bootstrap/img/cabecalho3.jpeg"class="img-responsive img-rounded" /></li>
				</ul>		
			</div>
			
			<section class="apoio">
			
			<h2>Cadastro de Livros</h2></br>
							<form action="controller.php" method="post">
									<div id="divCenter">
									<div>
										<input type="text" class="form-control" id="titulo" name="titulo" placeholder="Título do livro...">
									</div>
									</br>	
									<div>
										<input type="text" class="form-control" id="autor" name="autor" placeholder="Autor do livro...">
										
									</div>
									</br>
									<div>
										<input type="submit" class="btn btn-info" name="Cadastrar"></input required>
									
									</div>
										
									</div>	
								
						
							</form>
					
				<h3>"A leitura engrandece a alma."</h3>
				<h4> - Voltaire</h4>
				<hr>
				<h3>"A leitura de um bom livro </br>é um diálogo incessante: </br>o livro fala e a alma responde."</h3>
				<h4> - André Maurois</h4>
				<hr>
			</section>
		 </body>
		 <footer>
			
		 </footer>
		</html>