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
                            <li><a href="newHome.php"><div>HOME</div></a></li>
                            <li><a href="bookings.php"><div>BOOKINGS</div></a></li>
                            <li><a href="gallery.php"><div>GALLERY</div></a></li>
                            <li><a href="faq.php"><div>FAQ</div></a></li>
                            <li><a href="contact.php"><div>CONTACT</div></a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li><?php if(isset($_SESSION['uname'])){echo "<a href='#'>".$_SESSION['uname']."</a>";}else echo"<a href='register.php'>SIGN UP</a>";?></li>
                            <li><?php if(isset($_SESSION['uname'])){echo "<a href='logout.php'>LOG OUT</a>";}else echo"<a href='newLogin.php'>LOGIN</a>";?></li>
                      </ul>
                    </div>
                </div>
            </div>
        </div>
        </nav>