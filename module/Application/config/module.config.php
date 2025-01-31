<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application;

return array(
    'router' => require 'router.config.php',
    'service_manager' => require 'service-manager.config.php',
    'translator' => require 'translator.config.php',
    'controllers' => require 'controllers.config.php',
    'view_manager' => require 'view-manager.config.php',
    'console' => require 'console.config.php',
);
