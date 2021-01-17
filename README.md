# UPGRAD Tutorial: Hashing

![Build Status](https://travis-ci.org/joemccann/dillinger.svg?branch=master)

The objective of this tutorial is to teach students about the usage of Hash functions.

Note: Don't use this code in production.


### Installation

The project requires PHP7.1 to run.

#### Setting up the server

Installing apache2, mysql and setting up the root password. Don't forget to set the root password.

```sh
sudo apt-get update
sudo apt-get install apache2
sudo service apache2 start
sudo /etc/init.d/mysql start
sudo mysql_secure_installation
```

Installing phpmyadmin and setting up the database

```sh
sudo apt-get install phpmyadmin
```
Choose `apache2` while installing phpmyadmin. Create a sample password for the database phpmyadmin. Once installed, visit the phpmyadmin through the public IP address of your instance. For example, if the public IP address of your instance is 10.10.10.10 then type http://10.10.10.10/phpmyadmin in your browser. You will be prompted with a login page of phpmyadmin, type the username as `root` and password which you setup while installing the mysql.

Create the database name `upgraddemo` and table as `upgraddemo`. Create three column as type VARCHAR and named `name` length 100, `email` length 100, `password` length 2000.

Cloning the repository and configuring the public path

```sh
cd /var/www/html
git clone https://github.com/UnpredictablePrashant/UpgradHashTutorial.git
cd /etc/apache2/sites-enabled/
sudo nano 000-default.conf
```
Change the location from `www/html` to `www/html/upgradhashtutorial`. Setup is almost done. Now we just need to change the credentials on our repo and then restart the server.

You need to edit two files `login.php` and `registration.php` and type the root password which you have set for the mysql. To edit files:
```sh
cd /var/www/html/upgradhashtutorial
sudo nano login.php
sudo nano registration.php
```

Finally restart the server.
```sh
sudo service apache2 restart
```

Let's do a test run. Visit the IP address of the instance. For example, if the public IP address of your instance is 10.10.10.10 then type http://10.10.10.10 in your browser.

License
----

MIT

