<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2012 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller\Api\Website;

use Glitch\Mvc\Controller\AbstractRestfulController;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\Mvc\MvcEvent;
use Zend\View\Model\ViewModel;

use Zend\Debug\Debug;

class User extends AbstractRestfulController
{

    /**
     *
     * @var string|array
     */
    protected static $resourceId = 'user';

    /**
     * @var string|array
     */
    protected static $collectionId = 'users';



    public function collectionGetAction()
    {
//         $db = $this->getServiceLocator()->get('Global\Db\Adapter\Main');
//         var_dump($db->query('SELECT @@SESSION.sql_mode;'));
        $website = $this->getRequest()->getMetadata('website');
        return new ViewModel();
    }

    public function resourceGetAction()
    {
        var_dump($this->getResourceId());
        exit;
    }


    /**
     * Should be abstract
     */
    protected function getDir()
    {
        return __DIR__;
    }

}
