<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset = "utf-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
    <?php //starts up the existing session and destroys it to log the user out
        if(!session_id()){
            session_start();
            session_destroy();
            echo '<script type="text/javascript">
            alert("Successfully Logged Out");
            window.location = "index.php";
            </script>'; //redirects back to index.php
        }
        else //redirects to a page that prompts the user to login if they are logged out
            echo("<header><b>You are currently logged in as a guest, please log in <a href='http://midn.cs.usna.edu/~m240930/IT350/Project1/login.html'>here</a>.</header>");
    ?>
    </body> 
</html>