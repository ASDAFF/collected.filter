<?

/**
 * Copyright (c) 6/3/2020 Created By/Edited By ASDAFF asdaff.asad@yandex.ru
 */

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$arComponentDescription = array(
	"NAME" => GetMessage("KIT_CMP_FILTER_NAME"),
	"DESCRIPTION" => GetMessage("KIT_CMP_FILTER_DESCRIPTION"),
	"ICON" => "/images/kit_filter.gif",
	"CACHE_PATH" => "Y",
	"SORT" => 70,
	"PATH" => array(
		"ID" => "content",
		"CHILD" => array(
			"ID" => "catalog",
			"NAME" => GetMessage("KIT_CMP_FILTER_CATALOG"),
			"SORT" => 30,
		),
	),
);
?>