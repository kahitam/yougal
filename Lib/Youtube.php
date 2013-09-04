<?php

/**
 * Get Youtube data from API
 */
class Youtube extends Object {

	public $feedUrl = null;

	public function __construct() {
		$this->feedUrl = 'http://gdata.youtube.com/feeds/api/videos/';
	}

	public function log($msg) {
		parent::log($msg);
	}

/**
 * Get Youtube ID from YoutubeUrl
 * @youtubeUrl: value
 */
	public function getID($youtubeUrl) {
		$parts = parse_url($youtubeUrl);
		parse_str($parts['query']);
		return $v;
	}

/**
 * Simple Parse youtube video to get object data.
 * @youtubeID: value
 */
	public function parseVideo($youtubeID) {
		$obj = new stdClass;

		$feedUrl = $this->feedUrl . $youtubeID;
		$entry = simplexml_load_file($feedUrl);

		$obj->author = $entry->author->name;

		$media = $entry->children('http://search.yahoo.com/mrss/');
		$obj->title = $media->group->title;
		$obj->desc = $media->group->description;

		return $obj;
	}
}
