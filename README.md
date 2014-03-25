iGestis OpenChange
==================

Table of content
================

* What is iGestis OpenChange
* iGestis Samba installation

What is iGestis OpenChange
==========================

iGestis OpenChange is a module dedicated for iGestis core software. It adds the 
schema for Samba 4 and OpenChange for employee management.

Warning : the module installation doesn't affect the existing employees, they
have to be edited one by one in order to get the new Samba attributes.

iGestis OpenChange installation
===============================

Debian/Ubuntu installation
--------------------------

The installation is quite simple from Debian or Ubuntu and if you already
have the iGestis repository.

    apt-get install igestis-openchange

Other operating system
----------------------

Create an empty directory under modules named OpenChange and place the content of
the module inside.
