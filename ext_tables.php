<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

/*
 * PLUGIN
 */
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin($_EXTKEY, 'User', 'User');
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin($_EXTKEY, 'Schedule', 'Schedule');

/*
 * FLEXFORM: User
 */
$TCA['tt_content']['types']['list']['subtypes_excludelist']['trbpiteam2_user'] = 'layout,select_key,pages';
$TCA['tt_content']['types']['list']['subtypes_addlist']['trbpiteam2_user'] = 'pi_flexform';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue('trbpiteam2_user', 'FILE:EXT:'.$_EXTKEY.'/Configuration/FlexForms/user.xml');

/*
 * FLEXFORM: Schedule
 */
$TCA['tt_content']['types']['list']['subtypes_excludelist']['trbpiteam2_schedule'] = 'layout,select_key,pages';
$TCA['tt_content']['types']['list']['subtypes_addlist']['trbpiteam2_schedule'] = 'pi_flexform';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue('trbpiteam2_schedule', 'FILE:EXT:'.$_EXTKEY.'/Configuration/FlexForms/schedule.xml');

/*
 * TYPOSCRIPT
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'TRB Plugin: Team2');

/*
 * PAGE CONFIG
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="DIR:EXT:'.$_EXTKEY.'/Configuration/Page/">');


/*
 * TABLE: Schedule
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_trbpiteam2_domain_model_schedule');
$GLOBALS['TCA']['tx_trbpiteam2_domain_model_schedule'] = array(
		'ctrl' => array(
				'title'	=> 'LLL:EXT:trb_pi_team2/Resources/Private/Language/locallang_db.xlf:tx_trbpiteam2_domain_model_schedule',
				'label' => 'start',
				'tstamp' => 'tstamp',
				'crdate' => 'crdate',
				'cruser_id' => 'cruser_id',
				'dividers2tabs' => TRUE,

				'versioningWS' => 2,
				'versioning_followPages' => TRUE,

				'languageField' => 'sys_language_uid',
				'transOrigPointerField' => 'l10n_parent',
				'transOrigDiffSourceField' => 'l10n_diffsource',
				'delete' => 'deleted',
				'enablecolumns' => array(
						'disabled' => 'hidden',
						'starttime' => 'starttime',
						'endtime' => 'endtime',
				),
				'searchFields' => 'start,end,user,',
				'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/Schedule.php',
				'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_trbpiteam2_domain_model_schedule.gif'
		),
);
