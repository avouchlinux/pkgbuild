#!/bin/bash

#git config --global user.name "Qurban Ullah"
#git config --global user.email qurbanullah@avouch.org

# find all the files in directory and then filter out the first . and / with sed
tag=${1}
group=${2}
PKGFILES=("${PWD}"/lst/${group}.lst)

    if [[ -f "${group}.xml" ]]; then
        rm "${group}.xml"
    fi
    touch "${group}.xml"
    # Start the XML document
    echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>" >> "${group}.xml"
        
    # Root of the XML document
    echo "<${tag}>" >> "${group}.xml"
    
    for SRCFILES in "${PKGFILES[@]}"
		do  	
			# display the file to be installed
			echo "$SRCFILES"
			# check the file and call the install package function
			if [ -f "${SRCFILES}" ]; then
				# install the packages
                for names in  $(grep -v '^#' "${SRCFILES}");do        
                    echo "insersting $names into database"  
                    echo -e "\t <Name>$names</Name>">> "${group}.xml"      
                done
				echo "$(gettext "Package ${SRCFILES} installed sucessfully")"	
			else
				echo "$(gettext "Packages files ${SRCFILES} not found")"
			fi
		done
    # End of root
    echo "</${tag}>" >> "${group}.xml"

