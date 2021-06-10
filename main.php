<?php
/*
Plugin Name: TAB - Only important Menu Items
Description: Remove unneccessary Menu Items
Version: 0.1
License: MIT License
Author: Flo Gesell
Author URI: https://flogesell.de
*/

	function remove_menus() {
        remove_menu_page('edit-comments.php');
        remove_menu_page('edit.php?post_type=feedback');
        remove_menu_page('tools.php');
	}

    add_action('admin_menu', 'remove_menus');

?>