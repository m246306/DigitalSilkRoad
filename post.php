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
    <!--nav bar-->
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
          <h1>Make a Post</h1>
        </div>
      </div>
      <!-- sign up form-->
    <!-- form with action set up to the provided checker-->
    <div class="d-flex justify-content-center">
    <div class="row p-3 bg-dark text-white">
    <div class="col p-3 bg-primary text-white">
    <h2><u>Post an Item to be Sold Here</u></h2>
    <form action="sell.php" method="post">
      <fieldset>
        <legend style="text-align: center;">Commerce Preferences:</legend>

        <p>Trading Preference:</p> <!-- trading preferences checkboxes -->
        <label for="sellType">How would you like to trade this item?:</label> <!-- trading preferences drop down boxes -->
        <select name="sellType">
          <option value="Barter">Barter</option>
          <option value="Sell">Sell</option>
          <option value="Both">Both</option>
        </select>
        </br>    
        <p>Please provide a short description of the item:</p>
        <textarea id="description" name="description" required></textarea><br>
        </br>
    </fieldset>
    <fieldset>
        <legend style="text-align: center;">Contact Info:</legend>
        <label for="name">Full name:</label> <!-- Required Email Address Text Field input-->
        <input type="text" id="name" name="name" required><br>
        <label for="adr">Email Address:</label> <!-- Required Email Address Text Field input-->
        <input type="text" id="adr" name="adr" required><br>
        </br>
        <label for="number">Phone Number:</label> <!-- Phone Number Text Field input-->
        <input type="text" id="number" name="number" required><br>
        </br>
        <label for="comments">Additional Comments:</label><br> <!-- additional comments textarea box -->
        <textarea id="comments" name="comments"></textarea><br>
      </fieldset>
      
      <input type="submit" value="Submit"> <input type="reset" value="Clear"><br> <!-- submission and reset buttons -->
    </form>
      </div>
    </div>
  </div>
</body>