<?php

/**
 * @package Door2_Catalog
 * @author  Door2_Catalog
 */
$installer = Mage::getResourceModel('catalog/setup', 'catalog_setup');
$installer->startSetup();

$attributeCode = 'enable_addtocart';
$setup = new Mage_Eav_Model_Entity_Setup('core_setup');
$setup->addAttribute('catalog_product', $attributeCode, array(
    'type' => 'int',
    'backend_type' => 'int',
    'backend' => '',
    'frontend' => '',
    'label' => 'Enable Add to Cart',
    'input' => 'boolean',
    'frontend_class' => '',
    'source' => 'eav/entity_attribute_source_boolean',
    'global' => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
    'visible' => false,
    'required' => false,
    'user_defined' => true,
    'default' => '0',
    'searchable' => false,
    'filterable' => false,
    'comparable' => false,
    'visible_on_front' => false,
    'unique' => false,
    'apply_to' => '',
    'is_configurable' => false,
    'used_in_product_listing' => true
));

$entity = Mage_Catalog_Model_Product::ENTITY;

// Add the attribute to the attribute sets:
$entityType = Mage::getModel('catalog/product')->getResource()->getEntityType();
$collection = Mage::getResourceModel('eav/entity_attribute_set_collection')->setEntityTypeFilter($entityType->getId());

foreach ($collection as $attributeSet) {
    $attributeGroupId = $installer->getDefaultAttributeGroupId('catalog_product', $attributeSet->getId());
    $installer->addAttributeToSet($entity, $attributeSet->getId(), $attributeGroupId, $attributeCode);
}

$installer->endSetup();
