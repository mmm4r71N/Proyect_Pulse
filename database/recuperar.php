<?php
require '../PHPMailer/src/PHPMailer.php';
require '../PHPMailer/src/SMTP.php';
    include("conexion.php");
    session_start();
   if(isset ($_POST['recuperar']))
   {
    mt_srand(time());
    $random = mt_rand(0,9999);
    $email = $_POST["email"];
    $_SESSION['email']= $email;
    $_SESSION['random'] =$random;
    $mail = new PHPMailer\PHPMailer\PHPMailer();
    $mail->CharSet = 'UTF-8';
   
    $body = "Su codigo de recuperacion es $random, <br> ingreselo y modifique la contraseña";
    $mail->IsSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPSecure = 'ssl';
    $mail->Port       = 465;
    $mail->SMTPAuth   = true;
    $mail->Username   = 'tiago.e.aurelio@gmail.com';
    $mail->Password   = 'gjdhshviftahnxsz';
    $mail->SetFrom('tiago.e.aurelio@gmail.com', "ProyectPulse");
    $mail->AddReplyTo('no-reply@mycomp.com','no-reply');
    $mail->Subject    = "Correo De Prueba";
    $mail->MsgHTML($body);
   
    $mail->AddAddress($email, 'nombre');
    $mail->send();

    header("location:../html/recuperarcontra2.php");
   }
   mysqli_close($enlace)
?>