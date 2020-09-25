<?php
/**
 * Logger Handler.
 * @category  Pripoll
 * @package   Pripoll_PickupPoints
 * @author    Pablo Ripoll
 * @copyright Copyright (c) 2020~ Pablo Ripoll (http://pabloripoll.com)
 * @license   http://pabloripoll.com/magento2-modules-license.html
 */

namespace Pripoll\PickupPoints\Logger;

class Handler extends \Magento\Framework\Logger\Handler\Base
{
    /* Logging level * @var int */
    public $loggerType = Logger::INFO;
    /* File name * @var string */
    public $fileName = '/var/log/grid.log';
}
