<?php
// Set up the testing environment
require 'TestConfiguration.php';

class controllers_IndexControllerTest extends Zend_Test_PHPUnit_ControllerTestCase
{
    // Bootstraps the application
    public $bootstrap = '../application/bootstrap.php';

    public function testHomePageIsASuccessfulRequest()
    {
        // Runs the test on /, the homepage
        $this->dispatch('/');

        // Tests there are no exceptions on the home page
        $this->assertFalse($this->response->isException());

        // Tests for redirection to the error handler
        $this->assertNotRedirect();
    }

    public function testHomePageDisplaysCorrectContent()
    {
        // Runs the test on /
        $this->dispatch('/');

        // Tests the page title is present
        $this->assertQueryContentContains(
            'div#header-logo',
            'ZF Quickstart Application'
        );

        // Tests the guestbook link is present
        $this->assertQueryContentContains('a', 'Guestbook');
    }
}
?>
