#!/usr/bin/env python
# -*- coding: utf-8 -*-
#
from commands import getstatusoutput as out
#from os import system as out
import threading,time,commands
#a=threading.Lock()

f=open("aip.txt","w+")
def install(i):
		print i
		out("sshpass -p redhat ssh -o StrictHostKeyChecking=no root@"+i+" yum remove  hadoop -y")
		out("sshpass -p redhat ssh -o StrictHostKeyChecking=no root@"+i+" yum install jdk hadoop -y")
		

def aip(i):
	s=commands.getstatusoutput("sshpass -p redhat ssh -o StrictHostKeyChecking=no root@"+i+" hadoop version")[0]
	if s==0:
		out("sshpass -p redhat ssh -o StrictHostKeyChecking=no root@"+i+" hadoop-daemon.sh stop jobtracker")
		out("sshpass -p redhat ssh -o StrictHostKeyChecking=no root@"+i+" hadoop-daemon.sh stop namenode")
		out("sshpass -p redhat ssh -o StrictHostKeyChecking=no root@"+i+" hadoop-daemon.sh stop datanode")
		out("sshpass -p redhat ssh -o StrictHostKeyChecking=no root@"+i+" hadoop-daemon.sh stop tasktracker")
		out("sshpass -p redhat ssh -o StrictHostKeyChecking=no root@"+i+" ln -s /usr/java/jdk1.7.0_51/bin/jps /bin/jps")
		#a.acquire()
		f.write(i)
		f.write("\n")
		#a.release()



def main():
	print "in aip"
	ip=commands.getstatusoutput("nmap -sP 192.168.0.0/24 | grep 192 | awk '{print $6}' | sed 's/(//' | sed 's/)//'")[1].split()
	print ip
	inst=[]
	for i in ip:
				print "in thread 1"
				t=threading.Thread(target=install,args=(i,))
				inst.append(t)
				t.start()
	for i in inst:
		print "joining thread 1"
		i.join()
	inst1=[]
	for i in ip:
				print "in thread 2"
				t=threading.Thread(target=aip,args=(i,))
				inst1.append(t)
				t.start()
	for i in inst1:
		print "joining thread 2"
		i.join()
	f.close()
	
	print "exiting from aip"
	out("clear")
	
	
	
	
if __name__ == '__main__':
	main()


		



