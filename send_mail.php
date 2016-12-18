<?php
require 'PHPMailerAutoload.php';

// Для отправки HTML-письма должен быть установлен заголовок Content-type
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Отправляем
sendVerificationMail();
//header("Location:login.php");
function sendVerificationMail()
{
        $mail_to = 'lerunchik777@rambler.ru';
        $mail = new PHPMailer;
        $mail->CharSet = 'UTF-8';
        $mail->isSMTP();
        $mail->Host = 'smtp.rambler.ru';
        $mail->SMTPAuth = true;
        $mail->Username = 'myfotum2016@rambler.ru';
        $mail->Password = '7ywCBtvh';
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;
        $mail->setFrom('myfotum2016@rambler.ru','forum');
        $mail->addAddress($mail_to);
        $mail->isHTML(true);
        $mail->Subject = 'Регистрация';
        $body = '';
        $body .= '<html lang="ru">';
        $body .= '<head>';
        $body .= '<meta charset="utf-8">';
        $body .= '<title>Регистрация</title>';
        $body .= '</head>';
        $body .= '<body>';
        $body .= '<p>Вы получили это письмо, так как адрес вашей электронной почты был указан при регистрации на сайте <a href="http://' . $_SERVER['SERVER_NAME'] . '">' . $_SERVER['SERVER_NAME'] . '</a></p>';
        $body .= '<p>Если вы получили это письмо по ошибке, то просто проигнорируйте его. Если нет, то перейдите по нижеуказанной ссылке для подтверждения почты:</p>';
        $body .= '<p><a href="#">Подтвердить E-Mail</a></p>';
        $body .= '</body>';
        $body .= '</html>';
        $mail->Body = $body;
        if($mail->send()) {
            echo 'sent';
        } else {
            echo $mail->ErrorInfo;
        }
}
?>
Письмо отправлено