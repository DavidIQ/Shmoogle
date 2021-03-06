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
 * Shmoogle Member Map ACP module.
 */
class main_module
{
	public $u_action;

	public function main($id, $mode)
	{
		global $config, $request, $template, $user;

		$user->add_lang_ext('davidiq/Shmoogle', 'common');
		$this->tpl_name = 'acp_shmoogle_body';
		$this->page_title = $user->lang('ACP_SHMOOGLE_TITLE');
		add_form_key('davidiq/Shmoogle');

		if ($request->is_set_post('submit'))
		{
			if (!check_form_key('davidiq/Shmoogle'))
			{
				trigger_error('FORM_INVALID');
			}

			trigger_error($user->lang('ACP_SHMOOGLE_SETTING_SAVED') . adm_back_link($this->u_action));
		}

		$template->assign_vars(array(
			'U_ACTION'				=> $this->u_action,
		));
	}
}
