<?php
/*
Plugin Name: Custom Editor Permissions
Description: Grant additional permissions to the Editor role.
Version: 1.0
Author: webcraft.pk
*/

define("WPUR_URL", untrailingslashit(plugins_url(basename(dirname(__FILE__)))));

include_once "class_install.php";

global $ins;
$ins = new wpur_install();