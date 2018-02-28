#!/bin/sh

cd /var/www/cri_final 

mob=`cat number.txt`

des=`cat desc.txt`


# Modem device
DEV=/dev/ttyUSB0
# Destination mumber
DESTNUM="$mob"


# Message
SMS="$des"

#ascii
#Z="x1A"

if [[ -z "$DESTNUM" ]];
then
   echo "Number not valid"
else

# we need to put sleep 1 to slow down commands for modem to process
echo -e "ATZ\r" >$DEV
sleep 1
echo -e "AT+CMGF=1\r" >$DEV
sleep 1
echo -e "AT+CMGS=\"$DESTNUM\"\r" >$DEV
sleep 1
echo -e "$SMS\x1A" >$DEV

echo > number.txt

echo > desc.txt


fi








#~ echo number.txt > file.txt

#~ ./test_sms.sh

#~ # Modem device
#~ DEV=/dev/ttyUSB0
#~ # Destination mumber
#~ DESTNUM="$NUM"

#~ # Message
#~ SMS="Hi, there Come soon....."
#~ #ascii
#~ Z="x1A"

#~ # we need to put sleep 1 to slow down commands for modem to process
#~ echo -e "ATZ\r" >$DEV
#~ sleep 1
#~ echo -e "AT+CMGF=1\r" >$DEV
#~ sleep 1
#~ echo -e "AT+CMGS=\"$DESTNUM\"\r" >$DEV
#~ sleep 1
#~ echo -e "$SMS\x1A" >$DEV
