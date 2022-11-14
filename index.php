<!DOCTYPE html> <!--Team 4: Frank Carter and Sam Tabler-->
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <link href="styles.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <div class="container-fluid">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" href="https://midn.cs.usna.edu/~m240930/IT350/Project1/index.php">The Digital Silk Road</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://midn.cs.usna.edu/~m240930/IT350/Project1/about.php">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://midn.cs.usna.edu/~m240930/IT350/Project1/signup.php">Sign Up</a>
        </li>
        <li>
          <a class="nav-link" href="https://midn.cs.usna.edu/~m240930/IT350/Project1/createReport.php">User List</a>
        </li>
      </ul>
    </div>
    <div style="float: right;">
      <ul class="navbar-nav">
        <?php
        if(!session_id()) session_start(); //starts the session to use session variables
        $loggedIn = $_SESSION['loggedIn'];
        $email = $_SESSION['email'];
        if($loggedIn){ //if the user is logged in, print a unique header and execute the html
          echo('<li>
          <a class="nav-link" style="text-align: right;" href="https://midn.cs.usna.edu/~m240930/IT350/Project1/post.php">Sell</a>
          </li>
          <li>
          <a class="nav-link" style="text-align: right;" href="https://midn.cs.usna.edu/~m240930/IT350/Project1/logout.php">Logout</a>
          </li>');
        }
        else{ //if the user is not logged in, print a different header and return to prevent the below html from executing
          echo('<li>
          <a class="nav-link" style="text-align: right;" href="https://midn.cs.usna.edu/~m240930/IT350/Project1/login.html">Login</a>
          </li>');
        }
        ?>
        <li>
          <a class="navbar-item" style="margin-right: 10px;" href="https://www.instagram.com/usnacompsci/"><img src="images/insta.png" alt="insta" width="40" height="40"></a><!--https://upload.wikimedia.org/wikipedia/commons/thumb/2/28/Instagram_logo.png/600px-Instagram_logo.png-->
        </li>
      </ul>
    </div>
  </nav>
  <div class="masthead" style="background-image: url('images/background.jpg');">
    <div class="color-overlay d-flex justify-content-center align-items-center">
      <h1>Welcome to The Digital Silk Road!</h1>
    </div>
  </div>
  <div class="row p-3 bg-dark text-white">
    <div class="col p-3 bg-primary text-white"><img src="images/trade.jpg" alt="furn" class="d-block w-100" height="450"></div>
    <div class="col p-3 bg-primary text-white">
      <h2 style="text-align: center"><u>Our Mission:</u></h2>
      <ul style="font-size: 20px;">
        <li>We seek to provide an online e-commerce service that is free to use and provides ample access to everyday, lightly used items at a discounted price</li><br>
        <li>Our service not only offers a plethora of goods to users, but it offers an alternative source of payment for those who may be financially challenged</li><br>
        <li>We also hope to provide a medium for users to interact and negotiate an agreement for trade. Printed and digital currency is an option, but bartering is not only available, but encouraged</li>
      </ul>
    </div>
  </div>
  <div class="container-fluid"><!--Container that allows me to specify rows and columns to split up data-->
    <div class = "d-flex justify-content-center">
    <div id="demo" class="carousel slide" data-bs-ride="carousel" style="width: 60rem;"><!--carosel implementation-->
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="3"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="4"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="images/products1.jpg" alt="elec" class="d-block w-100" height="450">
          <div class="carousel-caption d-none d-md-block">
            <h5>Household Electronics!</h5>
          </div>
        </div>
        <div class="carousel-item">
          <img src="images/products2.jpg" alt="furn" class="d-block w-100" height="450">
          <div class="carousel-caption d-none d-md-block">
            <h5>Featured Furniture!</h5>
          </div>
        </div>
        <div class="carousel-item">
          <img src="images/products3.jpg" alt="book" class="d-block w-100" height="450">
          <div class="carousel-caption d-none d-md-block">
            <h5>Award Winning Books!</h5>
          </div>
        </div>
        <div class="carousel-item">
          <img src="images/products4.jpg" alt="school" class="d-block w-100" height="450">
          <div class="carousel-caption d-none d-md-block">
            <h5>School Supplies!</h5>
          </div>
        </div>
        <div class="carousel-item">
          <img src="images/products5.jpg" alt="food" class="d-block w-100" height="450">
          <div class="carousel-caption d-none d-md-block">
            <h5>Non-Perishable Goods!</h5>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
      </button>
    </div>
  </div><br>
  <div class="row"> <!--four cards in a row advertising specific products-->
    <div class="card col" style="width: 15rem;">
      <div class="card-body">
        <h4 class="card-title">Games Consoles</h4>
        <img class="card-img-top" src="images/switch.jpg" alt="switch">
        <p></p>
        <img class="card-img-top" src="images/ps5.jpg" alt="ps5">
      </div>
    </div>
    <div class="card col" style="width: 15rem;">
      <div class="card-body">
        <h4 class="card-title">BlockBuster Movies</h4>
        <img class="card-img-top" src="images/movie.jpg" alt="movie">
      </div>
    </div>
    <div class="card col" style="width: 15rem;">
      <div class="card-body">
        <h4 class="card-title">Used Clothes</h4>
        <img class="card-img-top" src="images/clothes.jpg" alt="clothes">
        <p></p>
        <img class="card-img-top" src="images/clothes2.jpg" alt="clothes2">
      </div>
    </div>
    <div class="card col" style="width: 15rem;">
        <div class="card-body">
          <h4 class="card-title">Good Reads</h4>
          <img class="card-img-top" src="images/book.jpg" alt="book">
        </div>
    </div>
    </div><br>
  <div class="row">
  <div class="card col" style="width: 18rem;">
    <div class="card-body"> <!--two more cards in a row with additional information-->
      <a class="nav-link" href=""><h4 class="card-title">Sign Up</h4></a>
      <p class="card-text">Click Above to Become a Patron of The Digital Silk Road:</p>
        <ul>
          <li>View items to buy/trade</li>
          <li>Interact with other users online</li>
          <li>Post items of your own to be bought/traded for</li>
        </ul>
    </div>
  </div>
  <div class="card col" style="width: 18rem;">
      <div class="card-body">
        <h4 class="card-title">Buy or Sell</h4>
        <p class="card-text">Post Items on a Public Forum to be bought or sold</p>
        <ul>
          <li>Recieve notifications of interested buyers</li>
          <li>Set a price or accept counter-offers</li>
          <li>Buy/Sell with cash or by trading another tangible item</li>
        </ul>
      </div>
  </div>
  </div>
      
    </div>
  <footer style="color:white;">
      None of the content within this web site or the web sites of the members of this
      course are intended for distribution in any way,
      shape, or form. Nor is any attempt being made to disrupt the profiting
      capability of the copyright holders. The contents of this web site and the web
      sites of the members of this course are solely intended for educational use of
      the students and the instructor. All content herein is included strictly for
      the demonstration of implemented course objectives.

      <div class = "d-flex justify-content-center"><script src="https://faculty.cs.usna.edu/~sgilroy/IT350/tools/htmlvalidate.js" ></script></div>
      <p style="text-align: right;">Ⓒ All rights reserved to Frank and Table. Effective as of 24OCT2022.</p>
  </footer>
</body>
</html>
