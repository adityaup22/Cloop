#!/usr/bin/python2

import cgitb
cgitb.enable()
import cgi
import os


print "content-type: text/html"
print 

 
d=cgi.FormContent()

print d['n'][0]
os.system("sudo virt-manager")



