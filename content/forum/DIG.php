<div class="span12 main-column">
	<h1><strong>Digital Corner</strong> <small>DIG / 16</small></h1>
    <div class="row show-grid team-member">                                    
		<div class="spanForum photo">
			<div class="bordered-img"><img style="width: 50px; height: 50px;" alt="" src="img/_DIG.png"></div>
		</div>
        
		<div class="span6">
            <h4><a href="http://forum.fok.nl/topic/118970" target="blank_">18 mar 2002</a> - heden</h4>
			<p class="experience"><a href="http://forum.fok.nl/DIG" target="_blank">/DIG</a></p>
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
		<tr>
		  <td><?=++$t?></td>
		  <td><a href="?user=slakkie">slakkie</a></td>
		  <td><a href="http://forum.fok.nl/topic/73268" target="blank_">24 okt 2001</a></td>
		  <td><a href="http://forum.fok.nl/topic/142357" target="blank_">11 mei 2002</a></td>
		  <td>
			<?php
				$start1    = new DateTime("2001-10-23");
				$end1	   = new DateTime("2002-05-11");
				$interval1 = $start1->diff($end1);
				echo 		 $interval1->days . " dagen";
			?>
		  </td>
		</tr>
		<tr>
		  <td><?=++$t?></td>
		  <td><a href="?user=Tijn">Tijn</a></td>
		  <td><a href="http://forum.fok.nl/topic/142357" target="blank_">11 mei 2002</a></td>
		  <td><a href="http://forum.fok.nl/topic/325371" target="blank_">26 mei 2003</a></td>
		  <td>
			<?php
				$start2    = new DateTime("2002-05-10");
				$end2	   = new DateTime("2003-05-26");
				$interval2 = $start2->diff($end2);
				echo 		 $interval2->days . " dagen";
			?>
		  </td>
		</tr>
		<tr>
		  <td><?=++$t?></td>
		  <td><a href="?user=Raven">Raven</a></td>
		  <td><a href="http://forum.fok.nl/topic/142357" target="blank_">11 mei 2002</a></td>
		  <td><a href="http://forum.fok.nl/topic/226720" target="blank_">20 nov 2002</a></td>
		  <td>
			<?php
				$start3    = new DateTime("2002-05-10");
				$end3	   = new DateTime("2002-11-19");
				$interval3 = $start3->diff($end3);
				echo 		 $interval3->days . " dagen";
			?>
		  </td>
		</tr>
		<tr>
		  <td><?=++$t?></td>
		  <td><a href="?user=Lucille">Lucille</a></td>
		  <td><a href="http://forum.fok.nl/topic/228257" target="blank_">23 nov 2002</a></td>
		  <td><a href="http://forum.fok.nl/topic/728727" target="blank_">17 jul 2005</a></td>
		  <td>
			<?php
				$start4    = new DateTime("2002-11-22");
				$end4	   = new DateTime("2005-07-17");
				$interval4 = $start4->diff($end4);
				echo 		 $interval4->days . " dagen";
			?>
		  </td>
		</tr>
		<tr>
		  <td><?=++$t?></td>
		  <td><a href="?user=Sander">Sander</a></td>
		  <td><a href="http://forum.fok.nl/topic/329940" target="blank_">04 jun 2003</a></td>
		  <td><a href="http://forum.fok.nl/topic/983341" target="blank_">18 feb 2007</a></td>
		  <td>
			<?php
				$start5    = new DateTime("2003-06-03");
				$end5	   = new DateTime("2007-02-18");
				$interval5 = $start5->diff($end5);
				echo 		 $interval5->days . " dagen";
			?>
		  </td>
		</tr>
		<tr>
		  <td><?=++$t?></td>
		  <td><a href="?user=QuietGuy">QuietGuy</a></td>
		  <td><a href="http://forum.fok.nl/topic/446714" target="blank_">18 dec 2003</a></td>
		  <td><a href="http://forum.fok.nl/topic/741673" target="blank_">18 aug 2005</a></td>
		  <td>
			<?php
				$start6    = new DateTime("2003-12-17");
				$end6	   = new DateTime("2005-08-18");
				$interval6 = $start6->diff($end6);
				echo 		 $interval6->days . " dagen";
			?>
		  </td>
		</tr>
		<tr>
		  <td><?=++$t?></td>
		  <td><a href="?user=Jump">Jump</a></td>
		  <td><a href="http://forum.fok.nl/topic/728727" target="blank_">17 jul 2005</a></td>
		  <td><a href="http://forum.fok.nl/topic/856708" target="blank_">14 mei 2006</a></td>
		  <td>
			<?php
				$start7    = new DateTime("2005-07-16");
				$end7	   = new DateTime("2005-05-14");
				$interval7 = $start7->diff($end7);
				echo 		 $interval7->days . " dagen";
			?>
		  </td>
		</tr>
		<tr>
		  <td><?=++$t?></td>
		  <td><a href="?user=Marty26 ">Marty26 </a></td>
		  <td><a href="http://forum.fok.nl/topic/735911" target="blank_">03 aug 2005</a></td>
		  <td><a href="http://forum.fok.nl/topic/856708" target="blank_">14 mei 2006</a></td>
		  <td>
			<?php
				$start8    = new DateTime("2005-08-02");
				$end8	   = new DateTime("2006-05-14");
				$interval8 = $start8->diff($end8);
				echo 		 $interval8->days . " dagen";
			?>
		  </td>
		</tr>
		<tr>
		  <td><?=++$t?></td>
		  <td><a href="?user=FredvZ">FredvZ</a></td>
		  <td><a href="http://forum.fok.nl/topic/856708" target="blank_">14 mei 2006</a></td>
		  <td><a href="http://forum.fok.nl/topic/1116174" target="blank_">15 jan 2008</a></td>
		  <td>
			<?php
				$start9    = new DateTime("2006-05-13");
				$end9	   = new DateTime("2008-01-15");
				$interval9 = $start9->diff($end9);
				echo 		 $interval9->days . " dagen";
			?>
		  </td>
		</tr>
		<tr>
		  <td><?=++$t?></td>
		  <td><a href="?user=Godtje">Godtje</a></td>
		  <td><a href="http://forum.fok.nl/topic/856708" target="blank_">14 mei 2006</a></td>
		  <td><a href="http://forum.fok.nl/topic/957242" target="blank_">20 dec 2006</a></td>
		  <td>
			<?php
				$start10    = new DateTime("2006-05-13");
				$end10	    = new DateTime("2006-12-20");
				$interval10 = $start10->diff($end10);
				echo 		 $interval10->days . " dagen";
			?>
		  </td>
		</tr>
		<tr>
		  <td><?=++$t?></td>
		  <td><a href="?user=slakkie">slakkie</a></td>
		  <td><a href="http://forum.fok.nl/topic/955628" target="blank_">17 dec 2006</a></td>
		  <td><a href="http://forum.fok.nl/topic/983341" target="blank_">18 feb 2007</a></td>
		  <td>
			<?php
				$start11    = new DateTime("2006-12-16");
				$end11	    = new DateTime("2007-02-18");
				$interval11 = $start11->diff($end11);
				echo 		 $interval11->days . " dagen";
			?>
		  </td>
		</tr>
		<tr>
		  <td><?=++$t?></td>
		  <td><a href="?user=Godtje">Godtje</a></td>
		  <td><a href="http://forum.fok.nl/topic/983341" target="blank_">18 feb 2007</a></td>
		  <td><a href="http://forum.fok.nl/topic/1103429" target="blank_">09 dec 2007</a></td>
		  <td>
			<?php
				$start12    = new DateTime("2007-02-17");
				$end12	    = new DateTime("2007-12-09");
				$interval12 = $start12->diff($end12);
				echo 		 $interval12->days . " dagen";
			?>
		  </td>
		</tr>
		<tr class="success">
		  <td><?=++$t?></td>
		  <td><strong><a href="?user=WyriHaximus">WyriHaximus</strong></a></td>
		  <td><a href="http://forum.fok.nl/topic/1103429" target="blank_">09 dec 2007</a></td>
		  <td>heden</td>
		  <td>
			<?php
				$start13    = new DateTime("2007-12-08");
				$end13	    = new DateTime();
				$interval13 = $start13->diff($end13);
				echo 		 $interval13->days . " dagen";
			?>
		  </td>
		</tr>
		<tr>
		  <td><?=++$t?></td>
		  <td><a href="?user=Jo0Lz">Jo0Lz</a></td>
		  <td><a href="http://forum.fok.nl/topic/1117212" target="blank_">18 jan 2008</a></td>
		  <td><a href="http://forum.fok.nl/topic/1739090" target="blank_">17 nov 2011</a></td>
		  <td>
			<?php
				$start14    = new DateTime("2008-01-17");
				$end14	    = new DateTime("2011-11-17");
				$interval14 = $start14->diff($end14);
				echo 		 $interval14->days . " dagen";
			?>
		  </td>
		</tr>
		<tr class="success">
		  <td><?=++$t?></td>
		  <td><strong><a href="?userSjowhan=">Sjowhan</a></strong></td>
		  <td><a href="http://forum.fok.nl/topic/1425414" target="blank_">12 mar 2010</a></td>
		  <td>heden</td>
		  <td>
			<?php
				$start15    = new DateTime("2010-03-11");
				$end15	    = new DateTime();
				$interval15 = $start15->diff($end15);
				echo 		 $interval15->days . " dagen";
			?>
		  </td>
		</tr>
		<tr>
		  <td><?=++$t?></td>
		  <td><a href="?user=smegmanus">smegmanus</a></td>
		  <td><a href="http://forum.fok.nl/topic/1577342" target="blank_">19 dec 2010</a></td>
		  <td><a href="http://forum.fok.nl/topic/1740419" target="blank_">20 nov 2011</a></td>
		  <td>
			<?php
				$start16    = new DateTime("2010-12-18");
				$end16	    = new DateTime("2011-11-19");
				$interval16 = $start16->diff($end16);
				echo 		 $interval16->days . " dagen";
			?>
		  </td>
		</tr>
		<tr class="success">
		  <td><?=++$t?></td>
		  <td><strong><a href="?user=Bart">Bart</a></strong></td>
		  <td><a href="http://forum.fok.nl/topic/1739090" target="blank_">17 nov 2011</a></td>
		  <td>heden</td>
		  <td>
			<?php
				$start17    = new DateTime("2011-11-16");
				$end17	    = new DateTime();
				$interval17 = $start17->diff($end17);
				echo 		 $interval17->days . " dagen";
			?>
		  </td>
		</tr>
		<tr>
		  <td><?=++$t?></td>
		  <td><a href="?user=OpaBakkebaard">Opa.Bakkebaard</a></td>
		  <td><a href="http://forum.fok.nl/topic/1740419" target="blank_">20 nov 2011</a></td>
		  <td><a href="http://forum.fok.nl/topic/1752623" target="blank_">17 dec 2011</a></td>
		  <td>
			<?php
				$start18    = new DateTime("2011-11-19");
				$end18	    = new DateTime("2011-12-17");
				$interval18 = $start18->diff($end18);
				echo 		 $interval18->days . " dagen";
			?>
		  </td>
		</tr>
		<tr>
		  <td><?=++$t?></td>
		  <td><a href="?user=LompeHork">LompeHork</a></td>
		  <td><a href="http://forum.fok.nl/topic/1752623" target="blank_">17 dec 2011</a></td>
		  <td><a href="http://forum.fok.nl/topic/1845935" target="blank_">18 jul 2012</a></td>
		  <td>
			<?php
				$start19    = new DateTime("2011-12-16");
				$end19	    = new DateTime("2012-07-18");
				$interval19 = $start19->diff($end19);
				echo 		 $interval19->days . " dagen";
			?>
		  </td>
		</tr>
		<tr>
		  <td><?=++$t?></td>
		  <td><a href="?user=remlof">remlof</a></td>
		  <td><a href="http://forum.fok.nl/topic/1845935" target="blank_">18 jul 2012</a></td>
		  <td><a href="http://forum.fok.nl/topic/1901946" target="blank_">03-12-2012</a></td>
		  <td>
			<?php
				$start20    = new DateTime("2012-07-17");
				$end20	    = new DateTime("2012-12-03");
				$interval20 = $start20->diff($end20);
				echo 		 $interval20->days . " dagen";
			?>
		  </td>
		</tr>
		<tr class="success">
		  <td><?=++$t?></td>
		  <td><strong><a href="?user=Dubbeldrank">Dubbeldrank</a></strong></td>
		  <td><a href="http://forum.fok.nl/topic/1909330" target="blank_">21 dec 2012</a></td>
		  <td>heden</td>
		  <td>
			<?php
				$start21    = new DateTime("2012-12-20");
				$end21	    = new DateTime();
				$interval21 = $start21->diff($end21);
				echo 		 $interval21->days . " dagen";
			?>
		  </td>
		</tr>
		<tr>
		  <td></td>
		  <td></td>
		  <td></td>
		  <td style="text-align: right;"><code>Totaal:</code></td>
		  <td>
			<code>
			<?php
				$dig_s	= new DateTime("2002-03-17");
				$dig_e	= new DateTime();
				$dig_i	= $dig_s->diff($dig_e);
				echo	  $dig_i->days . " dagen";
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
		<div class="tab-content" id="myTabContent" style="width: 100%; height: 940px;">
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
					[ ' ', 'DIG',	 	new Date(2002, 02, 18), new Date() ],
					[ '1', 'slakkie', 	new Date(2001, 09, 24), new Date(2002, 04, 11) ],
					[ '2', 'Tijn',	 	new Date(2002, 04, 11), new Date(2003, 04, 26) ],
					[ '3', 'Raven', 	new Date(2002, 04, 11), new Date(2002, 10, 20) ],
					[ '4', 'Lucille',	new Date(2002, 10, 23), new Date(2005, 06, 17) ],
					[ '5', 'Sander', 	new Date(2003, 05, 04), new Date(2007, 01, 18) ],
					[ '6', 'QuietGuy', 	new Date(2003, 11, 18), new Date(2005, 07, 18) ],
					[ '7', 'Jump', 		new Date(2005, 06, 17), new Date(2006, 04, 14) ],
					[ '8', 'Marty26',	new Date(2005, 07, 03), new Date(2006, 04, 14) ],
					[ '9', 'FredvZ', 	new Date(2006, 04, 14), new Date(2007, 12, 15) ],
					[ '10', 'Godtje', 	new Date(2006, 04, 14), new Date(2006, 11, 20) ],
					[ '1', 'slakkie', 	new Date(2006, 11, 17), new Date(2007, 01, 18) ],
					[ '10', 'Godtje', 	new Date(2007, 01, 18), new Date(2007, 11, 09) ],
					[ '13', 'WyriHaximus', 	new Date(2007, 11, 09), new Date() ],
					[ '14', 'Jo0Lz', 		new Date(2007, 12, 18), new Date(2011, 10, 17) ],
					[ '15', 'Sjowhan', 		new Date(2010, 02, 12), new Date() ],
					[ '16', 'smegmanus', 	new Date(2010, 11, 19), new Date(2011, 10, 20) ],
					[ '17', 'Bart', 		new Date(2011, 10, 17), new Date() ],
					[ '18', 'Opa.Bakkebaard', 	new Date(2011, 10, 20), new Date(2011, 11, 17) ],
					[ '19', 'LompeHork', 	new Date(2011, 11, 17), new Date(2012, 06, 18) ],
					[ '20', 'remlof', 		new Date(2012, 06, 18), new Date(2012, 11, 03) ],
					[ '21', 'Dubbeldrank', 	new Date(2012, 11, 21), new Date() ]]);

				   var options = {	
					height: 900
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
					[ ' ', 'DIG',	 	new Date(2002, 02, 18), new Date() ],
					[ '1', 'slakkie', 	new Date(2001, 09, 24), new Date(2002, 04, 11) ],
					[ '2', 'Tijn',	 	new Date(2002, 04, 11), new Date(2003, 04, 26) ],
					[ '3', 'Raven', 	new Date(2002, 04, 11), new Date(2002, 10, 20) ],
					[ '4', 'Lucille',	new Date(2002, 10, 23), new Date(2005, 06, 17) ],
					[ '5', 'Sander', 	new Date(2003, 05, 04), new Date(2007, 01, 18) ],
					[ '6', 'QuietGuy', 	new Date(2003, 11, 18), new Date(2005, 07, 18) ],
					[ '7', 'Jump', 		new Date(2005, 06, 17), new Date(2006, 04, 14) ],
					[ '8', 'Marty26',	new Date(2005, 07, 03), new Date(2006, 04, 14) ],
					[ '9', 'FredvZ', 	new Date(2006, 04, 14), new Date(2007, 12, 15) ],
					[ '10', 'Godtje', 	new Date(2006, 04, 14), new Date(2006, 11, 20) ],
					[ '1', 'slakkie', 	new Date(2006, 11, 17), new Date(2007, 01, 18) ],
					[ '10', 'Godtje', 	new Date(2007, 01, 18), new Date(2007, 11, 09) ],
					[ '13', 'WyriHaximus', 	new Date(2007, 11, 09), new Date() ],
					[ '14', 'Jo0Lz', 		new Date(2007, 12, 18), new Date(2011, 10, 17) ],
					[ '15', 'Sjowhan', 		new Date(2010, 02, 12), new Date() ],
					[ '16', 'smegmanus', 	new Date(2010, 11, 19), new Date(2011, 10, 20) ],
					[ '17', 'Bart', 		new Date(2011, 10, 17), new Date() ],
					[ '18', 'Opa.Bakkebaard', 	new Date(2011, 10, 20), new Date(2011, 11, 17) ],
					[ '19', 'LompeHork', 	new Date(2011, 11, 17), new Date(2012, 06, 18) ],
					[ '20', 'remlof', 		new Date(2012, 06, 18), new Date(2012, 11, 03) ],
					[ '21', 'Dubbeldrank', 	new Date(2012, 11, 21), new Date() ]]);
					
				   var options = {
					width: 940,
					height: 915
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
				['slakkie', 	<?=$interval1->days+$interval11->days?>],
				['Tijn', 		<?=$interval2->days?>],
				['Raven',		<?=$interval3->days?>],
				['Lucille',		<?=$interval4->days?>],
				['Sander', 		<?=$interval5->days?>],
				['QuietGuy', 	<?=$interval6->days?>],
				['Jump', 		<?=$interval7->days?>],
				['Marty26', 	<?=$interval8->days?>],
				['FredvZ', 		<?=$interval9->days?>],
				['Godtje', 		<?=$interval10->days+$interval12->days?>],
				['WyriHaximus', <?=$interval13->days?>],
				['Jo0Lz', 		<?=$interval14->days?>],
				['Sjowhan', 	<?=$interval15->days?>],
				['smegmanus', 	<?=$interval16->days?>],
				['Bart', 		<?=$interval17->days?>],
				['Opa.Bakkebaard',	<?=$interval18->days?>],
				['LompeHork', 	<?=$interval19->days?>],
				['remlof', 		<?=$interval20->days?>],
				['Dubbeldrank', <?=$interval21->days?>]
			]);

			var chart = new google.visualization.PieChart(document.getElementById('taart'));
				chart.draw(data);
			}
    </script>
    <div id="taart" style="width: 100%; height:800px;"></div>	
</div>
                          