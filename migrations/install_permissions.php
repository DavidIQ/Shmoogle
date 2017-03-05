<?php
/**
 *
 * Shmoogle Member Map. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2016, David Col??n, http://www.davidiq.com
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace davidiq\Shmoogle\migrations;

class install_permissions extends \phpbb\db\migration\migration
{
	public function effectively_installed()
	{
		return true;
	}

	static public function depends_on()
	{
		return array('\davidiq\Shmoogle\migrations\initial_data');
	}

	public function update_data()
	{
		return array(
			array('permission.add', array('u_view_shmoogle_users')),
			array('permission.add', array('u_add_shmoogle_user')),
			array('permission.add', array('u_view_shmoogle_events')),
			array('permission.add', array('u_add_shmoogle_events')),

			array('permission.permission_set', array('ROLE_USER_FULL', 'u_view_shmoogle_users')),
			array('permission.permission_set', array('ROLE_USER_STANDARD', 'u_view_shmoogle_users')),
			array('permission.permission_set', array('ROLE_ADMIN_FULL','u_add_shmoogle_user')),
			array('permission.permission_set', array('ROLE_ADMIN_STANDARD','u_add_shmoogle_user')),
			array('permission.permission_set', array('ROLE_USER_FULL', 'u_view_shmoogle_events')),
			array('permission.permission_set', array('ROLE_USER_STANDARD', 'u_view_shmoogle_events')),
			array('permission.permission_set', array('ROLE_ADMIN_FULL','u_add_shmoogle_events')),
			array('permission.permission_set', array('ROLE_ADMIN_STANDARD','u_add_shmoogle_events')),
		);
	}
}
