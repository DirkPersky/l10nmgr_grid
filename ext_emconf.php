<?php

/***************************************************************
 * Extension Manager/Repository config file for ext: "l10nmgr_grid"
 *
 * Auto generated by Extension Builder 2015-12-04
 *
 * Manual updates:
 * Only the data in the array - anything else is removed by next write.
 * "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array(
	'title' => 'l10nmgr Grid Extension',
	'description' => 'Extends the l10nmgr for Gridelements Individual FlexForm configuration. Now you can Translate Every Gridelemnts Field from Input-Text to tt_content.',
	'category' => 'module',
	'author' => 'Web-Kon Internetagentur',
	'author_email' => 'technik@web-kon.de',
	'state' => 'alpha',
	'internal' => '',
	'uploadfolder' => '0',
	'createDirs' => '',
	'clearCacheOnLoad' => 0,
	'version' => '0.1.5',
	'constraints' => array(
		'depends' => array(
			'typo3' => '6.2.0-6.2.99',
			'l10nmgr' => '3.6.4',
			'gridelements' => '3.2.0'
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
);
