#Aula 29 - PHP: Códigos Tutorial HTML, PHP e SQL e Composer
_____________________________________________________________
- Conexão com Banco de Dados

A Base de Dados mais comum para a linguagem php é o mysql, podes fazer o download no site mysql.com. No entanto podes utilizar outras bases de dados como, oracle, Sybase, mySQL, PostgreSQL ou qualquer um com ligação ODBC. Neste tutorial vamos utilizar como padrão o mysql. 
Para o php interagir com uma base de dados SQL, independente da base de dados, existem três comandos básicos que devem ser utilizados: um que faz a ligação com o servidor da base de dados, um que seleciona a base de dados a ser utilizada e um que executa uma "query" SQL.
Para trabalhar com PHP integrando Banco trabalharemos com a classe PDO.
PDO_MYSQL é um driver que implementa a interface PHP Data Objects (PDO). PDO_MYSQL tem vantagens do nativo suporte a prepared statement presente no MySQL 4.1 e superior.
A utilização do PDO fornece uma camada de abstração em relação a conexão com o Banco de Dados, visto que o PDO efetua a conexão com diversos bancos de dados da mesma maneira, modificando apenas a sua string de conexão.

- Criando Projeto com Banco de Dados
Vamos configurar o Composer, conforme o tutorial da aula passada - pode acessar neste link.
Próximo passo é criarmos o padrão MVC do nosso projeto – já podemos incluir persistence e dao = para acesso ao banco. Vamos criar a estrutura abaixo, não esquecendo de colocar o JSON do Composer. 

- Vamos criar um layout simples de acordo como já usamos em aula.
- Verificar o link:https://docs.google.com/document/d/1W40CFCQKMZLDLZJjdEnAgNkIzP_4PZrRq0KGUDKYRrY/edit?usp=sharing
