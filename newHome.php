<?php session_start(); ?>
<!doctype html>
<html>
<head>
    <title>Traveller's Paradise</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="footer, address, phone, icons" />
    <meta name="description" content="">
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
        <?php include 'newMenu.php'?><!--------------end of div container-fluid-------------->
        <div class="container-fluid slider-area cd-section visible" style="padding-left: 0;padding-right: 0;">
            <div class="carousel slide media-carousel" id="carousel" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="item active ">	
                            <img src="images/tr8.jpg" class="img-responsive animated zoomIn" style="transition-delay: 1s;">
                            <div class="carousel-caption">
                                <h1 class="animated lightSpeedIn" >Darjeeling</h1>
                                <p class="animated zoomIn" >So fancying a trip to Darjeeling? You must be lured by the dazzling snow peaks of Kanchenjunga overlooking the hill town? And the beautiful tea gardens on the slopes of rolling hills, the orchids, pines & rhododendrons, the cute Himalayan toy train whistling its way through the mountains? And you want to combine all that with great sightseeing tours, food, shopping and other exciting activities. Right? </p>
                            </div>
                        </div>
                        <div class="item ">	
                            <img src="images/tr9.jpg" class="img-responsive animated zoomInLeft">
                            <div class="carousel-caption" >
                                <h1 class="animated rollIn" >Agra</h1>
                            <p class="animated zoomInRight">The Taj Mahal is one of the most wonderful tourism destinations in India and is aptly considered one of the greatest wonders of the world.</p>
                            </div>
                        </div>
                        <div class="item">	<img src="images/tr5.jpg" class="img-responsive animated zoomInLeft">
                            <div class="carousel-caption" >
                                <h1 class="animated rotateInDownLeft" >Goa</h1>
                            <p class="animated zoomInLeft">Enjoy the beauty of the beach.</p>
                            </div>
                        </div>
                        <div class="item ">	<img src="images/tr6.jpg" class="img-responsive animated zoomInLeft">
                            <div class="carousel-caption" >
                                <h1 class="animated rotateInUpRight" >Paris</h1>
                            <p class="animated zoomIn">A journey to the top.<br>Come and discover the Eiffel Tower on the only trip to the top of its kind in Europe, and let pure emotions carry you from the esplanade to the top.</p>
                            </div>
                        </div>
                        <div class="item">	<img src="images/tr7.jpg" class="img-responsive animated zoomInLeft">
                            <div class="carousel-caption" >
                                <h1 class="animated fadeIn" >California</h1>
                            <p class="animated zoomInUp">From its celebrated coastline to its broad heartland and granite Sierra peaks, California offers a lifetime of vacations in one Golden State. </p>
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
