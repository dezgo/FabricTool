#!/bin/bash

echo Set owner:group to derek:www-data
chown -R derek:www-data .

echo Change all directorys to 750
find . -type d -exec chmod 0750 {} \;

echo And all files to 640
find . -type f -exec chmod 0640 {} \;

echo Give write access to storage folder
find storage -type d -exec chmod 0770 {} \;
find storage -type f -exec chmod 0660 {} \;

echo Give write access to bootstrap/cache folder
find bootstrap/cache -type d -exec chmod 0770 {} \;
find bootstrap/cache -type f -exec chmod 0660 {} \;

echo Ensure this script stays executable
chmod 0770 fixperms.sh
