<div class="span12 main-column">
	<h1><strong>Travel</strong> <small>TRV / 29</small></h1>
    <div class="row show-grid team-member">                                    
		<div class="spanUI photo">
			<div class="bordered-img"><img alt="" src="img/_TRV.png"></div>
		</div>
        
		<div class="span6">
            <h4><a href="http://forum.fok.nl/topic/29210" target="blank_">07 jan 2001</a> - heden</h4>
			<p class="experience"><a href="http://forum.fok.nl/TRV" target="_blank">/TRV</a></p>
			<br />
		</div>
	</div>
	
	<div class="text-divider5"><span></span></div>
	<?php $t=0; ?>
	<table class="table table-striped">
	  <thead>
		<tr>
		  <th>#</th>
		  <th>Mod</th>
		  <th>Startdatum</th>
		  <th>Einddatum</th>
		  <th>Duur</th>
		</tr>
	  </thead>
	  <tbody>
		<tr>
		  <td><?=++$t?></td>
		  <td><a href="?user=dutchie">dutchie</a></td>
		  <td><a href="http://forum.fok.nl/topic/29210" target="blank_">07 jan 2001</a></td>
		  <td><a href="http://forum.fok.nl/topic/164475" target="blank_">19 jun 2002</a></td>
		  <td>
			<?php
				$start1 = new DateTime("2001-01-06");
				$end1 = new DateTime("2002-06-19");
				$interval1 = $start1->diff($end1);
				echo "" . $interval1->days . " dagen";
			?>
		  </td>
		</tr>
		<tr>
		  <td><?=++$t?></td>
		  <td><a href="?user=FeestBeest">FeestBeest</a></td>
		  <td><a href="http://forum.fok.nl/topic/29210" target="blank_">07 jan 2001</a></td>
		  <td><a href="http://forum.fok.nl/topic/36692" target="blank_">16 mar 2001</a></td>
		  <td>
			<?php
				$start2 = new DateTime("2001-01-06");
				$end2 = new DateTime("2001-03-16");
				$interval2 = $start2->diff($end2);
				echo "" . $interval2->days . " dagen";
			?>
		  </td>
		</tr>
		<tr>
		  <td><?=++$t?></td>
		  <td><a href="?user=DavidLetterman">David Letterman</a></td>
		  <td><a href="http://forum.fok.nl/topic/167019" target="blank_">24 jun 2002</a></td>
		  <td><a href="http://forum.fok.nl/topic/187826" target="blank_">19 aug 2002</a></td>
		  <td>
			<?php
				$start3 = new DateTime("2002-06-23");
				$end3 = new DateTime("2002-08-19");
				$interval3 = $start3->diff($end3);
				echo "" . $interval3->days . " dagen";
			?>
		  </td>
		</tr>
		<tr>
		  <td><?=++$t?></td>
		  <td><a href="?user=YPPY">YPPY</a></td>
		  <td><a href="http://forum.fok.nl/topic/192062" target="blank_">01 sep 2002</a></td>
		  <td><a href="http://forum.fok.nl/topic/365655" target="blank_">11 aug 2003</a></td>
		  <td>
			<?php
				$start4 = new DateTime("2002-08-31");
				$end4 = new DateTime("2003-08-11");
				$interval4 = $start4->diff($end4);
				echo "" . $interval4->days . " dagen";
			?>
		  </td>
		</tr>
		<tr>
		  <td><?=++$t?></td>
		  <td><a href="?user=Liejannuh">Liejannuh</a></td>
		  <td><a href="http://forum.fok.nl/topic/192062" target="blank_">01 sep 2002</a></td>
		  <td><a href="http://forum.fok.nl/topic/585720" target="blank_">10 aug 2004</a></td>
		  <td>
			<?php
				$start5 = new DateTime("2002-08-31");
				$end5 = new DateTime("2004-08-10");
				$interval5 = $start5->diff($end5);
				echo "" . $interval5->days . " dagen";
			?>
		  </td>
		</tr>
		<tr>
		  <td><?=++$t?></td>
		  <td><a href="?user=Lucille">Lucille</a></td>
		  <td><a href="http://forum.fok.nl/topic/365655" target="blank_">11 aug 2003</a></td>
		  <td><a href="http://forum.fok.nl/topic/816345" target="blank_">08 feb 2006</a></td>
		  <td>
			<?php
				$start6 = new DateTime("2003-08-10");
				$end6 = new DateTime("2006-02-08");
				$interval6 = $start6->diff($end6);
				echo "" . $interval6->days . " dagen";
			?>
		  </td>
		</tr>
		<tr class="success">
		  <td><?=++$t?></td>
		  <td><strong><a href="?user=UIO_AMS">UIO_AMS</a></strong></td>
		  <td><a href="http://forum.fok.nl/topic/598445" target="blank_">09 sep 2004</a></td>
		  <td>heden</td>
		  <td>
			<?php
				$start7 = new DateTime("2004-09-08");
				$end7 = new DateTime();
				$interval7 = $start7->diff($end7);
				echo "" . $interval7->days . " dagen";
			?>
		  </td>
		</tr>
		<tr>
		  <td><?=++$t?></td>
		  <td><a href="?user=DutchTrain">DutchTrain</a></td>
		  <td><a href="http://forum.fok.nl/topic/816345" target="blank_">08 feb 2006</a></td>
		  <td><a href="http://forum.fok.nl/topic/1735790" target="blank_">09 nov 2011</a></td>
		  <td>
			<?php
				$start8 = new DateTime("2006-02-07");
				$end8 = new DateTime("2011-11-09");
				$interval8 = $start8->diff($end8);
				echo "" . $interval8->days . " dagen";
			?>
		  </td>
		</tr>
		<tr class="success">
		  <td><?=++$t?></td>
		  <td><strong><a href="?user=Thetallguy">Thetallguy</a></strong></td>
		  <td><a href="http://forum.fok.nl/topic/1735790" target="blank_">09 nov 2011</a></td>
		  <td>heden</td>
		  <td>
			<?php
				$start9 = new DateTime("2011-11-08");
				$end9 = new DateTime();
				$interval9 = $start9->diff($end9);
				echo "" . $interval9->days . " dagen";
			?>
		  </td>
		</tr>
		<tr>
		  <td></td>
		  <td></td>
		  <td></td>
		  <td style="text-align: right;"><code>Totaal:</code></td>
		  <td><code>
			<?php
				$start = new DateTime("2001-01-06");
				$end = new DateTime();
				$interval = $start->diff($end);
				echo "" . $interval->days . " dagen";			
			?>
			</code>
		  </td>
		</tr>
	  </tbody>
	</table>
	
		<div class="text-divider5"><span></span></div>

		<ul class="nav nav-tabs" id="myTab">
			<li class="active"><a data-toggle="tab" href="#mods">Mods</a></li>
			<li class=""><a data-toggle="tab" href="#fok">FOK!</a></li>
		</ul>
		<div class="tab-content" id="myTabContent" style="width: 100%; height: 540px;">
			<div id="mods" class="tab-pane fade active in">
				<script 
					type="text/javascript"
					src="https://www.google.com/jsapi?autoload={'modules':[{'name':'visualization',
					   'version':'1','packages':['timeline']}]}"></script>
				<script type="text/javascript">

				google.setOnLoadCallback(drawChart);
				function drawChart() {
				  var container = document.getElementById('u');
				  var chart = new google.visualization.Timeline(container);
				  var dataTable = new google.visualization.DataTable();

				  dataTable.addColumn({ type: 'string', id: 'Term' });
				  dataTable.addColumn({ type: 'string', id: 'Name' });
				  dataTable.addColumn({ type: 'date', id: 'Start' });
				  dataTable.addColumn({ type: 'date', id: 'End' });

				  dataTable.addRows([
					[ ' ', 'TRV', new Date(2000, 12, 07), new Date() ],
					[ '1', 'dutchie', new Date(2000, 12, 07), new Date(2002, 05, 19) ],
					[ '2', 'FeestBeest', new Date(2000, 12, 07), new Date(2001, 02, 16) ],
					[ '3', 'David Letterman', new Date(2002, 05, 24), new Date(2002, 07, 19) ],
					[ '4', 'YPPY', new Date(2002, 08, 01), new Date(2003, 07, 11) ],
					[ '5', 'Liejannuh', new Date(2002, 08, 01), new Date(2004, 07, 10) ],
					[ '6', 'Lucille', new Date(2003, 07, 11), new Date(2006, 01, 08) ],
					[ '7', 'UIO_AMS', new Date(2004, 08, 09), new Date() ],
					[ '8', 'DutchTrain', new Date(2006, 01, 08), new Date(2011, 10, 09) ],
					[ '9', 'Thetallguy', new Date(2011, 10, 09), new Date() ]]);
			
 				 chart.draw(dataTable, {height:500});
				  
				}
				</script>

				<div id="u"></div>
			</div>
			<div id="fok" class="tab-pane fade">
				<script 
					type="text/javascript"
					src="https://www.google.com/jsapi?autoload={'modules':[{'name':'visualization',
					   'version':'1','packages':['timeline']}]}"></script>
				<script type="text/javascript">

				google.setOnLoadCallback(drawChart);
				function drawChart() {
				  var container = document.getElementById('f');
				  var chart = new google.visualization.Timeline(container);
				  var dataTable = new google.visualization.DataTable();

				  dataTable.addColumn({ type: 'string', id: 'Term' });
				  dataTable.addColumn({ type: 'string', id: 'Name' });
				  dataTable.addColumn({ type: 'date', id: 'Start' });
				  dataTable.addColumn({ type: 'date', id: 'End' });

				  dataTable.addRows([
					[ '#', 'FOK!', new Date(1999, 06, 01), new Date() ],
					[ ' ', 'TRV', new Date(2000, 12, 07), new Date() ],
					[ '1', 'dutchie', new Date(2000, 12, 07), new Date(2002, 05, 19) ],
					[ '2', 'FeestBeest', new Date(2000, 12, 07), new Date(2001, 02, 16) ],
					[ '3', 'David Letterman', new Date(2002, 05, 24), new Date(2002, 07, 19) ],
					[ '4', 'YPPY', new Date(2002, 08, 01), new Date(2003, 07, 11) ],
					[ '5', 'Liejannuh', new Date(2002, 08, 01), new Date(2004, 07, 10) ],
					[ '6', 'Lucille', new Date(2003, 07, 11), new Date(2006, 01, 08) ],
					[ '7', 'UIO_AMS', new Date(2004, 08, 09), new Date() ],
					[ '8', 'DutchTrain', new Date(2006, 01, 08), new Date(2011, 10, 09) ],
					[ '9', 'Thetallguy', new Date(2011, 10, 09), new Date() ]]);
					
				   var options = {
					width: 940,
					height: 515
 				   };
			
 				 chart.draw(dataTable, options);
				  
				}
				</script>

				<div id="f"></div>
			</div>
		</div>

		<div class="text-divider5"><span></span></div>
		
		<script type="text/javascript" src="https://www.google.com/jsapi"></script>
		<script type="text/javascript">
			google.load("visualization", "1", {packages:["corechart"]});
			google.setOnLoadCallback(drawChart);
			function drawChart() {
			var data = google.visualization.arrayToDataTable([
				['Mod', 'Dagen'], ['',0],
				['dutchie', <?=$interval1->days?>],
				['FeestBeest', <?=$interval2->days?>],
				['David Letterman', <?=$interval3->days?>],
				['YPPY', <?=$interval4->days?>],
				['Liejannuh', <?=$interval5->days?>],
				['Lucille', <?=$interval6->days?>],
				['UIO_AMS', <?=$interval7->days?>],
				['DutchTrain', <?=$interval8->days?>],
				['Thetallguy', <?=$interval9->days?>]
			]);

			var chart = new google.visualization.PieChart(document.getElementById('taart'));
				chart.draw(data);
			}
    </script>
    <div id="taart" style="width: 100%; height: 500px;"></div>	
</div>
                          