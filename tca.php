<?php
if (!defined ("TYPO3_MODE")) 	die ("Access denied.");

$TCA["tx_aobannercodes_bannercodes"] = Array (
	"ctrl" => $TCA["tx_aobannercodes_bannercodes"]["ctrl"],
	"interface" => Array (
		"showRecordFieldList" => "hidden,starttime,endtime,fe_group,bannername,bannercode"
	),
	"feInterface" => $TCA["tx_aobannercodes_bannercodes"]["feInterface"],
	"columns" => Array (
		"hidden" => Array (		
			"exclude" => 1,	
			"label" => "LLL:EXT:lang/locallang_general.php:LGL.hidden",
			"config" => Array (
				"type" => "check",
				"default" => "0"
			)
		),
		"starttime" => Array (		
			"exclude" => 1,	
			"label" => "LLL:EXT:lang/locallang_general.php:LGL.starttime",
			"config" => Array (
				"type" => "input",
				"size" => "8",
				"max" => "20",
				"eval" => "date",
				"default" => "0",
				"checkbox" => "0"
			)
		),
		"endtime" => Array (		
			"exclude" => 1,	
			"label" => "LLL:EXT:lang/locallang_general.php:LGL.endtime",
			"config" => Array (
				"type" => "input",
				"size" => "8",
				"max" => "20",
				"eval" => "date",
				"checkbox" => "0",
				"default" => "0",
				"range" => Array (
					"upper" => mktime(0,0,0,12,31,2020),
					"lower" => mktime(0,0,0,date("m")-1,date("d"),date("Y"))
				)
			)
		),
		"fe_group" => Array (		
			"exclude" => 1,	
			"label" => "LLL:EXT:lang/locallang_general.php:LGL.fe_group",
			"config" => Array (
				"type" => "select",	
				"items" => Array (
					Array("", 0),
					Array("LLL:EXT:lang/locallang_general.php:LGL.hide_at_login", -1),
					Array("LLL:EXT:lang/locallang_general.php:LGL.any_login", -2),
					Array("LLL:EXT:lang/locallang_general.php:LGL.usergroups", "--div--")
				),
				"foreign_table" => "fe_groups"
			)
		),
		"bannername" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:ao_bannercodes/locallang_db.php:tx_aobannercodes_bannercodes.bannername",		
			"config" => Array (
				"type" => "input",	
				"size" => "30",
			)
		),
		"bannercode" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:ao_bannercodes/locallang_db.php:tx_aobannercodes_bannercodes.bannercode",		
			"config" => Array (
				"type" => "text",
				"cols" => "30",	
				"rows" => "5",
			)
		),
	),
	"types" => Array (
		"0" => Array("showitem" => "hidden;;1;;1-1-1, bannername, bannercode")
	),
	"palettes" => Array (
		"1" => Array("showitem" => "starttime, endtime, fe_group")
	)
);
?>