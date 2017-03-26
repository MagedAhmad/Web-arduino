#include "IRremote.h"

/*-----( Declare Constants )-----*/
int receiver = 11; // pin 1 of IR receiver to Arduino digital pin 11

/*-----( Declare objects )-----*/
IRrecv irrecv(receiver);           // create instance of 'irrecv'
decode_results results;            // create instance of 'decode_results'
/*-----( Declare Variables )-----*/


char c;

void setup(){
  pinMode(13, OUTPUT);
  pinMode(2, OUTPUT);
  pinMode(5, OUTPUT);
  pinMode(7, OUTPUT);
  Serial.begin(9600);

  // Serial.println("IR Receiver Raw Data + Button Decode Test");
  irrecv.enableIRIn(); // Start the receiver



}

void loop(){

if (irrecv.decode(&results)) // have we received an IR signal?
{
  Serial.println(results.value, HEX);  //UN Comment to see raw values
  translateIR(); 
  irrecv.resume(); // receive the next value
}  
  
if (Serial.available() > 0)

{

  c = Serial.read();
  
  Serial.println(c);

}

else

{

delay(100);

}


if (c=='n'){

  Serial.println("on");
  

  digitalWrite(13, HIGH);

}

if (c=='f'){
  
  Serial.println("off");
  
  digitalWrite(13, LOW);

}

if (c== 'm'){
  
   digitalWrite(2, HIGH);
   digitalWrite(7,  LOW);
   analogWrite(5, 255);
    delay(3000);
    analogWrite(5, 0);
  
}

if(c == 's'){
    digitalWrite(2, LOW);
    digitalWrite(7,  HIGH);
    analogWrite(5, 255);
    delay(3000);
    analogWrite(5, 0);
}

c='\0';

}



/*-----( Declare User-written Functions )-----*/
void translateIR() // takes action based on IR code received

// describing Car MP3 IR codes 

{

  switch(results.value)

  {

  case 0xFF02FD:  
 //  Serial.println(results.value, HEX);
   digitalWrite(2, HIGH);
   digitalWrite(7,  LOW);
   analogWrite(5, 255);
    delay(3000);
    analogWrite(5, 0);
    break;

  case 0xFFC23D:  
  // Serial.println(results.value, HEX);
    digitalWrite(2, LOW);
   digitalWrite(7,  HIGH);
   analogWrite(5, 255);
   delay(3000);
    analogWrite(5, 0);
    break;
  default: 
    Serial.println(" other button   ");

  }

  delay(500);


} //END translateIR
