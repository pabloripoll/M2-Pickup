<?php
/**
 * Grid Collection.
 * @category  Pripoll
 * @package   Pripoll_PickupPoints
 * @author    Pablo Ripoll
 * @copyright Copyright (c) 2020~ Pablo Ripoll (http://pabloripoll.com)
 * @license   http://pabloripoll.com/magento2-modules-license.html
 */

namespace Pripoll\PickupPoints\Model\ResourceModel\View;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /** * @var string */
    protected $_idFieldName = 'entity_id';
    /* Define resource model */
    protected function _construct()
    {
        $this->_init(
            'Pripoll\PickupPoints\Model\View',
            'Pripoll\PickupPoints\Model\ResourceModel\View'
        );
    }
}
