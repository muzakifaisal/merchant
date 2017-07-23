<!DOCTYPE html>
<html>
<head>
	<title>SIAKAD Administrator Page</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/vendor/font-awesome/css/font-awesome.min.css">
</head>
<body>
	<div class="container">
		<div class="col-lg-12 text-center">
			<br><br>
			<img src="<?php echo base_url() ?>assets/images/food.png">
			<br><br>
		</div>
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
			<div class="panel panel-default">
				<div class="panel-body">
					<form role="form" method="post" action="<?php echo base_url() ?>login/authentication">
						<div class="form-group">
							<label>username</label>
							<input type="text" class="form-control" name="username">
						</div>
						<div class="form-group">
							<label>password</label>
							<input type="password" class="form-control" name="password">
						</div>
						<button type="submit" class="btn btn-info">Sign In</button>
					</form>
					</div>
				</div>
			</div>
		</div>
		
		
	</div>
</body>
</html>