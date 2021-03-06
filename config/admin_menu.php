<?php

namespace Croogo\Users\Config;

use Croogo\Croogo\CroogoNav;

CroogoNav::add('sidebar', 'users', array(
	'icon' => array('user', 'large'),
	'title' => __d('croogo', 'Users'),
	'url' => array(
		'prefix' => 'admin',
		'plugin' => 'Croogo/Users',
		'controller' => 'Users',
		'action' => 'index',
	),
	'weight' => 50,
	'children' => array(
		'users' => array(
			'title' => __d('croogo', 'Users'),
			'url' => array(
				'prefix' => 'admin',
				'plugin' => 'Croogo/Users',
				'controller' => 'Users',
				'action' => 'index',
			),
			'weight' => 10,
		),
		'roles' => array(
			'title' => __d('croogo', 'Roles'),
			'url' => array(
				'prefix' => 'admin',
				'plugin' => 'Croogo/Users',
				'controller' => 'Roles',
				'action' => 'index',
			),
			'weight' => 20,
		),
	),
));
