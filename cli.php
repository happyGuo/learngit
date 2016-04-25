<?php
#!/bin/bash
DATE=date +"%Y-%m-%d"
filename='/home/gf/a.txt'
awk -F'[|:]' '{printf("insert into users values (%s,%s,%s)",$0,$1,$2)}'>>1.sql
mysql -h localhost -u root -p 123123 $dbname < $dir/$sqlname
