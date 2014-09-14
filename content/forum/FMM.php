<div class="span12 main-column">
	<h1><strong>FOK!kers maken muziek</strong> <small>FMM / 202</small></h1>
    <div class="row show-grid team-member">                                    
		<div class="spanUI photo">
			<div class="bordered-img"><img alt="" src="img/_FMM.png"></div>
		</div>
        
		<div class="span6">
            <h4><a href="http://forum.fok.nl/topic/1531884" target="blank_">20 sep 2010</a> - <a href="http://forum.fok.nl/topic/1637479" target="blank_">13 apr 2011</a></h4>
			<p class="experience"><a href="http://forum.fok.nl/FMM" target="_blank">/FMM</a></p>
			<br />
		</div>
	</div>
	
	<div class="text-divider5"><span></span></div>
 
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
		  <td>1</td>
		  <td><a href="?user=ArchEnemy">ArchEnemy</a></td>
		  <td><a href="http://forum.fok.nl/topic/1531884" target="blank_">20 sep 2010</a></td>
		  <td><a href="http://forum.fok.nl/topic/1637479" target="blank_">13 apr 2011</a></td>
		  <td>
			<?php
				$start1 = new DateTime("2010-09-19");
				$end1 = new DateTime("2011-04-13");
				$interval1 = $start1->diff($end1);
				echo "" . $interval1->days . " dagen";
			?>
		  </td>
		</tr>
		<tr>
		  <td>2</td>
		  <td><a href="?user=belsen">belsen</a></td>
		  <td><a href="http://forum.fok.nl/topic/1531884" target="blank_">20 sep 2010</a></td>
		  <td><a href="http://forum.fok.nl/topic/1637479" target="blank_">13 apr 2011</a></td>
		  <td>
			<?php
				$start2 = new DateTime("2010-09-19");
				$end2 = new DateTime("2011-04-13");
				$interval2 = $start2->diff($end2);
				echo "" . $interval2->days . " dagen";
			?>
		  </td>
		</tr>
		<tr>
		  <td>3</td>
		  <td><a href="?user=Sack_Blabbath">Sack_Blabbath</a></td>
		  <td><a href="http://forum.fok.nl/topic/1531884" target="blank_">20 sep 2010</a></td>
		  <td><a href="http://forum.fok.nl/topic/1587983" target="blank_">08 jan 2011</a></td>
		  <td>
			<?php
				$start3 = new DateTime("2010-09-19");
				$end3 = new DateTime("2011-01-08");
				$interval3 = $start3->diff($end3);
				echo "" . $interval3->days . " dagen";
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
				$start = new DateTime("2010-09-19");
				$end = new DateTime("2011-04-13");
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
		<div class="tab-content" id="myTabContent" style="width: 100%; height: 300px;">
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
					[ ' ', 'FMM', new Date(2010, 08, 20), new Date(2011, 03, 13) ],
					[ '1', 'ArchEnemy', new Date(2010, 08, 20), new Date(2011, 03, 13) ],
					[ '2', 'belsen', new Date(2010, 08, 20), new Date(2011, 03, 13) ],
					[ '3', 'Sack_Blabbath', new Date(2010, 08, 20), new Date(2010, 12, 08) ]]);

				   var options = {	
					width: 940,
					height: 225
 				   };
			
 				 chart.draw(dataTable, options);
				  
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
					[ ' ', 'FMM', new Date(2010, 08, 20), new Date(2011, 03, 13) ],
					[ '1', 'ArchEnemy', new Date(2010, 08, 20), new Date(2011, 03, 13) ],
					[ '2', 'belsen', new Date(2010, 08, 20), new Date(2011, 03, 13) ],
					[ '3', 'Sack_Blabbath', new Date(2010, 08, 20), new Date(2010, 12, 08) ]]);
					
				   var options = {	
					width: 940,
					height: 275
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
				['ArchEnemy', <?=$interval1->days?>],
				['belsen', <?=$interval2->days?>],
				['Sack_Blabbath', <?=$interval3->days?>]
			]);

			var chart = new google.visualization.PieChart(document.getElementById('taart'));
				chart.draw(data);
			}
    </script>
    <div id="taart" style="width: 100%; height: 400px;"></div>
</div>
                          