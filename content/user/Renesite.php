<?php include("content/date.php"); ?>
<div class="span12 main-column">
	<h1><strong>Renesite</strong> <small>72712</small></h1>
    <div class="row show-grid team-member">                                    
		<div class="spanUI photo">
			<div class="bordered-img"><?=$ui_Renesite?></div>
		</div>
        
		<div class="span6">
            <h4>30 oktober 2003</h4>
            <p class="experience"><strong><a href="http://forum.fok.nl/user/profile/72712" target="blank_">FOK!profiel</a></strong></p>
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
		  <td><?=$SES?></td>
		  <td><a href="http://forum.fok.nl/topic/756153" target="_blank">19 sep 2005</a></td>
		  <td><a href="http://forum.fok.nl/topic/968575" target="_blank">16 jan 2007</a></td>
		  <td><?=$uRenesite_i1;?> dagen</td>
		</tr>
		<tr>
		  <td><?=++$t?></td>
		  <td><?=$PUB?></td>
		  <td><a href="http://forum.fok.nl/topic/818669" target="_blank">14 feb 2006</a></td>
		  <td><a href="http://forum.fok.nl/topic/841256" target="_blank">07 apr 2006</a></td>
		  <td><?=$uRenesite_i2;?> dagen</td>
		</tr>
		<tr>
		  <td><?=++$t?></td>
		  <td><?=$EXA?></td>
		  <td><a href="http://forum.fok.nl/topic/1004556" target="_blank">02 apr 2007</a></td>
		  <td><a href="http://forum.fok.nl/topic/1046278" target="_blank">01 jul 2007</a></td>
		  <td><?=$uRenesite_i3;?> dagen</td>
		</tr>
		<tr>
		  <td><?=++$t?></td>
		  <td><?=$SES?></td>
		  <td><a href="http://forum.fok.nl/topic/1240644" target="_blank">10 jan 2009</a></td>
		  <td><a href="http://forum.fok.nl/topic/1744513" target="_blank">29 nov 2011</a></td>
		  <td><?=$uRenesite_i4;?> dagen</td>
		</tr>
		<tr>
		  <td><?=++$t?></td>
		  <td><?=$VA?></td>
		  <td><a href="http://forum.fok.nl/topic/1740419" target="_blank">23 nov 2011</a></td>
		  <td><a href="http://forum.fok.nl/topic/1930852" target="_blank">05 feb 2013</a></td>
		  <td><?=$uRenesite_i5;?> dagen</td>
		</tr>
		<tr>
		  <td></td>
		  <td></td>
		  <td></td>
		  <td style="text-align: right;"><code>Totaal:</code></td>
		  <td><code><?=$uRenesite_total;?> dagen</code></td>
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
					[ '1', 'SES', new Date(2005, 08, 19), new Date(2006, 12, 16) ],
					[ '2', 'PUB', new Date(2006, 01, 14), new Date(2006, 03, 07) ],
					[ '3', 'EXA', new Date(2007, 03, 02), new Date(2007, 06, 01) ],
					[ '1', 'SES', new Date(2008, 12, 10), new Date(2011, 10, 29) ],
					[ '5', 'V&A', new Date(2011, 10, 23), new Date(2013, 01, 05) ]]);

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
					[ ' ', 'Renesite', new Date(2003, 09, 30), new Date() ],
					[ '1', 'SES', new Date(2005, 08, 19), new Date(2006, 12, 16) ],
					[ '2', 'PUB', new Date(2006, 01, 14), new Date(2006, 03, 07) ],
					[ '3', 'EXA', new Date(2007, 03, 02), new Date(2007, 06, 01) ],
					[ '1', 'SES', new Date(2008, 12, 10), new Date(2011, 10, 29) ],
					[ '5', 'V&A', new Date(2011, 10, 23), new Date(2013, 01, 05) ]]);

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
				['SES',  <?=$uRenesite_i1+$uRenesite_i4?>],
				['PUB',  <?=$uRenesite_i2?>],
				['EXA',  <?=$uRenesite_i3?>],
				['V&A',  <?=$uRenesite_i5?>],
			]);

			var chart = new google.visualization.PieChart(document.getElementById('taart'));
				chart.draw(data);
			}
    </script>
    <div id="taart" style="width: 100%; height: 500px;"></div>
</div>
                          