<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Port Entity
 *
 * @property int $portID
 * @property string|null $name
 * @property string|null $city
 * @property string|null $country
 * @property string|null $contactperson
 * @property string|null $contactphone
 * @property string|null $contactemail
 * @property string|null $facilities
 * @property string|null $directions
 * @property string|null $parking
 * @property string|null $catering
 * @property string|null $skipper
 * @property string|null $flottielje
 * @property string|null $groceries
 * @property string|null $transfer
 */
class Port extends Entity
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
        'name' => true,
        'city' => true,
        'country' => true,
        'contactperson' => true,
        'contactphone' => true,
        'contactemail' => true,
        'facilities' => true,
        'directions' => true,
        'parking' => true,
        'catering' => true,
        'skipper' => true,
        'flottielje' => true,
        'groceries' => true,
        'transfer' => true
    ];
}
