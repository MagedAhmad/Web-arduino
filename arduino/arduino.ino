
/*-----( Declare objects )-----*/


/*-----( Declare Variables )-----*/


char c;

void setup(){
  pinMode(13, OUTPUT);
  pinMode(2, OUTPUT);
  pinMode(5, OUTPUT);
  pinMode(7, OUTPUT);
  Serial.begin(9600);



}

void loop(){


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
