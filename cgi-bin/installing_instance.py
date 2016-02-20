#!/usr/bin/python


import commands
import cgi,cgitb
import MySQLdb as sql
import random

cgitb.enable()


print "content-type: text/html"

form=cgi.FieldStorage()

option=form.getvalue('option')
os=form.getvalue('os')
user=form.getvalue('user')
name=form.getvalue('name')

if(name):
	

	xsmall=["redhat","1Gb","100Gb"]
	small=["redhat","2.5Gb","250Gb"]
	large=["redhat","4Gb","500Gb"]
	xlarge=["redhat","8Gb","750Gb"]
	medium=["redhat","16Gb","1000Gb"]

	vnc_port=random.randrange(6000,6500)
	proxy_port=random.randrange(1234,12345)
	ipaddr="127.0.0.1"




	if (option=="xsmall"):
		table=list(xsmall)

	if (option=="small"):
		table=list(small)

	if (option=="medium"):
		table=list(medium)

	if (option=="large"):
		table=list(large)

	if (option=="xlarge"):
		table=list(xlarge)

	ram=table[1]
	disk=table[2]



	try:
		con=sql.connect("127.0.0.1","root","","hostel_online")
		cur=con.cursor()
		query="SELECT os from instance where username='"+user+"' and os='"+name+"' LIMIT 1"
		cur.execute(query)
		data=cur.fetchone()
		if(data):
			print "Location:http://127.0.0.1/login/handler.php?instance_already="+name
			print
		else:
				
			query="INSERT INTO instance(username,os,ram,disk)  "
			query+=" VALUES('"+user+"' , '"+name+"', '"+ram+"', '"+disk+"')"
			#print query
			cur.execute(query)
			#data=cur.fetchall()
			#print data
			
			query="INSERT INTO user_port(username,vnc_port,proxy_port,ipaddr,novnc_addr)  "
			query+=" VALUES('"+user+"' , '"+str(vnc_port)+"', '"+str(proxy_port)+"','"+ipaddr+"','"+name+"')"
			cur.execute(query)
			con.commit()
			
			fn="/tmp/"+user+name
			
			cmd="virt-install --name "+name +"  --ram 1024 --disk path=" + fn + ",size=100  --location=http://127.0.0.1/pub/rhel6 --vcpus=1 --noautoconsole --autostart  --graphics vnc,port="+str(vnc_port)+",listen=0.0.0.0  --force"
			
			li="sshpass -p 00.. ssh -o StrictHostKeyChecking=no root@127.0.0.1 "+cmd
			commands.getoutput(li)
			print "Location:http://127.0.0.1/login/instance.php"
			print
			

	except :
		print
		print "Error Occured While Executing.."

else:
	print "Location:http://127.0.0.1/login/handler.php?not_name=1"
	print
	


