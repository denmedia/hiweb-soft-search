<?php
	/**
	 * Created by PhpStorm.
	 * User: hiweb
	 * Date: 21.08.2016
	 * Time: 9:50
	 */


	add_action('save_post', array(hiweb_search(), 'add_action_save_post'));
	add_action('pre_get_posts', array(hiweb_search(), 'add_action_pre_get_posts'), 20);
	add_action('wp', array(hiweb_search(), 'add_action_wp'), 20);