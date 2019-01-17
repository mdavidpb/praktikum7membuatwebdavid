<!DOCTYPE html>
<html lang="en">
<head>
    <title> </title>
    <link rel="stylesheet" type="text/css" href
     ="<?=base_url()?>assets/css/bootstrap.css">
     <link rel="stylesheet" type="text/css" href
     ="<?=base_url()?>assets/css/style.css">

     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
     <script type="text/javascript" src="<?=base_url()?>assets/js/bootstrap.js"></script>


</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

    <div class="row">
<div class="col-md-12 ">

 
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <img src="<?=base_url()?>assets/logo.png" alt="..." width="150">
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="<?=base_url()?>index.php/Dashboard">HOME</a></li>
                <li><a href="<?=base_url()?>index.php/Dashboard/profil">PROFIL</a></li>
                <li><a href="<?=base_url()?>index.php/Dashboard/kontak">DESTINASI</a></li>
                <li><a href="<?=base_url()?>index.php/Dashboard/info">INFO</a></li>
                <li><a href="<?=base_url()?>index.php/Dashboard/booking">BOOKING</a></li>
                <li><a href="<?=base_url()?>index.php/Dashboard/trending">TRENDING</a></li>
            </ul>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
            <!-- Content -->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h4><span class="glyphicon glyphicon-log-in"></span> Login</h4>
                </div>
                <div class="modal-body">
                    <form action="" role="form">
                        <div class="form-group">
                            <label for="usr"><span class="glyphicon glyphicon-user"></span> Username</label>
                            <input type="text" class="form-control" id="usr" placeholder="Type your Username">
                        </div>
                        <div class="form-group">
                            <label for="psw"><span class="glyphicon glyphicon-lock"></span> Password</label>
                            <input type="password" class="form-control" id="psw" placeholder="Type your Password">
                        </div>
                        <button type="submit" class="btn btn-block">Log In 
                            <span class="glyphicon glyphicon-ok"></span>
                        </button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
                        <span class="glyphicon glyphicon-remove"></span> Cancel
                    </button>
                    <p>Need <a href="#">help?</a></p>
                </div>
            </div>
        </div>
    </div>
</nav>



  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <!-- Wrapper for Slides -->
    <div class="carousel-inner" role="listbox">
       <div class="item active">
           <img src="<?=base_url()?>assets/pendaki.jpg" alt="" width="1350" >
           <div class="carousel-caption">
                <h3>Join With Us</h3>
                <p>Jadilah salah satu dari kami</p>
            </div>  
        </div>
        <div class="item">
            <img src="<?=base_url()?>assets/pendaki 2.jpg" alt="" width="1350" >
            <div class="carousel-caption">
                <h3>Let's Explore</h3>
                <p>Mari kita berpetualang bersama dan menjelajah dunia</p>
            </div>
        </div>
        <div class="item">
            <img src="<?=base_url()?>assets/pendaki 3.jpg" alt="" width="1350" >
            <div class="carousel-caption">
                <h3>Come On</h3>
                <p>temukan pengalaman yang berbeda dari yang lain </p>
            </div>  
        </div>
        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
           <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>                    
           <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
           <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
           <span class="sr-only">Next</span>
        </a>
    </div>
 </div>

 
 <div class="col-md-12" style="background:rgb(255, 254, 254);height:400px" class="container text-center">
<?php
 $this->load->view($konten);
?>
 </div>

<div id=info class="col-md-12" style="background:white;height:400px"> <div class="caption" style=color:black >
    <h3 class=text-center>INFORMATION</h3>
    <p class=text-center>WA 081111111111</p>
    <p class=text-center>IG @MAU_PIKNIK</p>
    <p class=text-center>FB MAU PIKNIK</p>
    <p class=text-center>WEBSITE www.M4U P1KN1K.com</p>
  </div>

</div>



   
</div>

</body>
</html>