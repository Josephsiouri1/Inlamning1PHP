<!DOCTYPE html>
<html>
<head>
<title>Uppgift 2</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
 
<table>
  <tr>
    <th>Land</th>
    <th>Huvudstad</th>
  </tr>
  <?php 
   	$huvudstader = array( "Sverige"=>"Stockholm", "Finland"=>"Helsingfors", "Danmark"=> "Köpenhamn", "Norge"=>"Oslo", "Island"=>"Reykjavik", "Estland"=>"Tallinn", "Lettland"=>"Riga", "Litauen"=>"Vilnius");

    echo "<br>";

   foreach($huvudstader as $x => $x_value) {
    echo "<tr style='border: 1px solid black'> <th>$x</th> <th>$x_value</th> </tr>";
   } 
  ?>
</table>

</body>
</html>