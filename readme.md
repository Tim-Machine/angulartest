##woot Angular js yo

Required 
- Vagrant
- Virtual box

``` bash
vagrant up;
vagrant ssh; 
cd /var/www/;
composer install; # this may take a while

```

Edit your host files. Add these lines
``` bash
### AngularJS testing URL 
192.168.56.101 angulartest.local
192.168.56.101 www.angulartest.local

```

go to angulartest.local and enjoy