<?php

require("../phpMQTT/phpMQTT.php");


$mqtt = new phpMQTT("localhost", 1883, "phpMqttClient"); //Change client name to something unique

if ($mqtt->connect()) {
	$mqtt->publish("M1/M2","Hello World! at ".date("r"),0);
	$mqtt->close();
}