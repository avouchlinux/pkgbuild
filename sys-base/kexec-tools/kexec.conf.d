#
# Configuration for Kexec
#

# Path to kernel, default to avouch kernel
KPATH="/boot/vmlinuz"

# Root partition
# The default attempts to autodetect
ROOTPART="$(awk '/^[ \t]*[^#]/ { if ($2 == "/") { print $1; }}' /etc/fstab)"

# Additional kernel parameters
KPARAM="ro"

# Path to initrd image, default to avouch kernel
INITRD="/boot/initramfs.img"
