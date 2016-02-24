#!/usr/bin/env python
# -*- coding: utf-8 -*-
#

def config(ipnn,ipjt):
	#core-site file
	c=open("core-site.xml","w+")
	c.write('''<?xml version="1.0"?>
<?xml-stylesheet type="text/xsl" href="configuration.xsl"?>

<!-- Put site-specific property overrides in this file. -->

<configuration>
<property>
<name>fs.default.name</name>
<value>hdfs://''')
	c.write(ipnn)
	c.write(''':9001</value>
</property>
</configuration>''')
	c.close()

	#mapred-site file 
	mr=open("mapred-site.xml","w+")
	mr.write('''<?xml version="1.0"?>
<?xml-stylesheet type="text/xsl" href="configuration.xsl"?>

<!-- Put site-specific property overrides in this file. -->

<configuration>
<property>
<name>mapred.job.tracker</name>
<value>''')
	mr.write(ipjt)
	mr.write(''':9002</value>
</property>

</configuration>''')
	mr.close()

	#hdfs file
	h=open("hdfs-site.xml","w+")
	h.write('''<?xml version="1.0"?>
<?xml-stylesheet type="text/xsl" href="configuration.xsl"?>

<!-- Put site-specific property overrides in this file. -->

<configuration>
<property>
<name>dfs.data.dir</name>
<value>/.hadoop</value>
</property>
</configuration>''')
	h.close()






