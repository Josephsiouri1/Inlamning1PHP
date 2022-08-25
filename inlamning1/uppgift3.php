<!DOCTYPE html>
<html>
<head>
<title>Uppgift 3</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

  <table> 

  <tr>
    <th>Lärare</th>
    <th>Kurs</th>
  </tr>

  <?php
   	$kurser = array( "Webbserverprogrammering1"=>"Holger", "Matte5"=>"Sevil", "MatteSpec"=> "Nikodemus", "Fysik2"=>"Charles", "Naturkunskap2"=>"Anna", "Historia1a1"=>"Tommy", "Religionskunskap1"=>"Tommy", "Svenska3"=> "Anna-Karin");
   
       echo "<br>";
       foreach($kurser as $x => $x_value) {
        echo "<tr> <th>$x</th> <th>$x_value</th> </tr>";
       } 
  ?>

</table>

</body>
</html>