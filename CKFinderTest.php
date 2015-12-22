<?php
require_once 'includes/ckfinder/core/ckfinder_php4.php';

/**
 * CKFinder test case.
 */
class CKFinderTest extends PHPUnit_Framework_TestCase
{

    /**
     *
     * @var CKFinder
     */
    private $cKFinder;

    /**
     * Prepares the environment before running a test.
     */
    protected function setUp()
    {
        parent::setUp();
        
        // TODO Auto-generated CKFinderTest::setUp()
        
        $this->cKFinder = new CKFinder(/* parameters */);
    }

    /**
     * Cleans up the environment after running a test.
     */
    protected function tearDown()
    {
        // TODO Auto-generated CKFinderTest::tearDown()
        $this->cKFinder = null;
        
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
     * Tests CKFinder->CKFinder()
     */
    public function testCKFinder()
    {
        // TODO Auto-generated CKFinderTest->testCKFinder()
        $this->markTestIncomplete("CKFinder test not implemented");
        
        $this->cKFinder->CKFinder(/* parameters */);
    }

    /**
     * Tests CKFinder->Create()
     */
    public function testCreate()
    {
        // TODO Auto-generated CKFinderTest->testCreate()
        $this->markTestIncomplete("Create test not implemented");
        
        $this->cKFinder->Create(/* parameters */);
    }

    /**
     * Tests CKFinder->CreateHtml()
     */
    public function testCreateHtml()
    {
        // TODO Auto-generated CKFinderTest->testCreateHtml()
        $this->markTestIncomplete("CreateHtml test not implemented");
        
        $this->cKFinder->CreateHtml(/* parameters */);
    }

    /**
     * Tests CKFinder->_BuildUrl()
     */
    public function test_BuildUrl()
    {
        // TODO Auto-generated CKFinderTest->test_BuildUrl()
        $this->markTestIncomplete("_BuildUrl test not implemented");
        
        $this->cKFinder->_BuildUrl(/* parameters */);
    }

    /**
     * Tests CKFinder->CreateStatic()
     */
    public function testCreateStatic()
    {
        // TODO Auto-generated CKFinderTest->testCreateStatic()
        $this->markTestIncomplete("CreateStatic test not implemented");
        
        $this->cKFinder->CreateStatic(/* parameters */);
    }

    /**
     * Tests CKFinder->SetupFCKeditor()
     */
    public function testSetupFCKeditor()
    {
        // TODO Auto-generated CKFinderTest->testSetupFCKeditor()
        $this->markTestIncomplete("SetupFCKeditor test not implemented");
        
        $this->cKFinder->SetupFCKeditor(/* parameters */);
    }

    /**
     * Tests CKFinder->SetupFCKeditorObject()
     */
    public function testSetupFCKeditorObject()
    {
        // TODO Auto-generated CKFinderTest->testSetupFCKeditorObject()
        $this->markTestIncomplete("SetupFCKeditorObject test not implemented");
        
        $this->cKFinder->SetupFCKeditorObject(/* parameters */);
    }

    /**
     * Tests CKFinder->SetupCKEditor()
     */
    public function testSetupCKEditor()
    {
        // TODO Auto-generated CKFinderTest->testSetupCKEditor()
        $this->markTestIncomplete("SetupCKEditor test not implemented");
        
        $this->cKFinder->SetupCKEditor(/* parameters */);
    }

    /**
     * Tests CKFinder->SetupCKEditorObject()
     */
    public function testSetupCKEditorObject()
    {
        // TODO Auto-generated CKFinderTest->testSetupCKEditorObject()
        $this->markTestIncomplete("SetupCKEditorObject test not implemented");
        
        $this->cKFinder->SetupCKEditorObject(/* parameters */);
    }
}

