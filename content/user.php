<?php
	ini_set('display_error',1);
	error_reporting(-1); 
	//phpinfo();
	
	error_reporting(E_ALL);
	ini_set('display_errors', 1);
?>
	
<?php 
	$SelectedID = $_GET["id"];
	if ($SelectedID == 41894) {  $id = "372780";} //99.999 == du_ke
	else { $id = $SelectedID; }

?>
<div id="content" class="content">
	<!-- begin row -->
	<div class="row">
		<!-- begin col-12 -->
		<div class="col-md-12">
			<!-- begin panel -->
			
			<?php 
			try {
				require('config.php'); 
				$con = new PDO("mysql:host=" . $settings["dbserver"] . ";dbname=" . $settings["dbname"], $settings["dbuser"], $settings["dbpass"]
								,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET lc_time_names = 'nl_NL'"));

				$sql = "SELECT
							  ID
							, UserName
							, DATE_FORMAT(RegistrationDate, '%d %b %Y') RegistrationDate
							, DATEDIFF(CURDATE(), RegistrationDate) NrOfRegisteredDays
							, UI
						FROM User
						WHERE ID = " . $id . " 
						ORDER BY UserName"; 
								
				$stmt=$con->prepare($sql);
				$stmt->execute(); 
				$row = $stmt->fetch(PDO::FETCH_ASSOC);
				
		?>

					
			<div class="panel panel-inverse">
				<div class="panel-body">
					<ul class="media-list media-list-with-divider">
						<li class="media media-sm">
							<span class="media-left">
								<img class="media-object img-rounded" src="http://fokcrew.nl/ui/user/<?php echo  $row['UI']; ?>" />
							</span>
							<div class="media-body">
								<h4 class="media-heading"><?php echo $row['UserName']; ?> <small>(<?php echo $row['ID']; ?>)</small></h4>
								<p>
									Registratiedatum: <?php echo $row['RegistrationDate']; ?> <small>(<?php echo $row['NrOfRegisteredDays']; ?> dagen)</small> <br />
									<b><a href="http://forum.fok.nl/user/profile/<?php echo $row['ID']; ?>" target="_blank">FOK!profiel</a></b>
								</p>
							</div>
						</li>					
				</div>
			</div>
			
			
		<?php 
			}
				
			// Error handeling
			catch(PDOException $e) {
				echo '<pre>';
				echo 'Regel: '.$e->getLine(). '<br />';
				echo 'Bestand: '.$e->getFile(). '<br />'; 
				echo 'Foutmelding: '.$e->getMessage();
		 		echo '</pre>'; 
			}				
		?>
			<!-- end panel -->
		</div>
		<!-- end col-6 -->
	</div>	
	

	<!-- begin row -->
	<div class="row">
		<!-- begin col-12 -->
		<div class="col-md-12">
			<!-- begin panel -->
			<div class="panel panel-inverse">
				<div class="panel-heading">
					<h4 class="panel-title">Crewgeschiedenis</h4>
				</div>
				
				
				<div class="panel-body">
					<table id="data-table" class="table table-striped table-bordered nowrap" width="100%">
						<thead>
							<tr>
								<th>#</th>
								<th>Subsite</th>
								<th>Functie</th>
								<th>Duur</th>
								<th>Startdatum</th>
								<th>Einddatum</th>
								</tr>
								</thead>
								<tbody>
					<?php 
						try {
							require('config.php'); 
							
							$con= new PDO( "mysql:host=" . $settings["dbserver"] . ";dbname=" . $settings["dbname"], $settings["dbuser"], $settings["dbpass"]  
											,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET lc_time_names = 'nl_NL'"));
							$sql=	"SELECT
										  AllData.Subsite
										, Unit.ID UnitID
                                        , AllData.Unit
										, AllData.UnitEdition
										, AllData.UserName
										, AllData.UserID
										, AllData.Startdate SortDate
										, DATE_FORMAT(AllData.Startdate, '%d %b %Y') Startdate
										, CASE WHEN DATE_FORMAT(AllData.Enddate, '%d-%m-%Y') = '00-00-0000' THEN 'heden' ELSE DATE_FORMAT(AllData.Enddate, '%d %b %Y') END Enddate
										, AllData.StartURL
										, AllData.EndURL
										, AllData.NrOfDays
									FROM AllData
									LEFT JOIN (SELECT DISTINCT ID, Subsite, Name FROM Unit) Unit
                                    	ON AllData.Unit = Unit.Name
									WHERE UserID = " . $id . "
									ORDER BY UserID, SortDate, Unit"; 
								
							$stmt=$con->prepare($sql);
							$stmt->execute(); 
							$t = 0;
							while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {  
								if($row['Enddate'] == 'heden' ) { echo '<tr class="success">'; } else { echo '<tr>'; }
								echo '<td>' . ++$t . '</td>';
								
								echo '<td>' . $row['Subsite'] . '</td>';
								echo '<td>';
								// With Unit Edition
								if ($row['UnitEdition'] <> '0000') {
									// Active + forum-mod
									if($row['Unit'] <> 'Forum Admin' AND $row['Subsite'] == 'Forum' AND $row['Enddate'] == 'heden')
										{ 
											echo '<b><a href="/forum/' . $row['UnitID'] . '">' . $row['Unit'] . '</a>-mod <small>(' . $row['UnitEdition'] . ')</small></b>'; 
										} 
									// Active
									elseif($row['Enddate'] == 'heden') 
										{ 
											echo '<b>' . $row['Unit'] . ' <small>(' . $row['UnitEdition'] . ')</small></b>'; 
										} 
									   // Inactive + forum-mod 
									elseif($row['Unit'] <> 'Forum Admin' AND $row['Subsite'] == 'Forum') 
										{ 
											echo '<a href="/forum/' . $row['UnitID'] . '">' . $row['Unit'] . '</a>-mod <small>(' . $row['UnitEdition'] . ')</small>'; 
										} 
									   // Inactive
									else 
										{ 
											echo $row['Unit'] . ' <small>(' . $row['UnitEdition'] . ')</small>'; 
										} 
								}
								// Without Unit Edition
								else {
									// Active + Forum Admin
									if($row['Unit'] == 'Forum Admin' AND $row['Subsite'] == 'Forum' AND $row['Enddate'] == 'heden')
										{ 
											echo '<b><a href="/forum/' . $row['UnitID'] . '">' . $row['Unit'] . '</a></b>'; 
										} 
									// Active + forum-mod
									elseif($row['Unit'] <> 'Forum Admin' AND $row['Subsite'] == 'Forum' AND $row['Enddate'] == 'heden')
										{ 
											echo '<b><a href="/forum/' . $row['UnitID'] . '">' . $row['Unit'] . '</a> -mod</b>'; 
										} 
									// Active
									elseif($row['Enddate'] == 'heden') 
										{ 
											echo '<b>' . $row['Unit'] . '</b>'; 
										} 
									   // Inactive + Forum Admin
									elseif($row['Unit'] == 'Forum Admin' AND $row['Subsite'] == 'Forum') 
										{ 
											echo '<a href="/forum/' . $row['UnitID'] . '">' . $row['Unit'] . '</a>'; 
										} 
										// Inactive + forum-mod
									elseif($row['Unit'] <> 'Forum Admin' AND $row['Subsite'] == 'Forum') 
										{ 
											echo '<a href="/forum/' . $row['UnitID'] . '">' . $row['Unit'] . '</a>-mod'; 
										} 
									   // Inactive
									else 
										{ 
											echo $row['Unit'];
										} 									
								}
								echo '</td>';
																
								echo '<td>' . $row['NrOfDays'] . ' dagen</td>';
								echo '<td>'; if ($row['StartURL'] <> "0") { echo '<a href="http://forum.fok.nl/topic/' .  $row['StartURL'] . '" target="_blank">' . $row['Startdate'] . '</a>'; } else { echo $row['Startdate']; } echo '</td>';
								echo '<td>'; if ($row['EndURL'] <> "0")   { echo '<a href="http://forum.fok.nl/topic/' .  $row['EndURL'] . '" target="_blank">'   . $row['Enddate'] . '</a>'; }   else { echo $row['Enddate'];   } echo '</td>';
								echo '</tr>';
							}


						} 
						
						// Error handeling
						catch(PDOException $e) {
							echo '<pre>';
							echo 'Regel: '.$e->getLine(). '<br />';
							echo 'Bestand: '.$e->getFile(). '<br />'; 
							echo 'Foutmelding: '.$e->getMessage();
							echo '</pre>'; 
						}				
						?>
						</tbody>
					</table>
				</div>
			</div>
		<!-- end panel -->
		</div>
	<!-- end col-10 -->
	</div>
	<!-- end row -->
	
	<!-- begin row -->
	<div class="row">
		<!-- begin col-12 -->
		<div class="col-md-12">					
			<!-- begin panel -->
			<div class="panel panel-inverse" data-sortable-id="ui-widget-5">
				<div class="panel-heading">
					<h4 class="panel-title">Tijdlijn</h4>
				</div>
			
				<div class="panel-body">
					<script type="text/javascript" src="https://www.google.com/jsapi?autoload={'modules':[{'name':'visualization','version':'1','packages':['timeline']}]}"></script>
					<script type="text/javascript">
						google.setOnLoadCallback(drawChart);
						function drawChart() {
							var container = document.getElementById('timeline');
							var chart = new google.visualization.Timeline(container);
							var dataTable = new google.visualization.DataTable();

							dataTable.addColumn({ type: 'string', id: 'Term' });
							dataTable.addColumn({ type: 'string', id: 'Name' });
							dataTable.addColumn({ type: 'date', id: 'Start' });
							dataTable.addColumn({ type: 'date', id: 'End' });

					<?php
						$fok = 0;
	
						try {
							require('config.php'); 
							$con = new PDO("mysql:host=" . $settings["dbserver"] . ";dbname=" . $settings["dbname"], $settings["dbuser"], $settings["dbpass"]);  

						$SqlUserData =	"SELECT
								  UnitCount.Height
								, UnitDays.Subsite
								, UnitDays.Unit
								, UnitDays.UserName
								, UnitDays.UserID
								, UnitDays.RegistrationDateDay
								, UnitDays.RegistrationDateMonth
								, UnitDays.RegistrationDateYear
								, UnitDays.SortDate
								, UnitDays.StartdateDay
								, UnitDays.StartdateMonth
								, UnitDays.StartdateYear
								, UnitDays.EnddateDay
								, UnitDays.EnddateMonth
								, UnitDays.EnddateYear
								, UnitDays.StartURL
								, UnitDays.EndURL
								, UnitDays.NrOfDays
							FROM (SELECT 
									  UserID
									, 132 + (COUNT(*) * 41) Height
								FROM UnitDays
								WHERE UserID = " . $id . ") UnitCount
							JOIN (SELECT
									Subsite
									, Unit
									, UserName
									, UserID
									, DAY(RegistrationDate) RegistrationDateDay
									, MONTH(RegistrationDate)-1 RegistrationDateMonth
									, YEAR(RegistrationDate) RegistrationDateYear
									, Startdate SortDate
									, DAY(Startdate)  StartdateDay
									, MONTH(Startdate)-1  StartdateMonth
									, YEAR(Startdate)  StartdateYear
									, CASE WHEN DATE_FORMAT(Enddate, '%d-%m-%Y') = '00-00-0000' THEN DAY(CURDATE()) ELSE DAY(Enddate) END EnddateDay
									, CASE WHEN DATE_FORMAT(Enddate, '%d-%m-%Y') = '00-00-0000' THEN MONTH(CURDATE())-1 ELSE MONTH(Enddate)-1 END EnddateMonth
									, CASE WHEN DATE_FORMAT(Enddate, '%d-%m-%Y') = '00-00-0000' THEN YEAR(CURDATE()) ELSE YEAR(Enddate) END EnddateYear
									, StartURL
									, EndURL
									, NrOfDays
								FROM AllData
								WHERE UserID = " . $id . ") UnitDays
								ON UnitCount.UserID = UnitDays.UserID
							ORDER BY UnitDays.UserName, UnitDays.SortDate, UnitDays.Unit"; 
								
								// SQL - User info current user.
								$UserData = $con->prepare($SqlUserData);
								$UserData->execute(); 
								
								// SQL - User history of current user.
								$UserDataCurrent = $con->prepare($SqlUserData);
								$UserDataCurrent->execute(); 
								
								// SQL - Height of timeline.
								$TimelineHeight = $con->prepare($SqlUserData);
								$TimelineHeight->execute(); 
								
								// User info of current user.
								$RowUserDataCurrent = $UserDataCurrent->fetch(PDO::FETCH_ASSOC);
								echo 'dataTable.addRows([';
									echo '[\'FOK!\', \'FOK!\', new Date(1999, 06, 01), new Date() ],';
									if ($SelectedID == 41894 OR  $SelectedID == 372780) { echo '[\'User\', \'du_ke\', new Date(2002,11,9), new Date(2012,3, 11) ],'; } // 99.999 == du_ke
									echo "['User', '" . $RowUserDataCurrent['UserName'] . "', new Date(" . $RowUserDataCurrent['RegistrationDateYear'] . "," . $RowUserDataCurrent['RegistrationDateMonth'] . ", " . $RowUserDataCurrent['RegistrationDateDay'] . "), new Date() ], ";
									
								// User history of current user.
								while($RowUserData = $UserData->fetch(PDO::FETCH_ASSOC)) {  
									++$fok; echo "[' " . $RowUserData['Unit'] . "', '" . $RowUserData['Unit'] . "', new Date(" . $RowUserData['StartdateYear'] . "," . $RowUserData['StartdateMonth'] . ", " . $RowUserData['StartdateDay'] . "),  new Date(" . $RowUserData['EnddateYear'] . "," . $RowUserData['EnddateMonth'] . ", " . $RowUserData['EnddateDay'] . ") ], ";	
								}
								echo ']);';

							echo 'var options = {  timeline: { groupByRowLabel: true, showRowLabels: false }};';	
							echo 'chart.draw(dataTable, options);';
						echo '}';
						echo '</script>';

						$RowTimelineHeight = $TimelineHeight->fetch(PDO::FETCH_ASSOC);
						echo '<div id="timeline" style="width: 100%; height:' .  $RowTimelineHeight['Height'] . 'px"></div>';
						} 
						
						// Error handeling
						catch(PDOException $e) {
							echo '<pre>';
							echo 'Regel: '.$e->getLine(). '<br />';
							echo 'Bestand: '.$e->getFile(). '<br />'; 
							echo 'Foutmelding: '.$e->getMessage();
							echo '</pre>'; 
						}
					?>
				</div>
			</div>
			<!-- end panel -->	
		</div>
		<!-- end col-12 -->
	</div>
	<!-- end row -->
	

	<!-- begin row -->
	<div class="row">
		<!-- begin col-12 -->
		<div class="col-md-12">					
			<!-- begin panel -->
			<div class="panel panel-inverse" data-sortable-id="ui-widget-5">
				<div class="panel-heading">
					<h4 class="panel-title">Taartgrafiek</h4>
				</div>
			
				<div class="panel-body">
					<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<?php	
	
try {
    require('config.php'); 
    
    $con= new PDO( "mysql:host=" . $settings["dbserver"] . ";dbname=" . $settings["dbname"], $settings["dbuser"], $settings["dbpass"]);  
	$sql="	SELECT 
				Ranking.UnitRank
				, Ranking.Subsite
				, Ranking.UserID
				, Ranking.UserName
				, Ranking.Unit
				, Ranking.FirstStartdate
				, Ranking.NrOfUniqueDays
			FROM (SELECT
					@curRank := @curRank + 1 AS UnitRank
					, UserRows.Subsite
					, UserRows.UserID
					, UserRows.UserName
					, UserRows.Unit
					, UserRows.FirstStartdate
					, UserRows.NrOfUniqueDays
				FROM (SELECT
						Subsite
						, UserName
						, UserID
						, Unit
						, FirstStartdate
						, NrOfUniqueDays
					FROM UnitDays
					ORDER BY FirstStartdate, Unit) UserRows
				JOIN (SELECT @curRank := 0) r
				WHERE UserRows.UserID = ?) Ranking
			WHERE Subsite = ?
			"; 
        
	$stmt = $con->prepare($sql);

	// een closure functie, zodat $stmt automatisch beschikbaar is binnen de functie
	$fetchAll = function ($id, $subsite) use ($stmt) {
		$results = [];
		$stmt->execute(array($id, $subsite)); 
   
		while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {  
			$results[] = $row; 
		}
   
		return $results;
	};

	foreach (array('Forum', 'Frontpage', 'FOK!', 'Games', 'Sport') as $subsite) {
		//$results = $fetchAll(array($subsite,$id)); 
		$results = $fetchAll($id, $subsite);
		$countRecord = 0;

		// ga door naar volgende subsite indien geen resultaten (lege array)
		if (!$results) {
              continue;
		}

		echo '<script type="text/javascript">';
		echo 'google.load("visualization", "1", {packages:["corechart"]});';
		echo 'google.setOnLoadCallback(drawChart);';
		echo 'function drawChart() {';
		
		echo 'var data = google.visualization.arrayToDataTable([';
		echo "['Functie', 'Dagen'],['', ''], ['',''],";	
			if ($SelectedID == 41894 OR $SelectedID == 372780) { echo "['',''], "; } // 99.999 == du_ke
     
		// loop over resultaten met dezelfde logica als voorheen in je while loop
		$current = 1;
		foreach($results as $row){
			while(true){
				if($row['UnitRank'] == $current){
					echo "['" . $row['Unit'] . "', " . $row['NrOfUniqueDays'] . "],"; 
					$current++;
					break;
				} else { 
					echo "['',''],"; 
				}
				$current++;
			}
		}
			
	
 
		echo ']);';
		
		echo 'var chart = new google.visualization.PieChart(document.getElementById("' . $subsite . '"));';
		echo "var options = { title: 'Subsite: " . $subsite . "', sliceVisibilityThreshold: .00001, backgroundColor: 'transparent', tooltip: {showColorCode: true, textStyle: { color: 'black'}} };";
		echo 'chart.draw(data, options);';
		echo '}';
		echo '</script>';
		echo '<div class="piechart" id="' . $subsite . '" style="width: 100%; height:400px;"></div>';
		
	}
}	

// Error handeling
catch(PDOException $e) {
	echo '<pre>';
	echo 'Regel: '.$e->getLine(). '<br />';
	echo 'Bestand: '.$e->getFile(). '<br />'; 
	echo 'Foutmelding: '.$e->getMessage();
	echo '</pre>'; 
}	
?>

				</div>
			</div>
			<!-- end panel -->	
		</div>
		<!-- end col-12 -->
	</div>
	<!-- end row -->

</div>
