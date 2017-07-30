const int ledPin=12;
const int moisture_data=0;
const int moisture_level=250;
const int dripled=13;
const int pump=7;
int n=0;
//Buzzer is 8 pin

int drip(int moisture_data,int moisture_level){

  int moisture = analogRead(moisture_data);
  //Serial.print("Moisture= ");
  //Serial.println(moisture);

  if((moisture > moisture_level)  &&  (moisture < 999))
  {
    digitalWrite(dripled,HIGH);
    digitalWrite(pump, HIGH);
  }
  else if(moisture > 1000){
    digitalWrite(8,HIGH);
  }
  else{
    digitalWrite(dripled,LOW);
    digitalWrite(pump,LOW);
  }
  //delay(500);
}

void setup(){
  pinMode(ledPin, OUTPUT);
  Serial.begin(9600);
  pinMode(dripled, OUTPUT);
  pinMode(pump, OUTPUT);
  pinMode(8, OUTPUT);
}

void loop(){
  if(Serial.available()){
    n=Serial.read()-'0';
  }

  //Serial.println(n);
  //drip(moisture_data,moisture_level);

  if(n==1) digitalWrite(ledPin, HIGH);
  if(n==2) digitalWrite(pump,HIGH);


  if(n==3){
    int moisture = analogRead(moisture_data);
    //Serial.print("Moisture= ");
    Serial.println(250);
    delay(1000);
    }

  if(n==0){
    digitalWrite(ledPin, LOW);
    digitalWrite(pump, LOW);
  }
}
