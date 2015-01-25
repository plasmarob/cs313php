<!DOCTYPE html>

<?php

      $handle = fopen("file.txt", "r");
      if ($handle) {
          if (($line = fgets($handle)) !== false) $jsonyes = $line; 
          if (($line = fgets($handle)) !== false) $jsonno = $line; 
          
          if (($line = fgets($handle)) !== false) $cbyes = $line; 
          if (($line = fgets($handle)) !== false) $cbno = $line;   

          if (($line = fgets($handle)) !== false) $actSPS = $line; 
          if (($line = fgets($handle)) !== false) $actSM = $line; 
          if (($line = fgets($handle)) !== false) $actCB = $line; 
          if (($line = fgets($handle)) !== false) $actMP = $line; 
          if (($line = fgets($handle)) !== false) $actRM = $line; 
          if (($line = fgets($handle)) !== false) $actLAN = $line; 

          if (($line = fgets($handle)) !== false) $featSE = $line; 
          if (($line = fgets($handle)) !== false) $featCS = $line; 
          if (($line = fgets($handle)) !== false) $featVI = $line; 
          if (($line = fgets($handle)) !== false) $featRT = $line; 
          if (($line = fgets($handle)) !== false) $featYV = $line; 
          if (($line = fgets($handle)) !== false) $featPE = $line; 
          if (($line = fgets($handle)) !== false) $featME = $line; 
          if (($line = fgets($handle)) !== false) $featDM = $line; 
          if (($line = fgets($handle)) !== false) $featEL = $line; 
          if (($line = fgets($handle)) !== false) $featE = $line; 
          if (($line = fgets($handle)) !== false) $featCP = $line; 
          if (($line = fgets($handle)) !== false) $featES = $line; 
          if (($line = fgets($handle)) !== false) $featP  = $line; 
          if (($line = fgets($handle)) !== false) $featTa = $line; 

          if (($line = fgets($handle)) !== false) $ageKid = $line; 
          if (($line = fgets($handle)) !== false) $ageYouth = $line; 
          if (($line = fgets($handle)) !== false) $ageOld = $line; 

          if (($line = fgets($handle)) !== false) $placeUS = $line; 
          if (($line = fgets($handle)) !== false) $placeC = $line; 
          if (($line = fgets($handle)) !== false) $placeB = $line; 
          if (($line = fgets($handle)) !== false) $placeAU = $line; 
          if (($line = fgets($handle)) !== false) $placeG = $line; 
          if (($line = fgets($handle)) !== false) $placeFR = $line; 
          if (($line = fgets($handle)) !== false) $placeEE = $line; 
          if (($line = fgets($handle)) !== false) $placeJP = $line; 
          if (($line = fgets($handle)) !== false) $placeAsia = $line; 
          if (($line = fgets($handle)) !== false) $placeMX = $line; 
          if (($line = fgets($handle)) !== false) $placeSA = $line; 
          if (($line = fgets($handle)) !== false) $placeME = $line; 
          if (($line = fgets($handle)) !== false) $placeAF = $line; 
          fclose($handle);

         if (isset($_SERVER['HTTP_REFERER']) && $_SERVER['HTTP_REFERER'] == "http://php-rthorne2.rhcloud.com/survey.php")
         {
            setcookie("voted", "yes", time() + (86400 * 365) + "/"); // 86400 = 1 day

         

             $wfile = fopen("file.txt", "w");
             if ($wfile) {
                fwrite($wfile, ($jsonyes + (int)(isset($_POST['json']) && $_POST['json'] == "Yes")) . "\n");
                fwrite($wfile, ($jsonno + (int)(isset($_POST['json']) && $_POST['json'] == "No")) . "\n");
                           
                fwrite($wfile, ($cbyes + (int)(isset($_POST['commandblock']) && $_POST['commandblock'] == "Yes")) . "\n");
                fwrite($wfile, ($cbno + (int)(isset($_POST['commandblock']) && $_POST['commandblock'] == "No")) . "\n");
 
                fwrite($wfile, ($actSPS + (int)(isset($_POST['activity']) && $_POST['activity'] == "Single Player Survival")) . "\n");
                fwrite($wfile, ($actSM + (int)(isset($_POST['activity']) && $_POST['activity'] == "Server Multiplayer")) . "\n");
                fwrite($wfile, ($actCB + (int)(isset($_POST['activity']) && $_POST['activity'] == "Creative Builds")) . "\n");
                fwrite($wfile, ($actMP + (int)(isset($_POST['activity']) && $_POST['activity'] == "Modded Play")) . "\n");
                fwrite($wfile, ($actRM + (int)(isset($_POST['activity']) && $_POST['activity'] == "Redstone and Mapmaking")) . "\n");
                fwrite($wfile, ($actLAN + (int)(isset($_POST['activity']) && $_POST['activity'] == "Private LAN")) . "\n");
 
                fwrite($wfile, ($featSE + (int)(isset($_POST['features']) && $_POST['features'] == "Scoreboard Examples")) . "\n");
                fwrite($wfile, ($featCS + (int)(isset($_POST['features']) && $_POST['features'] == "Creature Spawning")) . "\n");
                fwrite($wfile, ($featVI + (int)(isset($_POST['features']) && $_POST['features'] == "Villager Items")) . "\n");
                fwrite($wfile, ($featRT + (int)(isset($_POST['features']) && $_POST['features'] == "Redstone Timers and Logic")) . "\n");
                fwrite($wfile, ($featYV + (int)(isset($_POST['features']) && $_POST['features'] == "Youtube Videos")) . "\n");
                fwrite($wfile, ($featPE + (int)(isset($_POST['features']) && $_POST['features'] == "Practice Exercises")) . "\n");
                fwrite($wfile, ($featME + (int)(isset($_POST['features']) && $_POST['features'] == "Minigame Examples")) . "\n");
                fwrite($wfile, ($featDM + (int)(isset($_POST['features']) && $_POST['features'] == "Downloadable Maps")) . "\n");
                fwrite($wfile, ($featEL + (int)(isset($_POST['features']) && $_POST['features'] == "External Links")) . "\n");
                fwrite($wfile, ($featE + (int)(isset($_POST['features']) && $_POST['features'] == "Enchanting")) . "\n");
                fwrite($wfile, ($featCP + (int)(isset($_POST['features']) && $_POST['features'] == "Custom Potions")) . "\n");
                fwrite($wfile, ($featES + (int)(isset($_POST['features']) && $_POST['features'] == "Entity Summoning")) . "\n");
                fwrite($wfile, ($featP + (int)(isset($_POST['features']) && $_POST['features'] == "Particles")) . "\n");
                fwrite($wfile, ($featTa + (int)(isset($_POST['features']) && $_POST['features'] == "Tellraw and Advanced Chat")) . "\n");
 
                fwrite($wfile, ($ageKid + (int)(isset($_POST['age']) && $_POST['age'] == "Kids")) . "\n");
                fwrite($wfile, ($ageYouth + (int)(isset($_POST['age']) && $_POST['age'] == "Youth")) . "\n");
                fwrite($wfile, ($ageOld + (int)(isset($_POST['age']) && $_POST['age'] == "Old")) . "\n");
 
                fwrite($wfile, ($placeUS + (int)(isset($_POST['places']) && $_POST['places'] == "United States")) . "\n");
                fwrite($wfile, ($placeC + (int)(isset($_POST['places']) && $_POST['places'] == "Canada")) . "\n");
                fwrite($wfile, ($placeB + (int)(isset($_POST['places']) && $_POST['places'] == "Britain")) . "\n");
                fwrite($wfile, ($placeAU + (int)(isset($_POST['places']) && $_POST['places'] == "Australia")) . "\n");
                fwrite($wfile, ($placeG + (int)(isset($_POST['places']) && $_POST['places'] == "Germany")) . "\n");
                fwrite($wfile, ($placeFR + (int)(isset($_POST['places']) && $_POST['places'] == "France")) . "\n");
                fwrite($wfile, ($placeEE + (int)(isset($_POST['places']) && $_POST['places'] == "Eastern Europe")) . "\n");
                fwrite($wfile, ($placeJP + (int)(isset($_POST['places']) && $_POST['places'] == "Japan")) . "\n");
                fwrite($wfile, ($placeAsia + (int)(isset($_POST['places']) && $_POST['places'] == "Asia")) . "\n");
                fwrite($wfile, ($placeMX + (int)(isset($_POST['places']) && $_POST['places'] == "Mexico")) . "\n");
                fwrite($wfile, ($placeSA + (int)(isset($_POST['places']) && $_POST['places'] == "South America")) . "\n");
                fwrite($wfile, ($placeME + (int)(isset($_POST['places']) && $_POST['places'] == "Middle East")) . "\n");
                fwrite($wfile, ($placeAF + (int)(isset($_POST['places']) && $_POST['places'] == "Africa")) . "\n");

                fclose($wfile);
            }

          }  


          $jsonsum = $jsonyes + $jsonno;
          $jsonyes = ($jsonyes * 100) / $jsonsum;
          $jsonno = ($jsonno * 100) / $jsonsum;

          $cbsum = $cbyes + $cbno;
          $cbyes = ($cbyes * 100) / $cbsum;
          $cbno = ($cbno * 100) / $cbsum;

          $actsum = $actSPS + $actSM + $actCB + $actMP + $actRM + $actLAN;
          $actSPS = ($actSPS * 100) / $actsum;
          $actSM = ($actSM * 100) / $actsum;
          $actCB = ($actCB * 100) / $actsum;
          $actMP = ($actMP * 100) / $actsum;
          $actRM = ($actRM * 100) / $actsum;
          $actLAN = ($actLAN * 100) / $actsum;

          $featsum = $featSE + $featCS + $featVI + $featRT + $featYV + $featPE + $featME + $featDM + $featEL + $featE + $featCP + $featES + $featP  + $featTa;
          $featSE = ($featSE * 100) / $featsum;
          $featCS = ($featCS * 100) / $featsum;
          $featVI = ($featVI * 100) / $featsum;
          $featRT = ($featRT * 100) / $featsum;
          $featYV = ($featYV * 100) / $featsum;
          $featPE = ($featPE * 100) / $featsum;
          $featME = ($featME * 100) / $featsum;
          $featDM = ($featDM * 100) / $featsum;
          $featEL = ($featEL * 100) / $featsum;
          $featE = ($featE * 100) / $featsum;
          $featCP = ($featCP * 100) / $featsum;
          $featES = ($featES * 100) / $featsum;
          $featP = ($featP * 100) / $featsum;
          $featTa = ($featTa * 100) / $featsum;

          $agesum = $ageKid + $ageYouth + $ageOld;
          $ageKid = ($ageKid * 100) / $agesum;
          $ageYouth = ($ageYouth * 100) / $agesum;
          $ageOld = ($ageOld * 100) / $agesum;

          $placesum = $placeUS + $placeC + $placeB + $placeAU + $placeG + $placeFR + $placeEE + $placeJP + $placeAsia + $placeMX + $placeSA + $placeME + $placeAF;
          $placeUS = ($placeUS * 100) / $placesum;
          $placeC = ($placeC * 100) / $placesum;
          $placeB = ($placeB * 100) / $placesum;
          $placeAU = ($placeAU * 100) / $placesum;
          $placeG = ($placeG * 100) / $placesum;
          $placeFR = ($placeFR * 100) / $placesum;
          $placeEE = ($placeEE * 100) / $placesum;
          $placeJP = ($placeJP * 100) / $placesum;
          $placeAsia = ($placeAsia * 100) / $placesum;
          $placeMX = ($placeMX * 100) / $placesum;
          $placeSA = ($placeSA * 100) / $placesum;
          $placeME = ($placeME * 100) / $placesum;
          $placeAF = ($placeAF * 100) / $placesum;
   }
