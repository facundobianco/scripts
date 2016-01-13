This is my personal scripts repository.

## cd2mp3

Creating MP3s with OpenBSD (scripts made by [Holland
Consulting](http://holland-consulting.net/tech/obsdmp3.html)).

## misc

### 86display

For activate one screen output (LVDS or HDMI). Also, it resizes some
X11 applications.

### capture

Takes an screenshot for the whole screen or an specific X11 window. For
GNU/Linux, uses [mtpaint](http://mtpaint.sourceforge.net).

### casa

Opens an URxvt terminal and launchs an SSH connection to your home
server. In spanish, "casa" means "home".

### getemails

Fetchs emails with [getmail](http://pyropus.ca/software/getmail) from
multiple accounts.

### newpost

For lazy bloggers who use [Jekyll](https://jekyllrb.com).

### volume

Manages speaker's audio levels.

### xlock

X lock screen with [i3lock](http://i3wm.org/i3lock). I used the lock
image from [meskarune's i3lock-fancy](http://meskarune.github.io/i3lock-fancy).

### zzz

Puts the system in hibernation. Before that, it kills your SSH
connections, kills your fetching emails and selects LVDS as
default screen.

## openBSD

It's a fork from [OpenBSD Journal](http://undeadly.org/cgi?action=article&sid=20071224164233&mode=flat)
for using multiple wireless network profiles. I added WPA support, wireless
options and network profiles.

## openWRT

Updates at [FreeDNS](https://freedns.afraid.org) your dinamic public IP from your openWRT router.

## pfSense

### checkconfig.sh

I created this script because I worked with n00bs that made changes a
lot on our pfSense. It sends an email with diff on `/cf/conf/config.xml`.

### checkipsec.php

It sends an email when one link is offline.

## Slackware

### downsrc

Download source file for slackbuilds script.

### requires

List packages dependencies for [SlackBuilds](http://slackbuilds.org)
repository. By default, it will list unistalled packages.

I used it with [sport](http://slackermedia.info/sport)

```
sport install `requires tweepy`
```

### updateff

Updates Firefox binary releases from mozilla.net. Also, compress
Firefox with [upx](http://upx.sourceforge.net).
