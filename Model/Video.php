<?php
App::uses('YougalAppModel', 'Yougal.Model');
App::uses('Youtube', 'Yougal.Lib');
/**
 * Video Model
 *
 * @property Collection $Collection
 * @property Genre $Genre
 */
class Video extends YougalAppModel {

	public $actsAs = array(
		'Params',
	);

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'title';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'title' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'slug' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Collection' => array(
			'className' => 'Yougal.Collection',
			'foreignKey' => 'collection_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Genre' => array(
			'className' => 'Yougal.Genre',
			'joinTable' => 'genres_videos',
			'foreignKey' => 'video_id',
			'associationForeignKey' => 'genre_id',
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

	public function __construct($id = false, $table = null, $ds = null) {
		parent::__construct($this->name, $this->useTable, $this->useDbConfig);
		$this->Youtube = new Youtube;
	}

/**
 * Get youtube data from API beforeSaving
 */
	public function beforeSave($options = array()) {
		if (!empty($this->data['Video']['url'])) {
			$yId = $this->Youtube->getID($this->data['Video']['url']);
			$youtube = $this->Youtube->parseVideo($yId);
			$title = $youtube->title;
			$des = $youtube->desc;
			$this->data['Video']['title'] = $title;
			if (empty($desc)) {
				$this->data['Video']['description'] = null;
			} else {
				$this->data['Video']['description'] = $youtube->desc;
			}
			$this->data['Video']['author'] = $youtube->author;
			$this->data['Video']['slug'] = strtolower(Inflector::slug($title, '-'));
		}
		return true;
	}

}
