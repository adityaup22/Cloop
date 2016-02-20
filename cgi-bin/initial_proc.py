#!/usr/bin/python

# http://127.0.0.1/cgi-bin/initial_proc.py?user={$_SESSION['username']}")

from commands import getoutput
import os

import cgi,cgitb
cgitb.enable()

form=cgi.FieldStorage()

print "content-type: text/html"

uname=form.getvalue('user')
size="1G"
ip_storage_server="127.0.0.1"
passwd_storage_server="00.."
ip_http_server="127.0.0.1"



os.chdir("/users_storage")
os.mkdir(uname)

os.chdir(uname)

fn=uname+"_storage.py"
f=open(fn,'a+')
data='''#!/usr/bin/python

import commands
import os '''
data+= '''\ncommands.getoutput("lvcreate -L {} -n {} vg1")'''.format(size,uname)
data+='''\ncommands.getoutput("mkfs.ext4 /dev/vg1/{}")'''.format(uname)
data+='''\ncommands.getoutput("mkdir -p /mnt/users_storage/{}")'''.format(uname)
data+='''\ncommands.getoutput("mount /dev/vg1/{} /mnt/users_storage/{}")'''.format(uname,uname)
data+='''\ncommands.getoutput("chmod -R 755 /mnt/storage_user/{}")'''.format(uname)
data+='''\nf=open("/etc/exports",'a+')
data="/mnt/users_storage/{}  *(rw,sync,no_root_squash)"
f.write("\\n"+data)
f.close()
commands.getoutput("exportfs -r")


f.writelines(data)'''.format(uname)

f.write("\n"+data)
f.close()

getoutput("sshpass -p "+passwd_storage_server+" scp -o StrictHostKeyChecking=no  /users_storage/"+uname+ "/*  root@"+ip_storage_server+":/copied_file/  ")
getoutput("sshpass -p "+passwd_storage_server+" ssh -o StrictHostKeyChecking=no   root@"+ip_storage_server+"  python  /copied_file/"+fn)

getoutput("mkdir -p /var/www/html/users_storage/"+uname)
getoutput("mount "+ip_storage_server+":/mnt/storage_user/"+uname+" /var/www/html/storage_users/"+uname)


print "Location:creatingxml.py?user="+uname
print

