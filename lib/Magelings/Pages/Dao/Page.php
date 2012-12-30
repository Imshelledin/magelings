<?php
	
	namespace Magelings\Pages\Dao;

	class Page {

		public function __connect() {
			Entities\DB::connect();
		}

		public function getPage($id) {
			$query = "
				SELECT * FROM pages WHERE id = $id
			";

			$result = mysql_query($query) or die(mysql_error());

			while ($row = mysql_fetch_array($result)) {
				$data = $row;
			}

			return $data;
		}
	}