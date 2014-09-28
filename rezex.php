	
	<?php
	$connex=mysqli_connect("localhost","root","MocanA78","exemplu");
	// Check connection
	if (mysqli_connect_errno()) {
	echo "Eroare la conectare MySQL: " . mysqli_connect_error();
	}

	$result = mysqli_query($connex,"SELECT * FROM lista");

	while($row = mysqli_fetch_array($result)) {
	echo $row['Nume'] . " " . $row['Prenume'] ." ". $row['Strada'];
	
	echo "<br>";
	}
	
	?>
