#!/usr/bin/env python
# -*- coding: utf-8 -*-
#
#  pig.py


def main():
	f=open("/root/.bashrc","a+")
	f.write("\n")
	f.write("export PATH=/etc/pig/bin/:$PATH")
	f.write("\n")
	f.write("export PIG_HOME=/etc/pig")
	f.close()
	return 0

if __name__ == '__main__':
	main()

