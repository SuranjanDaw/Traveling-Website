<?php
    $msg="";
    if(isset($_GET['reg'])){
        if(isset($_GET['remember-me'])){
        
        $name=$_GET['username'];
        $email=$_GET['email'];
        $mob=$_GET['Mob'];
        $pwd=$_GET['pass'];
        $add=$_GET['address'];
        $dob=$_GET['dob'];
        //static $id=1001;
        //echo "$dob";
        $h=mysql_connect("localhost","root","");
        mysql_select_db("travel");
        $qry="insert into userInfo(u_name,u_email,u_pass,u_mob,u_dob,u_add) value('$name','$email','$pwd','$mob','$dob','$add')";
        //$id++;
        //echo $id;
        mysql_query($qry);
            if(mysql_affected_rows($h)>0)
                $msg="Registration Successfull";
            else {
                echo "Error!!! Please try again.";
            }
        }
        else {
            $msg="Error!! You Have to Agree to our Terms and Condions.";
        }
    }
    
    
    
            
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Register</title>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	
	<link rel="stylesheet" href="css/footer-distributed-with-address-and-phones.css">
	
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

	<link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">

	
        <!--===============================================================================================-->	
        <link rel="icon" type="image/png" href="loginBoot/images/icons/favicon.ico"/>
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="loginBoot/vendor/bootstrap/css/bootstrap.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="loginBoot/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="loginBoot/fonts/iconic/css/material-design-iconic-font.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="loginBoot/vendor/animate/animate.css">
        <!--===============================================================================================-->	
        <link rel="stylesheet" type="text/css" href="loginBoot/vendor/css-hamburgers/hamburgers.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="loginBoot/vendor/animsition/css/animsition.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="loginBoot/vendor/select2/select2.min.css">
        <!--===============================================================================================-->	
        <link rel="stylesheet" type="text/css" href="loginBoot/vendor/daterangepicker/daterangepicker.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="loginBoot/css/util.css">
        <link rel="stylesheet" type="text/css" href="loginBoot/css/main.css"><!--===============================================================================================-->
</head>
<body>
    <?php include 'menu.php';?>
    <div class="jain-container">
        <div class="limiter container-fluid slider-area cd-section visible">
            <div class="container-login100" style="background-image: url('images/tr8.jpg');">
                <div class="wrap-login100">
                    <form class="login100-form validate-form">
                            <span class="login100-form-logo">
                                    <i class="zmdi zmdi-landscape"></i>
                            </span>

                            <span class="login100-form-title p-b-34 p-t-27">
                                    Register
                            </span>

                            <div class="wrap-input100 validate-input" data-validate = "Enter username">
                                    <input class="input100" type="text" name="username" placeholder="Username">
                                    <span class="focus-input100" data-placeholder="&#xf207;"></span>
                            </div>

                            
                            <div class="wrap-input100 validate-input" data-validate="Enter Contact Number">
                                <input class="input100" type="text" name="Mob" placeholder="Contact Number">
                                <span class="focus-input100" data-placeholder="&#xf2be;"></span>
                            </div>
                            <div class="wrap-input100 validate-input" data-validate="Enter Email Id">
                                    <input class="input100" type="email" name="email" placeholder="Email">
                                    <span class="focus-input100" data-placeholder="&#xf15a;"></span>
                            </div>
                            <div class="wrap-input100 validate-input" data-validate="Enter Date of Birth">
                                    <input class="input100" type="date" name="dob" placeholder="Date of Birth">
                                    <span class="focus-input100" data-placeholder="&#xf331;"></span>
                            </div>
                            <div class="wrap-input100 validate-input" data-validate="Enter Address">
                                    <input class="input100" type="text" name="address" placeholder="Address">
                                    <span class="focus-input100" data-placeholder="&#xf299;"></span>
                            </div>
                            <div class="wrap-input100 validate-input" data-validate="Enter password">
                                    <input class="input100" type="password" name="pass" placeholder="Password">
                                    <span class="focus-input100" data-placeholder="&#xf191;"></span>
                            </div>
                            <div class="wrap-input100 validate-input" data-validate="Enter password">
                                    <input class="input100" type="password" name="confirmPass" placeholder="Confirm Password">
                                    <span class="focus-input100" data-placeholder="&#xf191;"></span>
                            </div>
                            
                            <div class="contact100-form-checkbox">
                                    <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
                                    <label class="label-checkbox100" for="ckb1">
                                        I agree to the <a class="txt1"href="#">Terms and Condition</a>
                                    </label>
                            </div>

                            <div class="container-login100-form-btn">
                                <button class="login100-form-btn" name="reg">
                                            Register
                                    </button>
                            </div>
                            <div class="wrap-input100 validate-input">
                                <input class="input100" type="text" name="message" placeholder="Confirmation Message" value="<?php echo "$msg";?>">
                                    <span class="focus-input100" data-placeholder="&#xf263;"></span>
                            </div>

                            <div class="text-center p-t-90">Already a User?
                                <a class="txt1" href="newLogin.php">
                                            Sign In
                                    </a>
                            </div>
                    </form>
                </div>
            </div>
	</div>
	<div class="row">
            <div class="col-sm-12">
                <?php include 'footer.php'?>
            </div>
        </div>
        </div>
</body>
</html>