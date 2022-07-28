<?php include('server.php')?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Sign Up SAKTHICADD</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
	body{
background-image: url('https://i.pinimg.com/originals/e8/ab/83/e8ab83923295950ea0456f39aed9f5f6.jpg');
background-size: cover;
background-repeat: no-repeat;
height: 100%;
font-family: 'Numans', sans-serif;
}
.login-form {
    width: 475px;
    margin: 60px auto;
	
}
.login-form form {        
    margin-bottom: 10px;
    background: white;
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    padding: 45px;
	border-radius: 12px;
}
.login-form h2 {
    margin: 0 0 15px;
}
.form-control {
    border-radius: 10px;
}
.input-group-prepend .fa {
    font-size: 18px;
	
}
.login-btn {
    font-size: 15px;
	background: #cc0000 !important;
	border-radius: 20px;
    font-weight: bold;
  	min-height: 40px;
}
.register-btn {
    font-size: 15px;
	background: white !important;
	border-radius: 20px;
    font-weight: bold;
  	min-height: 40px;
	  color: #cc0000;
}
.social-btn .btn {
    border: none;
    margin: 10px 3px 0;
    opacity: 1;
}
.social-btn .btn:hover {
    opacity: 0.9;
}
.social-btn .btn-secondary, .social-btn .btn-secondary:active {
    background: #507cc0 !important;
}
.social-btn .btn-info, .social-btn .btn-info:active {
    background: #64ccf1 !important;
}
.social-btn .btn-danger, .social-btn .btn-danger:active {
    background: #df4930 !important;
}
.or-seperator {
    margin-top: 20px;
    text-align: center;
    border-top: 1px solid #A9A9A9;
}
.or-seperator i {
    padding: 0 10px;
    background: #f7f7f7;
    position: relative;
    top: -11px;
    z-index: 1;
} 
 
</style>
</head>
<body>
<div class="login-form">
    <form action="signup.php" method="post">
		<?php include('errors.php');?>
        <h2 class="text-center"><b>Register</b></h2>   
        <div class="form-group">
        	<div class="input-group">
                <div class="input-group-prepend">
                                       
                </div>
                <input type="text" class="form-control" name="username" value="<?php echo $username; ?>" placeholder="Username" required="required">				
            </div>
        </div>
		<div class="form-group">
        	<div class="input-group">
                <div class="input-group-prepend">
                                       
                </div>
                <input type="text" class="form-control" name="email" value="<?php echo $email; ?>" placeholder="E-mail" required="required">				
            </div>
        </div>
		<div class="form-group">
            <div class="input-group">
                <div class="input-group-prepend">
                                       
                </div>
                <input type="password" class="form-control" name="password_1" placeholder="Enter Password" required="required">				
            </div>
        </div>    
		<div class="form-group">
            <div class="input-group">
                <div class="input-group-prepend">
                                       
                </div>
                <input type="password" class="form-control" name="password_2" placeholder="Confirm Password" required="required">				
            </div>
        </div>     
        <div class="form-group">
            <button type="submit" class="btn btn-primary login-btn btn-block" name="reg_user">Register</button>
        </div>
       
		
        <p class="text-center">Already have an account?</p>
		<div class="form-group">
            <a href="login.php "<button type="submit" class="btn btn-primary register-btn btn-block">Login</button></a>
        </div>
       
    </form>
    <p class="text-center text-muted small">Copyright © 2020-2022, SAKTHICADD.<br>
All Rights Reserved.</p>
</div>
</body>
</html>