<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css2?family=Chilanka&family=Montserrat:wght@300&display=swap" rel="stylesheet">

    <title>Conexão com BD</title>
  </head>
  <body>
  <body style="font-family: 'Montserrat', sans-serif;">
    <section>
      <header style="background:#4682B4; font-family: 'Chilanka', cursive;">
		<h1><div style="color:#fff; padding-top:1%; padding-left:2%;">Tutorial</h1>
        <div style="padding-left:2%; padding-botton:1%; font-size:42px; font-weight:bold; color:#B0C4DE;">Conectando com Banco de Dados</div>
      </header>
	  <nav class="navbar navbar-expand-lg navbar-light bg-light">
		  <a class="navbar-brand" href="#">Navbar</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
			<span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav">
			  <li class="nav-item active">
				<a class="nav-link" href="#">Home <span class="sr-only">(Página atual)</span></a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="#">Destaques</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="#">Preços</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link disabled" href="#">Desativado</a>
			  </li>
			</ul>
		  </div>
		</nav>

      <nav class="navbar navbar-inverse" style="margin-bottom: 0; border-radius: 0;">
        <ul class="nav navbar-nav">
          <li><a href="../index.php">Home</a></li>
          <li><a href="../view/buscarcontatos.php">Visualizar Contatos</a></li>
        </ul>
      </nav>

      <section class="container" id="home">
            <h1 class="text-center"> Contato Cliente </h1>

         <?php
            //incluimos as classes que iremos utilizar:
            include '../model/contato.class.php';
            include '../util/util.class.php';

            //Includindo a classe dao do banco:
					  include '../dao/contatodao.class.php';
            //Instanciar a classe util:
            $u1 = new Util();
            //Pego os dados lá da view - form
            $nome = $_POST['txtnome'];
            $telefone = $_POST['txttelefone'];
            $email = $_POST['txtemail'];
            $mensagem = $_POST['txtmensagem'];
            //Validando e verificando formatos expressões:
            if(empty($nome) || empty($email) || empty($telefone)){
              echo 'Preencha os dados.';

            }else if(!$u1->testarExpressaoRegular('/^[A-Za-zÀ-Úà-ú ]{2,30}$/',$nome)){
                echo 'Nome fora do padrão';

            }else if(!$u1->testarExpressaoRegular('/^[0-9]{9,20}$/',$telefone)){
              echo 'Telefone fora do padrão';

            }else if(!$u1->validarEmail($email)){
              echo 'E-mail fora do padrão';

            }else{
              $c1 = new Contato();
              $c1->nome = $nome;
              $c1->telefone = $telefone;
              $c1->email= $email;
              $c1->mensagem= $mensagem;
              echo $c1;
              echo '<hr>TESTANDO PADRÃO QUE ESTÁ ARRAY<br>';
              var_dump($c1);

              //Mandando para o banco e include lá em cima
							$contatoDAO = new contatoDAO();
							$contatoDAO->cadastrarContato($c1);

            }
         ?>

      </section>

    </main>
  </body>
</html>
