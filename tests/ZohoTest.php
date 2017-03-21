<?php

use korsr\zohobooks\Zoho;

class ZohoTest extends PHPUnit_Framework_TestCase {

    public function testZoho()
    {
        $test = new Zoho;
        $this->assertTrue($test->yoTest());
    }

}
