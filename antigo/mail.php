<?php

//Formulário de Contato | Versão 7.5 (klebrr)<br>
//Autor Original: Autor Original: Apoena
//http://www.phpbrasil.com
// adaptado em 05/09/2005 - kleber (klebrr em klebrr.com)
// não funcionava com php 5.0.1 e 5.0.4	 (Testado apenas no Linux)
// dispensei o include (config.php) pra ficar num só arquivo	

echo "<html>
<head>
<title> Processando... </title>
<link rel=\"stylesheet\" href=\"class.css\" type=\"text/css\">
</head>";
// Variaveis originadas no email_form.php
$nome = $_POST['nome'];
//$cidade = $_POST['cidade'];
//$estado = $_POST['estado'];
$email = $_POST['email'];
$assunto = $_POST['assunto'];
$mensagem = $_POST['mensagem'];
// adicionei a captura do ip do remetente 
$ip = $_SERVER['REMOTE_ADDR'];
//Seu email, para onde irao as informações do formulário
$mail_destino = "barbara@asspress.com.br";
echo "<body bgcolor=\"#FFFFFF\" leftmargin=\"10\" topmargin=\"10\" marginwidth=\"0\" marginheight=\"0\">
<center><font class=\"texto\">";
//Mensagem de cabeçalho do email
$mail_header = "ASSPRESS Cirurgica.";
//Mensagem para o email de resposta
$msg_reply = "Olá $nome,\nRecebemos o seu email com o assunto $assunto.\n\nObrigado pelo seu contato!\n\n Esta é uma mensagem automática de confirmação.\n Por Favor não responda este e-mail.\n $ip";
//Mensagem de Erro
$msg_erro = "Atenção!! Os campos (Nome, E-mail e Mensagem ) não podem estar em branco.";
//Endereço do seu SMTP (para se conectar no SMTP)	(acho que é só para windows afinal não tem postfix ou sendmail)
$msg_smtp_url = "smtp-web.kinghost.net";
//Login do seu SMTP (para se conectar no SMTP)
//$msg_smtp_login = "";
//Senha do seu SMTP (para se conectar no SMTP)
//$msg_smtp_senha = "";

//Obrigatoriedade
if ($nome!="" and $assunto!="" and $email!="")
	{
	$msg.="$mail_header\n\n";
	$msg.="Nome: $nome\n";
	$msg.="Cidade: $cidade\n";
	$msg.="Estado: $estado\n";
	$msg.="Email: $email\n";
	$msg.="Assunto: $assunto\n";
	$msg.="Mensagem: $mensagem\n";
	$msg.="ip da origem: $ip";

	if (mail("$mail_destino", "Formulário do SITE: $assunto", $msg, "From:$nome<$email>"))
		{
			?>
		<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ASSPRESS</title>
<link href="index.css" rel="stylesheet" type="text/css" /> 
</head>

<body>
<table width="900" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td bgcolor="#FFFFFF"><img src="imagens/asspress.png" width="900" height="200" /></td>
  </tr>
</table>
<table width="900" border="0" align="center" cellpadding="2" cellspacing="2">
  <tr class="menu_pai">
    <td width="300" bgcolor="#002D62" class="menu_pai"><a href="index.html">HOME</a></td>
    <!--<td width="300" bgcolor="#002D62"><a href="apresentacao.html">APRESENTAÇÃO</a></td> -->
    <td width="300" bgcolor="#002D62"><a href="produtos.html">PRODUTOS</a></td>
    <td width="300" bgcolor="#002D62"><a href="eventos.html">EVENTOS</a></td>
  </tr>
</table>
<?php	
		//Imprimindo confirmação de envio
		echo 
			" </font></center>
			<html>
			<meta http-equiv=refresh content=10;URL=./></html>";
			echo "<font class=\"texto\">";
			echo "Obrigado!<br>você receberá um e-mail de confirmação desta mensagem<br><br>endereço ip: <b>$ip</b></font> 
			";
?>
<table width="900" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td bgcolor="#57749A" class="endereco">Rua Gávea 35 lj 02 | Jd América | Belo Horizonte - MG | CEP 30421-340 | 31 3373 7744 / 3373 8090 | <a href="mailto:asspress@asspress.com.br">asspress@asspress.com.br</a></td>
  </tr>
</table>

<?php			
		//Enviando mensagem de confirmação para o email do internauta
		 mail("$nome<$email>", "Re:Formulário enviado: $assunto", $msg_reply, "From:<$mail_destino>");
		}
		else
		echo
			"
			<meta http-equiv=refresh content=3;URL=../>
			</html><center><br><br><font color=red>
			<b>Erro ao enviar e-mail!</b>
			</font></center>
			";
	}
else
	{
	//Alerta sobre os campos obrigatórios
	echo 
		"
		<br><br><center>
		$msg_erro <br><br>
		<a href=\"javascript:window.history.go(-1)\" class=\"links\">Por favor, volte e preencha corretamente.</a>
		</center>
		";
	}

?>