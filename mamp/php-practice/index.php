<?php
	//echo "Hi";


$name = "aaron";
$nickname = "middtown";
$greeting = "Hi";
$concatenation=" My name is "." ".$name. ", also know as ".$nickname."!";
$concatenatedGreeting=$greeting." ".$nickname;
echo $concatenation;

?>
<h1> PHP Practice </h1>
<?php
echo $concatenatedGreeting;
?>



<h2> Simple Match Challenge </h2>

<?php 
$smallNum = 5;
$largeNum = 1954;

$smallNum -= 5;
$largeNum += 5000;
$smallNum /= 5;
$largeNum *5000;

echo $smallNum." ".$largeNum;
 ?>

<h2> Indexed Array </h2>
<?php 

$animals = array("Panther", "Wolf", "Python");
$animals[] = "Raven";
echo "I like ". $animals[0].", ".$animals[1]." and ".$animals[3]."but affraid of ".$animals[2]."!";
echo "<br><br>";
echo count($animals);


 ?>

 <h2> Associative Array (hashes) </h2>
<?php 
$colors = array("aaron" => "purple", "rochelle" => "red", "mom" => "yellow");
echo $colors["aaron"];
 ?>


<?php 

	for ($x = 0; $x <= strlen($animals); $x++){
		echo "The coolest animals are: $animals[$x] <br>";
	}
 ?>


<?php 
	foreach ($colors as $key => $value){
		echo $key." :$value <br>";
	}
 ?>

