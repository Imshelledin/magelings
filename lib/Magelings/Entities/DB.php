<?php

	namespace Magelings\Entities;

	class DB {

		const HOST 	= 'localhost';
		const USERNAME 	= 'magelingsadmin';
		const PASSWORD 	= 'Dumb13Dor3';
		const DATABASE	= 'magelings_dev';

		public $db;

		public $query_string;

		public static function __construct(array $conn_settings = null) {
			$this->query_string = '';

			if (!$conn_settings) {
				$this->db = new PDO('
					mysql:host=' . self::HOST . ';
					dbname=' . self:DATABASE . ';
					charset=UTF-8
				',
				self:USERNAME,
				self:PASSWORD,
				array(
					PDO::ATTR_EMULATE_PREPARES => false, 
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
                )
				);
			}
			return $this->db;
		}

		public function select($select_string) {
			$this->query_string .= 'SELECT ' . $select_string;
		}

		public function from($table, $alias) {
			$this->query_string .= 'FROM ' . $table . ' ' . $alias;
		}

		public function join($join_table, $table, $alias, $statement) {
			$this->query_string .= 'JOIN ' . $table . ' ' . $alias . ' ON ' . $statement;
		}

		public function leftJoin($join_table, $table, $alias, $statement) {
			$this->query_string .= 'JOIN ' . $table . ' ' . $alias . ' ON ' . $statement;
		}

		public function where($where_statement) {
			$this->query_string .= 'WHERE ' . $where_statement;
		}

		public function andWhere($where_statement) {
			$this->query_string .= 'AND (' . $where_statement . ')';
		}

		public function orderBy($order_statement, $direction = 'ASC') {
			$this->query_string .= 'ORDER BY ' . $order_statement . ' ' . $direction;
		}

		public function groupBy($group_statement) {
			$this->query_string .= 'GROUP BY ' . $group_statement;
		}


	}