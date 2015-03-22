#!/bin/sh
# This script runs on OpenWRT and uses freedns.afraid.org's service

if [ `uci -P /var/state get network.wan.up` != 1 ]
then
    /etc/init.d/network restart
    exit 1
fi

IP=`uci -P /var/state get network.wan.ipaddr`

if [ "$IP" != `uci -P /var/state get network.wan.lastipaddr` ]
then
   wget -qO /dev/null http://freedns.afraid.org/dynamic/update.php?token==

   # Got freeDNS my new IP? Ask to openDNS!
   sleep 10
   if [ `nslookup your_domain.com 208.67.222.222 | sed -n '${s/.*: \(.*\) .*/\1/p}'` == "$IP" ]
   then
      date "+%Y%m%d %R  $IP" >> /var/log/ip.log
      uci -P /var/state set network.wan.lastipaddr="$IP"
   fi
fi
