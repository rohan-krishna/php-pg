<!DOCTYPE html>
<head>
<title> PHP Testing Playground </title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
</head>
<body>
<div class="page-header">
	<?php date_default_timezone_set("Asia/Kolkata"); ?>
	<p class="text-center"><?php echo date('F'); ?></p>
	<h1 class="text-center time"><?php echo date("h:i"); ?></h1>
	<p class="text-center"><?php echo date("l"); ?></p>
</div>
<div class="container-fluid">