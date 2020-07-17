<?php
/* For license terms, see /license.txt */

require_once(__DIR__.'/chamilo_h5p.php');

if(!api_is_platform_admin()){
    die('You must have admin permissions to install plugins');
}

chamilo_h5p::create()->install();
