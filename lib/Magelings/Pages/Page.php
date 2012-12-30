<?php

	namespace Magelings\Pages;

	class Page {

		protected $dao;

		public function __construct(\Magelings\Page\Dao $dao = null) {
			if (!$dao) {
				$this->dao = new Dao\Page();
			} else {
				$this->dao = $dao;
			}
		}

		public function getPage($id) {
			return $this->dao->getPage($id);
		}

		public function addPage(\Magelings\Entities\Page $page) {
			return $this->dao->addPage($page);
		}

		public function updatePage(\Magelings\Entities\Page $page) {
			return $this->dao->updatePage($page);
		}

		public function deletePage(\Magelings\Entities\Page $page) {
			return $this->dao->deletePage($page);
		}
	}