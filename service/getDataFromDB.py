#!/usr/bin/env python

from setuptools import setup, find_packages, Extension
import sys
import pymongo
import datetime
from bson import Binary, Code
from bson.json_util import dumps
 

######START Insert Into MongoDB#########

myclient = pymongo.MongoClient("mongodb://localhost/")
mydb = myclient["humid_temp_control"]
mycol = mydb["htc"]

location = sys.argv[1]

myquery = { "location": location }

mydoc = mycol.find(myquery)
  
#myquery = { "location": "Bern", "time": st, "humid": humidity, "temp": temperature }

######END Insert Into MongoDB#########

######START OUTPUT#########
print "["
for x in mydoc:
  x.pop('_id', None)
  print dumps(x)
  print ","
print "]"

#print('Temp={0:0.1f}*  Humidity={1:0.1f}%'.format(temperature, humidity))
#print("humid:" humidity "temp:" temperature)


######END OUTPUT#########

    
    
    
    
    
    
    
    
    
    
    
    
    
    