Event Driven Microservice

### GITHUB add Token to push branch

Github.com -> Settings -> Developer Settings -> Personal acces tokens -> Generate new token
git remote add origin https://<token>@github.com/birneos/microservice_sf7.git
git push -u origin main

git checkout -b project-start
git push origin project-start

#### Switch PHP Version

php -v
/etc/php
sudo apt install 8.2 8.3 8.4
sudo update-alternatives --set php /usr/bin/php8.x
