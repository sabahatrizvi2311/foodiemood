<?php include'nav.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/bootstrap.js"></script>
    <style>

    body{
        background-image: url(images/bg.jpg);
    }
    .top-wrap{
        background: gray;
        color: white;
        padding: 10px;
        margin:0px;
    }
    .top-menu{
        color: rgb(255 255 255);
        background: #69545485;
    }
    .image-box{
       color:white; 
    }
    .image-box img{
        width: 200px;
    }
    .col-4{
        padding: 10px;
        color:white;
    }
    </style>
    <title>Foodie Moodie</title>
</head>
<body>

    <!-- caraousel -->
    <section>
    <div class="container-fluid">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/menu-burger.jpg" class="d-block w-100" alt="..." width='300' height='500'>
    </div>
    <div class="carousel-item">
      <img src="images/menu-momo.jpg" class="d-block w-100" alt="..." width='300' height='500'>
    </div>
    <div class="carousel-item">
      <img src="images/menu-pizza.jpg" class="d-block w-100" alt="..." width='300' height='500'>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
    </div>
    </div>
    </section>
<section>


</section>
<br/>
<br/>
<br/>
<br/>

<section>
<div class="footer">
<footer>

<ul>
<li> <h3>Contact us</h3> </li>
<li> <h3>About us</h3> </li>
<div class="row">
<div class="col-4">Colom 1</div>
<div class="col-4">Col 2</div>
<div class="col-4">Col 3</div>
</div>
</ul>
</footer>
</div>

</section>
    
</body>
</html>