<?php

namespace Costa\Owenwork\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\DB\Ddl\Table;

class InstallSchema implements InstallSchemaInterface
{
    public function install(
        SchemaSetupInterface $setup,
        ModuleContextInterface $context
    ){
        $setup->startSetup();
        $table = $setup->getConnection()
            ->newTable($setup->getTable('owens_drinks_table')
            )->addColumn(
                'drink_id',
                Table::TYPE_INTEGER,
                null,
                ['identity' => true, 'nullable' => false, 'primary' => true, 'comment' => 'Drink Id']
            )->addColumn(
                'drink_name',
                Table::TYPE_TEXT,
                50,
                ['nullable' => false],
                'Drink Name'
            )->addColumn(
                'drink_price',
                Table::TYPE_DECIMAL,
                null,
                ['nullable' => false],
                'Drink Price'
            )->addColumn(
                'drink_description',
                Table::TYPE_TEXT,
                null,
                ['nullable' => true],
                'Drink Description'
            )->addIndex(
                $setup->getIdxName('owens_drinks_table', ['drink_name']),
                ['drink_name']
            )->setComment(
                'Owens Drinks'
            );
        $setup->getConnection()->createTable($table);
        $setup->endSetup();
    }
}