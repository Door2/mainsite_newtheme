<?php

/**
 * @package Door2_Catalog
 * @author  Door2_Catalog
 */
$installer = Mage::getResourceModel('catalog/setup', 'catalog_setup');
$installer->startSetup();

$setup = new Mage_Eav_Model_Entity_Setup('core_setup');

$dispPriceAttributeCode = 'display_price';
$setup->addAttribute('catalog_product', $dispPriceAttributeCode, array(
    'type' => 'int',
    'backend_type' => 'int',
    'backend' => '',
    'frontend' => '',
    'label' => 'Display Price',
    'input' => 'boolean',
    'frontend_class' => '',
    'source' => 'eav/entity_attribute_source_boolean',
    'global' => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
    'visible' => false,
    'required' => false,
    'user_defined' => true,
    'default' => '0',
    'is_searchable' => false,
    'is_filterable' => false,
    'is_comparable' => false,
    'visible_on_front' => false,
    'unique' => false,
    'apply_to' => '',
    'is_configurable' => false,
    'used_in_product_listing' => true
));



$mobileAttributeCode = 'mobile_number';
$setup->addAttribute('catalog_product', $mobileAttributeCode, array(
    'type' => 'int',
    'backend_type' => 'int',
    'backend' => '',
    'frontend' => '',
    'label' => 'Mobile Number',
    'input' => 'text',
    'frontend_class' => '',
    'global' => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
    'visible' => false,
    'required' => false,
    'user_defined' => true,
    'default' => '',
    'is_searchable' => false,
    'is_filterable' => false,
    'is_comparable' => false,
    'visible_on_front' => false,
    'unique' => false,
    'apply_to' => '',
    'is_configurable' => false,
    'used_in_product_listing' => false
));


$referencedByAttributeCode = 'referenced_by';
$setup->addAttribute('catalog_product', $referencedByAttributeCode, array(
    'type' => 'varchar',
    'backend_type' => 'varchar',
    'backend' => '',
    'frontend' => '',
    'label' => 'Referenced By',
    'input' => 'text',
    'frontend_class' => '',
    'global' => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
    'visible' => false,
    'required' => false,
    'user_defined' => true,
    'default' => '',
    'is_searchable' => false,
    'is_filterable' => false,
    'is_comparable' => false,
    'visible_on_front' => false,
    'unique' => false,
    'apply_to' => '',
    'is_configurable' => false,
    'used_in_product_listing' => false
));

$locationAttributeCode = 'service_locations';
$setup->addAttribute('catalog_product', $locationAttributeCode, array(
    'label' => 'Service Location',
    'input' => 'multiselect',
    'frontend_class' => '',
    'global' => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
    'visible' => false,
    'required' => false,
    'user_defined' => true,
    'default' => '',
    'is_searchable' => true,
    'is_filterable' => true,
    'is_comparable' => true,
    'visible_on_front' => false,
    'unique' => false,
    'apply_to' => '',
    'is_configurable' => false,
    'used_in_product_listing' => true,
    'option' => [
        'values' => [
            "north_bangalore" => "North Bangalore",
            "south_bangalore" => "South Bangalore",
            "east_bangalore" => "East Bangalore",
            "west_bangalore" => "West Bangalore"
        ]
    ]
));


$languageAttributeCode = 'languages_known';
$setup->addAttribute('catalog_product', $languageAttributeCode, array(
    'type' => 'varchar',
    'backend_type' => 'text',
    'backend_model' => 'eav/entity_attribute_backend_array',
    'backend' => '',
    'frontend' => '',
    'label' => 'Languages Known',
    'input' => 'multiselect',
    'frontend_class' => '',
    'global' => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
    'visible' => false,
    'required' => false,
    'user_defined' => true,
    'default' => '',
    'is_searchable' => true,
    'is_filterable' => true,
    'is_comparable' => true,
    'visible_on_front' => false,
    'unique' => false,
    'apply_to' => '',
    'is_configurable' => false,
    'used_in_product_listing' => true,
    'option' => [
        'values' => [
            "hindi" => "Hindi",
            "english" => "English",
            "tamil" => "Tamil",
            "kannada" => "Kannada",
            "telugu" => "Telugu",
            "malayalam" => "Malayalam",
            "odiya" => "Odiya",
            "assamese" => "Assamese",
            "bengali" => "Bengali"
        ]
    ]
));

$experienceAttributeCode = 'work_experience';
$setup->addAttribute('catalog_product', $experienceAttributeCode, array(
    'type' => 'varchar',
    'backend_type' => 'varchar',
    'backend' => '',
    'frontend' => '',
    'label' => 'Work Experience',
    'input' => 'select',
    'frontend_class' => '',
    'global' => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
    'visible' => false,
    'required' => false,
    'user_defined' => true,
    'default' => '',
    'is_searchable' => true,
    'is_filterable' => true,
    'is_comparable' => true,
    'visible_on_front' => false,
    'unique' => false,
    'apply_to' => '',
    'is_configurable' => false,
    'used_in_product_listing' => true,
    'option' => [
        'values' => [
            "-3" => "less than 3 year",
            "3-5" => "3 to 5 years",
            "5-10" => "5 to 8 years",
            "10+" => "10+ years"
        ]
    ]
));

$discountAttributeCode = 'discount_percent';
$setup->addAttribute('catalog_product', $discountAttributeCode, array(
    'type' => 'varchar',
    'backend_type' => 'varchar',
    'backend' => '',
    'frontend' => '',
    'label' => 'Discount Percent',
    'input' => 'select',
    'frontend_class' => '',
    'global' => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
    'visible' => true,
    'required' => false,
    'user_defined' => true,
    'default' => '0',
    'is_searchable' => true,
    'is_filterable' => true,
    'is_comparable' => true,
    'visible_on_front' => true,
    'unique' => false,
    'apply_to' => '',
    'used_in_product_listing' => true,
    'option' => [
        'values' => [
            "10" => "10%",
            "20" => "20%",
            "30" => "30%",
            "40" => "40%",
            "50" => "50%"
        ]
    ]
));



$entity = Mage_Catalog_Model_Product::ENTITY;

// Add the attribute to the attribute sets:
$entityType = Mage::getModel('catalog/product')->getResource()->getEntityType();
$collection = Mage::getResourceModel('eav/entity_attribute_set_collection')->setEntityTypeFilter($entityType->getId());

foreach ($collection as $attributeSet) {
    $attributeGroupId = $installer->getDefaultAttributeGroupId('catalog_product', $attributeSet->getId());
    $installer->addAttributeToSet($entity, $attributeSet->getId(), $attributeGroupId, $dispPriceAttributeCode);
    $installer->addAttributeToSet($entity, $attributeSet->getId(), $attributeGroupId, $mobileAttributeCode);
    $installer->addAttributeToSet($entity, $attributeSet->getId(), $attributeGroupId, $referencedByAttributeCode);
    $installer->addAttributeToSet($entity, $attributeSet->getId(), $attributeGroupId, $locationAttributeCode);
    $installer->addAttributeToSet($entity, $attributeSet->getId(), $attributeGroupId, $languageAttributeCode);
    $installer->addAttributeToSet($entity, $attributeSet->getId(), $attributeGroupId, $experienceAttributeCode);
    $installer->addAttributeToSet($entity, $attributeSet->getId(), $attributeGroupId, $discountAttributeCode);
}

$installer->endSetup();
