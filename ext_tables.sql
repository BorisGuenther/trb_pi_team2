#
# Table structure for table 'tx_trbpiteam2_domain_model_user'
#
CREATE TABLE fe_users (

	tx_trb_pi_team2_nationality int(11) DEFAULT '0' NOT NULL,
	tx_trb_pi_team2_birthday date DEFAULT '0000-00-00',
	tx_trb_pi_team2_slogan varchar(255) DEFAULT '' NOT NULL,
	tx_trb_pi_team2_description text NOT NULL,
	tx_trb_pi_team2_mobile varchar(255) DEFAULT '' NOT NULL,
	tx_trb_pi_team2_skype varchar(255) DEFAULT '' NOT NULL,
	tx_trb_pi_team2_facebook varchar(255) DEFAULT '' NOT NULL,
	tx_trb_pi_team2_googleplus varchar(255) DEFAULT '' NOT NULL,
	tx_trb_pi_team2_linkedin varchar(255) DEFAULT '' NOT NULL,
	tx_trb_pi_team2_xing varchar(255) DEFAULT '' NOT NULL,
	tx_trb_pi_team2_twitter varchar(255) DEFAULT '' NOT NULL,
	tx_trb_pi_team2_size varchar(255) DEFAULT '' NOT NULL,
	tx_trb_pi_team2_weight varchar(255) DEFAULT '' NOT NULL,
	tx_trb_pi_team2_breast varchar(255) DEFAULT '' NOT NULL,
	tx_trb_pi_team2_measurements varchar(255) DEFAULT '' NOT NULL,
	
	tx_trb_pi_team2_shape int(11) unsigned DEFAULT '0' NOT NULL,
	tx_trb_pi_team2_eye_color int(11) unsigned DEFAULT '0' NOT NULL,
	tx_trb_pi_team2_hair_color int(11) unsigned DEFAULT '0' NOT NULL,
	tx_trb_pi_team2_haircut int(11) unsigned DEFAULT '0' NOT NULL,
	tx_trb_pi_team2_categories_like int(11) unsigned DEFAULT '0' NOT NULL,
	tx_trb_pi_team2_categories_dislike int(11) unsigned DEFAULT '0' NOT NULL,
	tx_trb_pi_team2_categories_other int(11) unsigned DEFAULT '0' NOT NULL,

	tx_trb_pi_team2_image_profile int(11) unsigned NOT NULL default '0',
	tx_trb_pi_team2_image_gallery int(11) unsigned NOT NULL default '0',
);


#
# Table structure for table 'tx_trbpiteam2_domain_model_schedule'
#
CREATE TABLE tx_trbpiteam2_domain_model_schedule (

	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,

	start date DEFAULT '0000-00-00',
	end date DEFAULT '0000-00-00',
	users int(11) unsigned DEFAULT '0' NOT NULL,

	tstamp int(11) unsigned DEFAULT '0' NOT NULL,
	crdate int(11) unsigned DEFAULT '0' NOT NULL,
	cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
	deleted tinyint(4) unsigned DEFAULT '0' NOT NULL,
	hidden tinyint(4) unsigned DEFAULT '0' NOT NULL,
	starttime int(11) unsigned DEFAULT '0' NOT NULL,
	endtime int(11) unsigned DEFAULT '0' NOT NULL,

	t3ver_oid int(11) DEFAULT '0' NOT NULL,
	t3ver_id int(11) DEFAULT '0' NOT NULL,
	t3ver_wsid int(11) DEFAULT '0' NOT NULL,
	t3ver_label varchar(255) DEFAULT '' NOT NULL,
	t3ver_state tinyint(4) DEFAULT '0' NOT NULL,
	t3ver_stage int(11) DEFAULT '0' NOT NULL,
	t3ver_count int(11) DEFAULT '0' NOT NULL,
	t3ver_tstamp int(11) DEFAULT '0' NOT NULL,
	t3ver_move_id int(11) DEFAULT '0' NOT NULL,

	sys_language_uid int(11) DEFAULT '0' NOT NULL,
	l10n_parent int(11) DEFAULT '0' NOT NULL,
	l10n_diffsource mediumblob,

	PRIMARY KEY (uid),
	KEY parent (pid),
	KEY t3ver_oid (t3ver_oid,t3ver_wsid),
 KEY language (l10n_parent,sys_language_uid)

);

#
# Table structure for table 'tx_trbpiteam2_domain_model_schedule_mm'
#
CREATE TABLE tx_trbpiteam2_domain_model_schedule_mm (
  uid_local int(11) DEFAULT '0' NOT NULL,
  uid_foreign int(11) DEFAULT '0' NOT NULL,
  sorting int(11) DEFAULT '0' NOT NULL,

  KEY uid_local (uid_local),
  KEY uid_foreign (uid_foreign)
);
