<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;
require '../PHPMailer/Exception.php';
require '../PHPMailer/PHPMailer.php';
require '../PHPMailer/SMTP.php';

require_once('config.php');
$email = $_POST ['email'];
$query = "SELECT * FROM usuarios where correo = '$email' AND status = 1";
$result = $conexion->query($query);
$row = $result->fetch_assoc();

if ($result->num_rows>0) {
   
$mail = new PHPMailer(true);

try {
   $mail->isSMTP();                                            
   $mail->Host       = 'smtp-mail.outlook.com';                     
   $mail->SMTPAuth   = true;                                   
   $mail->Username   = 'andrikadrian@outlook.com';                     
   $mail->Password   = 'Andrik200';                               
   $mail->Port       = 587;                                    

    
   $mail->setFrom('andrikadrian@outlook.com', 'Andrik');
   $mail->addAddress( $email, 'usuario de prueba');     

    
   $mail->isHTML(true);                                  
   $mail->Subject = 'recuperacion de contraseña'; 
   $mail->Body    = "hola, este es un correo generado para solicitar tu recuperacion de contraseña, porfavor, 
   visita la pagina <a href='localhost/spending_tracker/usuarios/change_password.php?id=".$row['id']."'>para recuperar contraseña</a>";
   $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

   $mail->send();
   header("Location: ../index.php?message=ok");
} catch (Exception $e) {
    header("Location: ../index.php?message=error");
}

}else{
    header("Location: ../index.php?message=not_found");
}


?>