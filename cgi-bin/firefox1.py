#!/usr/bin/python

import cgi
import os
import commands


print "content-type: text/html"
print 

d=cgi.FormContent()


commd=d['app'][0]
 


import gtk



commands.getoutput("sudo virt-manager")