?>

<?php
   $cookie_name = "voted";
   $cookie_value = "yes";
   setcookie($cookie_name, $cookie_value, time() + (86400 * 30) + "/"); // 86400 = 1 day
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


   <script src="jquery-1.11.2.min.js"></script>
   <link href="results.css" rel="stylesheet">
   <script type="text/javascript">

      function populate() {
         
        setPercentage(<?php echo $jsonyes; ?>,"#jsonyesValue", "#jsonyesContainer");
        setPercentage(<?php echo $jsonno; ?>,"#jsonnoValue", "#jsonnoContainer");

        setPercentage(<?php echo $cbyes; ?>,"#cbyesValue", "#cbyesContainer");
        setPercentage(<?php echo $cbno; ?>,"#cbnoValue", "#cbnoContainer");

        setPercentage(<?php echo $actSPS; ?>,"#actSPSValue","#actSPSContainer");
        setPercentage(<?php echo $actSM; ?>,"#actSMValue","#actSMContainer");
        setPercentage(<?php echo $actCB; ?>,"#actCBValue","#actCBContainer");
        setPercentage(<?php echo $actMP; ?>,"#actMPValue","#actMPContainer");
        setPercentage(<?php echo $actRM; ?>,"#actRMValue","#actRMContainer");
        setPercentage(<?php echo $actLAN; ?>,"#actLANValue","#actLANContainer");

        setPercentage(<?php echo $featSE; ?>,"#featSEValue","#featSEContainer");
        setPercentage(<?php echo $featCS; ?>,"#featCSValue","#featCSContainer");
        setPercentage(<?php echo $featVI; ?>,"#featVIValue","#featVIContainer");
        setPercentage(<?php echo $featRT; ?>,"#featRTValue","#featRTContainer");
        setPercentage(<?php echo $featYV; ?>,"#featYVValue","#featYVContainer");
        setPercentage(<?php echo $featPE; ?>,"#featPEValue","#featPEContainer");
        setPercentage(<?php echo $featME; ?>,"#featMEValue","#featMEContainer");
        setPercentage(<?php echo $featDM; ?>,"#featDMValue","#featDMContainer");
        setPercentage(<?php echo $featEL; ?>,"#featELValue","#featELContainer");
        setPercentage(<?php echo $featE; ?>,"#featEValue","#featEContainer");
        setPercentage(<?php echo $featCP; ?>,"#featCPValue","#featCPContainer");
        setPercentage(<?php echo $featES; ?>,"#featESValue","#featESContainer");
        setPercentage(<?php echo $featP; ?>,"#featPValue","#featPContainer");
        setPercentage(<?php echo $featTa; ?>,"#featTaValue","#featTaContainer");

        setPercentage(<?php echo $ageKid; ?>,"#ageKidValue","#ageKidContainer");
        setPercentage(<?php echo $ageYouth; ?>,"#ageYouthValue","#ageYouthContainer");
        setPercentage(<?php echo $ageOld; ?>,"#ageOldValue","#ageOldContainer");

        setPercentage(<?php echo $placeUS; ?>,"#placeUSValue","#placeUSContainer");
        setPercentage(<?php echo $placeC; ?>,"#placeCValue","#placeCContainer");
        setPercentage(<?php echo $placeB; ?>,"#placeBValue","#placeBContainer");
        setPercentage(<?php echo $placeAU; ?>,"#placeAUValue","#placeAUContainer");
        setPercentage(<?php echo $placeG; ?>,"#placeGValue","#placeGContainer");
        setPercentage(<?php echo $placeFR; ?>,"#placeFRValue","#placeFRContainer");
        setPercentage(<?php echo $placeEE; ?>,"#placeEEValue","#placeEEContainer");
        setPercentage(<?php echo $placeJP; ?>,"#placeJPValue","#placeJPContainer");
        setPercentage(<?php echo $placeAsia; ?>,"#placeAsiaValue","#placeAsiaContainer");
        setPercentage(<?php echo $placeMX; ?>,"#placeMXValue","#placeMXContainer");
        setPercentage(<?php echo $placeSA; ?>,"#placeSAValue","#placeSAContainer");
        setPercentage(<?php echo $placeME; ?>,"#placeMEValue","#placeMEContainer");
        setPercentage(<?php echo $placeAF; ?>,"#placeAFValue","#placeAFContainer");
      }

      /**
       * Set the percentage of the value div
       */
      function setPercentage(value, pValue, pContainer) {
          var newWidth = parseInt($(pContainer).width() * value / 100.0);
          console.debug("total : ", $(pContainer).width());
          console.debug("new : ", newWidth);
          $(pValue).animate({
              width: newWidth + "px"
          }, 500);
      }

   </script>
