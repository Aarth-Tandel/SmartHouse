import requests
url ='http://192.168.43.250/SmartHome/Receivepi/senddata.php'

value=450
data={'msg':value}
requests.post(url,data=data)
