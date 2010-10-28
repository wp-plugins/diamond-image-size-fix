<?php 
/*
 Plugin Name: Diamond Image Size Fix
 Plugin URI: http://wordpress.org/extend/plugins/apply-image-sizes/
 Description: When you edit an uploaded image in the media library you won't be able to applies your changes to the new additional image sizes, and the post thumbnail.
This plugin solves that problem. 
 Author: Daniel Bozo
 Version: 1.0
 Author URI: http://www.amegrant.com
 */
 
/*  Copyright 2010  Daniel Bozo  (email : daniel.bozo@amegrant.hu)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

function featured_image_corrector($args) {
		global $_wp_additional_image_sizes;		
		if ($_wp_additional_image_sizes)
			foreach ($_wp_additional_image_sizes as $k => $v)
				$args[count($args)] = $k;		
		return $args;
	}
	
	add_filter('intermediate_image_sizes', 'featured_image_corrector');

?>