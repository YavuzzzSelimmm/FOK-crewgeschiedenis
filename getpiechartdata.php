<?php
  $q=$_GET["q"];
	include 'db.php';
	
  $sql_query = "  	SELECT 
			G.Gebruikersnaam, R.Afkorting Rolafkorting, SUM(DATEDIFF(IFNULL(A.Einddatum,CURDATE()),A.Startdatum)+1) Duur
	  	FROM Activiteit A
		LEFT JOIN Gebruiker G
			ON A.FK_Gebruiker = G.PK_Gebruiker
		LEFT JOIN Rol R
			ON A.FK_ROL = R.PK_ROL
		LEFT JOIN Subsite S
			ON R.FK_Groep = S.PK_Subsite
		WHERE G.PK_Gebruiker = " . $q . "
		GROUP BY G.Gebruikersnaam, R.Afkorting
		ORDER BY A.Startdatum ASC, IFNULL(A.Einddatum,CURDATE()) ASC";


  $con = mysql_connect($dbserver,$dbuser,$dbpass);
  if (!$con){ die('Could not connect: ' . mysql_error()); }
  mysql_select_db($dbname, $con);
  $result = mysql_query($sql_query);
  
while($row = mysql_fetch_array($result)){
$Gebruikersnaam[] = $row['Gebruikersnaam'];
$Rol[] = $row['Rolafkorting'];
$Duur[] = $row['Duur'];
}

$rows = array();
foreach($Gebruikersnaam as $index => $name) {
$rows[] = array("c"=>array(array(
"v"=>$Rol[$index],
"f"=>null
),array(
"v"=>(int)$Duur[$index],
"f"=>null
)));
}

$cols = array(array(
"id"=>"",
"label"=>"Rol",
"pattern"=>"",
"type"=>"string"),
array(
"id"=>"",
"label"=>"Duur",
"pattern"=>"",
"type"=>"number"));

$arr = array("cols"=>$cols,"rows"=>$rows);

print_r(json_encode($arr));
?>

