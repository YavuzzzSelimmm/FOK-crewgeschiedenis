<?php include("content/date.php"); ?>
<div class="span12 main-column">
	<h1><strong>Maisnon</strong> <small>134410</small></h1>
    <div class="row show-grid team-member">                                    
		<div class="spanUI photo">
			<div class="bordered-img"><?=$ui_Maisnon?></div>
		</div>
        
		<div class="span6">
            <h4>7 november 2005</h4>
            <p class="experience"><strong><a href="http://forum.fok.nl/user/profile/134410" target="blank_">FOK!profiel</a></strong></p>
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
		  <td><?=$ONZ?></td>
		  <td><a href="http://forum.fok.nl/topic/1076585" target="_blank">18  sep 2007</a></td>
		  <td><a href="http://forum.fok.nl/topic/1123167" target="_blank">04 feb 2008</a></td>
		  <td><?=$uMaisnon_i1;?> dagen</td>
		</tr>
		<tr>
		  <td><?=++$t?></td>
		  <td><?=$EXA?> <small>(2012)</small></td>
		  <td><a href="http://forum.fok.nl/topic/1794736" target="_blank">26 mar 2012</a></td>
		  <td><a href="http://forum.fok.nl/topic/1842255" target="_blank">10 jul 2012</a></td>
		  <td><?=$uMaisnon_i2;?> dagen</td>
		</tr>
		<tr>
		  <td><?=++$t?></td>
		  <td><?=$EXA?> <small>(2013)</small></td>
		  <td><a href="http://forum.fok.nl/topic/1953826" target="_blank">01 apr 2013</a></td>
		  <td><a href="http://forum.fok.nl/topic/1999124" target="_blank">22 jul 2013</a></td>
		  <td><?=$uMaisnon_i3;?> dagen</td>
		</tr>
		<tr>
		  <td></td>
		  <td></td>
		  <td></td>
		  <td style="text-align: right;"><code>Totaal:</code></td>
		  <td><code><?=$uMaisnon_total;?> dagen</code></td>
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
					[ '1', 'ONZ', new Date(2007, 08, 18), new Date(2008, 01, 04) ],
					[ '2', 'EXA', new Date(2012, 02, 26), new Date(2012, 06, 10) ],
					[ '2', 'EXA', new Date(2013, 03, 01), new Date(2013, 06, 22) ]]);

			
					
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
					[ ' ', 'Maisnon', new Date(2005, 10, 07), new Date() ],
					[ '1', 'ONZ', new Date(2007, 08, 18), new Date(2008, 01, 04) ],
					[ '2', 'EXA', new Date(2012, 02, 26), new Date(2012, 06, 10) ],
					[ '2', 'EXA', new Date(2013, 03, 01), new Date(2013, 06, 22) ]]);

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
				['ONZ',  <?=$uMaisnon_i1?>],
				['EXA',  <?=$uMaisnon_i2+$uMaisnon_i3?>]
			]);

			var chart = new google.visualization.PieChart(document.getElementById('taart'));
				chart.draw(data);
			}
    </script>
    <div id="taart" style="width: 100%; height: 400px;"></div>
</div>
                          