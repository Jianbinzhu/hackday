<?php

use SilverStripe\Admin\ModelAdmin;
use FAV\Shop\Category;
use FAV\Shop\Product;
// use SilverStripe\Forms\GridField\GridFieldFilterHeader;
// use SilverStripe\Forms\GridField\GridFieldConfig;

class ProductAdmin extends ModelAdmin 
{

    private static $managed_models = [
        Category::class,
        Product::class
    ];

    private static $url_segment = 'products';

    private static $menu_title = 'Product Admin';

    // protected function getGridFieldConfig(): GridFieldConfig
    // {
    //     $config = parent::getGridFieldConfig();

    //     $config->addComponent(new GridFieldFilterHeader());

    //     return $config;
    // }
}