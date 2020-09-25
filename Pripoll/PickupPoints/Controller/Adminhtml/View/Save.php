<?php
/**
 * Admin Category Map Record Save Controller.
 * @category  Pripoll
 * @package   Pripoll_PickupPoints
 * @author    Pablo Ripoll
 * @copyright Copyright (c) 2020~ Pablo Ripoll (http://pabloripoll.com)
 * @license   http://pabloripoll.com/magento2-modules-license.html
 */

namespace Pripoll\PickupPoints\Controller\Adminhtml\View;

class Save extends \Magento\Backend\App\Action
{
    /** @var \Pripoll\PickupPoints\Model\ViewFactory */
    var $gridFactory;

    /**
     * @param \Magento\Backend\App\Action\Context $context
     * @param \Pripoll\PickupPoints\Model\ViewFactory $gridFactory
     */
    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Pripoll\PickupPoints\Model\ViewFactory $gridFactory
        /* Factory is for inner file (...) class */
    ) {
        parent::__construct($context);
        $this->gridFactory = $gridFactory;
    }

    /**
     * @SuppressWarnings(PHPMD.CyclomaticComplexity)
     * @SuppressWarnings(PHPMD.NPathComplexity)
     */
    public function execute()
    {
        $data = $this->getRequest()->getPostValue();
        if (!$data) {
            $this->_redirect('pickup/info/addrow');
            return;
        }
        try {
            $rowData = $this->gridFactory->create();
            $rowData->setData($data);
            if (isset($data['id'])) {
                $rowData->setEntityId($data['id']);
            }
            $rowData->save();
            $this->messageManager->addSuccess(__('Post has been successfully saved ;)'));
        } catch (\Exception $e) {
            $this->messageManager->addError(__($e->getMessage()));
        }
        $this->_redirect('pickup/info/index');
    }

    /**
     * @return bool
     */
    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('Pripoll_PickupPoints::save_pickup_info');
    }
}
