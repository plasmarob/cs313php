<html>
<head>
<link href="css/private.css" rel="stylesheet">
</head>
<body>

<?php

 // First we execute our common code to connection to the database and start the session
    require("common.php");
    
    // At the top of the page we check to see whether the user is logged in or not
    if(empty($_SESSION['user']))
    {
        // If they are not, we redirect them to the login page.
        header("Location: login.php");
        
        // Remember that this die statement is absolutely critical.  Without it,
        // people can view your members-only content without logging in.
        die("Redirecting to login.php");
    }
    
    // Everything below this point in the file is secured by the login system
    
    // We can display the user's username to them by reading it from the session array.  Remember that because
    // a username is user submitted content we must use htmlentities on it before displaying it to the user.
?>

<fieldset class="quiz">
<div id="lesson">
<p></p>
<h1>Lesson 1 : A description of JSON</h1>
<p> JSON stands for JavaScript Object Notation. </p>
<p> JSON is a way to store and exchange data between things. </p>
<p> You can use it hold information in a small amount of space. </p>
<p> We call it language-independent, which means it can be used in multiple computer languages. </p>
<p> </p>
<p> </p>
<a href="quiz1.php">take quiz!</a>
<a href="private.php">Go back</a>
</div>
</fieldset>
</body>
</html>