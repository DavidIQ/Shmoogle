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
			'title'		=> 'UCP_DEMO_TITLE',
			'modes'		=> array(
				'settings'	=> array(
					'title'	=> 'UCP_DEMO',
					'auth'	=> 'ext_davidiq/Shmoogle',
					'cat'	=> array('UCP_DEMO_TITLE')
				),
			),
		);
	}
}
