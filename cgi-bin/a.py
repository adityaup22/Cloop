#!/usr/bin/python

import cgi,cgitb
import os
import commands
import MySQLdb as sql
cgitb.enable()

print "content-type: text/html"




form=cgi.FieldStorage()

username=form.getvalue('username')
passwd=form.getvalue('password')


con=sql.connect(host='192.168.14.127',db='hostel_online',user='root',passwd='hostel_database')

cur=con.cursor()

query="SELECT * FROM users where username='"+username+"' and passwd='"+passwd+"' LIMIT 1"

cur.execute(query)

user=cur.fetchone()

if user:
	print "Location:http://192.168.14.27/ezhadoop/EZCluster.html"
	print
else:
	print
	print "Not Welcome"
