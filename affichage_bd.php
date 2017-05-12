<?php
 
/*
 * Following code will list all the data in the db
 */
 
// array for JSON response

 

//$bdd= new PDO('mysql:host=127.0.0.1;dbname=absences_2_0', 'root', 'ouioui');
 $bdd= new PDO('mysql:host=185.31.40.5;dbname=cesarng_absences_2_1', 'cesarng', 'cesar1996');
// get all products from products table
$donnees = $bdd->query('SELECT  login, mot_de_passe FROM utilisateurs');
 while($row = $donnees->fetch(PDO::FETCH_ASSOC)) {
	
	$data[] = $row;
}

$reponse= json_encode($data);

echo $reponse;

?>
