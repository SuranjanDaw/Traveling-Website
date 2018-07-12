<?php
    session_start();
    $msg="";
    
    if(isset($_GET['log'])){
        $name=$_GET['username'];
        $pwd=$_GET['pass'];
        if(isset($_GET['remember-me'])){
            $cook_name="username";
            $cook_pass="password";
            setcookie($cook_name, $name, time()+60*60*1);
            setcookie($cook_pass, $pwd, time()+60*60*1);
        }
        $_SESSION['uname']=$name;
        
        //static $id=1001;
        //echo "$dob";
        $h=mysql_connect("localhost","root","");
        mysql_select_db("travel");
        $qry="select * from userInfo where u_name='$name' and u_pass='$pwd'";
        //$id++;
        //echo $id;
        $res=mysql_query($qry);
        //echo "Ouy";
            if(mysql_affected_rows()>0)
            {   
                //echo "In";
                $msg="Login Successfull";
                //header("location:newHome.php");
                
            }
            else {
                $msg="Error!!! Please try again.";
                // header("location:register.php");
            }
        }        
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
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
        <link rel="stylesheet" type="text/css" href="loginBoot/css/main.css">
        <!--===============================================================================================-->
</head>
<body>
    <?php include 'menu.php';?>
        <div class="limiter container-fluid slider-area cd-section visible">
            <div class="container-login100" style="background-image: url('images/tr6.jpg');">
                <div class="wrap-login100">
                    <form method="GET" class="login100-form validate-form">
                            <span class="login100-form-logo">
                                    <i class="zmdi zmdi-landscape"></i>
                            </span>

                            <span class="login100-form-title p-b-34 p-t-27">
                                    Log in
                            </span>

                            <div class="wrap-input100 validate-input" data-validate = "Enter username">
                                    <input class="input100" type="text" name="username" placeholder="Username">
                                    <span class="focus-input100" data-placeholder="&#xf207;"></span>
                            </div>

                            <div class="wrap-input100 validate-input" data-validate="Enter password">
                                    <input class="input100" type="password" name="pass" placeholder="Password">
                                    <span class="focus-input100" data-placeholder="&#xf191;"></span>
                            </div>

                            <div class="contact100-form-checkbox">
                                    <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
                                    <label class="label-checkbox100" for="ckb1">
                                            Remember me
                                    </label>
                            </div>

                            <div class="container-login100-form-btn">
                                <button name="log" class="login100-form-btn">
                                            Login
                                    </button>
                            </div>
                            <div class="wrap-input100 validate-input">
                                <input readonly="true" class="input100" type="text" name="message" placeholder="Confirmation Message" value="<?php echo "$msg";?>">
                                    <span class="focus-input100" data-placeholder="&#xf263;"></span>
                            </div>
                            <div class="text-center p-t-90">
                                    <a class="txt1" href="#">
                                            Forgot Password?
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