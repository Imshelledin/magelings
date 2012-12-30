<?php

	namespace Magelings\WeeklyEvents;

	class WeeklyEvents {

		protected $dao;

		public function __construct(\Magelings\WeeklyEvents\Dao\WeeklyEvents $dao) {
			$this->dao = $dao;
		}

		public function getEvent($id) {
			$event = $this->dao->getEvent($id);
			return new \Magelings\Entities\WeeklyEvent($event);
		}

		public function setEvent(\Magelings\Entities\WeeklyEvent $event) {

		}

		public function newEvent(\Magelings\Entities\WeeklyEvent $event) {
		
		}
	}