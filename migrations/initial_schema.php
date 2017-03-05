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

class initial_schema extends \phpbb\db\migration\migration
{
	public function effectively_installed()
	{
		return $this->db_tools->sql_table_exists($this->table_prefix . 'shmoogle_users');
	}

	static public function depends_on()
	{
		return array('\phpbb\db\migration\data\v320\v320');
	}

	public function update_schema()
	{
		return array(
			'add_tables'		=> array(
				$this->table_prefix . 'shmoogle_users'	=> array(
					'COLUMNS'		=> array(
						'id'						=> array('UINT', null, 'auto_increment'),
						'user_id'					=> array('UINT', 0),
						'latitude'					=> array('UINT', 0),
						'longitude'					=> array('UINT', 0),
						'map_center'				=> array('VCHAR', '(42, 3)'),
						'comment'					=> array('MTEXT_UNI', ''),
						'comment_bbcode_uid'		=> array('VCHAR:8', ''),
						'comment_bbcode_bitfield'	=> array('VCHAR', ''),
						'icon'						=> array('TINT:3', 3),
						'allow'						=> array('TINT:1', 1),
						'show_me'					=> array('TINT:1', 0),
						'map_width'					=> array('VCHAR:4', ''),
						'map_width_measure'			=> array('VCHAR:10', ''),
						'map_height'				=> array('VCHAR:4', ''),
						'map_height_measure'		=> array('VCHAR:10', ''),
					),
					'PRIMARY_KEY'	=> array('id'),
				),
				$this->table_prefix . 'shmoogle_config'	=> array(
					'COLUMNS'	=> array(
						'map_id'				=> array('INT:11', null, 'auto_increment'),
  						'map_width'				=> array('VCHAR:4', '640'),
  						'width_measure' 		=> array('VCHAR:10', 'px'),
						'map_height' 			=> array('VCHAR:4', '480'),
						'height_measure'		=> array('VCHAR:10', 'px'),
						'profile_map_width' 	=> array('VCHAR:4', '400'),
						'profile_width_measure' => array('VCHAR:10', 'px'),
						'profile_map_height' 	=> array('VCHAR:4', '300'),
						'profile_height_measure'=> array('VCHAR:10', 'px'),
						'api_key' 				=> array('VCHAR', ''),
						'api_lang'				=> array('CHAR:5', 'en'),
						'show_control'			=> array('VCHAR:5', '1'),
						'show_type'				=> array('VCHAR:5', '1'),
						'terrain_map'			=> array('VCHAR:5', 'true'),
						'traffic_over'			=> array('VCHAR:5', 'false'),
						'control_type'			=> array('VCHAR:8', 'large'),
						'show_contextmenu'		=> array('VCHAR:5', '1'),
						'show_scale'			=> array('VCHAR:5', '1'),
						'show_overview'			=> array('VCHAR:5', '1'),
						'show_gbar'				=> array('VCHAR:5', 'true'),
						'init_zoom'				=> array('TINT:2', 1),
						'user_zoom'				=> array('TINT:2', 8),
						'zoom_limit'			=> array('TINT:2', 19),
						'dbl_clk_zm'			=> array('VCHAR:5', 'true'),
						'cont_zm'				=> array('VCHAR:5', 'true'),
						'scr_whl_zm'			=> array('VCHAR:5', 'true'),
						'map_center'			=> array('VCHAR', '(42, 3)'),
						'auto_fit'				=> array('TINT:1', 0),
						'use_special_markers' 	=> array('TINT:1', 1),
						'use_events' 			=> array('TINT:1', 1),
						'allow_coppa'			=> array('TINT:1', 0),
						'marker_folder' 		=> array('VCHAR:100', 'images/phoogle/markers/'),
						'event_marker_folder' 	=> array('VCHAR:100', 'images/phoogle/events/'),
						'event_map_name' 		=> array('VCHAR', 'Events'),
						'map_type' 				=> array('VCHAR:30', 'G_NORMAL_MAP'),
						'default_show' 			=> array('INT:11', 20),
						'dist_units' 			=> array('VCHAR:5', 'miles'),
						'kml_file'				=> array('MTEXT', ''),
					),
					'PRIMARY_KEY'	=> array('map_id'),
				),
				$this->table_prefix . 'shmoogle_events'	=> array(
					'COLUMNS'	=> array(
						'event_id' 					=> array('INT:11', null, 'auto_increment'),
  						'event_user_id' 			=> array('UINT', 0),
  						'event_map_center'			=> array('VCHAR', ''),
						'event_marker' 				=> array('TINT:3', 0),
						'event_title' 				=> array('VCHAR', ''),
						'event_desc'				=> array('MTEXT', ''),
						'event_desc_bbcode_uid' 	=> array('VCHAR:8', ''),
						'event_desc_bbcode_bitfield'=> array('VCHAR', ''),
						'event_time' 				=> array('VCHAR:30', ''),
					),
					'PRIMARY_KEY'	=> array('event_id'),
				),
				$this->table_prefix . 'shmoogle_events_markers'	=> array(
					'COLUMNS'	=> array(
						'marker_id' 	=> array('INT:11', null, 'auto_increment'),
						'marker_image' 	=> array('VCHAR', ''),
						'marker_width' 	=> array('VCHAR:5', '15'),
						'marker_height' => array('VCHAR:5', '15'),
						'marker_x'		=> array('VCHAR:5', '7'),
						'marker_y'		=> array('VCHAR:5', '15'),
						'shadow_image'	=> array('VCHAR', ''),
						'shadow_width' 	=> array('VCHAR:5', '26'),
						'shadow_height' => array('VCHAR:5', '15'),
						'marker_label' 	=> array('VCHAR:30', ''),
						'forum_assoc' 	=> array('TINT:3', 0),
					),
  					'PRIMARY_KEY'	=> array('marker_id'),
				),
				$this->table_prefix . 'shmoogle_markers' => array(
					'COLUMNS'	=> array(
						'marker_id' 	=> array('INT:11', null, 'auto_increment'),
						'marker_image' 	=> array('VCHAR', ''),
						'marker_width' 	=> array('VCHAR:5', '15'),
						'marker_height' => array('VCHAR:5', '15'),
						'marker_x' 		=> array('VCHAR:5', '7'),
						'marker_y' 		=> array('VCHAR:5', '15'),
						'shadow_image' 	=> array('VCHAR', ''),
						'shadow_width' 	=> array('VCHAR:5', '26'),
						'shadow_height' => array('VCHAR:5', '15'),
					),
					'PRIMARY_KEY'	=> array('marker_id'),
				),
			),
		);
	}

	public function revert_schema()
	{
		return array(
			'drop_tables'		=> array(
				$this->table_prefix . 'shmoogle_users',
				$this->table_prefix . 'shmoogle_config',
				$this->table_prefix . 'shmoogle_events',
				$this->table_prefix . 'shmoogle_events_markers',
				$this->table_prefix . 'shmoogle_markers',
			),
		);
	}
}
