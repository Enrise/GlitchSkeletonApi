<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2012 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller\Api;

use Glitch\Mvc\Controller\AbstractRestfulController;
use Zend\View\Model\ViewModel;
use \Glitch\Mvc\Router\Http\Rest\RouteMatch;

use Zend\Debug\Debug;

class Website extends AbstractRestfulController
{

    /**
     *
     * @var string|array
     */
    protected static $resourceId = 'website';

    /**
     * @var string|array
     */
    protected static $collectionId = 'websites';

    public function passThroughResource(RouteMatch $routeMatch)
    {
        list($key, $value) = parent::passThroughResource($routeMatch);

        // $mapper = $this->_getMapper();
        // $obj = $mapper->findById($key);
        $obj  = (object) array('id' => $value);

        $this->getRequest()->setMetadata($key, $obj);
    }



    public function collectionGetAction()
    {
        $website = $this->getRequest()->getMetadata('website');
        return new ViewModel();
    }

    public function resourceGetAction()
    {
        echo 'Resource of website';
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
