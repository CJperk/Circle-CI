#!/bin/sh
 
# Modem device
DEV=/dev/ttyUSB0
# Destination mumber
DESTNUM="8825566528"
# Message
SMS="Hi, there"
 
# we need to put sleep 1 to slow down commands for modem to process
echo -e "ATZ\r" >$DEV
sleep 1
echo -e "AT+CMGF=1\r" >$DEV
sleep 1
echo -e "AT+CMGS=\"$DESTNUM\"\r" >$DEV
sleep 1
echo -e "$SMS\x1A" >$DEV
