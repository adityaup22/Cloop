#!/usr/bin/python2

import cgi
import commands
import os
print "content-type: text/html"
print 

d=cgi.FormContent()

usr=d['username'][0]
passwd=d['password'][0]

a=commands.getstatusoutput("sudo useradd "+ usr)
b=commands.getstatusoutput("echo "+passwd+"| sudo passwd --stdin "+ usr)

if a[0] == 0 :
	print "A successful\n"
else :
	print "A Not successful\n"

if b[0] == 0 :
	print "B successful\n"
else :
	print "B Not successful\n"





