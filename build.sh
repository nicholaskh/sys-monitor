#!/bin/bash
rsync -a --delete --exclude='.git/' --exclude='.gitignore' --exclude='config/web.php' . sre@10.77.152.10:/var/wd/ffan-sys-monitor
