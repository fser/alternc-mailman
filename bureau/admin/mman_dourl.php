<?php
/*
 ----------------------------------------------------------------------
 AlternC - Web Hosting System
 Copyright (C) 2000-2012 by the AlternC Development Team.
 https://alternc.org/
 ----------------------------------------------------------------------
 LICENSE

 This program is free software; you can redistribute it and/or
 modify it under the terms of the GNU General Public License (GPL)
 as published by the Free Software Foundation; either version 2
 of the License, or (at your option) any later version.

 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 GNU General Public License for more details.

 To read the license please visit http://www.gnu.org/copyleft/gpl.html
 ----------------------------------------------------------------------
 Purpose of file: Change a list's management url.
 ----------------------------------------------------------------------
*/
require_once("../class/config.php");

$fields = array (
		 "id"     => array ("request", "integer", ""),
		 "newurl"     => array ("request", "string", ""),
		 );
getFields($fields);

$r=$mailman->set_list_url($id,$newurl);
if (!$r) {
  $error=$err->errstr();
  include("mman_url.php");
  exit();
} else {
  $error=_("The mailing list management url has been successfully changed.");
  include("mman_list.php");
  exit();
}
?>
