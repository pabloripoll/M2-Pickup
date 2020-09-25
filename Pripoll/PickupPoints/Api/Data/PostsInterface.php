<?php
/**
 * Pripoll - PickupPoints: Points Grid Interface
 * @category  Pripoll
 * @package   Pripoll_PickupPoints
 * @author    Pablo Ripoll
 * @copyright Copyright (c) 2020~ Pablo Ripoll (http://pabloripoll.com)
 * @license   http://pabloripoll.com/magento2-modules-license.html
 */

namespace Pripoll\PickupPoints\Api\Data;

interface PostsInterface
{
    /** Constants for keys of data array. Identical to the name of the getter in snake case */
    const ENTITY_ID = 'entity_id';
    const NAME = 'name';
    const ADDRESS = 'address';
    const LATITUDE = 'latitude';
    const LONGITUDE = 'longitude';
    const LOCATION = 'location';
    const SHIPMENT_METHOD = 'shipment_method';
    const IS_ACTIVE = 'is_active';

    /** Get EntityId * @return int */
    public function getEntityId();
    /** Set EntityId */
    public function setEntityId($entityId);

    /** Get Name * @return varchar */
    public function getName();
    /** Set Name */
    public function setName($name);

    /** Get Address * @return varchar */
    public function getAddress();
    /** Set Address */
    public function setAddress($address);

    /** Get Latitude * @return varchar */
    public function getLatitude();
    /** Set Latitude */
    public function setLatitude($latitude);

    /** Get Longitude * @return varchar */
    public function getLongitude();
    /** Set Longitude */
    public function setLongitude($longitude);

    /** Get Location * @return varchar */
    public function getLocation();
    /** Set Latitude */
    public function setLocation($location);    

    /** Get Shipment Method * @return varchar */
    public function getShipmentMethod();
    /** Set Shipment Method */
    public function setShipmentMethod($shipmentMethod);

    /** Get Is Active * @return varchar */
    public function getIsActive();
    /** Set Is Active */
    public function setIsActive($isActive);
}
