<?php include("content/date.php"); ?>
<div class="span12 main-column">
	<h1><strong>Re</strong> <small>262</small></h1>
    <div class="row show-grid team-member">                                    
		<div class="spanUI photo">
			<div class="bordered-img"><?=$ui_Re?></div>
		</div>
        
		<div class="span6">
            <h4>26 september 1999</h4>
            <p class="experience"><strong><a href="http://forum.fok.nl/user/profile/262" target="blank_">FOK!profiel</a></strong></p>
			<br />
		</div>
	</div>
	
	<div class="text-divider5"><span></span></div>
	<?php $t=0; ?>
	<table class="table table-striped">
	  <thead>
		<tr>
		  <th>#</th>
		  <th>Functie</th>
		  <th>Startdatum</th>
		  <th>Einddatum</th>
		  <th>Duur</th>
		</tr>
	  </thead>
	  <tbody>
		<tr>
		  <td><?=++$t?></td>
		  <td><?=$RP?></td>
		  <td><a href="http://forum.fok.nl/topic/1131606" target="_blank">02 mar 2008</a></td>
		  <td><a href="http://forum.fok.nl/topic/1833775" target="_blank">26 jun 2012</a></td>
		  <td><?=$uRe_i1;?> dagen</td>
		</tr>
		<tr>
		  <td><?=++$t?></td>
		  <td><?=$US?></td>
		  <td><a href="http://forum.fok.nl/topic/1241176" target="_blank">11 jan 2009</a></td>
		  <td><a href="http://forum.fok.nl/topic/1346816" target="_blank">27 sep 2009</a></td>
		  <td><?=$uRe_i2;?> dagen</td>
		</tr>
		<tr>
		  <td><?=++$t?></td>
		  <td><?=$FLU?></td>
		  <td><a href="http://forum.fok.nl/topic/1321575" target="_blank">27 jul 2009</a></td>
		  <td><a href="http://forum.fok.nl/topic/1389438" target="_blank">03 jan 2010</a></td>
		  <td><?=$uRe_i3;?> dagen</td>
		</tr>
		<tr class="success">
		  <td><?=++$t?></td>
		  <td><strong><?=$RP?></strong></td>
		  <td><a href="http://forum.fok.nl/topic/1852311" target="_blank">02 aug 2012</a></td>
		  <td>heden</td>
		  <td><?=$uRe_i4;?> dagen</td>
		</tr>
		<tr>
		  <td></td>
		  <td></td>
		  <td></td>
		  <td style="text-align: right;"><code>Totaal:</code></td>
		  <td><code><?=$uRe_total;?> dagen</code></td>
		</tr>
	  </tbody>
	</table>
	
		<div class="text-divider5"><span></span></div>

		<ul class="nav nav-tabs" id="myTab">
			<li class="active"><a data-toggle="tab" href="#user">User</a></li>
			<li class=""><a data-toggle="tab" href="#fok">FOK!</a></li>
		</ul>
		<div class="tab-content" id="myTabContent" style="width: 100%; height: 300px;">		
			<div id="user" class="tab-pane fade active in">
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
					[ '1', 'R&P', new Date(2008, 02, 02), new Date(2012, 05, 21) ],
					[ '2', 'US',  new Date(2008, 12, 11), new Date(2009, 08, 27) ],
					[ '3', 'FLU', new Date(2009, 06, 27), new Date(2009, 12, 03) ],
					[ '1', 'R&P', new Date(2012, 07, 02), new Date() ]]);

			
					
 				 chart.draw(dataTable);
				  
				}
				</script>

				<div id="u" style="width: 100%"></div>
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
					[ ' ', 'Re',  new Date(1999, 08, 26), new Date() ],
					[ '1', 'R&P', new Date(2008, 02, 02), new Date(2012, 05, 21) ],
					[ '2', 'US',  new Date(2008, 12, 11), new Date(2009, 08, 27) ],
					[ '3', 'FLU', new Date(2009, 06, 27), new Date(2009, 12, 03) ],
					[ '1', 'R&P', new Date(2012, 07, 02), new Date() ]]);
					
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
				['Functie', 'Dagen'],
				['R&P',  <?=$uRe_i1+$uRe_i4?>],
				['US',   <?=$uRe_i2?>],
				['FLU',  <?=$uRe_i3?>]
			]);

			var chart = new google.visualization.PieChart(document.getElementById('taart'));
				chart.draw(data);
			}
    </script>
    <div id="taart" style="width: 100%; height: 400px;"></div>
</div>