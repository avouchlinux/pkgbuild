THIS_JDK='java-23-openjdk'

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
      /usr/bin/avouch-java set ${THIS_JDK}
      ;;
    ${THIS_JDK})
      # Nothing
      ;;
    *)
      echo "Default Java environment is already set to '${default}'"
      echo "See 'avouch-java help' to change it"
      ;;
  esac

  if [ ! -f /etc/ssl/certs/java/cacerts ]; then
    /usr/bin/update-ca-trust
  fi
}

post_upgrade() {
  default=$(fix_default)
  if [ -z "${default}" ]; then
    /usr/bin/avouch-java set ${THIS_JDK}
  fi

  if [ ! -f /etc/ssl/certs/java/cacerts ]; then
    /usr/bin/update-ca-trust
  fi
}

pre_remove() {
  if [ "x$(fix_default)" = "x${THIS_JDK}" ]; then
    # Check JRE is still available
    if [ -x /usr/lib/jvm/${THIS_JDK}/bin/java ]; then
      /usr/bin/avouch-java unset
    fi
  fi
}
