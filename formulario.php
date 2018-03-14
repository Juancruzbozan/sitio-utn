<?php
if(isset($_POST['mail'])) {

	$email_to = "juancruz.bozan@hotmail.com";
	$email_subject = "Email desde sitio web";

	

	if(!isset($_POST['name']) ||
	!isset($_POST['surname']) ||
	!isset($_POST['mail']) ||
	!isset($_POST['msg'])
	 ){

		echo "<b>Ocurrió un error y el formulario no ha sido enviado. </b><br />";
		echo "Por favor, vuelva atrás y verifique la información ingresada<br />";
		die();
	}else{
	
		$email_message = "Detalles del formulario de contacto:\n\n";
		$email_message .= "Nombre: " . $_POST['name'] . "\n";
		$email_message .= "Apellido: " . $_POST['surname'] . "\n";
		$email_message .= "E-mail: " . $_POST['mail'] . "\n";
		$email_message .= "Mensaje: " . $_POST['msg'] . "\n";


		echo "¡El formulario se ha enviado con éxito!";

		$headers = 'From: '.$email_to."\r\n".
		'Reply-To: '.$email_to."\r\n" .
		'X-Mailer: PHP/' . phpversion();
		@mail($email_to, $email_subject, $email_message, $headers);

	}
}


?>
