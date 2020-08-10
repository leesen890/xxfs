<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>文件上传</title>
</head>
<body>
	<form action="" method="post" enctype="multipart/form-data">
		<p>姓名：<input type="text" name="name"></p>
		<p>年龄：<input type="text" name="age"></p>
		<p>邮箱：<input type="text" name="email"></p>
		<p>头像：<input type="file" name="avatar"></p>
		{{csrf_field()}}
		<p><input type="submit" value="提交"></p>
	</form>
</body>
</html>