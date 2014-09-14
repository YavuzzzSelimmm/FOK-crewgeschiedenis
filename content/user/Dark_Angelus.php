<?php include("content/date.php"); ?>
<div class="span12 main-column">
	<h1><strong>Dark_Angelus</strong> <small>132619</small></h1>
    <div class="row show-grid team-member">                                    
		<div class="spanUI photo">
			<div class="bordered-img"><?=$ui_Dark_Angelus?></div>
		</div>
        
		<div class="span6">
            <h4>13 oktober 2005</h4>
            <p class="experience"><strong><a href="http://forum.fok.nl/user/profile/132619" target="blank_">FOK!profiel</a></strong></p>
			<br />
		</div>
	</div>
	
	<div class="text-divider5"><span></span></div>
	<?php $t=0; ?>
	<h2>Forum</h2>
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
		  <td><?=$PUB?></td>
		  <td><a href="http://forum.fok.nl/topic/909723" target="_blank">06 sep 2006</a></td>
		  <td><a href="http://forum.fok.nl/topic/1130328" target="_blank">28 feb 2008</a></td>
		  <td><?=$uDark_Angelus_i1;?> dagen</td>
		</tr>
		<tr>
		  <td><?=++$t;?></td>
		  <td><?=$FEE?> <small>(2006)</small></td>
		  <td><a href="http://forum.fok.nl/topic/944230" target="_blank">21 nov 2006</a></td>
		  <td><a href="http://forum.fok.nl/topic/964634" target="_blank">07 jan 2007</a></td>
		  <td><?=$uDark_Angelus_i2;?> dagen</td>
		</tr>
		<tr class="success">
		  <td><?=++$t;?></td>
		  <td><strong><?=$FOT?></strong></td>
		  <td><a href="http://forum.fok.nl/topic/1982990" target="_blank">11 jun 2013</a></td>
		  <td>heden</td>
		  <td><?=$uDark_Angelus_i3;?> dagen</td>
		</tr>		
		<tr class="success">
		  <td><?=++$t;?></td>
		  <td><strong><?=$LWL?></strong> <small>(2013)</small></td>
		  <td><a href="http://forum.fok.nl/topic/1994244" target="_blank">09 jul 2013</a></td>
		  <td>heden</td>
		  <td><?=$uDark_Angelus_i4;?> dagen</td>
		</tr>
		<tr>
		  <td></td>
		  <td></td>
		  <td></td>
		  <td style="text-align: right;"><code>Totaal:</code></td>
		  <td><code><?=$uDark_Angelus_total;?> dagen</code></td>
		</tr>
	  </tbody>
	</table>
	
	<?php $t=0; ?>
	<h2>FOK!</h2>
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
		<tr class="success">
		  <td><?=++$t;?></td>
		  <td><strong>FOK!fotograaf</strong></td>
		  <td>14 apr 2010</td>
		  <td>heden</td>
		  <td><?=$uDark_Angelus_fi1;?> dagen</td>
		</tr>
	  </tbody>
	</table>
	
		<div class="text-divider5"><span></span></div>

		<ul class="nav nav-tabs" id="myTab">
			<li class="active"><a data-toggle="tab" href="#user">User</a></li>
			<li class=""><a data-toggle="tab" href="#fok">FOK!</a></li>
		</ul>
		<div class="tab-content" id="myTabContent" style="width: 100%; height: 375px;">		
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
					[ '1', 'PUB', new Date(2006, 08, 06), new Date(2008, 01, 28) ],
					[ '2', 'FEE', new Date(2006, 10, 21), new Date(2006, 12, 07) ],
					[ 'Fg', 'FOK!fotograaf', new Date(2010, 03, 14), new Date() ],
					[ '3', 'FOT', new Date(2013, 05, 11), new Date() ],
					[ '4', 'LWL', new Date(2013, 06, 09), new Date() ]]);

			
				 var options = {
					height: 325
				 };
					
 				 chart.draw(dataTable, options);
				  
				  
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
					[ ' ', 'Dark_Angelus', new Date(2005, 09, 13), new Date() ],
					[ '1', 'PUB', new Date(2006, 08, 06), new Date(2008, 01, 28) ],
					[ '2', 'FEE', new Date(2006, 10, 21), new Date(2006, 12, 07) ],
					[ 'Fg', 'FOK!fotograaf', new Date(2010, 03, 14), new Date() ],
					[ '3', 'FOT', new Date(2013, 05, 11), new Date() ],
					[ '4', 'LWL', new Date(2013, 06, 09), new Date() ]]);

				 var options = {
					width: 940,
					height: 350
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
				['PUB',  <?=$uDark_Angelus_i1?>],
				['FEE',  <?=$uDark_Angelus_i2?>],['',0],
				['FOT',  <?=$uDark_Angelus_i3?>],
				['LWL',  <?=$uDark_Angelus_i4?>]
			]);

			var chart = new google.visualization.PieChart(document.getElementById('taart'));
				chart.draw(data);
			}
    </script>
    <div id="taart" style="width: 100%; height: 500px;"></div>
</div>
                          