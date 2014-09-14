<div class="span12 main-column">
	<h1><strong>Muziek</strong> <small>MUZ / 30</small></h1>
    <div class="row show-grid team-member">                                    
		<div class="spanUI photo">
			<div class="bordered-img"><img alt="" src="img/_MUZ.png"></div>
		</div>
        
		<div class="span6">
            <h4>14 feb 2001 - heden</h4>
			<p class="experience"><a href="http://forum.fok.nl/MUZ" target="_blank">/MUZ</a></p>
			<br />
		</div>
	</div>
	
	<div class="text-divider5"><span></span></div>
	<?php $t = 0; ?>
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
		<tr>
		  <td><?=++$t?></td>
		  <td><a href="?user=Zanderrr" target="blank_">Zanderrr</a></td>
		  <td><a href="http://forum.fok.nl/topic/33242/" target="blank_">14 feb 2001</a></td>
		  <td><a href="http://forum.fok.nl/topic/62194/" target="blank_">10 sep 2001</a></td>
		  <td>
			<?php
				$start1 = new DateTime("2001-02-14");
				$end1 = new DateTime("2001-09-11");
				$interval1 = $start1->diff($end1);
				echo "" . $interval1->days . " dagen";
			?>
		  </td>
		</tr>
		<tr>
		  <td>2</td>
		  <td><a href="?user=Vork" target="blank_">Vork</a></td>
		  <td><a href="http://forum.fok.nl/topic/62194/"  target="blank_">10 sep 2001</a></td>
		  <td><a href="http://forum.fok.nl/topic/115085/" target="blank_">07 mar 2002</a></td>
		  <td>
			<?php
				$start2 = new DateTime("2001-09-10");
				$end2 = new DateTime("2002-03-08");
				$interval2 = $start2->diff($end2);
				echo "" . $interval2->days . " dagen";
			?>
		  </td>
		</tr>
		<tr>
		  <td>3</td>
		  <td><a href="?user=Witchfynder" target="blank_">Witchfynder</a></td>
		  <td><a href="http://forum.fok.nl/topic/62194/" target="blank_">10 sep 2001</a></td>
		  <td><a href="http://forum.fok.nl/topic/240806" target="blank_">18 dec 2002</a></td>
		  <td>
			<?php
				$start3 = new DateTime("2001-09-10");
				$end3 = new DateTime("2002-12-19");
				$interval3 = $start3->diff($end3);
				echo "" . $interval3->days . " dagen";
			?>
		  </td>
		</tr>
		<tr>
		  <td>4</td>
		  <td><a href="?user=Seborik" target="blank_">Seborik</a></td>
		  <td><a href="http://forum.fok.nl/topic/117582" target="blank_">14 mar 2002</a></td>
		  <td><a href="http://forum.fok.nl/topic/648896" target="blank_">17 dec 2004</a></td>
		  <td>
			<?php
				$start4 = new DateTime("2002-03-14");
				$end4 = new DateTime("2004-12-18");
				$interval4 = $start4->diff($end4);
				echo "" . $interval4->days . " dagen";
			?>
		  </td>
		</tr>
		<tr>
		  <td>5</td>
		  <td><a href="?user=Vork"  target="blank_">Vork</a></td>
		  <td>15 jan 2003</td>
		  <td>17 sep 2003</td>
		  <td>
			<?php
				$start5 = new DateTime("2003-01-15");
				$end5 = new DateTime("2003-09-18");
				$interval5 = $start5->diff($end5);
				echo "" . $interval5->days . " dagen";
			?>
		  </td>
		</tr>
		<tr>
		  <td>6</td>
		  <td><a href="?user=Summoner" target="blank_">Summoner</a></td>
		  <td>17 sep 2003</td>
		  <td>17 jul 2006</td>
		  <td>
			<?php
				$start6 = new DateTime("2003-09-17");
				$end6 = new DateTime("2006-07-18");
				$interval6 = $start6->diff($end6);
				echo "" . $interval6->days . " dagen";
			?>
		  </td>
		</tr>
		<tr>
		  <td>7</td>
		  <td><a href="?user=Tijn" target="blank_">Tijn</a></td>
		  <td>17 dec 2004</td>
		  <td>29 may 2005</td>
		  <td>
			<?php
				$start7 = new DateTime("2004-12-17");
				$end7 = new DateTime("2005-05-30");
				$interval7 = $start7->diff($end7);
				echo "" . $interval7->days . " dagen";
			?>
		  </td>
		</tr>
		<tr>
		  <td>8</td>
		  <td><a href="?user=nipeng"  target="blank_">nipeng</a></td>
		  <td>30 dec 2004</td>
		  <td>07 jun 2005</td>
		  <td>
			<?php
				$start8 = new DateTime("2004-12-30");
				$end8 = new DateTime("2005-06-08");
				$interval8 = $start8->diff($end8);
				echo "" . $interval8->days . " dagen";
			?>
		  </td>
		</tr>
		<tr>
		  <td>9</td>
		  <td><a href="?user=Beathoven" target="blank_">Beathoven</a></td>
		  <td>07 jun 2005</td>
		  <td>02 apr 2007</td>
		  <td>
			<?php
				$start9 = new DateTime("2005-06-07");
				$end9 = new DateTime("2007-04-03");
				$interval9 = $start9->diff($end9);
				echo "" . $interval9->days . " dagen";
			?>
		  </td>
		</tr>
		<tr>
		  <td>10</td>
		  <td><a href="?user=PaRoDiUzZ" target="blank_">PaRoDiUzZ</a></td>
		  <td>07 jun 2005</td>
		  <td>02 apr 2007</td>
		  <td>
			<?php
				$start10 = new DateTime("2005-06-07");
				$end10 = new DateTime("2007-04-03");
				$interval10 = $start10->diff($end10);
				echo "" . $interval10->days . " dagen";
			?>
		  </td>
		</tr>
		<tr>
		  <td>11</td>
		  <td><a href="?user=nipeng" target="blank_">nipeng</a></td>
		  <td>11 okt 2006</td>
		  <td>24 jun 2008</td>
		  <td>
			<?php
				$start11 = new DateTime("2006-10-11");
				$end11 = new DateTime("2008-06-25");
				$interval11 = $start11->diff($end11);
				echo "" . $interval11->days . " dagen";
			?>
		  </td>
		</tr>
		<tr class="success">
		  <td>12</td>
		  <td><strong><a href="?user=belsen" target="blank_">belsen</a><strong></td>
		  <td><a href="http://forum.fok.nl/topic/1004576" target="_blank">02 apr 2007</a></td>
		  <td>heden</td>
		  <td>
			<?php
				$start12 = new DateTime("2007-04-01");
				$end12 = new DateTime();
				$interval12 = $start12->diff($end12);
				echo "" . $interval12->days . " dagen";
			?>
		  </td>
		</tr>
		<tr>
		  <td>13</td>
		  <td><a href="?user=Berkery" target="blank_">Berkery</a></td>
		  <td>02 apr 2007</td>
		  <td>28 mei 2008</td>
		  <td>
			<?php
				$start13 = new DateTime("2007-04-02");
				$end13 = new DateTime("2008-05-29");
				$interval13 = $start13->diff($end13);
				echo "" . $interval13->days . " dagen";
			?>
		  </td>
		</tr>
		<tr>
		  <td>14</td>
		  <td><a href="?user=Sack_Blabbath" target="blank_">Sack_Blabbath</a></td>
		  <td>28 mei 2008</td>
		  <td>23 apr 2010</td>
		  <td>
			<?php
				$start14 = new DateTime("2008-05-28");
				$end14 = new DateTime("2010-04-24");
				$interval14 = $start14->diff($end14);
				echo "" . $interval14->days . " dagen";
			?>
		  </td>
		</tr>
		<tr>
		  <td>15</td>
		  <td><a href="?user=Da_Ripper" target="blank_">Da_Ripper</a></td>
		  <td>24 jun 2008</td>
		  <td>20 dec 2012</td>
		  <td>
			<?php
				$start15 = new DateTime("2008-06-24");
				$end15 = new DateTime("2012-12-21");
				$interval15 = $start15->diff($end15);
				echo "" . $interval15->days . " dagen";
			?>
		  </td>
		</tr>
		<tr>
		  <td>16</td>
		  <td><a href="?user=krioro" target="blank_">krioro</a></td>
		  <td><a href="http://forum.fok.nl/topic/1446824" target="blank_">23 apr 2010</a></td>
		  <td><a href="http://forum.fok.nl/topic/1740589" target="blank_">11 nov 2011</a></td>
		  <td>
			<?php
				$start16 = new DateTime("2010-04-23");
				$end16 = new DateTime("2011-11-12");
				$interval16 = $start16->diff($end16);
				echo "" . $interval16->days . " dagen";
			?>
		  </td>
		</tr>
		<tr class="success">
		  <td>17</td>
		  <td><strong><a href="?user=Bosbeetle" target="blank_">Bosbeetle</a></strong></td>
		  <td><a href="http://forum.fok.nl/topic/1740589" target="blank_">11 nov 2011</a></td>
		  <td>heden</td>
		  <td>
			<?php
				$start17 = new DateTime("2011-11-11");
				$end17 = new DateTime();
				$interval17 = $start17->diff($end17);
				echo "" . $interval17->days . " dagen";
			?>
		  </td>
		</tr>
		<tr class="success">
		  <td>18</td>
		  <td><strong><a href="?user=Sack_Blabbath" target="blank_">Sack_Blabbath</a></strong></td>
		  <td><a href="http://forum.fok.nl/topic/1754006" target="blank_">20 dec 2011</a></td>
		  <td>heden</td>
		  <td>
			<?php
				$start18 = new DateTime("2011-12-19");
				$end18 = new DateTime();
				$interval18 = $start18->diff($end18);
				echo "" . $interval18->days . " dagen";
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
				$start = new DateTime("2001-02-13");
				$end = new DateTime();
				$interval = $start->diff($end);
				echo "" . $interval->days . " dagen";
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
		<div class="tab-content" id="myTabContent" style="width: 100%; height: 775px;">
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
				  	[ ' ', 'MUZ', new Date(2001, 01, 14), new Date() ],
					[ '1', 'Zanderrr', new Date(2001, 01, 14), new Date(2001, 08, 10) ],
					[ '2', 'Vork', new Date(2001, 08, 10), new Date(2002, 02, 07) ],
					[ '3', 'Witchfynder', new Date(2001, 08, 10), new Date(2002, 11, 18) ],
					[ '4', 'Seborik	', new Date(2002, 02, 14), new Date(2004, 11, 17) ],
					[ '2', 'Vork', new Date(2002, 12, 15), new Date(2003, 08, 17) ],
					[ '6', 'Summoner', new Date(2003, 08, 17), new Date(2006, 06, 17) ],
					[ '7', 'Tijn', new Date(2004, 11, 17), new Date(2005, 04, 29) ],
					[ '8', 'nipeng', new Date(2004, 11, 30), new Date(2005, 06, 07) ],
					[ '9', 'Beathoven', new Date(2005, 06, 	17), new Date(2007, 03, 02) ],
					[ '10', 'PaRoDiUzZ', new Date(2005, 06,	17), new Date(2007, 03, 02) ],
					[ '8', 'nipeng', new Date(2006, 09, 11), new Date(2008, 05, 24) ],
					[ '12', 'belsen', new Date(2007, 03, 02), new Date() ],
					[ '13', 'Berkery', new Date(2007, 03, 02), new Date(2008, 04, 28) ],
					[ '14', 'Sack_Blabbath', new Date(2008, 04, 28), new Date(2010, 03, 23) ],
					[ '15', 'Da_Ripper', new Date(2008, 05, 24), new Date(2012, 11, 20) ],
					[ '16', 'krioro', new Date(2010, 03, 23), new Date(2011, 10, 11) ],
					[ '17', 'Bosbeetle', new Date(2011, 10, 11), new Date() ],
					[ '14', 'Sack_Blabbath', new Date(2011, 11, 20), new Date() ]]);

				   var options = {	
					width: 940,
					height: 725
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
					[ ' ', 'MUZ', new Date(2001, 01, 14), new Date() ],
					[ '1', 'Zanderrr', new Date(2001, 01, 14), new Date(2001, 08, 10) ],
					[ '2', 'Vork', new Date(2001, 08, 10), new Date(2002, 02, 07) ],
					[ '3', 'Witchfynder', new Date(2001, 08, 10), new Date(2002, 11, 18) ],
					[ '4', 'Seborik	', new Date(2002, 02, 14), new Date(2004, 11, 17) ],
					[ '2', 'Vork', new Date(2002, 12, 15), new Date(2003, 08, 17) ],
					[ '6', 'Summoner', new Date(2003, 08, 17), new Date(2006, 06, 17) ],
					[ '7', 'Tijn', new Date(2004, 11, 17), new Date(2005, 04, 29) ],
					[ '8', 'nipeng', new Date(2004, 11, 30), new Date(2005, 06, 07) ],
					[ '9', 'Beathoven', new Date(2005, 06, 	17), new Date(2007, 03, 02) ],
					[ '10', 'PaRoDiUzZ', new Date(2005, 06,	17), new Date(2007, 03, 02) ],
					[ '8', 'nipeng', new Date(2006, 09, 11), new Date(2008, 05, 24) ],
					[ '12', 'belsen', new Date(2007, 03, 02), new Date() ],
					[ '13', 'Berkery', new Date(2007, 03, 02), new Date(2008, 04, 28) ],
					[ '14', 'Sack_Blabbath', new Date(2008, 04, 28), new Date(2010, 03, 23) ],
					[ '15', 'Da_Ripper', new Date(2008, 05, 24), new Date(2012, 11, 20) ],
					[ '16', 'krioro', new Date(2010, 03, 23), new Date(2011, 10, 11) ],
					[ '17', 'Bosbeetle', new Date(2011, 10, 11), new Date() ],
					[ '14', 'Sack_Blabbath', new Date(2011, 11, 20), new Date() ]]);
				   var options = {
					width: 940,
					height: 750
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
				['Zanderrr', <?=$interval1->days?>],
				['Vork', <?=$interval2->days+$interval5->days?>],
				['Witchfynder', <?=$interval3->days?>],
				['Seborik', <?=$interval4->days?>],
				['Summoner', <?=$interval6->days?>],
				['Tijn', <?=$interval7->days?>],
				['nipeng', <?=$interval8->days+$interval11->days?>],
				['Beathoven', <?=$interval9->days?>],
				['PaRoDiUzZ', <?=$interval10->days?>],
				['belsen', <?=$interval12->days?>],
				['Berkery', <?=$interval13->days?>],
				['Sack_Blabbath', <?=$interval14->days+$interval18->days?>],
				['Da_Ripper', <?=$interval15->days?>],
				['krioro', <?=$interval16->days?>],
				['Bosbeetle', <?=$interval17->days?>]
			]);

			var chart = new google.visualization.PieChart(document.getElementById('taart'));
				chart.draw(data);
			}
    </script>
    <div id="taart" style="width: 100%; height: 600px;"></div>
</div>
                          