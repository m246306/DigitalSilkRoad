<!DOCTYPE html>
<html lang="en"><head><meta charset = "utf-8"><title>Process</title></head><body>
<?php //variable names to be used
  $fname = $_POST['fname']; 
  $lname = $_POST['lname'];
  $email = $_POST['email'];
  $pwd = $_POST['pwd'];
  $pwd = str_repeat("*", strlen($pwd));
  $phone = $_POST['phone'];
  $age = $_POST['age'];
  $gender = $_POST['gender'];
  $prefone = $_POST['prefone'];
  $preftwo = $_POST['preftwo'];
  $prefthree = $_POST['prefthree'];
  $pref = $_POST['exp'];
  $comments = $_POST['comments'];
  if (empty($fname) || empty($lname)){ //test if name was entered incorrectly 
    echo '<p> Form Incomplete: Please go back and enter your full name.</p>';
  }
  else if(empty($gender)){ //test if user selected their gender
    echo '<p> Form Incomplete: Please go back and select your gender.</p>';
  }
  else
  { //print out welcome message if all information is entered correctly
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
    $fp = @fopen("LOG.txt", 'a'); //creates or opens LOG.txt
    if (!$fp){ //tests if LOG.txt does not exist
        echo "<p><b>Error</b> opening file. Contact admin</p>";
    }
    else{ //appends the user data to LOG.txt
        $text = "$fname\t$lname\t$email\t$pwd\t$phone\t$age\t$level\t$gender\t$prefone\t$preftwo\t$prefthree";
        foreach($exp as $x){
            $text.="($x)";
        }
        $text.="\t";
        $text.="\t$comments\n";
        fwrite($fp, $text);
        fclose($fp);
        echo "<p>Your information was saved.</p>";
    }
  }
  ?>
</body> </html>  