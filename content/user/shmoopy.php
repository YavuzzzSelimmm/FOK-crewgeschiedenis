<?php include("content/date.php"); ?>
<div class="span12 main-column">
	<h1><strong>shmoopy</strong> <small>11324</small></h1>
    <div class="row show-grid team-member">                                    
		<div class="spanUI photo">
			<div class="bordered-img"><?=$ui_shmoopy?></div>
		</div>
        
		<div class="span6">
            <h4>5 april 2001</h4>
            <p class="experience"><strong><a href="http://forum.fok.nl/user/profile/11324" target="blank_">FOK!profiel</a></strong></p>
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
		  <td><a href="http://forum.fok.nl/topic/116268" target="_blank">11 mar 2002</a></td>
		  <td><a href="http://forum.fok.nl/topic/274956" target="_blank">24 feb 2004</a></td>
		  <td><?=$ushmoopy_i1;?> dagen</td>
		</tr>
		<tr>
		  <td><?=++$t?></td>
		  <td><?=$LIF?></td>
		  <td><a href="http://forum.fok.nl/topic/329728" target="_blank">04 jun 2003</a></td>
		  <td><a href="http://forum.fok.nl/topic/478577" target="_blank">29 jan 2004</a></td>
		  <td><?=$ushmoopy_i2;?> dagen</td>
		</tr>
		<tr>
		  <td><?=++$t?></td>
		  <td><?=$CUL?></td>
		  <td><a href="http://forum.fok.nl/topic/473784" target="_blank">23 jan 2004</a></td>
		  <td><a href="http://forum.fok.nl/topic/658380" target="_blank">11 jan 2005</a></td>
		  <td><?=$ushmoopy_i3;?> dagen</td>
		</tr>
		<tr class="success">
		  <td><?=++$t?></td>
		  <td><strong>Forum Admin</strong></td>
		  <td><a href="http://forum.fok.nl/topic/654510" target="_blank">31 dec 2004</a></td>
		  <td>heden</td>
		  <td><?=$ushmoopy_i4;?> dagen</td>
		</tr>
		<tr>
		  <td><?=++$t?></td>
		  <td><?=$DGK?></td>
		  <td><a href="http://forum.fok.nl/topic/937103" target="_blank">06 nov 2006</a></td>
		  <td>29 jan 2007</td>
		  <td><?=$ushmoopy_i5;?> dagen</td>
		</tr>
		<tr>
		  <td></td>
		  <td></td>
		  <td></td>
		  <td style="text-align: right;"><code>Totaal:</code></td>
		  <td><code><?=$ushmoopy_total;?> dagen</code></td>
		</tr>
	  </tbody>
	</table>
	
		<div class="text-divider5"><span></span></div>

		<ul class="nav nav-tabs" id="myTab">
			<li class="active"><a data-toggle="tab" href="#user">User</a></li>
			<li class=""><a data-toggle="tab" href="#fok">FOK!</a></li>
		</ul>
		<div class="tab-content" id="myTabContent" style="width: 100%; height: 365px;">		
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
					[ '1', 'R&P', new Date(2002, 02, 11), new Date(2004, 01, 24) ],
					[ '2', 'LIF', new Date(2003, 05, 04), new Date(2003, 12, 29) ],
					[ '3', 'CUL', new Date(2003, 12, 23), new Date(2004, 12, 11) ],
					[ 'FA', 'Forum Admin', new Date(2004, 11, 31), new Date() ],
					[ '5', 'DGK', new Date(2006, 10, 06), new Date(2006, 12, 29) ]]);

			
					
 				 chart.draw(dataTable, {height: 275});
				  
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
					[ ' ', 'shmoopy', new Date(2001, 03, 05), new Date() ],
					[ '1', 'R&P', new Date(2002, 02, 11), new Date(2004, 01, 24) ],
					[ '2', 'LIF', new Date(2003, 05, 04), new Date(2003, 12, 29) ],
					[ '3', 'CUL', new Date(2003, 12, 23), new Date(2004, 12, 11) ],
					[ 'FA', 'Forum Admin', new Date(2004, 11, 31), new Date() ],
					[ '5', 'DGK', new Date(2006, 10, 06), new Date(2006, 12, 29) ]]);
					
				 var options = {
					width: 940,
					height: 340
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
				['R&P',  <?=$ushmoopy_i1?>],
				['LIF',  <?=$ushmoopy_i2?>],
				['CUL',  <?=$ushmoopy_i3?>],
				['Forum Admin',  <?=$ushmoopy_i4?>],
				['DGK',  <?=$ushmoopy_i5?>],
			]);

			var chart = new google.visualization.PieChart(document.getElementById('taart'));
				chart.draw(data);
			}
    </script>
    <div id="taart" style="width: 100%; height: 500px;"></div>
</div>
                          