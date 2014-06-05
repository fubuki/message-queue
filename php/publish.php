<?php


require_once('../pheanstalk/pheanstalk_init.php');

$pheanstalk = new Pheanstalk_Pheanstalk('127.0.0.1');

$messgae = array("id"=>123456,
				"data"=>"測試用訊息");


$pheanstalk
  ->useTube('testtube')
  ->put(json_encode($messgae));


$pheanstalk->getConnection()->isServiceListening(); // true or false
