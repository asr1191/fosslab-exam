#!/bin/bash

cat $1 | while read line
do
	echo $line | grep -E -o "\b[A-Za-z0-9]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,6}\b"
done