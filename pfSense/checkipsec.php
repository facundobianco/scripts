<?php
require_once("util.inc");
require_once("functions.inc");
require_once("globals.inc");
require_once("config.inc");
require_once("notices.inc");

$host=array_pop($argv);
if (! is_ipaddr($host)){
        print "invalid ip address!\n";
        exit(1);
}
array_shift($argv);
$args=implode(" ", $argv);

exec("/sbin/ping -c 4 -t 1 $args $host",$ret,$exit);
if ($exit != 0){
        $message = "Visit https://pfsense.urdomain.com/diag_ipsec.php";
        $subject = "IPSec: Link offline $host\n";
        send_smtp_message($message, $subject);
}
?>
