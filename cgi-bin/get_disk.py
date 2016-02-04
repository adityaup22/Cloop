#!/usr/bin/python
import os


def gtdisk():
	disk=os.statvfs("/")
	available = disk.f_bsize * disk.f_bavail/1024/1024/1024
	return available
	
def Main():
	disk=gtdisk()
	print disk
	
if __name__=='__main__':
	Main()
	
	
 
