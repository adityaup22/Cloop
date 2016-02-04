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


'''
print "content-type: text/html"
print
'''
import commands,threading
global i,ip,l

### Scaning Network ###

commands.getoutput("nmap -sP 192.168.0.254/24 | awk '{print $6}' | grep 192 | sed 's/(//'| sed 's/)//' > ip.txt")
fip=open("ip.txt")
ip=fip.read().splitlines()
fip.close()

l=commands.getoutput("cat ip.txt | wc -l")

f1=open("newip.txt",'w')
f1.writelines('''var nn={
"details":[
"''')		
f1.close()


print "l = "+str(l)
i=0

def disk_scan(i):
	j=0
	while j<1:
		j+=1
		disk_cmd=" python /tmp/get_disk.py"
		disk_cmd1="sshpass -p redhat scp get_disk.py root@"+ip[i]+":/tmp/"
		disk_cmd2="sshpass -p redhat ssh root@"+ip[i]+disk_cmd
		copy=commands.getstatusoutput(disk_cmd1)
		disk=commands.getstatusoutput(disk_cmd2)
		
		try:
			n=int(disk[1])
			print "{'IpAddress' : '"+str(ip[i])+"','Ram':'1GB','Disk':'"+str(n)+"'},"
			print "\n"
			
			
		except IOError as e:
			continue
			print "I/O error({0}): {1}".format(e.errno, e.strerror)
		except ValueError:
			continue
			print str(i)+"Could not convert data to an integer."
					
		except:
			continue
			print "Unexpected error:", sys.exc_info()[0]
		


def Main():
	k=0
	while k <int(l):
		var="t"+str(k)
		var=threading.Thread(target=disk_scan,args=(k,))
		var.start()
		k+=1
	 


if __name__=='__main__':
	Main()

		   
