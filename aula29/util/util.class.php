<?php

	class Util{

	//Método para validar E-mail:
	public function validarEmail($email){
		return filter_var($email, FILTER_VALIDATE_EMAIL);
	}
	//Método da expressão regular
	public function testarExpressaoRegular($expressao, $atributo){
		return preg_match($expressao,$atributo);
	}
	//Método converta para maiúscula:
	public function converterMaiusculo($variavel){
		return strtoupper($variavel);
	}
	//Método converta para minusculo:
	public function converterMinusculo($variavel){
		return strtolower($variavel);
	}
	//Contando a qtd de caracteres:
	public function contarCaracteres($variavel){
		return strlen($variavel);
	}
	//Retirar Espaço:
	public function retirarEspaco($variavel){
		return trim($variavel);
	}
	//Primeira letra em maiúsculo:
	public function converterPrimeiraLetra($variavel){
		return ucwords($variavel);
	}
}
?>
