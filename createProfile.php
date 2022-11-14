<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <link href="styles.css" rel="stylesheet">
  </head>
<body>
<?php //variable names to be used
  $email = $GET['email'];
  if(file_exists('LOG.txt')){ //determines if the username submitted has already been used
    $fp = fopen("LOG.txt", 'r');
    $trash = fgets($fp);
    $found=false;
    while(!feof($fp)){
      $result = fgets($fp);
      $comp = preg_split("/\t+/", $result);
      foreach($comp as $value){
        if(strcmp($value, $email)!=0){
          $found = true;
          break;
        }
      }
      if($found){
        echo "<h1>Email is " . $email . "</h1>";
        echo "<h1>" . $comp[0] . " " . $comp[1] . "'s Profile</h1>";
        echo '<div class="d-flex justify-content-center"><div class="row p-3 bg-dark text-white"><div class="col p-3 bg-primary text-white">';
        echo "<p> Email Address: $comp[2]</p>";
        echo "<p> Phone Number: $comp[4]</p>";
        echo "<p> Age: $comp[5]</p>";
        echo "<p> Gender: $comp[6]</p>";
        echo "<p> Pref1: $comp[7]</p>";
        echo "<p> Pref2: $comp[8]</p>";
        echo "<p> Pref3: $comp[9]</p></div></div></div>";
        break;
      }
    }
    fclose($fp);
  }
  ?>
</body> 
</html>  
