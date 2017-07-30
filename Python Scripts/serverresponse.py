import urllib

url="http://192.168.43.250/smarthome/sendpi.php"
response = urllib.urlopen(url).read()

print type(response)
print response