<?php
/**
 * Pripoll - Pickup Points: Front Interface
 * @category  Pripoll
 * @package   Pripoll_PickupPoints
 * @author    Pablo Ripoll
 * @copyright Copyright (c) 2020~ Pablo Ripoll (http://pabloripoll.com)
 * @license   http://pabloripoll.com/magento2-modules-license.html
 */

namespace Pripoll\PickupPoints\Api\Data;

interface ViewInterface
{
    /** Constants for keys of data array. Identical to the name of the getter in snake case */
    const ENTITY_ID = 'entity_id';
    const TITLE = 'title';
    const CONTENT = 'content';
    const IS_ACTIVE = 'is_active';
    const UPDATE_TIME = 'update_time';
    const CREATED_AT = 'created_at';

    /** Get EntityId * @return int */
    public function getEntityId();

    /** Set EntityId */
    public function setEntityId($entityId);

    /** Get Title * @return varchar */
    public function getTitle();
    /** Set Title */
    public function setTitle($title);

    /** Get Content * @return varchar */
    public function getContent();
    /** Set Content */
    public function setContent($content);

    /** Get IsActive * @return varchar */
    public function getIsActive();
    /** Set StartingPrice */
    public function setIsActive($isActive);

    /** Get UpdateTime * @return varchar */
    public function getUpdateTime();
    /** Set UpdateTime */
    public function setUpdateTime($updateTime);

    /** Get CreatedAt * @return varchar */
    public function getCreatedAt();
    /** Set CreatedAt */
    public function setCreatedAt($createdAt);

}
