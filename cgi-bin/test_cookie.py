#/usr/bin/python

from http import cookies

print('Content-type: text/html;\n')

# reading the "cookie1" cookie
cookievalue = cookies.SimpleCookie(os.environ["HTTP_COOKIE"])
print (cookievalue["username"].value)
