<?

# alterar a variavel abaixo colocando o seu email

$destinatario = "caique.albutti@hotmail.com.br";

$nome = $_REQUEST['nome_contato'];
$telefone = $_REQUEST['telefone_contato'];
$email = $_REQUEST['email_contato'];
$mensagem = $_REQUEST['texto_contato'];
$assunto = $_REQUEST['select'];

 // monta o e-mail na variavel $body

$body = "===================================" . "\n";
$body = $body . "FALE CONOSCO - TESTE COMPROVATIVO" . "\n";
$body = $body . "===================================" . "\n\n";
$body = $body . "Nome: " . $nome . "\n";
$body = $body . "Telefone: " . $telefone . "\n";
$body = $body . "Email: " . $email . "\n";
$body = $body . "Mensagem: " . $mensagem . "\n\n";
$body = $body . "===================================" . "\n";

// envia o email
mail($destinatario, $assunto , $body, "From: $email\r\n");

// redireciona para a página de obrigado
header("location:obrigado.html");


?>