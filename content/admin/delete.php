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

	
require('config.php');
$mysqli = new mysqli($settings["dbserver"], $settings["dbuser"], $settings["dbpass"], $settings["dbname"]);

/* User */
if (isset($_GET['user'])) {
	// confirm that the 'PK' variable has been set
	if (isset($_GET['PK']) && is_numeric($_GET['PK'])) {
		// get the 'PK' variable from the URL
		$PK = $_GET['PK'];
			
		// delete record from database
		if ($stmt = $mysqli->prepare("DELETE FROM Gebruiker WHERE PK_Gebruiker = ? LIMIT 1")) {
			$stmt->bind_param("i",$PK);	
			$stmt->execute();
			$stmt->close();
		}
		
		else {
			echo "ERROR: could not prepare SQL statement.";
		}
		
		$mysqli->close();
			
		// redirect user after delete is successful
		header("Location: ?admin=index&user");
	}
	
	// if the 'PK' variable isn't set, redirect the user
	else{
		header("Location: ?admin=index&user");
	}	
}

/* Subsite */
elseif (isset($_GET['subsite'])) {
	// confirm that the 'PK' variable has been set
	if (isset($_GET['PK']) && is_numeric($_GET['PK'])) {
		// get the 'PK' variable from the URL
		$PK = $_GET['PK'];
			
		// delete record from database
		if ($stmt = $mysqli->prepare("DELETE FROM Subsite WHERE PK_Subsite = ? LIMIT 1")) {
			$stmt->bind_param("i",$PK);	
			$stmt->execute();
			$stmt->close();
		}
		
		else {
			echo "ERROR: could not prepare SQL statement.";
		}
		
		$mysqli->close();
			
		// redirect user after delete is successful
			header("Location: ?admin=index&subsite");
	}
	
	// if the 'PK' variable isn't set, redirect the user
	else {
		header("Location: ?admin=index&subsite");
	}	
}

/* Rol */
elseif (isset($_GET['rol'])) {
	// confirm that the 'PK' variable has been set
	if (isset($_GET['PK']) && is_numeric($_GET['PK'])) {
		// get the 'PK' variable from the URL
		$PK = $_GET['PK'];
			
		// delete record from database
		if ($stmt = $mysqli->prepare("DELETE FROM Rol WHERE PK_Rol = ? LIMIT 1")) {
			$stmt->bind_param("i",$PK);	
			$stmt->execute();
			$stmt->close();
		}
		
		else {
			echo "ERROR: could not prepare SQL statement.";
		}
		
		$mysqli->close();
			
		// redirect user after delete is successful
		header("Location: ?admin=index&rol");
	}
	
	// if the 'PK' variable isn't set, redirect the user
	else {
		header("Location: ?admin=index&rol");
	}	
}
	
/* Activiteit */
elseif (isset($_GET['activiteit'])) {
	// confirm that the 'PK' variable has been set
	if (isset($_GET['PK']) && is_numeric($_GET['PK'])) {
		// get the 'PK' variable from the URL
		$PK = $_GET['PK'];
			
		// delete record from database
		if ($stmt = $mysqli->prepare("DELETE FROM Activiteit WHERE PK_Activiteit = ? LIMIT 1")) {
			$stmt->bind_param("i",$PK);	
			$stmt->execute();
			$stmt->close();
		}
		
		else {
			echo "ERROR: could not prepare SQL statement.";
		}
		
		$mysqli->close();
			
		// redirect user after delete is successful
		header("Location: ?admin=index&activiteit");
	}
	
	// if the 'PK' variable isn't set, redirect the user
	else {
		header("Location: ?admin=index&activiteit");
	}	
}

// if the 'PK' variable isn't set, redirect the user
else {
	header("Location: ?admin=index");
}
?>