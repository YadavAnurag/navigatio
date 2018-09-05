<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title><?php echo $title; ?></title>
	<link rel="stylesheet" href="./bootstrap.min.css">
</head>
<body>
	<div class="container">
		<form action="<?php echo base_url(); ?>main/login_validation" method="post">
			<div class="form-group">
				<label for="">Username</label>
				<input type="text" name="username" id="" class="form-control" />
				<span class="text-danger"><?php echo form_error('username');?></span>
			</div>
			<div class="form-group">
				<label for="">Password</label>
				<input type="password" name="password" id="" class="form-control" />
				<span class="text-danger"><?php echo form_error('username');?></span>
			</div>
		</form>
	</div>
</body>
</html>
