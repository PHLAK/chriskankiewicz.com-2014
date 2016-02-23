ChrisKankiewicz.com
===================

Home page of Chris Kankiewicz.


Development
-----------

#### Prerequisites

  1. [git](https://git-scm.com) - Distributed source control

     ```bash
     sudo apt-get install git
     ```

  2. [PHP](https://secure.php.net) >= 5.5 - Web scripting language

     ```bash
     sudo apt-get install php5-cli
     ```

  3. [Composer](https://getcomposer.org) (Optional) - Dependency manager for PHP

      ```bash
      curl https://getcomposer.org/installer | php && sudo mv composer.phar /usr/local/bin/composer
      ```

  4. [NodeJS + npm](https://nodejs.org) >= 4.3 - Asset package manager

     ```bash
     curl -sL https://deb.nodesource.com/setup_5.x | sudo -E bash -
     sudo apt-get update && sudo apt-get install nodejs
     ```

  5. [Virtualbox](https://www.virtualbox.org) - Virtualization platform

     ```bash
     echo "deb http://download.virtualbox.org/virtualbox/debian $(lsb_release -cs) contrib" | sudo tee /etc/apt/sources.list.d/virtualbox.list
     wget -q https://www.virtualbox.org/download/oracle_vbox.asc -O- | sudo apt-key add -
     sudo apt-get update && sudo apt-get install virtualbox-5.0
     ```

  6. [Vagrant](https://www.vagrantup.com) - VM automation tool

     Manual installation: <https://www.vagrantup.com/downloads.html>

#### Setting up your dev environment

  1. Clone the repo:

     ```bash
     git clone git@github.com:PHLAK/chriskankiewicz.com.git
     ```

  2. Install PHP dependencies:

     ```bash
     php composer.phar install
     ```

  3. Install NodeJS dependencies:

     ```bash
     npm install
     ```

  4. Initialize Homestead:

     ```bash
     php vendor/bin/homestead make
     ```

  5. Configure Homestead:

     ```bash
     nano Homestead.yml
     ```

  6. Edit hosts file:

     ```bash
     sudo nano /etc/hosts
     ```

  7. Start the VM:

     ```bash
     vagrant up
     ```


Production
----------

More info coming soon...