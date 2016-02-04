#!/usr/bin/python

import cgi,cgitb
import MySQLdb as sql

cgitb.enable()

print "content-type: text/html"
print

form=cgi.FieldStorage()
name=form.getvalue('name')
passwd=form.getvalue('passwd')
#print name
#print passwd

#name="aditya"
#passwd="aditya"
try:
	con=sql.connect("127.0.0.1","root","","aaa")
	cur=con.cursor()
	query="INSERT INTO users(name,passwd)  "
	query+=" VALUES('"+name+"' , '"+passwd+"')"
	print query
	cur.execute(query)
	data=cur.fetchall()
	print data
	con.commit()
	'''
	print query
	if cur.fetchall() :
		cm=cur.fetchall()[0][0]			
		print "data fetched = "+str(cm)
		if str(cm)=="aditya":
			print "Present"
		else:
			print "Not Present"
	
	else:
		print "Query Not PRocessed"'''
except sql.Error , e:
	print "Error Occured While Connecting.."
