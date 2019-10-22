<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\YachttypesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\YachttypesTable Test Case
 */
class YachttypesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\YachttypesTable
     */
    public $Yachttypes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Yachttypes'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Yachttypes') ? [] : ['className' => YachttypesTable::class];
        $this->Yachttypes = TableRegistry::getTableLocator()->get('Yachttypes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Yachttypes);

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
