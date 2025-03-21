THIS_JRE='java-23-openjdk'

fix_default() {
  if [ ! -x /usr/bin/java ]; then
    /usr/bin/avouch-java unset
    echo ""
  else
    /usr/bin/avouch-java get
  fi
}

post_install() {
  default=$(fix_default)
  case ${default} in
    "")
      /usr/bin/avouch-java set ${THIS_JRE}
      ;;
    ${THIS_JRE})
      # Nothing
      ;;
    *)
      echo "Default Java environment is already set to '${default}'"
      echo "See 'avouch-java help' to change it"
      ;;
  esac

  echo "when you use a non-reparenting window manager,"
  echo "set _JAVA_AWT_WM_NONREPARENTING=1 in /etc/profile.d/jre.sh"
}

post_upgrade() {
  if [ -z "$(fix_default)" ]; then
    /usr/bin/avouch-java set ${THIS_JRE}
  fi
}
