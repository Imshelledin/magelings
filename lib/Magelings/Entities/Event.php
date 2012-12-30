<?php

	namespace Magelings\Entities;

	class Event {

		public $id;
		public $name;
		public $description;
		public $registration;
		public $start;
		public $price;

		public function __construct(array $event = null) {
			if ($event) {
				foreach ($event as $k = $v) {
					$this->$k = $v;
				}
			}
		}

		public function setEvent() {

		}

		public function getEvent($id) {
			
		}
	}