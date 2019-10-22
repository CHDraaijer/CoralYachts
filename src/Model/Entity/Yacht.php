<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Yacht Entity
 *
 * @property int $yachtID
 * @property int $Yachttypes_yachtTypeID
 * @property int $Ports_portID
 * @property string|null $status
 * @property string|null $name
 * @property string|null $code
 */
class Yacht extends Entity
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
        'Yachttypes_yachtTypeID' => true,
        'Ports_portID' => true,
        'status' => true,
        'name' => true,
        'code' => true
    ];
}
