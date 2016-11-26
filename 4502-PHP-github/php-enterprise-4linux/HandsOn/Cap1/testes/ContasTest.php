<?php
	require ('../classes/Contas.php');

	class ContasTest extends PHPUnit_Framework_TestCase {
		Public function testDepositarSuccess(){
			$conta = new Contas();
			$saldoAtual = $conta->getSaldo();
			$valorDeposito = 500;
			$valorAtualizado = $saldoAtual + $valorDeposito;


			$conta->depositar($valorDeposito);
			$saldoAposDeposito = $conta->getSaldo();
			$this->assertEquals($saldoAposDeposito, $valorAtualizado );

		}

			public function testSacarSuccess(){
				$conta = new Contas();
				$conta->depositar(500);
				$saldoAtual = $conta->getsaldo();
				$valorSacar = 300;

				$retorno = $conta->sacar($valorSacar);
				// metodo do phpunit
				$this->AssertTrue($retorno);

			}

			public function testSacarfail(){

				$conta = new Contas();
				$conta->depositar(500);
				$saldoAtual = $conta->getsaldo();
				$valorSacar = 800;

				$retorno = $conta->sacar($valorSacar);
				// metodo do phpunit
				$this->AssertFalse($retorno);

				
			}




	}