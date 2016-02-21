ChrisKankiewicz.com
===================

Home page of Chris Kankiewicz.


Development
-----------

### Prerequisites

Most prerequisites are provided with Homestead, the development VM provided by
Laravel. However you will need a few things to get this

  1. [git](https://git-scm.com)
  2. [Virtualbox]()
  3. [Vagrant](https://www.vagrantup.com)

Quick install (Ubuntu):

    sudo apt-get install git php5-cli nodejs npm && sudo ln -s $(which nodejs) /usr/bin/node
    curl https://getcomposer.org/installer | php && sudo mv composer.phar /usr/local/bin/composer

### Setting up your dev environment

  1. Clone the repo
  2. Add `192.168.10.50   chriskankiewicz.com.dev` to `/etc/hosts`
  2. Start the VM: `vagrant up`
  3. Connect to the vm: `vagrant ssh`\
  4. cd to the project folder: `cd chriskankiewicz-com`
  5. Install PHP dependencies: `composer install`
  6. Install NodeJS dependencies: `npm install`


Production
----------

More info coming soon...
