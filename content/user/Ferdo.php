<?php include("content/date.php");?>
<div class="span12 main-column">
	<h1><strong>Ferdo</strong> <small>16943</small></h1>
    <div class="row show-grid team-member">                                    
		<div class="spanUI photo">
			<div class="bordered-img"><?=$ui_Ferdo?></div>
		</div>
        
		<div class="span6">
            <h4>6 oktober 2001</h4>
            <p class="experience"><strong><a href="http://forum.fok.nl/user/profile/16943" target="blank_">FOK!profiel</a></strong></p>
			<br />
		</div>
	</div>
	
	<div class="text-divider5"><span></span></div>
	<?php $t=0;?>
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
		  <td><?=$VKZ?> <small>(2010)</small></td>
		  <td><a href="http://forum.fok.nl/topic/1458126" target="_blank">14 mei 2010</a></td>
		  <td><a href="http://forum.fok.nl/topic/1544807" target="_blank">15 okt 2010</a></td>
		  <td><?=$uFerdo_i1;?> dagen</td>
		</tr>
		<tr>
		  <td><?=++$t;?></td>
		  <td><?=$VKZ?> <small>(2012)</small></td>
		  <td><a href="http://forum.fok.nl/topic/1807249" target="_blank">23 apr 2012</a></td>
		  <td><a href="http://forum.fok.nl/topic/1894165" target="_blank">13 nov 2012</a></td>
		  <td><?=$uFerdo_i2;?> dagen</td>
		</tr>
		<tr>
		  <td></td>
		  <td></td>
		  <td></td>
		  <td style="text-align: right;"><code>Totaal:</code></td>
		  <td><code><?=$uFerdo_total;?> dagen</code></td>
		</tr>
	  </tbody>
	</table>
	
	<?php $t=0;?>
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
		<tr>
		  <td><?=++$t;?></td>
		  <td>Redactie FP</td>
		  <td>22 nov 2004 </td>
		  <td>26 nov 2005 </td>
		  <td><?=$uFerdo_fi1;?> dagen</td>
		</tr>
		<tr>
		  <td><?=++$t;?></td>
		  <td>Co&ouml;rdinator Moderaties FP</td>
		  <td>26 nov 2005</td>
		  <td>20 sep 2006</td>
		  <td><?=$uFerdo_i2;?> dagen</td>
		</tr>
		<tr>
		  <td><?=++$t;?></td>
		  <td>Redactie FP</td>
		  <td>20 sep 2006</td>
		  <td>03 apr 2007</td>
		  <td><?=$uFerdo_fi3;?> dagen</td>
		</tr>
		<tr>
		  <td><?=++$t;?></td>
		  <td>Eindredactie FP</td>
		  <td>03 apr 2007</td>
		  <td>31 aug 2011</td>
		  <td><?=$uFerdo_fi4;?> dagen</td>
		</tr>
		<tr>
		  <td><?=++$t;?></td>
		  <td>Eindredactie FP</td>
		  <td>21 feb 2012</td>
		  <td>01 sep 2013</td>
		  <td><?=$uFerdo_fi5;?> dagen</td>
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
					[ 'RFP', 'Redactie FP', new Date(2004, 10, 22), new Date(2005, 10, 26) ],
					[ 'COM', 'Coordinator Moderaties FP', new Date(2005, 10, 26), new Date(2006, 08, 20) ],
					[ 'RFP', 'Redactie FP', new Date(2006, 08, 20), new Date(2007, 03, 03) ],
					[ 'ER', 'Eindredactie FP', new Date(2007, 03, 03), new Date(2011, 07, 31) ],
					[ '1', 'VKZ', new Date(2010, 04, 14), new Date(2010, 09, 15) ],
					[ 'ER', 'Eindredactie FP', new Date(2012, 01, 21), new Date(2013, 08, 01) ],
					[ '1', 'VKZ', new Date(2012, 03, 23), new Date(2012, 10, 13) ]]);


				var options = {
					width: 940,
					height: 250
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
					[ ' ', 'Ferdo', new Date(2001, 09, 06), new Date() ],
					[ 'RFP', 'Redactie FP', new Date(2004, 10, 22), new Date(2005, 10, 26) ],
					[ 'COM', 'Coordinator Moderaties FP', new Date(2005, 10, 26), new Date(2006, 08, 20) ],
					[ 'RFP', 'Redactie FP', new Date(2006, 08, 20), new Date(2007, 03, 03) ],
					[ 'ER', 'Eindredactie FP', new Date(2007, 03, 03), new Date(2011, 07, 31) ],
					[ '1', 'VKZ', new Date(2010, 04, 14), new Date(2010, 09, 15) ],
					[ 'ER', 'Eindredactie FP', new Date(2012, 01, 21), new Date(2013, 08, 01) ],
					[ '1', 'VKZ', new Date(2012, 03, 23), new Date(2012, 10, 13) ]]);

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
				['',0],	['',0], ['',0],
				['VKZ',  <?=$uFerdo_i1+$uFerdo_i2?>]
			]);

			var chart = new google.visualization.PieChart(document.getElementById('taart'));
				chart.draw(data);
			}
    </script>
    <div id="taart" style="width: 100%; height: 400px;"></div>
</div>
                          