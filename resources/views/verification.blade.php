<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>提交周二</title>
</head>
<body>
	@if(count($errors) > 0)
	  <div class='alert alert-danger'>
	  	<ul>
	  		@foreach ($errors->all() as $error)
	  		  <li>{{$error}}</li>
	  		@endforeach
	  	</ul>
	  </div>	
   @endif

	<form action="" metahod="post">
		<p>名称:<input type="text" name="name"></p>
		<p>邮箱:<input type="text" name='email'></p>
		<p>年龄:<input type="text" name="age"></p>
			{{csrf_field()}}
		<p> <input type="submit" value="提交"></p>
	</form>
</body>
</html>