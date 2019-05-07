<?php
	class Livro{
		public $id, $titulo, $autor;
		
		public function setId ($id){
			$this->id = ($id);
		}
		public function setTitulo ($titulo){
			$this->titulo = ($titulo);
		}
		public function setAutor ($autor){
			$this->autor = ($autor);
		}
		public function getId(){
			return $this->id;
		}
		public function getTitulo(){
			return $this->titulo;
		}
		public function getAutor(){
			return $this->autor;
		}
		
		public function cadastrar ($titulo,$autor){
			
			$this->setTitulo($titulo);
            $this->setAutor($autor);
			
			echo "<br>Título: " . $this->getTitulo();
			echo "<br>Autor: ". $this->getAutor();
		}
		public function alterar($id,$titulo,$autor){
			$this->setId($id);
			$this->setTitulo($titulo);
			$this->setAutor($autor);
		}
		public function buscaDados($id){
		$this->setId($id);
		echo "<br>Id = " . $this->getId();
	}
		public function buscaTodosDados(){

		}
	}
?>