#!/usr/bin/env python
# -*- coding: utf-8 -*-
#

print "content-type: text/html"
print

import cgitb
cgitb.enable()

from commands import getoutput as out
#from os import system as out
import aip
import threading
import config
reload(aip)
reload(config)
def install(i):
		out("sshpass -p redhat scp core-site.xml root@"+i+":/etc/hadoop")
		out("sshpass -p redhat scp mapred-site.xml root@"+i+":/etc/hadoop")
		out("sshpass -p redhat scp hdfs-site.xml root@"+i+":/etc/hadoop")
	

def dntt(i):
		
		out("sshpass -p redhat ssh -o StrictHostKeyChecking=no root@"+i+" rm -rvf /.hadoop")
		out("sshpass -p redhat ssh -o StrictHostKeyChecking=no root@"+i+" rm -rvf /tmp/hadoop-root/dfs")
		out("sshpass -p redhat ssh -o StrictHostKeyChecking=no root@"+i+" hadoop-daemon.sh start datanode")
		out("sshpass -p redhat ssh -o StrictHostKeyChecking=no root@"+i+" hadoop-daemon.sh start tasktracker")
		
def nn(i):
		nn=open("nn_ip.txt",'w+')
		nn.write(i)
		nn.close()
		out("sshpass -p redhat ssh -o StrictHostKeyChecking=no root@"+i+" rm -rvf /.hadoop")
		out("sshpass -p redhat ssh -o StrictHostKeyChecking=no root@"+i+" rm -rvf /tmp/hadoop-root/dfs/name")
		out("sshpass -p redhat ssh -o StrictHostKeyChecking=no root@"+i+" hadoop namenode -format")
		out("sshpass -p redhat ssh -o StrictHostKeyChecking=no root@"+i+" hadoop-daemon.sh start namenode")
		
def jt(i):
		jt=open("jt_ip.txt",'w+')
		jt.write(i)
		jt.close()
		out("sshpass -p redhat ssh -o StrictHostKeyChecking=no root@"+i+" hadoop-daemon.sh start jobtracker")
	



def main():
	aip.main()
	f=open("aip.txt")
	ip=f.read().split()
	f.close()
	config.config(ip[0],ip[1])
	count=0	
	inst=[]
	for i in ip:
		
		t=threading.Thread(target=install,args=(i,))
		inst.append(t)
		t.start()
	for i in inst:
		i.join()	
	abc=[]
	
	for i in ip:
		
		
		if count == 0:
			nn(i)
			
		elif count == 1:
			jt(i)
		else:
			t=threading.Thread(target=dntt,args=(i,))
			t.start()
			abc.append(t)
	
		count +=1
	for i in abc:
		i.join()
	
	out("clear")	
	print "\n\n\t\t\tSETUP COMPLETE"
	print("Namenode is "+ip[0])
	print("Jobtracker is "+ip[1])
	out("gnome-terminal -x sshpass -p redhat ssh -o StrictHostKeyChecking=no root@"+ip[0])
	out("gnome-terminal -x sshpass -p redhat ssh -o StrictHostKeyChecking=no root@"+ip[1])
	#~ 
if __name__ == '__main__':
	main()



