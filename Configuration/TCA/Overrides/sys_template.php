<?php

defined('TYPO3_MODE') or die ('Access denied.');

// Register static templates
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('nkhyphenation', 'Configuration/TypoScript', 'Hyphenation - basic settings');
