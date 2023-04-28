<?php
              session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
 <link rel="stylesheet" href="jai.css">



 <link rel="preconnect" href="https://fonts.googleapis.com">
 <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
 <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@1,700&family=Unbounded:wght@800;900&display=swap" rel="stylesheet">

 <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
<link
      href="https://fonts.googleapis.com/css2?family=Montserrat&family=Ubuntu&display=swap"
      rel="stylesheet"/>

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"/>
    <link
      rel="stylesheet"
      href="path/to/font-awesome/css/font-awesome.min.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0-beta1/css/bootstrap.min.css"/>
    <link
      rel="stylesheet"
      href="path/to/font-awesome/css/font-awesome.min.css"/>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
      integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
      crossorigin="anonymous"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"
      integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk"
      crossorigin="anonymous" ></script>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
      crossorigin="anonymous"/>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
      crossorigin="anonymous" ></script>


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ECO-MAN</title>
</head>
<body>
    
<div class="row" id="rowi">
<div class="col p-0 ">
<nav class="navbar navbar-expand-xl navbar-light bg-success ">
  <img src="images/ECO-MAN (1).png" width="50" height="50" class="d-inline-block align-top ms-4" alt="">
  <a class="navbar-brand m-1 p-1 text-white title fs-2" href="#">Eco-Man</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav m-auto">
      <li class="nav-item active  him">
        <a class="nav-link fs-5 text-white title" href="#rowi">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item  fs-5 him">
        <a class="nav-link text-white title " href="#whyu">Why us?</a>
      </li>
   
      <li class="nav-item  fs-5 him">
        <a class="nav-link text-white " href="scraprate.html">Scrap Rates</a>
      </li>
      <li class="nav-item  fs-5 him">
        <a class="nav-link text-white " href="#Contact">Contact us</a>
      </li>
    </ul>
    <ul class="navbar-nav ms-auto ">
      <li class="nav-item fs-5 him p-3 text-white pr-3">
     
        <img src="https://tse2.mm.bing.net/th?id=OIP.AdoJAsiWdwMNG0ZTvUoTUQHaHa&pid=Api&P=0" alt="" width="30px" class="imgsd">
      
        
     <?php 
          if($_SESSION['loggedin']==true)
          {
            
            $c=$_SESSION['username'];
          
        $b=$c;
         echo $b;
          }
          else{
             $a="<a href='login.php' class='p-3 fs-5 nav-item text-white text-decoration-none' >
login</a>";
             echo $a;
          }
          
        ?> 
  </li>

 
    
     </ul>
  </div>
  
</nav>
</div>
<!-- <div class="col-xl-3 bg-success pt-5  ">
  <div class="container-fluid jai">
    <form class="form-inline my-lg-0">
      <input class="form-inline mr-sm-2 p-1 mb-0 form-outline-success" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</div> -->
</div>

<div class="fluid-container">
  <div class="con">
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="https://images.unsplash.com/photo-1611284446314-60a58ac0deb9?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxMjA3fDB8MXxzZWFyY2h8Mnx8d2FzdGUlMjBtYW5hZ2VtZW50fHwwfHx8fDE2MjQ1Nzc4NTQ&ixlib=rb-1.2.1&q=80&w=1080" >
       
      </div>  
      <div class="carousel-item">
        <img class="d-block w-100 " src="https://i.pinimg.com/originals/aa/6d/99/aa6d9923e3d7dfef5b72d50e2eb11b2b.png" >
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="images/E2.png" alt="Third slide">
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



<div class="fluid-container " id="whyu">
  <div class="row">

    <div class="col">    
<div class="check">
<div class="whyus">
  <p class="hmm" >
    <h1 class="hello">
      WHY US?
    </h1>
  </p>
  <p class="hmm">
    <h4>
    Looking for a hassle-free and environmentally friendly way to dispose of your household waste? Look no further than Eco-Man !
 Our website provides you with easy-to-use Eco-Spots to store all of your important waste, and our partner Ecoman will come straight to your doorstep to collect it.<br><br>
 At Eco-Man, we strongly believe in the power of the 3 R's - Reduce, Reuse, and Recycle. We understand the importance of protecting our planet and preserving its resources for future generations.
