<!DOCTYPE html>
<html>
<head>
	<title>Halaman Login</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()."assets/bootstrap/css/bootstrap.css";?>"/>
	<link rel="stylesheet" href="<?php echo base_url()."assets/adminLTE/css/AdminLTE.min.css";?>"/>

	<link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/login.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/loading.css'); ?>">
	<style type="text/css">
			.loginbox{
				margin: 180px auto;
				width: 450px;
				position: relative;
				border-radius: 15px;
				background: #ffffff;
			}

			body{
				background-color: rgb(209,209,209);
			}
	</style>
</head>
<body>
	<div class="box box-info loginbox">
		<div class="box-header with-border">
			<h3 class="box-title">Login Form</h3>
		</div>
		<form class="form-horizontal" method="post" action="">
			<div class="box-body">
				<!-- form username -->
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">Username</label>

					<div class="col-sm-10">
                    	<input type="text" class="form-control" name="usr" placeholder="Username">
                  	</div>

				</div>
				<!-- form password -->
				<div class="form-group">
					<label for="inputPassword3" class="col-sm-2 control-label">Password</label>
					
					<div class="col-sm-10">
                    	<input type="password" class="form-control" name="pwd" placeholder="Password">
                  	</div>
				
				</div>
				<!-- Remember me -->
				<div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    
                    <div class="checkbox">
                      <label>
                        <input type="checkbox"> Remember me
                      </label>
                    </div>
                  
                  </div>
                </div>

			</div>
			<!-- Box footer -->
			<div class="box-footer">
                <button type="submit" name="masuk" class="btn btn-info pull-right">Sign in</button>
             </div>
		
		</form>
	</div>
</body>
</html>