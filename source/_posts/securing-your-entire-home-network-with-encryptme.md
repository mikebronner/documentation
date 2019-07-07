---
extends: _layouts.post
section: content
title: Securing Your Entire Home Network With encrypt.me
date: 2019-05-27
description: How to set up your router as a gateway VPN using encrypt.me.
categories: [misc]
featured: true
---

If you have an eero and subscribe to eero Plus, you get a free subscription to  [encrypt.me](https://encrypt.me) , one of the most performant VPN providers I have ever used. Unfortunately they only provide an app to secure individual devices, and no clear way to protect entire networks. This leaves all your IoT devices, as well as home entertainment devices like Roku, AppleTV, etc,  out in the cold.

The following is a guide to help you extract the VPN settings and apply them to your OpenVPN router.

*If you are using an eero and want to implement network-wide VPN, you will have to create a VPN gateway in front of your eero and either put the eero in bridge mode or double-nat it, which is what I do.*

## Assumptions
- macOS desktop
- DD-WRT VPN gateway router
-  [EncryptMe app](https://encrypt.me/apps/)  is installed.

If your setup differs, please make the appropriate adjustments to this guide.

## Guide
### Get The Configuration
1. Open the **EncryptMe** app on your computer.
2. Connect to your preferred or fastest connection.
3. Open **Terminal** and enter the following commands:
    ```sh
    sudo -i
    ps aux | grep openvpn
    ```

4. Extract the location of the OpenVPN config file from the output.
5. Output the content of the config file:
    ```sh
    cat /var/folders/zz/zyxvpxvq6csfxvn_n0000000000000/T/cloak.20190527094324.conf
    ```

6. Quit the **EncryptMe** app.

### Implement The Settings
1. Navigate to the VPN settings page on your router.
2. Enable **Start OpenVPN Client**.
3. Enter the server listed in the `remote` setting in **Server IP/Name**.
4. Enter the port listed in the `remote` setting in **Port**.
5. Enter the protocol listed in the `remote` setting in **Tunnel Protocol**.
6. Select the cipher listed in the `cipher` setting in **Encryption Cipher**.
7. Select the algorithm listed in `auth` setting in **Hash Algorithm**.
8. Leave **User Pass Authentication** disabled.
9. Enable **Advanced Options**.
10. Leave **TLS Cipher** set to `None`.
11. Select the compression listed in `comp-lzo` setting in **LZO Compression**.
12. Enable **NAT**.
13. Enable **Firewall Protection**.
14. Leave **IP Address** empty.
15. Leave **Subnet Mask** empty.
16. Set **Tunnel MTU Setting** to `1500`.
17. Leave **Tunnel UDP Fragment** empty.
18. Enable **Tunnel UDP MSS-Fix**.
19. Uncheck **nsCertType Verification**.
20. Leave **TLS Auth Key** empty.
21. Set **Additional Config** to `redirect-gateway`.
22. Leave **Policy Based Routing** empty.
23. Leave **PKCS12 Key** empty.
24. Leave **Static Key** empty.
25. Copy paste the text between the `<ca>` and `</ca>` tags into the **CA Cert** field.
26. Copy/paste the text between the `<cert>` and `</cert>` tags into the **Public Client Cert** field.
27. Copy/paste the text between the `<key>` and `</key>` tags into the **Private Client Key** field.
28. Hit **Apply Settings**.
29. Navigate to the Status > OpenVPN tab to verify that the connection succeeded. It may take a moment to connect, so if you don't see `CONNECT SUCCESS` yet, give it a few refreshes. If it still doesn't connect, double-check that the settings were entered correctly. See the screenshot below as an example of what it should look like.

#### Example Screenshot
![1*EBeeEx3W-U71ynPsIBLKuQ.png](https://cdn.hashnode.com/res/hashnode/image/upload/v1558975708205/v6ipVsTVH.png)

## Summary
### Benefits
- One single connection that protects your entire network.
- Highly performant VPN service.
- Free VPN, if you are an eero Plus subscriber.

### Drawbacks
- Amazon, Netflix, and other streaming providers don't like VPNs and block them. Encrypt.me does not seem to provide any form of unblocking services to address this.
- The certs seem to expire every 3 months or so, which means you need to periodically perform this exercise to keep your connection up.
- Encrypt.me does log session and browsing activity, which some claim defeats the purpose of VPNs. My main priority is protecting my privacy, mainly my ISP from reselling my data.
- Encrypt.me blocks certain traffic they deem "nefarious" by default. For example they block torrent traffic, but it can be unblocked per request on your account.

I would love to hear your experiences, or suggestions on improving this process. How are you protecting your network?
