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
    $name = $_POST['name']; 
    $email = $_POST['adr'];
    $phone = $_POST['number']; 
    $desc = $_POST['description'];
    $comments = $_POST['comments'];
    $pref = $_POST['sellType'];
    if(file_exists('POSTS.txt')!=1){ //creates a header for LOG.txt if it didn't exist previously
      $fp = fopen("POSTS.txt", 'a'); 
      $header = "Name:\tEmail:\t\t\t\tPhone Number:\tDescription:\t\t\t\t\t\t\t\t\tTrade Preference:\t\tComments:\n";
      fwrite($fp, $header);
      fclose($fp);
    }
    if(file_exists('POSTS.txt')){ //appends the user data to LOG.txt if it already exists
      $fp = fopen('POSTS.txt', 'a'); //tabs now match up decently well in LOG.txt
      $text = "$name\t\t$email\t\t\t\t$phone\t$desc\t\t\t\t\t\t\t\t\t$pref\t\t$comments";
      $text = str_replace(array("\n", "\r"), " && ", $text); //replaces newlines with &&
      $text.="\n";
      fwrite($fp, $text);
      fclose($fp);
      echo '<script type="text/javascript">
        alert("Your post was successful!");
        window.location = "index.php";
        </script>';
    }
  ?>
</body> 
</html>  
