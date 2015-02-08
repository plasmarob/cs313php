<!DOCTYPE html>
<html>
<head>
   <title>PHP Demo Page</title>
</head>
<body>
   
<?php
   for ($i = 0; $i < 3; $i++)
   {
      echo ("<div style=\"color:rgb(0,0,$i)\"> This is div " . ($i + 1) . " </div>");
   }
?>

<\body>
<\html>