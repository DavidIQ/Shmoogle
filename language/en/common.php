<?php
/**
 *
 * Shmoogle Member Map. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2016, David Col??n, http://www.davidiq.com
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'SHMOOGLE_TITLE'			=> 'Shmoogle Member Map',

	'ACP_DEMO_GOODBYE'			=> 'Should say goodbye?',

	'ACP_SHMOOGLE_SETTINGS'		=> 'Settings',
	'ACP_SHMOOGLE_SETTINGS_SAVED'=> 'Shmoogle configuration settings have been saved successfully!',

	'UCP_SHMOOGLE_SAVED'		=> 'Shmoogle user settings have been saved successfully!',
));
