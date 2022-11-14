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
  $fname = $_POST['fname']; 
  $lname = $_POST['lname'];
  $email = $_POST['email'];
  $pwd = $_POST['pwd'];
  $phone = $_POST['phone'];
  if(empty($phone)) //will now replace an empty field with 'Not Provided'
    $phone = "Not Provided"; 
  $age = $_POST['age'];
  if(empty($age))
    $age = "Not Provided";
  $gender = $_POST['gender'];
  $prefone = $_POST['prefone'];
  $preftwo = $_POST['preftwo'];
  $prefthree = $_POST['prefthree'];
  $pref = $_POST['pref'];
  $comments = $_POST['comments'];
  if(file_exists('LOG.txt')){ //determines if the username submitted has already been used
    $fp = fopen("LOG.txt", 'r');
    $found = false;
    $trash = fgets($fp);
    while(!feof($fp)){
      $result = fgets($fp);
      $comp = preg_split("/\t+/", $result);
      foreach($comp as $value){
        if(strcmp($value, $email)==0){
          $found = true;
          break;
        }
      }
      if($found)
        break;
    }
    fclose($fp);
  }
  if($found)
    echo('<p>An Account with that username already exists! Please go back and change your username.</p>');
  else if (empty($fname) || empty($lname)){ //test if name was entered incorrectly 
    echo '<p> Form Incomplete: Please go back and enter your full name.</p>';
  }
  else if(preg_match("/.*(?=.*[A-Z])(?=.*[a-z])(?=.*[\d]).*/", $pwd)!=1){ //regular expression to create password requirements
    $pwdError = '<p> Password is Missing: </p>';
    if(preg_match("/.*(?=.*[A-Z]).*/", $pwd)!=1){ //tells user exactly what elements they forgot
      $pwdError.= '<p> At least one Uppercase Letter </p>';
    }
    if(preg_match("/.*(?=.*[a-z]).*/", $pwd)!=1){
      $pwdError.= '<p> At least one Lowercase Letter </p>';
    }
    if(preg_match("/.*(?=.*[\d]).*/", $pwd)!=1){
      $pwdError.= '<p> At least one Digit </p>';
    }
    echo $pwdError;
  }
  else if(empty($gender)){ //test if user selected their gender
    echo '<p> Form Incomplete: Please go back and select your gender.</p>';
  }
  else{ //print out welcome message if all information is entered correctly
    $pwd = password_hash($pwd, PASSWORD_DEFAULT);
    echo "<h1> Welcome $fname $lname!</h1>";
    echo "<h2> We're excited to have you on board!</h2>";
    echo "<p> Email Address: $email</p>";
    echo "<p> Password: $pwd</p>";
    echo "<p> Phone Number: $phone</p>";
    echo "<p> Age: $age</p>";
    echo "<p> Gender: $gender</p>";
    echo "<p> Pref1: $prefone</p>";
    echo "<p> Pref2: $preftwo</p>";
    echo "<p> Pref3: $prefthree</p>";
    echo "<p> Preferences for Trade: </p>";
    foreach($pref as $value){
        echo "<p>- $value </p>";
    }
    if(file_exists('LOG.txt')!=1){ //creates a header for LOG.txt if it didn't exist previously
      $fp = fopen("LOG.txt", 'a'); 
      $header = "First Name:\tLast Name:\tEmail:\t\t\t\tPassword:\tPhone Number:\tAge:\tGender:\tFirst Preference:\tSecond Preference:\Third Preference:\tCommerce Preferences:\t\t\t\t\t\t\t\t\t\t\tComments:\n";
      fwrite($fp, $header);
      fclose($fp);
    }
    if(file_exists('LOG.txt')){ //appends the user data to LOG.txt if it already exists
      $fp = fopen('LOG.txt', 'a'); //tabs now match up decently well in LOG.txt
      $text = "$fname\t\t$lname\t\t$email\t$pwd\t\t\t$phone\t\t$age\t\t\t\t$gender\t\t$prefone\t\t\t\t$preftwo\t\t\t\t$prefthree\t\t\t";
      $temp = "";
      foreach($pref as $x){
        $temp.="($x)";
      }
      if(empty($temp))
        $temp = "Not Provided"; 
      $text.="$temp\t$comments";
      $text = str_replace(array("\n", "\r"), " && ", $text); //replaces newlines with &&
      $text.="\n";
      fwrite($fp, $text);
      fclose($fp);
      echo "<p>Your information was saved.</p><a href='http://midn.cs.usna.edu/~m240930/IT350/Project1/index.html'>Back to Home</a>";
    }
  }
  ?>
</body> 
</html>  
