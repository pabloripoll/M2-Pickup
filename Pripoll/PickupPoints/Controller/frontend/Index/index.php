<?php
/**
 * Pripoll - Pickup Points: Front Page
 * @category  Pripoll
 * @package   Pripoll_PickupPoints
 * @author    Pablo Ripoll
 * @copyright Copyright (c) 2020~ Pablo Ripoll (http://pabloripoll.com)
 * @license   http://pabloripoll.com/magento2-modules-license.html
 */

namespace Pripoll\PickupPoints\Controller\frontend\Index;

class Index extends \Magento\Framework\App\Action\Action
{
  public function execute()
  {
	 $this->_view->loadLayout();
	 $this->_view->renderLayout();
  }
}
?>