<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>提交周啊</title>
</head>
<body>
	
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
	<form action="/post" metahod="post">
		<p>名称:<input type="text" name="name"></p>
		<p>邮箱:<input type="text" name='email'></p>
		<p>年龄:<input type="text" name="age"></p>
		<p>验证:<input type="text" name="captcha"></p>
			<img src="{{captcha_src()}}">
						{{csrf_field()}}
		<p> <input type="submit" value="提交"></p>
	</form>
</body>
</html>