<?php 
	$SelectedID = $_GET["id"];
	$id = $SelectedID;
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
							, Name
                            , Description
							, UI
							, Edition
							, DATE_FORMAT(Startdate, '%d %b %Y') Startdate
							, CASE WHEN Enddate = '0000-00-00' THEN 'heden'
								   ELSE DATE_FORMAT(Enddate, '%d %b %Y') 
							  END Enddate
							, StartURL
							, EndURL
						FROM Unit
                        WHERE ID = " . $id . "
                        	  AND Unit.Subsite = 'Sport'"; 
								
				$stmt=$con->prepare($sql);
				$stmt->execute(); 
				$row = $stmt->fetch(PDO::FETCH_ASSOC);
				
				// Forum edition (multiple edition per forum).
				$Edition = $con->prepare($sql);
				$Edition->execute(); 
				
		?>

					
			<div class="panel panel-inverse">
				<div class="panel-body">
					<ul class="media-list media-list-with-divider">
						<li class="media media-sm">
							<span class="media-left">
								<img class="media-object img-rounded" src="http://fokcrew.nl/ui/forum/<?php echo  $row['UI']; ?>" />
							</span>
							<div class="media-body">
								<h4 class="media-heading"><?php echo $row['Name']; ?></h4>
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
					<h4 class="panel-title">Users</h4>
				</div>
				
				<?php $nr = 0;?>
				<div class="panel-body">
					<table id="data-table" class="table table-striped table-bordered nowrap" width="100%">
						<thead>
							<tr>
								<th>#</th>
								<th>User</th>
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
                                          User.ID UserID
										, AllData.UserName
										, AllData.Startdate SortDate
										, DATE_FORMAT(AllData.Startdate, '%d %b %Y') Startdate
										, CASE WHEN DATE_FORMAT(AllData.Enddate, '%d-%m-%Y') = '00-00-0000' THEN 'heden' 
											   ELSE DATE_FORMAT(AllData.Enddate, '%d %b %Y')
										  END Enddate
                                        , AllData.StartURL
                                        , AllData.EndURL
										, AllData.NrOfDays
									FROM AllData
                                    JOIN User
                                    	ON AllData.UserName = User.UserName
                                    JOIN (SELECT DISTINCT ID, Subsite, Name FROM Unit) Unit
                                    	ON AllData.Subsite = Unit.Subsite
                                           AND AllData.Unit = Unit.Name
									WHERE AllData.Subsite = 'Sport' AND Unit.ID = " . $id . "
									ORDER BY SortDate, UserName "; 
								
							$stmt=$con->prepare($sql);
							$stmt->execute(); 
					
							while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {  
								if($row['Enddate'] == 'heden' ) { echo '<tr class="success">'; } else { echo '<tr>'; }
								echo '<td>' . ++$t . '</td>';
								
								echo '<td>'; 
									if($row['Enddate'] == 'heden' ) { echo '<b>'; } 
										echo '<a href="/user/' . $row['UserID'] . '">' . $row['UserName'] . '</a>'; 
									if($row['Enddate'] == 'heden' ) { echo '</b>'; } 
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
</div>
		
