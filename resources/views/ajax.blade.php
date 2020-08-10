<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>087</title>
	<!--引入jQuery文件-->
	<script type="text/javascript" src="https://php-acad.28sjw.com/Statics/Assets/js/
	jquery.min-3.2.1.js"></script>
</head>
<body>
	<input type="button" value="点我" id="btn">
</body>
<script type="text/javascript">
  //jQuery的页面载入事件
       $(function(){
       	   //给按钮绑定一个点击事件(
       	     $('#btn').click(function(){
       	     	//发送ajax请求
       	     	$.get('/response',function(data) {
       	     		console.log(data)
       	     	},'josn');
       	     });
        });
       window.onload
</script>
</html>