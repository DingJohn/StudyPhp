<!-- PHP代码 -->
<?php 

//校验方法
function check(){
	if (empty($_POST['user_name'])) {
		return "请输入用户名";
	}
	if (empty($_POST['user_password'])) {
		return "请输入密码";
	}
	if (empty($_POST['user_re_password'])) {
		return "请再次输入密码";
	}
	if ($_POST['user_password'] !== $_POST['user_re_password']) {
		return "两次输入的密码不一致";
	}
	if (!isset($_POST['agree']) && $_POST['agree'] !== 'on') {
		return "您还未同意注册协议";
	}

	$user_name = $_POST['user_name'];
	$user_password = $_POST['user_password'];

	$is_success = file_put_contents("../../data/user_pwd_info.txt", $user_name . "|" . $user_password ,FILE_APPEND);
		if ($is_success) {
			echo "save success！";
			return 0;
		}else{
			echo "save error！";
		}
}

	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		$result = check();
	}
 ?>
 <!-- HTML代码 -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>用户注册</title>
</head>
<body>
	<form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
		
		<label>
			用户名：<input type="text" name="user_name" value="<?php echo isset($_POST['user_name']) ? $_POST['user_name'] : ""; ?>" id="user_name">
		</label><br>
		<label>
			密　码：<input type="password" name="user_password" id="user_password">
		</label><br>
		<label>
			重复密码：<input type="password" name="user_re_password" id="user_re_password">
		</label><br>
		<label>
			<input type="checkbox" name="agree" value="agree" id="arrage">同意注册协议
		</label><br>
		<?php if (!empty($result)): ?>
			<?php echo $result . "<br>"; ?>
		<?php endif ?>
		<input type="submit" value="注册">
	</form>
</body>
</html>