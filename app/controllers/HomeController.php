<?php
	class HomeController extends Controller{
		public function start_test(){
			$timeMongo[1] = $this->execMongo(10);
			$timeMySql[1] = $this->execMySql(10);

			$timeMongo[2] = $this->execMongo(100);
			$timeMySql[2] = $this->execMySql(100);

			$timeMongo[3] = $this->execMongo(1000);
			$timeMySql[3] = $this->execMySql(1000);

			$timeMongo[4] = $this->execMongo(10000);
			$timeMySql[4] = $this->execMySql(10000);

			$times = array(
						'mongo1' => $timeMongo[1], 
						'mongo2' => $timeMongo[2],
						'mongo3' => $timeMongo[3],
						'mongo4' => $timeMongo[4],
						'mysql1' => $timeMySql[1], 
						'mysql2' => $timeMySql[2],
						'mysql3' => $timeMySql[3],
						'mysql4' => $timeMySql[4]);

			$this->view('results', $times);

		}

		public function index(){
			// $vars = array('timeMongo' => $timeMongo, 'timeMySql' => $timeMySql);

			$this->view('index');
	
		}

		public function execMongo($qtd){

			$mongoDB = new Mongo_Model('localhost', 'bench', 'test');
			
			$timeStart = $this->microtimeFloat();

			for($cont = 1; $cont <= $qtd; $cont++){
				$data = array('_id' => $cont, 'field' => 'test');
				$mongoDB->insert($data);
			}

			$timeEnd = $this->microtimeFloat();

			$mongoDB->clear();
			
			$time = $timeEnd - $timeStart;

			return $time;

		}

		public function execMySql($qtd){

			$MySql = new MySql_Model('localhost', 'root', '', 'bench');

			$timeStart = $this->microtimeFloat();

			for($cont = 1; $cont <= $qtd; $cont++){
				$data = array('id' => $cont, 'field' => 'test');
				$MySql->insert($data, 'test');
			}

			$timeEnd = $this->microtimeFloat();

			$MySql->clear('test');
			
			$time = $timeEnd - $timeStart;

			return $time;

		}

	}