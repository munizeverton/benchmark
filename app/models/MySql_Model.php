<?php
	class MySql_Model{
		protected $db;

		public function __construct($host, $user, $pass, $base){
			$this->db = new PDO("mysql:host=$host;dbname=$base", $user, $pass);

		}

		public function insert(Array $data, $table){
			foreach ($data as $ind => $val){
				$fields[] = $ind;
				$values[] = $val;
			}

			$fields = implode(', ', $fields);
			$values = "'" . implode("', '", $values) . "'";

			$this->db->query("INSERT INTO {$table} ({$fields}) VALUES ({$values})");

		}

		public function find($where = null){
			
		}

		public function update(Array $data, $id){
			
		}

		public function delete($id){
			
		}

		public function clear($table){
			$this->db->query("TRUNCATE TABLE {$table}");

		}

		
	}