#!/bin/sh

CONF=/cf/conf/config.xml
OLDC=/root/pfconf/config.xml
HASH=`md5 -q ${CONF}`
OLDH=/root/pfconf/config.md5

if [ "$HASH" != `cat ${OLDH}` ]
then
        diff -wtu ${OLDC} ${CONF} | mail.php -s"A Change in config.xml (MD5: $HASH)"
        cp ${CONF} ${OLDC}
        echo "$HASH" > ${OLDH}
fi
