<?php
/*
Plugin Name: Disable Flash Uploader
Plugin URI: http://www.allancollins.net/193/wordpress-plugin-disable-flash-uploader/
Description: Go the browser uploader by default.
Version: 1.1
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

// Actions / Filters
add_action("init","dfu_check");
add_filter("image_upload_iframe_src","dfu_new");
add_filter("video_upload_iframe_src","dfu_new");
add_filter("audio_upload_iframe_src","dfu_new");


// Functions
function dfu_new($result) {
/* Add "&flash=0" to the media upload url. */
    $result.="&flash=0";
    return $result;
}

function dfu_check(){
/* If the current file is the media-new.php file, then redirect with the "?flash=0" in the URL. */
    $file=$_SERVER['REQUEST_URI'];
    if ($file == '/wp-admin/media-new.php') {
        header("Location: " . $file . "?flash=0");
    }
}



?>