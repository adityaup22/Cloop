#!/usr/bin/python2

print "content-type: text/html"
print

print "hidgfgfd"

import os,commands

print commands.getoutput("sudo virt-install --name rhel1234 --ram 1000 --disk path=os1.img,size=10  --location=http://127.0.0.1/pub/rhel6 --vcpus=2 --noautoconsole --graphics vnc,port=6104,listen=0.0.0.0")
