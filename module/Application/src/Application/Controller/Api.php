<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2012 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Glitch\Mvc\Controller\AbstractRestfulController;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\Mvc\MvcEvent;
use Zend\View\Model\ViewModel;

use Zend\Debug\Debug;

class Api extends AbstractRestfulController
{

    public function indexAction()
    {
        $view = new ViewModel(array('foo' => 'bar'));
//         $view->setTemplate('foobar');
        return $view;
    }

    /**
     * Should be abstract
     */
    protected function getDir()
    {
        return __DIR__;
    }

}
