#!/usr/bin/python

import cgi
import os
import commands



print "content-type: text/html"
print



form=cgi.FieldStorage()

cluster=form.getvalue('cluster_value')

########################################

i=1
port=6500
ip_virt="192.168.0.182"



########################################


#Cluster 1 Selected...

if int(cluster) == 1:
	
	
	#installing os in 3 computers..	
	while i <= 3 :
		 fn="/tmp/osclust1_"+str(i)+".img"
		 osname="DNclust1_"+str(i)
		 
		 cmd="virt-install --name "+ osname + "  --ram  1024  --disk path=" + fn + ",size=10  --location=http://192.168.0.20/pub/rhel6 --vcpus=1 --noautoconsole --graphics vnc,port=" +str(port)+ ",listen=0.0.0.0 --extra-args  "+ "ks=http://192.168.0.20/pub/kickstart/newdntt.cfg --force"
		 
	#loggin in 3 computers with ip1,2,3..
		 
		
		 li="sshpass -p hadoop ssh -o StrictHostKeyChecking=no root@"+ip_virt+"  " +cmd
		
		 print commands.getoutput(li)
		 i+=1
		 port+=1
		 

#Cluster 2 Selected...

if int(cluster) == 2:
	
	
	#installing os in 6 computers..	
	while i <= 6 :
		 fn="/tmp/osclust2_"+str(i)+".img"
		 osname="D_clust2_"+str(i)
		 
		 cmd="virt-install --name "+ osname + "  --ram  2048  --disk path=" + fn + ",size=20  --location=http://192.168.0.20/pub/rhel6 --vcpus=1 --noautoconsole --autostart --graphics vnc,port=" +str(port)+ ",listen=0.0.0.0 --extra-args  "+ "ks=http://192.168.0.20/pub/kickstart/newdntt.cfg --force"
		 

		 
		
		 li="sshpass -p hadoop ssh -o StrictHostKeyChecking=no root@"+ip_virt+"  " +cmd
		 
		 print commands.getoutput(li)
		 i+=1
		 port+=1


