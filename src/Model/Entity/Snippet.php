<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Snippet Entity.
 */
class Snippet extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'subcategory_id' => true,
        'name' => true,
        'snippet' => true,
        'subcategory' => true,
    ];
}
