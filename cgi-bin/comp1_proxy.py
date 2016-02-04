#!/usr/bin/python

import os

print "content-type: text/html"
print 

print os.system('/websockify-master/proxy 12341 192.168.14.27:6700')
