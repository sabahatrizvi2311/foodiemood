<?php include'nav.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <script src="js/bootstrap.js"></script>
    <style>
    *{
        /* padding: 1px; */
        margin: 0px;
    }

    .top-wrap{
        color: white;
        /* padding: 10px; */
        margin:0px;
    }
    .top-menu{
        color: rgb(255 255 255);
        background: #69545485;
        display: flex;
    }
    .image-box{
       color:white; 
    }
    .image-box img{
        width: 150px;
    }
    .col-4{
        padding: 10px;
        color:white;
    }

    .slider{
        padding: 10px;
    }
    #home{
    display: flex;
    flex-direction: column;
    padding: 3px 200px;
    justify-content: center;
    /* height:300px; */
    align-items: center;
    color:blue;
}
#home::before{
    content: "";
    background-image:url(images/bg1.jpg);
    postion:absolute;
    height: 100%;
    width: 100%;
    z-index: -1;
    opacity: 0.89;
}
    </style>
    <title>Foodie Moodie</title>
</head>
<body>

<section id="home">
    <h1 class="h-primary">Welcome to Foodie Mood | Get your Food as your Mood</h1>
    <p> Food Hub to Fulfil your craving forr food Food Hub to Fulfil your craving forr food</p>
    <p> Food Hub to Fulfil your craving forr food Food Hub to Fulfil your craving forr food</p>
    <button class='btn'>Order Now</button>

</section>

    <!-- caraousel -->
    <!-- <section>
    <div class="container-fluid slider">
    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="images/menu-burger.jpg" class="d-block w-100" alt="burger" width="300px" height="400px">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="images/menu-momo.jpg" class="d-block w-100" alt="..."  width="300px" height="400px">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/menu-pizza.jpg" class="d-block w-100" alt="..."  width="300px" height="400px">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    </div>
    </section> -->
<section>
<div class="container">
    <div class="row text-center">
        <div class="col-3 ">
            <div class="image-box">
                <img src="images/burger.jpg" alt="">
                <h5>Burger</h5>
                <p>This is a big burger</p>
                <h4>Price: 390 Rs</h4>
                <button class='btn btn-danger'>Try This</button>
            </div>
        </div>
        <div class="col-3">
            <div class="image-box">
                <img src="images/momo.jpg" alt="">
                <h5>Burger</h5>
                <p>This is a big burger</p>
                <h4>Price: 390 Rs</h4>
                <button class='btn btn-danger'>Try This</button>
            </div>
        </div>
        <div class="col-3">
            <div class="image-box">
                <img src="images/pizza.jpg" alt="">
                <h5>Burger</h5>
                <p>This is a big burger</p>
                <h4>Price: 390 Rs</h4>
                <button class='btn btn-danger'>Try This</button>
            </div>
        </div>

        <div class="col-3">
            <div class="image-box">
                <img src="images/pizza.jpg" alt="">
                <h5>Burger</h5>
                <p>This is a big burger</p>
                <h4>Price: 390 Rs</h4>
                <button class='btn btn-danger'>Try This</button>
            </div>
        </div>

        <div class="col-3">
            <div class="image-box">
                <img src="images/pizza.jpg" alt="">
                <h5>Burger</h5>
                <p>This is a big burger</p>
                <h4>Price: 390 Rs</h4>
                <button class='btn btn-danger'>Try This</button>
            </div>
        </div>

        <div class="col-3">
            <div class="image-box">
                <img src="images/pizza.jpg" alt="">
                <h5>Burger</h5>
                <p>This is a big burger</p>
                <h4>Price: 390 Rs</h4>
                <button class='btn btn-danger'>Try This</button>
            </div>
        </div>

        <div class="col-3">
            <div class="image-box">
                <img src="images/pizza.jpg" alt="">
                <h5>Burger</h5>
                <p>This is a big burger</p>
                <h4>Price: 390 Rs</h4>
                <button class='btn btn-danger'>Try This</button>
            </div>
        </div>

        <div class="col-3">
            <div class="image-box">
                <img src="images/pizza.jpg" alt="">
                <h5>Burger</h5>
                <p>This is a big burger</p>
                <h4>Price: 390 Rs</h4>
                <button class='btn btn-danger'>Try This</button>
            </div>
        </div>
    </div>
    
</div>
</section>
<br/>
<br/>
<br/>
<br/>

<footer>
<div class="container footer-s">
<div class="row">
<div class="col-md-3">
<img src="images/logo.png" alt="">

</div>
<div class="col-md-3">
<h3>Quick Link</h3>
</div>
<div class="col-md-3">
<h3>Contact</h3>
</div>

</div>
</div>
</footer>
    
</body>
</html>