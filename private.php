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


    $grade1 = "";
    $grade2 = "";

    $query_params = array(
            ':user_id' => $_SESSION['user']['user_id'],
        );
    $query = "
            SELECT grade FROM user_lesson 
            WHERE user_id = :user_id AND
            lesson_id = 
            (SELECT lesson_id FROM lesson WHERE title = 'Quiz 1');
        ";
        try
        {
            $stmt = $db->prepare($query);
            $result = $stmt->execute($query_params);
        }
        catch(PDOException $ex)
        {
            die("Failed_p1 to run query.");
        }
        $row = $stmt->fetch(); //fetch any result
        if($row)
            $grade1 = "grade: " . $row["grade"] . '%';


    $query_params = array(
            ':user_id' => $_SESSION['user']['user_id'],
        );
    $query = "
            SELECT grade FROM user_lesson 
            WHERE user_id = :user_id AND
            lesson_id = 
            (SELECT lesson_id FROM lesson WHERE title = 'Quiz 2');
        ";
        try
        {
            $stmt = $db->prepare($query);
            $result = $stmt->execute($query_params);
        }
        catch(PDOException $ex)
        {
            die("Failed_p2 to run query.");
        }
        $row = $stmt->fetch(); //fetch any result
        if($row)
            $grade2 = "grade: " . $row["grade"] . '%';    

?>

<html lang="en">
<head>
  <title>Commandblock Academy</title>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link href="css/private.css" rel="stylesheet">

</head>
<body>


<h1>Hello <?php echo htmlentities($_SESSION['user']['username'], ENT_QUOTES, 'UTF-8'); ?>!</h1><br />
<!-- <a href="memberlist.php">Memberlist</a><br /> -->
<a href="edit_account.php">Edit Account</a><a href="logout.php">Logout</a>
<br/>
<br/>
<div id="lesson">
<a href="inserter.php">Lesson 1: Description</a>
<p><?php echo htmlentities($grade1, ENT_QUOTES, 'UTF-8'); ?></p>
<br/>
<a href="inserter2.php">Lesson 2: Syntax</a>
<p><?php echo htmlentities($grade2, ENT_QUOTES, 'UTF-8'); ?></p>
</div>