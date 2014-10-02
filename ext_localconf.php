<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

/*
 * PLUGIN
 */
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin('TRB.'.$_EXTKEY, 'User', array('User' => 'list, show'));
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin('TRB.'.$_EXTKEY, 'Schedule', array('Schedule' => 'list'));
