#!/usr/bin/env python
import commands

print "content-type: text/html"
print

commands.getoutput("hadoop fs -lsr / > fileinfo.txt")

f=open("fileinfo.txt")
files=f.read().splitlines()
f.close()

f0=open("/tmp/files.js",'w')
f0.writelines('''var nn={
'details':[
''')
f0.close()

l=commands.getoutput("cat fileinfo.txt | wc -l")
#print "L = "+str(l)
i=1
k=8
out1=[]
while i <int(l):
	j=0
	#print "I = "+str(i)
	#print files
	field=files[i].split()
	#print field
	while j<k:
		#print "J = "+str(j)
		if j==0:
			Permissions=field[j]
		
		if j==1:
			Replication=field[j]
		
		if j==2:
			UploadedBy=field[j]
		
		if j==3:
			UserGroup=field[j]
		
		if j==4:
			Size=field[j]
		
		if j==5:
			UploadedOn=field[j]
		
		if j==7:
			FName=field[j]
		
		j+=1
	
	
	out="{'Permissions' : '"+Permissions+"', 'Replication':'"+Replication+"', 'UploadedBy':'"+UploadedBy+"', 'UserGroup':'"+UserGroup+"', 'Size':'"+Size+"', 'UploadedOn':'"+UploadedOn+"','FName':'"+FName+"'},"
	
	f1=open("/tmp/files.js",'a+')
	f1.writelines("\n%s" %out)
	f1.close()
	i+=1
	

f2=open("/tmp/files.js",'a+')
f2.writelines('''
]

}
 ''')
f2.close()

### COPYING OUTPUT FILE >> files.js >> TO SERVER

commands.getoutput("yum install sshpass -y ")
print "Copying File.."
print commands.getoutput("sshpass -p 00.. scp -o StrictHostKeyChecking=no  /tmp/files.js  root@192.168.0.120:/var/www/html/ezhadoop/ ")
print "Done"





