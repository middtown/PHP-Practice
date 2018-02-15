<?php 

$place = "World";
echo "Hello ".$place;
 ?>
 

<h3> Echo Numbers 1 to 20</h3>

<?php 

for ($i = 0; $i <= 20 ; $i++) { 
	echo $i." ";
}
 ?>


<h3>What's My Name </h3>
<?php 
$name = "Aaron";
 ?>

<?php $x = 5; ?>
<?php if(strlen($name) === 0): ?>
	<p> Name Has No Length</p>
<?php elseif(strlen($name) == $x): ?>
	<p> Name is equal to <?php echo strlen($name) ?> </p>
<?php elseif(strlen($name) < $x): ?>
	<p> Name Long Enough </p>
<?php elseif(strlen($name) > $x): ?>
	<p> Name Too Short</p>
<?php endif; ?>

<h3> Animal Classes </h3>

<?php 
class Animal {
	public $modeOfTransport = "Air"; //im thinking of a bird 
	public $region = "USA";
	public $type = "Bird"; 
}

	$new_animal = new Animal();

	print_r($new_animal);

?>










