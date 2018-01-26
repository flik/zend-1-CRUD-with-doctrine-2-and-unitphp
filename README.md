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

# Note: First import db2.sql and then db1.sql (because of cross database relation)



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
# Codeception switchs for run

```bash
run [-o|--override OVERRIDE] [-e|--ext EXT] [--report] [--html [HTML]] [--xml [X                                                                                        ML]] [--tap [TAP]] [--json [JSON]] [--colors] [--no-colors] [--silent] [--steps]                                                                                         [-d|--debug] [--coverage [COVERAGE]] [--coverage-html [COVERAGE-HTML]] [--cover                                                                                        age-xml [COVERAGE-XML]] [--coverage-text [COVERAGE-TEXT]] [--coverage-crap4j [CO                                                                                        VERAGE-CRAP4J]] [--no-exit] [-g|--group GROUP] [-s|--skip SKIP] [-x|--skip-group                                                                                         SKIP-GROUP] [--env ENV] [-f|--fail-fast] [--no-rebuild] [--] [<suite>] [<test>]
```


