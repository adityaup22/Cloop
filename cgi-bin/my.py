#!/usr/bin/python

import os
import commands
import cgi

print "content-type: text/html"
print 

os.system("tput setab 7")
os.system("clear")
os.system("tput setaf 4")

while True:
	os.system("clear")
	print '''  
			#####################
			Welcome To Cloop Tool
			#####################'''

	print '''
			1.> S.A.A.S
			2.> ST.A.A.S
			3.> USERADD
			4.> Exit'''
	ch=raw_input("Enter Your Choice : ")
  # SAAS
	if ch=='1':
		while True:
			os.system("clear")
			print '''
				S.A.A.S Selected..'''
			print '''
				1.>Firefox
				2.>Virt-Manager
				3.>Tiger Vnc
				4.>Notepad
				5.>Exit'''
			soft=raw_input("Enter Software U Wanna Use : ")	
			if soft=='1' :
				os.system("sshpass -p redhat ssh -X 192.168.1.3 firefox")
			if soft=='2' :
				os.system("sshpass -p redhat ssh -X 192.168.1.3 virt-manager")
			if soft=='3' :
				os.system("sshpass -p redhat ssh -X 192.168.1.3 vncviewer")
			if soft=='4' :
				os.system("sshpass -p redhat ssh -X 192.168.1.3 wine notepad ")
			if soft=='5' :
				break
  # STAAS
	if ch=='2':
		while True:
			
			os.system("clear")
			print '''
				ST.A.A.S Selected..'''
			print '''
				1.>Object Storage
				2.>Block Storage
				3.>Exit '''
			storage=raw_input("Enter Ur Storage Choice : ")	
			#Block Storage
			while True :
				if storage=='1' :
					print '''
					You have Selected Block Storage...  '''
				if storage=='2' :
					os.system("sshpass -p redhat ssh -X 192.168.1.3 virt-manager")
				if storage=='3' :
					break
							
	
	
