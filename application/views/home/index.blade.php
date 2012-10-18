<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>title</title>
	<meta name="viewport" content="width=device-width">
	{{ HTML::style('laravel/css/style.css') }}
</head>
<body>
	<div class="wrapper">
		<div role="main" class="main">
			@foreach($data as $val)
				<?php 
				$file = file('./application/views/md/'.$val);
				?>
				<h1>{{ HTML::link('view/'.trim($val, '.md'), substr($file[0], 2)) }}</h1>
				<hr>
			@endforeach	
		</div>
	</div>
</body>
</html>
