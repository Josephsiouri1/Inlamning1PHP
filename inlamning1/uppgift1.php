<!DOCTYPE html>
<html>
<head>
<title>Uppgift 1</title>
</head>
<body>
 
 <?php
 	$huvudstader = array( "Sverige"=>"Stockholm", "Finland"=>"Helsingfors", "Danmark"=> "Köpenhamn", "Norge"=>"Oslo", "Island"=>"Reykjavik", "Estland"=>"Tallinn", "Lettland"=>"Riga", "Litauen"=>"Vilnius");

     foreach($huvudstader as $x => $x_value) {
        echo "<p style='border:1px solid black;'>$x huvudstad är $x_value</p>";
       } 
 ?>
</body>
    </html>