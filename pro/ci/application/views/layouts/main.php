<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
	<script src="<?php echo (base_url());?>assets/js/bootstrap.min.js"></script>
	<script src="<?php echo (base_url());?>assets/jquery/jquery.js"></script>
	<title>Hackathon</title>
</head>
<body>
	 <div class="container m-5">
		 <div class="row">
			<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
				<?php $this->load->view('users/login_view');?>
			</div>
			<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
				<?php $this->load->view($main_view);?>
			</div>
		 </div>
	 </div>
</body>
</html>
