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
							, UnitRank
							, Edition
							, DATE_FORMAT(Startdate, '%d %b %Y') Startdate
							, CASE WHEN Enddate = '0000-00-00' THEN 'heden'
								   ELSE DATE_FORMAT(Enddate, '%d %b %Y') 
							  END Enddate
							, StartURL
							, EndURL
						FROM Unit
                        WHERE ID = " . $id . "
                        	  AND Unit.Subsite = 'Forum'
						ORDER BY UnitRank DESC"; 
								
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
								<h4 class="media-heading">
									<?php
										// Forum Admin show name only.
										if ($row['ID'] == '17') {
											echo $row['Description']; 
										}
										else {
											echo $row['Description'] . ' <small>' . $row['Name'] . ' / ' . $row['ID'] . '</small>'; 
										}
									?>
								</h4>
								<p>
									<?php
									while($RowEdition = $Edition->fetch(PDO::FETCH_ASSOC)) { 
										// DO NOT SHOW old unit names
										    if ($RowEdition['Name'] == 'PUB') { echo ''; } // PUB -> JNG
										elseif ($RowEdition['Name'] == 'LIT') { echo ''; } // LIT -> TTK
										elseif ($RowEdition['Name'] == 'D&S') { echo ''; } // D&S -> DIG
										elseif ($RowEdition['Name'] == 'F&T') { echo ''; } // F&T -> WFT
										elseif ($RowEdition['Name'] == 'WFT') { echo ''; } // WFT -> WFL
										elseif ($RowEdition['Name'] == 'OOG') { echo ''; } // OOG -> NWS
										
										//No edition, no starturl, no endurl
										elseif ($RowEdition['Edition'] == '0000' AND $RowEdition['StartURL'] == '0' AND $RowEdition['EndURL'] == '0') 
												{ echo $RowEdition['Startdate'] . " - " . $RowEdition['Enddate']; } 
										//No edition, yes starturl, no endurl
										elseif ($RowEdition['Edition'] == '0000' AND $RowEdition['StartURL'] <> '0' AND $RowEdition['EndURL'] == '0') 
												{ echo '<a href="http://forum.fok.nl/topic/'. $RowEdition['StartURL'] .'" target="_blank">' . $RowEdition['Startdate'] . '</a> - ' . $RowEdition['Enddate']; } 
										//No edition, no starturl, yes endurl
										elseif ($RowEdition['Edition'] == '0000' AND $RowEdition['StartURL'] == '0' AND $RowEdition['EndURL'] <> '0') 
												{ echo $RowEdition['Startdate'] . ' - <a href="' . $RowEdition['EndURL'] . '" target="_blank">' . $RowEdition['Enddate'] . '</a>'; } 
										//No edition, yes starturl, yes endurl
										elseif ($RowEdition['Edition'] == '0000' AND $RowEdition['StartURL'] <> '0' AND $RowEdition['EndURL'] <> '0') 
												{ echo '<a href="http://forum.fok.nl/topic/'. $RowEdition['StartURL'] .'" target="_blank">' . $RowEdition['Startdate'] . '</a> - <a href="' . $RowEdition['EndURL'] . '" target="_blank">' . $RowEdition['Enddate'] . '</a>'; } 
										
										//Yes edition, no starturl, no endurl
										    if ($RowEdition['Edition'] <> '0000' AND $RowEdition['StartURL'] == '0' AND $RowEdition['EndURL'] == '0') 
												{ echo 'Editie ' . $RowEdition['Edition'] . ': ' . $RowEdition['Startdate'] . " t/m " . $RowEdition['Enddate'] . '<br />'; } 
										//Yes edition, yes starturl, no endurl
										elseif ($RowEdition['Edition'] <> '0000' AND $RowEdition['StartURL'] <> '0' AND $RowEdition['EndURL'] == '0') 
												{ echo 'Editie ' . $RowEdition['Edition'] . ': ' . '<a href="http://forum.fok.nl/topic/'. $RowEdition['StartURL'] .'" target="_blank">' . $RowEdition['Startdate'] . '</a> t/m ' . $RowEdition['Enddate'] . '<br />'; } 
										//Yes edition, no starturl, yes endurl
										elseif ($RowEdition['Edition'] <> '0000' AND $RowEdition['StartURL'] == '0' AND $RowEdition['EndURL'] <> '0') 
												{ echo 'Editie ' . $RowEdition['Edition'] . ': ' . $RowEdition['Startdate'] . ' t/m <a href="' . $RowEdition['EndURL'] . '" target="_blank">' . $RowEdition['Enddate'] . '</a><br />'; } 
										//Yes edition, yes starturl, yes endurl
										elseif ($RowEdition['Edition'] <> '0000' AND $RowEdition['StartURL'] <> '0' AND $RowEdition['EndURL'] <> '0') 
												{ echo 'Editie ' . $RowEdition['Edition'] . ': ' . '<a href="http://forum.fok.nl/topic/'. $RowEdition['StartURL'] .'" target="_blank">' . $RowEdition['Startdate'] . '</a> t/m <a href="' . $RowEdition['EndURL'] . '" target="_blank">' . $RowEdition['Enddate'] . '</a><br />'; } 
										
										
										// FORMERLY KNOWS AS
										// PUB (JNG)
										  if ($RowEdition['ID'] == '104' AND $RowEdition['Name'] == 'PUB') {
											echo '<br /><br />'; 
											echo 'Eerder bekend als: <br />';
											echo '&bullet; 	Puber en Tienertalk (PUB): <a href="http://forum.fok.nl/topic/728502" target="_blank">17 jul 2005</a> - <a href="http://forum.fok.nl/topic/1898053" target="_blank">23 nov 2013</a>';
											echo '<br />';
										}
										// LIT (TTK)
										elseif ($RowEdition['ID'] == '15' AND $RowEdition['Name'] == 'LIT') {
											echo '<br /><br />'; 
											echo 'Eerder bekend als: <br />';
											echo '&bullet; 	Literatureluurs (LIT): 01 jul 1999 - <a href="http://forum.fok.nl/topic/626859" target="_target">13 nov 2004</a>';
											echo '<br />';
										}
										// D&S (DIG)
										elseif ($RowEdition['ID'] == '16' AND $RowEdition['Name'] == 'D&S') {
											echo '<br /><br />'; 
											echo 'Eerder bekend als: <br />';
											echo '&bullet; 	Digital & Science (D&S): 01 jul 1999 - <a href="http://forum.fok.nl/topic/118970" target="_target">18 mrt 2002</a>';
											echo '<br />';
										}		
										// F&L & WFT (WFL)
										elseif ($RowEdition['ID'] == '9') {
											if ($RowEdition['UnitRank'] == '3') {
												echo '<br /><br />'; 
												echo 'Eerder bekend als:';
											}
											elseif ($RowEdition['Name'] == 'F&T') {
												echo '&bullet; 	Filosofie en Theologie (F&T): 01 jul 1999 - <a href="http://forum.fok.nl/topic/118970" target="_target">18 mrt 2002</a>';
											}
											elseif ($RowEdition['Name'] == 'WFT') {
												echo '&bullet; 	Wetenschap, Filosofie en Theologie (WFT): <a href="http://forum.fok.nl/topic/118970" target="_target">18 mrt 2002</a> - <a href="http://forum.fok.nl/topic/334145" target="_target">11 jun 2003</a>';
											}

											echo '<br />';
										}	
										// OOG (NWS)
										elseif ($RowEdition['ID'] == '4' AND $RowEdition['Name'] == 'OOG') {
											echo '<br /><br />'; 
											echo 'Eerder bekend als: <br />';
											echo '&bullet; 	Oog op het Nieuws (OOG): 01 jul 1999 - <a href="http://forum.fok.nl/topic/455684" target="_target">01 jan 2004</a>';
											echo '<br />';
										}											
									}
									
									
									?>
									<br />
									<?php
										//No link for Forum Admin
										if ($row['ID'] == '17') {
											echo '';
										}
										else {
											echo '<b><a href="http://forum.fok.nl/forum/' . $row['ID'] . '" target="_blank">' . $row['Name'] . ' op FOK!</a></b>';
										}
									?>
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
					<h4 class="panel-title">Forum</h4>
				</div>
				
				<?php $nr = 0;?>
				<div class="panel-body">
					<table id="data-table" class="table table-striped table-bordered nowrap" width="100%">
						<thead>
							<tr>
								<th>#</th>
								<th>Mod</th>
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
									WHERE AllData.Subsite = 'Forum' AND Unit.ID = " . $id . "
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

							$SqlForumData =	
								"SELECT
									  UnitCount.Height
									, UnitDays.Subsite
									, UnitDays.UnitID
									, UnitDays.UnitName
									, UnitDays.UserName
									, UnitDays.SortDate
									, UnitDays.UserStartDay
									, UnitDays.UserStartMonth
									, UnitDays.UserStartYear
									, UnitDays.UserEndDay
									, UnitDays.UserEndMonth
									, UnitDays.UserEndYear	
									, UnitDays.StartURL
									, UnitDays.EndURL
									, UnitDays.NrOfDays
								FROM (SELECT 
										UnitID
										, 132 + (COUNT(*) * 41) Height
									FROM UnitDays
									WHERE UnitID = " . $id . ") UnitCount
								JOIN (SELECT
										  Unit.Subsite
										, Unit.ID UnitID
										, Unit.Name UnitName
										, AllData.UserName
										, AllData.Startdate SortDate
										, DAY(AllData.Startdate)  UserStartDay
										, MONTH(AllData.Startdate)-1  UserStartMonth
										, YEAR(AllData.Startdate)  UserStartYear
										, CASE WHEN DATE_FORMAT(AllData.Enddate, '%d-%m-%Y') = '00-00-0000' THEN DAY(CURDATE()) ELSE DAY(AllData.Enddate) END UserEndDay
										, CASE WHEN DATE_FORMAT(AllData.Enddate, '%d-%m-%Y') = '00-00-0000' THEN MONTH(CURDATE())-1 ELSE MONTH(AllData.Enddate)-1 END UserEndMonth
										, CASE WHEN DATE_FORMAT(AllData.Enddate, '%d-%m-%Y') = '00-00-0000' THEN YEAR(CURDATE()) ELSE YEAR(AllData.Enddate) END UserEndYear	
										, AllData.StartURL
										, AllData.EndURL
										, AllData.NrOfDays
									FROM AllData
                                    JOIN (SELECT DISTINCT ID, Subsite, Name FROM Unit) Unit
										ON AllData.Subsite = Unit.Subsite
										AND AllData.Unit = Unit.Name
									WHERE Unit.Subsite = 'Forum' AND Unit.ID = " . $id . ") UnitDays
									ON UnitCount.UnitID = UnitDays.UnitID
								ORDER BY SortDate, UserName
								"; 

							$SqlForumEdition =	
								"SELECT
									  ID
									, Subsite
									, Name AS UnitName
									, DAY(Startdate) UnitStartDay
									, MONTH(Startdate)-1 UnitStartMonth
									, YEAR(Startdate) UnitStartYear
									, CASE WHEN DATE_FORMAT(Enddate, '%d-%m-%Y') = '00-00-0000' THEN DAY(CURDATE()) ELSE DAY(Enddate) END UnitEndDay
									, CASE WHEN DATE_FORMAT(Enddate, '%d-%m-%Y') = '00-00-0000' THEN MONTH(CURDATE())-1 ELSE MONTH(Enddate)-1 END UnitEndMonth
									, CASE WHEN DATE_FORMAT(Enddate, '%d-%m-%Y') = '00-00-0000' THEN YEAR(CURDATE()) ELSE YEAR(Enddate) END UnitEndYear	
								FROM Unit
								WHERE Subsite = 'Forum' AND ID = " . $id . "
								ORDER BY Startdate
								"; 
								
								// SQL - Forum user info current forum.
								$ForumData = $con->prepare($SqlForumData);
								$ForumData->execute(); 
								
								// SQL - Forum edition info current forum.
								$ForumEdition = $con->prepare($SqlForumEdition);
								$ForumEdition->execute(); 
							
								// SQL - Height of timeline.
								$TimelineHeight = $con->prepare($SqlForumData);
								$TimelineHeight->execute(); 
								
								// Forum info of current forum.
								echo 'dataTable.addRows([';
									echo '[\'FOK!\', \'FOK!\', new Date(1999, 06, 01), new Date() ],';
									// Forum (edition) history of current forum.
									while($RowForumEdition = $ForumEdition->fetch(PDO::FETCH_ASSOC)) {  
									echo "['Forum', '" . $RowForumEdition['UnitName'] . "', new Date(" . $RowForumEdition['UnitStartYear'] . "," . $RowForumEdition['UnitStartMonth'] . ", " . $RowForumEdition['UnitStartDay'] . "), new Date(" . $RowForumEdition['UnitEndYear'] . "," . $RowForumEdition['UnitEndMonth'] . ", " . $RowForumEdition['UnitEndDay'] . ") ], ";
									}
									
								// Forum user history of current forum.
								while($RowForumData = $ForumData->fetch(PDO::FETCH_ASSOC)) {  
									++$fok; echo "[' " . $RowForumData['UserName'] . "', '" . $RowForumData['UserName'] . "', new Date(" . $RowForumData['UserStartYear'] . "," . $RowForumData['UserStartMonth'] . ", " . $RowForumData['UserStartDay'] . "),  new Date(" . $RowForumData['UserEndYear'] . "," . $RowForumData['UserEndMonth'] . ", " . $RowForumData['UserEndDay'] . ") ], ";	
								}
								echo ']);';
						 
						

		
							echo 'var options = {  timeline: { groupByRowLabel: true, showRowLabels: false }};';
							echo 'chart.draw(dataTable, options);';
						echo '}';
					echo '</script>';

						
					$RowTimelineHeight = $TimelineHeight->fetch(PDO::FETCH_ASSOC);
					echo '<div id="timeline" style="width: 100%; height:' . $RowTimelineHeight['Height'] . 'px"></div>';
					
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
					<script type="text/javascript">
						google.load("visualization", "1", {packages:["corechart"]});
						google.setOnLoadCallback(drawChart);
						function drawChart() {
						
					<?php
					$fok = 0;
						try {
							require('config.php'); 
							$con = new PDO("mysql:host=" . $settings["dbserver"] . ";dbname=" . $settings["dbname"], $settings["dbuser"], $settings["dbpass"]);  
							
							$sql=	"SELECT
										UnitCount.Cnt
										, UnitDays.UserID
										, UnitDays.UserName
										, UnitDays.Subsite
										, UnitDays.UnitID
										, UnitDays.Unit
										, UnitDays.FirstStartdate
										, UnitDays.NrOfUniqueDays
									FROM (SELECT 
											  UnitID
											, COUNT(*) Cnt
										FROM UnitDays
										WHERE UnitID = " . $id . ") UnitCount
									JOIN (SELECT
											UserID
											, UserName
											, Subsite
											, UnitID
											, Unit
											, FirstStartdate
											, NrOfUniqueDays
										FROM UnitDays
										WHERE Subsite = 'Forum' AND UnitDays.UnitID = " . $id . ") UnitDays
									ON UnitCount.UnitID = UnitDays.UnitID
									ORDER By UnitDays.FirstStartdate, UnitDays.UserName"; 
								
							$stmt=$con->prepare($sql);
							$stmt->execute(); 
		
							echo 'var data = google.visualization.arrayToDataTable([';
							echo "['User', 'Dagen'],['', ''], ['',''],";
								    if ($id == '104' OR $id == '15' OR $id == '16' OR $id == '4') { echo "['',''],";}
								elseif ($id == '9') { echo "['',''],['',''],";}
							while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {  
								++$fok; echo "['" . $row['UserName'] . "', " . $row['NrOfUniqueDays'] . "]";
								if ($fok <> $row['Cnt']) { echo ","; };	
							}
							echo ']);';
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
							var chart = new google.visualization.PieChart(document.getElementById('taart'));
							var options = { sliceVisibilityThreshold: .00001, backgroundColor: 'transparent', tooltip: {showColorCode: true, textStyle: { color: 'black'}} }  ;
							chart.draw(data, options);
						}
					</script>
				
					<div class="piechart" id="taart" style="width: 100%; height: 500px;"></div>
				</div>
			</div>
			<!-- end panel -->	
		</div>
		<!-- end col-12 -->
	</div>
	<!-- end row -->
	
</div>
		