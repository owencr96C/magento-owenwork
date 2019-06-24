<?php


namespace Costa\Owenwork\Model\ResourceModel;


use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Drink extends AbstractDb  //Resource Models extend AbstractDb
{
    protected function _construct() //Only thing our resource model needs is a protected construct function, AbstractDb does the rest
    {
        $this->_init('owens_drinks_table', 'drink_id');
    }
}