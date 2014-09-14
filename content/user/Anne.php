<?php include("content/date.php");?>
<div class="span12 main-column">
	<h1><strong>Anne</strong> <small>50937</small></h1>
    <div class="row show-grid team-member">                                    
		<div class="spanUI photo">
			<div class="bordered-img"><?=$ui_Anne?></div>
		</div>
        
		<div class="span6">
            <h4>18 maart 2003</h4>
            <p class="experience"><strong><a href="http://forum.fok.nl/user/profile/50937" target="blank_">FOK!profiel</a></strong></p>
			<br />
		</div>
	</div>
	
	<div class="text-divider5"><span></span></div>
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
		  <td><?=++$t?></td>
		  <td><?=$PUB?></td>
		  <td><a href="http://forum.fok.nl/topic/741189" target="_blank">17 aug 2005</a></td>
		  <td><a href="http://forum.fok.nl/topic/815978" target="_blank">13 feb 2006</a></td>
		  <td><?=$uAnne_i1;?> dagen</td>
		</tr>
		<tr>
		  <td><?=++$t?></td>
		  <td><?=$SES?></td>
		  <td><a href="http://forum.fok.nl/topic/799500" target="_blank">04 jan 2006</a></td>
		  <td><a href="http://forum.fok.nl/topic/815978" target="_blank">13 feb 2006</a></td>
		  <td><?=$uAnne_i2;?> dagen</td>
		</tr>
		<tr>
		  <td><?=++$t?></td>
		  <td><?=$FF?></td>
		  <td><a href="http://forum.fok.nl/topic/895861" target="_blank">08 aug 2006</a></td>
		  <td><a href="http://forum.fok.nl/topic/980006" target="_blank">11 feb 2007</a></td>
		  <td><?=$uAnne_i3;?> dagen</td>
		</tr>
		<tr>
		  <td><?=++$t?></td>
		  <td><?=$BH?></td>
		  <td><a href="http://forum.fok.nl/topic/945385" target="_blank">23 nov 2006</a></td>
		  <td><a href="http://forum.fok.nl/topic/980006" target="_blank">11 feb 2007</a></td>
		  <td><?=$uAnne_i4;?> dagen</td>
		</tr>
		<tr>
		  <td><?=++$t?></td>
		  <td><?=$GAM?></td>
		  <td><a href="http://forum.fok.nl/topic/1001877" target="_blank">28 mar 2007</a></td>
		  <td><a href="http://forum.fok.nl/topic/1047016" target="_blank">03 jul 2007</a></td>
		  <td><?=$uAnne_i5;?> dagen</td>
		</tr>
		<tr class="success">
		  <td><?=++$t?></td>
		  <td><strong><?=$PTA?></strong></td>
		  <td><a href="http://forum.fok.nl/topic/1377885" target="_blank">09 dec 2009</a></td>
		  <td>heden</td>
		  <td><?=$uAnne_i6;?> dagen</td>
		</tr>
		<tr>
		  <td><?=++$t?></td>
		  <td><?=$KAA?></td>
		  <td><a href="http://forum.fok.nl/topic/1485482" target="_blank">29 jun 2010</a></td>
		  <td><a href="http://forum.fok.nl/topic/1520885" target="_blank">30 aug 2010</a></td>
		  <td><?=$uAnne_i7;?> dagen</td>
		</tr>
		<tr>
		  <td><?=++$t?></td>
		  <td><?=$REV?></td>
		  <td><a href="http://forum.fok.nl/topic/1589690" target="_blank">11 jan 2011</a></td>
		  <td><a href="http://forum.fok.nl/topic/1767237" target="_blank">19 jan 2012</a></td>
		  <td><?=$uAnne_i8;?> dagen</td>
		</tr>
		<tr>
		  <td></td>
		  <td></td>
		  <td></td>
		  <td style="text-align: right;"><code>Totaal:</code></td>
		  <td><code><?=$uAnne_total;?> dagen</td>
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
		<tr>
		  <td><?=++$t?></td>
		  <td>PR</td>
		  <td><a href="http://forum.fok.nl/topic/1677464" target="_blank">03 jul 2011</a></td>
		  <td><a href="http://forum.fok.nl/topic/1754989" target="_blank">22 dec 2011</a></td>
		  <td><?=$uAnne_fi1;?> dagen</td>
		</tr>
		<tr class="success">
		  <td><?=++$t?></td>
		  <td><b>PR</b></td>
		  <td><a href="http://forum.fok.nl/topic/2040414" target="_blank">08 nov 2013</a></td>
		  <td>heden</td>
		  <td><?=$uAnne_fi2;?> dagen</td>
		</tr>
	  </tbody>
	</table>	
		<div class="text-divider5"><span></span></div>

		<ul class="nav nav-tabs" id="myTab">
			<li class="active"><a data-toggle="tab" href="#user">User</a></li>
			<li class=""><a data-toggle="tab" href="#fok">FOK!</a></li>
		</ul>
		<div class="tab-content" id="myTabContent" style="width: 100%; height: 575px;">		
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
					[ '1', 'PUB', new Date(2005, 07, 17), new Date(2006, 01, 13) ],
					[ '2', 'SES', new Date(2005, 12, 04), new Date(2006, 01, 13) ],
					[ '3', 'F&F', new Date(2006, 07, 08), new Date(2007, 01, 11) ],
					[ '4', 'B&H', new Date(2006, 10, 23), new Date(2007, 01, 11) ],
					[ '5', 'GAM', new Date(2007, 02, 28), new Date(2007, 06, 03) ],
					[ '6', 'PTA', new Date(2009, 11, 09), new Date() ],
					[ '7', 'KAA', new Date(2010, 05, 29), new Date(2010, 07, 30) ],
					[ '8', 'REV', new Date(2010, 12, 11), new Date(2011, 12, 19) ],
					[ 'PR', 'PR', new Date(2011, 06, 03), new Date(2011, 11, 22) ],
					[ 'PR', 'PR', new Date(2013, 10, 08), new Date() ]]);
			
				 var options = {
					height: 450
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
					[ ' ', 'Anne', new Date(2003, 02, 18), new Date() ],
					[ '1', 'PUB', new Date(2005, 07, 17), new Date(2006, 01, 13) ],
					[ '2', 'SES', new Date(2005, 12, 04), new Date(2006, 01, 13) ],
					[ '3', 'F&F', new Date(2006, 07, 08), new Date(2007, 01, 11) ],
					[ '4', 'B&H', new Date(2006, 10, 23), new Date(2007, 01, 11) ],
					[ '5', 'GAM', new Date(2007, 02, 28), new Date(2007, 06, 03) ],
					[ '6', 'PTA', new Date(2009, 11, 09), new Date() ],
					[ '7', 'KAA', new Date(2010, 05, 29), new Date(2010, 07, 30) ],
					[ '8', 'REV', new Date(2010, 12, 11), new Date(2011, 12, 19) ],
					[ 'PR', 'PR', new Date(2011, 06, 03), new Date(2011, 11, 22) ],
					[ 'PR', 'PR', new Date(2013, 10, 08), new Date() ]]);

				 var options = {
					width: 940,
					height: 550
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
				['PUB',  <?=$uAnne_i1?>],
				['SES',  <?=$uAnne_i2?>],
				['F&F',  <?=$uAnne_i3?>],
				['B&H',  <?=$uAnne_i4?>],
				['GAM',  <?=$uAnne_i5?>],
				['PTA',  <?=$uAnne_i6?>],
				['KAA',  <?=$uAnne_i7?>],
				['REV',  <?=$uAnne_i8?>]
			]);

			var chart = new google.visualization.PieChart(document.getElementById('taart'));
				chart.draw(data);
			}
    </script>
    <div id="taart" style="width: 100%; height: 500px;"></div>
</div>
                          