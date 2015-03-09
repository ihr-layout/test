<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

//\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance();

$GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects']['TYPO3\CMS\Core\Resource\FileReference']['className'] = 'Ilisotope\IlIsotopeImages\Domain\Model\Isotope';

