<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

$GLOBALS['TCA']['fe_users']['columns']['www']['config']['size']	= 30;


$columns = array(

	'tx_trb_pi_team2_nationality' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:trb_pi_team2/Resources/Private/Language/locallang_db.xlf:fe_users.nationality',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('', 0)
				),
				'foreign_table' => 'static_countries',
				'foreign_table_where' => 'AND static_countries.pid=0 ORDER BY static_countries.cn_short_en',
				'size' => 1,
				'minitems' => 0,
				'maxitems' => 1
			)
		),
	'tx_trb_pi_team2_birthday' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:trb_pi_team2/Resources/Private/Language/locallang_db.xlf:fe_users.birthday',
			'config' => array(
					'dbType' => 'date',
					'type' => 'input',
					'size' => 7,
					'eval' => 'date',
					'checkbox' => 0,
					'default' => '0000-00-00'
			),
	),
	'tx_trb_pi_team2_slogan' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:trb_pi_team2/Resources/Private/Language/locallang_db.xlf:fe_users.slogan',
			'config' => array(
					'type' => 'input',
					'cols' => 30,
					'eval' => 'trim'
			)
	),
	'tx_trb_pi_team2_description' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:trb_pi_team2/Resources/Private/Language/locallang_db.xlf:fe_users.description',
			'config' => array(
					'type' => 'text',
					'cols' => 40,
					'rows' => 15,
					'eval' => 'trim',
					'wizards' => array(
							'RTE' => array(
									'icon' => 'wizard_rte2.gif',
									'notNewRecords'=> 1,
									'RTEonly' => 1,
									'script' => 'wizard_rte.php',
									'title' => 'LLL:EXT:cms/locallang_ttc.xlf:bodytext.W.RTE',
									'type' => 'script'
							)
					)
			),
	),
	'tx_trb_pi_team2_mobile' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:trb_pi_team2/Resources/Private/Language/locallang_db.xlf:fe_users.mobile',
			'config' => array(
					'type' => 'input',
					'size' => 20,
					'eval' => 'trim'
			),
	),
	'tx_trb_pi_team2_skype' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:trb_pi_team2/Resources/Private/Language/locallang_db.xlf:fe_users.skype',
			'config' => array(
					'type' => 'input',
					'size' => 20,
					'eval' => 'trim'
			),
	),
	'tx_trb_pi_team2_facebook' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:trb_pi_team2/Resources/Private/Language/locallang_db.xlf:fe_users.facebook',
			'config' => array(
					'type' => 'input',
					'size' => 30,
					'eval' => 'trim'
			),
	),
	'tx_trb_pi_team2_googleplus' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:trb_pi_team2/Resources/Private/Language/locallang_db.xlf:fe_users.googleplus',
			'config' => array(
					'type' => 'input',
					'size' => 30,
					'eval' => 'trim'
			),
	),
	'tx_trb_pi_team2_linkedin' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:trb_pi_team2/Resources/Private/Language/locallang_db.xlf:fe_users.linkedin',
			'config' => array(
					'type' => 'input',
					'size' => 30,
					'eval' => 'trim'
			),
	),
	'tx_trb_pi_team2_xing' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:trb_pi_team2/Resources/Private/Language/locallang_db.xlf:fe_users.xing',
			'config' => array(
					'type' => 'input',
					'size' => 30,
					'eval' => 'trim'
			),
	),
	'tx_trb_pi_team2_twitter' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:trb_pi_team2/Resources/Private/Language/locallang_db.xlf:fe_users.twitter',
			'config' => array(
					'type' => 'input',
					'size' => 30,
					'eval' => 'trim'
			),
	),
	'tx_trb_pi_team2_size' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:trb_pi_team2/Resources/Private/Language/locallang_db.xlf:fe_users.size',
			'config' => array(
					'type' => 'input',
					'size' => 30,
					'eval' => 'trim,int'
			),
	),
	'tx_trb_pi_team2_weight' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:trb_pi_team2/Resources/Private/Language/locallang_db.xlf:fe_users.weight',
			'config' => array(
					'type' => 'input',
					'size' => 30,
					'eval' => 'trim,int'
			),
	),
	'tx_trb_pi_team2_shape' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:trb_pi_team2/Resources/Private/Language/locallang_db.xlf:fe_users.shape',
			'config' => array(
				'type' => 'select',
				'items' => array(
						array('-'),
				),
				'MM' => 'sys_category_record_mm',
				'MM_match_fields' => array(
						'fieldname' => 'tx_trb_pi_team2_shape',
						'tablenames' => 'fe_users',
				),
				'MM_opposite_field' => 'items',
				'foreign_table' => 'sys_category',
				'foreign_table_where' => " AND (sys_category.parent IN( SELECT uid FROM sys_category WHERE sys_category.tx_trb_basics_identifier = 'trb_pi_team2.shape' AND (sys_category.sys_language_uid = 0 OR sys_category.l10n_parent))) ORDER BY sys_category.title",
				'size' => 1,
				'autoSizeMax' => 1,
				'minitems' => 0,
				'maxitems' => 1,
			),
	),
	'tx_trb_pi_team2_breast' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:trb_pi_team2/Resources/Private/Language/locallang_db.xlf:fe_users.breast',
			'config' => array(
					'type' => 'input',
					'size' => 30,
					'eval' => 'trim'
			),
	),
	'tx_trb_pi_team2_measurements' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:trb_pi_team2/Resources/Private/Language/locallang_db.xlf:fe_users.measurements',
			'config' => array(
					'type' => 'input',
					'size' => 30,
					'eval' => 'trim'
			),
	),
	'tx_trb_pi_team2_eye_color' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:trb_pi_team2/Resources/Private/Language/locallang_db.xlf:fe_users.eye_color',
			'config' => array(
				'type' => 'select',
				'items' => array(
						array('-'),
				),
				'MM' => 'sys_category_record_mm',
				'MM_match_fields' => array(
						'fieldname' => 'tx_trb_pi_team2_eye_color',
						'tablenames' => 'fe_users',
				),
				'MM_opposite_field' => 'items',
				'foreign_table' => 'sys_category',
				'foreign_table_where' => " AND (sys_category.parent IN( SELECT uid FROM sys_category WHERE sys_category.tx_trb_basics_identifier = 'trb_pi_team2.eye_color' AND (sys_category.sys_language_uid = 0 OR sys_category.l10n_parent))) ORDER BY sys_category.title",
				'size' => 1,
				'autoSizeMax' => 1,
				'minitems' => 0,
				'maxitems' => 1,
			),
	),
	'tx_trb_pi_team2_hair_color' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:trb_pi_team2/Resources/Private/Language/locallang_db.xlf:fe_users.hair_color',
			'config' => array(
				'type' => 'select',
				'items' => array(
						array('-'),
				),
				'MM' => 'sys_category_record_mm',
				'MM_match_fields' => array(
						'fieldname' => 'tx_trb_pi_team2_hair_color',
						'tablenames' => 'fe_users',
				),
				'MM_opposite_field' => 'items',
				'foreign_table' => 'sys_category',
				'foreign_table_where' => " AND (sys_category.parent IN( SELECT uid FROM sys_category WHERE sys_category.tx_trb_basics_identifier = 'trb_pi_team2.hair_color' AND (sys_category.sys_language_uid = 0 OR sys_category.l10n_parent))) ORDER BY sys_category.title",
				'size' => 1,
				'autoSizeMax' => 1,
				'minitems' => 0,
				'maxitems' => 1,
			),
	),
	'tx_trb_pi_team2_haircut' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:trb_pi_team2/Resources/Private/Language/locallang_db.xlf:fe_users.haircut',
			'config' => array(
				'type' => 'select',
				'items' => array(
						array('-'),
				),
				'MM' => 'sys_category_record_mm',
				'MM_match_fields' => array(
						'fieldname' => 'tx_trb_pi_team2_haircut',
						'tablenames' => 'fe_users',
				),
				'MM_opposite_field' => 'items',
				'foreign_table' => 'sys_category',
				'foreign_table_where' => " AND (sys_category.parent IN( SELECT uid FROM sys_category WHERE sys_category.tx_trb_basics_identifier = 'trb_pi_team2.hair_cut' AND (sys_category.sys_language_uid = 0 OR sys_category.l10n_parent))) ORDER BY sys_category.title",
				'size' => 1,
				'autoSizeMax' => 1,
				'minitems' => 0,
				'maxitems' => 1,
			),
	),
	'tx_trb_pi_team2_image_profile' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:trb_pi_team2/Resources/Private/Language/locallang_db.xlf:fe_users.image_profile',
			'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
					'tx_trb_pi_team2_image_profile',
					array('maxitems' => 1),
					$GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext']
			),
	),
	'tx_trb_pi_team2_image_gallery' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:trb_pi_team2/Resources/Private/Language/locallang_db.xlf:fe_users.image_gallery',
			'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
					'tx_trb_pi_team2_image_gallery',
					array(),
					$GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext']
			),
	),
	'tx_trb_pi_team2_categories_like' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:trb_pi_team2/Resources/Private/Language/locallang_db.xlf:fe_users.categories_like',
			'config' => array(
				'type' => 'select',
				'renderMode' => 'checkbox',
				'MM' => 'sys_category_record_mm',
				'MM_match_fields' => array(
						'fieldname' => 'tx_trb_pi_team2_categories_like',
						'tablenames' => 'fe_users',
				),
				'MM_opposite_field' => 'items',
				'foreign_table' => 'sys_category',
				'foreign_table_where' => " AND (sys_category.parent IN( SELECT uid FROM sys_category WHERE sys_category.tx_trb_basics_identifier = 'trb_pi_team2.optionals' AND (sys_category.sys_language_uid = 0 OR sys_category.l10n_parent))) ORDER BY sys_category.title",
				'size' => 10,
				'autoSizeMax' => 20,
				'minitems' => 0,
				'maxitems' => 20,
			),
	),
	'tx_trb_pi_team2_categories_dislike' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:trb_pi_team2/Resources/Private/Language/locallang_db.xlf:fe_users.categories_dislike',
			'config' => array(
				'type' => 'select',
				'renderMode' => 'checkbox',
				'MM' => 'sys_category_record_mm',
				'MM_match_fields' => array(
						'fieldname' => 'tx_trb_pi_team2_categories_dislike',
						'tablenames' => 'fe_users',
				),
				'MM_opposite_field' => 'items',
				'foreign_table' => 'sys_category',
				'foreign_table_where' => " AND (sys_category.parent IN( SELECT uid FROM sys_category WHERE sys_category.tx_trb_basics_identifier = 'trb_pi_team2.optionals' AND (sys_category.sys_language_uid = 0 OR sys_category.l10n_parent))) ORDER BY sys_category.title",
				'size' => 10,
				'autoSizeMax' => 20,
				'minitems' => 0,
				'maxitems' => 20,
			),
	),
	'tx_trb_pi_team2_categories_other' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:trb_pi_team2/Resources/Private/Language/locallang_db.xlf:fe_users.categories_other',
			'config' => array(
				'type' => 'select',
				'renderMode' => 'checkbox',
				'MM' => 'sys_category_record_mm',
				'MM_match_fields' => array(
						'fieldname' => 'tx_trb_pi_team2_categories_other',
						'tablenames' => 'fe_users',
				),
				'MM_opposite_field' => 'items',
				'foreign_table' => 'sys_category',
				'foreign_table_where' => " AND (sys_category.parent IN( SELECT uid FROM sys_category WHERE sys_category.tx_trb_basics_identifier = 'trb_pi_team2.optionals' AND (sys_category.sys_language_uid = 0 OR sys_category.l10n_parent))) ORDER BY sys_category.title",
				'size' => 10,
				'autoSizeMax' => 20,
				'minitems' => 0,
				'maxitems' => 20,
			),
	),

);


