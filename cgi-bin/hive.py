#!/usr/bin/env python
# -*- coding: utf-8 -*-
#
#  hive.py


def main():
	f=open("/root/.bashrc","a+")
	f.write("\n")
	f.write("export PATH=/etc/hive/bin/:$PATH")
	f.write("\n")
	f.write("export HIVE_HOME=/etc/hive")
	f.close()
	return 0

if __name__ == '__main__':
	main()


