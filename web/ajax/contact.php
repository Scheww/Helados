<?php
/**
 * Created by PhpStorm.
 * User: Tomas
 * Date: 21/9/16
 * Time: 4:51 PM
 */

if (empty($_POST["name"]) || empty($_POST["email"]) || empty($_POST["subject"]) || empty($_POST["message"])) {
    $response = array(
        'status' => false,
        'message' => "Debe completar los campos obligatorios"
    );

    die(json_encode($response));
}

if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) === false) {
    $response = array(
        'status' => false,
        'message' => "El formato del email es incorrecto"
    );

    die(json_encode($response));
}

if (empty($_POST["phone"])) {
    $_POST["phone"] = '';
}

if (empty($_POST["country"])) {
    $_POST["country"] = '';
}

$message = "<b>Nombre y apellido</b><br>".
            $_POST["name"]."<br><br>".
            "<b>Email</b><br>".
            $_POST["email"]."<br><br>".
            "<b>Teléfono</b><br>".
            $_POST["phone"]."<br><br>".
            "<b>País</b><br>".
            $_POST["country"]."<br><br>".
            "<b>Asunto</b><br>".
            $_POST["subject"]."<br><br>".
            "<b>Mensaje</b><br>".
            $_POST["message"]."<br><br>";

require_once 'mailer/PHPMailerAutoload.php';

$mail = new PHPMailer();

$mail->isSMTP();

$mail->SMTPDebug   = 0;
$mail->Debugoutput = "html";

$mail->CharSet    = "UTF-8";
$mail->Host       = "email-smtp.us-east-1.amazonaws.com";
$mail->Port       = 25;
$mail->SMTPAuth   = true;
$mail->SMTPSecure = 'tls';
$mail->Username   = "AKIAJBTS3TNNCO2GQIMQ";
$mail->Password   = "AnMACQjnq39fUqS3n7ZxKSEtph+8+SdYkbsWwGtgYW9V";

$mail->setFrom("info@dytar.com.ar", "Dytar");

$mail->addAddress("info@dytar.com.ar", "Dytar");

$mail->isHTML(true);
$mail->Subject = $_POST["subject"];
$mail->Body    = $message;
$mail->AltBody = $message;

if (!$mail->send()) {
    $response = array(
        'status' => false,
        'message' => "Surgió un error al enviar la consulta"
    );

    die(json_encode($response));
}

$response = array(
    'status' => true,
    'message' => "Se envió la consulta correctamente"
);

die(json_encode($response));