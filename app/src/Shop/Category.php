<?php

namespace FAV\Shop;

// use SilverStripe\Security\Permission;
use SilverStripe\ORM\DataObject;
use FAV\Shop\Product;
use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\TabSet;
use SilverStripe\Forms\TextField;

class Category extends DataObject 
{

    private static $db = [
        'Title' => 'Text'
    ];

    // private static $has_many = [
    //     Product::class
    // ];

    private static $table_name = 'Category';

    private static $plural_name = "Categories";

    // public function canView($member = null) 
    // {
    //     return true;
    //     // return Permission::check('CMS_ACCESS_Company\Website\MyAdmin', 'any', $member);
    // }

    // public function canEdit($member = null) 
    // {
    //     return true;
    //     // return Permission::check('CMS_ACCESS_Company\Website\MyAdmin', 'any', $member);
    // }

    // public function canDelete($member = null) 
    // {
    //     return true;
    //     // return Permission::check('CMS_ACCESS_Company\Website\MyAdmin', 'any', $member);
    // }

    // public function canCreate($member = null) 
    // {
    //     return true;
    //     // return Permission::check('CMS_ACCESS_Company\Website\MyAdmin', 'any', $member);
    // }

    public function getCMSFields()
    {
        $fields = parent::getCMSFields();
        $fields->addFieldsToTab('Root.Main', TextField::create('Title', 'Title'));

        return $fields;
    }
}