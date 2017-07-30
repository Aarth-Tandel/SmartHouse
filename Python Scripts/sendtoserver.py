import requests
import json
url ='http://localhost/SmartHome/Receivepi/senddata.php'
data={"HumidityLevel":"45"}
requests.post(url,data=json.dumps(data))
