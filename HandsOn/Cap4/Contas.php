<?php

	class Contas{
		private $saldo = 500;
		
		public function depositar($valor){
			$this->saldo +=$valor;
		}

		public function sacar($valor){
			$this->saldo -=$valor;
			return 'Sacado ' .$this->saldo;
		}
	}
