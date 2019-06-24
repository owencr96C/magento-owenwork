<?php

namespace Costa\Owenwork\Block;

use Magento\Framework\View\Element\Template;
use Costa\Owenwork\Model\ResourceModel\Drink\CollectionFactory;

//In this block we want to render our Drinks table by using our collection to talk to the database
//So we should add a CollectionFactory using dependency injection to this class
class Hello extends Template
{
    public function __construct(Template\Context $context, CollectionFactory $collectionFactory, array $data = [])
    {
        $this->collectionFactory = $collectionFactory;
        parent::__construct($context, $data);
    }

    /**
     * @return \Costa\Owenwork\Model\Drink[]
     */
    public function getItems()
    {
        return $this->collectionFactory->create()->getItems();
    }
}