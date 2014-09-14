<?php include("content/date.php");?>
<div class="span12 main-column">
	<h1><strong>Mike</strong> <small>1212</small></h1>
    <div class="row show-grid team-member">                                    
		<div class="spanUI photo">
			<div class="bordered-img"><?=$ui_Mike?></div>
		</div>
        
		<div class="span6">
            <h4>24 okt 1999</h4>
            <p class="experience"><strong><a href="http://forum.fok.nl/user/profile/1212" target="blank_">FOK!profiel</a></strong></p>
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
		<tr class="success">
		  <td><?=++$t?></td>
		  <td><strong><?=$TV?></strong></td>
		  <td><a href="http://forum.fok.nl/topic/165826" target="blank_">21 jun 2002</td>
		  <td>heden</td>
		  <td><?=$uMike_i1;?> dagen</td>
		</tr>
		<tr>
		  <td><?=++$t?></td>
		  <td>Forum Admin</td>
		  <td><a href="http://forum.fok.nl/topic/1216636" target="blank_">05 nov 2008</td>
		  <td><a href="http://forum.fok.nl/topic/1362333" target="blank_">01 nov 2009</td>
		  <td><?=$uMike_i2;?> dagen</td>
		</tr>
		<tr>
		  <td></td>
		  <td></td>
		  <td></td>
		  <td style="text-align: right;"><code>Totaal:</code></td>
		  <td><code><?=$uMike_total;?> dagen</code></td>
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
					[ '1', 'TV', new Date(2002, 05, 21), new Date() ],
					[ '2', 'FA', new Date(2008, 10, 05), new Date(2009, 10, 01)]]);

					var options = {
						height: 200
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
					[ ' ', 'Mike', new Date(1999, 09, 24), new Date() ],
					[ '1', 'TV', new Date(2002, 05, 21), new Date() ],
					[ '2', 'FA', new Date(2008, 10, 05), new Date(2009, 10, 01)]]);


					var options = {
						width: 940,
						height: 215
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
				['Functie', 'Dagen'],
				['TV',  		<?=$uMike_i1?>],
				['Forum Admin', <?=$uMike_i2?>]
			]);

			var chart = new google.visualization.PieChart(document.getElementById('taart'));
				chart.draw(data);
			}
    </script>
    <div id="taart" style="width: 100%; height: 400px;"></div>
	
</div>
                          