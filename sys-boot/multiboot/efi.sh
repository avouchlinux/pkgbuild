DRIVE="/dev/sda9"
#efidrive="/dev/sda1"


get_uefi_drive(){

	# find the EFI system drive , 
	# grep EFI system drive string, starting with /dev and end at a space.
	efidrive="$(fdisk -l | grep -n 'EFI' | grep -o '/dev[^ ]*')"
	
	
	drive =$(grep -o '/dev[^ ]' "$efidrive")
	
	echo "$efidrive"
	
	for drives in "${efidrive[@]}"
		do  	
			# display the file to be installed
			# check the file and call the install package function
			if [[ "${drives%?}" == "${DRIVE%?}" ]]; then
				# EFI default drive
				echo "${drives}"
			
			else
				echo "Drives are not equal"
			fi
	done

}
get_uefi_drive
