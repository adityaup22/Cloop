#!/usr/bin/python

import cgi,cgitb
import os
import commands
import random
cgitb.enable()

print "content-type: text/html"

form=cgi.FieldStorage()

comp_type=form.getvalue('comp_type')


########################################

i=1
ip="192.168.14.27" # Ip of Computer #

#Generating Random Vnc Ports..

rand_port=random.randint(6000,10000)

########################################


#Cluster 1 Selected...

if int(comp_type) == 1:
	
	
	#installing  ..	port=6700
	while i <= 1 :
		 port1="6700"
		 fn="/tmp/comp1.img"
		 osname="comp1"
		 
		 cmd="virt-install --name "+ osname + "  --ram  1024  --disk path=" + fn + ",size=100  --location=http://192.168.14.27/pub/rhel6 --vcpus=1 --noautoconsole --autostart  --graphics vnc,port="+port1+",listen=0.0.0.0 --extra-args  "+ "ks=http://192.168.14.27/pub/kickstart/newnamenode.cfg --force"
		 
	
		 
		
		 li="sshpass -p 00.. ssh -o StrictHostKeyChecking=no root@"+ip+"  " +cmd
		
		 commands.getoutput(li)
		 i+=1
				 
		
		 
if int(comp_type) == 2:
	
	
	#installing jobtracker ..	port=6701
	while i <= 1 :
		 fn="/tmp/jobtracker.img"
		 osname="jobtracker"
		 
		 cmd="virt-install --name "+ osname + "  --ram 2048  --disk path=" + fn + ",size=20  --location=http://192.168.0.20/pub/rhel6 --vcpus=1 --noautoconsole --autostart  --graphics vnc,port=6701,listen=0.0.0.0 --extra-args  "+ "ks=http://192.168.0.20/pub/kickstart/newjobtracker.cfg --force"
		 
	
		 
		
		 li="sshpass -p hadoop ssh -o StrictHostKeyChecking=no root@"+ip+"  " +cmd
		
		 print commands.getoutput(li)
		 i+=1
		

if int(comp_type) == 3:
	
	
	#installing client ..	port=6703
	while i <= 1 :
		 fn="/tmp/client.img"
		 osname="client"
		 
		 cmd="virt-install --name "+ osname + "  --ram  2048  --disk path=" + fn + ",size=20  --location=http://192.168.0.20/pub/rhel6 --vcpus=1 --noautoconsole --autostart   --graphics vnc,port=6703,listen=0.0.0.0 --extra-args  "+ "ks=http://192.168.0.20/pub/kickstart/client.cfg --force"
		 
	
		 
		
		 li="sshpass -p hadoop ssh -o StrictHostKeyChecking=no root@"+ip+"  " +cmd
		
		 print commands.getoutput(li)
		 i+=1
		 

if int(comp_type) == 4:
	
	
	#installing Docker_client ..	port=6702
	while i <= 1 :
		 fn="/tmp/Docker_client.img"
		 osname="Docker_client"
		 
		 cmd="virt-install --name "+ osname + "  --ram  2048  --disk path=" + fn + ",size=20  --location=http://192.168.0.20/pub/rhel6 --vcpus=1 --noautoconsole --autostart --graphics vnc,port=6702,listen=0.0.0.0 --extra-args  "+ "ks=http://192.168.0.20/pub/kickstart/client.cfg --force"
		 
	
		 
		
		 li="sshpass -p hadoop ssh -o StrictHostKeyChecking=no root@"+ip+"  " +cmd
		
		 print commands.getoutput(li)
		 i+=1
		 
