<?php

namespace Costa\Owenwork\Controller\Index;

use Magento\Framework\Controller\ResultFactory;

class Index extends \Magento\Framework\App\Action\Action
{
    public function execute()
    {
        return $this->resultFactory->create(ResultFactory::TYPE_PAGE); //Just return a page, which can be configured in the layout
    }
}