# zend-1-CRUD-with-doctrine-2-and-unitphp

## Installation

Apache rewrite module must be enable.
Just clone the project in in your www or htdocs directory.

Go into project folder
Then you can install all dependencies via Composer by running this command:
```bash
composer install

```
Composer detail:
http://rapidsol.blogspot.com/2015/03/download-composerphar.html


# Setup Database

Configure databse and import sql files which is in sql folder.



# Run Applicationn

http://localhost/zf-tutorial/public/



# Unit Testing 
Start your XWAMP or LAMP servers.

//all test are in ./tests

//Check test cases

```bash
./vendor/bin/phpunit --bootstrap ./vendor/autoload.php --testdox ./tests

```



Before run the app, run unit test command from root directory folder. 

```bash
./vendor/bin/phpunit --bootstrap ./vendor/autoload.php ./tests/EmailTest.php

```

# Codeception Testing
 
Run Normal Test

```bash

$ ./vendor/bin/codecept run --steps 

```


Run Detailed Test

```bash

$ ./vendor/bin/codecept run --steps -vvv

```
