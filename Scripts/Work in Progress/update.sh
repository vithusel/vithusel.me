Echo Refreshing availible updates
sudo apt-get update 

Echo Installing updates
sudo apt-get install update -y
sudo apt-get install upgrade -y

Echo update Raspberry Pi Firmware
sudo rpi-update

Echo Pull latest changes from github
cd /var/www/html
git pull

Echo Reboot system
sudo reboot