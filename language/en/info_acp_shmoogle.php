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

// Adding new category
$lang['permission_cat']['shmoogle'] = 'Shmoogle Map';

// Adding the permissions
$lang = array_merge($lang, array(
	'acl_u_view_shmoogle_users'		=> array('lang' => 'Shmoogle User Map: Can view Shmoogle User Maps', 'cat' => 'shmoogle'),
	'acl_u_add_shmoogle_user'	 	=> array('lang' => 'Shmoogle User Map: Can add a Shmoogle User Marker', 'cat' => 'shmoogle'),
	'acl_u_view_shmoogle_events'	=> array('lang' => 'Shmoogle Event Map: Can view Shmoogle Event Map', 'cat' => 'shmoogle'),
	'acl_u_add_shmoogle_events'		=> array('lang' => 'Shmoogle Event Map: Can add Events to Shmoogle Map', 'cat' => 'shmoogle'),
));