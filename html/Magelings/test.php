<?php
	require_once('/var/www/html/Magelings/includes/initiate.php');

	$page = new Magelings\Pages\Page();

	$page_entity = new Magelings\Entities\Page($page->getPage(1));

	echo $page_entity->content;
	echo $page_entity->title;