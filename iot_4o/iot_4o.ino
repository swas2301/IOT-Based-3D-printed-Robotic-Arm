#include <Servo.h>
#include <ESP8266WiFi.h>
#include <ESP8266HTTPClient.h>

const char* ssid = "student";
const char* password = "12345678";

int angle_servo_1 = 85;
int angle_servo_2 = 30;
int angle_servo_3 = 90;
int angle_servo_4 = 90;
int angle_servo_5 = 0;

Servo servo1; 
Servo servo2;
Servo servo3;
Servo servo4;
Servo servo5;

int step_delay = 50;

void setup() {
  servo1.attach(D1);
  servo2.attach(D2); 
  servo3.attach(D3); 
  servo4.attach(D4); 
  servo5.attach(D5); 
  
  servo1.write(angle_servo_1);                
  servo2.write(angle_servo_2);     
  servo3.write(angle_servo_3);
  servo4.write(angle_servo_4);    
  servo5.write(angle_servo_5); 

  Serial.begin(115200);
  WiFi.begin(ssid, password);
 
  while (WiFi.status() != WL_CONNECTED) {
    delay(1000);
    Serial.print("Connecting..");
  }
}

void loop() {
  
  if (WiFi.status() == WL_CONNECTED) { //Check WiFi connection status
 
    HTTPClient http;  //Declare an object of class HTTPClient
 
    http.begin("http://ec2-13-235-48-70.ap-south-1.compute.amazonaws.com/node_servo.php?id=arm_001&key=1234&input=online");  //Specify request destination
    int httpCode = http.GET();                                                                  //Send the request
 
    if (httpCode > 0) { //Check the returning code
 
      String payload = http.getString();   //Get the request response payload
      //Serial.println(payload);                     //Print the response payload
      
      int Index1 = payload.indexOf(',');
      int Index2 = payload.indexOf(',', Index1+1);
      int Index3 = payload.indexOf(',', Index2+1);
      int Index4 = payload.indexOf(',', Index3+1);
      int Index5 = payload.indexOf(',', Index4+1);
    
      int servo_1 = payload.substring(0, Index1).toInt();
      int servo_2 = payload.substring(Index1+1, Index2).toInt();
      int servo_3 = payload.substring(Index2+1, Index3).toInt();  
      int servo_4 = payload.substring(Index3+1, Index4).toInt(); 
      int servo_5 = payload.substring(Index4+1, Index5).toInt(); 
            
      Serial.println(servo_1);
      Serial.println(servo_2);
      Serial.println(servo_3);
      Serial.println(servo_4);
      Serial.println(servo_5);

      move_servo(servo_1,servo_2,servo_3,servo_4,servo_5);
    
    }
    
    http.end();   //Close connection
 
  }
  
  delay(1000);    //Send a request every 30 seconds
  
}

void move_servo(int a, int b, int c, int d, int e){

  for (int i=0; i<180; i++){
    
      if (angle_servo_1 > a){
          servo1.write(angle_servo_1);
          angle_servo_1--;
          delay(step_delay);
      }
      else if (angle_servo_1 < a){
          servo1.write(angle_servo_1);
          angle_servo_1++;
          delay(step_delay);
      }
      else{
          servo1.write(angle_servo_1);
      }

      if (angle_servo_2 > b){
          servo2.write(angle_servo_2);
          angle_servo_2--;
          delay(step_delay);
      }
      else if (angle_servo_2 < b){
          servo2.write(angle_servo_2);
          angle_servo_2++;
          delay(step_delay);
      }
      else{
          servo2.write(angle_servo_2);
      }

      if (angle_servo_3 > c){
          servo3.write(angle_servo_3);
          angle_servo_3--;
          delay(step_delay);
      }
      else if (angle_servo_3 < c){
          servo3.write(angle_servo_3);
          angle_servo_3++;
          delay(step_delay);
      }
      else{
          servo3.write(angle_servo_3);
      }

      if (angle_servo_4 > d){
          servo4.write(angle_servo_4);
          angle_servo_4--;
          delay(step_delay);
      }
      else if (angle_servo_4 < d){
          servo4.write(angle_servo_4);
          angle_servo_4++;
          delay(step_delay);
      }
      else{
          servo4.write(angle_servo_4);
      }

      if (angle_servo_5 > e){
          servo5.write(angle_servo_5);
          angle_servo_5--;
          delay(step_delay);
      }
      else if (angle_servo_5 < e){
          servo5.write(angle_servo_5);
          angle_servo_5++;
          delay(step_delay);
      }
      else{
          servo5.write(angle_servo_5);
      }
  }
   
}
