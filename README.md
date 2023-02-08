# Monster Hunter DLC replacement server

This repository contains data to make it possible to host replacement DLC servers for the Monster Hunter PSP games. For example, for MHP which had its official server closed in 2014.

One of the goals of this project is to preserve all original events.

## How to access it

Either an original PSP or an emulator that supports online (for example, JPCSP) can be used.

To connect, just create a new connection, set DNS to manual, and specify the desired DNS server.

![JPCSP 1](/images/img0.PNG)
![JPCSP 2](/images/img1.PNG)

## How to set up

To host this project a web server is needed (for example, Apache) to serve its contents. The `psp` folder needs to be placed as the root folder, so an URL would look like this: `http://xx.xx.xx.xx/psp/MHPSP/DL_TOP.PHP`.

Since PHP files have an uppercase extension, make sure the following line is added to your Apache configuration: `AddType application/x-httpd-php .PHP`.

Regarding the DNS, `dnsmasq` will work just fine. Install it, create a file at `/etc/dnsmasq.d/` and add the required domains specified in the `redirect_urls.txt` file.

## Notice

This is just a preservation project, we don't own some of the data present on this repository.
