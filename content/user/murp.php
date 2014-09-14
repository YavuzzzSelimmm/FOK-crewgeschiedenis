<?php include("content/date.php"); ?>
<div class="span12 main-column">
	<h1><strong>murp</strong> <small>58651</small></h1>
    <div class="row show-grid team-member">                                    
		<div class="spanUI photo">
			<div class="bordered-img"><?=$ui_murp?></div>
		</div>
        
		<div class="span6">
            <h4>21 juni 2003</h4>
            <p class="experience"><strong><a href="http://forum.fok.nl/user/profile/58651" target="blank_">FOK!profiel</a></strong></p>
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
		  <td><a href="http://forum.fok.nl/topic/1087767" target="_blank">20 okt 2007</a></td>
		  <td><a href="http://forum.fok.nl/topic/1782650" target="_blank">26 feb 2012</a></td>
		  <td><?=$umurp_i1;?> dagen</td>
		</tr>
		<tr>
		  <td><?=++$t?></td>
		  <td><?=$FOT?></td>
		  <td><a href="http://forum.fok.nl/topic/1782650" target="_blank">26 feb 2012</a></td>
		  <td>12 feb 2013</td>
		  <td><?=$umurp_i2;?> dagen</td>
		</tr>
		<tr class="success">
		  <td><?=++$t?></td>
		  <td><strong><?=$ONZ?></strong></td>
		  <td><a href="http://forum.fok.nl/topic/1921052" target="_blank">16 jan 2013</a></td>
		  <td><a href="http://forum.fok.nl/topic/2017079" target="_blank">06 sep 2013</a></td>
		  <td><?=$umurp_i3;?> dagen</td>
		</tr>
		<tr>
		  <td></td>
		  <td></td>
		  <td></td>
		  <td style="text-align: right;"><code>Totaal:</code></td>
		  <td><code><?=$umurp_total;?> dagen</code></td>
 </td>
		</tr>
	  </tbody>
	</table>
	
		<div class="text-divider5"><span></span></div>

		<ul class="nav nav-tabs" id="myTab">
			<li class="active"><a data-toggle="tab" href="#user">User</a></li>
			<li class=""><a data-toggle="tab" href="#fok">FOK!</a></li>
		</ul>
		<div class="tab-content" id="myTabContent" style="width: 100%; height: 250px;">		
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
					[ '1', 'ONZ', new Date(2007, 09, 20), new Date(2012, 01, 26) ],
					[ '2', 'FOT', new Date(2012, 01, 26), new Date(2013, 01, 12) ],
					[ '1', 'ONZ', new Date(2012, 12, 16), new Date(2013, 08, 06) ]]);

			
					
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
					[ ' ', 'murp', new Date(2003, 05, 21), new Date() ],
					[ '1', 'ONZ', new Date(2007, 09, 20), new Date(2012, 01, 26) ],
					[ '2', 'FOT', new Date(2012, 01, 26), new Date(2013, 01, 12) ],
					[ '1', 'ONZ', new Date(2012, 12, 16), new Date(2013, 08, 06) ]]);
					
				 var options = {
					width: 940,
					height: 225
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
				['ONZ',  <?=$umurp_i1+$umurp_i3?>],
				['FOT',  <?=$umurp_i2?>]
			]);

			var chart = new google.visualization.PieChart(document.getElementById('taart'));
				chart.draw(data);
			}
    </script>
    <div id="taart" style="width: 100%; height: 400px;"></div>
</div>
                          