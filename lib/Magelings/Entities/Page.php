<?php
	
	namespace Magelings\Entities;

	class Page {

		public $id;
		public $title;
		public $url;
		public $content;
		public $modified;

		public function __construct(array $data = null) {
			if ($data) {
				foreach ($data as $k => $v) {
					$this->$k = $v;
				}
			}
		}

		public function set(array $data) {
			foreach ($data as $k => $v) {
				$this->$k = $v;
			}
		}

		
	}