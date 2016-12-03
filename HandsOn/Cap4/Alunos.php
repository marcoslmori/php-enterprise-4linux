<?php

	class Alunos{
		private $dsn = 'mysql:host=localhost;dbname=rest';
		private $user = 'root';
		private $pass = '123456';

		private $conn;

		public function __construct(){
				$this->conn = new PDO($this->dsn, $this->user, $this->pass);
		}

		public function inserir(array $dados){
			$nome = isset($dados['nome']) ? $dados['nome'] : null;
			$email = isset($dados['email']) ? $dados['email'] : null;

			$query = "INSERT INTO alunos (nome, email) VALUES ('$nome', '$email');";

			echo $query;

			return $this->conn->exec($query);
		}


		//PUT
		public function atualizar(array $dados){ 
				$nome = isset($dados['nome']) ? $dados['nome'] : null;
				$email = isset($dados['email']) ? $dados['email'] : null;
				$id = isset($dados['id']) ? $dados['id'] : null;

				$query = "UPDATE  alunos  set nome = '$nome', email = '$email' WHERE id = '$id'" ;
				// echo $query;
			    
			    return $this->conn->exec($query);
		}
	
		public function deletar($dados){ //DELETE
			$id = isset($dados['id']) ? $dados['id'] : null;			
			$query = "DELETE FROM alunos WHERE id = '$id';";

			return $this->conn->exec($query);
		}

	public function listar (){
			$query = "SELECT * FROM alunos;";
			$retorno = $this->conn->query($query);
			$lista = $retorno->fetchAll(PDO::FETCH_ASSOC);
			return json_encode($lista);
		}

		public function listarPorID ($id){
			$query = "SELECT * FROM alunos WHERE id = '$id';";
			$retorno = $this->conn->query($query);
			$lista = $retorno->fetchALL(PDO::FETCH_ASSOC);
			return json_encode($lista);
		}



	}

	// $test= new Alunos();
	// echo $test->inserir(['nome'=>'marcos', 'email'=>'gigio@gmail']);