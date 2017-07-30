const int ledPin=12;
int n;

void setup(){
  pinMode(ledPin, OUTPUT);
  Serial.begin(9600);
  n=0;
}

void loop(){
  if(Serial.available()){
    n=Serial.read()-'0';
  }
  Serial.println(n);
  if(n==1) digitalWrite(ledPin, HIGH);
   if(n==0) digitalWrite(ledPin, LOW);
}
