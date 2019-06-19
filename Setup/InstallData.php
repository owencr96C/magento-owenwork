<?php


namespace Costa\Owenwork\Setup;


use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

class InstallData implements InstallDataInterface
{

    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();

        $setup->getConnection()->insert(
            $setup->getTable('owens_drinks_table'),
            [
                'drink_name' => 'Whiskey',
                'drink_price' => 7.00,
                'drink_description' => 'Whiskey!!!!'
            ]
        );
        $setup->getConnection()->insert($setup->getTable('owens_drinks_table'),
            [
                'drink_name' => 'Beer',
                'drink_price' => 4.00,
                'drink_description' => 'Beer!!!!'
            ]
        );
        $setup->getConnection()->insert($setup->getTable('owens_drinks_table'),
            [
                'drink_name' => 'Juice',
                'drink_price' => 3.00
            ]
        );
        $setup->endSetup();
    }

}