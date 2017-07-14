int val = 0;
void setup() {
  Serial.begin(9600);  
}

void loop() {
 delay(300);
 val = analogRead(0);
 Serial.println(val);
}
