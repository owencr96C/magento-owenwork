<?php

namespace Costa\Owenwork\Controller\Adminhtml\Index;

use Magento\Framework\Controller\ResultFactory;

class Index extends \Magento\Backend\App\Action
{
    public function execute()
    {
        /** @var @var \Magento\Framework\Controller\Result\Raw $result */
        $result = $this->resultFactory->create(ResultFactory::TYPE_RAW); // A RAW result will ignore all layouts and other settings in magento, but we want out controller to render the layout
        $result->setContents('Hello Admins!');
        return $result;
        //return $this->resultFactory->create(ResultFactory::TYPE_PAGE); //Just return a page, which can be configured in the layout
    }
}