<!-- Configura o email -->
<?php
  use PHPMailer\PHPMAiler\PHPMailer;
  use PHPMailer\PHPMAiler\Exception;
  
  require 'vendor/phpmailer/phpmailer/Exception.php';
  require 'vendor/phpmailer/phpmailer/PHPMailer.php';
  require 'vendor/phpmailer/phpmailer/SMTP.php';
  
  function email_Send($remetente_email, $remetente_nome, $destinatario_email, $assunto, $mensagem_html){
    try{
      $mail = new PHPMailer(true);
      $mail->isSMTP();

      // Autencicação no SMTP
      $mail->Host = 'mail.projetoabraao.com.br';
      $mail->SMTPAuth = true;
      $mail->Username = 'site@projetoabraao.com.br';
      $mail->Password = '100missaocn';
      
      $mail->SMTPSecure = 'tls';
      $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
      $mail->CharSet = 'utf-8';
      $mail->Port = 25;

      // Informações do Remetente
      $mail->setFrom($remetente_email, $remetente_nome);
      $mail->addReplyTo($remetente_email, $remetente_nome);

      // Informações do destinatário
      $mail->addAddress($destinatario_email);

      // Configurações da mensagem
      $mail->isHTML(true);
      $mail->Subject = $assunto;
      $mail->MsgHTML($mensagem_html);

      // Enviar email
      return $mail->send();
    } catch(Exception $e){
      echo "Erro: " .$e->getMessage();
    }
  }
  
?>