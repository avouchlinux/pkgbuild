#!/usr/bin/env bash

DISK=/dev/sdc
DRIVE=/dev/sdc1
DATA_MOUNTPOINT=/mnt
EFI_MOUNTPOINT=$DATA_MOUNTPOINT
FILE_SYSTEM=vfat
UUID=04C8-7321

get_uuid()
{
    if [ "${1%%/[hs]d?[0-9]}" != "${1}" ]; then
        echo "$(blkid -s UUID -o value ${1})"
    fi
}

#sudo mount -t $FILE_SYSTEM $DRIVE $DATA_MOUNTPOINT

sudo mount -t $FILE_SYSTEM /dev/disk/by-uuid/$UUID $DATA_MOUNTPOINT

sudo mkdir -p $DATA_MOUNTPOINT/boot/grub
#sudo mkdir -p $DATA_MOUNTPOINT/efi

sudo grub-install --target=x86_64-efi --efi-directory=$EFI_MOUNTPOINT --boot-directory=$DATA_MOUNTPOINT/boot --removable --recheck

sudo grub-install --target=i386-pc --boot-directory=$DATA_MOUNTPOINT/boot --recheck $DISK

umount -l $DATA_MOUNTPOINT

/run/media/avouch/AVOUCHLIVE
