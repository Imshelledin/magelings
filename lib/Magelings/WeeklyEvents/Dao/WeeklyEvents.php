<?php

	namespace Magelings\WeeklyEvents\Dao;

	class WeeklyEvents {

		protected $dbm;

		public function __construct() {

		}

		public function getEvent($id) {
			$q = "
				SELECT
					id,
					name,
					description,
					registration,
					start,
					price,
					day
				FROM
					weekly_events
				WHERE
					id = $id
			";
			$r = mysql_query($q);
			return mysql_fetch_assoc($r);
		}

		public function setEvent(\Magelings\Entities\WeeklyEvent $event) {

		}

		public function newEvent(\Magelings\Entities\WeeklyEvent $event) {
		
		}
	}