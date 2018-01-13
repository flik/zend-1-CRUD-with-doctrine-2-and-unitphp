<?php
// Gets called when this file is included/required
TestConfiguration::setUp();

class TestConfiguration
{
    /**
    * Sets the environment up for testing
    */
    static function setUp()
    {
        // Set the environment constant to testing which will load the testing
        // configuration in app.ini by the bootstrap
        define('APPLICATION_ENVIRONMENT', 'testing');

        // Set the include path for locating the Zend library
        set_include_path(realpath(dirname(__FILE__)) . '/../library'
            . PATH_SEPARATOR . get_include_path());

        // Use Autoload so that we don't have to include/require every class
        require_once "Zend/Loader.php";
        Zend_Loader::registerAutoload();
    }

    static function setUpDatabase()
    {
        require '../application/bootstrap.php';

        $db = Zend_Registry::get('configuration')->database->params->dbname;

        // delete any pre-existing databases
        if(file_exists($db)) unlink($db);

        // run the database set up script to recreate the database
        require '../scripts/load.sqlite.php';
    }
}
?>
