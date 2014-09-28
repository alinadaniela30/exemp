<?php

	$respObj = array();
	$respObj["status"] = "OK";
	$respObj["statusMsg"] = "";

	$dataObj  = json_decode($_POST['dataObj'], true);
	
//	error_log('$_POST_dataObj:'.$_POST['dataObj']);
//	error_log('$dataObj:'.$dataObj["Username"]);
	
	// creare conexiune la mysqli server + db
	$connex=mysqli_connect("localhost","root","MocanA78","exemplu");
	
	// verifica conexiune
	if(mysqli_connect_errno()) {
		$respObj["status"] = "ERROR";
		$respObj["statusMsg"] = "Error conectiong to server".mysqli_connect_error();
		exit("");
	}

	$sqlquery="INSERT INTO lista (Nume, Prenume, Strada) VALUES ('".$dataObj["Nume"]."','".$dataObj["Prenume"]."','".$dataObj["Strada"]."') ; ";
	$result = mysqli_query($connex,$sqlquery);
	if ($result)
	{

	
			$respObj["statusMsg"] = "Comanda inregistrata cu succes";}
			
		 else {
			$respObj["status"] = "ERROR";
			$respObj["statusMsg"] = "Eroare la trimitere comanda!";
				}		
		

				
	echo json_encode($respObj);









	
		

		
?>
