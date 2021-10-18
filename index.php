<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">



  <link rel="stylesheet" type="text/css" href="css/style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <title>Document</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

    <div class="container-fluid">
      <a class="navbar-brand" href="#">Food Court</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 ml-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="about.php">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="signin.php">Sign in</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div>


    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="assets/images/chic.jpg" alt="First slide" width="1100" height="500">
          <div class="carousel-caption d-none d-md-block" id="cap1">
            <h5 id="head1"  style="font-size: 2rem; background-color:black; 
            opacity: 12px;
             border-radius: 20px;
             display: flex;
            justify-content: center;
            align-items: center;
 
  
             ">Cuisines<br> that <br> delight<br> you!</h5>
            <!-- <p>The whole caption will only show up if the screen is at least medium size.</p> -->
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="assets/images/cui.jpg" alt="Second slide" width="1100" height="500">
          <div class="carousel-caption d-none d-md-block" id="cap1">
            <h5 id="head1" style="font-size: 2rem; background-color:black; 
            opacity: 12px;
             border-radius: 20px;
             display: flex;
            justify-content: center;
            align-items: center;"
            >Consume<br> Good <br> Calories!</h5>
            <!-- <p>The whole caption will only show up if the screen is at least medium size.</p> -->
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="assets/images/rasp.jpg" alt="Third slide" width="1100" height="500">
          <div class="carousel-caption d-none d-md-block" id="cap1">
            <p id="head1" style="font-size: 2rem; background-color:black; 
            opacity: 12px;
             border-radius: 20px;
             display: flex;
            justify-content: center;
            align-items: center;
 
  
             ">Join<br> Today!</p>
            <!-- <p>The whole caption will only show up if the screen is at least medium size.</p> -->
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

  <section class="my-5">
    <div class="text-center">
      <h3>Sign up</h3>
      <p>To get full access to our website please sign up or login </p>
      <div class="text-center"><a class="btn btn-primary" href="signup.php" role="button">Register me!</a></div>
    </div>
  </section>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>