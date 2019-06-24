<?php

namespace Costa\Owenwork\Controller\Index;

use Magento\Framework\Controller\ResultFactory;

class Index extends \Magento\Framework\App\Action\Action
{
    public function execute()
    {
        /** @var @var \Magento\Framework\Controller\Result\Raw $result */
        $result = $this->resultFactory->create(ResultFactory::TYPE_RAW); // A RAW result will ignore all layouts and other settings in magento, but we want out controller to render the layout
        $result->setContents('Hello Team!');
        return $result;
        //return $this->resultFactory->create(ResultFactory::TYPE_PAGE); //Just return a page, which can be configured in the layout
    }
}