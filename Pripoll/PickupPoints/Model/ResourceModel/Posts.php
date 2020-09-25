<?php
/**
 * Grid ResourceModel.
 * @category  Pripoll
 * @package   Pripoll_PickupPoints
 * @author    Pablo Ripoll
 * @copyright Copyright (c) 2020~ Pablo Ripoll (http://pabloripoll.com)
 * @license   http://pabloripoll.com/magento2-modules-license.html
 */

namespace Pripoll\PickupPoints\Model\ResourceModel;

/* Grid Grid mysql resource */
class Posts extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    /* @var string */
    protected $_idFieldName = 'entity_id';
    /* @var \Magento\Framework\Stdlib\DateTime\DateTime */
    protected $_date;

    /* Construct 
     * @param \Magento\Framework\Model\ResourceModel\Db\Context $context
     * @param \Magento\Framework\Stdlib\DateTime\DateTime       $date
     * @param string|null                                       $resourcePrefix
     */
    public function __construct(
        \Magento\Framework\Model\ResourceModel\Db\Context $context,
        \Magento\Framework\Stdlib\DateTime\DateTime $date,
        $resourcePrefix = null
    ) {
        parent::__construct($context, $resourcePrefix);
        $this->_date = $date;
    }

    /* Initialize resource model */
    protected function _construct()
    {
        $this->_init('pripoll_pickup_posts', 'entity_id');
    }
}