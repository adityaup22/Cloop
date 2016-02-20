#!/usr/bin/python

from commands import getoutput as out
import os
from os import path

#import cgi,cgitb
#cgitb.enable()

#form=cgi.FieldStorage()

print "content-type: text/html"

#uname=form.getvalue('user')
uname="d"


data=""
path1="/var/www/html/users_storage/"+uname
a=os.listdir(path1)

for i in a:
	fn=path1+"/"+i
	try:
		f=open(fn)
		if(f):
			data+='''<FILE>
	<TYPE>File</TYPE>
	<NAME>{}</NAME>
	<SIZE>15 MB</SIZE>
	<OWNER>me</OWNER>
	<MODIFIED>7 FEB 2016</MODIFIED>
	</FILE>
	'''.format(i)
	
	except:
		
			data+='''<FILE>
	<TYPE>Folder</TYPE>
	<NAME>{}</NAME>
	<SIZE>15 MB</SIZE>
	<OWNER>me</OWNER>
	<MODIFIED>7 FEB 2016</MODIFIED>
	</FILE>

		'''.format(i)
	

f=open("/var/www/html/login/ajaxfiles/test_files.xml","w+")
f.writelines("""<FILES>""")

f.writelines(data)
	
f.write("""</FILES>""")
	
f.close()

print "Location:http://127.0.0.1/login/handler.php?user_created="+uname
print
