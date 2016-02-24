#!/usr/bin/python2
import commands as cmd
import os
import cgi
import random

print "Content-type: text/html"
print

d=cgi.FormContent()

print "hello"
print d
print "<br/>"
form=d['form'][0]
print form
if form == '1':
	print "<br/>"
	job=d['programe'][0]
	f=d['file'][0]
	print programe
	print f
	r=random.rand(1000)
	r=srt(r)
	r="output"+r
	a="hadoop jar /usr/share/hadoop/hadoop-examples-1.2.1.jar "+job+" "+f+" "+r
	os.system(a)
	print "<br/>"
	print "your outpput folder is :",
	print r

elif form == '2':
	print "<br/>"
	priority=d['priority'][0]
	job=d['programe'][0]
	f=d['file'][0]	
	r=random.rand(1000)
	r=srt(r)
	a="hadoop jar /usr/share/hadoop/hadoop-examples-1.2.1.jar --set-priority="+priority+ "+job+" "+f+" "+r
	os.system(a)
	print "<br/>"
	print "your outpput folder is :",
	print r
	



elif form == '3':
	print "<br/>"
	priority=d['priority'][0]
	code=d['code'][0]
	f=d['file'][0]
	f=open("/var/www/cgi-bin/code.py","w+")
	f.write(code)
	f.close()
	os.system("chmod +x /var/www/cgi-bin/code.py")
	r=random.rand(1000)
	r=srt(r)
	a="hadoop jar /usr/share/hadoop/contrib/streaming/hadoop-streaming-1.2.1.jar -mapper "+ \"/var/www/cgi-bin/code.py\" +" --set-priority="+priority+ "+job+" "+f+" "+r
	os.system(a)
	print "<br/>"
	print "your outpput folder is :",
		








else:
	print "ERROR OCCURED !!!"















print "</strong></pre>"

