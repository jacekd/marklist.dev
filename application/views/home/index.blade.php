<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Laravel: A Framework For Web Artisans</title>
	<meta name="viewport" content="width=device-width">
	{{ HTML::style('laravel/css/style.css') }}
</head>
<body>
	<div class="wrapper">
		<div role="main" class="main">
			@foreach($data as $val)
				<?php $val = trim($val, '.md'); ?>
				{{ HTML::link('view/'.$val, $val) }}
			@endforeach	
		</div>
	</div>
</body>
</html>
