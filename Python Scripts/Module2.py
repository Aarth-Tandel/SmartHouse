import urllib
import serial
import time
import requests

arduinoSerialData = serial.Serial('/dev/ttyACM0',9600)
url_Send = "http://192.168.43.250/SmartHome/Receivepi/senddata.php"
url_Receive = "http://192.168.43.250/SmartHome/Sendtopi/sendpi.php"
var="Aarth Anvesh Akash"

while 1:
	response = urllib.urlopen(url_Receive).read()

	if(var!=response):
		print response

	elif response == "\"Turn On\"":
		arduinoSerialData.write('1')

	elif (response == "\"Moisture\""):
		arduinoSerialData.write('3')
		moisture = arduinoSerialData.readline()
		data={'msg':moisture}
		requests.post(url_Send,data=data)
		#print moisture
		time.sleep(3)

	elif (response == "\"Motor On\""):
		arduinoSerialData.write('2')

	else:
		arduinoSerialData.write('0')

	var=response
