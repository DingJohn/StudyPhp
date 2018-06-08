<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>成员名单</title>
	<style>
		table{
			text-align: center;
		}
	</style>
</head>
<body>
<table border="1" rules="all" width="900">
	<thead>
		<tr>
			<td>ID</td>
			<td>姓名</td>
			<td>年龄</td>
			<td>邮箱</td>
			<td>个人网站</td>
		</tr>
	</thead>
	<tbody>
		<?php 
			$personal = file_get_contents("../../data/names.txt");
			$personal = explode("\n", $personal);
			for ($i=0; $i < count($personal) - 1; $i++) { 
				# code...
				$personal_a = explode("|" , $personal[$i]);
				?>
					<tr>
						<td><?php echo $personal_a[0]; ?></td>
						<td><?php echo $personal_a[1]; ?></td>
						<td><?php echo $personal_a[2]; ?></td>
						<td><?php echo $personal_a[3]; ?></td>
						<td><a href="$personal_a[4]"><?php echo strtolower((explode("//" , $personal_a[4]))[1]); ?></a></td>
					</tr>
			<?php } ?>
	</tbody>
</table>	
</body>
</html>