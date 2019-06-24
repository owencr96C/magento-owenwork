<?php

namespace Costa\Owenwork\Model\ResourceModel\Drink;

use Costa\Owenwork\Model\Drink;
use Costa\Owenwork\Model\ResourceModel\Drink as DrinkResource;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    protected $_idFieldName = 'drink_id';

    protected function _construct()
    {
        $this->_init(Drink::class, DrinkResource::class);
    }
}