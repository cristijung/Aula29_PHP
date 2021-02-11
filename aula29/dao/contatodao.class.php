<?php
  //Para banco o ideal e mais indicado é requerir o arquivo de conexão - só irá executar as funções desta classe - se o arquivo abaixo for carregado.
  require '../persistence/conexaobanco.class.php';

  class ContatoDAO { //Classe para acessar os dados do objeto
    //Atributo de conexão:
    private $conexao = null;
    //Método construtor - para conexão:
    public function __construct(){
			$this->conexao = ConexaoBanco::getInstance();
		}
    //Método destruir a conexão com banco - a conexao está dentro do método construtor - então iremos destruir o método construir:
    public function __destruct(){

    }
    //Apartir daqui trabalhamos com o CRUD - uma função para cada item do CRUD - cadastrar (INSERT) - cadastrar , Read (SELECT) - visualizar ou pesquisar, Upadate (UPDATE) - atualizar, Delete (DELETE) - excluir
    //Função para cadatrar no banco:
    public function cadastrarContato($c){
      try{ //tratar erros - saber qual é - de onde vem
        //Nesta parte precisamos lembrar que o banco é CASE INSENSITIVE
        //Prepare é uma função que liga diretamente com query de banco - ali digitamos como o banco de dados:
        $stat = $this->conexao->prepare("INSERT INTO contato (idcontato,nome,telefone,email,mensagem)VALUES(NULL,?,?,?,?)");
        //Abaixo vamos setar quais são os atributos ????
        //$c->nome - está pegando pelo método get mágico o nome da classe contato.class.php
        $stat->bindValue(1,$c->nome);
				$stat->bindValue(2,$c->telefone);
				$stat->bindValue(3,$c->email);
				$stat->bindValue(4,$c->mensagem);
        //mandamos executar a linha de comando do prepare:
        $stat->execute();
			}catch(PDOException $e){
			     echo "Erro ao cadastrar Contato! ".$e;
      }
    }

    //Função para pesquisar contatos - SELECT no banco:
    public function buscarContatos(){
      try{
        
        $stat = $this->conexao->query("SELECT * FROM contato");
        $array = array();
        $array = $stat->fetchAll(PDO::FETCH_CLASS,'Contato');
        $this->conexao = null;
        return $array;

      }catch(PDOException $e){
        echo "Erro ao buscar contatos. ".$e;
      }
    }
  }//fecha classe

?>
