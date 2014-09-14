<div class="span12 main-column">
	<h1><strong>Rolluikspotters</strong> <small>ROL / 196</small></h1>
    <div class="row show-grid team-member">                                    
		<div class="spanUI photo">
			<div class="bordered-img"><img alt="" src="img/_ROL.png"></div>
		</div>
        
		<div class="span6">
            <h4><a href="http://forum.fok.nl/topic/1718900" target="blank_">04 okt 2011</a> - <a href="http://forum.fok.nl/topic/1726387" target="blank_">20 okt 2011</a></h4>
			<p class="experience"><a href="http://forum.fok.nl/ROL" target="_blank">/ROL</a></p>
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
		  <td><a href="?user=HeatWave">HeatWave</a></td>
		  <td><a href="http://forum.fok.nl/topic/1718900" target="blank_">04 okt 2011</a></td>
		  <td><a href="http://forum.fok.nl/topic/1726387" target="blank_">20 okt 2011</a></td>
		  <td>
			<?php
				$start1 = new DateTime("2011-10-03");
				$end1 = new DateTime("2011-10-20");
				$interval1 = $start1->diff($end1);
				echo "" . $interval1->days . " dagen";
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
				echo "" . $interval1->days . " dagen";
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
		<div class="tab-content" id="myTabContent" style="width: 100%; height: 225px;">
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
					[ ' ', 'ROL', new Date(2011, 09, 04), new Date(2011, 09, 20) ],
					[ '1', 'HeatWave', new Date(2011, 09, 04), new Date(2011, 09, 20) ]]);

				   var options = {	
					width: 940
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
					[ ' ', 'ROL', new Date(2011, 09, 04), new Date(2011, 09, 20) ], 
					[ '1', 'HeatWave', new Date(2011, 09, 04), new Date(2011, 09, 20) ]]);
				   var options = {
					width: 940
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
				['HeatWave', <?=$interval1->days?>]
			]);

			var chart = new google.visualization.PieChart(document.getElementById('taart'));
				chart.draw(data);
			}
    </script>
    <div id="taart" style="width: 100%; height: 400px;"></div>	
</div>
                          