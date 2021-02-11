<?php
  class Contato{
    //Atributos - características:
    private $idcontato; //Acrescentar para facilitar a manipulação
    private $nome;
    private $telefone;
    private $email;
    private $mensagem;
    //Funções - ações da classe:
    //Função construir o objeto - instanciar
    public function __construct(){

    }
    //Gets e Sets - mágicos:
    public function __get($atributo){
      return $this->$atributo;
    }
    public function __set($atributo,$valor){
      $this->$atributo = $valor;
    }
    //Função toString:
    public function __toString(){
      return "<br>Id Contato: ".$this->idcontato.
             "<br>Nome: ".$this->nome.
             "<br>Telefone: ".$this->telefone.
             "<br>E-mail: ".$this->email.
             "<br>Mensagem: ".$this->mensagem;
    }
}
?>
