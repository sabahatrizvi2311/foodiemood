<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <style>
    *{
        padding: 0px;
        margin: 0px;
    }
    body{
        background-image: url(images/bg.jpg);
    }
    .col-6{
        text-align:center;
    }
    select{
        background-color:gray;
    }
    </style>
    <title>Foodie Moodie</title>
</head>
<body>
    <section>
    <div class="container-fluid">
    <div class="row">
    <div class="col"><marquee behavior="" direction="right"><a href="index.php"><img src="images/logo.png" width="125px"></a>
</marquee>

</div>
    </div>
    </div>
    </section>


<!-- navbar -->
    <section>
    <div class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-light top-menu">
  <div class="container-fluid">
        
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="product.php">Food</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <!-- <select name="Select" id="">
        <option value="">Select</option>
        <option value="">Burgers</option>
        <option value="">Roasted</option>
        <option value="">BBQ</option>
        </select> -->
        <!-- <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Meal</a></li>
            <li><a class="dropdown-item" href="#">Deals</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Location</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li> -->
      </ul>
      <form class="d-flex">
      <img src="images/cart.png" width="30px" height="30px">
        <a href="/"><button class="btn btn-outline-primary">  Login</button></a>
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
        
      </form>
    </div>
  </div>
    </nav>
    </div>
    </section>


</body>
</html>