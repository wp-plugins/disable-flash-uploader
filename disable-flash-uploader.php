<?php
/*
Plugin Name: Disable Flash Uploader
Plugin URI: http://www.allancollins.net/193/wordpress-plug…flash-uploader
Description: Go the browser uploader by default.
Version: 1.0.2
Author: Allan Collins
Author URI: http://www.allancollins.net/
*/
/*
Copyright (C) 2009 Allan Collins

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/

function dfu_code() {

	echo "<script type=\"text/javascript\">
	
		jQuery(function() {

			var up_link=jQuery('#add_image').attr('href');
			
			up_link=up_link.replace('TB_iframe=true','flash=0&amp;TB_iframe=true');
			jQuery('#add_image').attr('href',up_link);
		
		
		});
		</script>
		";
	

}

function dfu_code2() {



	echo "<script type=\"text/javascript\">

	

		jQuery(document).ready(function() {



			var mylink=jQuery(\"a[href='media-new.php']\");
			jQuery(mylink).attr('href','media-new.php?flash=0');
	

		

		

		});

		</script>

		";

	



}


add_action('edit_form_advanced', 'dfu_code');
add_action('edit_page_form', 'dfu_code');
add_action('admin_footer', 'dfu_code2');
?>