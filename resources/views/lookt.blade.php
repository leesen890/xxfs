<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>提交周二</title>
</head>
<body>

<div align="center">
	<form action="/table/a" metahod="post">
		<p>名称:<input type="text" name="name"></p>
		<p>邮箱:<input type="text" name='email'></p>
		<p>年龄:<input type="text" name="age"></p>
			{{csrf_field()}}
		<p> <input type="submit" value="提交"></p>
	</form>
</div>
</body>
</html>