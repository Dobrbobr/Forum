<?php
require 'PHPMailerAutoload.php';

// ��� �������� HTML-������ ������ ���� ���������� ��������� Content-type
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// ����������
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
        $mail->Subject = '�����������';
        $body = '';
        $body .= '<html lang="ru">';
        $body .= '<head>';
        $body .= '<meta charset="utf-8">';
        $body .= '<title>�����������</title>';
        $body .= '</head>';
        $body .= '<body>';
        $body .= '<p>�� �������� ��� ������, ��� ��� ����� ����� ����������� ����� ��� ������ ��� ����������� �� ����� <a href="http://' . $_SERVER['SERVER_NAME'] . '">' . $_SERVER['SERVER_NAME'] . '</a></p>';
        $body .= '<p>���� �� �������� ��� ������ �� ������, �� ������ �������������� ���. ���� ���, �� ��������� �� ������������� ������ ��� ������������� �����:</p>';
        $body .= '<p><a href="#">����������� E-Mail</a></p>';
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
������ ����������