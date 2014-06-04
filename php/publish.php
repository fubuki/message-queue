<?php


require_once('../pheanstalk/pheanstalk_init.php');

$pheanstalk = new Pheanstalk_Pheanstalk('127.0.0.1');

$pheanstalk
  ->useTube('testtube')
  ->put("job payload goes here\n");


$pheanstalk->getConnection()->isServiceListening(); // true or false
