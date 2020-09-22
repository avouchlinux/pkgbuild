export J2REDIR=/usr/lib/java/jre1.7.0_04
export PATH=$PATH:$J2REDIR/bin
export CLASSPATH=$CLASSPATH:$J2REDIR/lib
if [ ! -f /etc/profile.d/jdk.sh ]; then
        export JAVA_HOME=/usr/lib/java/jre1.7.0_04
fi
