<!doctype html>
<html lang="en">

<head>
  <link rel="icon" type="image/x-icon" href="image/pic1.jpeg">
  <title>JOTHI TEX</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
    integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="style1.css">
  <link rel="stylesheet" type="text/css"
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" />
  <!-- font awesome cdn -->
  <link rel="stylesheet" type="text/css"
    href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- style.css -->
  <link rel="stylesheet" type="text/css" href="main.css" />
  <link rel="stylesheet" type="text/css" href="styles.css"/>
  <!-- jquery cdn -->
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.js"></script>
  
  <style>
    h5{
      padding-top:8px;
      padding-left:30px;
    }
    /* i{
      padding-top:10px;
      padding-left:30px;
    } */
  </style>
</head>

<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12 navbar">
        <a href="#" class="logo navbar-brand text-white offset-md-2" style="font-family: 'Lucida Handwriting';">JOTHI TEX</a>
        <ul class="nav">
          <li class="nav-item active"><a href="#" class="nav-link">Home   </a></li>
          <li class="nav-item"><a href="zari.html" class="nav-link">Product</a></li>
          <li class="nav-item"><a href="about us.html" class="nav-link">About Us</a></li>
          <li class="nav-item"><a href="contact.html" class="nav-link">Contact Us</a></li>
          <li class="nav-item"><a href="login.php" class="nav-link">LogIn</a></li>
          <li class="nav-item"><a href="cart.html" class="nav-link">Cart</a></li>
          <li></li>
          <li></li>
          <h5 style="color:white"><?php session_start(); if (isset($_SESSION['username'])) {echo "Welcome ".$_SESSION['username'];} ?></h5>

        </ul>
      </div>
      <!-- slider banner	 -->

      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="info">
              <h1 >Jothi Tex</h1>
              <p>Nature uses only the longest threads to weave her patterns, so that each small piece of her fabric<br>
                reveals the organization of the entire tapestry.</p>
            </div>
          </div>
          <div class="carousel-item">
            <div class="info">
              <h1 >Jothi Tex</h1>
              <p>Nylon And Zari Threads </p>
            </div>
          </div>
          <div class="carousel-item">
            <div class="info">
              <h1 >Jothi Tex</h1>
              <p>Nylon thread is one of many types of thread that are
                <br> available for use with home sewing machines, as well as in industrial applications. </p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </div>


<br>
  <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>


  <br>
  <center><h3><b>Location</b></h3></center>
  <br>
  <iframe
    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3058.527666341583!2d78.00303661667101!3d11.59470436836574!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3babe37655f04b8f%3A0x572043db23839a9a!2sEllampillai%20Boys%20Government%20Hr.%20Sec.%20School!5e1!3m2!1sen!2sin!4v1654584893179!5m2!1sen!2sin"
    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
    referrerpolicy="no-referrer-when-downgrade"></iframe>

  <hr style="width:100%; text-align:left; margin-left:0">


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
</body>
<selction>
  <!--inner content go hear-->

  <!--footer  start-->
  <footer class="footer-distributed">

    <div class="footer-left">
        <h3 style="font-family: 'Lucida Handwriting';">JOTHI TEX</h3>

        <p class="footer-links">
            <a href="#">Home</a>
            |
            <a href="#">Product</a>
            |
            <a href="#">About</a>
            |
            <a href="#">Contact</a>
            
           
        </p>

          </div>

    <div class="footer-center">
        <div>
            <i class="fa fa-map-marker"></i>
            <p> <span>Elampillai</span></a>
                salem</p>
        </div>

        <div>
            <i class="fa fa-phone"></i>
            <p><a href="">+91 9865004329</p></a>
        </div>
        <div>
            <i class="fa fa-envelope"></i>
            <p><a href="mailto:deepaprabha1812@gmail.com">nirmalgnanajothi@gmail.com</a></p>
        </div>
    </div>
    <div class="footer-right">
        <p class="footer-company-about">
            <span>About the company</span>
            We, at <strong>JOTHI TEX</strong>, can help. ‘Re-sourcing’ textile manufacturers with fine grade yarns is our
            business. Started in the year 1980, JOTHI TEX is a family owned company involved in mettalic,yarn sourcing,
            and distribution.

        </p>
        <div class="footer-icons">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
            <a href="#"><i class="fa fa-whatsapp"></i></a>
        </div>
    </div>
</footer>
  </div>
</selction>

</html>