<?php
require_once 'admin/pages/tcpdf/include/barcodes/pdf417.php';

/**
 * PDF417 test case.
 */
class PDF417Test extends PHPUnit_Framework_TestCase
{

    /**
     *
     * @var PDF417
     */
    private $pDF417;

    /**
     * Prepares the environment before running a test.
     */
    protected function setUp()
    {
        parent::setUp();
        
        // TODO Auto-generated PDF417Test::setUp()
        
        $this->pDF417 = new PDF417(/* parameters */);
    }

    /**
     * Cleans up the environment after running a test.
     */
    protected function tearDown()
    {
        // TODO Auto-generated PDF417Test::tearDown()
        $this->pDF417 = null;
        
        parent::tearDown();
    }

    /**
     * Constructs the test case.
     */
    public function __construct()
    {
        // TODO Auto-generated constructor
    }

    /**
     * Tests PDF417->__construct()
     */
    public function test__construct()
    {
        // TODO Auto-generated PDF417Test->test__construct()
        $this->markTestIncomplete("__construct test not implemented");
        
        $this->pDF417->__construct(/* parameters */);
    }

    /**
     * Tests PDF417->getBarcodeArray()
     */
    public function testGetBarcodeArray()
    {
        // TODO Auto-generated PDF417Test->testGetBarcodeArray()
        $this->markTestIncomplete("getBarcodeArray test not implemented");
        
        $this->pDF417->getBarcodeArray(/* parameters */);
    }
}

