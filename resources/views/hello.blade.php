<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style type="text/css">
		h2{color:red;}
	</style>
</head>
<body>
	<h2>Heeloo</h2>
	{{ $test['name'] }} - {{$test['age']}}
	<br>
	@if($test['age'] > 18)
		<h3>Du tuoi di tu</h3>
	@else
		<h3>Chua du tuoi di tu</h3>
	@endif
</body>
</html>