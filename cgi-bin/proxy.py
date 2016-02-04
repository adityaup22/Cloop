#!/usr/bin/python

# THIS WILL PROXY(TUNNEL) THE VNC SOCKET TO WEB PORTAL
#THIS CODE WILL RUN ON WEBSERVER WHERE PROXY ARE TO BE MADE(PROXY SERVER )
'''
This Will Run On WebServer Of Cloud 
It Will Take IpAddress of node Where instance is running
and it will proxy it on itself

eg: ./run proxy_port NODE_IP:NODE_VNC_PORT

And provided NO_VNC link would be:

http://ipaddr/vnc/vnc_auto.html?host='webserver_ip'&port='proxy_port'(No quotes required in link)
 (Only for displaying..Link would be like)

eg:http://127.0.0.1/vnc/vnc_auto.html?host=127.0.0.1&port=1111
'''

from commands import getoutput
from random import randrange
import os
import MySQLdb as sql
import cgi,cgitb
#cgitb.enable()
os1="Centos"
user="aditya"
print "content-type: text/html"


node_ip="127.0.0.1"
os.chdir("/var/www/html/websockify-master")

try:
	con=sql.connect("127.0.0.1","root","","hostel_online")
	cur=con.cursor()
	query="select * from user_port where username='aditya' and novnc_addr='"+os1+"'"
	#print query
	cur.execute(query)
	data=cur.fetchone()
	vnc_port=data[2]
	proxy_port=data[3]
	cmd1="./run -D --run-once --idle-timeout=10 "+str(proxy_port)+"  "+node_ip+":"+str(vnc_port)
	getoutput(cmd1)
	print "Location:http://127.0.0.1/vnc/vnc_auto.html?host=127.0.0.1&port="+str(proxy_port)
	print

	

except:
	print "Error Occured"
