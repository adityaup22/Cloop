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
cgitb.enable()

form=cgi.FieldStorage()

print "content-type: text/html"

user=form.getvalue('user')
os1=form.getvalue('os_name')
terminate=form.getvalue('terminate')
delete=form.getvalue('delete')


if(terminate=="terminate" and os1 ):
	
	try:
		
		destroy="virsh destroy --graceful "+os1
		li="sshpass -p 00.. ssh -o StrictHostKeyChecking=no root@127.0.0.1 "+destroy
		getoutput(li)
		print "Location:http://127.0.0.1/login/handler.php?terminate="+os1
		print
	
	except:
		print "Location:http://127.0.0.1/login/handler.php?not_destroyed=1"
		print 





elif(delete=="delete" and os1):
	
	try:
		
	
				
			undefine= "virsh undefine "+os1
			li="sshpass -p 00.. ssh -o StrictHostKeyChecking=no root@127.0.0.1 "+undefine
			getoutput(li)
			
			fn="/tmp/"+user+os1
			destroy="rm -rvf "+fn
			li="sshpass -p 00.. ssh -o StrictHostKeyChecking=no root@127.0.0.1 "+destroy
			getoutput(li)
			
			
			con=sql.connect("127.0.0.1","root","","hostel_online")
			cur=con.cursor()
			query="delete from instance where username='"+user+"' and os='"+os1+"'"
			#print query
			cur.execute(query)
			query="delete from user_port where username='"+user+"' and novnc_addr='"+os1+"'"
			cur.execute(query)
			con.commit()
			print "Location:http://127.0.0.1/login/handler.php?instance_deleted="+os1
			print
		
	except:
		print
		print "User Not Deleted"




elif(os1):
	
	node_ip="127.0.0.1"
	os.chdir("/var/www/html/websockify-master")

	try:
		con=sql.connect("127.0.0.1","root","","hostel_online")
		cur=con.cursor()
		query="select * from user_port where username='"+user+"' and novnc_addr='"+os1+"'"
		#print query
		cur.execute(query)
		data=cur.fetchone()
		con.commit()
		vnc_port=data[2]
		proxy_port=data[3]
		cmd1="./run -D --run-once --idle-timeout=10 "+str(proxy_port)+"  "+node_ip+":"+str(vnc_port)
		getoutput(cmd1)
		print "Location:http://127.0.0.1/vnc/vnc_auto.html?host=127.0.0.1&port="+str(proxy_port)
		print

	

	except:
		print
		print "Error Occured"

	
		
	

else:
	
	print "Location:http://127.0.0.1/login/handler.php?not_selected=1"
	print


