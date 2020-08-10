<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Upload</title>
</head>
<body>
	@if ($errors->any())
    <div class="alert alert-danger" align='center'>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

	<div align='center'>
		<form action="up" method="post" enctype="multipart/form-data">
		<p>姓名:<input type="text" name="name"></p>
		<p>邮箱:<input type="text" name="email"></p>
		<p>验证:<input type="text" name="captcha"></p>
		<p> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 头像:<input type="file" name="avatar"></p>
		<img src="{{captcha_src()}}">
		{{csrf_field()}}
		<p><input type="submit" value="提交"></p>
		</form>
	</div>
</body>
</html>