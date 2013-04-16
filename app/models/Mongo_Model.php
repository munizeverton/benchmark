<?php
	class Mongo_Model{
		protected $conn;
		protected $db;
		protected $col;

		public function __construct($host, $base, $collection){
			$this->conn = new Mongo($host);
  			$this->db = $this->conn->$base;
  			$this->col = $this->db->$collection;
		}

		public function insert(Array $data){
			$this->col->insert($data);			
		}

		public function find($where = null){
			
		}

		public function update(Array $data, $id){
			
		}

		public function delete($id){
			
		}

		public function clear(){
			$this->col->remove();
		}


	}