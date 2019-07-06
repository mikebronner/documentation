---
extends: _layouts.post
section: content
title: What To Do When Vagrant Won't Start Your Homestead Box
date: 2019-05-25
description: Sometimes Vagrant will throw an error when trying to boot up Homestead.
categories: [troubleshooting,devops]
featured: true
---

## Error
```
There was an error while executing `VBoxManage`, a CLI used by Vagrant
for controlling VirtualBox. The command and stderr is shown below.

Command: ["hostonlyif", "create"]

Stderr: 0%...
Progress state: NS_ERROR_FAILURE
VBoxManage: error: Failed to create the host-only adapter
VBoxManage: error: VBoxNetAdpCtl: Error while adding new interface: failed to open /dev/vboxnetctl: No such file or directory
VBoxManage: error: Details: code NS_ERROR_FAILURE (0x80004005), component HostNetworkInterfaceWrap, interface IHostNetworkInterface
VBoxManage: error: Context: "RTEXITCODE handleCreate(HandlerArg *)" at line 94 of file VBoxManageHostonly.cpp
```

## Solution
```sh
sudo "/Library/Application Support/VirtualBox/LaunchDaemons/VirtualBoxStartup.sh" restart
```
