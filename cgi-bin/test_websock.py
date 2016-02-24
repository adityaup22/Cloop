#!/usr/bin/env python

import os,random,commands
import cgi,cgitb

# Enabling Debug Mode
cgitb.enable()

print "content-type: text/html"
print 

form=cgi.FieldStorage()

if form :
	comp_type=form.getvalue('')

#
