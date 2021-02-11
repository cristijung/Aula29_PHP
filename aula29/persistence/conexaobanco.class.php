<?php
//conexaobanco.class.php

//Esta classe é estática porque não tem atributos: - ao chamar:
//Estendendo a classe PDO - PDO(PHP Data Objects) onde o objetivo é  padronizar a forma com que PHP se comunica com um banco de dados relacional.
class ConexaoBanco extends PDO {
 //Esta classe é estática porque não tem atributos: - ao chamar ::
//Estendendo a classe PDO - PDO(PHP Data Objects) onde o objetivo é  padronizar a forma com que PHP se comunica com um banco de dados relacional.
//Abaixo temos uma variável que receberá a instancia conexão - por enquanto vazia:
  private static $instance = null;

  //No construtor vai como parâmetro nome do banco, usuario e senha (normalmente root e root ou vazia senha)
  public function __construct($dsn,$user,$pass){
      //Construtor da classe pai PDO (PDO tipo de framework - funciona em vários bancos)
      parent::__construct($dsn,$user,$pass);
  }
  public static function getInstance(){ //Pegar a instancia para conectar banco
    if(!isset(self::$instance)){ //Se não existir esta instancia - criar
      try{ //faz tratamento
        /* Cria e retorna uma nova conexão. */
		//ALTERAR A LINHA DE BAIXO DE ACORDO COM O BANCO E SENHA
        self::$instance = new ConexaoBanco("mysql:dbname=projetof;host=localhost","root","");
      }catch(PDOException $e){ //Alerta erro caso não consiga conectar
        echo "Erro ao conectar! ".$e; //Mostra o erro com $e
      }//fecha catch
    }//fecha if
    return self::$instance; //Retorna a conexao do banco
  }//fecha método
}//fecha classe
?>
