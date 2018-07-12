<?php
        session_start();
        $msg="";
        $pri=0;
        if(isset($_GET['id']))
        {
            $id=$_GET['id'];
            $_SESSION['ikd']=$id;
        }
        $id=$_SESSION['ikd'];
        //var_dump($id);
        //$_SESSION['ikd']=$id;
        mysql_connect("localhost","root","");
        mysql_select_db("travel");
        $res=mysql_query("select * from pack where p_id=$id");
        $r=mysql_fetch_array($res);
        if(isset($_GET['doBook'])){
            //$id=$_SESSION['ikd'];
            $uname=$_SESSION['uname'];
            $pack=$id;
            $tourNum=$_GET['tourNum'];
            $per=$_GET['numOfPerson'];
            if(substr($tourNum, -1)==1){$pri=$r[4]*$per;} else if(substr($tourNum,-1)==2){$pri=$r[5]*$per;}
            //var_dump($pri);
            $qry="insert into book(uname,tour,numPer,pack_id,price) value('$uname','$tourNum',$per,$pack,'$pri')";
            mysql_query($qry);
            if(mysql_affected_rows()>0)
                $msg="Booking Sucessfull";
            else
               $msg="Booking NOT Done";
        }
?><!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
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
        <script>
            function getPrice(){
                document.write("java");
                num21=document.getElementById("p1").value;
                num22=document.getElementById("p2").value;
                num2=0;
                num1=document.getElementById("numOfPersonid").value;
                
                choice=document.getElementById("rad1").checked;
                if(choice==true)
                    num2= num22;
                else
                    num2= num21;
                document.getElementById("priceid").value=parseInt(num1)*parseInt(num2);
                document.write("java");
                alert("Are you Sure?"+choice);
            }
        </script>
        <title>Book your Holiday</title>
    </head>
    <body>
        <form>
            <div class="container-fluid">
                <div> <?php include 'newMenu.php'; ?> </div>
                <div class="container-fluid slider-area cd-section visible" style="padding-left: 0;padding-right: 0;">
                    <div class="carousel slide media-carousel" id="carousel" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="item active ">	
                            <img src="images/tr6.jpg" class="img-responsive" style="opacity: 0.3;">
                            <div class="carousel-caption">
                                <h1>Tour 2 Price: <label id="p2"><?php echo $r[5]; ?></label></h1>
                                <p> <?php echo $r[3]; ?></p>
                                <h1>Tour 1 Price: <label id="p1"><?php echo $r[4]; ?></label></h1>
                                <p> <?php echo $r[2]; ?></p>
                            </div>
                            <div class="carousel">
                                <input type="text" name="uname" value="" placeholder="Username" style=" margin: 10px;border-radius: 5px"><br>
                                <input name="numOfPerson" id="numOfPersonid" type="text" placeholder="No. of Person" style=" margin: 10px; border-radius: 5px"><br>
                                
                                <input id="rad1" type="radio" name="tourNum" value="tour1" checked>Tour 1<br>
                                <input id="rad2"  type="radio" name="tourNum" value="tour2" checked>Tour 2<br>
                                <input readonly="true" id="priceid" type="text" name="price" value="<?php echo "$pri";?>" placeholder="Total Price" style=" border-radius: 5px; margin: 10px;">
                                <input name="getPrice" id="getpriceid" style=" background-color: lightblue;padding: 5px" type="button" value="GET PRICE" onclick="getPrice()"><br>
                                <input style=" background-color: lightblue;padding: 5px" type="submit" name="doBook" value="Confirm Booking">
                                <input readonly="true" id="ConfirmId" type="text" name="Confirm" value="<?php if(isset($_GET['doBook']))echo "$msg"; else echo"Booking Status"; ?>" style=" border-radius: 5px; margin: 10px;">
                            </div>
                            <!--<div class="carousel-caption">
                                <select id="tourId" class="selector" name="tourNum">
                                    <option>--Choose--</option>
                                    <option>Tour 1<option>
                                    <option>Tour 2</option>
                                </select>
                            </div>-->
                        </div>
                        </div>
                    </div>
                </div>
                <div><?php include 'footer.php';?></div>
            </div>
        </form>
    </body>
</html>
