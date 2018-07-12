<?php
    session_start();
    $pid=$_GET['ild'];
    //echo $pid."pp";
    mysql_connect("localhost","root","");
    mysql_select_db("travel");
    
    $qry="select * from pic where p_id='$pid'";
    $res=mysql_query($qry);
    
    $qry2="select pack from pack";
    $res2=mysql_query($qry2);
    if(mysql_affected_rows()>0)
    {   
        $k=0;
        $r=mysql_fetch_array($res);
        while($k != $pid)
        {
            $r2=mysql_fetch_array($res2);
            $k++;
        }
        //var_dump($r2);
        //echo 'Good';
    }
    else
        echo 'bad';
    
?><!doctype html>
<html>
<head>
    <title>Traveller's Paradise</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="footer, address, phone, icons" />
    <meta name="galleryDescription" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="js/jquery-3.2.1.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <script src="js/wow.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="slider.css" rel="stylesheet" type="text/css">
    <link href="css/animated.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/demo.css">
    <link rel="stylesheet" href="css/footer-distributed-with-address-and-phones.css">

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
</head>

<body>
    <div class="jain-container">
        <nav class="nav navbar-default navbar-fixed-top" style="background-color: transparent;">	
        <div class="container-fluid" style="padding-left: 0;padding-right: 0;">
            <div class="container">
                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3" align="center" >
                    <img class="img-responsive " src="images/logo.png" style="width:116px;margin-top:17%;">
                </div>
                <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9" style="padding-left: 0;padding-right: 0;">

                    <div class="navbar-header">
                     <a  role="button" data-toggle="collapse" href="#MyNavbar" aria-expanded="true" aria-controls="collapse" class="trigger collapsed"></a>
                    </div>
                    <div class="collapse navbar-collapse" id="MyNavbar" >
                        <ul class="nav navbar-nav" >
                            <li><a href="galleryDesc.php?ild=<?php echo 1;$_SESSION['ipd']=1;?>"><div>West Besgal Gallery</div></a></li>
                            <li><a href="galleryDesc.php?ild=<?php echo 2;$_SESSION['ipd']=2;?>"><div>Assam Gallery</div></a></li>
                            <li><a href="galleryDesc.php?ild=<?php echo 3;$_SESSION['ipd']=3;?>"><div>Orissa Gallery</div></a></li>
                            <li><a href="galleryDesc.php?ild=<?php echo 4;$_SESSION['ipd']=4;?>"><div>Mumbai Gallery</div></a></li>
                            <li><a href="galleryDesc.php?ild=<?php echo 5;$_SESSION['ipd']=5;?>"><div>Goa Gallery</div></a></li>
                            <li><a href="galleryDesc.php?ild=<?php echo 6;$_SESSION['ipd']=6;?>"><div>Jammu and Kashmir Gallery</div></a></li>
                            <li><a href="galleryDesc.php?ild=<?php echo 7;$_SESSION['ipd']=7;?>"><div>Uttarakhand Gallery</div></a></li>
                            <li><a href="galleryDesc.php?ild=<?php echo 8;$_SESSION['ipd']=8;?>"><div>Rajdhani Gallery</div></a></li>
                            <li><a href="galleryDesc.php?ild=<?php echo 9;$_SESSION['ipd']=9;?>"><div>California Gallery</div></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        </nav><!--------------end of div container-fluid-------------->
        <div class="container-fluid slider-area cd-section visible" style="padding-left: 0;padding-right: 0;">
            <div class="carousel slide media-carousel" id="carousel" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class='item active '>	
                            <img src="<?php echo $r[1];?>" class='img-responsive animated zoomIn' style='transition-delay: 1s;'>
                            <div class='carousel-caption'>
                            <h1 class='animated lightSpeedIn' ><?php echo $r2[0]; ?></h1>
                            </div>
                        </div>
                        <div class='item '>	
                            <img src="<?php echo $r[2];?>" class='img-responsive animated zoomIn' style='transition-delay: 1s;'>
                            <div class='carousel-caption'>
                            <h1 class='animated lightSpeedIn' ><?php echo $r2[0]; ?></h1>
                            
                            </div>
                        </div>
                        <div class='item '>	
                            <img src="<?php echo $r[3];?>" class='img-responsive animated zoomIn' style='transition-delay: 1s;'>
                            <div class='carousel-caption'>
                                <h1 class='animated lightSpeedIn' ><?php echo $r2[0]; ?></h1>
                            </div>
                        </div>
                        <div class='item '>	
                            <img src="<?php echo $r[4];?>" class='img-responsive animated zoomIn' style='transition-delay: 1s;'>
                            <div class='carousel-caption'>
                            <h1 class='animated lightSpeedIn' ><?php echo $r2[0]; ?></h1>
                            
                            </div>
                        </div>

                    </div>
                    <a href="#carousel" class="left carousel-control" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
                    <a href="#carousel" class="right carousel-control" data-slide="next"><i class="fa fa-chevron-right"></i></a>
            </div>
        </div><!--------------end of div slider-area-------------->
    </div>
    <?php include 'footer.php';?>
</body>
</html>
