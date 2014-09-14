<?php include("content/date.php");?>
				<div class="col-wrapper">
					<h1>Ranglijst</h1>

					<div>
					<div id="langstzittende" class="accordion">					
							<ul class="nav nav-tabs" id="myTab">
								<li class="active"><a data-toggle="tab" href="#totaal">Totaal</a></li>
								<li class=""><a data-toggle="tab" href="#mods">Mods</a></li>
								<li class=""><a data-toggle="tab" href="#fa">FA's</a></li>
							</ul>
							<div class="tab-content" id="myTabContent">
								<div id="totaal" class="tab-pane fade active in">
									<script type='text/javascript' src='https://www.google.com/jsapi'></script>
									<script type='text/javascript'>
									  google.load('visualization', '1', {packages:['table']});
									  google.setOnLoadCallback(drawTable);
									  function drawTable() {
										var data = new google.visualization.DataTable();
										data.addColumn('string', 'User');
										data.addColumn('number', 'Aantal dagen');
										data.addRows([
										['<a href="?user=99999">99.999</a> / <a href="?user=du_ke">du_ke</a>',	{v: <?=$u99999_total?>,		f: '<?=$u99999_total?> dagen'}],
										['<a href="?user=ajacied4lf">ajacied4lf</a>',			{v: <?=$uajacied4lf_total?>, 		f: '<?=$uajacied4lf_total?> dagen'}],
										['<a href="?user=Anne">Anne</a>',						{v: <?=$uAnne_total?>, 				f: '<?=$uAnne_total?> dagen'}],
										['<a href="?user=APK">APK</a>', 						{v: <?=$uAPK_total?>, 				f: '<?=$uAPK_total?> dagen'}],
										['<a href="?user=arachide">arachide.</a>', 				{v: <?=$uarachide_total?>, 			f: '<?=$uarachide_total?> dagen'}],
										['<a href="?user=Automatic_Rock">Automatic_Rock</a>', 	{v: <?=$uAutomatic_Rock_total?>, 	f: '<?=$uAutomatic_Rock_total?> dagen'}],
										['<a href="?user=Bart">Bart</a>',  						{v: <?=$uBart_total?>, 				f: '<?=$uBart_total?> dagen'}],
										['<a href="?user=belsen">belsen</a>',					{v: <?=$ubelsen_total?>, 			f: '<?=$ubelsen_total?> dagen'}],
										['<a href="?user=boem-dikkie">boem-dikkie</a>',			{v: <?=$uboemdikkie_total?>, 		f: '<?=$uboemdikkie_total?> dagen'}],
										['<a href="?user=Bosbeetle">Bosbeetle</a>',				{v: <?=$uBosbeetle_total?>, 		f: '<?=$uBosbeetle_total?> dagen'}],
										['<a href="?user=Brighteyes">Brighteyes</a>',			{v: <?=$uBrighteyes_total?>, 		f: '<?=$uBrighteyes_total?> dagen'}],
										['<a href="?user=Cat22">Cat22</a>', 					{v: <?=$uCat22_total?>, 			f: '<?=$uCat22_total?> dagen'}],
										['<a href="?user=Cobra4">Cobra4</a>', 					{v: <?=$uCobra4_total?>, 			f: '<?=$uCobra4_total?> dagen'}],
										['<a href="?user=Copycat">Copycat</a>', 				{v: <?=$uCopycat_total?>, 			f: '<?=$uCopycat_total?> dagen'}],
										['<a href="?user=DaMart">DaMart</a>',					{v: <?=$uDaMart_total?>, 			f: '<?=$uDaMart_total?> dagen'}],
										['<a href="?user=Dark_Angelus">Dark_Angelus</a>',  		{v: <?=$uDark_Angelus_total?>, 		f: '<?=$uDark_Angelus_total?> dagen'}],
										['<a href="?user=De_Taartjesfee">De_Taartjesfee</a>', 	{v: <?=$uDe_Taartjesfee_total?>, 	f: '<?=$uDe_Taartjesfee_total?> dagen'}],
										['<a href="?user=debuurvrouw">debuurvrouw</a>',  		{v: <?=$udebuurvrouw_total?>, 		f: '<?=$udebuurvrouw_total?> dagen'}],
										['<a href="?user=Dubbeldrank">Dubbeldrank</a>',			{v: <?=$uDubbeldrank_total?>, 		f: '<?=$uDubbeldrank_total?> dagen'}],
										['<a href="?user=Fendy">Fendy</a>',						{v: <?=$uFendy_total?>, 			f: '<?=$uFendy_total?> dagen'}],
										['<a href="?user=Ferdo">Ferdo</a>',						{v: <?=$uFerdo_total?>, 			f: '<?=$uFerdo_total?> dagen'}],
										['<a href="?user=Five_Horizons">Five_Horizons</a>',		{v: <?=$uFive_Horizons_total?>, 	f: '<?=$uFive_Horizons_total?> dagen'}],
										['<a href="?user=Fopje">Fopje</a>', 					{v: <?=$uFopje_total?>, 			f: '<?=$uFopje_total?> dagen'}],
										['<a href="?user=Frank_Drebin">Frank_Drebin</a>',  		{v: <?=$uFrank_Drebin_total?>,		f: '<?=$uFrank_Drebin_total?> dagen'}],
										['<a href="?user=Friek_">Friek_</a>',  					{v: <?=$uFriek__total?>,			f: '<?=$uFriek__total?> dagen'}],
										['<a href="?user=Frutsel">Frutsel</a>', 				{v: <?=$uFrutsel_total?>, 			f: '<?=$uFrutsel_total?> dagen'}],
										['<a href="?user=GGMM">GGMM</a>', 						{v: <?=$uGGMM_total?>, 				f: '<?=$uGGMM_total?> dagen'}],
										['<a href="?user=HeaN82">HeaN82</a>', 					{v: <?=$uHeaN82_total?>, 			f: '<?=$uHeaN82_total?> dagen'}],
										['<a href="?user=HeatWave">HeatWave</a>',				{v: <?=$uHeatWave_total?>, 			f: '<?=$uHeatWave_total?> dagen'}],
										['<a href="?user=HetKlusKonijn">HetKlusKonijn</a>',		{v: <?=$uHetKlusKonijn_total?>, 	f: '<?=$uHetKlusKonijn_total?> dagen'}],
										['<a href="?user=Hexagon">Hexagon</a>',					{v: <?=$uHexagon_total?>, 			f: '<?=$uHexagon_total?> dagen'}],
										['<a href="?user=Houniet">Houniet</a>',					{v: <?=$uHouniet_total?>, 			f: '<?=$uHouniet_total?> dagen'}],	
										['<a href="?user=iBenny">iBenny</a>',  					{v: <?=$uiBenny_total?>,			f: '<?=$uiBenny_total?> dagen'}],
										['<a href="?user=IHVK">IHVK</a>',  						{v: <?=$uIHVK_total?>,				f: '<?=$uIHVK_total?> dagen'}],
										['<a href="?user=JDude">JDude</a>',  					{v: <?=$uJDude_total?>,				f: '<?=$uJDude_total?> dagen'}],
										['<a href="?user=jitzzzze">jitzzzze</a>',  				{v: <?=$ujitzzzze_total?>,			f: '<?=$ujitzzzze_total?> dagen'}],
										['<a href="?user=Kaas-">Kaas-</a>',  					{v: <?=$uKaas_total?>, 				f: '<?=$uKaas_total?> dagen'}],
										['<a href="?user=kanovinnie">kanovinnie</a>',  			{v: <?=$ukanovinnie_total?>, 		f: '<?=$ukanovinnie_total?> dagen'}],
										['<a href="?user=Karina">Karina</a>',  					{v: <?=$uKarina_total?>, 			f: '<?=$uKarina_total?> dagen'}],
										['<a href="?user=Lavenderr">Lavenderr</a>',  			{v: <?=$uLavenderr_total?>, 		f: '<?=$uLavenderr_total?> dagen'}],
										['<a href="?user=LethalNinja">LethalNinja</a>',  		{v: <?=$uLethalNinja_total?>, 		f: '<?=$uLethalNinja_total?> dagen'}],
										['<a href="?user=liesje1979">liesje1979</a>',  			{v: <?=$uliesje1979_total?>, 		f: '<?=$uliesje1979_total?> dagen'}],
										['<a href="?user=LittleBrownie">LittleBrownie</a>',  	{v: <?=$uLittleBrownie_total?>, 	f: '<?=$uLittleBrownie_total?> dagen'}],
										['<a href="?user=Lois">Lois</a>', 						{v: <?=$uLois_total?>, 				f: '<?=$uLois_total?> dagen'}],
										['<a href="?user=LompeHork">LompeHork</a>',  			{v: <?=$uLompeHork_total?>, 		f: '<?=$uLompeHork_total?> dagen'}],
										['<a href="?user=Lotusss">Lotusss</a>',  				{v: <?=$uLotusss_total?>, 			f: '<?=$uLotusss_total?> dagen'}],
										['<a href="?user=Lutte">Lutte</a>', 					{v: <?=$uLutte_total?>, 			f: '<?=$uLutte_total?> dagen'}],
										['<a href="?user=Magneet">Magneet</a>',					{v: <?=$uMagneet_total?>, 			f: '<?=$uMagneet_total?> dagen'}],
										['<a href="?user=Maharbal">Maharbal</a>',				{v: <?=$uMaharbal_total?>, 			f: '<?=$uMaharbal_total?> dagen'}],
										['<a href="?user=Maisnon">Maisnon</a>',					{v: <?=$uMaisnon_total?>, 			f: '<?=$uMaisnon_total?> dagen'}],
										['<a href="?user=Marie30">Marie30</a>',					{v: <?=$uMarie30_total?>, 			f: '<?=$uMarie30_total?> dagen'}],
										['<a href="?user=Mike">Mike</a>',						{v: <?=$uMike_total?>, 				f: '<?=$uMike_total?> dagen'}],
										['<a href="?user=MissBliss">MissBliss</a>', 			{v: <?=$uMissBliss_total?>, 		f: '<?=$uMissBliss_total?> dagen'}],
										['<a href="?user=Misstique">Misstique</a>',				{v: <?=$uMisstique_total?>, 		f: '<?=$uMisstique_total?> dagen'}],
										['<a href="?user=Ml-etje">Ml-etje</a>',					{v: <?=$uMletje_total?>, 			f: '<?=$uMletje_total?> dagen'}],
										['<a href="?user=Mortaxx">Mortaxx</a>', 				{v: <?=$uMortaxx_total?>, 			f: '<?=$uMortaxx_total?> dagen'}],
										['<a href="?user=motorbloempje">motorbloempje</a>', 	{v: <?=$umotorbloempje_total?>, 	f: '<?=$umotorbloempje_total?> dagen'}],
										['<a href="?user=murp">murp</a>',						{v: <?=$umurp_total?>, 				f: '<?=$umurp_total?> dagen'}],	
										['<a href="?user=Mylene">Mylene</a>',					{v: <?=$uMylene_total?>, 			f: '<?=$uMylene_total?> dagen'}],	
										['<a href="?user=Natalie">Natalie</a>',  				{v: <?=$uNatalie_total?>, 			f: '<?=$uNatalie_total?> dagen'}],
										['<a href="?user=Nibb-it">Nibb-it</a>',  				{v: <?=$uNibbit_total?>, 			f: '<?=$uNibbit_total?> dagen'}],
										['<a href="?user=NJ">NJ</a>',  							{v: <?=$uNJ_total?>, 				f: '<?=$uNJ_total?> dagen'}],
										['<a href="?user=Oerbeer">Oerbeer</a>',  				{v: <?=$uOerbeer_total?>, 			f: '<?=$uOerbeer_total?> dagen'}],
										['<a href="?user=Ole">Ole</a>',  						{v: <?=$uOle_total?>, 				f: '<?=$uOle_total?> dagen'}],
										['<a href="?user=OpaBakkebaard">Opa.Bakkebaard</a>',	{v: <?=$uOpaBakkebaard_total?>, 	f: '<?=$uOpaBakkebaard_total?> dagen'}],
										['<a href="?user=paddy">paddy</a>',  					{v: <?=$upaddy_total?>, 			f: '<?=$upaddy_total?> dagen'}],
										['<a href="?user=Pharkus">Pharkus</a>',  				{v: <?=$uPharkus_total?>, 			f: '<?=$uPharkus_total?> dagen'}],
										['<a href="?user=Puala">Puala</a>',  					{v: <?=$uPuala_total?>, 			f: '<?=$uPuala_total?> dagen'}],
										['<a href="?user=Re">Re</a>',  							{v: <?=$uRe_total?>, 				f: '<?=$uRe_total?> dagen'}],
										['<a href="?user=rene90">rene90</a>',  					{v: <?=$urene90_total?>,			f: '<?=$urene90_total?> dagen'}],
										['<a href="?user=Renesite">Renesite</a>',  				{v: <?=$uRenesite_total?>,			f: '<?=$uRenesite_total?> dagen'}],
										['<a href="?user=RockabeIIa">RockabeIIa</a>',  			{v: <?=$uRockabeIIa_total?>,		f: '<?=$uRockabeIIa_total?> dagen'}],
										['<a href="?user=rubbereend">rubbereend</a>',  			{v: <?=$urubbereend_total?>,		f: '<?=$urubbereend_total?> dagen'}],
										['<a href="?user=Sack_Blabbath">Sack_Blabbath</a>',		{v: <?=$uSack_Blabbath_total?>, 	f: '<?=$uSack_Blabbath_total?> dagen'}],
										['<a href="?user=SaintOfKillers">SaintOfKillers</a>',	{v: <?=$uSaintOfKillers_total?>, 	f: '<?=$uSaintOfKillers_total?> dagen'}],
										['<a href="?user=senesta">senesta</a>',					{v: <?=$usenesta_total?>, 			f: '<?=$usenesta_total?> dagen'}],
										['<a href="?user=shmoopy">shmoopy</a>',					{v: <?=$ushmoopy_total?>, 			f: '<?=$ushmoopy_total?> dagen'}],
										['<a href="?user=SiIk">SiIk</a>',						{v: <?=$uSiIk_total?>, 				f: '<?=$uSiIk_total?> dagen'}],
										['<a href="?user=sitting_elfling">sitting_elfling</a>',	{v: <?=$usitting_elfling_total?>, 	f: '<?=$usitting_elfling_total?> dagen'}],
										['<a href="?user=Sjeen">Sjeen</a>',						{v: <?=$uSjeen_total?>, 			f: '<?=$uSjeen_total?> dagen'}],
										['<a href="?user=Snakey">Snakey</a>', 					{v: <?=$uSnakey_total?>, 			f: '<?=$uSnakey_total?> dagen'}],	
										['<a href="?user=Sounddragon">Sounddragon</a>',  		{v: <?=$uSounddragon_total?>, 		f: '<?=$uSounddragon_total?> dagen'}],
										['<a href="?user=sp3c">sp3c</a>',  						{v: <?=$usp3c_total?>, 				f: '<?=$usp3c_total?> dagen'}],
										['<a href="?user=Specularium">Specularium</a>',  		{v: <?=$uSpecularium_total?>, 		f: '<?=$uSpecularium_total?> dagen'}],
										['<a href="?user=static">static</a>',					{v: <?=$ustatic_total?>, 			f: '<?=$ustatic_total?> dagen'}],
										['<a href="?user=Tamashii">Tamashii</a>',				{v: <?=$uTamashii_total?>, 			f: '<?=$uTamashii_total?> dagen'}],
										['<a href="?user=timmmmm">timmmmm</a>',					{v: <?=$utimmmmm_total?>, 			f: '<?=$utimmmmm_total?> dagen'}],
										['<a href="?user=UIO_AMS">UIO_AMS</a>',					{v: <?=$uUIO_AMS_total?>, 			f: '<?=$uUIO_AMS_total?> dagen'}],
										['<a href="?user=Vonkenboer">Vonkenboer</a>',			{v: <?=$uVonkenboer_total?>, 		f: '<?=$uVonkenboer_total?> dagen'}],	
										['<a href="?user=zarGon">zarGon</a>', 					{v: <?=$uzarGon_total?>, 			f: '<?=$uzarGon_total?> dagen'}]
										]);
										var options = {'showRowNumber': true, 'allowHtml': true, sortColumn: 1, sortAscending: false, width: 245};

										var table = new google.visualization.Table(document.getElementById('ranglijst_totaal'));
										
										table.draw(data, options);
									  }
									</script>
									
									<div id='ranglijst_totaal'></div>
								</div>
								<div id="mods" class="tab-pane fade">								
									<script type='text/javascript' src='https://www.google.com/jsapi'></script>
									<script type='text/javascript'>
									  google.load('visualization', '1', {packages:['table']});
									  google.setOnLoadCallback(drawTable);
									  function drawTable() {
										var data = new google.visualization.DataTable();
										data.addColumn('string', 'User');
										data.addColumn('number', 'Aantal dagen');
										data.addRows([
										['<a href="?user=99.999">99999</a> / <a href="?user=du_ke">du_ke</a>',	{v: <?=$u99999_total?>,		f: '<?=$u99999_total?> dagen'}],
										['<a href="?user=ajacied4lf">ajacied4lf</a>',			{v: <?=$uajacied4lf_total?>, 		f: '<?=$uajacied4lf_total?> dagen'}],
										['<a href="?user=Anne">Anne</a>',						{v: <?=$uAnne_total?>, 				f: '<?=$uAnne_total?> dagen'}],
										['<a href="?user=APK">APK</a>', 						{v: <?=$uAPK_total?>, 				f: '<?=$uAPK_total?> dagen'}],
										['<a href="?user=arachide">arachide.</a>', 				{v: <?=$uarachide_total?>, 			f: '<?=$uarachide_total?> dagen'}],
										['<a href="?user=Automatic_Rock">Automatic_Rock</a>', 	{v: <?=$uAutomatic_Rock_total?>, 	f: '<?=$uAutomatic_Rock_total?> dagen'}],
										['<a href="?user=Bart">Bart</a>',  						{v: <?=$uBart_total?>, 				f: '<?=$uBart_total?> dagen'}],
										['<a href="?user=belsen">belsen</a>',					{v: <?=$ubelsen_total?>, 			f: '<?=$ubelsen_total?> dagen'}],
										['<a href="?user=boem-dikkie">boem-dikkie</a>',			{v: <?=$uboemdikkie_total?>, 		f: '<?=$uboemdikkie_total?> dagen'}],
										['<a href="?user=Bosbeetle">Bosbeetle</a>',				{v: <?=$uBosbeetle_total?>, 		f: '<?=$uBosbeetle_total?> dagen'}],
										['<a href="?user=Brighteyes">Brighteyes</a>',			{v: <?=$uBrighteyes_total?>, 		f: '<?=$uBrighteyes_total?> dagen'}],
										['<a href="?user=Cat22">Cat22</a>', 					{v: <?=$uCat22_total?>, 			f: '<?=$uCat22_total?> dagen'}],
										['<a href="?user=Cobra4">Cobra4</a>', 					{v: <?=$uCobra4_total?>, 			f: '<?=$uCobra4_total?> dagen'}],
										['<a href="?user=Copycat">Copycat</a>', 				{v: <?=$uCopycat_total?>, 			f: '<?=$uCopycat_total?> dagen'}],
										['<a href="?user=DaMart">DaMart</a>',					{v: <?=$uDaMart_total?>, 			f: '<?=$uDaMart_total?> dagen'}],
										['<a href="?user=Dark_Angelus">Dark_Angelus</a>',  		{v: <?=$uDark_Angelus_total?>, 		f: '<?=$uDark_Angelus_total?> dagen'}],
										['<a href="?user=De_Taartjesfee">De_Taartjesfee</a>',  {v: <?=$uDe_Taartjesfee_total?>, 	f: '<?=$uDe_Taartjesfee_total?> dagen'}],
										['<a href="?user=debuurvrouw">debuurvrouw</a>',  		{v: <?=$udebuurvrouw_total?>, 		f: '<?=$udebuurvrouw_total?> dagen'}],
										['<a href="?user=Dubbeldrank">Dubbeldrank</a>',			{v: <?=$uDubbeldrank_total?>, 		f: '<?=$uDubbeldrank_total?> dagen'}],
										['<a href="?user=Fendy">Fendy</a>',						{v: <?=$uFendy_total?>, 			f: '<?=$uFendy_total?> dagen'}],
										['<a href="?user=Ferdo">Ferdo</a>',						{v: <?=$uFerdo_total?>, 			f: '<?=$uFerdo_total?> dagen'}],
										['<a href="?user=Five_Horizons">Five_Horizons</a>',		{v: <?=$uFive_Horizons_total?>, 	f: '<?=$uFive_Horizons_total?> dagen'}],
										['<a href="?user=Fopje">Fopje</a>', 					{v: <?=$uFopje_total?>, 			f: '<?=$uFopje_total?> dagen'}],
										['<a href="?user=Frank_Drebin">Frank_Drebin</a>',  		{v: <?=$uFrank_Drebin_total?>,		f: '<?=$uFrank_Drebin_total?> dagen'}],
										['<a href="?user=Friek_">Friek_</a>',  					{v: <?=$uFriek__total?>,			f: '<?=$uFriek__total?> dagen'}],
										['<a href="?user=Frutsel">Frutsel</a>', 				{v: <?=$uFrutsel_total?>, 			f: '<?=$uFrutsel_total?> dagen'}],
										['<a href="?user=GGMM">GGMM</a>', 						{v: <?=$uGGMM_total?>, 				f: '<?=$uGGMM_total?> dagen'}],
										['<a href="?user=HeaN82">HeaN82</a>', 					{v: <?=$uHeaN82_total?>, 			f: '<?=$uHeaN82_total?> dagen'}],
										['<a href="?user=HeatWave">HeatWave</a>',				{v: <?=$uHeatWave_total?>, 			f: '<?=$uHeatWave_total?> dagen'}],
										['<a href="?user=HetKlusKonijn">HetKlusKonijn</a>',		{v: <?=$uHetKlusKonijn_total?>, 	f: '<?=$uHetKlusKonijn_total?> dagen'}],
										['<a href="?user=Hexagon">Hexagon</a>',					{v: <?=$uHexagon_total?>, 			f: '<?=$uHexagon_total?> dagen'}],
										['<a href="?user=Houniet">Houniet</a>',					{v: <?=$uHouniet_total?>, 			f: '<?=$uHouniet_total?> dagen'}],	
										['<a href="?user=iBenny">iBenny</a>',  					{v: <?=$uiBenny_total?>,			f: '<?=$uiBenny_total?> dagen'}],
										['<a href="?user=IHVK">IHVK</a>',  						{v: <?=$uIHVK_total?>,				f: '<?=$uIHVK_total?> dagen'}],
										['<a href="?user=JDude">JDude</a>',  					{v: <?=$uJDude_total?>,				f: '<?=$uJDude_total?> dagen'}],
										['<a href="?user=jitzzzze">jitzzzze</a>',  				{v: <?=$ujitzzzze_total?>,			f: '<?=$ujitzzzze_total?> dagen'}],
										['<a href="?user=Kaas-">Kaas-</a>',  					{v: <?=$uKaas_total?>, 				f: '<?=$uKaas_total?> dagen'}],
										['<a href="?user=kanovinnie">kanovinnie</a>',  			{v: <?=$ukanovinnie_total?>, 		f: '<?=$ukanovinnie_total?> dagen'}],
										['<a href="?user=Karina">Karina</a>',  					{v: <?=$uKarina_total?>, 			f: '<?=$uKarina_total?> dagen'}],
										['<a href="?user=Lavenderr">Lavenderr</a>',  			{v: <?=$uLavenderr_total?>, 		f: '<?=$uLavenderr_total?> dagen'}],
										['<a href="?user=LethalNinja">LethalNinja</a>',  		{v: <?=$uLethalNinja_total?>, 		f: '<?=$uLethalNinja_total?> dagen'}],
										['<a href="?user=liesje1979">liesje1979</a>',  			{v: <?=$uliesje1979_total?>, 		f: '<?=$uliesje1979_total?> dagen'}],
										['<a href="?user=LittleBrownie">LittleBrownie</a>',  	{v: <?=$uLittleBrownie_total?>, 	f: '<?=$uLittleBrownie_total?> dagen'}],
										['<a href="?user=Lois">Lois</a>', 						{v: <?=$uLois_total?>, 				f: '<?=$uLois_total?> dagen'}],
										['<a href="?user=LompeHork">LompeHork</a>',  			{v: <?=$uLompeHork_total?>, 		f: '<?=$uLompeHork_total?> dagen'}],
										['<a href="?user=Lotusss">Lotusss</a>',  				{v: <?=$uLotusss_total?>, 			f: '<?=$uLotusss_total?> dagen'}],
										['<a href="?user=Lutte">Lutte</a>', 					{v: <?=$uLutte_total?>, 			f: '<?=$uLutte_total?> dagen'}],
										['<a href="?user=Magneet">Magneet</a>',					{v: <?=$uMagneet_total?>, 			f: '<?=$uMagneet_total?> dagen'}],
										['<a href="?user=Maharbal">Maharbal</a>',				{v: <?=$uMaharbal_total?>, 			f: '<?=$uMaharbal_total?> dagen'}],
										['<a href="?user=Maisnon">Maisnon</a>',					{v: <?=$uMaisnon_total?>, 			f: '<?=$uMaisnon_total?> dagen'}],
										['<a href="?user=Marie30">Marie30</a>',					{v: <?=$uMarie30_total?>, 			f: '<?=$uMarie30_total?> dagen'}],
										['<a href="?user=Mike">Mike</a>',						{v: <?=$uMike_mod?>, 				f: '<?=$uMike_mod?> dagen'}],
										['<a href="?user=MissBliss">MissBliss</a>', 			{v: <?=$uMissBliss_total?>, 		f: '<?=$uMissBliss_total?> dagen'}],
										['<a href="?user=Misstique">Misstique</a>',				{v: <?=$uMisstique_total?>, 		f: '<?=$uMisstique_total?> dagen'}],
										['<a href="?user=Ml-etje">Ml-etje</a>',					{v: <?=$uMletje_total?>, 			f: '<?=$uMletje_total?> dagen'}],
										['<a href="?user=Mortaxx">Mortaxx</a>', 				{v: <?=$uMortaxx_total?>, 			f: '<?=$uMortaxx_total?> dagen'}],
										['<a href="?user=motorbloempje">motorbloempje</a>', 	{v: <?=$umotorbloempje_total?>, 	f: '<?=$umotorbloempje_total?> dagen'}],
										['<a href="?user=murp">murp</a>',						{v: <?=$umurp_total?>, 				f: '<?=$umurp_total?> dagen'}],	
										['<a href="?user=Mylene">Mylene</a>',					{v: <?=$uMylene_total?>, 			f: '<?=$uMylene_total?> dagen'}],
										['<a href="?user=Natalie">Natalie</a>',  				{v: <?=$uNatalie_total?>, 			f: '<?=$uNatalie_total?> dagen'}],
										['<a href="?user=Nibb-it">Nibb-it</a>',  				{v: <?=$uNibbit_total?>, 			f: '<?=$uNibbit_total?> dagen'}],
										['<a href="?user=NJ">NJ</a>',  							{v: <?=$uNJ_mod?>, 					f: '<?=$uNJ_mod?> dagen'}],
										['<a href="?user=Oerbeer">Oerbeer</a>',  				{v: <?=$uOerbeer_total?>, 			f: '<?=$uOerbeer_total?> dagen'}],
										['<a href="?user=Ole">Ole</a>',  						{v: <?=$uOle_total?>, 				f: '<?=$uOle_total?> dagen'}],
										['<a href="?user=OpaBakkebaard">Opa.Bakkebaard</a>',	{v: <?=$uOpaBakkebaard_mod?>, 		f: '<?=$uOpaBakkebaard_mod?> dagen'}],
										['<a href="?user=paddy">paddy</a>',  					{v: <?=$upaddy_total?>, 			f: '<?=$upaddy_total?> dagen'}],
										['<a href="?user=Pharkus">Pharkus</a>',  				{v: <?=$uPharkus_total?>, 			f: '<?=$uPharkus_total?> dagen'}],
										['<a href="?user=Puala">Puala</a>',  					{v: <?=$uPuala_total?>, 			f: '<?=$uPuala_total?> dagen'}],										
										['<a href="?user=Re">Re</a>',  							{v: <?=$uRe_total?>, 				f: '<?=$uRe_total?> dagen'}],
										['<a href="?user=rene90">rene90</a>',  					{v: <?=$urene90_total?>,			f: '<?=$urene90_total?> dagen'}],
										['<a href="?user=Renesite">Renesite</a>',  				{v: <?=$uRenesite_total?>,			f: '<?=$uRenesite_total?> dagen'}],
										['<a href="?user=RockabeIIa">RockabeIIa</a>',  			{v: <?=$uRockabeIIa_total?>,		f: '<?=$uRockabeIIa_total?> dagen'}],
										['<a href="?user=rubbereend">rubbereend</a>',  			{v: <?=$urubbereend_total?>,		f: '<?=$urubbereend_total?> dagen'}],
										['<a href="?user=Sack_Blabbath">Sack_Blabbath</a>',		{v: <?=$uSack_Blabbath_total?>, 	f: '<?=$uSack_Blabbath_total?> dagen'}],
										['<a href="?user=SaintOfKillers">SaintOfKillers</a>',	{v: <?=$uSaintOfKillers_total?>, 	f: '<?=$uSaintOfKillers_total?> dagen'}],
										['<a href="?user=senesta">senesta</a>',					{v: <?=$usenesta_total?>, 			f: '<?=$usenesta_total?> dagen'}],
										['<a href="?user=SiIk">SiIk</a>',						{v: <?=$uSiIk_total?>, 				f: '<?=$uSiIk_total?> dagen'}],
										['<a href="?user=sitting_elfling">sitting_elfling</a>',	{v: <?=$usitting_elfling_total?>, 	f: '<?=$usitting_elfling_total?> dagen'}],
										['<a href="?user=Sjeen">Sjeen</a>',						{v: <?=$uSjeen_total?>, 			f: '<?=$uSjeen_total?> dagen'}],
										['<a href="?user=shmoopy">shmoopy</a>',					{v: <?=$ushmoopy_mod?>, 			f: '<?=$ushmoopy_mod?> dagen'}],
										['<a href="?user=Snakey">Snakey</a>', 					{v: <?=$uSnakey_mod?>, 				f: '<?=$uSnakey_mod?> dagen'}],	
										['<a href="?user=Sounddragon">Sounddragon</a>',  		{v: <?=$uSounddragon_total?>, 		f: '<?=$uSounddragon_total?> dagen'}],
										['<a href="?user=sp3c">sp3c</a>',  						{v: <?=$usp3c_total?>, 				f: '<?=$usp3c_total?> dagen'}],
										['<a href="?user=Specularium">Specularium</a>',  		{v: <?=$uSpecularium_total?>, 		f: '<?=$uSpecularium_total?> dagen'}],
										['<a href="?user=static">static</a>',					{v: <?=$ustatic_total?>, 			f: '<?=$ustatic_total?> dagen'}],
										['<a href="?user=Tamashii">Tamashii</a>',				{v: <?=$uTamashii_total?>, 			f: '<?=$uTamashii_total?> dagen'}],
										['<a href="?user=timmmmm">timmmmm</a>',					{v: <?=$utimmmmm_total?>, 			f: '<?=$utimmmmm_total?> dagen'}],
										['<a href="?user=UIO_AMS">UIO_AMS</a>',					{v: <?=$uUIO_AMS_total?>, 			f: '<?=$uUIO_AMS_total?> dagen'}],
										['<a href="?user=Vonkenboer">Vonkenboer</a>',			{v: <?=$uVonkenboer_total?>, 		f: '<?=$uVonkenboer_total?> dagen'}],	
										['<a href="?user=zarGon">zarGon</a>', 					{v: <?=$uzarGon_total?>, 			f: '<?=$uzarGon_total?> dagen'}]
										]);
										

										var table = new google.visualization.Table(document.getElementById('ranglijst_mods'));
										
										table.draw(data, { 
														showRowNumber: true,
														allowHtml: true,
														sortColumn: 1, 
														sortAscending: false,
														width: 245
														 }
												   );
									  }
									</script>
									
									<div id='ranglijst_mods'></div>
								</div>
								<div id="fa" class="tab-pane fade">
									<script type='text/javascript' src='https://www.google.com/jsapi'></script>
									<script type='text/javascript'>
									  google.load('visualization', '1', {packages:['table']});
									  google.setOnLoadCallback(drawTable);
									  function drawTable() {
										var data = new google.visualization.DataTable();
										data.addColumn('string', 'User');
										data.addColumn('number', 'Aantal dagen');
										data.addRows([
										['<a href="?user=Mike">Mike</a>',						{v: <?=$uMike_i2?>, 				f: '<?=$uMike_i2?> dagen'}],
										['<a href="?user=Natalie">Natalie</a>',  				{v: <?=$uNatalie_i3?>, 				f: '<?=$uNatalie_i3?> dagen'}],
										['<a href="?user=NJ">NJ</a>',  							{v: <?=$uNJ_FA?>, 					f: '<?=$uNJ_FA?> dagen'}],
										['<a href="?user=OpaBakkebaard">Opa.Bakkebaard</a>',	{v: <?=$uOpaBakkebaard_i4?>, 		f: '<?=$uOpaBakkebaard_i4?> dagen'}],
										['<a href="?user=Pharkus">Pharkus</a>',					{v: <?=$uPharkus_i2?>, 				f: '<?=$uPharkus_i2?> dagen'}],
										['<a href="?user=shmoopy">shmoopy</a>',					{v: <?=$ushmoopy_i4?>, 				f: '<?=$ushmoopy_i4?> dagen'}],
										['<a href="?user=Snakey">Snakey</a>', 					{v: <?=$uSnakey_i3?>, 				f: '<?=$uSnakey_i3?> dagen'}]
										]);
										

										var table = new google.visualization.Table(document.getElementById('ranglijst_fas'));
										
										table.draw(data, { 
														showRowNumber: true,
														allowHtml: true,
														sortColumn: 1, 
														sortAscending: false,
														width: 245
														 }
												   );
									  }
									</script>
									
									<div id='ranglijst_fas'></div>
								</div>
							</div>														
						</div>
					</div>
				</div>



