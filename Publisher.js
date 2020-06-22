const mqtt = require(‘mqtt’) 
const client = mqtt.connect(‘mqtt://10.33.109.37’) client.on(‘connect’, () => { var options={ qos:1 };  
var datetime=new Date(); 
client.publish(‘test/data’,’data’) })