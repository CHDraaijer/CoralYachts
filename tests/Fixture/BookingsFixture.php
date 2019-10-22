<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * BookingsFixture
 */
class BookingsFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'bookingID' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'Customers_customerID' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'Yachts_yachtID' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'status' => ['type' => 'string', 'length' => null, 'null' => true, 'default' => 'option', 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'paymentStatus' => ['type' => 'string', 'length' => null, 'null' => true, 'default' => 'open', 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'paymentPreference' => ['type' => 'string', 'length' => null, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'date_start' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'date_end' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'catering' => ['type' => 'string', 'length' => null, 'null' => true, 'default' => 'N', 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'skipper' => ['type' => 'string', 'length' => null, 'null' => true, 'default' => 'N', 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'flottielje' => ['type' => 'string', 'length' => null, 'null' => true, 'default' => 'N', 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'groceries' => ['type' => 'string', 'length' => null, 'null' => true, 'default' => 'N', 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'transfer' => ['type' => 'string', 'length' => null, 'null' => true, 'default' => 'N', 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'insurence' => ['type' => 'string', 'length' => null, 'null' => true, 'default' => 'N', 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'childLifejackets' => ['type' => 'string', 'length' => null, 'null' => true, 'default' => 'N', 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'fishinggear' => ['type' => 'string', 'length' => null, 'null' => true, 'default' => 'N', 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'paddleboard' => ['type' => 'string', 'length' => null, 'null' => true, 'default' => 'N', 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'aggreedToTerms' => ['type' => 'string', 'length' => null, 'null' => true, 'default' => 'N', 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        '_indexes' => [
            'fk_Bookings_Customers1_idx' => ['type' => 'index', 'columns' => ['Customers_customerID'], 'length' => []],
            'fk_Bookings_Yachts1_idx' => ['type' => 'index', 'columns' => ['Yachts_yachtID'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['bookingID'], 'length' => []],
            'fk_Bookings_Customers1' => ['type' => 'foreign', 'columns' => ['Customers_customerID'], 'references' => ['customers', 'customerID'], 'update' => 'noAction', 'delete' => 'cascade', 'length' => []],
            'fk_Bookings_Yachts1' => ['type' => 'foreign', 'columns' => ['Yachts_yachtID'], 'references' => ['yachts', 'yachtID'], 'update' => 'noAction', 'delete' => 'cascade', 'length' => []],
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
                'bookingID' => 1,
                'Customers_customerID' => 1,
                'Yachts_yachtID' => 1,
                'status' => 'Lorem ipsum dolor sit amet',
                'paymentStatus' => 'Lorem ipsum dolor sit amet',
                'paymentPreference' => 'Lorem ipsum dolor sit amet',
                'date_start' => '2019-09-13 10:17:22',
                'date_end' => '2019-09-13 10:17:22',
                'catering' => 'Lorem ipsum dolor sit amet',
                'skipper' => 'Lorem ipsum dolor sit amet',
                'flottielje' => 'Lorem ipsum dolor sit amet',
                'groceries' => 'Lorem ipsum dolor sit amet',
                'transfer' => 'Lorem ipsum dolor sit amet',
                'insurence' => 'Lorem ipsum dolor sit amet',
                'childLifejackets' => 'Lorem ipsum dolor sit amet',
                'fishinggear' => 'Lorem ipsum dolor sit amet',
                'paddleboard' => 'Lorem ipsum dolor sit amet',
                'aggreedToTerms' => 'Lorem ipsum dolor sit amet'
            ],
        ];
        parent::init();
    }
}
