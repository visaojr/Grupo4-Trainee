<?
$servidor = 'localhost';
$banco = 'contas';
$usuario = 'root';
$senha = '';

$conexao = mysql_connect($servidor, $banco, $usuario, $banco);

$query = "CREATE TABLE usuarios(
		primeiro_nome varchar(255),
		segundo_nome varchar(255),
		email varchar(255),
		senha varchar(255),
		id int not null auto_increment, primary key(ID)
)";

$executar = mysql_query($conexao, $query);

$query  = "INSERT INTO usuarios(primeiro_nome, segundo_nome, email, senha, id) VALUES ('LUANA', 'CRISTINA', 'luannanonato@gmail.com','vivalavida', '1')";
$executar = mysql_query($conexao, $query);

?>