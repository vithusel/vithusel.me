
#!/bin/bash

TEXT_RESET='\e[0m'
TEXT_YELLOW='\e[0;33m'
TEXT_RED_B='\e[1;31m'

sudo apt-get update 
echo -e $TEXT_YELLOW
echo 'Refreshing availible updates'
echo -e $TEXT_RESET

sudo apt-get install apache2
echo -e $TEXT_YELLOW
echo 'Installed Apache2'
echo -e $TEXT_RESET

sudo apt-get update
sudo apt-get upgrade
sudo apt-get dist-upgrade
echo -e $TEXT_YELLOW
echo 'Installed updates'
echo -e $TEXT_RESET

sudo rpi-update
echo -e $TEXT_YELLOW
echo 'Updated Raspberry Pi Firmware'
echo -e $TEXT_RESET

cd /var/www
sudo chown vithusel html
cd html
rm index.html
cd ..
echo -e $TEXT_YELLOW
echo 'setting ownership of folder and remove exising page'
echo -e $TEXT_RESET

git clone https://github.com/vithusel/vithusel.me.git html
echo -e $TEXT_YELLOW
echo 'Copy files to folder'
echo -e $TEXT_RESET

cp -f apache2.conf /etc/apache2/
echo -e $TEXT_YELLOW
echo 'Copied apache config file'
echo -e $TEXT_RESET

sudo a2enmod rewrite
sudo systemctl restart apache2
sudo nano /etc/apache2/apache2.conf
echo -e $TEXT_YELLOW
echo 'Enable mod-rewrite'
echo -e $TEXT_RESET

sudo reboot
echo -e $TEXT_YELLOW
echo 'Reboot system'
echo -e $TEXT_RESET
