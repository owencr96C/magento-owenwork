<?php

namespace Costa\Owenwork\Model;

use Magento\Framework\Model\AbstractModel;
use \Costa\Owenwork\Model\ResourceModel\Drink as ResourceDrink;

class Drink extends AbstractModel  //Could also extend AbstractExtensibleModel, which provides ability to store extensible attributes
{
    protected function _construct()
    {
        $this->_init(ResourceDrink::class);
    }
}