</head>
<body onload="populate()">
  

  <div class="col-sm-4">
  </div>
  <div class="col-sm-4">




     <h3>Survey Results:</h3>
     <br/>

     <h4>Have you ever used JSON before?</h4>
     <div id="jsonnoContainer">
        <div id="jsonnoValue">No</div>
     </div>
     <div id="jsonyesContainer">
        <div id="jsonyesValue">Yes</div>
     </div>


     <h4>Have you either used command blocks before or seen them used on YouTube?</h4>
     <div id="cbnoContainer">
        <div id="cbnoValue">No</div>
     </div>
     <div id="cbyesContainer">
        <div id="cbyesValue">Yes</div>
     </div>
    
     <h4>What do you (or would you) do most with Minecraft?</h4>
     <div id="actSPSContainer">
        <div id="actSPSValue">SP/Survival</div>
     </div>
     <div id="actSMContainer">
        <div id="actSMValue">Server/Multiplayer</div>
     </div>
     <div id="actCBContainer">
        <div id="actCBValue">Creative/Builds</div>
     </div>
     <div id="actMPContainer">
        <div id="actMPValue">ModdedPlay</div>
     </div>
     <div id="actRMContainer">
        <div id="actRMValue">Redstone/Maps</div>
     </div>
     <div id="actLANContainer">
        <div id="actLANValue">LAN</div>
     </div>

     <h4>What features would you like to see added to or improved upon on this site?</h4>
     <div id="featSEContainer">
        <div id="featSEValue">Scoreboards</div>
     </div>
     <div id="featCSContainer">
        <div id="featCSValue">Creatures</div>
     </div>
     <div id="featVIContainer">
        <div id="featVIValue">Villager</div>
     </div>
     <div id="featRTContainer">
        <div id="featRTValue">Redstone</div>
     </div>
     <div id="featYVContainer">
        <div id="featYVValue">Videos</div>
     </div>
     <div id="featPEContainer">
        <div id="featPEValue">Exercises</div>
     </div>
     <div id="featMEContainer">
        <div id="featMEValue">Minigames</div>
     </div>
     <div id="featDMContainer">
        <div id="featDMValue">Maps</div>
     </div>
     <div id="featELContainer">
        <div id="featELValue">Links</div>
     </div>
     <div id="featEContainer">
        <div id="featEValue">Enchanting</div>
     </div>
     <div id="featCPContainer">
        <div id="featCPValue">Potions</div>
     </div>
     <div id="featESContainer">
        <div id="featESValue">Summoning</div>
     </div>
     <div id="featPContainer">
        <div id="featPValue">Particles</div>
     </div>
     <div id="featTaContainer">
        <div id="featTaValue">Tellraw</div>
     </div>


     <h4>What age range are you in?</h4>
     <div id="ageKidContainer">
        <div id="ageKidValue">Kid</div>
     </div>
     <div id="ageYouthContainer">
        <div id="ageYouthValue">Youth</div>
     </div>
     <div id="ageOldContainer">
        <div id="ageOldValue">Adult</div>
     </div>



     <h4>What part of the world are you from?</h4>
     <div id="placeUSContainer">
        <div id="placeUSValue">America</div>
     </div>
     <div id="placeCContainer">
        <div id="placeCValue">Canada</div>
     </div>
     <div id="placeBContainer">
        <div id="placeBValue">Britain</div>
     </div>
     <div id="placeAUContainer">
        <div id="placeAUValue">Australia</div>
     </div>
     <div id="placeGContainer">
        <div id="placeGValue">Germany</div>
     </div>
     <div id="placeFRContainer">
        <div id="placeFRValue">France</div>
     </div>
     <div id="placeEEContainer">
        <div id="placeEEValue">E.Europe</div>
     </div>
     <div id="placeJPContainer">
        <div id="placeJPValue">Japan</div>
     </div>
     <div id="placeAsiaContainer">
        <div id="placeAsiaValue">Asia</div>
     </div>
     <div id="placeMXContainer">
        <div id="placeMXValue">Mexico</div>
     </div>
     <div id="placeSAContainer">
        <div id="placeSAValue">SouthAmerica</div>
     </div>
     <div id="placeMEContainer">
        <div id="placeMEValue">MiddleEast</div>
     </div>
     <div id="placeAFContainer">
        <div id="placeAFValue">Africa</div>
     </div>

     <br/>
     <form action="http://php-rthorne2.rhcloud.com/index.html">
      <input type="submit" value="Done">
    </form>

  </div>     

  
    
</body>
</html>