<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\YachtsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\YachtsTable Test Case
 */
class YachtsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\YachtsTable
     */
    public $Yachts;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Yachts'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Yachts') ? [] : ['className' => YachtsTable::class];
        $this->Yachts = TableRegistry::getTableLocator()->get('Yachts', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Yachts);

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
