#!/usr/bin/env python

import sha, time, Cookie, os
import cgi,cgitb
cgitb.enable()
print "content-type: text/html"
print
cookie = Cookie.SimpleCookie()
string_cookie = os.environ.get('HTTP_COOKIE')
print string_cookie
s=request.Session()
print s.cookies
'''
# If new session
if not string_cookie:
   # The sid will be a hash of the server time
   sid = sha.new(repr(time.time())).hexdigest()
   # Set the sid in the cookie
   cookie['sid'] = sid
   # Will expire in a minute
   cookie['sid']['expires'] = 0 * 0 * 0 * 0 * 60
# If already existent session
else:
   cookie.load(string_cookie)
   sid = cookie['sid'].value

print cookie
print 'Content-Type: text/html\n'
print '<html><body>'

if string_cookie:
   print '<p>Already existent session</p>'
else:
   print '<p>New session</p>'

print '<p>SID =', sid, '</p>'
print '</body></html>'
'''
