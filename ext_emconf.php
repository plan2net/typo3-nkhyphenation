<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "nkhyphenation".
 *
 * Auto generated | Identifier: 4b21c88b83e286b83477e06a03b16e9a
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
	'title' => 'Server side hyphenation for TYPO3',
	'description' => 'Adds soft hyphenation capabilities to TYPO3. Provides a ViewHelper, a stdWrap property and some static templates to enable hyphenation.',
	'category' => 'fe',
	'version' => '2.0.0',
	'state' => 'beta',
	'uploadfolder' => 1,
	'createDirs' => 'uploads/tx_nkhyphenation/',
	'clearcacheonload' => 0,
	'author' => 'Jost Baron',
	'author_email' => 'j.baron@netzkoenig.de',
	'author_company' => 'Netzkönig GbR',
	'constraints' => 
	array (
		'depends' => 
		array (
			'php' => '5.3.7-7.1.99',
			'typo3' => '6.0.0-7.6.99',
		),
		'conflicts' => 
		array (
		),
		'suggests' => 
		array (
		),
	),
);

