				<ul class="nav">
					<!--<li class="nav-header">Navigatie...</li>-->
					<li <?php if (!isset($_GET['p']))  { echo 'class="active"'; } elseif ($_GET['p'] == 'home') { echo 'class="active"'; } ?>><a href="/home"><i class="fa fa-laptop"></i> <span>Home</span></a></li>
					<li <?php if ($_GET['p'] == 'user' OR $_GET['p'] == 'users') { echo 'class="active"'; } ?>><a href="/users"><i class="fa fa-users"></i> <span>Users</span></a></li>
					

					<li class="has-sub 
						<?php 
							if ($_GET['p'] == 'forum' OR $_GET['p'] == 'forums' OR $_GET['p'] == 'frontpage' OR $_GET['p'] == 'frontpages') 
							{ echo 'active'; } 
						?>">
						<a href="javascript:;"><b class="caret pull-right"></b><i class="fa fa-th"></i><span>Subsites</span></a>
						<ul class="sub-menu">
							<li <?php if ($_GET['p'] == 'fok' OR $_GET['p'] == 'foks')  { echo 'class="active"'; } ?>><a href="/foks">FOK!</a></li>
							<li <?php if ($_GET['p'] == 'forum' OR $_GET['p'] == 'forums')  { echo 'class="active"'; } ?>><a href="/forums">Forum</a></li>
							<li <?php if ($_GET['p'] == 'frontpage' OR $_GET['p'] == 'frontpages')  { echo 'class="active"'; } ?>><a href="/frontpages">Frontpage</a></li>
							<li <?php if ($_GET['p'] == 'game' OR $_GET['p'] == 'games')  { echo 'class="active"'; } ?>><a href="/games">Games</a></li>
							<li <?php if ($_GET['p'] == 'sport' OR $_GET['p'] == 'sports')  { echo 'class="active"'; } ?>><a href="/sports">Sport</a></li>
						</ul>
					</li>

					<li class="has-sub 
						<?php 
							if ($_GET['p'] == 'ranglijst') 
							{ echo 'active'; } 
						?>">
						<a href="javascript:;"><b class="caret pull-right"></b><i class="fa fa-sort-amount-desc"></i><span>Ranglijsten</span></a>
						<ul class="sub-menu">
							<li <?php if ($_GET['id'] == 'fok')  { echo 'class="active"'; } ?>><a href="/ranglijst/fok">FOK!</a></li>
							<li <?php if ($_GET['id'] == 'forum')  { echo 'class="active"'; } ?>><a href="/ranglijst/forum">Forum</a></li>
							<li <?php if ($_GET['id'] == 'frontpage')  { echo 'class="active"'; } ?>><a href="/ranglijst/frontpage">Frontpage</a></li>
							<li <?php if ($_GET['id'] == 'games')  { echo 'class="active"'; } ?>><a href="/ranglijst/games">Games</a></li>
							<li <?php if ($_GET['id'] == 'sport')  { echo 'class="active"'; } ?>><a href="/ranglijst/sport">Sport</a></li>
						</ul>
					</li>
					
					<li <?php if ($_GET['p'] == 'jubileums') { echo 'class="active"'; } ?>><a href="/jubileums"><i class="fa fa-thumbs-up"></i> <span>Jubileums</span></a></li>
					
					<!-- begin sidebar minify button -->
					<li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="fa fa-angle-double-left"></i></a></li>
			        <!-- end sidebar minify button -->
				</ul>