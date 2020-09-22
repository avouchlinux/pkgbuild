#!/bin/bash

# make tvtime to gather both audio and video from the device and route it to your master mixer
tvtime | arecord -D hw:2,0 -r 32000 -c 2 -f S16_LE | aplay
