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

    <div class="container mt-3">
      <h2>Current Users <h2>
      
        <!--PHP start-->
        <?php
        //open file
        echo '<table class="table text-white">
        <tr>
          <th>First Name</th>
          <th>Last Name</th>
          <th> First Preference</th>
          <th>Profile</th>
        </tr>';

        $fp = @fopen("LOG.txt", 'r');

        if(!$fp)
        {
          $content ="<p> ERROR! Could not open file for reading.</p>";
        }
        else
        {
          //get the first line
          $line = fgets($fp);
          $lineExploded = array();
          //print on loop until empty. 
          echo "<tbody>";
          while($line = fgets($fp))
          {
            $lineExploded = explode('	', $line);
            //print with table format
            //print_r ($lineExploded);
            echo "<tr>";
            echo "<td>" . $lineExploded[0] . "</td>" .
                  "<td>" . $lineExploded[2]. "</td>" .
                  "<td>" . $lineExploded[16] . "</td>" .
                  "<td><a href='https://midn.cs.usna.edu/~m240930/IT350/Project1/createProfile.php?email=<?php echo $lineExploded[4] ?>'>User Profile</a></td>"; //this also doesn't work properly
                  //"<td><a href='https://midn.cs.usna.edu/~m240930/IT350/Project1/createProfile.php?email=" . $lineExploded[3] . "'>Add Friend</a></td>"; --> implement this
            echo "</tr>";
          }
          echo "</tbody>";
        }
        ?>
      </table>
    </div>
</body>
</html>
