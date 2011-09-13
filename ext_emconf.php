<?php

########################################################################
# Extension Manager/Repository config file for ext "cps_stopdc".
#
# Auto generated 14-09-2011 00:34
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Stop Duplicate Content',
	'description' => 'Forces TYPO3 to use the latest url for any page. This helps to avoid duplicate content.',
	'category' => 'fe',
	'shy' => 0,
	'version' => '0.2.0',
	'dependencies' => '',
	'conflicts' => '',
	'priority' => '',
	'loadOrder' => '',
	'module' => '',
	'state' => 'beta',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearcacheonload' => 1,
	'lockType' => '',
	'author' => 'Nicole Cordes',
	'author_email' => 'cordes@cps-it.de',
	'author_company' => 'CPS-IT GmbH (http://www.cps-it.de)',
	'CGLcompliance' => '',
	'CGLcompliance_note' => '',
	'constraints' => array(
		'depends' => array(
			'php' => '5.0.0-0.0.0',
			'typo3' => '4.2.0-0.0.0',
			'cps_devlib' => '0.6.0-0.0.0',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:6:{s:9:"ChangeLog";s:4:"7152";s:21:"ext_conf_template.txt";s:4:"a460";s:12:"ext_icon.gif";s:4:"3c44";s:17:"ext_localconf.php";s:4:"5e56";s:13:"locallang.xml";s:4:"7e37";s:37:"hooks/class.tx_cpsstopdc_tslib_fe.php";s:4:"e43c";}',
);

?>