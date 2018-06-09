<?php 

	$user_info = $_POST;
	echo "欢迎您：" . $user_info["user_name"] . "，您的密码是；" . $user_info["user_password"];