<?php
    session_start();
    $msg="";
    if(isset($_GET['send'])){
        
        $name=$_GET['username'];
        $n=$_SESSION['uname'];
        $email=$_GET['email'];
        $mob=$_GET['Mob'];
        $Msg=$_GET['Msg'];
        //static $id=1001;
        //echo "$dob";
        $h=mysql_connect("localhost","root","");
        mysql_select_db("travel");
        $u_id=mysql_query("select u_id from userInfo where u_name='$n'");
        $uid=mysql_fetch_array($u_id);
        $qry="insert into contact(u_id,uname,umail,mob,message) value('$uid[0]','$name','$email','$mob','$Msg')";
        //$id++;
        //echo $id;
        mysql_query($qry);
            if(mysql_affected_rows($h)>0)
                $msg="Your Message is recieved Successfull";
            else {
                $msg="Error!!! Please try again.";
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
                                    Contact Us
                            </span>

                            <div class="wrap-input100 validate-input" data-validate = "Enter username">
                                    <input class="input100" type="text" name="username" placeholder="Username">
                                    <span class="focus-input100" data-placeholder="&#xf207;"></span>
                            </div>
                            <div class="wrap-input100 validate-input" data-validate="Enter Email Id">
                                    <input class="input100" type="email" name="email" placeholder="Email">
                                    <span class="focus-input100" data-placeholder="&#xf15a;"></span>
                            </div>
                            <div class="wrap-input100 validate-input" data-validate="Enter Contact Number">
                                <input class="input100" type="text" name="Mob" placeholder="Contact Number">
                                <span class="focus-input100" data-placeholder="&#xf2be;"></span>
                            </div>
                            <div class="wrap-input100 validate-input" data-validate="Enter Your Message">
                                <textarea class="input100" type="text" name="Msg" placeholder="Message"></textarea>
                                <span class="focus-input100" data-placeholder="&#xf263;"></span>
                            </div>
                            
                            <div class="container-login100-form-btn">
                                <button name="send" class="login100-form-btn">
                                            Submit
                                    </button>
                            </div>
                            <div class="wrap-input100 validate-input">
                                <input readonly="true" class="input100" type="text" name="Confirm" placeholder="Confirmation Message" value="<?php echo "$msg";?>">
                                <span class="focus-input100" data-placeholder="&#xf2be;"></span>
                            </div>

                            <div class="text-center p-t-90">Not Signed In?
                                <a class="txt1" href="newLogin.php">
                                            Sign In
                                    </a> first.
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