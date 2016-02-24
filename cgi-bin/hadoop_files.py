#!/usr/bin/env python

import commands

print "content-type: text/html"
print 


print "Executing..."
fnn=open("nn_ip.txt")
nn_ip=fnn.read().split()[0]
fnn.close()


print "NAMENODE IP : "+str(nn_ip)
print

cmd="sshpass -p redhat scp -o StrictHostKeyChecking=no  fetch_info.py  root@"+str(nn_ip)+":/tmp/"
op=commands.getstatusoutput(cmd)
print op

exe="  python /tmp/fetch_info.py"
cmd1="sshpass -p redhat ssh -o StrictHostKeyChecking=no root@"+str(nn_ip)+exe
op1=commands.getstatusoutput(cmd1)
print op1

	





