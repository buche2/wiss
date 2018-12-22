#!/usr/bin/env python 

from setuptools import setup, find_packages, Extension
import sys
import Adafruit_DHT
import pymongo
import datetime
import json
from bson import Binary, Code
from bson.json_util import dumps
 
 
sensor_args = { '11': Adafruit_DHT.DHT11,
                '22': Adafruit_DHT.DHT22,
                '2302': Adafruit_DHT.AM2302 }
if len(sys.argv) == 4 and sys.argv[1] in sensor_args:
    sensor = sensor_args[sys.argv[1]]
    pin = sys.argv[2]
    location = sys.argv[3]
else:
    print('usage: sudo ./Adafruit_DHT.py [11|22|2302] GPIOpin#')
    print('example: sudo ./Adafruit_DHT.py 2302 4 - Read from an AM2302 connected to GPIO #4')
    sys.exit(1)
 
humidity, temperature = Adafruit_DHT.read_retry(sensor, pin)
 
if humidity is not None and temperature is not None:

    ######START Insert Into MongoDB#########
    
    time = datetime.datetime.now().isoformat()
    
    myclient = pymongo.MongoClient("mongodb://localhost/")
    mydb = myclient["humid_temp_control"]
    mycol = mydb["htc"]
    
    myquery = { "location": location, "time": time, "humid": humidity, "temp": temperature }
    
    mycol.insert_one(myquery)
    
    ######END Insert Into MongoDB#########

    ######START OUTPUT#########
    
    myquery.pop('_id', None)
    print dumps(myquery)   

    #print('Temp={0:0.1f}*  Humidity={1:0.1f}%'.format(temperature, humidity))
    #print("humid:" humidity "temp:" temperature)
    
    
    ######END OUTPUT#########
    
    
else:
    print('Failed to get reading. Try again!')
    sys.exit(1)
    
    
    
    
    
    
    
    
    
    
    
    
    
    