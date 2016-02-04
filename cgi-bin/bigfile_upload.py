#!/usr/bin/env python
import cgi, os
import cgitb; cgitb.enable()

form = cgi.FieldStorage()

### Scaning Network ###

commands.getoutput("nmap -sP 192.168.0.254/24 | awk '{print $6}' | grep 192 | sed 's/(//'| sed 's/)//' > ip.txt")
fip=open("ip.txt")
ip=fip.read().splitlines()
fip.close()

l=commands.getoutput("cat ip.txt | wc -l")

print "TOTAL IP FOUND >> "+str(l)


# Generator to buffer file chunks
def fbuffer(f, chunk_size=10000):
   while True:
      chunk = f.read(chunk_size)
      if not chunk: break
      yield chunk
      
# A nested FieldStorage instance holds the file
fileitem = form['filename']

# Test if the file was uploaded
if fileitem.filename:

   # strip leading path from file name to avoid directory traversal attacks
   fn = os.path.basename(fileitem.filename)
   f = open('uploaded/' + fn, 'wb', 10000)

   # Read the file in chunks
   for chunk in fbuffer(fileitem.file):
	  
      f.write(chunk)
   f.close()
   message = 'The file "' + fn + '" was uploaded successfully'

else:
   message = 'No file was uploaded'
   
print """\
Content-Type: text/html\n
<html><body>
<p>%s</p>
</body></html>
""" % (message,)
