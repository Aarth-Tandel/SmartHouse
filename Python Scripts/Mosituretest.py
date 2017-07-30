import serial
import time
arduinoSerialData = serial.Serial('/dev/ttyACM0',9600)

while 1:
	arduinoSerialData.write('3')
	moisture = arduinoSerialData.readline()
	print moisture
	time.sleep(5)