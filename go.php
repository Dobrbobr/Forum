<?php
function check_code($code) {
	session_start();
	
	
	$cap = $_SESSION['captcha'];
	if ($code == $cap){return TRUE;}else{return FALSE;}
}

// ������������ ���������� ���
    if (isset($_POST['go'])) // ������� �������������, �� ��� �� ������: ���������, ��� ���������� � �����������.
    {
            if ($_POST['code'] == '')
				{exit("������: ������� �����!");}
            if (check_code($_POST['code']))
				{header("Location:send_mail.php");}
            else 
				{exit("������: ����� ������� �������!");}
    }
    // ���� � ��� ���������� ��������, �� ���� �����...
    else 
    {
        exit("Access denied"); //..., ���������� ������
    }
    
?>