<?php include("content/date.php"); ?>
<div class="span12 main-column">
	<h1><strong>Natalie</strong> <small>28442</small></h1>
    <div class="row show-grid team-member">                                    
		<div class="spanUI photo">
			<div class="bordered-img"><?=$ui_Natalie?></div>
		</div>
        
		<div class="span6">
            <h4>16 mei 2002</h4>
            <p class="experience"><strong><a href="http://forum.fok.nl/user/profile/28442" target="blank_">FOK!profiel</a></strong></p>
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
		  <td><?=$CH?></td>
		  <td><a href="http://forum.fok.nl/topic/365793" target="_blank">11 aug 2003</a></td>
		  <td>17 jun 2004</td>
		  <td><?=$uNatalie_i1;?> dagen</td>
		</tr>
		<tr>
		<td><?=++$t?></td>
		  <td><?=$CH?></td>
		  <td><a href="http://forum.fok.nl/topic/678330" target="_blank">16 mar 2005</a></td>
		  <td><a href="http://forum.fok.nl/topic/729450" target="_blank">19 jul 2005</a></td>
		  <td><?=$uNatalie_i2;?> dagen</td>
		</tr>
		<tr>
		<td><?=++$t?></td>
		  <td>Forum Admin</td>
		  <td><a href="http://forum.fok.nl/topic/718082" target="_blank">23 jun 2005</a></td>
		  <td><a href="http://forum.fok.nl/topic/818511" target="_blank">13 feb 2006</a></td>
		  <td><?=$uNatalie_i3;?> dagen</td>
		</tr>
		<tr>
		<td><?=++$t?></td>
		  <td><?=$CH?></td>
		  <td><a href="http://forum.fok.nl/topic/869993" target="_blank">12 jun 2006</a></td>
		  <td><a href="http://forum.fok.nl/topic/941316" target="_blank">15 nov 2006</a></td>
		  <td><?=$uNatalie_i4;?> dagen</td>
		</tr>
		<tr>
		<td><?=++$t?></td>
		  <td><?=$FEE?> <small>(2006)</small></td>
		  <td><a href="http://forum.fok.nl/topic/931177" target="_blank">25 okt 2006</a></td>
		  <td><a href="http://forum.fok.nl/topic/941316" target="_blank">15 nov 2006</a></td>
		  <td><?=$uNatalie_i5;?> dagen</td>
		</tr>
		<tr>
		<td><?=++$t?></td>
		  <td><?=$FEE?> <small>(2012)</small></td>
		  <td><a href="http://forum.fok.nl/topic/1888109" target="_blank">29 okt 2012</a></td>
		  <td><a href="http://forum.fok.nl/topic/1916523" target="_blank">06 jan 2013</a></td>
		  <td><?=$uNatalie_i6;?> dagen</td>
		</tr>
		<tr class="success">
		<td><?=++$t?></td>
		  <td><strong><?=$TRU?></strong></td>
		  <td><a href="http://forum.fok.nl/topic/1908411" target="_blank">19 dec 2012</a></td>
		  <td>heden</td>
		  <td><?=$uNatalie_i7;?> dagen</td>
		</tr>
		<tr>
		  <td></td>
		  <td></td>
		  <td></td>
		  <td style="text-align: right;"><code>Totaal:</code></td>
		  <td><code><?=$uNatalie_total;?> dagen</code></td>
		</tr>
	  </tbody>
	</table>
	
		<div class="text-divider5"><span></span></div>

		<ul class="nav nav-tabs" id="myTab">
			<li class="active"><a data-toggle="tab" href="#user">User</a></li>
			<li class=""><a data-toggle="tab" href="#fok">FOK!</a></li>
		</ul>
		<div class="tab-content" id="myTabContent" style="width: 100%; height: 325px;">		
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
					[ '1', 'C&H', new Date(2003, 07, 11), new Date(2004, 05, 17) ],
					[ '1', 'C&H', new Date(2005, 02, 16), new Date(2005, 06, 19) ],
					[ '3', 'Forum Admin', new Date(2005, 05, 23), new Date(2006, 01, 13) ],
					[ '1', 'C&H', new Date(2006, 05, 12), new Date(2006, 10, 15) ],
					[ '5', 'FEE', new Date(2006, 09, 25), new Date(2006, 10, 15) ],
					[ '5', 'FEE', new Date(2012, 09, 29), new Date(2012, 12, 06) ],
					[ '7', 'TRU', new Date(2012, 11, 19), new Date() ]]);

			
					
 				 chart.draw(dataTable, {height: 250});
				  
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
					[ ' ', 'Natalie', new Date(2002, 04, 16), new Date() ],
					[ '1', 'C&H', new Date(2003, 07, 11), new Date(2004, 05, 17) ],
					[ '1', 'C&H', new Date(2005, 02, 16), new Date(2005, 06, 19) ],
					[ '3', 'Forum Admin', new Date(2005, 05, 23), new Date(2006, 01, 13) ],
					[ '1', 'C&H', new Date(2006, 05, 12), new Date(2006, 10, 15) ],
					[ '5', 'FEE', new Date(2006, 09, 25), new Date(2006, 10, 15) ],
					[ '5', 'FEE', new Date(2012, 09, 29), new Date(2012, 12, 06) ],
					[ '7', 'TRU', new Date(2012, 11, 19), new Date() ]]);

				 var options = {
					width: 940,
					height: 300
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
				['C&H',  <?=$uNatalie_i1+$uNatalie_i2+$uNatalie_i4?>],
				['Forum Admin',  <?=$uNatalie_i3?>],
				['FEE',  <?=$uNatalie_i5+$uNatalie_i6?>],
				['TRU',  <?=$uNatalie_i7?>]
			]);

			var chart = new google.visualization.PieChart(document.getElementById('taart'));
				chart.draw(data);
			}
    </script>
    <div id="taart" style="width: 100%; height: 400px;"></div>
</div>
                          