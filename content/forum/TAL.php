<div class="span12 main-column">
	<h1><strong>Talentenjachten</strong> <small>TAL / 187</small></h1>
    <div class="row show-grid team-member">                                    
		<div class="spanUI photo">
			<div class="bordered-img"><img alt="" src="img/_TAL.png"></div>
		</div>
        
		<div class="span6">
            <h4><a href="http://forum.fok.nl/topic/1481465" target="blank_">22 jun 2010</a> - heden</h4>
			<p class="experience"><a href="http://forum.fok.nl/TAL" target="_blank">/TAL</a></p>
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
		<tr class="success">
		  <td><?=++$t?></td>
		  <td><a href="?user=iBenny">iBenny</a></td>
		  <td><a href="http://forum.fok.nl/topic/1481465" target="blank_">22 jun 2010</a></td>
		  <td>heden</td>
		  <td>
			<?php
				$start1 = new DateTime("2010-06-21");
				$end1 = new DateTime();
				$interval1 = $start1->diff($end1);
				echo "" . $interval1->days . " dagen";
			?>
		  </td>
		</tr>
		<tr>
		  <td><?=++$t?></td>
		  <td><a href="?user=Tha_Erik">Tha_Erik</a></td>
		  <td><a href="http://forum.fok.nl/topic/1481465" target="blank_">22 jun 2010</a></td>
		  <td><a href="http://forum.fok.nl/topic/1580460" target="blank_">25 dec 2010</a></td>
		  <td>
			<?php
				$start2 = new DateTime("2010-06-21");
				$end2 = new DateTime("2010-12-25");
				$interval2 = $start2->diff($end2);
				echo "" . $interval2->days . " dagen";
			?>
		  </td>
		</tr>
		<tr>
		  <td><?=++$t?></td>
		  <td><a href="?user=Symphonic">Symphonic</a></td>
		  <td><a href="http://forum.fok.nl/topic/1580460" target="blank_">25 dec 2010</a></td>
		  <td><a href="http://forum.fok.nl/topic/1675885" target="blank_">30 jun 2011</a></td>
		  <td>
			<?php
				$start3 = new DateTime("2010-12-24");
				$end3 = new DateTime("2011-06-30");
				$interval3 = $start3->diff($end3);
				echo "" . $interval3->days . " dagen";
			?>
		  </td>
		</tr>
		<tr>
		  <td><?=++$t?></td>
		  <td><a href="?user=Rauzer">Rauzer</a></td>
		  <td><a href="http://forum.fok.nl/topic/1675885" target="blank_">30 jun 2011</a></td>
		  <td><a href="http://forum.fok.nl/topic/1696845" target="blank_">14 aug 2011</a></td>
		  <td>
			<?php
				$start4 = new DateTime("2011-06-29");
				$end4 = new DateTime("2011-08-14");
				$interval4 = $start4->diff($end4);
				echo "" . $interval4->days . " dagen";
			?>
		  </td>
		</tr>
		<tr class="success">
		  <td><?=++$t?></td>
		  <td><a href="?user=Karina">Karina</a></td>
		  <td><a href="http://forum.fok.nl/topic/1696845" target="blank_">14 aug 2011</a></td>
		  <td>heden</td>
		  <td>
			<?php
				$start5 = new DateTime("2011-08-13");
				$end5 = new DateTime();
				$interval5 = $start5->diff($end5);
				echo "" . $interval5->days . " dagen";
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
				$start = new DateTime("2010-06-21");
				$end = new DateTime();
				$interval =  $start->diff($end);
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
		<div class="tab-content" id="myTabContent" style="width: 100%; height: 365px;">
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
					[ ' ', 'TAL', new Date(2010, 05, 22), new Date() ],
					[ '1', 'iBenny', new Date(2010, 05, 22), new Date() ],
					[ '2', 'Tha_Erik', new Date(2010, 05, 22), new Date(2010, 11, 25) ],
					[ '3', 'Symphonic', new Date(2010, 11, 25), new Date(2011, 05, 30) ],
					[ '4', 'Rauzer', new Date(2011, 05, 30), new Date(2011, 07, 14) ],
					[ '5', 'Karina', new Date(2011, 07, 14), new Date() ]]);				  
				
				  chart.draw(dataTable, {height: 300});
				  
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
					[ ' ', 'TAL', new Date(2010, 05, 22), new Date() ],
					[ '1', 'iBenny', new Date(2010, 05, 22), new Date() ],
					[ '2', 'Tha_Erik', new Date(2010, 05, 22), new Date(2010, 11, 25) ],
					[ '3', 'Symphonic', new Date(2010, 11, 25), new Date(2011, 05, 30) ],
					[ '4', 'Rauzer', new Date(2011, 05, 30), new Date(2011, 07, 14) ],
					[ '5', 'Karina', new Date(2011, 07, 14), new Date() ]]);		
					
				   var options = {
					width: 940,
					height:340
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
				['iBenny', <?=$interval1->days?>],
				['Tha_Erik', <?=$interval2->days?>],
				['Symphonic', <?=$interval3->days?>],
				['Rauzer', <?=$interval4->days?>],
				['Karina', <?=$interval5->days?>]
			]);

			var chart = new google.visualization.PieChart(document.getElementById('taart'));
				chart.draw(data);
			}
    </script>
    <div id="taart" style="width: 100%; height: 400px;"></div>	
</div>
                          