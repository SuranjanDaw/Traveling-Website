<?php
    session_start();
    mysql_connect("localhost","root","");
    mysql_select_db("travel");
    $res=mysql_query("select p_id from pack");
    if(mysql_affected_rows()>0)
    {   
        $r=mysql_fetch_array($res);
        //var_dump($r);
    }
    else
        echo "error!!!";
?>
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
                            <li><a href="desc.php?id=<?php echo 1;$_SESSION['ikd']=1;?>"><div>West Besgal Tour</div></a></li>
                            <li><a href="desc.php?id=<?php echo 2;$_SESSION['ikd']=2;?>"><div>Assam Tour</div></a></li>
                            <li><a href="desc.php?id=<?php echo 3;$_SESSION['ikd']=3;?>"><div>Orissa Tour</div></a></li>
                            <li><a href="desc.php?id=<?php echo 4;$_SESSION['ikd']=4;?>"><div>Mumbai Tour</div></a></li>
                            <li><a href="desc.php?id=<?php echo 5;$_SESSION['ikd']=5;?>"><div>Goa Tour</div></a></li>
                            <li><a href="desc.php?id=<?php echo 6;$_SESSION['ikd']=6;?>"><div>Jammu and Kashmir Tour</div></a></li>
                            <li><a href="desc.php?id=<?php echo 7;$_SESSION['ikd']=7;?>"><div>Uttarakhand Tour</div></a></li>
                            <li><a href="desc.php?id=<?php echo 8;$_SESSION['ikd']=8;?>"><div>Rajdhani Tour</div></a></li>
                            <li><a href="desc.php?id=<?php echo 9;$_SESSION['ikd']=9;?>"><div>California Tour</div></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        </nav><!--------------end of div container-fluid-------------->
        <div class="container-fluid slider-area cd-section visible" style="padding-left: 0;padding-right: 0;">
            <div class="carousel slide media-carousel" id="carousel" data-ride="carousel">
                    <div class="carousel-inner">
                        
                        <div class="item active ">	
                            <img src="images/tr8.jpg" class="img-responsive animated zoomIn" style="transition-delay: 1s;">
                            <div class="carousel-caption">
                                <h1 class="animated lightSpeedIn" >Darjeeling</h1>
                                <h1 class="animated lightSpeedIn" >West Bengal</h1>
                                
                                <p class="animated zoomIn" >So fancying a trip to Darjeeling? You must be lured by the dazzling snow peaks of Kanchenjunga overlooking the hill town? And the beautiful tea gardens on the slopes of rolling hills, the orchids, pines & rhododendrons, the cute Himalayan toy train whistling its way through the mountains? And you want to combine all that with great sightseeing tours, food, shopping and other exciting activities. Right? </p>
                            </div>
                        </div>
                        <div class="item ">	
                            <img src="images/dal.jpg" class="img-responsive animated zoomIn" style="transition-delay: 1s;">
                            <div class="carousel-caption">
                                <h1 class="animated lightSpeedIn" >Jammu and Kashmir</h1>
                                <h1 class="animated lightSpeedIn" >Dal Lake</h1>
                                <p class="animated zoomIn" >Dal Lake is, initially, one of the most confusing parts of Srinagar for it's not really one lake at all, but three. Further more much of it is hardly what one would expect a lake to be like - it's a maze of intricate waterways and channels, floating islands of vegetation, houseboats that look so firmly moored they could almost be islands and hotels on islands which look like they could simply float away. </p>
                            </div>
                        </div>
                        <div class="item ">	
                            <img src="images/hard.jpg" class="img-responsive animated zoomIn" style="transition-delay: 1s;">
                            <div class="carousel-caption">
                                <h1 class="animated lightSpeedIn" >Haridwar</h1>
                                <h1 class="animated lightSpeedIn" >Uttarakhand</h1>
                                <p class="animated zoomIn" > Haridwar has fascinated people from all over the world with her secularism and her traditions. There are historical monuments, temples, places of religious interests, ashrams, ghats, hotels, kumbh mela, ganges river, yoga, etc. that attract tourists. Haridwar is identified with its handicraft, fairs, folk dances, music and its people.</p>
                            </div>
                        </div>
                        <div class="item ">	
                            <img src="images/kazi.jpg" class="img-responsive animated zoomIn" style="transition-delay: 1s;">
                            <div class="carousel-caption">
                                <h1 class="animated lightSpeedIn" >Assam</h1>
                                <h1 class="animated lightSpeedIn" >Kaziranga Forest</h1>
                                <p class="animated zoomIn" > Kaziranga National Park Tourism
Home to two-thirds of the world's one horned rhinoceros population, this national park has been declared as a World Heritage Site.</p>
                            </div>
                        </div>
                        <div class="item ">	
                            <img src="images/taj.jpg" class="img-responsive animated zoomInLeft">
                            <div class="carousel-caption" >
                                <h1 class="animated lightSpeedIn" >Rajdhani</h1>
                                <h1 class="animated rollIn" >Taj Mahal</h1>
                            <p class="animated zoomInRight">The Taj Mahal is one of the most wonderful tourism destinations in India and is aptly considered one of the greatest wonders of the world.</p>
                            </div>
                        </div>
                        <div class="item">	
                            <img src="images/goa.jpg" class="img-responsive animated zoomInLeft">
                            <div class="carousel-caption" >
                                <h1 class="animated rotateInDownLeft" >Goa</h1>
                                <h1 class="animated lightSpeedIn" >Beach Resort</h1>
                            <p class="animated zoomInLeft">Enjoy the beauty of the beach.</p>
                            </div>
                        </div>
                        <div class="item">	
                            <img src="images/mum.jpg" class="img-responsive animated zoomIn" style="transition-delay: 1s;">
                            <div class="carousel-caption">
                                <h1 class="animated lightSpeedIn" >Mumbai</h1>
                                <h1 class="animated lightSpeedIn" >Juhu Beach</h1>
                                <p class="animated zoomIn" >Mumbai is a spectacular paradox of chaos and hope, glamor and squalor, modernity and tradition, old and new. Famously known as the City of Dreams, Mumbai – formerly known as Bombay – has a long colonial history, starting from Gandhi’s visits to the city to the intense protests against the Simon Commission in 1928, the city has stood witness to many important events in the country’s freedom struggle. Today, Mumbai is a beautifully blended melting pot of cultures and lifestyles. The city soaks in everything into its fabric, making it its very own. </p>
                            </div>
                        </div>

                        <div class="item ">	
                            <img src="images/tr6.jpg" class="img-responsive animated zoomInLeft">
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
