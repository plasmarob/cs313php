<!DOCTYPE html>
<?php
   if (isset($_COOKIE['voted'])) {
      header("Location: http://php-rthorne2.rhcloud.com//results.php"); /* Redirect browser */
      exit();
   }
?>


<html>
  <head>
    <title>Survey</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/survey.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  </head>

  <body>

    <?php
      // define variables and set to empty values
      $json = $commandblock = $features = $places = $heard = "";

      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        setcookie("posting", "yes", time() + (86400 * 30), "/"); // 86400 = 1 day
      }
    ?>

    <div class="container">
      <div class="jumbotron">
        <h1>Commandblock Academy</h1>
        <div class="row text-center">
        </div>
      </div>
      <div class="row text-center">
        <div class="row">
          <div class="col-sm-4">
          </div>
          <div class="col-sm-4">
            <h3>New Site Survey!</h3>        
            <p>Answer a few questions to help us know what you'd like to see on this site!</p>
            <form action="http://php-rthorne2.rhcloud.com/results.php">
              <input type="submit" value="Or see results">
            </form>
            
            <hr style="height: 1px; width: 75%; color: #008000; background-color:#ffccaa " />

            <form action="results.php" method="post">
              <div>
                <h4>Have you ever used JSON before?</h4>
                <input type="radio" name="json" value="Yes">Yes<br>
                <input type="radio" name="json" value="No">No<br>
              </div>
              <div>
                <h4>Have you either used command blocks before or seen them used on YouTube?</h4>
                <input type="radio" name="commandblock" value="Yes">Yes<br>
                <input type="radio" name="commandblock" value="No">No<br>
              </div>
              <div>
                <h4>What do you (or would you) do most with Minecraft?</h4>
                <input type="radio" name="activity" value="Single Player Survival">Single Player Survival<br>
                <input type="radio" name="activity" value="Server Multiplayer">Server Multiplayer<br>
                <input type="radio" name="activity" value="Creative Builds">Creative Builds<br>
                <input type="radio" name="activity" value="Modded Play">Modded Play (Poke-craft, Crafting Dead, etc.)<br>
                <input type="radio" name="activity" value="Redstone and Mapmaking">Redstone and Mapmaking<br>
                <input type="radio" name="activity" value="Private LAN">Private LAN (friends and family)<br>
              </div>
              <div>
                <h4>What features would you like to see added to or improved upon on this site?</h4>
                <input type="checkbox" name="features" value="Scoreboard Examples">Scoreboard Examples<br>
                <input type="checkbox" name="features" value="Creature Spawning">Creature Spawning<br>
                <input type="checkbox" name="features" value="Villager Items">Villager Items<br>
                <input type="checkbox" name="features" value="Redstone Timers and Logic">Redstone Timers and Logic<br>
                <input type="checkbox" name="features" value="Youtube Videos">Youtube Videos<br>
                <input type="checkbox" name="features" value="Practice Exercises">Practice Exercises<br>
                <input type="checkbox" name="features" value="Minigame Examples">Minigame Examples<br>
                <input type="checkbox" name="features" value="Downloadable Maps">Downloadable Maps<br>
                <input type="checkbox" name="features" value="External Links">External Links (Wiki, Forums, etc.)<br>
                <input type="checkbox" name="features" value="Enchanting">Enchanting<br>
                <input type="checkbox" name="features" value="Custom Potions">Custom Potions<br>
                <input type="checkbox" name="features" value="Entity Summoning">Entity Summoning<br> 
                <input type="checkbox" name="features" value="Particles">Particles<br>    
                <input type="checkbox" name="features" value="Tellraw and Advanced Chat">Tellraw and Advanced Chat<br>          
              </div>

              <div>
                <h4>What age range are you in?</h4>
                <input type="radio" name="age" value="Kids">Kids (0-14)<br>
                <input type="radio" name="age" value="Youth">Youth (14-24)<br>
                <input type="radio" name="age" value="Old">Adult (25+)<br>
              </div>

              <div>
                <h4>What part of the world are you from?</h4>
                <input type="radio" name="places" value="United States">United States<br>
                <input type="radio" name="places" value="Canada">Canada<br>
                <input type="radio" name="places" value="Britain">Britain<br>
                <input type="radio" name="places" value="Australia">Australia<br>
                <input type="radio" name="places" value="Germany">Germany<br>
                <input type="radio" name="places" value="France">France<br>
                <input type="radio" name="places" value="Eastern Europe">Eastern Europe<br>
                <input type="radio" name="places" value="Japan">Japan<br>
                <input type="radio" name="places" value="Asia">Asia<br>
                <input type="radio" name="places" value="Mexico">Mexico<br>
                <input type="radio" name="places" value="South America">South America<br>
                <input type="radio" name="places" value="Middle East">Middle East<br>
                <input type="radio" name="places" value="Africa">Africa<br>
              </div>
              
              <hr style="height: 1px; width: 75%; color: #008000; background-color:#ffccaa " />

              <input type="submit">
            </form>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>