#!/usr/bin/python

print "Content-type: text/html"
print

import urllib, urllib2, cookielib

username = 'aditya'
password = 'aditya'

cj = cookielib.CookieJar()
opener = urllib2.build_opener(urllib2.HTTPCookieProcessor(cj))
login_data = urllib.urlencode({'username' : username, 'j_password' : password})
opener.open('http://127.0.0.1/login/home.php#', login_data)
resp = opener.open('http://127.0.0.1/login/instance.php')
print resp.read()

mydata=[('nothing_selected','1')]    #The first is the var name the second is the value
mydata=urllib.urlencode(mydata)
path='http://127.0.01/login/instance.php'    #the url you want to POST to
req=urllib2.Request(path, mydata)
req.add_header("Content-type", "application/x-www-form-urlencoded")
page=urllib2.urlopen(req).read()
print page
