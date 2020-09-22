#!/bin/bash
#JD Installer/Starter Version 0.3
#by Jiaz(JD-Team), jiaz@jdownloader.org
#modified to support curl, thx to Tracy R.
#You need at least:
#1.) bash (its a bash script ;) )
#2.) wget 
#3.) Java Version >= 1.5 (OpenJDK works also in latest Version)

#How to use this?
#1.) chmod +x jd.sh
#2.) Place it anywhere you want
#3.) Running jd.sh for the first time will install and setup JD into JDDIR folder
#4.) Running jd.sh after the first time will start JDownloader directly

#Parameters
# update (will perform an update)

#JD Installation folder (adjust to your needs)
JDDIR="$HOME/.jd"
#default path to our install/update tool (DO NOT Change this)
JDINSTALLER="http://update0.jdownloader.org/jdupdate.jar"

if [ $(uname -s) = "Darwin" ] ; then
	DOWNLOADER="curl -O"
else
	DOWNLOADER="wget"
fi

if [ -d "$JDDIR" ] ; then
	if [ "$1" = "update" ] ; then
		if [ -f "$JDDIR/jdupdate.jar" ] ; then
			cd "$JDDIR"
			echo "Start JD-Updater"
			java -Xmx512m -jar jdupdate.jar
			exit
		else
			echo "Cannot start JD-Updater: Download/Start JD-Installer"
			cd "$JDDIR"
			$DOWNLOADER  $JDINSTALLER
			java -Xmx512m -jar jdupdate.jar
			exit
		fi
	fi

	if [ -f "$JDDIR/JDownloader.jar" ] ;  then
		echo "JD Installation found: Starting JD now"
		cd "$JDDIR"
		#java -Xmx512m -jar JDownloader.jar --add-links $1 $2 $3 $4 $5 $6 $7 $8 $9
		java -Xmx512m -jar JDownloader.jar
		exit
	else
		echo "JD Installation found: No valid JDownloader.jar exist!"
	fi

	if [ -f "$JDDIR/jdupdate.jar" ] ; then
		cd "$JDDIR"
		echo "Start JD-Updater"
		java -Xmx512m -jar jdupdate.jar
	else
		echo "Cannot start JD-Updater: Download/Start JD-Installer"
		cd "$JDDIR"
		$DOWNLOADER $JDINSTALLER
		java -Xmx512m -jar jdupdate.jar
		exit
	fi
else
	echo "Download/Start JD-Installer"
	mkdir "$JDDIR"
	cd "$JDDIR"
	$DOWNLOADER $JDINSTALLER
	java -Xmx512m -jar jdupdate.jar
	exit
fi
