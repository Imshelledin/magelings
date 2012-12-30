<?php

	namespace Magelings\Entities;

	class WeeklyEvent {

		public $id;
		public $name;
		public $description;
		public $registration;
		public $start;
		public $price;
		public $day;

		public function __construct(array $event = null) {
			if ($event) {
				foreach ($event as $k = $v) {
					$this->$k = $v;
				}
			}
		}

		public function setWeeklyEvent() {

		}

		public function getWeeklyEvent($id) {
			
		}
	}