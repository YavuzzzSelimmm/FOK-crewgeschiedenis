<?php 

    // First we execute our common code to connection to the database and start the session 
    require("content/admin/config.php"); 
     
    // At the top of the page we check to see whether the user is logged in or not 
    if(empty($_SESSION['user'])) 
    { 
        // If they are not, we redirect them to the login page. 
        header("Location: ?admin=inloggen"); 
         
        // Remember that this die statement is absolutely critical.  Without it, 
        // people can view your members-only content without logging in. 
        die("Redirecting to login."); 
    } 
     
    // Everything below this point in the file is secured by the login system 
     
    // We can display the user's username to them by reading it from the session array.  Remember that because 
    // a username is user submitted content we must use htmlentities on it before displaying it to the user. 
?>
<div class="container">
	<div class="jumbotron">
		<?php require('content/navbar-admin.php'); ?>
	</div>
<?
include('config.php');
$mysqli = new mysqli($settings["dbserver"], $settings["dbuser"], $settings["dbpass"], $settings["dbname"]);

if (isset($_GET['user'])) {
	// get the records from the database
	if ($result = $mysqli->query("SELECT * FROM Gebruiker ORDER BY PK_Gebruiker")) {
		// display records if there are records to display
		if ($result->num_rows > 0) {
			echo "<h1>Users</h1>";
			echo "<a href='?admin=edit&user'><button class='btn btn-success btn-small' type='button'>Nieuwe user toevoegen</button></a>
				  <br /><br />";
			// display records in a table
			echo "<table class='table table-striped'>";
			// table header
			echo "<tr>
					<th>PK</th>
					<th>Gebruikersnaam</th>
					<th>UserID</th>
					<th>Registratiedatum</th>
					<th>UI</th>
					<th></th>
					<th></th>
				</tr>";
			//table rows
			while ($row = $result->fetch_object()) {
				echo "<tr>";
				echo "<td>" . $row->PK_Gebruiker . "</td>";
				echo "<td>" . $row->Gebruikersnaam . "</td>";
				echo "<td>" . $row->UserID . "</td>";
				echo "<td>" . $row->Registratiedatum . "</td>";
				echo "<td><img src='" . $row->UI . "' /></td>";
				echo "<td><a href='?admin=edit&user&PK=" . $row->PK_Gebruiker . "'>Wijzig</a></td>";
				echo "<td><a href='?admin=delete&user&PK=" . $row->PK_Gebruiker . "'>Verwijder</a></td>";
				echo "</tr>";
			}
			echo "</table>";
		}
		
		// if there are no records in the database, display an alert message
		else {
			echo "Geen users!";
		}
	}
	
	// show an error if there is an issue with the database query
	else {
		echo "Fout: " . $mysqli->error;
	}
	
	// close database connection
	$mysqli->close();
}

elseif (isset($_GET['subsite'])) {
	// get the records from the database
	if ($result = $mysqli->query("SELECT PK_Subsite, Naam FROM Subsite")) {
	// display records if there are records to display
		if ($result->num_rows > 0) {
			echo "<h1>Subsite</h1>";
			echo "<a href='?admin=edit&subsite'><button class='btn btn-success btn-small' type='button'>Nieuwe subsite toevoegen</button></a>
				  <br /><br />";
			// display records in a table
			echo "<table class='table table-striped'>";
			// table header
			echo "<tr>
					<th>PK</th>
					<th>Naam</th>
					<th></th>
					<th></th>
				</tr>";
			// table rows							
			while ($row = $result->fetch_object()) {
				echo "<td>" . $row->PK_Subsite . "</td>";
				echo "<td>" . $row->Naam . "</td>";
				echo "<td><a href='?admin=edit&subsite&PK=" . $row->PK_Subsite . "'>Wijzig</a></td>";
				echo "<td><a href='?admin=delete&subsite&PK=" . $row->PK_Subsite . "'>Verwijder</a></td>";
				echo "</tr>";
			}
			
			echo "</table>";
		}
		
		// if there are no records in the database, display an alert message
		else {
			echo "Geen subsites!";
		}
	}
	
	// show an error if there is an issue with the database query
	else {
		echo "Fout: " . $mysqli->error;
	}
	
	// close database connection
	$mysqli->close();
}