/*
 * REGISTER COLUMNS
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('fe_users', $columns);

// \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('fe_users', implode(',', array_keys($columns)));



/*
 * SETUP TYPE
*/
$GLOBALS['TCA']['fe_users']['types']['trb_pi_team2']['showitem']	= '
		tx_extbase_type, disable,username;;;;1-1-1, password, usergroup, lastlogin;;;;1-1-1,

	--div--;Person,
		name, tx_trb_pi_team2_nationality, tx_trb_pi_team2_birthday, company, title, tx_trb_pi_team2_slogan, tx_trb_pi_team2_description;;;richtext:rte_transform[mode=ts_links],

	--div--;Contact,
		address, zip, city, country,
		telephone, tx_trb_pi_team2_mobile, email, tx_trb_pi_team2_skype, fax,

	--div--;Web profiles,
		www, tx_trb_pi_team2_facebook, tx_trb_pi_team2_googleplus, tx_trb_pi_team2_linkedin, tx_trb_pi_team2_twitter, tx_trb_pi_team2_xing,

	--div--;Appearance,
		tx_trb_pi_team2_size, tx_trb_pi_team2_weight, tx_trb_pi_team2_shape, tx_trb_pi_team2_breast, tx_trb_pi_team2_measurements, tx_trb_pi_team2_eye_color, tx_trb_pi_team2_hair_color, tx_trb_pi_team2_haircut,

	--div--;Images,
		tx_trb_pi_team2_image_profile, tx_trb_pi_team2_image_gallery,

	--div--;Likes,
		tx_trb_pi_team2_categories_like, tx_trb_pi_team2_categories_dislike, tx_trb_pi_team2_categories_other,


	--div--;LLL:EXT:cms/locallang_tca.xlf:fe_users.tabs.options, lockToDomain;;;;1-1-1, TSconfig;;;;2-2-2, felogin_redirectPid;;;;1-1-1,
	--div--;LLL:EXT:cms/locallang_tca.xlf:fe_users.tabs.access, starttime, endtime,
	--div--;LLL:EXT:cms/locallang_tca.xlf:fe_users.tabs.extended

';
