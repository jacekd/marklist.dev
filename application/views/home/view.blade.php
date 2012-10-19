<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>title</title>
	<meta name="viewport" content="width=device-width">
	<link href='http://fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Archivo+Narrow' rel='stylesheet' type='text/css'>
	{{ HTML::style('css/marklist.css') }}
</head>
<body>
	<div class="wrapper">
		<div role="main" class="main">
			<?php 
			$text = file_get_contents('./application/views/md/'.$val.'.md');
			Bundle::start('sparkdown');
			echo Sparkdown\Markdown($text);
			?>
			<hr>
			{{ HTML::link('/', '&laquo; Back to Main Page', array('style' => '')) }}
		</div>
	</div>
</body>
</html>
