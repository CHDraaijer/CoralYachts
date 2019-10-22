<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PortsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PortsTable Test Case
 */
class PortsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PortsTable
     */
    public $Ports;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Ports'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Ports') ? [] : ['className' => PortsTable::class];
        $this->Ports = TableRegistry::getTableLocator()->get('Ports', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Ports);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
