<?php

namespace FAV\Shop;

use SilverStripe\ORM\DataObject;
use FAV\Shop\Category;
use SilverStripe\Forms\TextField;
use SilverStripe\Forms\MoneyField;

class Product extends DataObject
{
    private static $db = [
        'Name' => 'Varchar',
        'ProductCode' => 'Varchar',
        'Price' => 'Currency'
    ];

    private static $has_one = [
        'Category' => Category::class
    ];

    private static $table_name = "Product";

    private static $singular_name = "Product";

    private static $plural_name = "Products";

    private static $searchable_fields = [
        'Name',
        'ProductCode'
    ];

    private static $summary_fields = [
        'Name',
        'Price'
    ];

    public function getCMSFields()
    {
        $fields = parent::getCMSFields();
        $fields->addFieldsToTab('Root.Main', TextField::create('Name', 'Name'));
        $fields->addFieldsToTab('Root.Main', TextField::create('ProductCode', 'Product code'));
        $fields->addFieldsToTab('Root.Main', MoneyField::create('Price', 'Price', ''));

        return $fields;
    }
}