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
          <h1>Sign Up</h1>
        </div>
      </div>
      <!-- sign up form-->
    <!-- form with action set up to the provided checker-->
    <div class="d-flex justify-content-center">
    <div class="row p-3 bg-dark text-white">
    <div class="col p-3 bg-primary text-white">
    <form action="submit.php" method="post">
      <fieldset> <!-- fieldset surrounding initial personal information -->
        <legend style="text-align: center;"><u>Personal Information:</u></legend>
        <label for="fname">First Name:</label> <!-- First Name Text Field input-->
        <input type="text" id="fname" name="fname"><br>
        <label for="lname">Last Name:</label> <!-- Last Name Text Field input-->
        <input type="text" id="lname" name="lname"><br>
        <label for="email">Email Address:</label> <!-- Required Email Address Text Field input-->
        <input type="text" id="email" name="email" required><br>
        <label for="pwd">Password:</label> <!-- Password Text Field input with hidden input characters-->
        <input type="password" id="pwd" name="pwd"><br>
        <label for="phone">Phone Number:</label> <!-- Phone Number Text Field input-->
        <input type="text" id="phone" name="phone"><br>
        <label for="age">Enter Your Age:</label> <!-- age number text field input -->
        <input type="number" id="age" name="age" min="18" max="70">
     
        <p>Please Select Your Gender:</p> <!-- gender selection radio buttons -->
        <input type="radio" id="male" name="gender" value="Male">
        <label for="male">Male</label><br>
        <input type="radio" id="female" name="gender" value="Female">
        <label for="male">Female</label><br>
        <input type="radio" id="other" name="gender" value="other">
        <label for="male">Prefer not to say</label><br>
      </fieldset>

      <fieldset>
        <legend style="text-align: center;"><u>Commerce Preferences:</u></legend>

        <p>Trading Preferences:</p> <!-- trading preferences checkboxes -->
        <input type="checkbox" id="barter" name="pref[]" value="Barter">
        <label for="Barter">Barter</label><br>
        <input type="checkbox" id="buy" name="pref[]" value="Buy">
        <label for="buy">Buy</label><br>
        <input type="checkbox" id="sell" name="pref[]" value="sell">
        <label for="sell">Sell</label><br>
        </br>    
        <p> I am intersted in buying/selling/bartering for: </p>
        <label for="prefone"> Preference One: </label> <!-- trading preferences drop down boxes -->
        <select name="prefone">
          <option value="None">None</option>
          <option value="gameconsoles">Game Consoles</option>
          <option value="Movies">DVDs</option>
          <option value="Used Clothes">Used Clothes</option>
          <option value="Books">Books</option>
        </select>
        </br>
        <label for="preftwo"> Preference Two: </label> <!-- trading preferences drop down boxes -->
        <select name="preftwo">
          <option value="None">None</option>
          <option value="gameconsoles">Game Consoles</option>
          <option value="Movies">DVDs</option>
          <option value="Used Clothes">Used Clothes</option>
          <option value="Books">Books</option>
        </select>
        </br>
        <label for="prefthree"> Preference Three: </label> <!-- trading preferences drop down boxes -->
        <select name="prefthree">
          <option value="None">None</option>
          <option value="gameconsoles">Game Consoles</option>
          <option value="Movies">DVDs</option>
          <option value="Used Clothes">Used Clothes</option>
          <option value="Books">Books</option>
        </select>
        </br>
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
