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
			'title'		=> 'ACP_SHMOOGLE_TITLE',
			'modes'		=> array(
				'settings'	=> array(
					'title'	=> 'ACP_SHMOOGLE_CONFIG',
					'auth'	=> 'ext_davidiq/Shmoogle && acl_a_board',
					'cat'	=> array('ACP_SHMOOGLE_TITLE')
				),
			),
		);
	}
}
