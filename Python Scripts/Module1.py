import urllib
import serial

while 1:
	url="http://192.168.43.250/SmartHome/Sendtopi/sendpi.php"
	response = urllib.urlopen(url).read()
	var="\"Turn On\""
	print response
	if response == var:
		arduinoSerialData=serial.Serial('/dev/ttyACM0',9600)
		arduinoSerialData.write('1')
	else:
		arduinoSerialData=serial.Serial('/dev/ttyACM0',9600)
		arduinoSerialData.write('0')