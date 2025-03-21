# mesa driver
# If gave dual GPU, hybrid grafix do not set these otion
# otherwise second GPU will not work
# For wayland session no need to set these options
case $(cat /sys/devices/cpu/caps/pmu_name) in 
    'haswell'|'broadwell'|'skylake'|'kaby kake')

    # enable crocus driver for generation 4, 5, 6, 7
    # as i965 is not anymore in mesa, i965 moved to mesa-amber branch
    export MESA_LOADER_DRIVER_OVERRIDE=crocus
    return ;;

	'nehalem'|'sandy bridge'|'ivy bridge')

    # for older use i915
    export MESA_LOADER_DRIVER_OVERRIDE=i915
	return ;;
esac

# force use of second descrete GPU for all applications
# this is not recomended as it consumes morepower and
# thus reduce battery life. 
# Set this option for indivisual application for which 
# descrete GPU is required.
# export DRI_PRIME=1
# export DRI_PRIME=pci-0000_02_00_0

# __GLX_VENDOR_LIBRARY_NAME=mesa MESA_LOADER_DRIVER_OVERRIDE=nouveau glxinfo | grep OpenGL
