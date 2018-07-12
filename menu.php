<div class="container-fluid">
<div class="row">
    <div class="col-sm-12">
        <nav class="navbar navbar-inverse">
          <div class="container-fluid">
            <div class="navbar-header">
              <a class="navbar-brand" href="#">Traveller's Paradise</a>
            </div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="newHome.php">Home</a></li>
              <li><a href="bookings.php">Bookings</a></li>
              <li><a href="gallery.php">Gallery</a></li>
              <li><a href="faq.php">FAQ</a></li>
              <li><a href="contact.php">Contact US</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><?php if(isset($_SESSION['uname'])){echo "<a href='#'>".$_SESSION['uname']."</a>";}else echo'<a href="register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a>'?></li>
              <li><?php if(isset($_SESSION['uname'])){echo "<a href='logout.php'>LOG OUT</a>";}else echo"<a href='newLogin.php'>Login</a>";?></li>
            </ul>
          </div>
        </nav>
    </div>
</div>
</div>