	<?php
		function assignPageTitle($title){
			$title = "I Am Awesome";
			return $title;
		}
		add_filter( 'wp_title', 'assignPageTitle', 20);
