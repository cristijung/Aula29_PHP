<!DOCTYPE html>
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
          <li><a href="../buscarcontatos.php">Visualizar Contatos</a></li>
        </ul>
      </nav>

      <section class="home container-fluid" id="home">
        <h1 class="text-center"> Buscar Contatos </h1>

            <?php

        		include '../dao/contatodao.class.php';
        		include '../model/contato.class.php';
        		$contatoDAO = new ContatoDAO();

        		$contatos = $contatoDAO->buscarContatos();
            //Testar com var_dump:
            echo "<h3>Mostrar com var_dump: </h3>";
            var_dump($contatos);
            //Depois mais bonito:

            echo "<hr><h2>Buscando com implode: </h2>";
            $dados = implode('<br>',$contatos);
            echo $dados;
            //Mais uma forma - foreach:

            echo "<hr><h3>Com foreach e mostrando como quisermos: </h3>";
        		foreach($contatos as $c){
        			echo "<p><hr>".$c."</p>";
        		}

        		?>

            <!--Agora Buscar dentro de uma tabela:-->
            <table class="table table-striped table-hover">
              <thead>
                <tr>
                  <th> Código </th>
                  <th> Nome </th>
                  <th> Telefone </th>
                  <th> E-mail </th>
    			        <th> Mensagem </th>
                </tr>
              </thead>
              <tbody>
                <?php
                  foreach ($contatos as $c) {
                    echo "<tr>";
                    echo "<td>".$c->idcontato."</td>";
                    echo "<td>".$c->nome."</td>";
                    echo "<td>".$c->telefone."</td>";
                    echo "<td>".$c->email."</td>";
                    echo "<td>".$c->mensagem."</td>";
                    echo "</tr>";
                  }
                 ?>
               </tbody>
              </table>

      </section>

    </main>
  </body>
</html>
