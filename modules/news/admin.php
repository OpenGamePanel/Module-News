<?php
function exec_ogp_module() {
	define("IN_SCRIPT_ADMIN","1");

	require("modules/news/include/SiteManager.class.php");
	$website = new SiteManager();
	$website->SetDataFile("modules/news/data/listings.xml");
	$website->LoadSettings();

	$website->LoadTemplate();

	if(!empty($_REQUEST["page"]) && preg_match("/^[a-z]+$/", $_REQUEST['page']))
	{
		$website->SetPage($_REQUEST["page"]);
	}
	else
	{
		$website->SetPage("home");
	}

	$website->Render();

}
?>
