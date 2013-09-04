<?php
Croogo::hookRoutes('Yougal');

CroogoNav::add('yougal', array(
	'title' => 'Yougal',
	'url' => '#',
	'weight' => 15,
	'children' => array(
		'genres' => array(
			'title' => 'Genres',
			'url' => array(
				'admin' => true,
				'plugin' => 'yougal',
				'controller' => 'genres',
				'action' => 'index',
			)
		),
		'collection' => array(
			'title' => 'Collections',
			'url' => array(
				'admin' => true,
				'plugin' => 'yougal',
				'controller' => 'collections',
				'action' => 'index'
			)
		),
		'videos' => array(
			'title' => 'Videos',
			'url' => array(
				'admin' => true,
				'plugin' => 'yougal',
				'controller' => 'videos',
				'action' => 'index',
			)
		)
	)
));
