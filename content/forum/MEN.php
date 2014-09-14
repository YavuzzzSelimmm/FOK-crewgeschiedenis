<div class="span12 main-column">
	<h1><strong>Mens erger je niet</strong> <small>MEN / 117</small></h1>
    <div class="row show-grid team-member">                                    
		<div class="spanUI photo">
			<div class="bordered-img"><img alt="" src="img/_MEN.png"></div>
		</div>
        
		<div class="span6">
            <h4><a href="http://forum.fok.nl/topic/859943" target="blank_">21 mei 2006</a> - heden</h4>
			<p class="experience"><a href="http://forum.fok.nl/MEN" target="_blank">/MEN</a></p>
			<br />
		</div>
	</div>
	
	<div class="text-divider5"><span></span></div>
	<?php $t=0; ?>
	<table class="table table-striped">
	  <thead>
		<tr>
		  <th>#</th>
		  <th>Mod</th>
		  <th>Startdatum</th>
		  <th>Einddatum</th>
		  <th>Duur</th>
		</tr>
	  </thead>
	  <tbody>
		<tr class="success">
		  <td><?=++$t?></td>
		  <td><a href="?user=Cynix">Cynix &reg;</a></td>
		  <td><a href="http://forum.fok.nl/topic/859943" target="blank_">21 mei 2006</a></td>
		  <td>heden</td>
		  <td>
			<?php
				$start1 = new DateTime("2006-05-20");
				$end1 = new DateTime();
				$interval1 = $start1->diff($end1);
				echo "" . $interval1->days . " dagen";
			?>
		  </td>
		</tr>
		<tr>
		  <td><?=++$t?></td>
		  <td><a href="?user=laffer">laffer</a></td>
		  <td><a href="http://forum.fok.nl/topic/859943" target="blank_">21 mei 2006</a></td>
		  <td><a href="http://forum.fok.nl/topic/1388477" target="blank_">01 jan 2010</a></td>
		  <td>
			<?php
				$start2 = new DateTime("2006-05-20");
				$end2 = new DateTime("2010-01-01");
				$interval2 = $start2->diff($end2);
				echo "" . $interval2->days . " dagen";
			?>
		  </td>
		</tr>
		<tr>
		  <td><?=++$t?></td>
		  <td><a href="?user=laffer">laffer</a></td>
		  <td><a href="http://forum.fok.nl/topic/1396204" target="blank_">16 jan 2010</a></td>
		  <td><a href="http://forum.fok.nl/topic/1908414" target="blank_">19 dec 2012</a></td>
		  <td>
			<?php
				$start3 = new DateTime("2010-01-15");
				$end3 = new DateTime("2012-12-19");
				$interval3 = $start3->diff($end3);
				echo "" . $interval3->days . " dagen";
			?>
		  </td>
		</tr>
		<tr class="success">
		  <td><?=++$t?></td>
		  <td><a href="?user=Bart">Bart</a></td>
		  <td><a href="http://forum.fok.nl/topic/1690432" target="blank_">31 jul 2011</a></td>
		  <td>heden</td>
		  <td>
			<?php
				$start4 = new DateTime("2011-07-30");
				$end4 = new DateTime();
				$interval4 = $start4->diff($end4);
				echo "" . $interval4->days . " dagen";
			?>
		  </td>
		</tr>
		<tr>
		  <td></td>
		  <td></td>
		  <td></td>
		  <td style="text-align: right;"><code>Totaal:</code></td>
		  <td><code>
			<?php
				$start1 = new DateTime("2006-05-20");
				$end1 = new DateTime();
				$interval1 = $start1->diff($end1);
				echo "" . $interval1->days . " dagen";
			?>
			</code>
		  </td>
		</tr>
	  </tbody>
	</table>
	
		<div class="text-divider5"><span></span></div>

		<ul class="nav nav-tabs" id="myTab">
			<li class="active"><a data-toggle="tab" href="#mods">Mods</a></li>
			<li class=""><a data-toggle="tab" href="#fok">FOK!</a></li>
		</ul>
		<div class="tab-content" id="myTabContent" style="width: 100%; height: 290px;">
			<div id="mods" class="tab-pane fade active in">
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
					[ ' ', 'MEN', new Date(2006, 04, 21), new Date() ],
					[ '1', 'Cynix ®', new Date(2006, 04, 21), new Date() ],
					[ '2', 'laffer', new Date(2006, 04, 21), new Date(2009, 12, 01) ],
					[ '2', 'laffer', new Date(2009, 12, 16), new Date(2012, 11, 19) ],
					[ '3', 'Bart', new Date(2011, 06, 31), new Date() ]]);

				   var options = {	
					width: 940,
					height: 225
 				   };
			
 				 chart.draw(dataTable, options);
				  
				}
				</script>

				<div id="u"></div>
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
					[ ' ', 'MEN', new Date(2006, 04, 21), new Date() ],
					[ '1', 'Cynix ®', new Date(2006, 04, 21), new Date() ],
					[ '2', 'laffer', new Date(2006, 04, 21), new Date(2009, 12, 01) ],
					[ '2', 'laffer', new Date(2009, 12, 16), new Date(2012, 11, 19) ],
					[ '3', 'Bart', new Date(2011, 06, 31), new Date() ]]);
				   var options = {
					width: 940,
					height: 265
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
				['Mod', 'Dagen'], ['',0],
				['Cynix ®', <?=$interval1->days?>],
				['laffer', <?=$interval2->days+$interval3->days?>],
				['Bart', <?=$interval4->days?>]
			]);

			var chart = new google.visualization.PieChart(document.getElementById('taart'));
				chart.draw(data);
			}
    </script>
    <div id="taart" style="width: 100%; height: 400px;"></div>	
</div>
                          