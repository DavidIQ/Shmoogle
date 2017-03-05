<?php
/**
 *
 * Shmoogle Member Map. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2016, David Colon, http://www.davidiq.com
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace davidiq\Shmoogle\migrations;

class initial_data extends \phpbb\db\migration\migration
{
	public function effectively_installed()
	{
		return $this->db->get_row_count($this->table_prefix . 'shmoogle_config');
	}

	static public function depends_on()
	{
		return array('\davidiq\Shmoogle\migrations\initial_schema');
	}

	public function update_data()
	{
		return array(
			array('custom', array(array($this, 'initialize_shmoogle'))),
		);
	}

	public function initialize_shmoogle()
	{
		$sql_array = array();
		$sql_array[] = "INSERT INTO {$this->table_prefix}shmoogle_config " . $this->db->sql_build_array('INSERT', array(
				'map_id'				=> 1,
				'map_width'				=> '640',
				'width_measure'			=> 'px',
				'map_height'			=> '480',
				'height_measure'		=> 'px',
				'profile_map_width'		=> '500',
				'profile_width_measure'	=> 'px',
				'profile_map_height'	=> '300',
				'profile_height_measure'=> 'px',
				'api_key'				=> 'API_KEY_GOES_HERE',
				'api_lang'				=> 'en',
				'show_control'			=> '1',
				'show_type'				=> '1',
				'terrain_map'			=> '1',
				'traffic_over'			=> '1',
				'control_type'			=> 'large3d',
				'show_contextmenu'		=> '1',
				'show_scale'			=> '0',
				'show_overview'			=> '0',
				'show_gbar'				=> '0',
				'init_zoom'				=> 1,
				'user_zoom'				=> 8,
				'zoom_limit'			=> 19,
				'dbl_clk_zm'			=> '1',
				'cont_zm'				=> '1',
				'scr_whl_zm'			=> '1',
				'map_center'			=> '(42, 3)',
				'auto_fit'				=> 0,
				'use_special_markers'	=> 1,
				'use_events'			=> 1,
				'allow_coppa'			=> 0,
				'marker_folder'			=> 'images/shmoogle/markers/',
				'event_marker_folder'	=> 'images/shmoogle/events/',
				'event_map_name'		=> 'Events',
				'map_type'				=> 'G_NORMAL_MAP',
				'default_show'			=> 20,
				'dist_units'			=> 'miles',
				'kml_file'				=> '',
			));

		$sql_array[] = "INSERT INTO {$this->table_prefix}shmoogle_events_markers " . $this->db->sql_build_array('INSERT',
				array(
					'marker_id'		=> 1,
					'marker_image'	=> 'for_sale.png',
					'marker_width'	=> '24',
					'marker_height' => '21',
					'marker_x'		=> '12',
					'marker_y'		=> '21',
					'shadow_image'	=> 'for_sale_s.png',
					'shadow_width'	=> '44',
					'shadow_height'	=> '21',
					'marker_label'	=> 'For Sale',
					'forum_assoc'	=> 0,
				),
				array(
					'marker_id'		=> 2,
					'marker_image'	=> 'sport.png',
					'marker_width'	=> '29',
					'marker_height' => '30',
					'marker_x'		=> '15',
					'marker_y'		=> '30',
					'shadow_image'	=> 'sport_s.png',
					'shadow_width'	=> '42',
					'shadow_height'	=> '30',
					'marker_label'	=> 'Sporting Event',
					'forum_assoc'	=> 0,
				),
				array(
					'marker_id'		=> 3,
					'marker_image'	=> 'house1.png',
					'marker_width'	=> '18',
					'marker_height' => '21',
					'marker_x'		=> '9',
					'marker_y'		=> '21',
					'shadow_image'	=> 'house1_s.png',
					'shadow_width'	=> '34',
					'shadow_height'	=> '21',
					'marker_label'	=> 'House for Rent',
					'forum_assoc'	=> 0,
				),
				array(
					'marker_id'		=> 4,
					'marker_image'	=> 'for_sale2.png',
					'marker_width'	=> '24',
					'marker_height' => '24',
					'marker_x'		=> '12',
					'marker_y'		=> '24',
					'shadow_image'	=> 'for_sale2_s.png',
					'shadow_width'	=> '42',
					'shadow_height'	=> '24',
					'marker_label'	=> 'House for Sale',
					'forum_assoc'	=> 0,
				),
				array(
					'marker_id'		=> 5,
					'marker_image'	=> 'car_red.png',
					'marker_width'	=> '18',
					'marker_height' => '17',
					'marker_x'		=> '9',
					'marker_y'		=> '17',
					'shadow_image'	=> 'car_red_s.png',
					'shadow_width'	=> '31',
					'shadow_height'	=> '17',
					'marker_label'	=> 'Car for Sale',
					'forum_assoc'	=> 0,
				),
				array(
					'marker_id'		=> 6,
					'marker_image'	=> 'knife_fork.png',
					'marker_width'	=> '32',
					'marker_height' => '32',
					'marker_x'		=> '16',
					'marker_y'		=> '32',
					'shadow_image'	=> 'knife_fork_s.png',
					'shadow_width'	=> '50',
					'shadow_height'	=> '30',
					'marker_label'	=> 'My Favorite Restaurant',
					'forum_assoc'	=> 0,
				),
				array(
					'marker_id'		=> 7,
					'marker_image'	=> 'bird_red.png',
					'marker_width'	=> '24',
					'marker_height' => '20',
					'marker_x'		=> '12',
					'marker_y'		=> '20',
					'shadow_image'	=> 'bird_shadow.png',
					'shadow_width'	=> '40',
					'shadow_height'	=> '20',
					'marker_label'	=> 'Bird Watching',
					'forum_assoc'	=> 0,
				)
			);

		$sql_array[] = "INSERT INTO {$this->table_prefix}shmoogle_events_markers " . $this->db->sql_build_array('INSERT',
				array(
					'marker_id'		=> 1,
					'marker_image'	=> 'admin.png',
					'marker_width'	=> '15',
					'marker_height'	=> '23',
					'marker_x'		=> '7',
					'marker_y'		=> '23',
					'shadow_image'	=> 'phoogle_shadow.png',
					'shadow_width'	=> '34',
					'shadow_height'	=> '21',
				),
				array(
					'marker_id'		=> 2,
					'marker_image'	=> 'moderator.png',
					'marker_width'	=> '15',
					'marker_height'	=> '23',
					'marker_x'		=> '7',
					'marker_y'		=> '23',
					'shadow_image'	=> 'phoogle_shadow.png',
					'shadow_width'	=> '34',
					'shadow_height'	=> '23',
				),
				array(
					'marker_id'		=> 3,
					'marker_image'	=> 'wink.png',
					'marker_width'	=> '15',
					'marker_height'	=> '23',
					'marker_x'		=> '7',
					'marker_y'		=> '23',
					'shadow_image'	=> 'phoogle_shadow.png',
					'shadow_width'	=> '34',
					'shadow_height'	=> '23',
				),
				array(
					'marker_id'		=> 4,
					'marker_image'	=> 'eek.png',
					'marker_width'	=> '15',
					'marker_height'	=> '23',
					'marker_x'		=> '7',
					'marker_y'		=> '23',
					'shadow_image'	=> 'phoogle_shadow.png',
					'shadow_width'	=> '34',
					'shadow_height'	=> '23',
				),
				array(
					'marker_id'		=> 5,
					'marker_image'	=> 'evil.png',
					'marker_width'	=> '15',
					'marker_height'	=> '23',
					'marker_x'		=> '7',
					'marker_y'		=> '23',
					'shadow_image'	=> 'phoogle_shadow.png',
					'shadow_width'	=> '34',
					'shadow_height'	=> '23',
				),
				array(
					'marker_id'		=> 6,
					'marker_image'	=> 'twisted.png',
					'marker_width'	=> '15',
					'marker_height'	=> '23',
					'marker_x'		=> '7',
					'marker_y'		=> '23',
					'shadow_image'	=> 'phoogle_shadow.png',
					'shadow_width'	=> '34',
					'shadow_height'	=> '23',
				),
				array(
					'marker_id'		=> 7,
					'marker_image'	=> 'surprised.png',
					'marker_width'	=> '15',
					'marker_height'	=> '23',
					'marker_x'		=> '7',
					'marker_y'		=> '23',
					'shadow_image'	=> 'phoogle_shadow.png',
					'shadow_width'	=> '34',
					'shadow_height'	=> '23',
				),
				array(
					'marker_id'		=> 8,
					'marker_image'	=> 'geek.png',
					'marker_width'	=> '15',
					'marker_height'	=> '23',
					'marker_x'		=> '7',
					'marker_y'		=> '23',
					'shadow_image'	=> 'phoogle_shadow.png',
					'shadow_width'	=> '34',
					'shadow_height'	=> '23',
				),
				array(
					'marker_id'		=> 9,
					'marker_image'	=> 'ubergeek.png',
					'marker_width'	=> '15',
					'marker_height'	=> '23',
					'marker_x'		=> '7',
					'marker_y'		=> '23',
					'shadow_image'	=> 'phoogle_shadow.png',
					'shadow_width'	=> '34',
					'shadow_height'	=> '23',
				),
				array(
					'marker_id'		=> 10,
					'marker_image'	=> 'razz.png',
					'marker_width'	=> '15',
					'marker_height'	=> '23',
					'marker_x'		=> '7',
					'marker_y'		=> '23',
					'shadow_image'	=> 'phoogle_shadow.png',
					'shadow_width'	=> '34',
					'shadow_height'	=> '23',
				),
				array(
					'marker_id'		=> 11,
					'marker_image'	=> 'smiley.png',
					'marker_width'	=> '15',
					'marker_height'	=> '23',
					'marker_x'		=> '7',
					'marker_y'		=> '23',
					'shadow_image'	=> 'phoogle_shadow.png',
					'shadow_width'	=> '34',
					'shadow_height'	=> '23',
				),
				array(
					'marker_id'		=> 12,
					'marker_image'	=> 'cool.png',
					'marker_width'	=> '15',
					'marker_height'	=> '23',
					'marker_x'		=> '7',
					'marker_y'		=> '23',
					'shadow_image'	=> 'phoogle_shadow.png',
					'shadow_width'	=> '34',
					'shadow_height'	=> '23',
				)
			);

		foreach ($sql_array as $sql)
		{
			$this->sql_query($sql);
		}
	}
}
