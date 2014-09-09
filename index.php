<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="style.css" type="text/css">
	<title>PHP põhitõed</title>
</head>
<body>
	<h1>Sõnumite väljastamine</h1>
	<?php 
		echo "Tere!" . "Siin on teine tekst" . "Siin on veel üks tekst!";
		echo "<br>";
		echo "Järgmine rida";
	 ?>
	 <br>
	 <h1>Arvutamine</h1>
	 <!-- Siin on HTML kommentaar -->
	 <?php 
	 // Siin on PHP kommentaar
	 # See on ka kommentaar
	 /* See on 
	 mitmerealise kommentaari jaoks */
	 echo "Nelja ja viie summa on " . (4 + 5); 
	 ?>
	 <br>
	 <?php echo 4 + 5; ?>
	 <br>
	 <?php echo 4 / 5; ?>
	 <br>
	 <?php echo 4 - 5; ?>
	 <h1>Muutujad</h1>
	 <?php 
	 $number = "Tekst";
	 $Number = 5 - 4;
	 $text = "Kahe arvu summa on";

	 echo $number;
	 echo "<br>";
	 echo $Number;
	 echo "<p>Siia tuleb list</p>
	 	<ul>
	 		<li>$text</li>
	 		<li>($number + $Number)</li>
	 	</ul>";
	 echo $number + $Number;
	  ?>
</body>
</html>
	