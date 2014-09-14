<?php include("content/date.php"); ?>
<div class="span12 main-column">
	<h1><strong>Lavenderr</strong> <small>249559</small></h1>
    <div class="row show-grid team-member">                                    
		<div class="spanUI photo">
			<div class="bordered-img"><?=$ui_Lavenderr?></div>
		</div>
        
		<div class="span6">
            <h4>22 maart 2009</h4>
            <p class="experience"><strong><a href="http://forum.fok.nl/user/profile/249559" target="blank_">FOK!profiel</a></strong></p>
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
		  <td><?=$BNW?></td>
		  <td><a href="http://forum.fok.nl/topic/1381978" target="_blank">18 dec 2009</a></td>
		  <td><a href="http://forum.fok.nl/topic/1669093" target="_blank">17 jun 2011</a></td>
		  <td><?=$uLavenderr_i1;?> dagen</td>
		</tr>
		<tr>
		  <td><?=++$t?></td>
		  <td><?=$VKZ?></td>
		  <td><a href="http://forum.fok.nl/topic/1419725" target="_blank">02 mar 2010</a></td>
		  <td><a href="http://forum.fok.nl/topic/1544807" target="_blank">15 okt 2010</a></td>
		  <td><?=$uLavenderr_i2;?> dagen</td>
		</tr>
		<tr>
		  <td><?=++$t?></td>
		  <td><?=$TRU?></td>
		  <td><a href="http://forum.fok.nl/topic/1506658" target="_blank">03 aug 2010</a></td>
		  <td><a href="http://forum.fok.nl/topic/1669093" target="_blank">17 jun 2011</a></td>
		  <td><?=$uLavenderr_i3;?> dagen</td>
		</tr>
		<tr class="success">
		  <td><?=++$t?></td>
		  <td><strong><?=$BNW?></strong></td>
		  <td><a href="http://forum.fok.nl/topic/1829708" target="_blank">13 jun 2012</a></td>
		  <td>heden</td>
		  <td><?=$uLavenderr_i4;?> dagen</td>
		</tr>
		<tr>
		  <td><?=++$t?></td>
		  <td><?=$RLS?></td>
		  <td><a href="http://forum.fok.nl/topic/1955631" target="_blank">05 apr 2013</a></td>
		  <td>14 jun 2013</td>
		  <td><?=$uLavenderr_i5;?> dagen</td>
		</tr>
		<tr>
		  <td></td>
		  <td></td>
		  <td></td>
		  <td style="text-align: right;"><code>Totaal:</code></td>
		  <td><code><?=$uLavenderr_total;?> dagen</code></td>
		</tr>
	  </tbody>
	</table>
	
		<div class="text-divider5"><span></span></div>

		<ul class="nav nav-tabs" id="myTab">
			<li class="active"><a data-toggle="tab" href="#user">User</a></li>
			<li class=""><a data-toggle="tab" href="#fok">FOK!</a></li>
		</ul>
		<div class="tab-content" id="myTabContent" style="width: 100%; height: 340px;">		
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
					[ '1', 'BNW', new Date(2009, 11, 18), new Date(2011, 05, 17) ],
					[ '2', 'VKZ', new Date(2010, 02, 02), new Date(2010, 09, 15) ],
					[ '3', 'TRU', new Date(2010, 07, 03), new Date(2011, 05, 17) ],
					[ '1', 'BNW', new Date(2012, 05, 13), new Date() ],
					[ '4', 'RLS', new Date(2013, 03, 05), new Date(2013, 05, 14) ]]);

			
					
 				 chart.draw(dataTable, {height: 225});
				  
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
					[ ' ', 'Lavenderr', new Date(2009, 02, 22), new Date() ],
					[ '1', 'BNW', new Date(2009, 11, 18), new Date(2011, 05, 17) ],
					[ '2', 'VKZ', new Date(2010, 02, 02), new Date(2010, 09, 15) ],
					[ '3', 'TRU', new Date(2010, 07, 03), new Date(2011, 05, 17) ],
					[ '1', 'BNW', new Date(2012, 05, 13), new Date() ],
					[ '4', 'RLS', new Date(2013, 03, 05), new Date(2013, 05, 14) ]]);

				 var options = {
					width: 940,
					height: 315
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
				['BNW',  <?=$uLavenderr_i1+$uLavenderr_i4?>],
				['VKZ',  <?=$uLavenderr_i2?>],
				['TRU',  <?=$uLavenderr_i3?>],
				['RLS',  <?=$uLavenderr_i5?>],
			]);

			var chart = new google.visualization.PieChart(document.getElementById('taart'));
				chart.draw(data);
			}
    </script>
    <div id="taart" style="width: 100%; height: 400px;"></div>
</div>
                          