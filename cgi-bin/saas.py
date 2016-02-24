#!/usr/bin/python

import cgi
import os
import commands



print "content-type: text/html"
print



form=cgi.FieldStorage()

ip=form.getvalue('ip')
cmd="docker -d  "
print commands.getoutput("sshpass -p redhat ssh 192.168.0.152 "+cmd)

