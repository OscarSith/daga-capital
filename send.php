<?php
$params = array(
	'nombre' => FILTER_SANITIZE_STRING,
	'correo' => FILTER_VALIDATE_EMAIL,
	'mensaje' => FILTER_SANITIZE_STRING,
	'asunto' => FILTER_SANITIZE_STRING
);

$values = filter_input_array(INPUT_POST, $params);

if (empty($values['nombre']))
{
	$json = ['load' => false, 'error_message' => 'El nombre es requerido'];
}
else if (!$values['correo'])
{
	$json = ['load' => false, 'error_message' => 'Debe poner un email válido'];
}
else if (empty($values['mensaje']))
{
	$json = ['load' => false, 'error_message' => 'Debe escribir su mensaje'];
}
else
{
	require 'mailer/PHPMailerAutoload.php';

	$mail = new PHPMailer(true);

	try {
		$mail->isSMTP();
		$mail->SMTPAuth = true;
		$mail->Host = 'localhost';
		$mail->SMTPSecure = 'tls';
		$mail->Username = '';
		$mail->Password = '';
		$mail->CharSet = 'UTF-8';
		$mail->isHTML(true);

		$mail->From = $values['correo'];
		$mail->FromName = $values['nombre'];

		$mail->addAddress('contacto@dagacapital.com', 'Daga Capital');
		// $mail->addCC($values['correo'], $values['nombre']);
		$mail->addReplyTo($values['correo'], $values['nombre']);

		$mail->Subject = $values['asunto'];
		$mail->Body    = nl2br('<br><b>Correo:</b> '.$values['correo'].'<br><br><blockquote style="border-left:5px solid #CCC;padding: 4px 7px;">'.$values['mensaje'].'</blockquote>');
		$mail->AltBody = $values['mensaje'];

		if (!$mail->send()) {
			$json = ['load' => false, 'error_message' => 'El mensaje no pudo ser enviado, intentelo de nuevo, error: ' . $mail->ErrorInfo];
		} else {
			$json = ['json' => true, 'success_message' => 'Tu mensaje ha sido enviado'];
		}
	} catch (phpmailerException $pex) {
		$json = ['load' => false, 'error_message' => $pex->getMessage()];
	}
}

echo json_encode($json);