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

    if(!empty($_POST))
    {
      
      //tally up a sum grade.
      $sum = 0;
      if(!empty($_POST['json']))
        $sum = $sum + ($_POST['json'] == 'B');
      if(!empty($_POST['works']))
        $sum = $sum + ($_POST['works'] == 'B');
      if(!empty($_POST['exchange']))
        $sum = $sum + ($_POST['exchange'] == 'A');
      
      $grade = $sum/3.0;


      $query_params = array(
            ':grade' => ($grade*100),
            ':user_id' => $_SESSION['user']['user_id'],
        );

       $query = "
            DELETE FROM user_lesson WHERE user_id = :user_id AND lesson_id = (SELECT lesson_id FROM lesson WHERE title = 'Quiz 1');
            INSERT INTO user_lesson VALUES
            ( null
            , :user_id
            , (SELECT lesson_id FROM lesson WHERE title = 'Quiz 1')
            , :grade
            , 1 
            )
        ";
            //, (SELECT user_id FROM user WHERE username = :user)

        try
        {
            // Execute the query
            $stmt = $db->prepare($query);
            $result = $stmt->execute($query_params);
        }
        catch(PDOException $ex)
        {
            die("Failed_q1_1 to run query.");
        }

        header("Location: private.php");
        die("Redirecting to private.php");
      
    }
?>

<html lang="en">
<head>
  <title>Commandblock Academy</title>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link href="css/private.css" rel="stylesheet">

</head>
<body>

<div id="center">
<h1>Quiz-1</h1>
<form action="quiz1.php" method="post">
    <fieldset class="quiz">
        Question 1:<br />
          <h5>What does JSON stand for?</h5>
          <input type="radio" name="json" value="A">A. Jumping Seems Optimistic, Naturally!<br/>
          <input type="radio" name="json" value="B">B. Javascript Object Notation<br/>
          <input type="radio" name="json" value="C">C. Java Scripting Object Notes<br/>
          <input type="radio" name="json" value="D">D. None of the above<br/>
          <br />
          <br />
        Question 2:<br />
          <h5>JSON only works in Javascript.</h5>
          <input type="radio" name="works" value="A">A. True<br/>
          <input type="radio" name="works" value="B">B. False<br/>
          <br />
          <br />
        Question 3:<br />
          <h5>JSON is a way to store and ___ things.</h5>
          <input type="radio" name="exchange" value="A">A. exchange data between <br/>
          <input type="radio" name="exchange" value="B">B. eat <br/>
          <input type="radio" name="exchange" value="C">C. send <br/>
          <input type="radio" name="exchange" value="D">D. get rid of <br/>
          <br />
          <br />  
    </fieldset>
    <button type="submit" name="submit" id="send">Grade me!</button>
</form>
</div>

<Lessons>
