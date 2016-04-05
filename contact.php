<?php
$field_name = $_POST['nome'] = ( isset($_POST['nome']) );
$field_email = $_POST['email'] = ( isset($_POST['email']) );
$field_telefone = $_POST['telefone'] = ( isset($_POST['telefone']) );
$field_whatsapp = $_POST['whatsapp'] = ( isset($_POST['whatsapp']) ) ? true : null;


$mail_to = 'marianakv@gmail.com';
$subject = 'Teste' .$field_name;

$body_message = 'Cadastro: '.$field_name."\n";
$body_message .= 'E-mail: '.$field_email."\n";
$body_message = 'Telefone: '.$field_telefone."\n";
$body_message = 'whatsapp: '.$field_whatsapp;

$headers = "MIME-Version: 1.1\r\n";
$headers .="Content-type: text/plain; charset=iso-8859-1\r\n";
$headers .= "From: $field_email\r\n";
$headers .= "Return-Path: $field_email\r\n";

$envio = mail($mail_to, $subject, $body_message, $headers);

if ($envio) { ?>
	<script language="javascript" type="text/javascript">
	alert('Obrigado pela mensagem. Entraremos em contato em breve');
	window.location = 'index.html';
	</script>
<?php
}else { ?>
	<script language="javascript" type="text/javascript">
	alert('Não foi possível enviar sua mensagem. Por favor, envie um e-mail para recepcao@buzzii.com.br');
	window.location = 'index.html';
	</script>
<?php
}

?>
