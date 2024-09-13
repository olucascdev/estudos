<?php 

//$_GET
//Usada para coletar dados enviados via método HTTP GET (geralmente parâmetros na URL).

// URL: http://example.com/index.php?nome=Joao
echo $_GET['nome'];  // Saída: Joao

//$_POST
//Usada para coletar dados enviados via método HTTP POST (geralmente formulários HTML).

// Suponha que um formulário tenha um campo chamado 'nome'.
echo $_POST['nome'];  // Exibe o valor enviado pelo campo de nome


//$_REQUEST
//Contém dados enviados via GET, POST, e COOKIE. Deve ser usada com cuidado, pois mistura todos esses métodos.

echo $_REQUEST['nome'];  // Pode vir de $_GET, $_POST ou $_COOKIE

//$_SESSION
//Usada para armazenar dados de sessão. Cada usuário terá uma sessão única identificada por um ID de sessão.

session_start();  // Inicia a sessão
$_SESSION['usuario'] = "Joao";
echo $_SESSION['usuario'];  // Saída: Joao

//$_COOKIE
//Usada para coletar dados armazenados nos cookies.

// Define um cookie
setcookie("usuario", "Joao", time() + 3600);

// Acessa o valor do cookie
echo $_COOKIE['usuario'];  // Saída: Joao

//$_FILES
//Usada para manipular arquivos enviados via formulário.

// Suponha que um formulário de upload tenha um campo com nome 'arquivo'.
echo $_FILES['arquivo']['name'];  // Nome do arquivo enviado


//$_ENV
//Usada para acessar variáveis de ambiente do servidor.

echo $_ENV['PATH'];  // Exibe o valor da variável de ambiente PATH

//$_SERVER
//Contém informações sobre cabeçalhos HTTP, caminhos e scripts do servidor.

echo $_SERVER['SERVER_NAME'];  // Nome do servidor (domínio)
echo $_SERVER['REQUEST_METHOD'];  // Método de requisição (GET, POST, etc.)

//$_GLOBALS
//Um array associativo contendo todas as variáveis globais. Permite o acesso a variáveis globais de qualquer lugar no código, como discutido anteriormente.

$nome = "Joao";
echo $GLOBALS['nome'];  // Saída: Joao

//$php_errormsg
//Usada para armazenar o último erro gerado pelo PHP (se track_errors estiver ativado no php.ini).

// Suponha que ocorra um erro em uma função
echo $php_errormsg;  // Exibe a mensagem de erro




?>