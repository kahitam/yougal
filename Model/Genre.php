<?php
App::uses('YougalAppModel', 'Yougal.Model');
/**
 * Genre Model
 *
 * @property Video $Video
 */
class Genre extends YougalAppModel {

	public $actsAs = array(
		'Croogo.Trackable'
	);

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Video' => array(
			'className' => 'Yougal.Video',
			'joinTable' => 'genres_videos',
			'foreignKey' => 'genre_id',
			'associationForeignKey' => 'video_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		)
	);

}
