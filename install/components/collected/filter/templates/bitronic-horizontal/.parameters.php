<?

/**
 * Copyright (c) 6/3/2020 Created By/Edited By ASDAFF asdaff.asad@yandex.ru
 */

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
	die();

$arTemplateParameters = array(
	"THEME" => Array(
		"PARENT" => "ADDITIONAL_SETTINGS",
		"NAME" => GetMessage("COLLECTED_CMP_FILTER_THEME"),
		"TYPE" => "LIST",
		"VALUES" => array(
			"red" => GetMessage("COLLECTED_CMP_FILTER_THEME_RED"),
			"ice" => GetMessage("COLLECTED_CMP_FILTER_THEME_ICE"),
			"green" => GetMessage("COLLECTED_CMP_FILTER_THEME_GREEN"),
			"pink" => GetMessage("COLLECTED_CMP_FILTER_THEME_PINK"),
			"yellow" => GetMessage("COLLECTED_CMP_FILTER_THEME_YELLOW"),			
			"metal" => GetMessage("COLLECTED_CMP_FILTER_THEME_METAL")		
		),
		"DEFAULT" => "red",
	)
);
?>