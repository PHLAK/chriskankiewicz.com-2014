ChrisKankiewicz.com
===================

Home page of Chris Kankiewicz.


Development
-----------

### Prerequisites

Most prerequisites are provided with Homestead, the development VM provided by
Laravel. However you will need a few things to get this

  1. [git](https://git-scm.com)
  2. [PHP](https://secure.php.net) >= 5.5
  3. [Composer](https://getcomposer.org) (Optional)
  4. [NodeJS + npm](https://nodejs.org) >= 4.3
  5. [Virtualbox](https://www.virtualbox.org)
  6. [Vagrant](https://www.vagrantup.com)

Quick install (Ubuntu):

**git**

  sudo apt-get install git

**PHP**

    sudo apt-get install php5-cli

**Composer**

    curl https://getcomposer.org/installer | php && sudo mv composer.phar /usr/local/bin/composer

**Node**

    curl -sL https://deb.nodesource.com/setup_5.x | sudo -E bash -
    sudo apt-get update && sudo apt-get install nodejs

**Virtualbox**

    echo "deb http://download.virtualbox.org/virtualbox/debian $(lsb_release -cs) contrib" | sudo tee /etc/apt/sources.list.d/virtualbox.list
    wget -q https://www.virtualbox.org/download/oracle_vbox.asc -O- | sudo apt-key add -
    sudo apt-get update && sudo apt-get install virtualbox-5.0

**Vagrant**

Manual download: <https://www.vagrantup.com/downloads.html>

### Setting up your dev environment

  1. Clone the repo: `git clone git@github.com:PHLAK/chriskankiewicz.com.git`
  2. Install PHP dependencies: `php composer.phar install`
  3. Install NodeJS dependencies: `npm install`
  4. Initialize Homestead: `php vendor/bin/homestead make`
  5. Configure Homestead: `nano Homestead.yml`
  6. Edit hosts file: `sudo nano /etc/hosts`
  7. Start the VM: `vagrant up`


Production
----------

More info coming soon...
