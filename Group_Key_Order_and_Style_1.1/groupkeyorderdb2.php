<?php

if (file_exists(dirname(__FILE__) . '/SSI.php') && !defined('SMF'))
	require_once(dirname(__FILE__) . '/SSI.php');
elseif (!defined('SMF'))
	die('<b>Error:</b> Cannot update database.');

if (empty($modSettings['arrange_groupkeyorder']))
	updateSettings(array('arrange_groupkeyorder' => '1,2,8,7,6,5,4'));
?>