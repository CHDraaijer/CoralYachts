<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Booking Entity
 *
 * @property int $bookingID
 * @property int $Customers_customerID
 * @property int $Yachts_yachtID
 * @property string|null $status
 * @property string|null $paymentStatus
 * @property string|null $paymentPreference
 * @property \Cake\I18n\FrozenTime|null $date_start
 * @property \Cake\I18n\FrozenTime|null $date_end
 * @property string|null $catering
 * @property string|null $skipper
 * @property string|null $flottielje
 * @property string|null $groceries
 * @property string|null $transfer
 * @property string|null $insurence
 * @property string|null $childLifejackets
 * @property string|null $fishinggear
 * @property string|null $paddleboard
 * @property string|null $aggreedToTerms
 */
class Booking extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'Customers_customerID' => true,
        'Yachts_yachtID' => true,
        'status' => true,
        'paymentStatus' => true,
        'paymentPreference' => true,
        'date_start' => true,
        'date_end' => true,
        'catering' => true,
        'skipper' => true,
        'flottielje' => true,
        'groceries' => true,
        'transfer' => true,
        'insurence' => true,
        'childLifejackets' => true,
        'fishinggear' => true,
        'paddleboard' => true,
        'aggreedToTerms' => true
    ];
}
