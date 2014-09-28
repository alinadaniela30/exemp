  <?php

	$respObj = array();
	$respObj["status"] = "OK";
	$respObj["statusMsg"] = "";
	$dataObj  = json_decode($_POST['dataObj'], true);
	
		// creare conexiune la mysqli server + db
		$connex=mysqli_connect("localhost","root","MocanA78","exemplu");
		
		// verifica conexiune
		if(mysqli_connect_errno()) {
			$respObj["status"] = "ERROR";
			$respObj["statusMsg"] = "Error conectiong to server".mysqli_connect_error();
			exit("");
		}
		$sqlquery="SELECT Nume, Prenume, Strada FROM lista ";
		
		$result=mysqli_query($connex,$sqlquery);
		$row=mysqli_fetch_array($result,MYSQLI_NUM);
		
//error_log($row[0]);
		
		if ($row) {
			$respObj["Nume"] = $row[0];
			$respObj["Prenume"] = $row[1];
			$respObj["Strada"] = $row[2];
		
		} else {
			$respObj["status"] = "ERROR";
			$respObj["statusMsg"] = "Owner info not found !";
		}
	echo json_encode($respObj);
?>	
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
