'''
_______      # ______       # ______      # ________      # _________  # ___   ___     # ______      #&# ______       # ________     # ______      # ______      #
/_______/\     #/_____/\      #/_____/\     #/_______/\     #/________/\ #/__/\ /__/\    #/_____/\     # #/_____/\      #/_______/\    #/_____/\     #/_____/\     #
\::: _  \ \    #\:::_ \ \     #\::::_\/_    #\::: _  \ \    #\__.::.__\/ #\::\ \\  \ \   #\::::_\/_    # #\:::_ \ \     #\__.::._\/    #\:::_ \ \    #\::::_\/_    #
 \::(_)  \/_   # \:(_) ) )_   # \:\/___/\   # \::(_)  \ \   #   \::\ \   # \::\/_\ .\ \  # \:\/___/\   # # \:(_) ) )_   #   \::\ \     # \:\ \ \ \   # \:\/___/\   #
  \::  _  \ \  #  \: __ `\ \  #  \::___\/_  #  \:: __  \ \  #    \::\ \  #  \:: ___::\ \ #  \::___\/_  # #  \: __ `\ \  #   _\::\ \__  #  \:\ \ \ \  #  \::___\/_  #
   \::(_)  \ \ #   \ \ `\ \ \ #   \:\____/\ #   \:.\ \  \ \ #     \::\ \ #   \: \ \\::\ \#   \:\____/\ # #   \ \ `\ \ \ #  /__\::\__/\ #   \:\/.:| | #   \:\____/\ #
    \_______\/ #    \_\/ \_\/ #    \_____\/ #    \__\/\__\/ #      \__\/ #    \__\/ \::\/#    \_____\/ # #    \_\/ \_\/ #  \________\/ #    \____/_/ #    \_____\/ #
               ##              ##             ##               ##            ##               ##             ## ##              ##              ##             ##             ##
'''
# Librerías para transmisión MQTT
from __future__ import print_function
import paho.mqtt.publish as publish
from time import sleep
from random import randrange
import smbus
import sys
import time
from datetime import datetime

# Librerias GPS
import serial
import string 
import pynmea2
import requests



# ADC

# Import the ADS1x15 module.
import Adafruit_ADS1x15
# Requests para adc también

# Create an ADS1115 ADC (16-bit) instance.
adc = Adafruit_ADS1x15.ADS1115()

# Or create an ADS1015 ADC (12-bit) instance.
#adc = Adafruit_ADS1x15.ADS1015()

# Note you can change the I2C address from its default (0x48), and/or the I2C
# bus by passing in these optional parameters:
#adc = Adafruit_ADS1x15.ADS1015(address=0x49, busnum=1)

# Choose a gain of 1 for reading voltages from 0 to 4.09V.
# Or pick a different gain to change the range of voltages that are read:
#  - 2/3 = +/-6.144V
#  -   1 = +/-4.096V
#  -   2 = +/-2.048V
#  -   4 = +/-1.024V
#  -   8 = +/-0.512V
#  -  16 = +/-0.256V
# See table 3 in the ADS1015/ADS1115 datasheet for more info on gain.
GAIN = 1
promedio=[]
print('Reading ADS1x15 values, press Ctrl-C to quit...')
# Print nice channel column headers.
print('| {0:>6} | {1:>6}|'.format(*range(2))) ## Imprime el valor del ADC en cada canal (en este caso solo el 0 y el 1)
print('-' * 37)
# Main loo



channelID = "1316749"  #Enter your Channel ID here

apiKey = "KV5GC1EMVTB9H8Q1"  #Enter your WriteAPI key here

useUnsecuredTCP = True

mqttHost = "mqtt.thingspeak.com"


if useUnsecuredTCP:
    tTransport = "tcp"
    tPort = 1883
    tTLS = None

topic = "channels/" + channelID + "/publish/" + apiKey


ser = serial.Serial("/dev/ttyAMA0", 9600, timeout=0.5) #Datos del puerto ttyAMA0 (sensor GPS)
tiempo_actual=0
while(True):

    command = ser.read() # Se guarda en command el valor que se acaba de guardar en (ser)
    dataout =pynmea2.NMEAStreamReader() # extrae toda la info del gps

    # Como dataout sale en binario, a continuacion pasamos esto a string
    newdata=ser.readline() 
    newdata=newdata.decode("utf-8")

    if newdata[0:5]=="GPRMC": # este if nos dice que la lat y long ya se pueden leer 
        newmsg=pynmea2.parse(newdata) # lee la lat y long
	#se asigna cada dato
        lat=newmsg.latitude 
        lng=newmsg.longitude
        gps="Latitude=" +str(lat) + " and Longitude=" +str(lng) #se concatenan para tener un solo dato
        t2Payload = "&field1=" + str(lat) + str(",LatitudGps,") + str(datetime.now())
        t3Payload = "&field2=" + str(lng) + str(",LongitudGps,") + str(datetime.now())
        t4Payload = "&field5=" + str(lat)
        t5Payload = "&field6=" + str(lng)
        publish.single(topic, payload=tPayload+t2Payload+t3Payload+t4Payload+t5Payload+tPayload6, hostname=mqttHost, port=tPort, tls=tTLS, transport=tTransport)
        print(gps)
    values = [0]*2
    if time.time()>=tiempo_actual+1:
        tiempo_actual=time.time()
        for i in range(2):
              # Read the specified ADC channel using the previously set gain value.
            values[i] = adc.read_adc(i, gain=GAIN)
            ppm=(((65536*(20000/(int('{0:>6}'.format(*values))))-20000)/156692.1565748)/5.5973021420)**(1/-0.365425824)
        tPayload = "field4=" + str(ppm) + str(",MQ135,") + str(datetime.now())
        tPayload6 = "&field3=" + str((int('{1:>6}'.format(*values)))) + str(",MQ9,") + str(datetime.now())
        print (tPayload)