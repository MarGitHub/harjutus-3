<! DOCKTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>
	harjtus-3s - Andmetüübid
	</title>
</head>

<body>
	
<h1>Muutujad</h1>	
	<?php
    $variable = 15;
    echo $variable;
       echo "<br>";
?>

<?php
    $variable = 45;
    echo $variable;
?>

<h2>Stringid</h2>

<?php echo "Hello world!"; ?> 
<?php echo 'Hello world!'; ?> 
<br>

<?php $variable = "24"; 
	$variable2 = "26"; 
echo ($variable . $variable2);
	?>
	
<h2>Nimekirja väljastamine muutujate ja stringide abil</h2>

<?php 
	$student1 = "Ants"; 
	$student2 = "Maile"; 
	$student3 = "Syret"; 
	$student4 = "Fränk"; 
	$student5 = "Aigar"; 
?>

<ul>
<?php 
	echo "<li>". $student1 . "</li>
	<li>" . $student2 . "</li>
	<li>" .$student3 . "</li>
	<li>" .$student4 . "</li>
	<li>" .$student5 . "</li>"
?>
</ul>

<?php 
	$firstName ="Margit ";
	$lastName = "Pilden";
	$fullName = $firstName.$lastName; 
	echo $fullName;
	?>
<br>

<?php 
	$test = "Testmime";
	echo "$test kas interpolatsioon töötab"; ?>
<br>	
<?php	
	$age = "15";
echo "Ma olen {$age}e aastane"; ?>
	
	





</body>

</html>