elseif (isset($_GET['rol'])) {
	// get the records from the database
	if ($result = $mysqli->query("SELECT PK_Rol, S.Naam Subsitenaam, R.Afkorting Rolafkorting, R.Omschrijving Rolomschrijving FROM Rol R LEFT JOIN Subsite S ON R.FK_Subsite = S.PK_Subsite")) {
		// display records if there are records to display
		if ($result->num_rows > 0) {
			echo "<h1>Rol</h1>";
			echo "<a href='?admin=edit&rol'><button class='btn btn-success btn-small' type='button'>Nieuwe rol toevoegen</button></a>
				  <br /><br />";
			// display records in a table
			echo "<table class='table table-striped'>";
			// table header
			echo "<tr>
					<th>PK</th>
					<th>Subsitenaam</th>
					<th>Rolafkorting</th>
					<th>Rolomschrijving</th>
					<th></th>
					<th></th>
				</tr>";
			// table rows							
			while ($row = $result->fetch_object()) {
				echo "<tr>";
				echo "<td>" . $row->PK_Rol . "</td>";
				echo "<td>" . $row->Subsitenaam . "</td>";
				echo "<td>" . $row->Rolafkorting . "</td>";
				echo "<td>" . $row->Rolomschrijving	 . "</td>";
				echo "<td><a href='?admin=edit&rol&PK=" . $row->PK_Rol . "'>Wijzig</a></td>";
				echo "<td><a href='?admin=delete&rol&PK=" . $row->PK_Rol . "'>Verwijder</a></td>";
				echo "</tr>";
			}
			
			echo "</table>";
		}
			
		// if there are no records in the database, display an alert message
		else {
			echo "Geen rollen!";
		}
	}
	
	// show an error if there is an issue with the database query
	else {
		echo "Fout: " . $mysqli->error;
	}
		
	// close database connection
	$mysqli->close();
}


elseif (isset($_GET['activiteit'])) {
	// get the records from the database
	if ($result = $mysqli->query("SELECT A.PK_Activiteit, G.Gebruikersnaam, S.Naam Subsitenaam, R.Afkorting Rolafkorting, A.Startdatum, IFNULL(A.Einddatum,CURDATE()) Einddatum, A.StartURL, A.EindURL EindURL FROM Activiteit A LEFT JOIN Gebruiker G ON A.FK_Gebruiker = G.PK_Gebruiker LEFT JOIN Rol R ON A.FK_Rol	= R.PK_Rol LEFT JOIN Subsite S ON R.FK_Subsite = S.PK_Subsite")) {
		// display records if there are records to display
		if ($result->num_rows > 0) {
			echo "<h1>Activiteit</h1>";
			echo "<a href='?admin=edit&activiteit'><button class='btn btn-success btn-small' type='button'>Nieuwe activiteit toevoegen</button></a>
				  <br /><br />";
			// display records in a table
			echo "<table class='table table-striped'>";
			// table header
			echo "<tr>
					<th>PK</th>
					<th>User</th>
					<th>Subsite</th>
					<th>Rol</th>
					<th>Startdatum</th>
					<th>Einddatum</th>
					<th></th>
					<th></th>
				</tr>";
			// table rows
			while ($row = $result->fetch_object()) {
				$startdatum = new DateTime($row->Startdatum);
				$einddatum = new DateTime($row->Einddatum);
				
				echo "<tr>";
				echo "<td>" . $row->PK_Activiteit . "</td>";
				echo "<td>" . $row->Gebruikersnaam . "</td>";
				echo "<td>" . $row->Subsitenaam . "</td>";
				echo "<td>" . $row->Rolafkorting . "</td>";
				echo "<td><a href='" . $row->StartURL . "' target='_blank'>" . $startdatum->format('d M Y') . "</a></td>";
				echo "<td><a href='" . $row->EindURL . "' target='_blank'>" . $einddatum->format('d M Y') . "</a></td>";
				echo "<td><a href='?admin=edit&activiteit&PK=" . $row->PK_Activiteit . "'>Wijzig</a></td>";
				echo "<td><a href='?admin=delete&activiteit&PK=" . $row->PK_Activiteit . "'>Verwijder</a></td>";
				echo "</tr>";
			}	
			echo "</table>";
		}
			
		// if there are no records in the database, display an alert message
		else {
			echo "No results to display!";
		}
	}
	
	// show an error if there is an issue with the database query
	else {
		echo "Fout: " . $mysqli->error;
	}
		
	// close database connection
	$mysqli->close();
}
?>
</div>