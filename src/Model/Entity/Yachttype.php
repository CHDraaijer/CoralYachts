<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Yachttype Entity
 *
 * @property int $yachtTypeID
 * @property string|null $name
 * @property string|null $code
 * @property string|null $type
 * @property float|null $length
 * @property float|null $depth
 * @property string|null $engine
 * @property float|null $sail
 * @property int|null $1pcabins
 * @property int|null $2pcabins
 * @property int|null $beds
 * @property int|null $toilets
 * @property int|null $showers
 * @property string|null $gear
 * @property string|null $text
 */
class Yachttype extends Entity
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
        'code' => true,
        'type' => true,
        'length' => true,
        'depth' => true,
        'engine' => true,
        'sail' => true,
        '1pcabins' => true,
        '2pcabins' => true,
        'beds' => true,
        'toilets' => true,
        'showers' => true,
        'gear' => true,
        'text' => true
    ];
}
