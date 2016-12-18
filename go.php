<?php
function check_code($code) {
	session_start();
	
	
	$cap = $_SESSION['captcha'];
	if ($code == $cap){return TRUE;}else{return FALSE;}
}

// Обрабатываем полученный код
    if (isset($_POST['go'])) // Немного бессмысленная, но все же защита: проверяем, как обращаются к обработчику.
    {
            if ($_POST['code'] == '')
				{exit("Ошибка: введите капчу!");}
            if (check_code($_POST['code']))
				{header("Location:send_mail.php");}
            else 
				{exit("Ошибка: капча введена неверно!");}
    }
    // Если к нам обращаются напрямую, то дело дрянь...
    else 
    {
        exit("Access denied"); //..., возвращаем ошибку
    }
    
?>