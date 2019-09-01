<?php
/**
 * @package Door2_Catalog
 * @author  Door2_Catalog
 */

$installer = Mage::getResourceModel('catalog/setup', 'catalog_setup');
$installer->startSetup();

$installer->getConnection()->addColumn(
    $installer->getTable('catalog_product_entity_media_gallery_value'),
    'gallery',
    array(
        'type'     => Varien_Db_Ddl_Table::TYPE_SMALLINT,
        'nullable' => false,
        'default'  => 0,
        'comment'  => 'Is Gallery Image',
        'unsigned' => true
    )
);

$installer->endSetup();