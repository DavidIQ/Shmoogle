<?php
/**
 *
 * Shmoogle Member Map. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2016, David Col??n, http://www.davidiq.com
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace davidiq\Shmoogle\ucp;

/**
 * Shmoogle Member Map UCP module info.
 */
class main_info
{
	function module()
	{
		return array(
			'filename'	=> '\davidiq\Shmoogle\ucp\main_module',
			'modes'		=> array(
				'settings'	=> array(
					'title'	=> 'UCP_SHMOOGLE_SETTINGS',
					'auth'	=> 'ext_davidiq/Shmoogle',
					'cat'	=> array('UCP_SHMOOGLE_TITLE')
				),
			),
			'title'		=> 'UCP_SHMOOGLE',
			'modes'		=> array(
				'shmoogle'		=> array(
					'title' => 'UCP_PROFILE_SHMOOGLE',
					'auth' => '',
					'cat' => array('UCP_SHMOOGLE_TITLE')
				),
				'user_events'	=> array(
					'title' => 'UCP_PROFILE_ADD_EVENT',
					'auth' => '',
					'cat' => array('UCP_SHMOOGLE_TITLE')
				),
			),
		);
	}
}
