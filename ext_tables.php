<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

t3lib_extMgm::allowTableOnStandardPages('tx_nkhyphenation_domain_model_hyphenationpatterns');
$TCA['tx_nkhyphenation_domain_model_hyphenationpatterns'] = array(
    'ctrl' => array(
        'title' => 'LLL:EXT:nkhyphenation/Resources/Private/Language/locallang_db.xml:hyphenationpatterns_recordlabel',
        'label' => 'title',
        'tstamp'    => 'tstamp',
        'crdate'    => 'crdate',
        'cruser_id' => 'cruser_id',
        'languageField' => 'system_language',
        'dividers2tabs' => 1,
        'delete' => 'deleted',
        'enablecolumns' => array(
            'disabled' => 'hidden',
        ),
        'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/Tca/hyphenationpatterns.php',
        'iconfile'          => t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/hyphenationpatterns.png',
        'searchFields' => 'uid,title',
    ),
);

// Help texts for the backend forms.
t3lib_extMgm::addLLrefForTCAdescr(
        'tx_nkhyphenation_domain_model_hyphenationpatterns', 'EXT:' . $_EXTKEY . '/Resources/Private/Language/locallang_hyphenationpatterns_csh.xml');

?>