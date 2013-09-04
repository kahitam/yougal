<?php

class YougalSchema extends CakeSchema {

	function before($event = array()) {
		return true;
	}

	function after($event = array()) {
	}

	var $collections = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 11, 'key' => 'primary'),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 11),
		'name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 100),
		'slug' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 100),
		'description' => array('type' => 'text', 'null' => true, 'default' => NULL),
		'status' => array('type' => 'boolean', 'null' => false, 'default' => 0),
		'params' => array('type' => 'text', 'null' => true, 'default' => NULL),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'created_by' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 11),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'modified_by' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 11),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array(
			'charset' => 'utf8',
			'collate' => 'utf8_unicode_ci',
			'engine' => 'InnoDb'
		)
	);

	var $genres = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 11, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'slug' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'description' => array('type' => 'text', 'null' => true, 'length' => 255),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'created_by' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 11),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'modified_by' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 11),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array(
			'charset' => 'utf8',
			'collate' => 'utf8_unicode_ci',
			'engine' => 'InnoDb'
		)
	);

	var $genres_videos = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 11, 'key' => 'primary'),
		'genre_id' => array('type' => 'integer', 'null' => false),
		'video_id' => array('type' => 'integer', 'null' => false),
		'indexes' => array(
			'id' => array('column' => array('id'), 'unique' => true),
			'ix_genres_video' => array(
				'column' => array('genre_id', 'video_id'),
				'unique' => true
			)
		),
		'tableParameters' => array(
			'charset' => 'utf8',
			'collate' => 'utf8_unicode_ci',
			'engine' => 'InnoDb'
		)
	);

	var $videos = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 11, 'key' => 'primary'),
		'collection_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 11),
		'title' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 160),
		'slug' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 160),
		'url' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'description' => array('type' => 'text', 'null' => true, 'default' => NULL),
		'author' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'status' => array('type' => 'boolean', 'null' => false, 'default' => 0),
		'params' => array('type' => 'text', 'null' => true, 'default' => NULL),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'created_by' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 11),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'modified_by' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 11),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array(
			'charset' => 'utf8',
			'collate' => 'utf8_unicode_ci',
			'engine' => 'InnoDb'
		)
	);
}
