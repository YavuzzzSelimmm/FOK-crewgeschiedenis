<?php include("content/date.php"); ?>
<div class="span12 main-column">
	<h1><strong>Lutte</strong> <small>316232</small></h1>
    <div class="row show-grid team-member">                                    
		<div class="spanUI photo">
			<div class="bordered-img"><?=$ui_Lutte?></div>
		</div>
        
		<div class="span6">
            <h4>28 augustus 2010</h4>
            <p class="experience"><strong><a href="http://forum.fok.nl/user/profile/316232" target="blank_">FOK!profiel</a></strong></p>
			<br />
		</div>
	</div>
	
	<div class="text-divider5"><span></span></div>
	<?php $t=0;?>
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
		  <td><?=++$t;?></td>
		  <td><?=$CRE?></td>
		  <td><a href="http://forum.fok.nl/topic/1585801" target="_blank">04 jan 2011</a></td>
		  <td><a href="http://forum.fok.nl/topic/2004907" target="_blank">05 aug 2013</td>
		  <td><?=$uLutte_i1;?> dagen</td>
		</tr>
		<tr>
		  <td><?=++$t;?></td>
		  <td><?=$TDF?> <small>(2012)</small)</td>
		  <td><a href="http://forum.fok.nl/topic/1833215" target="_blank">20 jun 2012</a></td>
		  <td><a href="http://forum.fok.nl/topic/1851588" target="_blank">01 aug 2012</a></td>
		  <td><?=$uLutte_i2;?> dagen</td>
		</tr>
		<tr>
		  <td><?=++$t;?></td>
		  <td><?=$TDF?> <small>(2013)</small)</td>
		  <td><a href="http://forum.fok.nl/topic/1982873" target="_blank">10 jun 2013</a></td>
		  <td><a href="http://forum.fok.nl/topic/2002163" target="_blank">29 jul 2013</a></td>
		  <td><?=$uLutte_i3;?> dagen</td>
		</tr>
		<tr>
		  <td></td>
		  <td></td>
		  <td></td>
		  <td style="text-align: right;"><code>Totaal:</code></td>
		  <td><code><?=$uLutte_total;?> dagen</code></td>
		</tr>
	  </tbody>
	</table>
	
		<div class="text-divider5"><span></span></div>

		<ul class="nav nav-tabs" id="myTab">
			<li class="active"><a data-toggle="tab" href="#user">User</a></li>
			<li class=""><a data-toggle="tab" href="#fok">FOK!</a></li>
		</ul>
		<div class="tab-content" id="myTabContent" style="width: 100%; height: 240px;">		
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
					[ '1', 'CRE', new Date(2010, 12, 04), new Date(2013, 07, 05) ],
					[ '2', 'TDF', new Date(2012, 05, 20), new Date(2012, 07, 01) ],
					[ '2', 'TDF', new Date(2013, 05, 10), new Date(2013, 06, 29) ]]);

			
					
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
					[ ' ', 'Lutte', new Date(2010, 07, 28), new Date() ],
					[ '1', 'CRE', new Date(2010, 12, 04), new Date(2013, 07, 05) ],
					[ '2', 'TDF', new Date(2012, 05, 20), new Date(2012, 07, 01) ],
					[ '2', 'TDF', new Date(2013, 05, 10), new Date(2013, 06, 29) ]]);

				 var options = {
					width: 940,
					height: 215
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
				['CRE',  <?=$uLutte_i1?>],
				['TDF',  <?=$uLutte_i2+$uLutte_i3?>]
			]);

			var chart = new google.visualization.PieChart(document.getElementById('taart'));
				chart.draw(data);
			}
    </script>
    <div id="taart" style="width: 100%; height: 400px;"></div>
</div>
                          