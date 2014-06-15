var mqtt = require('mqtt')

client = mqtt.createClient(1883, 'localhost');

client.subscribe('M1');

client.on('message', function (topic, message) {
  console.log(message);
});