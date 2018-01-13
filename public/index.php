<?php

// Define path to application directory
defined('APPLICATION_PATH')
    || define('APPLICATION_PATH', realpath(dirname(__FILE__) . '/../application'));

// Define application environment
defined('APPLICATION_ENV')
    || define('APPLICATION_ENV', (getenv('APPLICATION_ENV') ? getenv('APPLICATION_ENV') : 'production'));

// Ensure library/ is on include_path
set_include_path(implode(PATH_SEPARATOR, array(
    realpath(APPLICATION_PATH . '/../library'),
    get_include_path(),
)));
 
require_once APPLICATION_PATH."/../vendor/autoload.php";


/** Zend_Application */
require_once 'Zend/Application.php';

function getEM(){
		
	// Creating application
	$application = new Zend_Application(
		APPLICATION_ENV,
		APPLICATION_PATH . '/configs/application.ini'
	);

	// Bootstrapping resources
	$bootstrap = $application->bootstrap()->getBootstrap();

	// Retrieve Doctrine Entity Manager
	$em = $bootstrap->getResource('doctrine')->getEntityManager('default');
	
	return $em;

}

/** adding AutoLoad.php */
include_once(APPLICATION_PATH."/../AutoLoader.php");

// Register the directory to your include files
AutoLoader::registerDirectory(realpath(APPLICATION_PATH . '/Entities/db1'));
AutoLoader::registerDirectory(realpath(APPLICATION_PATH . '/Entities/db2'));


//$em = $this->getInvokeArg('bootstrap')->getResource('doctrine')->getEntityManager('default');

function getObjectToArray($data){
	return json_decode(json_encode((array)$data), true);;
}

/**
 * Getting results in the form of Object or Array.
 * @params Entity, Id, ResultType
 * @return resultset;
 */
function getResultById($entity='', $id='', $resultArray=false){
	
	if(empty($id) || empty($entity)){
		return null;
	}
	
	$em = getEM();
	$data = $em->find($entity, $id);
	
	if ($resultArray) {
		return json_decode(json_encode((array) $data));
	}else{
		return $data;
	}
	
}

// Create application, bootstrap, and run
$application = new Zend_Application(
    APPLICATION_ENV,
    APPLICATION_PATH . '/configs/application.ini'
);
/**/
$application->bootstrap()
            ->run();
