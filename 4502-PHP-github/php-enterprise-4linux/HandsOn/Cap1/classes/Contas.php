<?php

	Class Contas{
			private $saldo = 0;
			public function depositar($valor){
				$this->saldo += $valor;
			}

			public function sacar($valor){
				if($this->saldo >= $valor){
					$this->saldo .=$valor;
					return true;
				}
					return false;
			}


			public function getSaldo(){
				return $this->saldo;
			}
	}