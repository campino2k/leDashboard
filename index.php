<?php

include( 'inc/includes.php' );

	function active_user() {
		//return false;

		User::login( "cjung", "test" );
	};
	if( active_user() === false ){
		die( 'No user session' );
	};
?>
<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">

		<title>leDashboard</title>
		<link rel="shortcut icon" href="style/img/favicon.ico" />
		<!--link rel="stylesheet" href="style/screen.css" /-->

		<link rel="stylesheet" type="text/css" href="style/css/ledashboard/jquery-ui-1.8.21.custom.css">
		<link rel="stylesheet/less" type="text/css" href="style/less/screen.less">
		
		<script src="js/less-1.3.0.min.js" type="text/javascript"></script>

	</head>

	<body>

		<header>
			<h1><img src="style/img/dashboard.png"> leDashboard</h1>
			<div class="menu">
				<button class="reload_all">reload all</button>
				<button class="add_feed">Add Feed</button>
				<button class="settings">Settings</button>
			</div>
		</header>

		<section id="feeds"></section>



		<footer>
			<p>2012, <a href="http://campino2k.de">Christian Jung</a> | Fork me on <a href="http://github.com/campino2k/leDashboard">Github</a> | Dashboard Icon <a href="http://creativecommons.org/licenses/by/3.0/">CC-BY</a> from <a href="http://www.doublejdesign.co.uk/products-page/icons/super-mono-icons/">Double-J Design's "Super Mono" Iconset</a></p>
		</footer>

		<div id="new-feed-form" title="Add new feed">
			<p class="validateTips">All form fields are required.</p>

			<form>
				<fieldset>
					<label for="id">ID</label>
					<input type="text" name="id" id="id" class="text ui-widget-content ui-corner-all" />
					<label for="site_title">Site title</label>
					<input type="text" name="site_title" id="site_title" value="" class="text ui-widget-content ui-corner-all" />
					<label for="feed_url">Feed URL</label>
					<input type="text" name="feed_url" id="feed_url" value="" class="text ui-widget-content ui-corner-all" />
					<label for="site_url">Site URL</label>
					<input type="text" name="site_url" id="site_url" value="" class="text ui-widget-content ui-corner-all" />
					<label for="entries">Number of entries</label>
					<input type="number" name="entries" id="entries" value="" class="text ui-widget-content ui-corner-all" />
				</fieldset>
			</form>
		</div>

		<div id="settings-form" title="Settings">
			<p class="validateTips">All form fields are required.</p>

			<form>
				<fieldset>

					<label for="columns">Columns</label>
					<input type="number" min="2" max="5" name="columns" id="columns" class="text ui-widget-content ui-corner-all" />

					<label for="background_url">Background image URL</label>
					<input type="text" name="background_url" id="background_url" value="" class="text ui-widget-content ui-corner-all" />
				
					<label for="reload_time">Reload time</label>
					<p>Minutes to reload the feeds</p>
					<input type="number" name="reload_time" id="reload_time" value="" class="text ui-widget-content ui-corner-all" />
					
				</fieldset>
			</form>
		</div>
	</body>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.23/jquery-ui.min.js"></script>
	<script src="js/notification.class.js"></script>
	<script src="js/feed.class.js"></script>
	<script src="js/form.feed_add.js"></script>
	<script src="js/form.settings.js"></script>
	<script src="js/action.js"></script>
</html>