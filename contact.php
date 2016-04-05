<?php
$field_name = $_POST['nome'];
$field_email = $_POST['email'];
$field_telefone = $_POST['telefone'];
$field_whatsapp = $_POST['whatsapp'];

$mail_to = 'email@gmail.com';
$subject = 'Teste' .$field_name;

$body_message = 'Cadastro: '.$field_name."\n";
$body_message .= 'E-mail: '.$field_email."\n";
$body_message .= 'Telefone: '.$field_telefone."\n";
$body_message .= 'whatsapp: '.$field_whatsapp;

$headers = 'From: '.$field_email."\r\n";
$headers .= 'Reply-To: '.$field_email."\r\n";

$mail_status = mail($mail_to, $subject, $body_message, $headers);

if ($mail_status) { ?>
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
