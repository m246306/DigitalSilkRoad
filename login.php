<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset = "utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="styles.css">
  </head>
  <body>
<?php //variable names to be used 
  $email = $_POST['username'];
  $pwd = $_POST['passwd'];
  $emailFound = false;
  $pwdFound = false;
  if(file_exists('LOG.txt')){ //checks to see if the username (email) and passwords entered are on file
    $fp = fopen("LOG.txt", 'r');
    $trash = fgets($fp);
    while(!feof($fp)){
      $result = fgets($fp);
      $comp = preg_split("/\t+/", $result);
      foreach($comp as $value){
        if(strcmp($value, $email)==0) //checks for email
            $emailFound = true;
        if(password_verify($pwd, $value)) //checks for password and decrypts the hash
            $pwdFound = true;  
      }      
    }
    if($emailFound && $pwdFound){ //starts a session if the username and password have a match in LOG.txt
        if(!session_id()) session_start();
        $loggedIn = true;
        if(!isset($_SESSION['loggedIn']))
          $_SESSION['loggedIn'] = $loggedIn;
        if(!isset($_SESSION['email']))
          $_SESSION['email'] = $email;
        echo '<script type="text/javascript">
        alert("Successfully Logged In!!!");
        window.location = "index.php";
        </script>';
    }
    else{ //response to an incorrect username/password
        echo '<script type="text/javascript">
        alert("Incorrect username and/or password. Please try again.");
        window.location = "login.html";
        </script>';
    }
    fclose($fp);
  }
  else{//if there are no users in LOG.txt or it doesn't exist yet
    echo '<script type="text/javascript">
    alert("No users on file. Please create an account.");
    window.location = "signup.php";
    </script>';
  }
  ?>
</body> </html> 