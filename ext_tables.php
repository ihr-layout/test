<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Isotope Image');

if (!isset($GLOBALS['TCA']['sys_file_reference']['ctrl']['type'])) {
	if (file_exists($GLOBALS['TCA']['sys_file_reference']['ctrl']['dynamicConfigFile'])) {
		require_once($GLOBALS['TCA']['sys_file_reference']['ctrl']['dynamicConfigFile']);
	}
	// no type field defined, so we define it here. This will only happen the first time the extension is installed!!
	$GLOBALS['TCA']['sys_file_reference']['ctrl']['type'] = 'tx_extbase_type';
	$tempColumns = array();
	$tempColumns[$GLOBALS['TCA']['sys_file_reference']['ctrl']['type']] = array(
		'exclude' => 1,
		'label'   => 'LLL:EXT:il_isotope_images/Resources/Private/Language/locallang_db.xlf:tx_ilisotopeimages.tx_extbase_type',
		'config' => array(
			'type' => 'select',
			'items' => array(),
			'size' => 1,
			'maxitems' => 1,
		)
	);
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('sys_file_reference', $tempColumns, 1);
}

$tmp_il_isotope_images_columns = array(

	'isotope' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:il_isotope_images/Resources/Private/Language/locallang_db.xlf:tx_ilisotopeimages_domain_model_isotope.isotope',
		'config' => array(
			'type' => 'select',
			'items' => array(
				array('Normal', ' '),
				array('Breiter', 'big'),
			),
			'size' => 1,
			'maxitems' => 1,
			'eval' => ''
		),
	),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('sys_file_reference',$tmp_il_isotope_images_columns);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('sys_file_reference','isotope');
$TCA['sys_file_reference']['palettes']['imageoverlayPalette']['showitem'].=",--linebreak--,isotope";

