<?php
/**
 *
 * Shmoogle Member Map. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2016, David Col??n, http://www.davidiq.com
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace davidiq\Shmoogle\acp;

/**
 * Shmoogle Member Map ACP module info.
 */
class main_info
{
	public function module()
	{
		return array(
			'filename'	=> '\davidiq\Shmoogle\acp\main_module',
			'title'		=> 'ACP_CAT_SHMOOGLE',
			'modes'		=> array(
				'config'		=> array(
					'title' => 'ACP_SHMOOGLE_CONFIG',
					'auth' => 'acl_a_modules',
					'cat' => array('ACP_CAT_SHMOOGLE')
				),
				'events'		=> array(
					'title' => 'ACP_SHMOOGLE_EVENTS',
					'auth' => 'acl_a_modules',
					'cat' => array('ACP_CAT_SHMOOGLE')
				),
				'markers'		=> array(
					'title' => 'ACP_SHMOOGLE_MARKERS',
					'auth' => 'acl_a_modules',
					'cat' => array('ACP_CAT_SHMOOGLE')
				),
				'event_markers'	=> array(
					'title' => 'ACP_SHMOOGLE_EVENT_MARKERS',
					'auth' => 'acl_a_modules',
					'cat' => array('ACP_CAT_SHMOOGLE')
				),
				'users'			=> array(
					'title' => 'ACP_SHMOOGLE_USERS',
					'auth' => 'acl_a_modules',
					'cat' => array('ACP_CAT_SHMOOGLE')
				),
			),
		);
	}
}
