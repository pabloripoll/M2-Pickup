<?php
/**
 * AddRow to List Controller.
 * @category  Pripoll
 * @package   Pripoll_PickupPoints
 * @author    Pablo Ripoll
 * @copyright Copyright (c) 2020~ Pablo Ripoll (http://pabloripoll.com)
 * @license   http://pabloripoll.com/magento2-modules-license.html
 */

namespace Pripoll\PickupPoints\Controller\Adminhtml\Posts;

use Magento\Framework\Controller\ResultFactory;

class AddRow extends \Magento\Backend\App\Action
{
    /**
     * @var \Magento\Framework\Registry
     */
    private $coreRegistry;

    /**
     * @var \Pripoll\PickupPoints\Model\PostsFactory
     */
    private $gridFactory;

    /**
     * @param \Magento\Backend\App\Action\Context $context
     * @param \Magento\Framework\Registry $coreRegistry,
     * @param \Pripoll\PickupPoints\Model\GridFactory $gridFactory
     */
    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Magento\Framework\Registry $coreRegistry,
        \Pripoll\PickupPoints\Model\PostsFactory $gridFactory
    ) {
        parent::__construct($context);
        $this->coreRegistry = $coreRegistry;
        $this->gridFactory = $gridFactory;
    }

    /**
     * Mapped Grid List page.
     * @return \Magento\Backend\Model\View\Result\Page
     */
    public function execute()
    {
        $rowId = (int) $this->getRequest()->getParam('id');
        $rowData = $this->gridFactory->create();
        /** @var \Magento\Backend\Model\View\Result\Page $resultPage */
        if ($rowId) {
            $rowData = $rowData->load($rowId);
            $rowTitle = $rowData->getTitle();
            if (!$rowData->getEntityId()) {
                $this->messageManager->addError(__('Pickup Point no longer exist!'));
                $this->_redirect('posts/posts/rowdata');
                return;
            }
        }

        $this->coreRegistry->register('row_data', $rowData);
        $resultPage = $this->resultFactory->create(ResultFactory::TYPE_PAGE);
        $title = $rowId ? __('Edit Pickup Point').$rowTitle : __('Add Point');
        $resultPage->getConfig()->getTitle()->prepend($title);
        return $resultPage;
    }

    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('Pripoll_PickupPoints::edit_post');
    }
}
