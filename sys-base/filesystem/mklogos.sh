#!/bin/sh
set -e

baseurl=https://raw.githubusercontent.com/avouch/archweb/44336237bcaadb07d01c1f83fb97a9dc56cda56d/public/static/logos/

mklogo() (
  name="$1"
  remote="$2"

  rm -f -- "$remote" "$name.svg.tmp" "$name.svg" "$name.png"
  wget -O "$remote" -- "$baseurl/$remote"
  rsvg-convert -f svg -w 256 -o "$name.svg.tmp" -- "$remote"
  scour --strip-xml-prolog --remove-descriptive-elements \
      --enable-comment-stripping --enable-viewboxing \
      --enable-id-stripping --shorten-ids \
      -i "$name.svg.tmp" -o "$name.svg"
  rm -- "$remote" "$name.svg.tmp"
)

mklogo avouch-logo           avouch-logo-only.svg           &
mklogo avouch-logo-text      avouch-logo-dark-scalable.svg  &
mklogo avouch-logo-text-dark avouch-logo-light-scalable.svg &

wait

rsvg-convert -f png -z 1 -o avouch-logo.png avouch-logo.svg
optipng -strip all -o4 -fix -- avouch-logo.png
