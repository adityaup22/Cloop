#!/usr/bin/python
		
											##             EZHADOOP			    ##
											## FOR LOGGING IN REMOTE COMPUTERS  ##
											##     SERVER SIDE CONFIGURATION    ##
											##          CGI -IMPLEMENTATION	    ## 
											
									###########################################################
									#														  #
									#> make directory /usr/share/httpd/.ssh/ .				  #
									#> make file in named /usr/share/httpd/.ssh/known_hosts . #
									#> Make Apache As Owner OF That Directory .				  #
									#> Run This :- chown apache -R /usr/share/httpd/ . 		  #
									#														  #
									###########################################################



print "content-type: text/html"
print

import commands,threading
global i,ip,l

### Scaning Network ###
print "Scanning Network"
commands.getoutput("nmap -sP 192.168.0.254/24 | awk '{print $6}' | grep 192 | sed 's/(//'| sed 's/)//' > ip.txt")
fip=open("ip.txt")
ip=fip.read().splitlines()
fip.close()

l=commands.getoutput("cat ip.txt | wc -l")

f1=open("/var/www/html/ezhadoop/newip.js",'w')
f1.writelines('''var nn={
'details':[
''')		

f1.close()

def comp_scan(i):
	j=0
	while j<1:
		j+=1
		###  INFORMATION OF RAM  ####
		
		ram_cmd="  cat /proc/meminfo | awk -F ':' '$1==\"MemTotal\" {print $2}'"
		cmd="sshpass -p redhat ssh -o StrictHostKeyChecking=no root@"+ip[i]+ram_cmd
		ram=commands.getstatusoutput(cmd)
		   
		#######		 END		#########
		
		
		###  INFORMATION OF DISK  ####     
		
		disk_cmd=" python /tmp/get_disk.py"
		disk_cmd1="sshpass -p redhat scp get_disk.py root@"+ip[i]+":/tmp/"
		disk_cmd2="sshpass -p redhat ssh root@"+ip[i]+disk_cmd
		copy=commands.getstatusoutput(disk_cmd1)
		disk=commands.getstatusoutput(disk_cmd2)
		
		#######		 END		#########
		
		try:
			n=int(disk[1])
			t = int(ram[1].split()[0])
			ram_mb=t/1024
			out="{'IpAddress' : '"+str(ip[i])+"','Ram':'"+str(ram_mb)+"Mib"+"','Disk':'"+str(n)+"Gib"+"'},"
			print out
			print "\n"
			
			
		except IOError as e:
			continue
			#print "I/O error({0}): {1}".format(e.errno, e.strerror)
		except ValueError:
			continue
			#print str(i)+"Could not convert data to an integer."
					
		except:
			continue
			#print "Unexpected error:", sys.exc_info()[0]
		
		f2=open("/var/www/html/ezhadoop/newip.js",'a')
		f2.writelines("\n%s"%out)
		f2.close()
		

	

def Main():
	k=0
	inst=[]
	while k <int(l):
		var="t"+str(k)
		var=threading.Thread(target=comp_scan,args=(k,))
		var.start()
		inst.append(var)
		k+=1
	for q in inst:
		q.join()
		
	f3=open("/var/www/html/ezhadoop/newip.js",'a')
	f3.writelines(''' 
]

}
''')
	f3.close()


if __name__=='__main__':
	Main()
