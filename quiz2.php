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
      if(!empty($_POST['pair']))
        $sum = $sum + ($_POST['pair'] == 'C');
      if(!empty($_POST['bracket']))
        $sum = $sum + ($_POST['bracket'] == 'B');
      if(!empty($_POST['more']))
        $sum = $sum + ($_POST['more'] == 'D');
      if(!empty($_POST['braces']))
        $sum = $sum + ($_POST['braces'] == 'A');
      
      $grade = $sum/4.0;


      $query_params = array(
            ':grade' => ($grade*100),
            ':user_id' => $_SESSION['user']['user_id'],
        );

       $query = "
            DELETE FROM user_lesson WHERE user_id = :user_id AND lesson_id = (SELECT lesson_id FROM lesson WHERE title = 'Quiz 2');
            INSERT INTO user_lesson VALUES
            ( null
            , :user_id
            , (SELECT lesson_id FROM lesson WHERE title = 'Quiz 2')
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
<h1>Quiz-2</h1>
<form action="quiz2.php" method="post">
    <fieldset class="quiz">
        Question 1:<br />
          <h5>Key and Value pairs are separated by what?</h5>
          <input type="radio" name="pair" value="A">A. ;<br/>
          <input type="radio" name="pair" value="B">B. =<br/>
          <input type="radio" name="pair" value="C">C. :<br/>
          <input type="radio" name="pair" value="D">D. -<br/>
          <br />
          <br />
        Question 2:<br />
          <h5>What do square brackets "[]" hold?</h5>
          <input type="radio" name="bracket" value="A">A. Objects<br/>
          <input type="radio" name="bracket" value="B">B. Arrays<br/>
          <input type="radio" name="bracket" value="C">C. Something Else<br/>
          <br />
          <br />
        Question 3:<br />
          <h5>If there is more than one item of data, what are they separated by?</h5>
          <input type="radio" name="more" value="A">A. ;<br/>
          <input type="radio" name="more" value="B">B. []<br/>
          <input type="radio" name="more" value="C">C. :<br/>
          <input type="radio" name="more" value="D">D. ,<br/>
          <br />
          <br />  
        Question 4:<br />
          <h5>What do curly braces "{}" hold?</h5>
          <input type="radio" name="braces" value="A">A. Objects<br/>
          <input type="radio" name="braces" value="B">B. Arrays<br/>
          <input type="radio" name="braces" value="C">C. Something Else<br/>
          <br />
          <br />  
    </fieldset>
    <button type="submit" name="submit" id="send">Grade me!</button>
</form>
</div>

<Lessons>
