#!/usr/bin/env python

import commands

f2=open("/var/www/html/ezhadoop/morisdonutchart.html",'wb')

old_ram="80"
old_disk="72"

new_ram="50"
old_ram="50"

commands.getoutput("sed -i 's/old_ram/new_ram/' /var/www/html/ezhadoop/morisdonutchart.html")
commands.getoutput("sed -i 's/old_disk/new_disk/' /var/www/html/ezhadoop/morisdonutchart.html")
f2.close()
f1=open("/var/www/html/ezhadoop/morisdonutchart.html")
old=f1.read()
print old
f1.close()
