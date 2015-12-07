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
    'locale' => 'en_US',
    'translation_file_patterns' => array(
        array(
            'type'     => 'gettext',
            'base_dir' => __DIR__ . '/../language',
            'pattern'  => '%s.mo',
        ),
    ),
);
