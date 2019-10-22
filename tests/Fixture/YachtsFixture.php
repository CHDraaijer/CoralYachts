<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * YachtsFixture
 */
class YachtsFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'yachtID' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'Yachttypes_yachtTypeID' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'Ports_portID' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'status' => ['type' => 'string', 'length' => null, 'null' => true, 'default' => 'available', 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'name' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'code' => ['type' => 'string', 'length' => 20, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        '_indexes' => [
            'fk_Yachts_Yachttypes_idx' => ['type' => 'index', 'columns' => ['Yachttypes_yachtTypeID'], 'length' => []],
            'fk_Yachts_Ports1_idx' => ['type' => 'index', 'columns' => ['Ports_portID'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['yachtID'], 'length' => []],
            'fk_Yachts_Ports1' => ['type' => 'foreign', 'columns' => ['Ports_portID'], 'references' => ['ports', 'portID'], 'update' => 'noAction', 'delete' => 'cascade', 'length' => []],
            'fk_Yachts_Yachttypes' => ['type' => 'foreign', 'columns' => ['Yachttypes_yachtTypeID'], 'references' => ['yachttypes', 'yachtTypeID'], 'update' => 'noAction', 'delete' => 'cascade', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd
    /**
     * Init method
     *
     * @return void
     */
    public function init()
    {
        $this->records = [
            [
                'yachtID' => 1,
                'Yachttypes_yachtTypeID' => 1,
                'Ports_portID' => 1,
                'status' => 'Lorem ipsum dolor sit amet',
                'name' => 'Lorem ipsum dolor sit amet',
                'code' => 'Lorem ipsum dolor '
            ],
        ];
        parent::init();
    }
}
