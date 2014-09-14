<?php include("content/date.php");?>
<div class="span12 main-column">
	<h1><strong>Bart</strong> <small>65252</small></h1>
    <div class="row show-grid team-member">                                    
		<div class="spanUI photo">
			<div class="bordered-img"><?=$ui_Bart?></div>
		</div>
        
		<div class="span6">
            <h4>24 aug 2003</h4>
            <p class="experience"><strong><a href="http://forum.fok.nl/user/profile/65252" target="blank_">FOK!profiel</a></strong></p>
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
		  <td><?=$GAM?></td>
		  <td><a href="http://forum.fok.nl/topic/1254304" target="blank_">12 feb 2009</td>
		  <td><a href="http://forum.fok.nl/topic/1292578" target="blank_">17 mei 2009</a></td>
		  <td><?=$uBart_i1?> dagen</td>
		</tr>
		<tr class="success"> 
		  <td><?=++$t;?></td>
		  <td><strong><?=$MEN?></strong></td>
		  <td><a href="http://forum.fok.nl/topic/1690432" target="blank_">31 jul 2011</a></td>
		  <td>heden</td>
		  <td><?=$uBart_i2?> dagen</td>
		</tr>
		<tr class="success">
		  <td><?=++$t;?></td>
		  <td><strong><?=$DIG?></strong></td>
		  <td><a href="http://forum.fok.nl/topic/1739090" target="blank_">17 nov 2011</a></td>
		  <td>heden</td>
		  <td><?=$uBart_i3?> dagen</td>
		</tr>
		<tr>
		  <td></td>
		  <td></td>
		  <td></td>
		  <td style="text-align: right;"><code>Totaal:</code></td>
		  <td><code><?=$uBart_total?> dagen</code></td>
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
		  <td><?=++$t;?></td>
		  <td>Redactie Games</td>
		  <td>18 aug 2008</td>
		  <td><a href="http://forum.fok.nl/topic/1292578" target="_blank">17 mei 2009</a></td>
		  <td><?=$uBart_fi1?> dagen</td>
		</tr>
		<tr class="success">
		  <td><?=++$t;?></td>
		  <td>PR</td>
		  <td><a href="http://forum.fok.nl/topic/1750391" target="_blank">12 dec 2011</a></td>
		  <td>heden</td>
		  <td><?=$uBart_fi2?> dagen</td>
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
					[ 'RG', 'Redactie Games', new Date(2008, 07, 18), new Date(2009, 04, 17)],
					[ '1', 'GAM', new Date(2009, 01, 12), new Date(2009, 04, 17) ],
					[ '2', 'MEN', new Date(2011, 06, 31), new Date()],
					[ '3', 'DIG', new Date(2011, 10, 17), new Date()],
					[ 'PR', 'PR', new Date(2011, 11, 12), new Date()]]);

					var options = {
						height: 300
					};

 				 chart.draw(dataTable, options);
				  
				}
				</script>

				<div id="u" style="width: 100%;"></div>
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
					[ ' ', 'Bart', new Date(2003, 07, 24), new Date() ],
					[ 'RG', 'Redactie Games', new Date(2008, 07, 18), new Date(2009, 04, 17)],
					[ '1', 'GAM', new Date(2009, 01, 12), new Date(2009, 04, 17) ],
					[ '2', 'MEN', new Date(2011, 06, 31), new Date()],
					[ '3', 'DIG', new Date(2011, 10, 17), new Date()],
					[ 'PR', 'PR', new Date(2011, 11, 12), new Date()]]);


					var options = {
						width: 940,
						height: 350
					};

					  chart.draw(dataTable, options);
					}
				</script>

				<div id="f" style="width: 100%;"></div>
			</div>
		</div>
		
		<div class="text-divider5"><span></span></div>
		
		<script type="text/javascript" src="https://www.google.com/jsapi"></script>
		<script type="text/javascript">
			google.load("visualization", "1", {packages:["corechart"]});
			google.setOnLoadCallback(drawChart);
			function drawChart() {
			var data = google.visualization.arrayToDataTable([
				['Functie', 'Dagen'],['',0],
				['GAM',  <?=$uBart_i1?>],
				['MEN',  <?=$uBart_i2?>],
				['DIG',  <?=$uBart_i3?>]
			]);

			var chart = new google.visualization.PieChart(document.getElementById('taart'));
				chart.draw(data);
			}
    </script>
    <div id="taart" style="width: 100%; height: 400px;"></div>
</div>
                          