</h4>
</p>
  <p class="hmm">
    <h4>
    We take care of all types of waste, from wet to dry to recyclable, and even large and small appliances. Our team ensures proper disposal and utilization, helping you to do your part in protecting the environment.</h4></p>
  <p class="hmm">
    <h4>
    So why wait? Schedule an order today and let  Eco-Man take care of all your waste disposal needs!  </h4>
  </p>
</div>
</div>
</div>

<div class="col imga img-fluid">
  <img src="https://www.ways2gogreenblog.com/wp-content/uploads/2019/01/waste-management-clipart-1.jpg" alt="" srcset="" width="700px">
</div>
</div>
</div>



<div class="container-fluid p-0">
 <div class="row tok">

  <div class="col-md-6 tikka">
    <img src="images/wannacall-removebg-preview.png" alt="" srcset="" class="img-fluid call">
  </div>

  <div class="col-md-6 hy">
    <div class="heh inline">
      <form class="form-inline" method="post" action="home.php">
       <h4>
         Schedule a Call
       </h4>
       <p>
         <h5>
     Mobile:
         </h5>
       </p>
       <span>
         <b>+91 </b>   <input type="tel" name="phone" id="" class="outline-success">
       </span>
       <div>
         <button class="btn btn-success p-2 m-3 buto">
          <b>
           Next
          </b> 
            </button>
       </div>
    
      </form>
      </div>
  </div>

 </div>
</div>




<!-- footer -->

<title>Responsive Footer</title>
    <link
      rel="stylesheet"
      href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css"
    />

    <link
      href="http://fonts.googleapis.com/css?family=Cookie"
      rel="stylesheet"
      type="text/css"
    />

    <footer class="footer-distributed" id="Contact">
      <div class="footer-left">
        <h3><span>Eco-Man</span></h3>

        <p class="footer-links">
          <a href="#rowi">Home</a>
          |
          <a href="#whyu">About</a>
          |
          <a href="#Contact">Contact</a>
       <?php
       if($_SESSION['loggedin']==true)
       {
        $c="|<a href='logout.php'>Log out</a>";
        echo $c;
       }
       ?>

        </p>

        <p class="footer-company-name">© 2023 T Pvt. Ltd.</p>
      </div>

      <div class="footer-center">
        <div>
          <i class="fa fa-map-marker"></i>
          <p>
            <span>B.M.S College of Engineering</span>
            Basavangudi, Bengaluru - 560019
          </p>
        </div>

        <div>
          <i class="fa fa-phone"></i>
          <p>+91 7996457543</p>
        </div>
        <div>
          <i class="fa fa-envelope"></i>
          <p>
            <a href="mailto:pratik.is21@bmsce.ac.in">WWW.BMSCE.AC.IN</a>
          </p>
        </div>
      </div>
      <div class="footer-right">
        <p class="footer-company-about">
          <span>About the company</span>
       Eco-Man is a Company that Provides You Eco-spots to store your waste
          <br />
        </p>

        <div class="footer-icons">
          <a href="#"><i class="fa fa-facebook"></i></a>
          <a href="#"><i class="fa fa-twitter"></i></a>
          <a href="#"><i class="fa fa-instagram"></i></a>
          <a href="#"><i class="fa fa-linkedin"></i></a>
          <a href="#"><i class="fa fa-youtube"></i></a>
        </div>
      </div>
    </footer>













    <div>
      <link
      rel="stylesheet"
      href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css"
    />
    <div class="up">
      <a href="#rowi">
        <i class="fa-solid fa-arrow-up fa-xl "></i>
    </div>
    </div>


     <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.min.js"></script>
</body>
</html>