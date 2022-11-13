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
            <a class="nav-link active" href="index.html">The Digital Silk Road</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.html">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="signup.html">Sign Up</a>
          </li>
        </ul>
        <a class="navbar-item" href="https://www.instagram.com/usnacompsci/"><img src="images/insta.png" alt="insta" width="40" height="40"></a><!--https://upload.wikimedia.org/wikipedia/commons/thumb/2/28/Instagram_logo.png/600px-Instagram_logo.png-->
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
                  "<td>" . $lineExploded[16] . "</td>";
            echo "</tr>";
          }
          echo "</tbody>";
        }
        ?>
      </table>
    </div>
</body>
</html>
