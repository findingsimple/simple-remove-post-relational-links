<?php
/*
Plugin Name: Simple Remove Post Relational Links
Plugin URI: http://plugins.findingsimple.com
Description: Drop in for disabling the head post relational links. 
Version: 1.0
Author: Finding Simple
Author URI: http://findingsimple.com
License: GPL2
*/
/*
Copyright 2013  Finding Simple  (email : plugins@findingsimple.com)

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

if ( ! class_exists( 'Simple_Remove_Post_Relational_Links' ) ) :

/**
 * Plugin Main Class.
 *
 * @package Simple Remove Post Relational Links
 * @author Jason Conroy <jason@findingsimple.com>
 * @since 1.0
 */
class Simple_Remove_Post_Relational_Links {
	
	/**
	 * Initialise
	 */
	function Simple_Remove_Post_Relational_Links() {
		
		add_action( 'init', array( &$this , 'simple_remove_relation_actions' ) );

	}

	/**
	 * Remove actions that create the post relation links
	 */
	function simple_remove_relation_actions() {
	
		remove_action( 'wp_head', 'index_rel_link' ); // index link
		remove_action( 'wp_head', 'parent_post_rel_link_wp_head', 10, 0 ); // prev link
		remove_action( 'wp_head', 'start_post_rel_link_wp_head', 10, 0 ); // start link
		remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 ); // Display relational links for the posts adjacent to the current post.
	
	}		

}

$Simple_Remove_Post_Relational_Links = new Simple_Remove_Post_Relational_Links();

endif;

