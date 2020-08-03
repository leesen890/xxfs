<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>提交</title>
</head>
<body>
	<form action="model/add" method="post">
		姓名:<input type="text" name="name">
		<p>年龄: <input type="text" name="age"></p>
		<p>性别: <input type="text" name="sex"></p>
		{{csrf_field()}}
		<input type="submit" value="提交">
	</form>
</body>
</html>