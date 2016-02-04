#!/usr/bin/python2


from commands import getoutput as out



def pig(i):
	
	out("sshpass -p redhat scp pig.tar.gz pig.py root@"+i+":/tmp/")
	out("sshpass -p redhat ssh -o StrictHostKeyChecking=no root@"+i+" tar -xvzf /tmp/pig.tar.gz -C /etc/")
	out("sshpass -p redhat ssh -o StrictHostKeyChecking=no root@"+i+" python /tmp/pig.py")
	
	out("sshpass -p redhat ssh -o StrictHostKeyChecking=no root@"+i+" rm -ivf /pig.py /pig.tar.gz")
	
def hive(i):
	out("sshpass -p redhat scp hive.tar.gz hive.py root@"+i+":/tmp/")
	out("sshpass -p redhat ssh -o StrictHostKeyChecking=no root@"+i+" tar -xvzf /tmp/hive.tar.gz -C /etc/")
	out("sshpass -p redhat ssh -o StrictHostKeyChecking=no root@"+i+" python /tmp/hive.py")
	out("sshpass -p redhat ssh -o StrictHostKeyChecking=no root@"+i+" rm -ivf /tmp/hive.py /tmp/hive.tar.gz")
	
	
	
	
	#~ 
	#~ out("sshpass -p redhat ssh -o StrictHostKeyChecking=no root@"+i+" )
	#~ 
	#~ 
	#~ out("sshpass -p redhat ssh -o StrictHostKeyChecking=no root@"+i+" )
	#~ out("sshpass -p redhat ssh -o StrictHostKeyChecking=no root@"+i+" )
	#~ out("sshpass -p redhat ssh -o StrictHostKeyChecking=no root@"+i+" )
	#~ out("sshpass -p redhat ssh -o StrictHostKeyChecking=no root@"+i+" )
