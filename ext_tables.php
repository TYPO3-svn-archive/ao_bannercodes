<?php
if (!defined ("TYPO3_MODE")) 	die ("Access denied.");

t3lib_extMgm::allowTableOnStandardPages("tx_aobannercodes_bannercodes");


t3lib_extMgm::addToInsertRecords("tx_aobannercodes_bannercodes");

$TCA["tx_aobannercodes_bannercodes"] = Array (
	"ctrl" => Array (
		"title" => "LLL:EXT:ao_bannercodes/locallang_db.php:tx_aobannercodes_bannercodes",		
		"label" => "bannername",	
		"tstamp" => "tstamp",
		"crdate" => "crdate",
		"cruser_id" => "cruser_id",
		"sortby" => "sorting",	
		"delete" => "deleted",	
		"enablecolumns" => Array (		
			"disabled" => "hidden",	
			"starttime" => "starttime",	
			"endtime" => "endtime",	
			"fe_group" => "fe_group",
		),
		"dynamicConfigFile" => t3lib_extMgm::extPath($_EXTKEY)."tca.php",
		"iconfile" => t3lib_extMgm::extRelPath($_EXTKEY)."icon_tx_aobannercodes_bannercodes.gif",
	),
	"feInterface" => Array (
		"fe_admin_fieldList" => "hidden, starttime, endtime, fe_group, bannername, bannercode",
	)
);
?>