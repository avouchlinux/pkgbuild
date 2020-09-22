# .bashrc

# Source global definitions
if [ -f /etc/bashrc ]; then
	. /etc/bashrc
else 
	# User specific aliases and functions
	alias ls='ls --color=auto'
	PS1='[\u@\h:\W]\$ '
fi

# Uncomment the following line if you don't like systemctl's auto-paging feature:
# export SYSTEMD_PAGER=


