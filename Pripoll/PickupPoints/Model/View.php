<?php
/**
 * Model.
 * @category  Pripoll
 * @package   Pripoll_PickupPoints
 * @author    Pablo Ripoll
 * @copyright Copyright (c) 2020~ Pablo Ripoll (http://pabloripoll.com)
 * @license   http://pabloripoll.com/magento2-modules-license.html
 */

namespace Pripoll\PickupPoints\Model;

use Pripoll\PickupPoints\Api\Data\ViewInterface; /* php Class */

class View extends \Magento\Framework\Model\AbstractModel implements ViewInterface
{
    /** CMS page cache tag */
    const CACHE_TAG = 'pripoll_sales_pickup_info';

    /** @var string */
    protected $_cacheTag = 'pripoll_sales_pickup_info';

    /** Prefix of model events names * @var string */
    protected $_eventPrefix = 'pripoll_sales_pickup_info';

    /** Initialize resource model */
    protected function _construct()
    {
        $this->_init('Pripoll\PickupPoints\Model\ResourceModel\View');
    }

    /** Get EntityId * @return int */
    public function getEntityId()
    {
        return $this->getData(self::ENTITY_ID);
    }
    /** Set EntityId */
    public function setEntityId($entityId)
    {
        return $this->setData(self::ENTITY_ID, $entityId);
    }

    /** Get Title * @return varchar */
    public function getTitle()
    {
        return $this->getData(self::TITLE);
    }
    /** Set Title */
    public function setTitle($title)
    {
        return $this->setData(self::TITLE, $title);
    }

    /** Get getContent * @return varchar */
    public function getContent()
    {
        return $this->getData(self::CONTENT);
    }
    /** Set Content */
    public function setContent($content)
    {
        return $this->setData(self::CONTENT, $content);
    }

    /** Get Is Active * @return varchar */
    public function getIsActive()
    {
        return $this->getData(self::IS_ACTIVE);
    }
    /** Set Is Active */
    public function setIsActive($isActive)
    {
        return $this->setData(self::IS_ACTIVE, $isActive);
    }

    /** Get UpdateTime * @return varchar */
    public function getUpdateTime()
    {
        return $this->getData(self::UPDATE_TIME);
    }
    /** Set UpdateTime */
    public function setUpdateTime($updateTime)
    {
        return $this->setData(self::UPDATE_TIME, $updateTime);
    }

    /** Get CreatedAt * @return varchar */
    public function getCreatedAt()
    {
        return $this->getData(self::CREATED_AT);
    }
    /** Set CreatedAt */
    public function setCreatedAt($createdAt)
    {
        return $this->setData(self::CREATED_AT, $createdAt);
    }

}