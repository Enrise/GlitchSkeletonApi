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

    /**
     * @var string|array
     */
    protected static $resourceId = 'website';

    /**
     * @var string|array
     */
    protected static $collectionId = 'websites';

    public function indexAction()
    {
        return new ViewModel();
    }

    public function passThroughResource(MvcEvent $e)
    {
        list($key, $value) = parent::passThroughResource($e);

        // $mapper = $this->_getMapper();
        // $obj = $mapper->findById($key);
        $obj  = (object) array('id' => $value);

        $this->getRequest()->setMetadata($key, $obj);
    }

    public function collectionGetAction()
    {
        echo 'Collection of websites'; exit;
    }

    public function resourceGetAction()
    {
        echo 'Resource of website'; exit;
    }


    /**
     * Should be abstract
     */
    protected function getDir()
    {
        return __DIR__;
    }

}
