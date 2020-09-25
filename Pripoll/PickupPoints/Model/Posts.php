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

use Pripoll\PickupPoints\Api\Data\PostsInterface; /* php Class */

class Posts extends \Magento\Framework\Model\AbstractModel implements PostsInterface
{
    /** CMS page cache tag */
    const CACHE_TAG = 'pripoll_sales_pickup_posts';

    /** @var string */
    protected $_cacheTag = 'pripoll_sales_pickup_posts';

    /** Prefix of model events names * @var string */
    protected $_eventPrefix = 'pripoll_sales_pickup_posts';

    /** Initialize resource model */
    protected function _construct()
    {
        $this->_init('Pripoll\PickupPoints\Model\ResourceModel\Posts');
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

    /** Get Name * @return varchar */
    public function getName()
    {
        return $this->getData(self::NAME);
    }
    /** Set Name */
    public function setName($name)
    {
        return $this->setData(self::NAME, $name);
    }

    /** Get Address * @return varchar */
    public function getAddress()
    {
        return $this->getData(self::ADDRESS);
    }
    /** Set Address */
    public function setAddress($address)
    {
        return $this->setData(self::ADDRESS, $address);
    }

    /** Get Latitude * @return varchar */
    public function getLatitude()
    {
        return $this->getData(self::LATITUDE);
    }
    /** Set Latitude */
    public function setLatitude($latitude)
    {
        return $this->setData(self::LATITUDE, $latitude);
    }

    /** Get Longitude * @return varchar */
    public function getLongitude()
    {
        return $this->getData(self::LONGITUDE);
    }
    /** Set Longitude */
    public function setLongitude($longitude)
    {
        return $this->setData(self::LONGITUDE, $longitude);
    }

    /** Get Location * @return varchar */
    public function getLocation()
    {
        return $this->getData(self::LOCATION);
    }
    /** Set Location */
    public function setLocation($location)
    {
        return $this->setData(self::LOCATION, $location);
    }

    /** Get Associated Shipment Method * @return varchar */
    public function getShipmentMethod()
    {
        return $this->getData(self::SHIPMENT_METHOD);
    }
    /** Set Associated Shipment Method */
    public function setShipmentMethod($shipmentMethod)
    {
        return $this->setData(self::SHIPMENT_METHOD, $shipmentMethod);
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
}