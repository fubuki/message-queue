<?php

# Client code

echo "Starting\n";

# Create our client object.
$gmclient= new GearmanClient();

# Add default server (localhost).
$gmclient->addServer();

echo "Sending job\n";

$result = $gmclient->doNormal("reverse", "Hello!");

echo "Success: $result\n";