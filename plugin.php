<?php

add_plugin_hook('initialize', 'ResponsiveImageSelector::initialize');
add_filter('admin_navigation_main', 'ResponsiveImageSelector::addToNav');


class ResponsiveImageSelector
{

    public static function initialize()
    {
      $front = Zend_Controller_Front::getInstance();
      $front->registerPlugin(new ResponsiveImages_Controller_Plugin_SelectFilter);
    }
	
    public static function addToNav($nav)
    {
        $nav['Adv Image Options'] = uri('responsive-images');
        return $nav;
    }
}

class ResponsiveImages_Controller_Plugin_SelectFilter extends Zend_Controller_Plugin_Abstract
{
    public function preDispatch(Zend_Controller_Request_Abstract $request)
    {
        $db = get_db();
	}
}
