<!DOCTYPE html>
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
      <h1>Meet Our Team</h1>
    </div>
  </div>
  <div class="row p-3 bg-dark text-white">
    <div class="col p-3 bg-primary text-white d-flex justify-content-center"><img src="images/frank.jpg" alt="furn" class="img-thumbnail"></div>
    <div class="col p-3 bg-primary text-white"> <!--row + 2 columns for Frank's personal info-->
      <h2 style="text-align: center"><u>Frank Carter:</u></h2>
      <ul>
        <li>Hometown: Lewes, DE</li>
        <li>School: United States Naval Academy</li>
        <li>Major: Computer Science and Information Technology</li>
        <li>ECA: Varsity Offshore Sailing</li>
        <li>Hobbies: Surfing, Skating, Sailing, and all things ocean related</li>
      </ul>
      <h2 style="text-align: center"><u>Contact Me:</u></h2>
      <ul>
        <li>Phone: (302) 236-9613</li>
        <li>Email: fscarteriv@gmail.com</li>
        <li>Mailing Address:</li>
        <ul>
            <li>United States Naval Academy</li>
            <li>1 Blake Road</li>
            <li>P.O. Box 11605</li>
            <li>Annapolis, MD 21412</li>
        </ul>
      </ul>
    </div>
  </div>
  <div class="row p-3 bg-dark text-white">
    <div class="col p-3 bg-primary text-white d-flex justify-content-center"><img src="images/table.jpg" alt="furn" class="img-thumbnail"></div>
    <div class="col p-3 bg-primary text-white"> <!--row + 2 columns for Tabler's personal info-->
      <h2 style="text-align: center"><u>Samuel Tabler:</u></h2>
      <ul>
        <li>Hometown: Hot Springs, Arkansas </li>
        <li>School: United States Naval Academy</li>
        <li>Major: Information Technology</li>
        <li>ECA: FILAM, IWC</li>
        <li>Hobbies: Reading, Video Games, Languages </li>
      </ul>
      <h2 style="text-align: center"><u>Contact Me:</u></h2>
      <ul>
        <li>Phone: 808-476-1015</li>
        <li>Email: m246306@usna.edu</li>
        <li>Mailing Address:</li>
        <ul>
            <li>United States Naval Academy</li>
            <li>1 Blake Road</li>
            <li>P.O. Box 15010</li>
            <li>Annapolis, MD 21412</li>
        </ul>
      </ul>
    </div>
  </div>
</body>
</html>
